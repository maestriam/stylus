<!-- Main Content -->
<div class="main-content">        
    <section class="section">
        <div class="section-header">
            <h1>{{ $header ?? 'Blank Page' }}</h1>
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