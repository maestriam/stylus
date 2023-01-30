@if(isset($label))
    <label for="{{ $id ?? 'input-id' }}">{{ $label }}</label>
@endif

{{ $readonly ?? null }}

<input 
    value="{{ $value ?? '' }}"
    type="{{ $type ?? 'text' }}" 
    id="{{ $id ?? 'input-id' }}" 
    name="{{ $name ?? 'input' }}"     
    tabindex="{{ $tabindex ?? '1' }}" 
    
    class="
        {{ isset($class) ? $class : 'form-control' }}
        {{ $errors->has($name ?? 'input') ? 'is-invalid' : '' }}
    "         
    @if (isset($model)) {{ 'wire:model=' . $model }}  @endif    
    @if (isset($required)) required @endif
    @if (isset($autofocus)) autofocus @endif
    @if (isset($readonly) && $readonly == true) readonly @endif
    
/>

<!-- error message -->
@error($name ?? 'input')
<div class="text-danger">{{ $message }}</div>
@enderror
<!-- /error message -->