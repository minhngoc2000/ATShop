@extends('Page.index')
@section('news')
    <div class="bread" style="margin-top: 20px">
        <div class="container">
            <p id="breadcrumbs"><i class="fa fa-home"></i>
                <span xmlns:v="http://rdf.data-vocabulary.org/#">
                    <span typeof="v:Breadcrumb"><a href="index.htm" tppabs="http://htshop.esy.es/" rel="v:url" property="v:title">Trang chủ</a> /
                        <span rel="v:child" typeof="v:Breadcrumb"><a href="tin-tuc.htm" tppabs="http://htshop.esy.es/tin-tuc" rel="v:url" property="v:title">Tin tức</a> /
                            <span class="breadcrumb_last">{{$news->Title}}
                            </span>
                        </span>
                    </span>
                </span>
            </p>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="main-single">
                        <h1 class="title-single">{{$news->Title}}</h1>
                        <div class="meta meta-single">
                            <span><i class="fa fa-user" aria-hidden="true"></i>{{$news->Author}}</span>
                            <span><i class="fa fa-calendar-minus-o" aria-hidden="true"></i>{{$news->created_at}}</span>
                            <span class="like">
                     <div class="fb-like"data-size="small" data-show-faces="true" data-share="true"></div>
                  </span>
                            <div class="clear"></div>
                        </div>
                        <article class="post-content">
                            <div class="the-article-body">
                                {{$news->Content}}
                            </div>
                        </article>
                        <div class="meta-s">
                  <span class="like">
                     <div class="fb-like"  data-size="small" data-show-faces="true" data-share="true"></div>
                  </span>
                            <span class="social-s">
                  <a target="_blank" href="" tppabs="https://www.facebook.com/sharer.php?u=http://htshop.esy.es/iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a target="_blank" href="" tppabs="https://plus.google.com/share?url=http://htshop.esy.es/iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                  <a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </span>
                            <div class="clear"></div>
                        </div>
                        <div class="content-cmt">
                            <div class="fb-comments" data-width="100%" data-href="iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html" tppabs="http://htshop.esy.es/iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html" data-numposts="3"></div>
                        </div>
                        <div class="related">
                            <h3 class="title-related">Bài viết liên quan</h3>
                            <ul class="row">
                                @foreach($tinlienquan as $value)
                                <li class="col-xs-12 col-sm-12 col-md-4">
                                    <a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}">
                                    <img src="{{asset('images/news/'.$value->Images)}}">
                                    </a>
                                    <h4><a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Title}}…</a></h4>
                                    <div class="meta">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> {{$value->Author}}</span>
                                        <span><i class="fa fa-calendar-minus-o" aria-hidden="true"></i>{{$value->created_at}}</span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div id="catSideBar">
                        <div class="sidebarSingle">
                            <h2 class="titleSingle">Danh mục</h2>
                            <div class="productSingle">
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
                        <div class="widget">
                            <h3 class="title">
                                <span style="color:white;">Tin mới</span>
                            </h3>
                            <div class="content-w-new">
                                <ul>
                                    @foreach($tinmoi as $value)
                                    <li>
                                        <a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}" >
                                            <img src="{{asset('images/news/'.$value->Images)}}" alt="" title="" width="80px">
                                        </a>
                                        <h4>
                                            <a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Title}}</a>
                                        </h4>
                                        <div class="clear"></div>
                                    </li>
                                        @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop