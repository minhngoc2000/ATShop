
@extends('Page.index')
@section('changepassword')
    @if (Session()->has('flash_level'))
        <div style="width: 200px;margin: 0 auto">
        <div class="alert alert-success" style="text-align: center" >
            <ul>
                <a class="close" data-dismiss="alert" href="#">x</a>

                {!! Session::get('flash_massage') !!}
            </ul>
        </div>
        </div>
    @endif
    <div class="container">

        <div class="row" style="margin-top: 20px">
            <div class="user-control">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đổi mật khẩu đăng nhập vào hệ thống</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" id="yw0" action="{{url('thong-tin-tai-khoan/doi-mat-khau')}}" method="post">
                                {{ csrf_field() }}

                                <input type="hidden" name="id" value="{{$id}}">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="CustomerChangePasswordForm_current_password">Mật khẩu hiện tại</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="current_password" id="CustomerChangePasswordForm_current_password" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="new_password">Mật khẩu mới</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="new_password" id="CustomerChangePasswordForm_new_password" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="CustomerChangePasswordForm_new_password_confirmation">Xác nhận mật khẩu</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="new_password_confirmation" id="CustomerChangePasswordForm_new_password_confirmation" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Đổi mật khẩu đăng nhập</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="list-link">
                                <h3>Thông tin cá nhân</h3>
                                <ul>
                                    <li><a href="{{url('tai-khoan/doi-mat-khau')}}" title="Đổi mật khẩu"><i class="fa fa-caret-right" aria-hidden="true"></i> Đổi mật khẩu</a></li>
                                    <li><a href="{{url('danh-sach-yeu-thich')}}" title="Sản phẩm yêu thích"><i class="fa fa-caret-right" aria-hidden="true"></i> Sản phẩm yêu thích</a></li>
                                </ul>
                            </div>

                            <div class="list-link">
                                <a href="#" ><h3>Lịch sử mua hàng</h3></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection