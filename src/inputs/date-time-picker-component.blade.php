@if(isset($label))
    <label for="{{ isset($name) ? $name .'-id' : 'date-time-picker-id' }}">{{ $label }}</label>
@endif

<input 
    type="text" 
    wire:model="{{ $model }}"
    data-livewire="@this"
    value="{{ $value ?? '' }}"
    wire.loading.attr="readonly"
    tabindex="{{ $tabindex ?? '1' }}" 
    class="form-control datetimepicker 
    {{ $errors->has($name ?? 'input') ? 'is-invalid' : '' }}"
    name="{{ $name ?? 'date-time-picker' }}"
    @if (isset($required)) required @endif
    @if (isset($autofocus)) autofocus @endif
    id="{{ isset($name) ? $name .'-id' : 'date-time-picker-id' }}" 
    @if (isset($readonly) && $readonly == true) readonly @endif  
    @if (isset($enter)) {{ 'wire:keydown.enter=' . $enter }} @endif    
    />

<!-- error message -->
@error($name ?? 'input')
<div class="text-danger">{{ $message }}</div>
@enderror
<!-- /error message -->

@pushOnce('scripts')
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {

    // @todo: verificar uma forma mais limpa de receber 
    // os dados do datetimepicket
    
    $('.datetimepicker').on('apply.daterangepicker', function() {
        let prop = $(this).attr('wire:model')
        @this.set(prop, $(this).val())
    });
    
    $('.datetimepicker').on('hide.daterangepicker', function() {
        let prop = $(this).attr('wire:model')
        @this.set(prop, $(this).val())
    }); 

});
</script>
@endpushOnce