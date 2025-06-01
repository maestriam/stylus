<div class="
    @isset($lg) {{ 'col-lg-' . $lg }} @endisset  
    @isset($md) {{ 'col-md-' . $md }} @endisset  
    @isset($sm) {{ 'col-sm-' . $sm }} @endisset  
    col-{{ $col ?? '12' }}">
    {{ $slot }}
</div>