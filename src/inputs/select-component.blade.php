<div wire:ignore>
    @if(isset($label))
        <label for="{{ $id ?? 'input-id' }}">{{ $label }}</label>
    @endif    
    <select  
        multiple="{{ $multiple ?? false }}"
        name="{{ $name ?? '' }}" 
        id="{{ $id ?? 'select-id' }}" 
        data-livewire="@this"
        data-model="{{ $model ?? '' }}"
        class="select2 
            {{ isset($class) ? $class : 'form-control' }} 
            {{ $errors->has($name ?? 'input') ? ' is-invalid ' : '' }}">
        {{ $slot }}
    </select>
</div>

<!-- error message -->
@error($name ?? 'input')
<div class="text-danger">{{ $message }}</div>
@enderror
<!-- /error message -->
