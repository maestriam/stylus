<?php

namespace Maestriam\Stylus\Tests\Unit\Inputs;

use Maestriam\Stylus\Tests\TestCase;
use Illuminate\Support\Facades\Blade;

class PasswordInputTest extends TestCase
{
    public function testRender()
    {
        $data = [
            'id'    => 'id-password-test',
            'name'  => 'name-password-test',
            'model' => 'model-password-test'
        ];
        
        $html = $this->template($data);

        $this->assertStringContainsString("id=\"{$data['id']}", $html);
        $this->assertStringContainsString("for=\"{$data['id']}", $html);
        $this->assertStringContainsString("name=\"{$data['name']}", $html);
    }

    public function testTooglePassword()
    {
        $template = <<<HTML
        <div>
            <x-password-input :toggle-password="true" />    
        </div>
        HTML;

        $html = Blade::render($template); 

        $this->assertStringContainsString("Exibir senha", $html);
    }

    private function template(array $data) : string
    {
        $template = <<<HTML
        <div>
            <x-password-input :id="\$id" :name="\$name" />    
        </div>
        HTML;

        return Blade::render($template, $data); 
    }
}