<!DOCTYPE html>
<html>
  <head> 
    @include('admin.partials.csss')
  </head>
  <body>
    <header class="header">   
      @include('admin.partials.header')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        @include('admin.partials.sidebar_header')
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        @include('admin.partials.sidebar')
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
          </div>
        </div>

        @yield('admin.dashboard')

        <footer class="footer">
          @include('admin.partials.footer')
        </footer>
      </div>
    </div>
    @include('admin.partials.script')
  </body>
</html>