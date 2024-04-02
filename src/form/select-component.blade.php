@if(isset($label))
    <label for="{{ $id ?? 'input-id' }}">{{ $label }}</label>
@endif

<select 
    name="{{$name ?? '' }}" 
    wire:model="{{ $model ?? '' }}" 
    class="form-control select2">
    {{ $slot }}
</select>