<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    
    <div class="sidebar-brand">      
      <a href="{{ route('maestro.admin.home') }}">{{ $title ?? 'Stisla' }}</a>
    </div>
    
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('maestro.admin.home') }}">{{ $abbr ?? 'St' }}</a>
    </div>

    <ul class="sidebar-menu">    
      <li class="menu-header">Dashboard</li>  
      @foreach($modules as $module)
      <li class="nav-item dropdown">
        <a href="/{{ strtolower($module->name()) . '/' }}" class="nav-link">
          <i class="fas fa-{{ $module->info()->icon ?? 'box' }}"></i><span>{{ $module->name() }}</span>
        </a>
      </li>
      @endforeach
    </ul>

    <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Documentation
      </a>
    </div> -->

  </aside>
</div>