<div class="fc-overflow" wire:ignore>
    <div class="fullcalendar" 
        id="fullcalendar"
        data-component="{{ $component }}"
        data-events="{{ $events ?? '[]' }}"
        data-on-click="{{ $onClick ?? 'styla::calendar.on-click' }}"
        data-on-remove="{{ $onRemove ?? 'styla::calendar.on-remove' }}"
        data-on-reload="{{ $onReload ?? 'styla::calendar.on-reload' }}"
        data-delete-modal="{{ $deleteModal ?? '[]' }}"        
        data-delete-modal-title="{{ $deleteModalType ?? 'Atenção' }}"
        data-background-color="{{ $backgroundColor ?? '#6777ef' }}" 
        data-text-color="{{ $textColor ?? '#fff' }}"  />
    </div>
</div>