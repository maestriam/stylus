<div class="card {{ $class ?? '' }}">        

    <!-- header -->
    <div class="card-header">

        <h4>{{ $title ?? 'Card Title' }}</h4>        

        <!-- search bar-->
        <div class="card-header-form pr-3">        
            @if(isset($filters))    
                {{ $filters }}        
            @endif
        </div>
        <!-- /search bar-->
        
        <div class="card-header-action">            
            @if(isset($actions))    
                {{ $actions }}        
            @endif
        </div>            
    </div>
    <!-- /header -->
    
    <div class="card-body {{ isset($padding) ? 'p-' . $padding : '' }} ">
        {{ $slot }}
    </div>
        
    <!-- footer -->
    @if(isset($footer))
    <div class="card-footer bg-whitesmoke text-right">
        {{ $footer }}
    </div>
    @endif
    <!-- /footer -->
</div>