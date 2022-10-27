@extends('Admin.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tin tức</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa bản tin </small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
					@if (count($errors) > 0)
				    	<div class="alert alert-danger">
							<a class="close" data-dismiss="alert" href="#">x</a>
					        <ul>
								<a class="close" data-dismiss="alert" href="#">x</a>
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
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="form-group">
				      			<label for="input-id">Tiêu đề bản tin</label>
				      			<input type="text" name="txtTitle" id="inputTxtTitle" class="form-control" value="{!! old('txtTitle',isset($data->Title) ? $data->Title : null) !!}"  >
				      		</div>
				      		<div class="form-group">
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tác giả : <input type="text" name="txtAuth" id="inputTxtAuth" class="form-control" value="{!! old('txtAuth',isset($data["Author"]) ? $data["Author"] : null) !!}" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tag : <input type="text" name="txttag" id="inputtag" value="{!! old('txttag',isset($data["tag"]) ? $data["tag"] : null) !!}" class="form-control">
					      			</div>
				      			</div>
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
										Ảnh hiện tại: <br><img src="{!!url('images/news/'.$data->Images)!!}" alt="" height="40" width="80">
									</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">					      				
					      				Hình ảnh mới : <input type="file" name="txtimg" accept="image" id="inputtxtimg" value="{!! old('txtimg',isset($data["Images"]) ? $data["Images"] : null) !!}" class="form-control" >
					      			</div>					      		
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Trạng thái : <select name="slstatus" id="inputSlstatus" class="form-control" required="required">
					      					<option value="Hiển thị" selected>Hiển thị</option>
					      					<option value="Tạm ẩn">Tạm ẩn</option>
					      				</select>
					      			</div>
					      			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Chi tiết bản tin</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Tóm tắt </label>
					      				<textarea name="txtIntro" id="inputTxttxtIntro" class="form-control" rows="2" required="required">{!! old('txtIntro',isset($data["Intro"]) ? $data["Intro"] : null) !!}</textarea>
					      				<script type="text/javascript">
                                            CKEDITOR.replace( 'inputTxttxtIntro', {
                                                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                                                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                                                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                                                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                                                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                                                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                                            } );
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Bài viết chi tiết</label>
					      				<textarea name="txtFull" id="inputtxtFull" class="form-control" rows="4" required="required">{!! old('txtFull',isset($data["Content"]) ? $data["Content"] : null) !!}</textarea>
					      				<script type="text/javascript">
                                            CKEDITOR.replace( 'txtFull', {
                                                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                                                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                                                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                                                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                                                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                                                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                                            } );
										</script>
					      			</div>
					      		</div>				      			
				      		</div>		      				      		

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Xác nhận" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection