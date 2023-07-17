<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">
   <head>
    @include('admin.layout.head')
   
    <script type="text/javascript">
        var baseurl = '<?php echo url('/'); ?>'
    </script>
</head>
 <body>
     <div id="layout-wrapper">
         @include('admin.layout.sidebar')
         @include('admin.layout.head-nav')
 <div class="main-content">
      
         @yield('content')
         
     
      @include('admin.layout.footeafter')
      </div>
     </div>
      @include('admin.layout.footer')
  </body>
</html>