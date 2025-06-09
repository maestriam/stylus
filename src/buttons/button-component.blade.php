<button 
    @isset($click) wire:click="{{ $click }}" @endisset
    tabindex="{{ $tabindex ?? '0'}}"
    id="{{ $id ?? 'btn' }}"
    wire:loading.class="disabled btn-progress"
    class="btn {{ isset($class) ? 'btn-' . $class : '' }} ">
        {{ $slot }}
</button>