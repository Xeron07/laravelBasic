<!DOCTYPE html>
<html lang="en">
 <head>
   @include('partials.head')
 </head>
 <body>

 @include('partials.header')
@include('partials.nav')

@yield('content')
@include('partials.footer')
@include('partials.footer-scripts')
 </body>
</html>
