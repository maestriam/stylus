<div class="row 
    @isset($center) {{ 'justify-content-md-center' }} @endisset
    {{ $class ?? '' }}" >
    {{ $slot }}
</div>