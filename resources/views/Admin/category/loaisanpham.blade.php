<div class="panel-body loaisanpham" >
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$row->Id}}</td>
                <td>{{$row->Name}}</td>

                <td class="list_td aligncenter">
                    <a href="../admin/danhmuc/edit/1" title="Sửa"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
                    <a href="../admin/danhmuc/del/1" title="Xóa" onclick="return xacnhan('Xóa loại sản phẩm này ?') "> <span class="glyphicon glyphicon-remove"></span> </a>
                </td>

            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>