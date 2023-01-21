<!-- Main Content -->
<div class="main-content">        
    <section class="section">
        <div class="section-header">
            <h1>{{ $title ?? 'Blank Page' }}</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>

            {{ $slot }}

        </div>
    </section>
</div>    