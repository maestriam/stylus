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
    
    
    <!-- placeholder -->
    @error($name ?? 'email')
    <div>{{ $message }}</div>
    @enderror
</div>