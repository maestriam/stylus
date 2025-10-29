<div class="form-group" x-data="{ showPassword: false }">

    <!-- label -->
    <div class="d-block">   
        <label 
            for="{{ $id ?? 'password-id '}}" 
            class="control-label">{{$label ?? 'Password'}}
        </label>

        <!-- Esqueceu sua senha? -->
        @if(isset($forgetPassword)) 
        <div class="float-right">
            <a href="{{$forgetPassword}}" class="text-small">Forgot Password?</a>
        </div>
        @endif
        <!-- /Esqueceu sua senha? -->        
    </div>
    <!-- /label -->
    
    <!-- input -->
    <input 
        required
        :type="open ? 'text' : 'password'"
        id="{{$id ?? 'password-id'}}" 
        name="{{$name ?? 'password'}}" 
        tabindex="{{ $tabindex ?? '1' }}" 
        wire.loading.attr="readonly"
        {{ isset($model) ? 'wire:model=' . $model : null }}
        class="{{ isset($class) ? $class . 'form-control' : 'form-control' }}" 
    />
    <!-- /input -->

    @isset($togglePassword)
    <label class="mt-2" >
        <input type="checkbox" name="custom-switch-checkbox" @click="showPassword = ! showPassword" class="custom-switch-input">
        <span class="custom-switch-indicator"></span>
        <span class="custom-switch-description">Exibir senha</span>        
    </label>
    @endisset
    
    @isset($errors)
        <!-- error message -->
        @error($name ?? 'password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <!-- /error message -->
    @endisset
</div>

@if(isset($rememberMe)) 
<div class="form-group">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
        <label class="custom-control-label" for="remember-me">Remember Me</label>
    </div>
</div>
@endif