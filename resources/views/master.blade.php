<html>
<head>
    <meta charset="utf-8">
    {!! Helpers::css() !!}
    {!! Helpers::js() !!}

</head>
<body>
   <div class="master">
       <div class="header">
           @yield('header')
       </div>
       <div class="content"
            style="margin-top: 70px;"
               >
           @yield('content')
       </div>

       <div class="footer pull-bottom">
           @yield('footer')
       </div>
   </div>


</body>
</html>
