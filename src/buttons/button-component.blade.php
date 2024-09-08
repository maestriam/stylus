<button 
    @if(isset($click)) wire:click="{{ $click }}" @endif
    tabindex="{{ $tabindex ?? '0'}}"
    wire:loading.class="disabled btn-progress"
    class="btn {{ isset($class) ? 'btn-' . $class : '' }} ">
        {{ $slot }}
</button>