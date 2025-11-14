<?php

namespace Maestriam\Stylus\Tests\Unit\Buttons;

use Illuminate\Support\Facades\Blade;
use Maestriam\Stylus\Tests\TestCase;

class ButtonComponentTest extends TestCase
{
    public function testButtonMode()
    {
        $template = <<<HTML
            <x-button>Test</x-button>        
        HTML;

        $html = Blade::render($template);
        
        $link = '<a href="#"';
        $end  = "<button";
        $init = '</button>';

        $this->assertStringContainsString($init, $html);
        $this->assertStringContainsString($end, $html);
        $this->assertStringNotContainsString($link, $html);
    }

    public function testLinkMode()
    {        
        $template = <<<HTML
            <x-button :link="true">Test</x-button>        
        HTML;

        $html = Blade::render($template);
        $button = "<button";
  
        $end  = "</a>";
        $init = '<a href="#"';

        $this->assertStringContainsString($init, $html);
        $this->assertStringContainsString($end, $html);
        $this->assertStringNotContainsString($button, $html);
    }
}