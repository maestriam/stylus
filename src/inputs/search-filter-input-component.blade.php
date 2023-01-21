<form>
    <div class="input-group">
        
        <!-- -->
        <input type="text" 
            class="form-control" 
            wire:model="search" 
            placeholder="{{$placeholder ?? 'Search'}}" />
        <!-- -->

        <div class="input-group-btn">
            <!-- Btn search -->
            <button 
                class="btn btn-primary" 
                wire:click="click">
                <i class="fas fa-search"></i>
            </button>
            <!-- /Btn search -->
        </div>        
    </div>
</form>