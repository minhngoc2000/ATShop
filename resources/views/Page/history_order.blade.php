@extends('Page.index')
@section('order_history')
    <div class="container">
        <?php

        $order = DB::table('order')
            ->join('order_detail', 'order_detail.OrderId', '=', 'order.Id')
            ->join('Product_detail', 'Product_detail.id', '=', 'order_detail.pro_id')
            ->join('Products','Products.Id','=','Product_detail.product_id')
            ->where('UserId',Auth::user()->id)
            ->get();

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
                            <h3 class="panel-title">Lịch sử mua hàng</h3>
                        </div>
                        <div class="panel-body">
                            <div class="product-list prd-wish-list">

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên Sp</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Thành tiền</th>
                                            <th>H/t thanh toán</th>
                                            <th> Thanh toán</th>
                                            <th>Ghi chú</th>
                                            <th>Xác nhận</th>
                                            <th>Giao hàng</th>
                                            <th>Ngày đặt</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order as $row)
                                            <tr>
                                                <td>{!!$row->OrderId!!}</td>
                                                <td>{!!$row->Name!!}</td>
                                                <td>{!!$row->Quantity!!}</td>
                                                <td>{!!$row->Price!!}</td>
                                                <td>{!!$row->Total!!}</td>
                                                <td>{!!$row->Payment_Method!!}</td>
                                                <td>{!!$row->Payment_Status!!}</td>
                                                <td>{!!$row->Note!!}</td>
                                                <td>{!!$row->Confirm!!}</td>
                                                <td>{!!$row->Status!!}</td>
                                                <td>{!!$row->Order_date !!}</td>
                                                <td>

                                                    <a href="{!!url('lich-su-mua-hang/xoa/'.$row->OrderId)!!}"  title="Hủy đơn hàng" onclick="return xacnhan('Xóa danh mục này ?')"> Hủy đơn hàng</a>

                                                </td>






                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
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