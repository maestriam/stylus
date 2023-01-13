<div class="form-group">

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
        id="{{$id ?? 'password'}}" 
        required
        type="password" 
        name="{{$name ?? 'email'}}" 
        tabindex="{{ $tabindex ?? '1' }}" 
        {{ isset($model) ? 'wire:model=' . $model : null }}
        class="{{ isset($class) ? $class . 'form-control' : 'form-control' }}" 
    />
    <!-- /input -->
    
    <div class="invalid-feedback">
        {{$placeholder ?? 'please fill in your password' }}
    </div>
</div>

@if(isset($rememberMe)) 
<div class="form-group">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
        <label class="custom-control-label" for="remember-me">Remember Me</label>
    </div>
</div>
@endif