<!DOCTYPE html>
<html>
<head>
    @include('layout.head')
    
    <script type="text/javascript">
        var baseurl = '<?php echo url('/'); ?>'
    </script>
</head>
 <body>
     <div class="wrapper ovh">
         @include('layout.head-navigation')
         <div class="body_content"> 
         @yield('content')
         
     
       @include('layout.footer')
       </div>
     </div>
  </body>
</html>