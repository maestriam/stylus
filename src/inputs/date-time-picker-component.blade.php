@if(isset($label))
    <label for="{{ isset($name) ? $name .'-id' : 'date-time-picker-id' }}">{{ $label }}</label>
@endif

<input 
    type="text" 
    readonly
    wire:model="{{ $model }}"
    data-livewire="@this"
    value="{{ $value ?? '' }}"
    wire.loading.attr="readonly"
    tabindex="{{ $tabindex ?? '1' }}" 
    class="form-control datetimepicker"
    id="{{ isset($name) ? $name .'-id' : 'date-time-picker-id' }}" 
    name="{{ $name ?? 'date-time-picker' }}"   
         
    @if (isset($required)) required @endif
    @if (isset($autofocus)) autofocus @endif
    @if (isset($readonly) && $readonly == true) readonly @endif  
    @if (isset($enter)) {{ 'wire:keydown.enter=' . $enter }} @endif
/>

@pushOnce('scripts')
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {

    // @todo: verificar uma forma mais limpa de receber 
    // os dados do datetimepicket
    $('.datetimepicker').on('apply.daterangepicker', function() {
        let prop = $(this).attr('wire:model')
        @this.set(prop, $(this).val())
    });

});
</script>
@endpushOnce