@extends('Page.index')
@section('wishlist')
    <div class="container">

        <div class="row" style="margin-top: 20px">
            <div class="user-control">
                <div class="col-md-9"><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Danh sách sản phẩm yêu thích</h3>
                        </div>
                        <div class="panel-body">
                            <div class="product-list prd-wish-list">

                                <div class="row">
                                    @foreach($data as $value)
                                        <div class="box-pro">
                                            <div class="col-sm-4 col-md-4 col-xs-6">
                                                <div style="display: block;position: absolute;left: 85%;top: 2%; z-index: 999;" class="del"><a href="{{url('xoadanhsach/'.$value->Id)}}"><i style="font-size: 14px" class="fa fa-trash-o"></i></a> </div>
                                                <div class="post-img" style="height: 340px"> <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image)}}"></a> <button class="addc" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true">Yêu thích</i></button> <input type="hidden" class="pro_id" value="{{$value->Id}}"> <a class="viewm" href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}"> <i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a> </div>
                                                <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Name}}</a></h4>
                                                <div class="score-callback" data-score="4" style="cursor: pointer;"> <img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad"> <img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor"> <img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular"> <img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good"> <img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous"> </div>
                                                <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div> <!-- /Product List -->
                        </div>
                    </div>
                   </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="list-link">
                                <h3>Thông tin cá nhân</h3>
                                <ul>
                                    <li><a href="{{url('thong-tin-tai-khoan')}}" title="Thông tin tài khoản"><i class="fa fa-caret-right" aria-hidden="true"></i> Thông tin tài khoản</a></li>
                                    <li><a href="{{url('tai-khoan/doi-mat-khau/'.Auth::user()->id)}}" title="Đổi mật khẩu"><i class="fa fa-caret-right" aria-hidden="true"></i> Đổi mật khẩu</a></li>
                                    <li><a href="{{url('danh-sach-yeu-thich')}}" title="Sản phẩm yêu thích"><i class="fa fa-caret-right" aria-hidden="true"></i> Sản phẩm yêu thích</a></li>
                                </ul>
                            </div>

                            <div class="list-link">
                                <a href="{{url('lich-su-mua-hang')}}" ><h3>Lịch sử mua hàng</h3></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection