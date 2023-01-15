<input 
    value="{{ $value ?? '' }}"
    type="{{ $type ?? 'text' }}" 
    id="{{ $id ?? 'input-id' }}" 
    name="{{ $name ?? 'input' }}"     
    tabindex="{{ $tabindex ?? '1' }}" 
    class="{{ isset($class) ? $class : 'form-control' }}" 

    @if (isset($model)) 'wire:model=' @endif    
    @if (isset($required)) 'required' @endif
    @if (isset($autofocus)) 'autofocus' @endif
/>