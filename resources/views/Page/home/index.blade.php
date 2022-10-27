
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')| ATShop</title>
    <link rel="stylesheet" type="text/css" href="{{asset('slider/engine1/style.css')}}" />
    <script type="text/javascript" src="{{asset('slider/engine1/jquery.js')}}"></script>
    {{--<link href="{{asset('css/cart/custom.css')}}" rel="stylesheet">--}}
    <link href="{{asset('css/htshop/common.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="{{asset('js/jquery.elevatezoom.js')}}"></script>
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body>
@include('page.header')
@yield('slider')

@yield('check_order')
@yield('home')
@yield('news')
@yield('content')
@yield('women')
@yield('shirt')
@yield('cart')
@yield('product_detail')
@yield('checkout')
@yield('contact')
@yield('product')



@include('Page.footer')

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('css/cart/style.js')}}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

</body>
</html>