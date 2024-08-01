@if(isset($label))
    <label for="{{ $id ?? 'input-id' }}">{{ $label }}</label>
@endif

<textarea     
    style="height: {{ $height ?? '75' }}px;"  
    id="{{ $id ?? 'input-id' }}" 
    type="{{ $type ?? 'text' }}" 
    name="{{ $name ?? 'input' }}"     
    tabindex="{{ $tabindex ?? '1' }}"
    class="{{ isset($class) ? $class : 'form-control' }}
           {{ $errors->has($name ?? 'input') ? 'is-invalid' : '' }}"
        
    @if (isset($model)) 
        wire:model={{  $model }} 
    @endif    
    @if (isset($required)) required @endif
    @if (isset($autofocus)) autofocus @endif
    @if (isset($readonly) && $readonly == true) readonly @endif  
>{{ $slot ?? '' }}</textarea>

<!-- error message -->
@error($name ?? 'input')
<div class="text-danger">{{ $message }}</div>
@enderror
<!-- /error message -->