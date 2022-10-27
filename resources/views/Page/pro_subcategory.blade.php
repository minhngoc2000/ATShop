@extends('Page.index')
@section('fiter-pro')
    <div class="main" style="margin-top: 50px">
        <h1 class="hidden">NỮ</h1>
        <span class="clearfix menuActive" data-rel="1"></span>
        <div class="container">
            <div class="grid-100">
                <div class="breadcrumb_view">
                    <ul class="breadcrumbs">
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <a class="72058" href="/nu-pc72058.html">{!! $dm->Name !!}</a>
                        </li>
                    </ul>
                    <span class="clearfix"></span>
                </div>
            </div>
        </div>
        <div class="singleProduct">
            <div class="container">
                <div class="grid-25" id="catSideBar">
                    <div id="catSideBar">
                        <div class="sidebarSingle">
                            <h3 class="titleSingle">Danh mục</h3>
                            <div class="productSingle productDemo">
                                <ul>
                                    @foreach($category as $cat)
                                        <li>
                                            <a href="javascript:void(0)">{!!$cat->Name  !!}</a>
                                            <ul>
                                                @foreach($cat->get_subcategory as $subcat)
                                                    <li><a href="{{route('danh-muc',['name'=>$subcat->Name,'id'=>$subcat->Id])}}">{!!$subcat->Name !!}</a></li>

                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <h3 class="titleSingle" style="margin-top: 10px">Màu sắc</h3>
                            <div class="productSingle productDemo req-filter">
                                <ul>
                                    @foreach($color as $value)
                                        <a  href="{{route('mau-sac',['id'=>$value->id])}}" class="shop99_deamonLink"  title="{{$value->title}}" style="display:inline-block;background:{{$value->style}};border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px">
                                        </a>
                                    @endforeach
                                    <a rel="nofollow" class="shop99_deamonLink" href="" title="Trắng" style="display:inline-block;background:#FFFFFF;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px">
                                    </a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="" title="Be" style="display:inline-block;background:#FFF2CC;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px">
                                    </a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=8" title="Đỏ Boocdo" style="display:inline-block;background:#990100;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=9" title="Đỏ" style="display:inline-block;background:#ED0000;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=11" title="Cam" style="display:inline-block;background:#FF8800;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=14" title="Vàng" style="display:inline-block;background:#FFD800;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=15" title="Vàng mù tạt" style="display:inline-block;background:#CA9726;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=16" title="Hồng đào" style="display:inline-block;background:#F5A573;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=17" title="Hồng phơn phớt" style="display:inline-block;background:#FEBED5;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=18" title="Hồng" style="display:inline-block;background:#ee6aa7;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=23" title="Xanh nõn" style="display:inline-block;background:#CDE83B;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=25" title="Xanh lá cây" style="display:inline-block;background:#00af33;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=26" title="Xanh rêu" style="display:inline-block;background:#294333;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a><a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=27" title="Xanh navy" style="display:inline-block;background:#003388;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a><a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=28" title="Xanh indigo" style="display:inline-block;background:#0000FF;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a><a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=29" title="Xanh cổ vịt" style="display:inline-block;background:#15485C;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=541" title="Đỏ cam" style="display:inline-block;background:#ff3301;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=30" title="Xanh ngọc" style="display:inline-block;background:#4FBBB5;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a><a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=31" title="Xanh da trời" style="display:inline-block;background:#4B98D5;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=32" title="Xanh da trời nhạt" style="display:inline-block;background:#96D2E9;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=33" title="Xám nhạt" style="display:inline-block;background:#B7B7B7;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=34" title="Xám" style="display:inline-block;background:#666666;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=35" title="Đen" style="display:inline-block;background:#000000;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=111" title="Kẻ sọc" style="display:inline-block;border:1px solid #fff;line-height: 1.3;position: relative; color: black; bottom: 11px;padding: 0;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0;">Kẻ sọc</a><a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=128" title="Ghi" style="display:inline-block;background:#dddddd;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                    <a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=133" title="Đen tàn" style="display:inline-block;border:1px solid #fff;line-height: 1.3;position: relative; color: black; bottom: 11px;padding: 0;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0;">Đen tàn</a><a rel="nofollow" class="shop99_deamonLink" href="/ao-pc72062.html?i4=143" title="Đỏ mận tàn" style="display:inline-block;background:#8B0000;border:1px solid #fff;width:25px;box-shadow:0 0 0 1px #b8b8b8;margin:5px 10px 5px 0; height:22px"></a>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="grid-75" id="catContent">
                    <div class="showPs">
                        <div class="mSort">
                            <div class="filterProduct">
                                <label>
                                    Sắp xếp theo
                                    <select class="input filterMore">
                                        <option name="un-filter" value="{{$dm->Id}}">Bỏ lọc</option>
                                        <option name="price-up" value="{{$dm->Id}}">Giá tăng dần</option>
                                        <option name="price-down"value="{{$dm->Id}}">Giá giảm dần</option>
                                    </select>
                                </label>

                            </div>
                        </div>
                        <div class="viewsProduct">
                            <div class="viewProduct">
                                <div class="pagesMore" style="padding-top: 5px;">
                                    <span>Xem </span>| <a rel="nofollow" href="#" >15</a> | <a href="#">30</a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="listProductcategory">
                        @foreach($pro as $value)
                            <div class="box-pro">
                                <div class="col-sm-4 col-md-3 col-xs-6">
                                    <div class="post-img" style="max-height: 340px">
                                        <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image)}}"></a>
                                        <button style="padding: 1px 13px" class="addc" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true">Yêu thích</i></button>
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

                        <span class="clearfix"></span>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="append"></div>
            </div>
        </div>
    </div>

@stop