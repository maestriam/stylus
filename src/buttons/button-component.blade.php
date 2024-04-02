<button 
    @if(isset($click)) wire:click="{{ $click }}" @endif
    wire:loading.class="disabled btn-progress"
    class="btn {{ isset($class) ? 'btn-' . $class : '' }} ">
        {{ $slot }}
</button>