@extends('Page.index')
@section('search')
<div class="main">
    <div class="container">
        <div class="grid-100">
            <div class="breadcrumb_view">
                <ul class="breadcrumbs">
                    <li>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <span>Tìm kiếm</span>
                    </li>
                </ul>
                <span class="clearfix"></span>
            </div>
        </div>
    </div>
    <div class="singleSearch">
        <div class="container">
            <div class="grid-25" id="catSideBar">
                <div id="catSideBar">
                    <div class="sidebarSingle">
                        <h1 class="titleSingle">Danh mục</h1>
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
                    </div>
                </div>
            </div>
            <div class="grid-75" id="catContent">
                <h2 style="font-size: 20px;font-weight: 300;border-bottom: 1px dotted #ccc;margin: 5px 0 10px 0;padding: 0 0 5px 0;">
                    {{$num}} <span style="font-size: 20px;color: #999">kết quả tìm kiếm với từ khóa "<strong>{{$key}}"</strong></span>
                </h2>
                <div class="showPs">
                    <div class="mSort">
                        <div class="filterProduct">
                            <label>
                                Sắp xếp theo
                                <select class="input filter_search">
                                    <option name="un-filter" selected="" value="{{$key}}">Bỏ lọc</option>
                                    <option name="price-up" value="{{$key}}">Giá tăng dần</option>
                                    <option name="price-down"value="{{$key}}">Giá giảm dần</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="viewsProduct">
                        <div class="viewProduct">
                            <label class="titleView" id="labelToggle">Xem </label>
                            <select class="pagesMore">
                                <option selected="" value="/search?">15</option>
                                <option selected="" value="/search?q=&amp;icpp=30">30</option>
                            </select>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="listProductcategory">
                    <div class="row">
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
                    </div>


                    <span class="clearfix"></span>
                </div>
                <div class="pagesTop">
                    <div class="paginator"><span class="labelPages">1 - 12 / 1,011</span><span class="titlePages">&nbsp;&nbsp;Trang: </span><span class="currentPage">1</span><a rel="nofollow" href="/search?q=&amp;page=2">2</a><a rel="nofollow" href="/search?q=&amp;page=3">3</a><a rel="nofollow" href="/search?q=&amp;page=4">4</a><a rel="nofollow" class="paging-next ico" href="/search?q=&amp;page=2"></a><a rel="nofollow" class="paging-last" title="Trang cuối" href="/search?q=&amp;page=85"></a></div>
                </div>
            </div>
        </div>
        <div id="append"></div>
    </div>
</div>
    @stop