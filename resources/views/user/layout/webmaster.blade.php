<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">
   <head>
    @include('user.layout.head')
   
    <script type="text/javascript">
        var baseurl = '<?php echo url('/'); ?>'
    </script>
</head>
 <body>
     <div id="layout-wrapper">
         @include('user.layout.sidebar')
         @include('user.layout.head-nav')
 <div class="main-content">
      
         @yield('content')
         
     
      @include('user.layout.footeafter')
      </div>
     </div>
      @include('user.layout.footer')
  </body>
</html>