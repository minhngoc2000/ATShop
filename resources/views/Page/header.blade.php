
<header class="site-header">
@if (count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
       @if (Session()->has('flash_level'))
        <div class="alert alert-success" style="text-align: center;width: 300px;margin: 10px 40%;position: absolute;z-index: 999">
            <ul>
                <a class="close" data-dismiss="alert" href="#">x</a>

                {!! Session::get('flash_massage') !!}
            </ul>
        </div>
        @endif

    <div class="header-top">
        <div class="container">
            <p class="pull-left">
            @if(Session::has('account'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Xin chào
                        <i class="fa fa-user"></i>&nbsp;&nbsp;
                        <span style="color:red ;font-weight: bold">{{Session::get('account')}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li style="float: none"><a href="{{url('thong-tin-tai-khoan')}}"> Thông tin tài khoản</a></li>
                        <li style="float: none"><a href="{{route('logout')}}"> Đăng xuất</a></li>

                    </ul>

                 @else

                    <i style="color: black" class="fas fa-hand-holding-heart"></i>&nbsp;&nbsp;Xin chào quý khách hàng!</p>
            @endif
            <div class="pull-right">
                <ul>
                    <li>
                        <i class="icon-lock fa fa-phone"></i>
                        <a href="">&nbsp; HOTLINE</a></li>
                    @if(!Session::has('account'))


                        <li>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <a href="#"  data-toggle="modal" data-target="#dangky">&nbsp; ĐĂNG KÝ</a></li>
                    <div id="dangky" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Đăng ký tài khoản</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{route('customRegister')}}">
                                        {!! csrf_field() !!}

                                        <div class="form-group">
                                            <label style="font-size: 15px;">Tên đăng nhập</label>
                                            <input required type="text" class="form-control" name="username" placeholder="Tên đăng nhập">
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px;">Mật khẩu</label>
                                            <input  required type="password" class="form-control" name="password" placeholder="Mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px;">Địa chỉ email <email></email></label>
                                            <input required type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px;">Họ tên</label>

                                            <input required type="text" class="form-control" name="fullname" placeholder="Họ và tên">
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px;">Số điện thoại</label>
                                            <input required type="tel" class="form-control" name="phone" placeholder="Số di động">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-warning text-uppercase"><strong>Đăng ký tài khoản</strong></button>
                                        </div>
                                    </form>
                                    {{--<div class="signup-form"><!--sign up form-->--}}
                                    {{--<form action="{{route('customRegister')}}" method="post">--}}
                                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                                    {{--{!! csrf_field() !!}--}}
                                    {{--<input type="text" name="username" placeholder="Tài khoản"/>--}}
                                    {{--<input type="email" name="email" placeholder="Địa chỉ email"/>--}}
                                    {{--<input type="password" name="password" placeholder="Mật khẩu"/>--}}
                                    {{--<div>--}}
                                    {{--<button  style="float: left;" type="submit" class="btn btn-default">Đăng ký</button>--}}

                                    {{--<button  style="float: left;margin-left: 10%!important;"  type="reset" class="btn btn-default">Nhập lại</button>--}}
                                    {{--</div>--}}
                                    {{--</form>--}}
                                    {{--</div><!--/sign up form-->--}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li>
                        <i class="icon-lock fa fa-sign-in"></i>
                        <a href="#" data-toggle="modal" data-target="#login">&nbsp; ĐĂNG NHẬP</a></li>
                    <div id="login" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Đăng nhập tài khoản</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('customLogin')}}" method="post">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-warning text-uppercase"><strong>Đăng nhập</strong></button>
                                        </div>
                                        <div class="form-group text-center">
                                            <a href="">Quên mật khẩu?</a>
                                        </div>
                                        <div class="form-group text-muted">
                                            <p class="separator text-center">
                                                <i>Hoặc đăng nhập với</i>
                                            </p>
                                            <a href="{{ URL::to('auth/facebook') }}" class="btn btn-block btn-fb">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook
                                            </a>
                                            <a class="btn btn-block btn-gplus signin-by-google-class">
                                                <i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li>

                    @endif
                        <a href="{{route('danh-sach-yeu-thich')}}" title="Sản phẩm yêu thích"> <i class="icon-lock fa fa-heart"></i>&nbsp; YÊU THÍCH</a></li>


                </ul>
            </div>
        </div>
    </div>
    <div class="masthead">
        <div class="container">
            <div class="row">
                <div class="logo-wrap">
                    <a href="#" class="hidden-xs"><img class="img-responsive" src="https://serv1.alitaobao.vn/dist/images/logo.png" alt="Trang chủ alitaobao.vn"></a>
                    <a href="#" class="visible-xs pull-left"><img src="https://serv1.alitaobao.vn/dist/images/logo-xs.png" alt="Trang chủ alitaobao.vn"></a>
                    <button class="navbar-toggle collapsed toggle-button visible-xs pull-left " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-6 col-md-offset-1">
                    <form class="search-box" method="get" action="{{route('find')}}">
                        {!! csrf_field() !!}
                        <input type="text" class="search-keywords form-control" name="keyword" placeholder="Nhập tên hoặc mã sản phẩm..." value="">
                        <button type="submit" class="btn btn-ali"><i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <div class="search-suggestions hidden-xs">
                        <span>Tìm kiếm nhiều:</span>
                        <a class="text-muted" href="#">áo sơ mi nam</a>,
                        <a class="text-muted" href="#">áo thun nam</a>,
                        <a class="text-muted" href="#">túi xách nữ</a>,
                        <a class="suggest-more pull-right hidden-sm" href="#">Xem thêm <i class="fa fa-angle-double-right"></i></a>
                    </div>

                    <div class="hotline hidden-xs">
                        <i class="glyphicon glyphicon-phone-alt"></i> <strong>(024-3) 511.33.33</strong>
                        <i style="font-size: 11px; color: #555;">(Thời gian làm việc: 8:30 - 17:30 các ngày trong
                            tuần)</i>
                    </div>
                </div>
                <div class="shopping-cart" >
                    <a class="btn btn-block btn-default shopping-cart__icon" href="{{route('list-cart')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="hidden-xs">Giỏ hàng</span>
                        <span class="" id="cart_count">{{Cart::count()}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
    <ul class="nav navbar-nav main-menu">
        <li class="active"><a href="{{url('/')}}">Trang Chủ</a></li>
        @foreach($category as $cat)
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$cat->Name}}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                @foreach($cat->get_subcategory as $subcat)

                <li><a href="{{route('danh-muc',['name'=>$subcat->Name,'id'=>$subcat->Id])}}">{!!$subcat->Name !!}</a></li>
                    @endforeach

            </ul>
        </li>
        @endforeach
        <li><a href="#">Giới Thiệu</a></li>
        <li><a href="{{url('contact')}}">Liên Hệ</a></li>
        <li><a href="#">Tra cứu đơn hàng</a></li>
            </a></li>

    </ul>
</div><!--/.nav-collapse -->

</div>

<script>


         var engine = new Bloodhound({
             remote: {
                 url:'<?php echo URL::to("api/product/find?q=%QUERY%") ?>',
                 wildcard: '%QUERY%'
             },
             datumTokenizer: Bloodhound.tokenizers.whitespace('Name'),
             queryTokenizer: Bloodhound.tokenizers.whitespace
         });

        $(".search-keywords").typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            source:engine.ttAdapter(),
            name: 'engine',
            displayKey: 'id',
            templates: {
                suggestion: function (data) {
                    var url = '{{ route("find", ["Id"=>"id"]) }}';

                    url = url.replace('id',data.Id);
                    return '<a href="'+url+'" class="list-group-item ">' + data.Name+'</a>';



                }
            }
        });


</script>
<script>

    $('.list-group-item').onclick(function () {
        console.log($('.tt-selectable').html());

        $(".tt-input").val( $('.tt-selectable').html());
    })
</script>


<style>
    .nav>li>a:hover{
        background: #5150b7;
        transition: all .3s;
    }
    .nav>li{
        padding: 0px 10px;
    }
    span.twitter-typeahead .tt-menu,
    span.twitter-typeahead .tt-dropdown-menu {
        cursor: pointer;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 100%;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        font-size: 14px;
        text-align: left;
        background-color: #ffffff;
        /*border: 1px solid #cccccc;*/
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        background-clip: padding-box;
    }
    span.twitter-typeahead .tt-suggestion {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.42857143;
        color: #333333;
        white-space: nowrap;
    }
    span.twitter-typeahead .tt-suggestion.tt-cursor,
    span.twitter-typeahead .tt-suggestion:hover,
    span.twitter-typeahead .tt-suggestion:focus {
        color: #ffffff;
        text-decoration: none;
        outline: 0;
        background-color: #337ab7;
    }
    .input-group.input-group-lg span.twitter-typeahead .form-control {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
    }
    .input-group.input-group-sm span.twitter-typeahead .form-control {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }
    span.twitter-typeahead {
        width: 100%;
    }
    .input-group span.twitter-typeahead {
        display: block !important;
        height: 34px;
    }
    .input-group span.twitter-typeahead .tt-menu,
    .input-group span.twitter-typeahead .tt-dropdown-menu {
        top: 32px !important;
    }
    .input-group span.twitter-typeahead:not(:first-child):not(:last-child) .form-control {
        border-radius: 0;
    }
    .input-group span.twitter-typeahead:first-child .form-control {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .input-group span.twitter-typeahead:last-child .form-control {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    .input-group.input-group-sm span.twitter-typeahead {
        height: 30px;
    }
    .input-group.input-group-sm span.twitter-typeahead .tt-menu,
    .input-group.input-group-sm span.twitter-typeahead .tt-dropdown-menu {
        top: 30px !important;
    }
    .input-group.input-group-lg span.twitter-typeahead {
        height: 46px;
    }
    .input-group.input-group-lg span.twitter-typeahead .tt-menu,
    .input-group.input-group-lg span.twitter-typeahead .tt-dropdown-menu {
        top: 46px !important;
    }
    /*.tt-open{*/
        /*display: inline-block;*/
    /*}*/
    /*.twitter-typeahead{*/
        /*background: red;*/
        /*display: inline!important;*/
    /*}*/

    .main-menu{
        background: #2b2a79;
    }
    .collapse{

        background: #2b2a79;
    }
    .navbar-nav>li>a{
        color: #fff;
    }
    /* line 1, ../scss/app.scss */
    body {
        font-size: 12px;
        color: #333;
        background-color: #fff;
    }

    /* line 8, ../scss/app.scss */
    a:hover, a:focus {
        color: #f57c00;
        text-decoration: none !important;
    }

    input[type="checkbox"] {
        margin-top: 2px;
    }

    /* line 81, ../scss/app.scss */
    .separator {
        position: relative;
        text-align: center;
    }
    /* line 85, ../scss/app.scss */
    .separator i, .separator a, .separator span {
        position: relative;
        z-index: 1;
        padding: 0 10px;
        color: #333;
        background-color: #fff;
    }

    /* line 94, ../scss/app.scss */
    .separator:after {
        position: absolute;
        content: "";
        top: 50%;
        left: 0;
        width: 100%;
        height: 1px;
        background-color: #aaa;
    }

    .img-wrap img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: block;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
        transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
        -ms-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    /* line 129, ../scss/app.scss */
    .img-wrap img:hover {
        -ms-transform: scale(1.05);
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }

    /* line 137, ../scss/app.scss */
    .add-favourite {
        display: inline-block;
        color: #fff;
        font-size: 12px;
        border-radius: 2px;
        border: 1px solid #f44336;
        background-color: #f44336;
    }
    /* line 145, ../scss/app.scss */
    .add-favourite:hover {
        color: #f44336;
        border-color: #f44336;
        background-color: #fff;
    }

    /* line 152, ../scss/app.scss */
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12, .container, .container-fluid {
        padding-right: 10px;
        padding-left: 10px;
    }

    /* line 157, ../scss/app.scss */
    .row {
        margin-right: -10px;
        margin-left: -10px;
    }

    /* line 162, ../scss/app.scss */
    .list-default, .top-category .zone-cat ul, .box-user .box-uer__control ul, .best-seller .best-seller__list, .floor-market .floor-category ul, .floor-market .zone-top-offers ul, .crumbs-bar .crumbs-nav, .selector .attr-line .attrValues ul, .prd-category ul, .prd-choose__attrs .choose-attrs .choose-color ul, .prd-wrap .extra-desc-info ul, .list-link ul, .user-control .shop-wish-list .item ul, .bank-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    /* line 168, ../scss/app.scss */
    .toggle-button {
        padding: 4px 10px;
        font-size: 18px;
        color: #c40000;
        border: none;
        background: transparent;
    }

    /* line 176, ../scss/app.scss */
    .overlay {
        position: fixed;
        z-index: 9;
        top: 0;
        left: 0;
        overflow: hidden;
        height: 0;
        background-color: #000;
        opacity: 0.7;
        -webkit-transition: opacity 0.3s, width 0s 0.3s, height 0s 0.3s;
        transition: opacity 0.3s, width 0s 0.3s, height 0s 0.3s;
    }
    /* line 188, ../scss/app.scss */
    .overlay.is-active {
        width: 100%;
        height: 100%;
        opacity: 0.7;
        -webkit-transition: opacity 0.3s;
        transition: opacity 0.3s;
    }

    /* line 197, ../scss/app.scss */
    .menu-utility {
        color: #555;
        border-bottom: 1px solid #eee;
        background-color: #f8f8f8;
    }
    /* line 204, ../scss/app.scss */
    .menu-utility ul li a {
        padding: 5px 8px;
        color: #555;
    }
    /* line 208, ../scss/app.scss */
    .menu-utility ul li a:hover {
        color: #f57c00;
    }
    /* line 214, ../scss/app.scss */
    .menu-utility ul .wallet-balance {
        padding: 6px 8px;
    }
    /* line 219, ../scss/app.scss */
    .menu-utility ul .notification .dropdown-content {
        min-width: 320px;
    }
    /* line 222, ../scss/app.scss */
    .menu-utility ul .notification .dropdown-content li {
        padding-bottom: 10px;
        margin-bottom: 10px;
        border-bottom: 1px dotted #ccc;
    }
    /* line 226, ../scss/app.scss */
    .menu-utility ul .notification .dropdown-content li a {
        display: inline-block;
        padding: 0;
    }
    /* line 231, ../scss/app.scss */
    .menu-utility ul .notification .dropdown-content li p {
        margin-bottom: 0;
    }
    /* line 235, ../scss/app.scss */
    .menu-utility ul .notification .dropdown-content li span {
        font-size: 11px;
    }
    /* line 242, ../scss/app.scss */
    .menu-utility ul .notification .dropdown-content li:last-child {
        padding-bottom: 0;
        margin-bottom: 0;
        border-bottom: none;
    }
    /* line 251, ../scss/app.scss */
    .menu-utility ul .account-welcome span {
        display: block;
        padding: 6px 8px 0 0;
    }
    /* line 258, ../scss/app.scss */
    .menu-utility .top-nav {
        margin-right: -8px;
    }
    /* line 262, ../scss/app.scss */
    .menu-utility .dropdown {
        position: relative;
    }
    /* line 265, ../scss/app.scss */
    .menu-utility .dropdown a {
        border-left: 1px solid #f8f8f8;
        border-right: 1px solid #f8f8f8;
    }
    /* line 270, ../scss/app.scss */
    .menu-utility .dropdown .dropdown-content {
        display: none;
        position: absolute;
        z-index: 1000;
        top: 30px;
        left: 0;
        min-width: 160px;
        padding: 10px;
        list-style: none;
        border-top: 1px solid #fff;
        border-left: 1px solid #eee;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
        background-color: #fff;
    }
    /* line 286, ../scss/app.scss */
    .menu-utility .dropdown .dropdown-content li a {
        display: block;
        padding: 5px 0;
        border: none;
    }
    /* line 296, ../scss/app.scss */
    .menu-utility .dropdown:hover a {
        border-color: #eee;
        background-color: #fff;
    }
    /* line 301, ../scss/app.scss */
    .menu-utility .dropdown:hover .dropdown-content {
        display: block;
    }

    /* line 307, ../scss/app.scss */
    .masthead {
        padding: 10px 0;
    }
    /* line 310, ../scss/app.scss */
    .masthead .logo-wrap {
        float: left;
        padding-left: 10px;
    }
    /* line 315, ../scss/app.scss */
    .masthead .search-box {
        position: relative;
    }
    /* line 320, ../scss/app.scss */
    .masthead .search-box .search-keywords {
        font-size: 12px;
        padding-right: 49px;
        border: 2px solid #c40000;
    }
    /* line 326, ../scss/app.scss */
    .masthead .search-box .btn-ali {
        position: absolute;
        top: 0;
        right: 0;
        color: #fff;
        font-size: 14px;
        background-color: #c40000;
    }
    /* line 336, ../scss/app.scss */
    .masthead .shopping-cart {
        float: right;
        width: 16.66666667%;
        padding-right: 10px;
    }
    /* line 341, ../scss/app.scss */
    .masthead .shopping-cart .shopping-cart__icon {
        color: #c40000;
        font-weight: 700;
        font-size: 12px;
        text-transform: uppercase;
    }
    /* line 347, ../scss/app.scss */
    .masthead .shopping-cart .shopping-cart__icon .fa-shopping-cart {
        font-size: 16px;
    }
    /* line 353, ../scss/app.scss */
    .masthead .hotline {
        font-size: 18px;
    }
    /* line 356, ../scss/app.scss */
    .masthead .hotline strong {
        color: #c40000;
    }

    /* line 362, ../scss/app.scss */
    .alitaobao-nav {
        min-height: 40px;
        background-color: #c40000;
    }
    /* line 366, ../scss/app.scss */
    .alitaobao-nav a {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
        font-size: 14px;
        color: #fff;
    }
    /* line 373, ../scss/app.scss */
    .alitaobao-nav .all-category {
        display: block;
        font-weight: 700;
        background-color: #a60000;
    }
    /* line 382, ../scss/app.scss */
    .alitaobao-nav .nav li a:hover, .alitaobao-nav .nav li a:focus {
        background-color: transparent;
    }

    /* line 390, ../scss/app.scss */
    .top-category {
        padding-top: 10px;
        background-color: #f8f8f8;
        border-left: 1px solid #E2E2E2;
        border-right: 1px solid #E2E2E2;
        border-bottom: 1px solid #E2E2E2;
    }
    /* line 397, ../scss/app.scss */
    .top-category .zone-cat {
        padding: 0 5px;
        border-bottom: 1px dotted #ccc;
    }
    /* line 405, ../scss/app.scss */
    .top-category .zone-cat .zone-header a {
        font-weight: 700;
    }
    /* line 408, ../scss/app.scss */
    .top-category .zone-cat .zone-header a:hover, .top-category .zone-cat .zone-header a:focus {
        color: #f57c00;
    }
    /* line 414, ../scss/app.scss */
    .top-category .zone-cat h3 {
        margin-top: 0;
        font-size: 12px;
    }
    /* line 418, ../scss/app.scss */
    .top-category .zone-cat h3 a {
        color: #333;
    }
    /* line 421, ../scss/app.scss */
    .top-category .zone-cat h3 a:hover, .top-category .zone-cat h3 a:focus {
        color: #f57c00;
    }
    /* line 427, ../scss/app.scss */
    .top-category .zone-cat ul {
        overflow: hidden;
    }
    /* line 432, ../scss/app.scss */
    .top-category .zone-cat ul li {
        float: left;
        width: 50%;
    }
    /* line 439, ../scss/app.scss */
    .top-category .last {
        margin-bottom: 0;
        border-bottom: none;
    }

    /* line 445, ../scss/app.scss */
    .box-user {
        margin-top: 10px;
    }
    /* line 450, ../scss/app.scss */
    .box-user .nav-tabs li a {
        color: #333;
    }
    /* line 456, ../scss/app.scss */
    .box-user .nav-tabs li.active a {
        color: #c40000;
        font-weight: 700;
    }
    /* line 463, ../scss/app.scss */
    .box-user .tab-content {
        padding: 10px;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }
    /* line 469, ../scss/app.scss */
    .box-user .tab-content .form-group {
        margin-bottom: 10px;
    }
    /* line 473, ../scss/app.scss */
    .box-user .tab-content .btn-fb {
        text-align: left;
        color: #354e84;
        border: 1px solid #354e84;
    }
    /* line 478, ../scss/app.scss */
    .box-user .tab-content .btn-fb .fa {
        font-size: 16px;
    }
    /* line 483, ../scss/app.scss */
    .box-user .tab-content .btn-fb:hover {
        color: #fff;
        background-color: #354e84;
    }
    /* line 488, ../scss/app.scss */
    .box-user .tab-content .btn-gplus {
        text-align: left;
        color: #db402c;
        border: 1px solid #db402c;
    }
    /* line 493, ../scss/app.scss */
    .box-user .tab-content .btn-gplus .fa {
        font-size: 16px;
    }
    /* line 498, ../scss/app.scss */
    .box-user .tab-content .btn-gplus:hover {
        color: #fff;
        background-color: #db402c;
    }
    /* line 504, ../scss/app.scss */
    .box-user .panel {
        border-radius: 0;
    }
    /* line 507, ../scss/app.scss */
    .box-user .panel .panel-heading {
        font-size: 13px;
    }
    /* line 510, ../scss/app.scss */
    .box-user .panel .panel-heading .badge {
        font-size: 11px;
        background-color: #bbb;
    }
    /* line 514, ../scss/app.scss */
    .box-user .panel .panel-heading .badge:hover {
        background-color: #f57c00;
    }
    /* line 529, ../scss/app.scss */
    .box-user .box-uer__control ul li:last-child {
        margin-bottom: 0;
    }

    /* line 537, ../scss/app.scss */
    .best-seller h3 {
        margin-top: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
        font-size: 13px;
        font-weight: 700;
        color: #c40000;
    }
    /* line 549, ../scss/app.scss */
    .best-seller .best-seller__list li {
        display: inline-block;
        border-left: 1px solid #ddd;
    }
    /* line 555, ../scss/app.scss */
    .best-seller .best-seller__list li a {
        padding: 0 10px;
        color: #333;
        font-size: 13px;
    }
    /* line 562, ../scss/app.scss */
    .best-seller .best-seller__list li:first-child {
        border-left: none;
    }

    /* line 568, ../scss/app.scss */
    .home-slider .slick-dots {
        bottom: 0;
    }

    /* line 573, ../scss/app.scss */
    .home-slider img {
        max-width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }

    /* line 581, ../scss/app.scss */
    .slick-dots li {
        margin: 0 1px;
    }

    /* line 585, ../scss/app.scss */
    .slick-dots li button:before {
        font-size: 14px;
        color: #aaa;
        opacity: 1;
    }

    /* line 591, ../scss/app.scss */
    .slick-dots li.slick-active button:before,
    .slick-dots li button:hover:before,
    .slick-dots li button:focus:before {
        opacity: 1;
        color: #c40000;
    }

    /* line 598, ../scss/app.scss */
    .slick-dotted.slick-slider {
        margin-bottom: 20px;
    }

    /* line 602, ../scss/app.scss */
    .box-collection {
        position: relative;
    }
    /* line 605, ../scss/app.scss */
    .box-collection h3 {
        margin-top: 0;
        font-size: 24px;
    }
    /* line 610, ../scss/app.scss */
    .box-collection .box-collection__item {
        position: relative;
    }
    /* line 616, ../scss/app.scss */
    .box-collection .box-collection__item .img-featured .collection-name {
        position: absolute;
        z-index: 1;
        bottom: 33%;
        right: 20px;
        padding: 5px 15px;
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        background-color: rgba(196, 0, 0, 0.75);
    }
    /* line 628, ../scss/app.scss */
    .box-collection .box-collection__item .img-featured .img-wrap {
        height: 300px;
        border: 1px solid #e2e2e2;
    }
    /* line 634, ../scss/app.scss */
    .box-collection .box-collection__item .box-collection__thumbnail {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        padding: 0 10px;
    }
    /* line 641, ../scss/app.scss */
    .box-collection .box-collection__item .box-collection__thumbnail .img-wrap {
        max-width: 100%;
        height: 74px;
        border: 1px solid #fff;
    }
    /* line 646, ../scss/app.scss */
    .box-collection .box-collection__item .box-collection__thumbnail .img-wrap .box-price {
        position: absolute;
        z-index: 1;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 4px 2px;
        color: #c40000;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.75);
    }

    /* line 665, ../scss/app.scss */
    .floor-market .floor-header {
        padding-bottom: 8px;
        border-bottom: 2px solid #e34040;
    }
    /* line 669, ../scss/app.scss */
    .floor-market .floor-header h2 {
        margin: 0;
        font-size: 18px;
    }
    /* line 673, ../scss/app.scss */
    .floor-market .floor-header h2 a {
        color: #333;
    }
    /* line 679, ../scss/app.scss */
    .floor-market .floor-category {
        float: left;
        width: 16.66666667%;
        height: 440px;
        background-color: #e34040;
    }
    /* line 690, ../scss/app.scss */
    .floor-market .floor-category .sub li {
        margin-bottom: 1px;
    }
    /* line 693, ../scss/app.scss */
    .floor-market .floor-category .sub li .sub-header {
        display: block;
        width: 185px;
        height: 40px;
        padding-left: 15px;
        line-height: 40px;
        font-size: 14px;
        color: #fff;
        background: url(sprite-global.png)/*tpa=https://serv1.alitaobao.vn/dist/images/sprite-global.png*/ -30px 0 no-repeat;
    }
    /* line 704, ../scss/app.scss */
    .floor-market .floor-category .sub li ul {
        display: none;
    }
    /* line 709, ../scss/app.scss */
    .floor-market .floor-category .sub li ul li {
        float: left;
        width: 50%;
        margin-bottom: 0;
        height: 23px;
        line-height: 22px;
        overflow: hidden;
    }
    /* line 717, ../scss/app.scss */
    .floor-market .floor-category .sub li ul li a {
        display: block;
        padding: 4px 2px 4px 5px;
        color: #fff;
    }
    /* line 728, ../scss/app.scss */
    .floor-market .floor-category .sub li.active .sub-header,
    .floor-market .floor-category .sub li:hover .sub-header {
        position: relative;
        width: 215px;
        color: #e34040;
        background: url(sprite-global.png)/*tpa=https://serv1.alitaobao.vn/dist/images/sprite-global.png*/ -6px -240px no-repeat;
    }
    /* line 735, ../scss/app.scss */
    .floor-market .floor-category .sub li.active ul,
    .floor-market .floor-category .sub li:hover ul {
        display: block;
    }
    /* line 744, ../scss/app.scss */
    .floor-market .offer-category .btn-group .btn-default {
        border-top: none;
        border-left: none;
        border-color: #ddd;
        color: #666;
        background-color: #f5f5f5;
    }
    /* line 752, ../scss/app.scss */
    .floor-market .offer-category .btn-group .offer-category__icon {
        display: inline-block;
        width: 24px;
        height: 24px;
        background: url(sprite-global.png)/*tpa=https://serv1.alitaobao.vn/dist/images/sprite-global.png*/ no-repeat;
    }
    /* line 759, ../scss/app.scss */
    .floor-market .offer-category .btn-group .qanu {
        background-position: -24px -320px;
    }
    /* line 763, ../scss/app.scss */
    .floor-market .offer-category .btn-group .vd {
        background-position: -72px -320px;
    }
    /* line 767, ../scss/app.scss */
    .floor-market .offer-category .btn-group .qan {
        background-position: -120px -320px;
    }
    /* line 771, ../scss/app.scss */
    .floor-market .offer-category .btn-group .dl {
        background-position: -168px -320px;
    }
    /* line 775, ../scss/app.scss */
    .floor-market .offer-category .btn-group .dn {
        background-position: -24px -344px;
    }
    /* line 779, ../scss/app.scss */
    .floor-market .offer-category .btn-group .offer-category__name {
        display: block;
    }
    /* line 784, ../scss/app.scss */
    .floor-market .offer-category .btn-group:nth-child(1) {
        border-left: 1px solid #ccc;
    }
    /* line 789, ../scss/app.scss */
    .floor-market .offer-category .active .btn-default {
        color: #fff;
        border-bottom-color: #e34040;
        border-right-color: #e34040;
        background-color: #e34040;
    }
    /* line 796, ../scss/app.scss */
    .floor-market .offer-category .active .qanu {
        background-position: 0 -320px;
    }
    /* line 800, ../scss/app.scss */
    .floor-market .offer-category .active .vd {
        background-position: -48px -320px;
    }
    /* line 804, ../scss/app.scss */
    .floor-market .offer-category .active .qan {
        background-position: -96px -320px;
    }
    /* line 808, ../scss/app.scss */
    .floor-market .offer-category .active .dl {
        background-position: -144px -320px;
    }
    /* line 812, ../scss/app.scss */
    .floor-market .offer-category .active .dn {
        background-position: 0 -344px;
    }
    /* line 817, ../scss/app.scss */
    .floor-market .offer-category .active:nth-child(1) {
        border-left-color: #e34040;
    }
    /* line 822, ../scss/app.scss */
    .floor-market .zone-top-offers {
        float: left;
        width: 83.33333333%;
        height: 440px;
    }
    /* line 827, ../scss/app.scss */
    .floor-market .zone-top-offers .tab-content {
        display: none;
    }
    /* line 831, ../scss/app.scss */
    .floor-market .zone-top-offers .tab-content.active {
        display: block;
    }
    /* line 838, ../scss/app.scss */
    .floor-market .zone-top-offers ul li {
        float: left;
        width: 20%;
        height: 220px;
        overflow: hidden;
        padding: 20px 20px 0;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }
    /* line 848, ../scss/app.scss */
    .floor-market .zone-top-offers ul li .offer-wrap .img-wrap {
        height: 150px;
    }
    /* line 853, ../scss/app.scss */
    .floor-market .zone-top-offers ul li h4 {
        margin: 5px 0 3px;
        height: 20px;
        line-height: 20px;
        overflow: hidden;
    }
    /* line 859, ../scss/app.scss */
    .floor-market .zone-top-offers ul li h4 a {
        font-size: 12px;
        font-weight: 700;
        color: #666;
    }
    /* line 864, ../scss/app.scss */
    .floor-market .zone-top-offers ul li h4 a:hover, .floor-market .zone-top-offers ul li h4 a:focus {
        color: #f57c00;
    }
    /* line 871, ../scss/app.scss */
    .floor-market .zone-top-offers ul li .price strong {
        color: #c40000;
    }

    /* line 881, ../scss/app.scss */
    .floor-market-blue .floor-header {
        border-bottom: 2px solid #1f81cc;
    }
    /* line 885, ../scss/app.scss */
    .floor-market-blue .floor-category {
        background-color: #1f81cc;
    }
    /* line 890, ../scss/app.scss */
    .floor-market-blue .floor-category .sub li .sub-header {
        background-position: -30px -40px !important;
    }
    /* line 897, ../scss/app.scss */
    .floor-market-blue .floor-category .sub li.active .sub-header,
    .floor-market-blue .floor-category .sub li:hover .sub-header {
        color: #1f81cc;
        background-position: -6px -200px !important;
    }
    /* line 907, ../scss/app.scss */
    .floor-market-blue .offer-category .btn-group .gdnu {
        background-position: -24px -368px;
    }
    /* line 911, ../scss/app.scss */
    .floor-market-blue .offer-category .btn-group .gdn {
        background-position: -72px -368px;
    }
    /* line 915, ../scss/app.scss */
    .floor-market-blue .offer-category .btn-group .tvtlnu {
        background-position: -120px -368px;
    }
    /* line 919, ../scss/app.scss */
    .floor-market-blue .offer-category .btn-group .tvtln {
        background-position: -168px -368px;
    }
    /* line 925, ../scss/app.scss */
    .floor-market-blue .offer-category .active .btn-default {
        border-bottom-color: #1f81cc;
        border-right-color: #1f81cc;
        background-color: #1f81cc;
    }
    /* line 931, ../scss/app.scss */
    .floor-market-blue .offer-category .active .gdnu {
        background-position: 0 -368px;
    }
    /* line 935, ../scss/app.scss */
    .floor-market-blue .offer-category .active .gdn {
        background-position: -48px -368px;
    }
    /* line 939, ../scss/app.scss */
    .floor-market-blue .offer-category .active .tvtlnu {
        background-position: -96px -368px;
    }
    /* line 943, ../scss/app.scss */
    .floor-market-blue .offer-category .active .tvtln {
        background-position: -144px -368px;
    }
    /* line 948, ../scss/app.scss */
    .floor-market-blue .offer-category .active:nth-child(1) {
        border-left-color: #1f81cc;
    }

    /* line 955, ../scss/app.scss */
    .floor-market-pink .floor-header {
        border-bottom: 2px solid #ec468e;
    }
    /* line 959, ../scss/app.scss */
    .floor-market-pink .floor-category {
        background-color: #ec468e;
    }
    /* line 964, ../scss/app.scss */
    .floor-market-pink .floor-category .sub li .sub-header {
        background-position: -30px -80px !important;
    }
    /* line 971, ../scss/app.scss */
    .floor-market-pink .floor-category .sub li.active .sub-header,
    .floor-market-pink .floor-category .sub li:hover .sub-header {
        color: #ec468e;
        background-position: -6px -160px !important;
    }
    /* line 981, ../scss/app.scss */
    .floor-market-pink .offer-category .btn-group .dh {
        background-position: -24px -392px;
    }
    /* line 985, ../scss/app.scss */
    .floor-market-pink .offer-category .btn-group .km {
        background-position: -72px -392px;
    }
    /* line 989, ../scss/app.scss */
    .floor-market-pink .offer-category .btn-group .vl {
        background-position: -120px -392px;
    }
    /* line 993, ../scss/app.scss */
    .floor-market-pink .offer-category .btn-group .pkt {
        background-position: -168px -392px;
    }
    /* line 997, ../scss/app.scss */
    .floor-market-pink .offer-category .btn-group .pkk {
        background-position: -24px -416px;
    }
    /* line 1003, ../scss/app.scss */
    .floor-market-pink .offer-category .active .btn-default {
        border-bottom-color: #ec468e;
        border-right-color: #ec468e;
        background-color: #ec468e;
    }
    /* line 1009, ../scss/app.scss */
    .floor-market-pink .offer-category .active .dh {
        background-position: 0 -392px;
    }
    /* line 1013, ../scss/app.scss */
    .floor-market-pink .offer-category .active .km {
        background-position: -48px -392px;
    }
    /* line 1017, ../scss/app.scss */
    .floor-market-pink .offer-category .active .vl {
        background-position: -96px -392px;
    }
    /* line 1021, ../scss/app.scss */
    .floor-market-pink .offer-category .active .pkt {
        background-position: -144px -392px;
    }
    /* line 1025, ../scss/app.scss */
    .floor-market-pink .offer-category .active .pkk {
        background-position: 0 -416px;
    }
    /* line 1030, ../scss/app.scss */
    .floor-market-pink .offer-category .active:nth-child(1) {
        border-left-color: #ec468e;
    }

    /* line 1037, ../scss/app.scss */
    .floor-market-purple .floor-header {
        border-bottom: 2px solid #dc33ff;
    }
    /* line 1041, ../scss/app.scss */
    .floor-market-purple .floor-category {
        background-color: #dc33ff;
    }
    /* line 1046, ../scss/app.scss */
    .floor-market-purple .floor-category .sub li .sub-header {
        background-position: -30px -120px !important;
    }
    /* line 1053, ../scss/app.scss */
    .floor-market-purple .floor-category .sub li.active .sub-header,
    .floor-market-purple .floor-category .sub li:hover .sub-header {
        color: #dc33ff;
        background-position: -6px -280px !important;
    }
    /* line 1063, ../scss/app.scss */
    .floor-market-purple .offer-category .btn-group .qate {
        background-position: -24px -440px;
    }
    /* line 1067, ../scss/app.scss */
    .floor-market-purple .offer-category .btn-group .gdte {
        background-position: -72px -440px;
    }
    /* line 1071, ../scss/app.scss */
    .floor-market-purple .offer-category .btn-group .pkte {
        background-position: -120px -440px;
    }
    /* line 1075, ../scss/app.scss */
    .floor-market-purple .offer-category .btn-group .ttbb {
        background-position: -168px -440px;
    }
    /* line 1081, ../scss/app.scss */
    .floor-market-purple .offer-category .active .btn-default {
        border-bottom-color: #dc33ff;
        border-right-color: #dc33ff;
        background-color: #dc33ff;
    }
    /* line 1087, ../scss/app.scss */
    .floor-market-purple .offer-category .active .qate {
        background-position: 0 -440px;
    }
    /* line 1091, ../scss/app.scss */
    .floor-market-purple .offer-category .active .gdte {
        background-position: -48px -440px;
    }
    /* line 1095, ../scss/app.scss */
    .floor-market-purple .offer-category .active .pkte {
        background-position: -96px -440px;
    }
    /* line 1099, ../scss/app.scss */
    .floor-market-purple .offer-category .active .ttbb {
        background-position: -144px -440px;
    }
    /* line 1104, ../scss/app.scss */
    .floor-market-purple .offer-category .active:nth-child(1) {
        border-left-color: #dc33ff;
    }

    /* line 1116, ../scss/app.scss */
    .crumbs-bar .crumbs-nav li {
        display: inline-block;
        margin-right: 5px;
    }
    /* line 1120, ../scss/app.scss */
    .crumbs-bar .crumbs-nav li a {
        display: inline-block;
        margin-right: 5px;
    }

    /* line 1128, ../scss/app.scss */
    .selector {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }
    /* line 1135, ../scss/app.scss */
    .selector .attr-line {
        border-top: 1px solid #ddd;
        background-color: #f5f5f5;
    }
    /* line 1139, ../scss/app.scss */
    .selector .attr-line .attrKey {
        float: left;
        width: 10%;
        padding: 5px 8px;
    }
    /* line 1145, ../scss/app.scss */
    .selector .attr-line .attrValues {
        position: relative;
        /*float: left;*/
        overflow-y: auto;
        /*width: 90%;*/
        max-height: 200px;
        /*padding: 5px 15px;*/
        background-color: #fff;
    }
    /* line 1157, ../scss/app.scss */
    .selector .attr-line .attrValues ul {
        overflow: hidden;
        /*margin-right: 20px;*/
    }
    /* line 1164, ../scss/app.scss */
    .selector .attr-line .attrValues ul li {
        float: left;
        /*margin-right: 15px;*/
        /*height: 22px;*/
        line-height: 22px;
    }
    /* line 1173, ../scss/app.scss */
    .selector .attr-line .attrValues .av-more {
        position: absolute;
        top: 5px;
        right: 10px;
    }
    /* line 1178, ../scss/app.scss */
    .selector .attr-line .attrValues .av-more a {
        color: #666;
        font-size: 18px;
    }

    /* line 1187, ../scss/app.scss */
    .product-filter {
        padding: 5px;
        background-color: #f1f1f1;
    }
    /* line 1195, ../scss/app.scss */
    .product-filter .f-sort {
        overflow: hidden;
    }
    /* line 1198, ../scss/app.scss */
    .product-filter .f-sort a {
        float: left;
        padding: 5px;
        margin-right: -1px;
        color: #666;
        border: 1px solid #ccc;
        background-color: #fff;
    }
    /* line 1206, ../scss/app.scss */
    .product-filter .f-sort a:hover, .product-filter .f-sort a:focus {
        color: #fff;
        border-color: #d9534f;
        background-color: #d9534f;
    }
    /* line 1213, ../scss/app.scss */
    .product-filter .f-sort .active {
        color: #fff;
        border-color: #d9534f;
        background-color: #d9534f;
    }
    /* line 1221, ../scss/app.scss */
    .product-filter .f-price .form-control,
    .product-filter .f-price .btn-f-price {
        display: inline-block;
        height: 29px;
    }
    /* line 1227, ../scss/app.scss */
    .product-filter .f-price .form-control {
        width: 100px;
    }
    /* line 1231, ../scss/app.scss */
    .product-filter .f-price .btn-f-price {
        margin-top: -2px;
    }
    /* line 1236, ../scss/app.scss */
    .product-filter .f-seller {
        height: 29px;
        line-height: 29px;
    }
    /* line 1241, ../scss/app.scss */
    .product-filter .f-seller .checkbox-inline input[type="checkbox"] {
        margin-top: 7px;
    }

    /* line 1249, ../scss/app.scss */
    .product-list .product {
        position: relative;
        height: 345px;
        margin-bottom: 20px;
        padding: 4px;
        -webkit-transition: border .5s ease-in-out;
        -o-transition: border .5s ease-in-out;
        transition: border .5s ease-in-out;
    }
    /* line 1260, ../scss/app.scss */
    .product-list .product:hover {
        border-color: #c40000;
    }
    /* line 1264, ../scss/app.scss */
    .product-list .product:hover .prd-price__range {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    /* line 1271, ../scss/app.scss */
    .product-list .product .prd-photo {
        position: relative;
    }
    /* line 1275, ../scss/app.scss */
    .product-list .product .prd-price__range {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 8px 8px 3px 8px;
        color: #fff;
        background-color: rgba(196, 0, 0, 0.75);
        opacity: 0;
        transition-duration: 300ms;
        transition-timing-function: linear;
        -webkit-transform: translateY(30px);
        -ms-transform: translateY(30px);
        transform: translateY(30px);
    }
    /* line 1290, ../scss/app.scss */
    .product-list .product .prd-price__range dl {
        overflow: hidden;
        margin-bottom: 5px;
    }
    /* line 1294, ../scss/app.scss */
    .product-list .product .prd-price__range dl dt {
        font-weight: normal;
    }
    /* line 1300, ../scss/app.scss */
    .product-list .product .img-wrap {
        /*width: 213px;
        height: 213px;*/
        /*margin: 0 auto 5px;*/
    }
    /* line 1306, ../scss/app.scss */
    .product-list .product .prd-status {
        overflow: hidden;
    }
    /* line 1309, ../scss/app.scss */
    .product-list .product .prd-status .prd-price {
        float: left;
        font-size: 20px;
        color: #c40000;
    }
    /* line 1315, ../scss/app.scss */
    .product-list .product .prd-status .prd-sold {
        float: right;
        line-height: 28px;
    }
    /* line 1321, ../scss/app.scss */
    .product-list .product .prd-title {
        overflow: hidden;
        height: 36px;
        margin: 5px 0;
    }
    /* line 1326, ../scss/app.scss */
    .product-list .product .prd-title h3 {
        margin: 0;
        font-size: 13px;
        line-height: 18px;
        text-align: justify;
    }
    /* line 1332, ../scss/app.scss */
    .product-list .product .prd-title h3 a {
        font-weight: 700;
    }
    /* line 1338, ../scss/app.scss */
    .product-list .product .prd-shop {
        margin-bottom: 5px;
    }
    /* line 1341, ../scss/app.scss */
    .product-list .product .prd-shop a {
        font-size: 11px;
        color: #777;
        text-transform: uppercase;
    }

    /* line 1351, ../scss/app.scss */
    .prd-wish-list .product {
        height: 310px;
    }
    /* line 1354, ../scss/app.scss */
    .prd-wish-list .product .img-wrap {
        width: 181px;
        height: 181px;
    }

    /* line 1364, ../scss/app.scss */
    .aside-bar .aside-title {
        padding: 12px 10px;
        text-transform: uppercase;
        background-color: #f5f5f5;
    }
    /* line 1369, ../scss/app.scss */
    .aside-bar .aside-title h3 {
        font-size: 12px;
        margin: 0;
        font-weight: 700;
    }

    /* line 1385, ../scss/app.scss */
    .supplier .supplier-info .company-name {
        padding-bottom: 8px;
        margin-bottom: 8px;
        border-bottom: 1px dotted #ccc;
    }
    /* line 1392, ../scss/app.scss */
    .supplier .supplier-info .detail .media {
        margin-top: 5px;
    }
    /* line 1395, ../scss/app.scss */
    .supplier .supplier-info .detail .media .media-left {
        padding-right: 5px;
    }
    /* line 1399, ../scss/app.scss */
    .supplier .supplier-info .detail .media label {
        width: 60px;
        font-weight: normal;
    }
    /* line 1407, ../scss/app.scss */
    .supplier .supplier-footer {
        border-top: 1px solid #ddd;
    }

    /* line 1423, ../scss/app.scss */
    .related-product .content .media-left,
    .prd-category .content .media-left {
        padding-right: 5px;
    }
    /* line 1426, ../scss/app.scss */
    .related-product .content .media-left .media-object,
    .prd-category .content .media-left .media-object {
        width: 64px;
    }
    /* line 1432, ../scss/app.scss */
    .related-product .content .media-body .media-heading,
    .prd-category .content .media-body .media-heading {
        font-size: 12px;
        text-align: justify;
        line-height: 16px;
    }
    /* line 1438, ../scss/app.scss */
    .related-product .content .media-body .prd-price,
    .prd-category .content .media-body .prd-price {
        color: #c40000;
        font-weight: 700;
    }

    /* line 1450, ../scss/app.scss */
    .prd-category ul li {
        margin-bottom: 5px;
    }
    /* line 1453, ../scss/app.scss */
    .prd-category ul li a {
        color: #333;
    }
    /* line 1456, ../scss/app.scss */
    .prd-category ul li a:hover {
        color: #f57c00;
    }

    /* line 1471, ../scss/app.scss */
    .product-hot .prd-hot__list .item .prd-price {
        font-size: 16px;
        color: #c40000;
    }
    /* line 1476, ../scss/app.scss */
    .product-hot .prd-hot__list .item .img-wrap {
        width: 157px;
        height: 157px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 5px;
    }
    /* line 1485, ../scss/app.scss */
    .product-hot .prd-hot__list .item .prd-title h3 {
        margin: 0 0 5px;
        font-size: 12px;
        line-height: 18px;
    }
    /* line 1492, ../scss/app.scss */
    .product-hot .prd-hot__list .item .prd-sold {
        font-size: 11px;
    }

    /* line 1499, ../scss/app.scss */
    .product-intro {
        padding: 20px;
    }
    /* line 1508, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider .img-primary {
        position: relative;
        display: block;
        overflow: hidden;
        width: 360px;
        height: 360px;
        background-color: #f7f7f7;
    }
    /* line 1519, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider .img-primary img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: block;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
    }
    /* line 1534, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .box-img {
        text-align: center;
    }
    /* line 1537, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .box-img .item {
        display: inline-block;
        width: 64px;
        height: 64px;
        cursor: pointer;
        border: 2px solid #fff;
    }
    /* line 1544, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .box-img .item img {
        width: 60px;
        height: 60px;
        margin: auto;
    }
    /* line 1553, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .slick-current .item {
        border-color: #f44336;
    }
    /* line 1558, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .slick-prev:before,
    .product-intro .prd-gallery .prd-slider__nav .slick-next:before {
        color: #888;
    }
    /* line 1563, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .slick-prev:hover:before,
    .product-intro .prd-gallery .prd-slider__nav .slick-prev:focus:before,
    .product-intro .prd-gallery .prd-slider__nav .slick-next:hover:before,
    .product-intro .prd-gallery .prd-slider__nav .slick-next:focus:before {
        color: #f44336;
    }
    /* line 1570, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .slick-next {
        right: -12px;
    }
    /* line 1574, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .slick-prev {
        left: -12px;
    }
    /* line 1578, ../scss/app.scss */
    .product-intro .prd-gallery .prd-slider__nav .slick-next,
    .product-intro .prd-gallery .prd-slider__nav .slick-prev {
        z-index: 1;
    }
    /* line 1587, ../scss/app.scss */
    .product-intro .prd-info .prd-name h1 {
        margin-top: 0;
        font-size: 20px;
        line-height: 26px;
        text-align: justify;
    }
    /* line 1593, ../scss/app.scss */
    .product-intro .prd-info .prd-name h1 .add-favourite {
        margin-left: 5px;
    }
    /* line 1599, ../scss/app.scss */
    .product-intro .prd-info .prd-price__detail {
        width: 100%;
        margin-bottom: 10px;
        background-color: #f7f7f7;
    }
    /* line 1604, ../scss/app.scss */
    .product-intro .prd-info .prd-price__detail th {
        padding: 10px;
        font-size: 11px;
        color: #666;
        text-transform: uppercase;
    }
    /* line 1611, ../scss/app.scss */
    .product-intro .prd-info .prd-price__detail td {
        padding: 10px 8px;
        border-top: 1px dotted #ccc;
    }
    /* line 1615, ../scss/app.scss */
    .product-intro .prd-info .prd-price__detail td strong {
        font-size: 16px;
        color: #c40000;
    }
    /* line 1622, ../scss/app.scss */
    .product-intro .prd-info .prd-trade__info {
        overflow: hidden;
    }
    /* line 1627, ../scss/app.scss */
    .product-intro .prd-info .prd-trade__info .d-header {
        float: left;
        width: 86px;
    }
    /* line 1632, ../scss/app.scss */
    .product-intro .prd-info .prd-trade__info .d-content {
        float: left;
    }

    /* line 1639, ../scss/app.scss */
    .prd-choose__attrs {
        background-color: #fffde7;
    }
    /* line 1646, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs {
        float: left;
        width: 70%;
        border-right: 1px solid #ddd;
    }
    /* line 1651, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-color {
        padding: 10px 0 0 10px;
        border-bottom: 1px solid #ddd;
        background-color: #f5f5f5;
    }
    /* line 1659, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-color ul li {
        float: left;
        margin: 0 10px 10px 0;
    }
    /* line 1664, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-color ul li .item strong {
        display: block;
        line-height: 38px;
    }
    /* line 1669, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-color ul li .item .image {
        display: block;
        width: 38px;
        height: 38px;
        padding: 2px;
        background-color: #fff;
    }
    /* line 1678, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-color ul li .item .image:hover {
        border-color: #f44336;
    }
    /* line 1683, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-color ul li .item img {
        width: 32px;
        height: 32px;
    }
    /* line 1690, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-color ul li .active .image, .prd-choose__attrs .choose-attrs .choose-color ul li .active .no-image {
        border-color: #f44336;
    }
    /* line 1698, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property {
        position: relative;
        padding: 10px;
        background-color: #fff;
    }
    /* line 1703, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property .obj-image {
        position: absolute;
        top: 10px;
        left: 10px;
    }
    /* line 1708, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property .obj-image .image {
        display: block;
        width: 48px;
        height: 48px;
        padding: 2px;
        background-color: #fff;
    }
    /* line 1717, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property .obj-image .image img {
        width: 42px;
        height: 42px;
    }
    /* line 1724, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property .obj-body {
        float: left;
        width: 100%;
        padding-left: 58px;
    }
    /* line 1729, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property .obj-body .table-property {
        margin-bottom: 0;
    }
    /* line 1732, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property .obj-body .table-property .prd-price {
        color: #c40000;
    }
    /* line 1737, ../scss/app.scss */
    .prd-choose__attrs .choose-attrs .choose-property .obj-body .table-property tr td {
        vertical-align: middle;
    }
    /* line 1746, ../scss/app.scss */
    .prd-choose__attrs .total-price {
        float: left;
        width: 30%;
    }
    /* line 1752, ../scss/app.scss */
    .prd-choose__attrs .total-price .item {
        overflow: hidden;
        color: #c40000;
    }
    /* line 1758, ../scss/app.scss */
    .prd-choose__attrs .total-price .item .amount {
        font-size: 20px;
    }
    /* line 1763, ../scss/app.scss */
    .prd-choose__attrs .total-price .btn {
        font-size: 16px;
        font-weight: 700;
        text-transform: uppercase;
    }
    /* line 1769, ../scss/app.scss */
    .prd-choose__attrs .total-price .sub-total {
        border: 1px solid #e6ceb0;
        background: #fffcf8;
        -moz-box-shadow: 0 1px 3px #ccc;
        -webkit-box-shadow: 0 1px 3px #ccc;
        box-shadow: 0 1px 3px #ccc;
        color: #444;
        display: none;
        border-bottom: 0;
        clear: both;
    }
    /* line 1780, ../scss/app.scss */
    .prd-choose__attrs .total-price .sub-total ul {
        display: block;
        margin: 0;
        padding: 0;
    }
    /* line 1785, ../scss/app.scss */
    .prd-choose__attrs .total-price .sub-total ul li {
        list-style: none;
        border-bottom: #ecd9c0 1px solid;
        overflow: hidden;
        float: left;
        width: 100%;
        cursor: pointer;
    }
    /* line 1793, ../scss/app.scss */
    .prd-choose__attrs .total-price .sub-total ul li .sub-name {
        width: 56%;
        padding: 8px 12px 8px 5px;
        max-height: 54px;
        overflow: hidden;
    }
    /* line 1800, ../scss/app.scss */
    .prd-choose__attrs .total-price .sub-total ul li .sub-amount {
        width: 35%;
        padding: 8px 2px 8px 0px;
    }
    /* line 1804, ../scss/app.scss */
    .prd-choose__attrs .total-price .sub-total ul li .sub-amount em {
        font-weight: 700;
        font-style: normal;
    }

    /* line 1820, ../scss/app.scss */
    .prd-wrap .heading {
        overflow: hidden;
        background-color: #f5f5f5;
    }
    /* line 1824, ../scss/app.scss */
    .prd-wrap .heading span {
        position: relative;
        float: left;
        padding: 10px 15px;
        font-weight: 700;
        text-transform: uppercase;
        border-right: 1px solid #ddd;
        background-color: #fff;
    }
    /* line 1834, ../scss/app.scss */
    .prd-wrap .heading span:after {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background-color: #a94442;
    }
    /* line 1845, ../scss/app.scss */
    .prd-wrap .extra-desc-info {
        padding: 10px 10px 0 10px;
    }
    /* line 1848, ../scss/app.scss */
    .prd-wrap .extra-desc-info ul {
        border-bottom: 1px dotted #ccc;
    }
    /* line 1853, ../scss/app.scss */
    .prd-wrap .extra-desc-info ul li {
        float: left;
        width: 30%;
        margin: 0 10px 10px 0;
    }
    /* line 1861, ../scss/app.scss */
    .prd-wrap .prd-image {
        padding: 10px;
    }
    /* line 1864, ../scss/app.scss */
    .prd-wrap .prd-image img {
        max-width: 100%;
        height: auto;
    }

    /* line 1874, ../scss/app.scss */
    .list-link h3 {
        margin-top: 0;
        padding-left: 5px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        border-left: 5px solid #f44336;
    }
    /* line 1887, ../scss/app.scss */
    .list-link ul li a {
        display: block;
        padding: 10px 10px 10px 0;
        border-top: 1px dotted #ccc;
    }

    /* line 1897, ../scss/app.scss */
    .cart-wrap .img-wrap {
        width: 64px;
        height: 64px;
    }

    /* line 1903, ../scss/app.scss */
    .cart-price__total {
        text-align: right;
    }
    /* line 1906, ../scss/app.scss */
    .cart-price__total .item {
        font-size: 13px;
        font-weight: 700;
        margin-top: 0 !important;
        border: none !important;
    }
    /* line 1912, ../scss/app.scss */
    .cart-price__total .item .price {
        font-size: 15px;
    }
    /* line 1917, ../scss/app.scss */
    .cart-price__total .total {
        margin: 5px 0;
        padding-top: 5px;
        font-size: 13px;
        font-weight: 700;
        border-top: 1px dotted #ccc;
    }
    /* line 1924, ../scss/app.scss */
    .cart-price__total .total .price {
        font-size: 18px;
    }

    /* line 1930, ../scss/app.scss */
    .login-box {
        padding: 20px;
        margin: 50px 0;
    }
    /* line 1936, ../scss/app.scss */
    .login-box h1 {
        margin-top: 0;
        font-size: 22px;
        font-weight: 700;
    }
    /* line 1947, ../scss/app.scss */
    .login-box .login-w .btn-fb,
    .login-box .login-w .btn-gplus {
        color: #fff;
        font-weight: 700;
        text-transform: uppercase;
    }
    /* line 1954, ../scss/app.scss */
    .login-box .login-w .btn-fb {
        background-color: #3b5998;
    }
    /* line 1958, ../scss/app.scss */
    .login-box .login-w .btn-gplus {
        background-color: #db402c;
    }
    /* line 1963, ../scss/app.scss */
    .login-box .btn-ali {
        color: #fff;
        font-size: 16px;
        background-color: #c40000;
    }
    /* line 1969, ../scss/app.scss */
    .login-box .captcha {
        position: relative;
        padding-right: 92px;
    }
    /* line 1973, ../scss/app.scss */
    .login-box .captcha .input-group-addon {
        padding-bottom: 5px;
    }
    /* line 1976, ../scss/app.scss */
    .login-box .captcha .input-group-addon .fa-shield {
        font-size: 20px;
    }
    /* line 1981, ../scss/app.scss */
    .login-box .captcha .captcha-img {
        position: absolute;
        top: 0;
        right: 0;
        height: 34px;
    }

    /* line 1990, ../scss/app.scss */
    .register-hint {
        margin: 50px 0;
    }
    /* line 1993, ../scss/app.scss */
    .register-hint h2 {
        margin: 0 0 20px;
        font-size: 24px;
    }
    /* line 1998, ../scss/app.scss */
    .register-hint .icon-circle {
        width: 64px;
        height: 64px;
        line-height: 74px;
        text-align: center;
        border-radius: 50%;
        color: #3c763d;
        border: 2px solid #3c763d;
    }
    /* line 2007, ../scss/app.scss */
    .register-hint .icon-circle .fa {
        font-size: 32px;
    }
    /* line 2012, ../scss/app.scss */
    .register-hint .media-body {
        font-size: 18px;
        color: #3c763d;
    }

    /* line 2019, ../scss/app.scss */
    .user-control h3.panel-title {
        font-weight: 700;
        font-size: 16px;
    }
    /* line 2024, ../scss/app.scss */
    .user-control .panel-title {
        font-size: 12px;
    }
    /* line 2027, ../scss/app.scss */
    .user-control .panel-title .media-heading {
        font-weight: 700;
        font-size: 13px;
        margin-bottom: 0;
    }
    /* line 2047, ../scss/app.scss */
    .user-control .shop-wish-list .item ul li {
        margin-bottom: 5px;
    }
    /* line 2050, ../scss/app.scss */
    .user-control .shop-wish-list .item ul li label {
        width: 60px;
        font-weight: normal;
    }

    /* line 2060, ../scss/app.scss */
    .bank-list {
        overflow: hidden;
    }
    /* line 2065, ../scss/app.scss */
    .bank-list li {
        float: left;
        margin: 0 15px 15px 0;
        border: 1px solid #e0e0e0;
    }
    /* line 2070, ../scss/app.scss */
    .bank-list li:hover {
        border-color: #f44336;
    }
    /* line 2075, ../scss/app.scss */
    .bank-list li.active {
        border-color: #f44336;
    }

    /* line 2081, ../scss/app.scss */
    .order-filter .checkbox {
        margin: 7px 10px 0 0;
    }

    /* line 2089, ../scss/app.scss */
    .order h1 {
        font-size: 24px;
    }
    /* line 2093, ../scss/app.scss */
    .order .item {
        margin-top: -1px;
        border: 1px solid #ddd;
    }
    /* line 2097, ../scss/app.scss */
    .order .item .title {
        padding: 10px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        background-color: #f5f5f5;
    }
    /* line 2105, ../scss/app.scss */
    .order .item .content {
        padding: 10px;
    }
    /* line 2108, ../scss/app.scss */
    .order .item .content .customer-address {
        margin-bottom: 0;
    }
    /* line 2111, ../scss/app.scss */
    .order .item .content .customer-address label {
        font-weight: normal;
    }
    /* line 2116, ../scss/app.scss */
    .order .item .content .customer-address > tbody > tr > td {
        border: none;
        vertical-align: middle;
    }
    /* line 2120, ../scss/app.scss */
    .order .item .content .customer-address > tbody > tr > td select {
        display: inline-block;
        width: auto;
    }
    /* line 2126, ../scss/app.scss */
    .order .item .content .transport-type {
        padding-left: 10px;
        padding-right: 10px;
    }
    /* line 2130, ../scss/app.scss */
    .order .item .content .transport-type input[type="radio"] {
        margin-top: 2px;
    }
    /* line 2135, ../scss/app.scss */
    .order .item .content .img-wrap {
        width: 64px;
        height: 64px;
        margin-left: auto;
        margin-right: auto;
    }
    /* line 2142, ../scss/app.scss */
    .order .item .content p {
        margin-bottom: 5px;
    }
    /* line 2146, ../scss/app.scss */
    .order .item .content .total {
        font-weight: 700;
        font-size: 13px;
    }
    /* line 2150, ../scss/app.scss */
    .order .item .content .total hr {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    /* line 2155, ../scss/app.scss */
    .order .item .content .total .order-total {
        font-size: 20px;
    }

    /* line 2164, ../scss/app.scss */
    .order-payment h1 {
        font-size: 24px;
    }
    /* line 2173, ../scss/app.scss */
    .order-payment .payment-method .wallet-balance {
        font-size: 14px;
        background-color: #dff0d8;
    }
    /* line 2183, ../scss/app.scss */
    .order-payment .payment-method .payment-method__content .media-body {
        font-size: 12px;
    }
    /* line 2190, ../scss/app.scss */
    .order-payment .payment-method .payment-method__content .pay-btn .btn {
        font-size: 14px;
        text-transform: uppercase;
    }

    /* line 2203, ../scss/app.scss */
    .order-table tbody tr td .table {
        margin-bottom: 0;
    }
    /* line 2207, ../scss/app.scss */
    .order-table tbody tr td .table tr td {
        border-top: none;
    }
    /* line 2216, ../scss/app.scss */
    .order-table p {
        margin-bottom: 5px;
    }
    /* line 2220, ../scss/app.scss */
    .order-table .img-wrap {
        width: 64px;
        height: 64px;
        margin-left: auto;
        margin-right: auto;
    }

    /* line 2228, ../scss/app.scss */
    .scroll-to-top {
        position: fixed;
        z-index: 1080;
        right: 10px;
        bottom: 10px;
        width: 36px;
        height: 36px;
        line-height: 36px;
        text-align: center;
        font-size: 14px;
        color: #fff;
        border-radius: 50%;
        -webkit-transition: 1s;
        -moz-transition: 1s;
        transition: 1s;
        background-color: rgba(0, 0, 0, 0.4);
    }
    /* line 2245, ../scss/app.scss */
    .scroll-to-top:hover, .scroll-to-top:focus {
        color: #fff;
        background-color: rgba(0, 0, 0, 0.75);
    }

    /* line 2251, ../scss/app.scss */
    .footer {
        padding: 20px 0;
        background-color: #f7f7f7;
        border-top: 1px solid #f0f0f0;
    }
    /* line 2256, ../scss/app.scss */
    .footer img {
        max-width: 100%;
        height: auto;
    }
    /* line 2261, ../scss/app.scss */
    .footer p {
        margin-bottom: 5px;
    }

    @media (max-width: 375px) {
        /* line 2269, ../scss/app.scss */
        .box-collection .box-collection__item h3 {
            font-size: 18px;
        }
        /* line 2273, ../scss/app.scss */
        .box-collection .box-collection__item .img-featured {
            margin-bottom: 10px;
        }
        /* line 2276, ../scss/app.scss */
        .box-collection .box-collection__item .img-featured .img-wrap {
            height: 250px;
        }
        /* line 2283, ../scss/app.scss */
        .box-collection .box-collection__item .box-collection__thumbnail .img-wrap .box-price {
            font-size: 11px;
        }

        /* line 2293, ../scss/app.scss */
        .floor-market .floor-header h2 {
            margin-top: 8px;
            font-size: 16px;
        }
        /* line 2301, ../scss/app.scss */
        .floor-market .zone-top-offers ul li {
            width: 50% !important;
        }

        /* line 2310, ../scss/app.scss */
        .selector .attr-line .attrKey {
            width: 26% !important;
        }
        /* line 2314, ../scss/app.scss */
        .selector .attr-line .attrValues {
            /*width: 74% !important;*/
        }

        /* line 2321, ../scss/app.scss */
        .product-filter .f-sort,
        .product-filter .f-price {
            margin-bottom: 10px;
        }
        /* line 2327, ../scss/app.scss */
        .product-filter .f-sort a {
            padding: 3px 2px;
        }
        /* line 2330, ../scss/app.scss */
        .product-filter .f-sort a i {
            display: none;
        }
        /* line 2337, ../scss/app.scss */
        .product-filter .f-price .form-control {
            width: 78px;
        }

        /* line 2344, ../scss/app.scss */
        .prd-choose__attrs .choose-attrs {
            width: 100%;
            border-right: transparent;
        }
        /* line 2349, ../scss/app.scss */
        .prd-choose__attrs .total-price {
            width: 100%;
            border-top: 1px solid #ddd;
        }

        /* line 2358, ../scss/app.scss */
        .prd-wrap .extra-desc-info ul li {
            width: 100%;
        }

        /* line 2367, ../scss/app.scss */
        .order .item .title {
            text-align: center;
        }

        /* line 2373, ../scss/app.scss */
        .cart-price__total {
            margin-top: 15px;
            text-align: left;
        }
    }
    @media (max-width: 414px) {
        /* line 2381, ../scss/app.scss */
        .prd-choose__attrs .choose-attrs {
            width: 100%;
            border-right: transparent;
        }
        /* line 2386, ../scss/app.scss */
        .prd-choose__attrs .total-price {
            width: 100%;
            border-top: 1px solid #ddd;
        }

        /* line 2395, ../scss/app.scss */
        .prd-wrap .extra-desc-info ul li {
            width: 100%;
        }

        /* line 2404, ../scss/app.scss */
        .order .item .title {
            text-align: center;
        }

        /* line 2413, ../scss/app.scss */
        .order-payment .cart-table .cart-item .media {
            border-right: none !important;
        }
        /* line 2417, ../scss/app.scss */
        .order-payment .cart-table .cart-item .status {
            margin-bottom: 5px;
            text-align: left;
        }
    }
    @media (max-width: 768px) {
        /* line 2427, ../scss/app.scss */
        .product-list .product {
            height: auto;
        }

        /* line 2432, ../scss/app.scss */
        .masthead .hotline {
            font-size: 16px;
        }

        /* line 2440, ../scss/app.scss */
        .box-user .nav-tabs li a {
            padding: 10px;
        }

        /*.box-collection {
            .box-collection__item {
                .box-collection__thumbnail {
                    .img-wrap {
                        height: 60px;
                    }
                }
            }
        }*/
        /* line 2458, ../scss/app.scss */
        .floor-market .zone-top-offers {
            width: 100%;
            height: auto;
            border-left: 1px solid #ddd;
        }
        /* line 2464, ../scss/app.scss */
        .floor-market .zone-top-offers ul li {
            width: 25%;
            /*height: 200px;*/
            /*.offer-wrap {
                .img-wrap {
                    height: 110px;
                }
            }*/
        }

        /* line 2480, ../scss/app.scss */
        .product-filter .f-sort a {
            padding: 3px 2px;
        }
        /* line 2483, ../scss/app.scss */
        .product-filter .f-sort a i {
            display: none;
        }
        /* line 2490, ../scss/app.scss */
        .product-filter .f-price .form-control {
            width: 77px;
        }

        /* line 2498, ../scss/app.scss */
        .selector .attr-line .attrKey {
            width: 12%;
        }
        /* line 2502, ../scss/app.scss */
        .selector .attr-line .attrValues {
            /*width: 88%;*/
        }

        /* line 2510, ../scss/app.scss */
        .order .item .title {
            text-align: center;
        }

        /* line 2519, ../scss/app.scss */
        .prd-choose__attrs .choose-attrs .choose-property .obj-body {
            padding-left: 0;
        }
    }
    @media (min-width: 1024px) and (max-width: 1024px) {
        /* line 2528, ../scss/app.scss */
        .col-ip-1, .col-ip-2, .col-ip-3, .col-ip-4, .col-ip-5, .col-ip-6, .col-ip-7, .col-ip-8, .col-ip-9, .col-ip-10, .col-ip-11, .col-ip-12 {
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 10px;
            padding-left: 10px;
        }

        /* line 2536, ../scss/app.scss */
        .col-ip-12 {
            width: 100%;
        }

        /* line 2540, ../scss/app.scss */
        .col-ip-11 {
            width: 91.66666667%;
        }

        /* line 2544, ../scss/app.scss */
        .col-ip-10 {
            width: 83.33333333%;
        }

        /* line 2548, ../scss/app.scss */
        .col-ip-9 {
            width: 75%;
        }

        /* line 2552, ../scss/app.scss */
        .col-ip-8 {
            width: 66.66666667%;
        }

        /* line 2556, ../scss/app.scss */
        .col-ip-7 {
            width: 58.33333333%;
        }

        /* line 2560, ../scss/app.scss */
        .col-ip-6 {
            width: 50%;
        }

        /* line 2564, ../scss/app.scss */
        .col-ip-5 {
            width: 41.66666667%;
        }

        /* line 2568, ../scss/app.scss */
        .col-ip-4 {
            width: 33.33333333%;
        }

        /* line 2572, ../scss/app.scss */
        .col-ip-3 {
            width: 25%;
        }

        /* line 2576, ../scss/app.scss */
        .col-ip-2 {
            width: 16.66666667%;
        }

        /* line 2580, ../scss/app.scss */
        .col-ip-1 {
            width: 8.33333333%;
        }

        /* line 2584, ../scss/app.scss */
        .hidden-ip {
            display: none !important;
        }

        /* line 2588, ../scss/app.scss */
        .visible-ip {
            display: block !important;
        }

        /* line 2593, ../scss/app.scss */
        .floor-market .zone-top-offers {
            width: 100%;
            height: auto;
            border-left: 1px solid #ddd;
        }
        /* line 2599, ../scss/app.scss */
        .floor-market .zone-top-offers ul li {
            width: 20%;
            height: 200px;
            /*.offer-wrap {
                .img-wrap {
                    height: 110px;
                }
            }*/
        }

        /* line 2615, ../scss/app.scss */
        .product-filter .f-price .form-control {
            width: 83px;
        }
        /* line 2619, ../scss/app.scss */
        .product-filter .f-price .btn-f-price {
            margin-top: -1px;
        }

        /*.product-list {
            .product {
                .img-wrap {
                    width: 172px;
                    height: 172px;
                }
            }
        }*/
        /*.product-hot {
            .prd-hot__list {
                .item {
                    .img-wrap {
                        width: 124px;
                        height: 124px;
                    }
                }
            }
        }*/
        /* line 2646, ../scss/app.scss */
        .hfix-ip .product {
            height: 284px;
        }
    }
    /* line 2652, ../scss/app.scss */
    .tsf:first-letter {
        text-transform: uppercase;
    }

    /* line 2, ../scss/extend.scss */
    .quantity .spinner {
        width: 110px;
        max-width: 110px;
    }
    /* line 6, ../scss/extend.scss */
    .quantity .spinner .input-group-addon {
        background: #f7f7f7;
        padding: 0;
    }
    /* line 10, ../scss/extend.scss */
    .quantity .spinner .input-group-addon button {
        border: none;
        background: transparent;
        padding: 0;
        height: 32px;
        width: 32px;
        line-height: 32px;
        color: #666666;
    }
    /* line 21, ../scss/extend.scss */
    .quantity .spinner > input.form-control {
        text-align: center;
    }

    /* line 28, ../scss/extend.scss */
    .bank-list > li {
        width: 64px;
        height: 64px;
        display: block;
        background-color: #fff;
        position: relative;
        overflow: hidden;
    }
    /* line 36, ../scss/extend.scss */
    .bank-list > li > img {
        display: block;
        max-width: 100%;
        max-height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
    }
    /* line 49, ../scss/extend.scss */
    .bank-list > li.active {
        border-color: #f44336;
    }

    /* line 54, ../scss/extend.scss */
    .header-fix-top {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #fff;
        z-index: 999;
        border-bottom: 2px solid #c40000;
    }
    /* line 63, ../scss/extend.scss */
    .header-fix-top .search-suggestions {
        display: none;
    }

    /* line 2658, ../scss/app.scss */
    .cart-table {
        border: 1px solid #ddd;
    }
    /* line 2663, ../scss/app.scss */
    .cart-table .cart-header {
        overflow: hidden;
        background-color: #fcf8e3;
        border-bottom: 1px solid #ddd;
    }
    /* line 2672, ../scss/app.scss */
    .cart-table .cart-item {
        border-bottom: 1px solid #ddd;
    }
    /* line 2677, ../scss/app.scss */
    .cart-table .cart-item .img-wrap {
        width: 64px;
        height: 64px;
    }
    /* line 2683, ../scss/app.scss */
    .cart-table .cart-total {
        background-color: #f5f5f5;
    }

    /* line 2692, ../scss/app.scss */
    .order-payment .cart-table .cart-item {
        padding: 0;
    }
    /* line 2695, ../scss/app.scss */
    .order-payment .cart-table .cart-item .media {
        margin-top: 0;
        border-right: 1px solid #ddd;
    }
    /* line 2702, ../scss/app.scss */
    .order-payment .cart-table .cart-item .status {
        padding-top: 8px;
        text-align: center;
    }

    @media (max-width: 415px) {
        /* line 2714, ../scss/app.scss */
        .floor-market .zone-top-offers ul li {
            width: 50% !important;
        }
    }

    .btn-fb {
        margin: 5px auto;
        width: 50%;
        color: #354e84;
        border: 1px solid #354e84;
    }
    .box-user .tab-content .btn-fb {
        text-align: left;
        color: #354e84;
        border: 1px solid #354e84;
    }
    /* line 478, ../scss/app.scss */
    .fa {
        font-size: 16px;
    }
    /* line 483, ../scss/app.scss */
    .btn-fb:hover {
        color: #fff;
        background-color: #354e84;
    }
    /* line 488, ../scss/app.scss */
    .btn-gplus {
        margin: 0px auto;
        text-align: center;
        width: 50%;
        color: #db402c;
        border: 1px solid #db402c;
    }
    /* line 493, ../scss/app.scss */
    .btn-gplus .fa {
        font-size: 16px;
        color: #db402c;
    }
    /* line 498, ../scss/app.scss */
    .btn-gplus:hover {
        color: #fff;
        background-color: #db402c;
    }
    /* line 504, ../scss/app.scss */
    .box-user .panel {
        border-radius: 0;
    }
    .btn-gplus {
        text-align: center;
        color: #db402c;
        border: 1px solid #db402c;
    }


</style>

