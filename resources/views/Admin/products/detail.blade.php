@extends('Admin.layouts.master')
@section('content')
    <!-- main content - noi dung chinh trong chu -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">Chi tiết sản phẩm </li>
            </ol>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">

                    <div class="panel panel-default">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <a class="close" data-dismiss="alert" href="#">x</a>

                                <ul>

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (Session()->has('flash_level'))
                            <div class="alert alert-success">
                                <a class="close" data-dismiss="alert" href="#">x</a>

                                <ul>
                                    {!! Session::get('flash_massage') !!}
                                </ul>
                            </div>
                        @endif
                        <div class="panel-heading">
                            Chi tiết sản phẩm
                        </div>
                        <div class="panel-body" style="font-size: 12px;">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Kích cỡ</th>

                                        <th>Số lượng </th>
                                        <th>Giá bán</th>
                                        <th>Trạng thái</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <?php $count = 1; ?>
                                    @foreach($pro_detail as $row)
                                        <tr>
                                            <td>{!!$row->id!!}</td>
                                            {{--<td> <img src="{!!asset('images/product/'.$row->image1)!!}" alt="iphone" width="50" height="40"></td>--}}
                                            <td>{!!$row->size!!}</td>

                                            <td>{!!$row->quantity	!!} </td>
                                            <td>{!! number_format($pro->Price) !!} Vnđ</td>
                                            <td>
                                                @if($row->status =='Sẵn hàng')
                                                    <span style="color:blue;">Còn hàng</span>
                                                @else
                                                    <span style="color:#27ae60;"> Tạm hết</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#myModal_<?=$count?>"  href="javascript:void(0) " title="Sửa sản phẩm"><span class="glyphicon glyphicon-edit">Sửa</span> </a>

                                                <a href="{!!url('admin/sanpham/deldetail/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
                                                <div id="myModal_<?=$count?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Sủa chi tiết sản phẩm</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
                                                                                <form action="{{url('admin/sanpham/editdetail')}}" method="post" role="form" enctype="multipart/form-data">
                                                                                    {{ csrf_field() }}
                                                                                    <input  name="pro_id"type="hidden" value="{{$pro->Id}}">
                                                                                    <input  name="pro_detail_id"type="hidden" value="{{$row->id}}">
                                                                                    <div class="form-group">
                                                                                        <label for="input-id">Kích cỡ </label>
                                                                                        <select class="form-control" name="sltsize" id="sltsize" required>
                                                                                            <option value="S">S</option>
                                                                                            {{--<option value="{{$value->name}}}"selected>{{$value->name}}</option>--}}
                                                                                            <option value="L">L</option>
                                                                                            <option value="M">M</option>
                                                                                            <option value="XL">XL</option>
                                                                                            <option value="Free">Free</option>



                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="input-id">Số lượng </label>
                                                                                        <input type="number" name="txtquantity" id="inputtxtpacket" value="{{$row->quantity}}" class="form-control" >
                                                                                    </div>
                                                                                            <div class="form-group">
                                                                                                <label for="input-id">Trạng thái</label>
                                                                                                <select name="txtstatus" id="" class="form-control">
                                                                                                    @if($row->status=='Tạm hết hàng')
                                                                                                        <option value="Sẵn hàng">Sẵn hàng</option>
                                                                                                        <option value="Tạm hết hàng" selected>Tạm hết hàng</option>

                                                                                                    @else
                                                                                                        <option value="Tạm hết hàng" >Tạm hết hàng</option>
                                                                                                        <option value="Sẵn hàng" selected>Sẵn hàng</option>
                                                                                                    @endif
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group">
                                                                                                    Hình ảnh1 : <input type="file" name="txtimg1" accept="image/png" id="inputtxtimg"  class="form-control" >
                                                                                                    Ảnh cũ: <img src="{!!url('images/product/'.$row->image1)!!}" alt="{!!$row->image1!!}" width="80" height="60">

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group">
                                                                                                    Hình ảnh2 : <input type="file" name="txtimg2" accept="image/png" id="inputtxtimg"  class="form-control" >
                                                                                                    {{--Ảnh cũ: <img src="{!!url('uploads/products/'.$pro->images)!!}" alt="{!!$pro->images!!}" width="80" height="60">--}}
                                                                                                    Ảnh cũ: <img src="{!!url('images/product/'.$row->image2)!!}" alt="{!!$row->image2!!}" width="80" height="60">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="form-group">
                                                                                                    Hình ảnh 3 : <input type="file" name="txtimg3" accept="image/png" id="inputtxtimg"  class="form-control" >
                                                                                                    Ảnh cũ: <img src="{!!url('images/product/'.$row->image3)!!}" alt="{!!$row->image3!!}" width="80" height="60">

                                                                                                </div>
                                                                                            </div>


                                                                                            <input type="submit" name="btnadd" class="btn btn-primary" value="Lưu lại" class="button" />
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!--/.row-->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </td>

                                        </tr>
                                        <?php $count++; ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a data-toggle="modal" data-target="#myModal" class="btn btn-danger"> Thêm chi tiết sản phẩm </a>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Sủa chi tiết sản phẩm</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
                                                <form action="{{url('admin/sanpham/adddetail')}}" method="post" role="form" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input  name="pro_id"type="hidden" value="{{$pro->Id}}">
                                                    <div class="form-group">
                                                        <label for="input-id">Kích cỡ </label>
                                                        <select class="form-control" name="sltsize" id="sltsize" required>
                                                            <option value="">Vui lòng chọn kích cỡ</option>

                                                            <option value="S">S</option>
                                                            <option value="L">L</option>
                                                            <option value="M">M</option>
                                                            <option value="XL">XL</option>
                                                            <option value="Free">Free</option>



                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-id">Số lượng </label>
                                                        <input type="number" name="txtquantity" id="inputtxtpacket" value="" class="form-control" placeholder="Nhập số lượng"  required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-id">Trạng thái</label>
                                                        <select name="txtstatus" id="" class="form-control">

                                                                <option value="Sẵn hàng" selected>Sẵn hàng</option>
                                                                <option value="Tạm hết hàng" >Tạm hết hàng</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            Hình ảnh1 : <input type="file" name="txtimg1" accept="image/png" id="inputtxtimg"  class="form-control" required >

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            Hình ảnh2 : <input type="file" name="txtimg2" accept="image/png" id="inputtxtimg"  class="form-control"  >
                                                            {{--Ảnh cũ: <img src="{!!url('uploads/products/'.$pro->images)!!}" alt="{!!$pro->images!!}" width="80" height="60">--}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            Hình ảnh 3 : <input type="file" name="txtimg3" accept="image/png" id="inputtxtimg"  class="form-control" r >

                                                        </div>
                                                    </div>


                                                    <input type="submit" name="btnadd" class="btn btn-primary" value="Lưu lại" class="button" />
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection