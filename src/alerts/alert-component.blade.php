@if (session()->has('message'))
    <div class="alert alert-{{ $type ?? 'danger' }}">
        {{ session('message') }}
    </div>
@endif