
<form class="card-header-form input-group ">     
    <div class="input-group">
        <input type="text" wire:model.live="search" class="form-control " placeholder="{{ $placeholder ?? 'Search' }}" />
        @if($slot->isNotEmpty())
        <div class="input-group-append ml-3">
            <a href="#collapse-slot" 
                @isset($onClick)
                wire:click="{{ $onClick }}"
                @endisset 
                data-toggle="collapse" 
                class="btn btn-icon icon-left"
                 aria-expanded="false" 
                 aria-controls="collapse-slot">
                <i class="ion ion-android-funnel"></i> {{ $btnFilter ?? 'Filter'}}
            </a>
        </div>    
        @endif
    </div>
    <div 
        class="collapse {{ isset($collapse) && $collapse == true ? '' : 'show' }}" id="collapse-slot">
        {{ $slot }}
    </div>
</form>