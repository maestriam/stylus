<button 
    @if(isset($click)) wire:click="{{ $click }}" @endif
    tabindex="{{ $tabindex ?? '0'}}"
    id="{{ $id ?? 'btn' }}"
    wire:loading.class="disabled btn-progress"
    class="btn {{ isset($class) ? 'btn-' . $class : '' }} ">
        {{ $slot }}
</button>