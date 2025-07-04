<div wire:ignore>
    @if(isset($label))
        <label for="{{ $id ?? 'input-id' }}">{{ $label }}</label>
    @endif    
    <select
        @if(isset($multiple) && $multiple == "true") 
            multiple="true" 
        @endif
        data-livewire="@this"
        name="{{ $name ?? '' }}" 
        id="{{ $id ?? 'select-id' }}" 
        data-model="{{ $model ?? '' }}"
        data-placeholder="{{ $placeholder ?? '' }}"       
        data-maximum-selection-length="{{ $maximum ?? 5 }}"
        class="select2
            {{ isset($class) ? $class : 'form-control' }} 
            {{ $errors->has($name ?? 'input') ? ' is-invalid ' : '' }}">{{ $slot }}
    </select>
</div>

<!-- error message -->
@error($name ?? 'input')
<div class="text-danger">{{ $message }}</div>
@enderror
<!-- /error message -->
