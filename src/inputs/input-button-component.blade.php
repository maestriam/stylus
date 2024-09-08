<div class="input-group mb-3">
    <x-input :model="$model" wire:loading.attr="readonly" :enter="$click" />    
    <div class="input-group-append">
        <x-button :click="$click" :class="'primary'">
            {{ $button }}
        </x-button>
    </div>
</div>