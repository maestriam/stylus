<div class="card {{ $class ?? '' }}">        

    <!-- header -->
    <div class="card-header">
        
        <h4>{{ $title ?? 'Card Title' }}</h4>        
        
        <div class="card-header-action">            
            @if(isset($actions))    
                {{ $actions }}        
            @endif
        </div>            
    </div>
    <!-- /header -->

    @if(isset($filters))
    <div class="card-header">
        <!-- search bar-->
        <div class="col-lg-12 pr-0 pl-0">                
            {{ $filters }}                
        </div>
        <!-- /search bar-->
    </div>
    @endif
    
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