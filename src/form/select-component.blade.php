<div wire:ignore>

    @if(isset($label))
        <label for="{{ $id ?? 'input-id' }}">{{ $label }}</label>
    @endif    
    <select  
        name="{{ $name ?? '' }}" 
        id="{{ $id ?? 'select-id' }}" 
        class="
            {{ isset($class) ? $class : 'form-control' }} 
            {{ $errors->has($name ?? 'input') ? ' is-invalid ' : '' }}
            select2
        "

        wire:model="{{ $model ?? '' }}">
        {{ $slot }}
    </select>
</div>
    
    <!-- error message -->
    @error($name ?? 'input')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <!-- /error message -->
