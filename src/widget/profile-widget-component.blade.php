<div class="card author-box card-primary">
    <div class="card-body">
        <div class="author-box-left">        
            <x-avatar 
                :image="$image"
                :class="'rounded-circle author-box-picture'" />
            <div class="clearfix"></div>
        </div>
        <div class="author-box-details">
            <div class="author-box-name mt-4">
                <a class="text-primary">{{ $name ?? '' }}</a>
            </div>
            <div class="author-box-job">{{ $account ?? '' }}</div>
        </div>        
    </div>
    @if( isset($createdAt) || isset($email) )
    <div class="card-body p-0">
        <div class="row">
            @isset($email)
            <div class="col-3">
                <div class="tickets-list">
                    <span href="#" class="ticket-item">                    
                        <div class="ticket-info">
                            <div>E-mail</div>
                            <div class="bullet"></div>
                            <label class="text-primary">{{ $email }}</label>
                        </div>
                    </span>
                </div>
            </div>
            @endisset
            @isset($createdAt)
            <div class="col-3">
                <div class="tickets-list">
                    <span href="#" class="ticket-item">                    
                        <div class="ticket-info">
                            <div>Criado em:</div>
                            <div class="bullet"></div>
                            <label>{{ $createdAt }}</label>
                        </div>
                    </span>
                </div>
            </div>
            @endisset
        </div>
    </div>
    @endif
</div>