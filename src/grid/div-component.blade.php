<div class="
    {{ $class ?? ''}}
    @isset($lg) {{ 'col-lg-' . $lg }} @endisset  
    @isset($md) {{ 'col-md-' . $md }} @endisset  
    @isset($sm) {{ 'col-sm-' . $sm }} @endisset  
    @isset($col) {{ 'col-' .$col }} @endisset" >
    {{ $slot }} 
</div>