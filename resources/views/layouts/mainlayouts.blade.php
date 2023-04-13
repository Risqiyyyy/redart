<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   @include('layouts.head')
 </head>
 <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">    
@include('layouts.navbar')
@include('layouts.sidebar')
@yield('content')
@include('layouts.footer')
 </body>
</html>