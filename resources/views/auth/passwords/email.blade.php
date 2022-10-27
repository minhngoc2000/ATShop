
@extends('layouts.app')
    {{--<div class="container">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 col-md-offset-4">--}}
                    {{--<div class="login-box">--}}
                        {{--<h1 class="text-center">Khôi phục mật khẩu</h1>--}}
                        {{--<form id="yw0"  action="{{ route('password.email')}}"  method="post">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon" id="username"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>--}}
                                    {{--<input autocomplete="off" placeholder=" Địa chỉ email" class="form-control" name="email" id="" type="email">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="captcha">--}}
                                    {{--<img class="captcha-img" id="yw1" src="/customer/captcha.html?v=5aee6309d888c" alt=""><a id="yw1_button" href="/customer/captcha.html?refresh=1"></a>--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon" id="captcha"><i class="fa fa-shield" aria-hidden="true"></i></span>--}}
                                        {{--<input autocomplete="off" placeholder="Mã bảo vệ" class="form-control" name="CustomerResetPasswordForm[captcha]" id="CustomerResetPasswordForm_captcha" type="text">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<button type="submit" class="btn btn-block btn-ali">Gửi yêu cầu khôi phục mật khẩu</button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
