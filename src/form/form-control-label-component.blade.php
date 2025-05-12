<div class="form-group row align-items-{{$align ?? 'center' }} {{ $mb ?? 'mb-1' }}">
    <label class="form-control-label col-sm-3 text-md-right">{{ $label }}</label>
    <div class="col-sm-6 col-md-9">
        <label>{{ $slot }}</label>
    </div>
</div>