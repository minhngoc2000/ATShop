@extends('Admin.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Nhân viên</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Danh sách nhân viên
				</div>
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
						        <ul>
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
										<th>Tên nhân viên</th>
										<th>Email</th>
										<th>Quyền</th>
										<th>Ngày đăng ký</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $count=1;?>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->id!!}</td>
											<td>{!!$row->name!!}</td>
											<td>{!!$row->email!!}</td>
											<td>
												@if($row->level ==1)
													<span style="color:#d35400;">Quản trị hệ thống</span>
												@else
													<span style="color:#27ae60;">Quản trị viên</span>
												@endif

											</td>										
											<td>{!!$row->created_at!!}</td>											
											<td>
											    <a data-toggle="modal" data-target="#myModal_<?=$count?>"href="avascript:void(0)" title="Chi tiết"> Cập nhật</a> &nbsp;
											    @if ($row->level !=1)
											    	<a href="{!!url('admin/nhanvien/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')">Xóa bỏ</a>
											    @endif
												<div id="myModal_<?=$count?>" class="modal fade" role="dialog">
													<div class="modal-dialog">

														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Cập nhật nhân viên</h4>
															</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="panel panel-default">
																			<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
																				<form action="{{url('admin/nhanvien/edit')}}" method="post" role="form" enctype="multipart/form-data">
																					{{ csrf_field() }}
																					<input type="hidden" name="id_staff" value="{{$row->id}}">
																					<div class="form-group">
																						<label for="usr">Tài khoản:</label>
																						<input type="email" name="email" class="form-control" id="usr" value="{!!$row->email!!}">
																					</div>
																					<div class="form-group">
																						<label for="pwd">Mật khẩu:</label>
																						<input type="password"  name="password" class="form-control" id="pwd">
																					</div>
																					<div class="form-group">
																						<label for="input-id">Loại tài khoản </label>
																						<select class="form-control" name="slttype" id="" required>

																							<option value="1">admin</option>
																							<option value="2">nhân viên</option>
																						</select>
																					</div>
																					<div class="form-group">
																						<label for="usr">Họ tên:</label>
																						<input type="text" name="name" class="form-control" id="usr" value="{!!$row->name!!}">
																					</div>

																					<div class="form-group">
																						<label for="usr">Giới tính:</label>
																						<select class="form-control" name="sltsex" id="" value="{!!$row->sex!!}" required >

																							<option value="Nam">Nam</option>
																							<option value="Nữ">Nữ</option>
																						</select>
																					</div>
																					<div class="form-group">
																						<label for="comment">Ngày tháng năm sinh:</label>
																						<input type="date" class="form-control" id="usr" name="birthday" value="{!!$row->birthday!!}">

																					</div>
																					<div class="form-group">
																						<label for="usr">Điện thoại:</label>
																						<input type="number"  name="phone" class="form-control" id="usr" value="{!!$row->phone!!}">
																					</div>
																					<div class="form-group">
																						<label for="comment">Địa chỉ:</label>
																						<textarea  name="address" class="form-control" rows="5" id="comment"> {!!$row->address	!!}</textarea>
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
										<?php $count++?>
									@endforeach								
								</tbody>
							</table>
						</div>
						{!! $data->render() !!}

					</div>

				</div>
				<a data-toggle="modal" data-target="#myModal" class="btn btn-danger"> Thêm nhân viên </a>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Thêm nhân viên</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
												<form action="{{url('admin/nhanvien/add')}}" method="post" role="form" enctype="multipart/form-data">
													{{ csrf_field() }}
													<div class="form-group">
														<label for="usr">Tài khoản:</label>
														<input type="email" name="email" class="form-control" id="usr">
													</div>
													<div class="form-group">
														<label for="pwd">Mật khẩu:</label>
														<input type="password"  name="password" class="form-control" id="pwd">
													</div>
													<div class="form-group">
														<label for="input-id">Loại tài khoản </label>
														<select class="form-control" name="slttype" id="" required>

															<option value="2">admin</option>
															<option value="3">nhân viên</option>



														</select>
													</div>
													<div class="form-group">
														<label for="usr">Họ tên:</label>
														<input type="text" name="name" class="form-control" id="usr">
													</div>

													<div class="form-group">
														<label for="usr">Giới tính:</label>
														<select class="form-control" name="sltsex" id="" required>

														<option value="Nam">Nam</option>
														<option value="Nữ">Nữ</option>
														</select>
													</div>
													<div class="form-group">
														<label for="comment">Ngày tháng năm sinh:</label>
														<input type="date" class="form-control" id="usr" name="birthday">

													</div>
													<div class="form-group">
														<label for="usr">Điện thoại:</label>
														<input type="number"  name="phone" class="form-control" id="usr">
													</div>
													<div class="form-group">
														<label for="comment">Địa chỉ:</label>
														<textarea  name="address" class="form-control" rows="5" id="comment"></textarea>
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
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection