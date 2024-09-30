@if(isset($label))
    <label for="{{ $id ?? 'input-id' }}">{{ $label }}</label>
@endif

<input 
    value="{{ $value ?? '' }}"
    id="{{ $id ?? 'input-id' }}" 
    type="{{ $type ?? 'text' }}" 
    name="{{ $name ?? 'input' }}"     
    tabindex="{{ $tabindex ?? '1' }}" 
    wire.loading.attr="readonly"
    class="
        {{ isset($class) ? $class : 'form-control' }}
        {{ $errors->has($name ?? 'input') ? 'is-invalid' : '' }}"
            
    @if (isset($model)) 
        @if(isset($live)) 
            {{ 'wire:model.live=' . $model }}
        @else
            {{ 'wire:model=' . $model }}
        @endif
    @endif   
         
    @if (isset($enter)) {{ 'wire:keydown.enter=' . $enter }} @endif
    @if (isset($required)) required @endif
    @if (isset($autofocus)) autofocus @endif
    @if (isset($type) && $type == 'number')  pattern="[0-9.]+" @endif
    @if (isset($readonly) && $readonly == true) readonly @endif  
/>

<!-- error message -->
@error($name ?? 'input')
<div class="text-danger">{{ $message }}</div>
@enderror
<!-- /error message -->