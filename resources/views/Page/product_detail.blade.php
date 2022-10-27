@extends('Page.index')
@section('product_detail')

    <div class="main">

        <div class="container">
            <div class="grid-100">
                <div class="breadcrumb_view">
                    <ul class="breadcrumbs">
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <a class="72060" href="/nam-pc72060.html">NAM</a>
                        </li>
                        <li>
                            <a class="158841" href="/denim-pc158841.html">Denim</a>
                        </li>
                        <div class="alert alert-success msgajax">

                            <p> <a style="color: red;font-weight: bold;font-size: 20px" class="close" data-dismiss="alert" href="javascript:window.location.href=window.location.href">x</a>
                            </p>
                            <strong>Thành công </strong> Sản phẩm đã được thêm vào giỏ hàng<br>
                            <a href="{{route('list-cart')}}">Xem giỏ hàng</a>
                        </div>
                    </ul>
                    <span class="clearfix menuActive" data-rel="view"></span>
                </div>
            </div>
        </div>
        <div class="detailsProducts">

            <div class="container">
                <div class="grid-75">

                    <div class="detailsmainProduct" id="filter">

                        <div id="productDetail">
                            <div class="" id="imgZoom">
                                <div id="zoomer">
                                    <img id="zoom_01" width="100%" class="cloudzoom" src="{{asset('/images/product/'.$pro->Image)}}" data-zoom-image="{{asset('/images/product/'.$pro->Image)}}">
                                </div>
                                <div id="zoomSlide">
                                    <a href="#" id="prevSlideZ" class="" style="display: block;"></a>
                                    <a href="#" id="nextSlideZ" class="" style="display: block;"></a>
                                    <p class="brBottomz"></p>
                                    <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 339px; height: 72px; margin: 0px; overflow: hidden;">
                                        <ul id="listImgZoom_2" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 6px; margin: 0px; width: 1323px; height: 72px;">
{{--                                            <li data-src="">--}}
{{--                                                <img class="cloudzoom-gallery" src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_01_thumb_294x440.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_01_thumb_294x440.jpg', zoomImage: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_01_401x600.jpg'">--}}
{{--                                            </li>--}}
{{--                                            <li data-src="">--}}
{{--                                                <img class="cloudzoom-gallery" src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_02_thumb_294x441.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_02_thumb_294x441.jpg', zoomImage: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_02_400x600.jpg'">--}}
{{--                                            </li>--}}
{{--                                            <li data-src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_03_thumb_294x440.jpg">--}}
{{--                                                <img class="cloudzoom-gallery" src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_03_thumb_294x440.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_03_thumb_294x440.jpg', zoomImage: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_03_401x600.jpg'">--}}
{{--                                            </li>--}}
{{--                                            <li data-src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_04_thumb_294x440.jpg" style="margin-right: 10px;">--}}
{{--                                                <img class="cloudzoom-gallery" src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_04_thumb_294x440.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_04_thumb_294x440.jpg', zoomImage: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_04_401x600.jpg'">--}}
{{--                                            </li>--}}
{{--                                            <li data-src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_1060003305_thumb_294x440.jpg">--}}
{{--                                                <img class="cloudzoom-gallery" src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_1060003305_thumb_294x440.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_1060003305_thumb_294x440.jpg', zoomImage: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_1060003305_401x600.jpg'">--}}
{{--                                            </li>--}}
{{--                                            <li data-src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_06_thumb_294x440.jpg">--}}
{{--                                                <img class="cloudzoom-gallery" src="//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_06_thumb_294x440.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_06_thumb_294x440.jpg', zoomImage: '//cdn.nhanh.vn/cdn/store/81/ps/20180511/1_2_21_2_05_001_118_02_10600033_06_401x600.jpg'">--}}
{{--                                            </li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div>

                            <div class="" id="productInfo">

                                <h1 class="dttitleProduct">{!! $pro->Name !!}</h1>
                                <div class="colL">
                                    <span style="position: relative;top: 2px;">Mã sản phẩm:</span>
                                </div>
                                <div class="colL-1">{!! $pro->Code !!}</div>
                                <div class="clear"></div>
                                <div class="tableDetails">
                                    <div class="colorProduct">
                                        <div class="colL">
                                            <span style="position: relative;top: 2px;">Màu sắc</span>
                                        </div>
                                        <div class="colL-1">
                                            <div class="attr">
                                                <p class="color req">
                                                    <a  id="color" href="javascript:void(0)"  class="cloudzoom-gallery active" color="{!! $pro->color->name !!}" title="{{$pro->color->title}}" style="background-color: {{$pro->color->style}}"></a>
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="optionSize">
                                        <div class="colL">
                                            <span style="position: relative;top: 2px;">Size: </span>
                                        </div>
                                        <div class="colL-1">
                                            <p class="size req" column="i5">
                                                @foreach($product_detail as $row)
                                                    <a class="size" id_pro_detail="{!! $row->id !!}" href="javascript:void(0)" rel="nofollow" size="{!! $row->size !!}">{!! $row->size !!}</a>
                                                @endforeach
                                                
                                            </p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="price">
                                    <p style="font-weight:bold;">
                                        <span>{!! $pro->Price !!} VNĐ </span>
                                    </p>
                                </div>
                                <div class="attr">
                                    <br>
                                    <div class="qualityAddcart">
                                        <p class="qty"><span>Qty</span><i id="psQtt" val="1" min="1">1</i><i id="psQttUp">+</i><i id="psQttDown">-</i></p>
                                     <button   id="addToCart" title="Vui lòng chọn màu sắc hoặc kích cỡ!" class="btn unsel" >Mua ngay</button>
                                    </div>
                                    <span class="clearfix"></span>
                                    <br>
                                </div>
                                <div class="policy active">
                                    <label><i class="fa fa-caret-down"></i>&nbsp; Chi tiết sản phẩm</label>
                                    <p>
                                        <span class="brandView">Xuất xứ: Thương hiệu Bò sữa</span>
                                    </p>
                                </div>
                                <div class="policy active">
                                    <label><i class="fa fa-caret-down"></i>&nbsp; Mua hàng trực tiếp tại cửa hàng</label>
                                    <p><span>2 Phạm Minh Đức, Ngô Quyền, TP. Hải Phòng (<b class="success-pro">còn hàng</b>)</span><span>133 Thái Hà, Phường Trung Liệt,Q.Đống Đa, Hà Nội (<b class="success-pro">còn hàng</b>)</span><span>BS 93 Nguyễn Chí Thanh, Phường Láng Thượng (<b class="success-pro">còn hàng</b>)</span><span>135 Nguyễn Văn Cừ,Phường Ngọc Lâm,Quận Long Biên, Hà Nội (<b class="success-pro">còn hàng</b>)</span></p>
                                </div>
                                <div class="policy">
                                    <label><i class="fa fa-caret-right"></i>&nbsp; Giao hàng và trả lại hàng</label>
                                    <p style="display: none"></p>
                                    <p><span>Đổi hàng trong vòng 72h</span> <span>Phí vận chuyển nội thành Hà Nội: 20.000&nbsp;</span><span>Phí vận chuyển ngoại thành/ngoại tỉnh: tùy thuộc vào địa điểm</span> <span>Thanh toán&nbsp;khi nhận hàng</span></p>
                                    <p></p>
                                </div>
                                <div id="sizeTb" style="border-top: 1px solid #DDD;padding: 10px 0px;color: #777">
                                    <label>
                                        <i class="fa fa-caret-right"></i>
                                        &nbsp; Tải bảng size</label>
                                    <p id="dialogContent" style="display: none">
                                        <img style="max-width: 100%" src="//cdn.nhanh.vn/cdn/store/81/bn/sb_1483514660_605.png">
                                    </p>
                                </div>
                                <div class="connectSocial">
                                    <ul class="add-to-links">
                                        <li>
                                            <a class="setFav" href="javascript:void(0)"><i class="fa fa-heart-o"></i><span>Sản phẩm yêu thích</span></a>
                                        </li>
                                        <div class="clear"></div>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="maintabContent">
                            <ul id="tabDetailspro">
                                <li id="tab_link-01_01" class="litabDetails parrentTab">
                                    <a href="#">Mô tả sản phẩm</a>
                                </li>
                                <div class="clear"></div>
                            </ul>
                            <div class="tabContent">
                                <div class="_tab-01 tab_link-01_01">
                                    <div class="contentTab"></div>
                                </div>
                            </div>
                            <br>
                            <div class="fb-like fb_iframe_widget" data-href="" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=2&amp;href=http%3A%2F%2Fbosua.vn%2Fproduct%2F7293295&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f11f22ba9c103d8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.12/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FRQ7NiRXMcYA.js%3Fversion%3D42%23cb%3Dfab47f4c6e31a%26domain%3Dbosua.vn%26origin%3Dhttp%253A%252F%252Fbosua.vn%252Ff21bffc82d1de1%26relation%3Dparent.parent&amp;container_width=2&amp;href=http%3A%2F%2Fbosua.vn%2Fproduct%2F7293295&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 122px; height: 20px;" class=""></iframe></span></div>
                            <div class="google-like">
                                <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1527078123685" name="I0_1527078123685" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;annotation=none&amp;origin=http%3A%2F%2Fbosua.vn&amp;url=http%3A%2F%2Fbosua.vn%2Fproduct%2F7293295&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.997mSnhiNJs.O%2Fm%3D__features__%2Fam%3DQQE%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPmVgCnYb7QaTxiF7I5sILreCm3lQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1527078123685&amp;_gfid=I0_1527078123685&amp;parent=http%3A%2F%2Fbosua.vn&amp;pfname=&amp;rpctoken=11559546" data-gapiattached="true" title="G+"></iframe></div>
                                <div id="___plus_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 67px; height: 20px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 67px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I1_1527078123693" name="I1_1527078123693" src="https://apis.google.com/u/0/se/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;action=share&amp;annotation=bubble&amp;origin=http%3A%2F%2Fbosua.vn&amp;url=http%3A%2F%2Fbosua.vn%2Fproduct%2F7293295&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.997mSnhiNJs.O%2Fm%3D__features__%2Fam%3DQQE%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPmVgCnYb7QaTxiF7I5sILreCm3lQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I1_1527078123693&amp;_gfid=I1_1527078123693&amp;parent=http%3A%2F%2Fbosua.vn&amp;pfname=&amp;rpctoken=35851556" data-gapiattached="true" title="G+"></iframe></div>
                                <script type="text/javascript">(function() {
                                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                        po.src = 'https://apis.google.com/js/platform.js';
                                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                    })();
                                </script>
                            </div>
                            <br>
                            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" style="width:100% !important;" data-href="http://bosua.vn/product/7293295" data-width="100%" data-numposts="5" data-colorscheme="light" fb-xfbml-state="rendered"><span style="height: 178px;"><iframe id="f2eb8a19503d4b" name="f194dcda3dd72e8" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=&amp;channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FRQ7NiRXMcYA.js%3Fversion%3D42%23cb%3Df3669a05dc7ba1c%26domain%3Dbosua.vn%26origin%3Dhttp%253A%252F%252Fbosua.vn%252Ff21bffc82d1de1%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=http%3A%2F%2Fbosua.vn%2Fproduct%2F7293295&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;skin=light&amp;version=v2.12&amp;width=100%25" style="border: none; overflow: hidden; height: 178px; width: 100%;"></iframe></span></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="grid-25" id="catSideBar">
                    <div id="catSideBar">
                        <div class="sidebarSingle">
                            <h2 class="titleSingle">Danh mục</h2>
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

            </div>
            <div class="clear"></div>
        </div>
        <div class="container" style="margin-bottom: 50px">
            <h3><span style="margin-left: 45%">Sản phẩm tương tự</span></h3>
            <div class="row">
                @foreach($relate_pro as $value)
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

            </div>

            <div class="modal"><!-- Place at bottom of page --></div>
        <style>
            .msgajax{
                display: none;
            }
            .modal {
                display:    none;
                position:   fixed;
                z-index:    1000;
                top:        0;
                left:       0;
                height:     100%;
                width:      100%;
                background: rgba( 255, 255, 255, .8 )
                url('http://i.stack.imgur.com/FhHRx.gif')
                50% 50%
                no-repeat;
            }

            /* When the body has the loading class, we turn
               the scrollbar off with overflow:hidden */
            body.loading .modal {
                overflow: hidden;
            }

            /* Anytime the body has the loading class, our
               modal element will be visible */
            body.loading .modal {
                display: block;
            }
        </style>
        </div>
        <script>
            $("#zoom_01").elevateZoom({
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500
            });





        </script>
        <script type="text/javascript" src="/min/?f=s99L2pzL3RyYW5zbGF0ZS92aS12bi5qcywvanMvanF1ZXJ5L2pxdWVyeS5taW4uanMsL2pzL2xpYi5qcywvdHAvVDAwMjUvanMvanF1/ZXJ5LWEuanMsL3RwL1QwMDI1L2pzL2NlbnR1cmlvbi5qcywvdHAvVDAwMjUvanMvanF1ZXJ5LmVhc2luZy4xLjMuanMsL3RwL1Qw/MDI1L2pzL2pxdWVyeS5mbGV4c2xpZGVyLmpzLC9qcy9qcXVlcnkvc2xpbXNjcm9sbC5taW4uanMsL2pzL2pxdWVyeS9qcXVlcnkt/dWktMS4xMC4zLmN1c3RvbS5taW4uanMsL2pzL2pxdWVyeS9qcXVlcnkuY2Fyb3VGcmVkU2VsLTYuMi4xLXBhY2tlZC5qcywvanMv/anF1ZXJ5L2ZhbmN5Ym94LTIuMS41L3NvdXJjZS9qcXVlcnkuZmFuY3lib3gucGFjay5qcywvanMvanF1ZXJ5L2pxdWVyeS5sYXp5/bG9hZC5taW4uanMsL2pzL2pxdWVyeS9qcXVlcnkubnVtYmVyLm1pbi5qcywvdHAvVDAwMjUvanMvc3RvcmVzLzgxbWFpbi5qc192/NDc=/"></script><script type="text/javascript" src="/min/?f=s99L2pzL2pxdWVyeS9jbG91ZHpvb20vY2xvdWR6b29tLmpzX3YwMQ==/"></script> <script type="text/javascript" src="/min/?f=s99L3RwL1QwMDI1L2pzL3N0b3Jlcy9wdmlldzgxLmpzX3YwMw==/"></script>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));


        </script>
        <script>

            $body = $("body");

            $(document).on({
                ajaxStart: function() { $body.addClass("loading");    },
                ajaxStop: function() { $body.removeClass("loading"); }
            });
            var $loading = $('#loading').hide();
            $(document)
                .ajaxStart(function () {
                    ajaxLoadingTimeout = setTimeout(function () {
                        $loading.show();
                    })

                })
                .ajaxStop(function () {
                    $loading.hide();
                });
            $(".size").click(function () {

                $(this).addClass('active').siblings('.active').removeClass('active');




            })
            var color='';
            var size='';
            var id='';
            var qty=$('#psQtt').html();

            $('#psQttUp').click(function () {
                qty=$('#psQtt').html();
                qty=parseInt(qty)+1;
                console.log(qty);
                $('#psQtt').html(qty);
            })
            $('#psQttDown').click(function () {
                qty=$('#psQtt').html();
                if(parseInt(qty)>0){
                    qty=parseInt(qty)-1;
                    console.log(qty);
                    $('#psQtt').html(qty);
                }

            })
            $("a").click(function () {
                size= $( this ).attr( "size");
                console.log('size',size);



            })
            $("a").click(function () {
                id_pro_detail= $( this ).attr( "id_pro_detail");
                console.log('id_pro_detail',id_pro_detail);



            })

                color= $('#color').attr( "color");
                console.log('color',color);


            var id=$("#product_id").val();
            console.log('id',id);
            $('#addToCart').click(function () {
                if(size==''){
                    alert('Vui lòng chọn kích cỡ')
                }
                if(size!=''){
                $.ajax({
                    type:'get',
                    url:'<?php echo URL::to("addcart/id") ?>',
                    data:{
                        id:id_pro_detail,
                        size:size,
                        qty:qty,
                        color:color,
                    },

                    success:function (result) {

                        $("#cart_count").html(result);
                        $(".msgajax").css({"position":" fixed","display":"block",'left':'42%','bottom':'54%','z-index':'999'});

                    }
                })
               }

            })

        </script>

    </div>

@endsection