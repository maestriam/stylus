@if(isset($label))
    <label for="{{ $id ?? 'time-picker-id' }}">{{ $label }}</label>
@endif

<div>
    <input 
    @if (isset($model)) 
        @if(isset($live)) 
            {{ 'wire:model.live=' . $model }}
        @else
            {{ 'wire:model=' . $model }}
        @endif
    @endif  

    type="text" 
    name="{{ $name ?? 'time-picker-id' }}" 
    class="form-control datetimepicker" />
</div>