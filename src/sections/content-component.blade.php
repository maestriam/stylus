<!-- Main Content -->
<div class="main-content">        
    <section class="section">
        <div class="section-header">
            <h1>{{$title ?? 'Blank Page'}}</h1>
        </div>

        <div class="section-body">

            {{ $slot }}

        </div>
    </section>
</div>    