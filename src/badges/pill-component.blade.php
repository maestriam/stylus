<div 
    title="{{ $hint ?? '' }}"
    class="badge 
           badge-pill badge-{{$type ?? 'primary' }} 
           mb-{{ $mb ?? '1' }}
           float-{{ $float ?? 'left' }}
           {{ $class ?? '' }}">
    {{ $slot }}
</div>