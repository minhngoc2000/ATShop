@extends('Admin.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Chi tiết đơn hàng </li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" role="form">	
					<input type="hidden" name="_token" value="{{ csrf_token() }}">				
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
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th> Họ tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Điện thoại</th>
											<th>Ngày đặt</th>
											<th>Tổng tiền</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{!!$order->Id!!}</td>
											<td>{!!$order->Name!!}</td>
											<td>{!!$order->Address!!}</td>
											<td>{!!$order->PhoneNumber!!}</td>
											<td>{!!$order->created_at!!}</td>
											<td>{!!$order->Total !!} Vnđ</td>
										</tr>
									</tbody>
								</table>
							</div>
						<div class="panel-heading">						 
							Chi tiết sản phẩm trong đơn đặt hàng
						</div>
						<div class="panel-body" style="font-size: 12px;">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>										
											<th>Mã sp</th>
											<th>Hình ảnh</th>
											<th>Tên sản phẩm</th>
											<th> Kích cỡ </th>
											<th> Số lượng </th>
											<th>Giá bán</th>

										</tr>
									</thead>
									<tbody>
										@foreach($order_detail as $row)
											<tr>
												<td>{!!$row->Code!!}</td>
												<td> <img src="{!!asset('images/product/'.$row->Image)!!}" alt="" width="50" height="40"></td>
												<td>{!!$row->Name!!}</td>
												<td>{!!$row->size!!}</td>

												<td>{!!$row->Quantity	!!} </td>
												<td>{!! number_format($row->Price) !!} Vnđ</td>

											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<button type="submit" onclick="return xacnhan('Xác nhận đơn hàng này ?')"  class="btn btn-danger"> Xác nhận đơn hàng </button>
				</form>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection