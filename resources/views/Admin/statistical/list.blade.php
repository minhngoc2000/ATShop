@extends('Admin.layouts.master')
@section('content')
    <!-- main content - noi dung chinh trong chu -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Thông kê</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                 <?php  $date=getdate();
                        $day=$date['mday'];
                        $mon=$date['mon'];
                        $year=$date['year'];
                        $order_ngay=DB::table('Order_detail')
                            ->join('Product_detail', 'Product_detail.id', '=', 'order_detail.pro_id')
                            ->join('Products','Products.Id','=','Product_detail.product_id')->whereDate('Order_detail.created_at',$year.'-'.$mon.'-'.$day)->get();


//                        dd($order_ngay);
//                        $i=1;
//                        $data=array();SELECT

//                        foreach ($order_ngay as $vl){
//                          $data[$i]=DB::table('Order_detail')
//                                ->join('Product_detail', 'Product_detail.id', '=', 'order_detail.pro_id')
//                                ->join('Products','Products.Id','=','Product_detail.product_id')->whereDate('Order_detail.created_at',$year.'-'.$mon.'-'.$day)
//                                ->where('Product_detail.id',$vl->pro_id)->get();
//
//                          $i++;
//                        }



                        $tongdoanhsotheongay=\App\Orderdetail::whereDate('created_at',$year.'-'.$mon.'-'.$day)->sum('Quantity');



                        ?>
                        <div class="row">
                            <div class="col-md-10"><div class="form-group">
                                    <label for="inputLoai" class="col-sm-3 control-label"><strong> Doanh số bán hàng </strong></label>
                                    <div class="col-md-6">

                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control"  value="{{$day}}/{{$mon}}/{{$year}}"/>
                                                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                                </div>
                                            </div>
                                        </div>


                                    <div class="col-md-3">
                                        <a href="{!!url('admin/danhmuc/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Xuất báo cáo</button></a>

                                    </div>

                                </div>


                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>

                    </div>


                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @elseif (Session()->has('flash_level'))
                        <div class="alert alert-success">
                            <ul>
                                {!! Session::get('flash_massage') !!}
                            </ul>
                        </div>
                    @endif
                    <div class="panel-body loaisanpham" >
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên  phẩm</th>
                                    <th>Kích cỡ</th>
                                    <th>Số lượng bán</th>
                                    <th>Thành tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $tongsoluong=0;
                                $tongtien=0;
                                ?>
                                @foreach($order_ngay as $value)
                                <tr>
                                    <?php
                                    $tongsoluong=$tongsoluong+ $value->Quantity;
                                    $tongtien=$tongtien+ $value->Quantity*$value->Unit_Price;
                                    ?>

                                    <td>{{ $value->id}}</td>
                                <td>{{ $value->Name}}</td>
                                    <td>{{ $value->size}}</td>
                                <td>{{ $value->Quantity}}</td>
                                    <td>{{ $value->Quantity*$value->Unit_Price}} VND</td>



                                </tr>
                                    @endforeach
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><span style="color: red;font-weight: bold">Tổng số lượng:{{$tongsoluong}}</span></th>
                                    <th><span style="color: red;font-weight: bold">Tổng tiền:{{$tongtien}}&nbsp;VND</span></th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
    <script>


        $('#datetimepicker').data("DateTimePicker").FUNCTION()
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });

    </script>
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection