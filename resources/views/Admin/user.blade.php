@extends('Admin.layouts.master')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

	<div class="table-responsive">
		<table class="table table-bordered table-hover text-center">
			<thead>
				<tr>
					<th colspan="2">Thông tin nhân viên</th>										
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Họ tên</td>
					<td>{!!Auth::guard('admins')->user()->name !!}</td>
				</tr>
				<tr>
					<td>Địa chỉ E-mail</td>
					<td>{!!Auth::guard('admins')->user()->email !!}</td>
				</tr>
				<tr>
					<td>Quyền hạn</td>
					@if(!Auth::guard('admins')->user()->level==1)
						<td>Quản trị hệ thống</td>
						@else
						<td>Quản trị viên</td>
						@endif
				</tr>
				<tr>
					<td>Ngày đăng ký</td>
					<td>{!!Auth::guard('admins')->user()->created_at !!}</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
@endsection