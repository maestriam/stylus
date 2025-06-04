<img 
    alt="avatar" 
    @isset($image) 
        src="@public({{$image}})" 
    @else 
        src="@public('img/avatar/avatar-1.png')"     
    @endisset
    class="{{ $class ?? 'rounded-circle mr-1' }}" 
    @if(isset($width)) width="{{ $width }}" @endif
/>