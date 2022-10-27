@extends('Page.index')
@section('order_history')
    <div class="container">
        <?php
        //        $order = DB::table('order')
        //            ->join('order_detail', 'order_detail.OrderId', '=', 'order.Id')
        //            ->join('Product_detail', 'Product_detail.id', '=', 'order_detail.pro_id')
        //            ->join('Products','Products.Id','=','Product_detail.product_id')
        //            ->where('UserId',Auth::user()->id)
        //            ->get();
        $user = DB::table('users')->where('id',Auth::user()->id)->get();


        ?>
        <div class="row" style="margin-top: 20px">
            <div class="user-control">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    <a class="close" data-dismiss="alert" href="#">x</a>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (Session()->has('flash_level'))
                            <div class="alert alert-success">
                                <ul>
                                    <a class="close" data-dismiss="alert" href="#">x</a>
                                    {!! Session::get('flash_massage') !!}
                                </ul>
                            </div>
                        @endif
                        <div class="panel-heading">
                            <h3 class="panel-title">Cập nhật tài khoản</h3>
                        </div>
                        <div class="panel-body">
                            <div class="product-list prd-wish-list">

                                <form action="{{url('thong-tin-tai-khoan/capnhat')}}" method="post" role="form" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                @foreach( $user as $user)
                                    <input type="hidden" name="id_accunt" value="{{$user->id}}">
                                    <div class="form-group">
                                        <label for="usr">Địa chỉ email</label>
                                        <input type="email" name="email" class="form-control" id="usr" value="{!!$user->email!!}">
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Họ tên:</label>
                                        <input type="text" name="name" class="form-control" id="usr" value="{!!$user->fullname!!}">
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Điện thoại:</label>
                                        <input type="number"  name="phone" class="form-control" id="usr" value="{!!$user->phone!!}">
                                        @endforeach
                                    </div>
                                    <input type="submit" name="btnadd" class="btn btn-primary" value="Cập nhật" class="button" />
                                </form>


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
                                    <li><a href="{{url('tai-khoan/doi-mat-khau')}}" title="Đổi mật khẩu"><i class="fa fa-caret-right" aria-hidden="true"></i> Đổi mật khẩu</a></li>
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