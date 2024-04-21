@if (session()->has('message'))
    <div class="alert alert-{{ $type ?? 'success' }}">
        {{ session('message') }}
    </div>
@endif