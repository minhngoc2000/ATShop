@extends('Admin.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading">

							<div class="row">
								<div class="col-md-10"><div class="form-group">
										<label for="inputLoai" class="col-sm-3 control-label"><strong> Chọn danh mục </strong></label>
										<div class="col-md-6">
											<select name="sltcate" id="inputsltcate" class="form-control">
												<option value="0">- Chọn một danh mục--</option>
												@foreach($data as $value)
													<option value="{{$value->Id}}">{{$value->Name}}</option>
													@endforeach

											</select>
										</div>
										<div class="col-md-3">
											<a href="{!!url('admin/danhmuc/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới danh mục</button></a>

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
										<th>Tên loại sản phẩm</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									{{--<tr>--}}
										{{--<td>aaaaaa</td>--}}
										{{--<td>aaaaaa</td>--}}

										{{--<td class="list_td aligncenter">--}}
											{{--<a href="../admin/danhmuc/edit/1" title="Sửa"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;--}}
											{{--<a href="../admin/danhmuc/del/1" title="Xóa" onclick="return xacnhan(' ?') "> <span class="glyphicon glyphicon-remove"></span> </a>--}}
										{{--</td>--}}

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

    $(document).ready(function () {

        $('#inputsltcate').change(function () {
            var id=$(this).val();
            console.log(id);
            $.ajax({
                type:'get',
                url:'<?php echo URL::to('admin/ajax/loaisanpham') ?>',
                data:{
                    id:id,
                },

                success:function (data) {
                    console.log(data);
                    $('.loaisanpham').html(data);
                }
            })
        })

        $('#sltsize1').onchange(function (){
            // conssole.log($(this).val());
            alert('aa');
        })
    })
</script>
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection