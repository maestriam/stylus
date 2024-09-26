<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                
                <!-- logotipo -->
                <div class="login-brand">
                    <img 
                        alt="logo" 
                        width="100" 
                        src="@public('img/stisla-fill.svg')" 
                        class="shadow-light rounded-circle" />
                </div>
                <!-- /logotipo -->
                
                <!-- main -->
                <div class="card card-primary">
                    
                    <!-- header -->
                    <div class="card-header"><h4>{{ $title ?? 'Login'}}</h4></div>
                    <!-- header -->

                    <!-- form -->
                    <div class="card-body"> 
                        {{ $slot }}
                    </div>
                    <!-- form -->

                </div>
                <!-- /main -->
                
                @if (isset($signUp) && $signUp == true)
                <div class="mt-5 text-muted text-center">
                    Don't have an account? <a href="auth-register.html">Create One</a>
                </div>
                @endif
                
                
                <!-- /header -->
                <div class="simple-footer">
                    Copyright &copy; {{ $copyright ?? 'Maestriam' }}
                </div>
            </div>
        </div>
    </div>
</section>