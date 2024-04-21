<form wire:key="search-id">
        
    <form class="card-header-form">
        <input type="text" wire:model.live="search" class="form-control" placeholder="{{ $placeholder ?? 'Search' }}">
    </form>

</form>