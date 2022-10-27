@extends('Admin.layouts.master')
@section('content')
	<span class="glyphicon glyphicon-search"></span>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-12 col-md-10">
								<div class="form-group">
								<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách sản phẩm</strong></label>
								<div class="col-md-5">
								</div>
								<div class="col-md-4">
									<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
								</div>
							</div>
								
								
							</div>
							<div class="col-sm-12 col-md-2">

									<a data-toggle="modal" data-target="#myModal" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Sản Phẩm</button></a>
								<div id="myModal" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Thêm tin mới</h4>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="panel panel-default">
															<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
																<form action="{{url('admin/sanpham/add')}}" method="post" role="form" enctype="multipart/form-data">
																	{{ csrf_field() }}
																	<div class="form-group">
																		<label for="input-id">Chọn danh mục</label>
																		<select name="sltcate" id="inputsltcate" required class="form-control inputsltcate">
																			 	<option></option>
																			@foreach($category as $row)
																				<option value="{!!$row->Id!!}" >{!!$row->Name!!}</option>
																			@endforeach
																		</select>
																	</div>
																	<div class="form-group">
																		<label for="input-id">Chọn loại sản phẩm</label>
																		<select name="sltsubcate" id="inputsltsubcate" required class="form-control inputsltsubcate	">
																			{{--@foreach($subcategory as $row)--}}
																			{{--<option value="{!!$row->Id!!}" >{!!$row->Name!!}</option>--}}
																			{{--@endforeach--}}

																		</select>
																	</div>
																	<div class="form-group">
																		<label for="input-id">Tên sản phẩm</label>
																		<input type="text" name="txtname" id="inputTxtname" class="form-control" value=""  required="required">
																	</div>
																	<div class="form-group">
																		<label for="input-id">Chọn màu sắc</label>
																		<select name="sltcolor" id="inputsltcate" required class="form-control">
																			<option value="">Vui lòng chọn 1 màu sắc</option>
																			@foreach($color as $row)
																				<option value="{!!$row->id!!}" >{!!$row->name!!}</option>
																			@endforeach
																		</select>
																	</div>
																	<div class="form-group">
																		<label for="input-id">Giá </label>
																		<input type="number" name="txtprice" id="inputtxtpacket" value="" class="form-control" >
																	</div>
																	<div class="form-group">
																		<label for="input-id">Mô tả </label>
																		<textarea name="txtdescription" id="inputTxtre_Intro" class="form-control"  rows="2"></textarea>
																	</div>
																	<div class="form-group">
																		<div class="form-group">
																			Hình ảnh : <input type="file" name="txtimg1" accept="image/png" id="inputtxtimg"  class="form-control" required >

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
						</div> 
						
					</div>
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
									<a class="close" data-dismiss="alert" href="#">x</a>

									{!! Session::get('flash_massage') !!}
						        </ul>
						    </div>
						@endif
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>
										<th>Mã sp</th>

										<th>Tên sản phẩm</th>
										<th>Màu sắc</th>

										<th>Giá bán</th>
										<th>Hình ảnh</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php $count = 1; ?>
									@foreach($pro as $row)

										<tr>

											<td>{!!$row->Id!!}</td>
											<td>{!!$row->Code!!}</td>

											<td>{!!$row->Name!!}</td>



											<td>{{$row->color['name']}}</td>

											<td>{!!$row->Price!!}&nbsp;VND</td>
											{{--<td>{!!$row->category->name!!}</td>--}}

											<td> <img src="{!!url('images/product/'.$row->Image)!!}" alt="{!!$row->Name!!}" width="50" height="40"></td>
											<td>
											    <a href="{!!url('admin/sanpham/detail/'.$row->Id)!!}" title="Chi tiết"><span class="glyphicon glyphicon-edit">Chitiết</span> </a>
												<a href="javascript:void(0) " data-toggle="modal" data-target="#myModal_<?=$count?>" title="Sửa"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
												<a href="{!!url('admin/sanpham/del/'.$row->Id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
											</td>
											<div id="myModal_<?=$count?>" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Sửa sản phẩm</h4>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-lg-12">
																	<div class="panel panel-default">
																		<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
																			<form action="{{url('admin/sanpham/edit')}}" method="post" role="form" enctype="multipart/form-data">
																				{{ csrf_field() }}
																				<input type="hidden" name="pro_id" value="{{$row->Id}}">
																				<div class="form-group">
																					<label for="input-id">Chọn danh mục</label>
																					<select name="sltcate" id="inputsltcate" class="form-control inputsltcate">
																						<option></option>
																						@foreach($category as $ct)
																							<option value="{!!$ct->Id!!}" >{!!$ct->Name!!}</option>
																						@endforeach
																					</select>
																				</div>
																				<div class="form-group">
																					<label for="input-id">Chọn loại sản phẩm</label>
																					<select name="sltsubcate" id="inputsltsubcate"  required class="form-control inputsltsubcate">
																						{{--@foreach($subcategory as $row)--}}
																						{{--<option value="{!!$row->Id!!}" >{!!$row->Name!!}</option>--}}
																						{{--@endforeach--}}

																					</select>
																				</div>
																				<div class="form-group">
																					<label for="input-id">Tên sản phẩm</label>
																					<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{!!$row->Name!!}">
																				</div>
																				<div class="form-group">
																					<label for="input-id">Chọn màu sắc</label>
																					<select name="sltcolor" id="inputsltcate" class="form-control">
																						<option value="">Vui lòng chọn 1 màu sắc</option>
																						@foreach($color as $cl)
																							<option value="{!!$cl->id!!}" >{!!$cl->name!!}</option>
																						@endforeach
																					</select>
																				</div>
																				<div class="form-group">
																					<label for="input-id">Giá </label>
																					<input type="number" name="txtprice"  value="{!!$row->Price!!}" class="form-control" >
																				</div>
																				<div class="form-group">
																					<label for="input-id">Mô tả </label>
																					<textarea name="txtdescription" id="inputTxtre_Intro" class="form-control"  rows="2">{!!$row->Description!!}</textarea>
																				</div>
																				<div class="form-group">
																					<div class="form-group">
																						Hình ảnh : <input type="file" name="txtimg1" accept="image/png" id="inputtxtimg"  class="form-control" >

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
										</tr>
                                        <?php $count++; ?>
									@endforeach
								</tbody>
							</table>
						</div>
						{!! $pro->render() !!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
	<script>

        $(document).ready(function () {

            $('.inputsltcate').change(function () {
                var id=$(this).val();
                console.log(id);
                $.ajax({
                    type:'get',
                    url:'<?php echo URL::to('admin/ajax/ajax_subcategory') ?>',
                    data:{
                        id:id,
                    },

                    success:function (data) {
                        console.log(data);
                        $('.inputsltsubcate').html(data);
                    }
                })
            })
            // $('.inputsltcate').change(function () {
            //
            //     // var id_pro = $('option:selected', this).attr('');
            //     var id=$(this).val();
            //     console.log(id);
            // })

        })
	</script>
@endsection