<!DOCTYPE html>
<!-- 
Template Name: Job Pro
Version: 1.0.0
Author: 
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->


<head>
    @include('layouts.partials.head')
</head>

<body>
    <!-- preloader Start -->
    @include('layouts.partials.pre-loader')
    <!-- Top Scroll End -->

    <!-- Top Header Wrapper Start -->
    @include('layouts.partials.top-header')
    <!-- Top Header Wrapper End -->

    <!-- Header Wrapper Start -->
    @include('layouts.partials.header')
    <!-- Header Wrapper End -->
    
    @yield('content');

    <footer>
    @include('layouts.partials.footer')
    </footer>
    @include('layouts.partials.scripts')
</body>

</html>