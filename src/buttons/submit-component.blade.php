<div class="form-group">
    <button 
        type="submit" 
        tabindex="{{ $tabindex ?? '1'}}"
        value="{{ $value ?? null }}"
        class="btn btn-primary btn-lg btn-block" 
    >
        {{$slot ?? 'Submit' }}
    </button>
</div>