@extends('Admin.layouts.master')
@section('content')
	<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dơn đặt hàng</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Danh sách đơn đặt hàng
					
				</div>
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


					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên k/h</th>
										<th>Địa chỉ</th>
										<th>Điện thoại</th>
										<th class="email">Email</th>
										<th>Ngày đặt</th>
										<th>Thành tiền</th>
										<th>H/t thanh toán</th>
										<th> Thanh toán</th>
										<th>Ghi chú</th>
										<th>Xác nhận</th>
										<th>Giao hàng</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php $count = 1; ?>
									@foreach($order as $row)
										<tr>
											<td>{!!$row->Id!!}</td>
											<td>{!!$row->Name!!}</td>
											<td>{!!$row->Address!!}</td>
											<td>{!!$row->PhoneNumber!!}</td>
											<td>{!!$row->Email!!}</td>
											<td>{!!$row->Order_date!!}</td>
											<td><span style="color: red;font-weight: bold">{!!$row->Total!!}</span> Vnd</td>
											<td>{!! $row->Payment_Method !!}</td>
											<td>
												@if($row->Payment_Status=='Đã thanh toán')
													<span style="color:#27ae60;"> Đã thanh toán</span>
												@else
													<span style="color:#d35400;">Chưa thanh toán</span>
												@endif

											</td>
											<td>{!! $row->Note !!}</td>
											<td>
												@if($row->Confirm =='Chưa xác nhận')
													<span style="color:#d35400;">Chưa xác nhận</span>
												@else
													<span style="color:#27ae60;"> Đã xác nhận</span>
												@endif
											</td>

											<td>{{$row->Status}}</td>
											<td>
											    <a href="{!!url('admin/donhang/detail/'.$row->Id)!!}" title="Chi tiết">Chi tiết  </a> &nbsp;
												<a href="javascript:void(0) " data-toggle="modal" data-target="#myModal_<?=$count?>" title="Cập nhật">Cập nhật  </a> &nbsp;
												<div id="myModal_<?=$count?>" class="modal fade" role="dialog">
													<div class="modal-dialog">

														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Cập nhật đơn hàng</h4>
															</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="panel panel-default">
																			<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
																				<form action="{{url('admin/donhang/edit')}}" method="post" role="form" enctype="multipart/form-data">
																					{{ csrf_field() }}
																					<input type="hidden" name="id" value="{{$row->Id}}">

																					<div class="form-group">
																						<label for="input-id">Tên khách hàng</label>
																						<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{!!$row->Name!!}"  required="required">
																					</div>

																					<div class="form-group">
																						<label for="input-id">Địa chỉ</label>
																						<input type="text" name="txtaddress" id="inputTxtname" class="form-control" value="{!!$row->Address!!}"  required="required">
																					</div>

																					<div class="form-group">
																						<label for="input-id">Số điện thoại</label>
																						<input type="number" name="txtphone" id="inputTxtname" class="form-control" value="{!!$row->PhoneNumber!!}"  required="required">
																					</div>
																					<div class="form-group">
																						<label for="input-id">Địa chỉ email</label>
																						<input type="email" name="txtemail" id="inputTxtname" class="form-control" value="{!!$row->Email!!}"  required="required">
																					</div>
																					<div class="form-group">
																						<label for="input-id">Trạng thái đơn hàng</label>
																						<select name="sltstatus" id="inputsltsubcate"  required class="form-control inputsltsubcate">
																							<option value="Đang giao hàng">Đang giao hàng</option>
																							<option value="Đã giao hàng">Đã giao hàng</option>
																							<option value="Chưa giao hàng">Chưa giao hàng</option>

																						</select>
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
												<a href="{!!url('admin/donhang/del/'.$row->Id)!!}"  title="Hủy đơn hàng" onclick="return xacnhan('Xóa danh mục này ?')"> Hủy</a>
											</td>
										</tr>
                                        <?php $count++; ?>
									@endforeach
								</tbody>
							</table>
						</div>
						{!! $order->render() !!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection