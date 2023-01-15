<div class="form-group">
    
    <!-- label -->
    <label for="{{ $id ?? 'email-id' }}">{{ $label ?? 'E-mail'}}</label>
    <!-- /label -->
    
    
    <!-- input -->
    <x-input 
        :type="'email'" 
        :value="$value" 
        :name="$name"
        :tabindex="1"
        :model="$model"
        :required="true" 
        :autofocus='true'/>
    <!-- /input -->
    
    
    <!-- placeholder -->
    @error($name ?? 'email')
    <div>{{ $message }}</div>
    @enderror
</div>