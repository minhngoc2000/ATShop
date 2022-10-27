<!-- left menu - menu ben  trai	 -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Tìm kiếm ...">
			</div>
		</form>
		<ul class="nav menu">

			<li class="active"><a href="{!!url('admin/home/')!!}"><span class="glyphicon glyphicon-home"></span>Trang chủ</a></li>
			<li id="danhmuc"><a href="{!!url('admin/danhmuc')!!}"> <span class="glyphicon glyphicon-tasks"></span>
					 Danh mục</a></li>

			<li id="sanpham"><a href="{!!url('admin/sanpham/all')!!}"><span class="glyphicon glyphicon-list-alt"></span>	 Sản phẩm </a></li>
			<li><a href="{!!url('admin/news')!!}">          <span class="glyphicon glyphicon-pushpin"></span>Tin tức</a></li>

			{{-- <li><a href="{!!url('admin/nhaphang')!!}"><svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Nhập hàng</a></li> --}}

			<li><a href="{!!url('admin/donhang')!!}"><i class="glyphicon glyphicon-calendar"></i> &nbsp;&nbsp;Đơn đặt hàng</a></li>

			<li><a href="{!!url('admin/khachhang')!!}"><span class="glyphicon glyphicon-list-alt"></span>

					Khách hàng</a></li>

			<li><a href="{!!url('admin/nhanvien')!!}"><i class="glyphicon glyphicon-user"></i> &nbsp;&nbsp;Nhân Viên</a></li>
			<li><a href="{!!url('admin/thongke')!!}"><i class="glyphicon glyphicon-calendar"></i> &nbsp;&nbsp;Thống kê</a></li>


			<li role="presentation" class="divider"></li>

			{{--<li><a href="{!!url('admin/lichsu')!!}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Thống kê</a></li>--}}
		</ul>

	</div><!--/.sidebar-->
<!-- /left menu - menu ben  trai	 -->