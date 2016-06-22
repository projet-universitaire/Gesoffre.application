<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="smarty" />
    <meta name="description" content="Smarty - A Smart Auery creation">
    <meta name="author" content="Smarty">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('header')
</head>

<body @yield('body_atributes')>
       
<!-- we will put the thedi to change the theme or color skin tool-box -->


<!-- we will put the thedi to change the theme or color -->

<!-- Start: Main -->
<div id="main">
   
<!-- navbar top here hihihi by oussama -->
    @include('layouts.navbar')
<!-- end navbar top here hihihi by oussama -->

<!-- side bar of admin template (menu)  -->
    @include('layouts.sidebarleft')
<!--  end side bar of admin template (menu)  -->

    @yield('content_wrapper')

</div>
<!-- End: Main -->

@yield('script')

</body>

</html>
