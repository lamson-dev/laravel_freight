<!DOCTYPE html>
<html lang="">
<head>
<title>Trang Chủ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{!! url ('.././public/user_style/layout/styles/layout.css') !!}" rel="stylesheet" type="text/css" media="all">
<link href="{!! url ('.././public/user_style/layout/styles/items.css') !!}" rel="stylesheet" type="text/css" media="all">
<link href="{!! url ('.././public/user_style/slide.css') !!}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->

@include('user.masterUser.header')
<!-- ################################################################################################ -->

@yield('slide')
<!-- ################################################################################################ -->

@include('user.masterUser.menu-left')
<!-- ################################################################################################ -->
    
@yield('content')
<!-- ################################################################################################ -->

@include('user.masterUser.footer')
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{!! url ('.././public/user_style/layout/scripts/jquery.min.js') !!}"></script>
<script src="{!! url ('.././public/user_style/layout/scripts/jquery.backtotop.js') !!}"></script>
<script src="{!! url ('.././public/user_style/layout/scripts/jquery.mobilemenu.js') !!}"></script>

<script>

  
 </script>
</body>
</html>