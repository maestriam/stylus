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
</div>