<!-- Main Content -->
<div class="main-content">        
    <section class="section">
        <div class="section-header">
            <div class="col-lg-11 p-0">
                <h1>{{ $header ?? 'Blank Page' }}</h1>
            </div>
            <div class="col-lg-1 pr-2 text-right" style="min-height: 35px;">
                <x-spinner :type="'primary'"/>
            </div>
        </div>

        <div class="section-body">
            
            @if (isset($title))
                <h2 class="section-title">{{ $title }}</h2>
            @endif

            @if (isset($subtitle))
                <p class="section-lead">{{ $subtitle }}</p>
            @endif

            {{ $slot }}

        </div>
    </section>
</div>    