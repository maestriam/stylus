<div class="form-group">
    
    <!-- label -->
    <label for="{{ $id ?? 'email-id' }}">{{ $label ?? 'E-mail'}}</label>
    <!-- /label -->
    
    
    <!-- input -->
    <input 
        type="email" 
        required autofocus
        id="{{ $id ?? 'email-id' }}" 
        name="{{ $name ?? 'email' }}" 
        tabindex="{{ $tabindex ?? '1' }}" 
        {{ isset($model) ? 'wire:model=' . $model : null }}
        class="{{ isset($class) ? $class . 'form-control' : 'form-control' }}" 
    />
    <!-- /input -->
    
    
    <!-- error message -->
    @error($name ?? 'email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    <!-- /error message -->
</div>