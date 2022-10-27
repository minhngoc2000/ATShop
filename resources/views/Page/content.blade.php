
    <div id="wrapper">

    <!-- end header -->
    <div class="container">
    </div>
    <div id="content">
        <div class="container">
            <!-- start block-slider -->
            <div class="row block-slider">
                <div class="col-md-8 col-sm-12">
                    <ul class="rslides rslides1">
                        <li id="rslides1_s0" class="rslides1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                            <img src="{{asset('images/sliders/slider2.jpg')}}"  alt="It is a long established fact that a reader will">
                            <div class="txt">
                                <p>It is a long established fact that a reader will</p>
                            </div>
                        </li>
                        <li id="rslides1_s1" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                            <img src="{{asset('images/sliders/slider2.jpg')}}" alt="Thời trang cao cấp giảm giá đến 40%">
                            <div class="txt">
                                <p>Thời trang cao cấp giảm giá đến 40%</p>
                            </div>
                        </li>
                        <li id="rslides1_s2" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                            <img src="slider1.jpg" tppabs="http://htshop.esy.es/wp-content/uploads/2016/09/slider1.jpg" alt="Thời trang cao cấp áo thun nữ hot nhất hè 2017">
                            <div class="txt">
                                <p>Thời trang cao cấp áo thun nữ hot nhất hè 2017</p>
                            </div>
                        </li>
                        <li id="rslides1_s3" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                            <img src="{{asset('images/sliders/slider2.jpg')}}"  alt="Bộ sư tập set đồ nam không thể bỏ lỡ trong năm 2017">
                            <div class="txt">
                                <p>Bộ sư tập set đồ nam không thể bỏ lỡ trong năm 2017</p>
                            </div>
                        </li>
                    </ul><a href="#" class="rslides_nav rslides1_nav prev">Previous</a><a href="#" class="rslides_nav rslides1_nav next">Next</a>				</div>
                <div class="col-md-4 col-sm-12">
                    <ul class="block-banner">
                        <li><a href="#" class="img"><img src="{{asset('images/sliders/r1.jpg')}}"></a></li>
                        <li><a href="#" class="img"><img src="{{asset('images/sliders/r2.jpg')}}"></a></li>
                    </ul>
                </div>
            </div>
            <!-- end block-slider -->
            <div class="block-product">
                <h3><span>Sản phẩm nỗi bật</span></h3>
                <div class="row">
                    @foreach($Products as $value)
                    <div class="box-pro">
                    <div class="col-sm-4 col-md-3 col-xs-6" style="width: 292px;">
                    <div class="post-img" style="height: 340px">
                    <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image)}}"></a>
                    <button class="addc" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true">Yêu thích</i></button>
                        <input type="hidden" class="pro_id" value="{{$value->Id}}">
                    <a class="viewm" href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">
                    <i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a>
                    </div>
                    <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Name}}</a></h4>
                    <div class="score-callback" data-score="4" style="cursor: pointer;">
                    <img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad">
                    <img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor">
                    <img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular">
                    <img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good">
                    <img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous">

                    </div>
                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span
                    class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                    </div>
                    </div>
                    @endforeach




                        {{ $Products->render() }}

                </div>


            </div>
            <!-- end block-product -->
            <div class="block-product">
                <h3><span>Sản phẩm mới</span></h3>
                <div class="row">
                    @foreach($products_new as $value)
                        <div class="box-pro">
                            <div class="col-sm-4 col-md-3 col-xs-6" style="width: 292px;">
                                <div class="post-img" style="height: 340px">
                                    <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image)}}"></a>
                                    <button class="addc" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true">Yêu thích</i></button>
                                    <input type="hidden" class="pro_id" value="{{$value->Id}}">
                                    <a class="viewm" href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a>
                                </div>
                                <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Name}}</a></h4>
                                <div class="score-callback" data-score="4" style="cursor: pointer;">
                                    <img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad">
                                    <img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor">
                                    <img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular">
                                    <img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good">
                                    <img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous">

                                </div>
                                <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span
                                                    class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                            </div>
                        </div>
                    @endforeach

                    {{--<div class="" style="margin: 0px 50%">--}}
                        {{ $Products->render() }}

                </div>
            </div>
            <!-- end block-product -->
            <div class="register">
                <a href="#" class="img"><img src="{{asset('images/product/banner-qc.jpg')}}" /></a>
            </div>
            <!-- end register -->
            <div class="block-fashion">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <h3><span>Thời trang nam</span></h3>
                        <ul>
                            @foreach($men_pro as $value)
                            <li>
                            <div class="detail">
                            <div class="img-fasti">
                            <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img">
                            <img src="{{asset('images/product/'.$value->Image)}}" alt="{{$value->Slug}}" title="{{$value->Name}}">
                            </a>

                            <button class="add-icon" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true"></i></button>
                            <a class="v-icon" href="sony-xperia-xa.htm"><i
                            class="fa fa-search-plus"></i>
                            </a>
                            </div>
                            <div>
                            <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!! $value->Name !!}</a>
                            </h4>
                            <div class="score-callback" data-score="4" style="cursor: pointer;">
                            <img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad">
                            <img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor">
                            <img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular">
                            <img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good">
                            <img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous">

                            </div>
                            <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span
                            class="woocommerce-Price-currencySymbol">₫</span></span></span></p>

                            </div>
                            </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <h3><span>Thời trang nữ </span></h3>
                        <ul>

                            @foreach($women_pro as $value)
                            <li>
                            <div class="detail">
                            <div class="img-fasti">
                            <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img">
                            <img src="{{asset('images/product/'.$value->Image)}}" alt="{{$value->Slug}}" title="{{$value->Name}}">
                            </a>

                                <button class="add-icon" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true"></i></button>
                            <a class="v-icon" href="sony-xperia-xa.htm"><i
                            class="fa fa-search-plus"></i>
                            </a>
                            </div>
                            <div>
                            <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!! $value->Name !!}</a>
                            </h4>
                            <div class="score-callback" data-score="4" style="cursor: pointer;">
                            <img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad">
                            <img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor">
                            <img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular">
                            <img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good">
                            <img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous">

                            </div>
                            <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span
                            class="woocommerce-Price-currencySymbol">₫</span></span></span></p>

                            </div>
                            </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <h3><span>Phụ kiện</span></h3>
                        <ul>
                            @foreach($pk as $value)
                            <li>
                            <div class="detail">
                            <div class="img-fasti">
                            <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img">
                            <img src="{{asset('images/product/'.$value->Image)}}" alt="{{$value->Slug}}" title="{{$value->Name}}">
                            </a>

                                <button class="add-icon" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true"></i></button>
                            <a class="v-icon" href="sony-xperia-xa.htm"><i
                            class="fa fa-search-plus"></i>
                            </a>
                            </div>
                            <div>
                            <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!! $value->Name !!}</a>
                            </h4>
                            <div class="score-callback" data-score="4" style="cursor: pointer;">
                            <img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad">
                            <img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor">
                            <img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular">
                            <img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good">
                            <img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous">

                            </div>
                            <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span
                            class="woocommerce-Price-currencySymbol">₫</span></span></span></p>

                            </div>
                            </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end block-fashion -->
            <div class="block-news-h">
                <h3><span>Tin tức</span></h3>
                <div class="row">
                    <!-- Get post News Query -->
                @foreach($news as $value)
                <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="detai-new">
                <h4><a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!!$value->Title!!}</a></h4>
                <a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}"><img style="max-height: 250px;min-width: 262px" src="{{asset('images/news/'.$value->Images)}}"alt="{{$value->Slug}}" title="{!!$value->Title!!}">
                </a>
                <p>
                {!! $value->Intro !!}...
                </p>
                <div class="hk-date">
                <span>
                <i class="fa fa-calendar-minus-o" aria-hidden="true"></i> {!!$value->updated_at!!}
                </span>
                </div>
                <a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="read-more">Xem thêm</a>
                </div>
                </div>
                @endforeach
                    <!-- Get post News Query -->
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- end footer -->

    </div>
<!-- end wrapper -->
