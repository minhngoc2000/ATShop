{{--@foreach($pro as $value)--}}
    {{--<div class="box-pro">--}}
        {{--<div class="col-sm-4 col-md-3 col-xs-6" >--}}
            {{--<div class="post-img">--}}
                {{--<a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image)}}"></a>--}}
                {{--<button style="padding: 1px 13px;" class="addc" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true">Yêu thích</i></button>--}}
                {{--<input type="hidden" class="pro_id" value="{{$value->Id}}">--}}
                {{--<a class="viewm" href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">--}}
                    {{--<i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a>--}}
            {{--</div>--}}
            {{--<h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Name}}</a></h4>--}}
            {{--<div class="score-callback" data-score="4" style="cursor: pointer;">--}}
                {{--<img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad">--}}
                {{--<img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor">--}}
                {{--<img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular">--}}
                {{--<img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good">--}}
                {{--<img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous">--}}

            {{--</div>--}}
            {{--<p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span--}}
                                {{--class="woocommerce-Price-currencySymbol">₫</span></span></span></p>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endforeach--}}
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