<div class="card card-statistic-1">
    <div class="card-icon bg-warning">
            <i class="far {{ isset($icon) ? 'fa-' . $icon : 'fa-clock' }}"></i>
        </div>
        <div class="card-wrap">
            <div class="card-header">
                <h4>{{ $label }}</h4>
            </div>
            <div class="card-body">
                {{ $value }}
            </div>
        </div>
    </div>
<!--  -->