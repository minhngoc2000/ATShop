@extends('Page.index')

@section('checkout')

    <div class="main">
        <input type="hidden" class="checkStoreId" value="81">
        <div class="singleCheckout">
            <div class="container">
                <form action="{{route('postcheckout')}}" method="post" id="formCheckOut" class="grid1200">
                    {!! csrf_field() !!}
                    <div class="grid-100">
                        <div class="formCheckout">
                            <div class="grid-100">
                                <h1 class="titleCheckout">Thanh toán trực tuyến an toàn</h1>
                            </div>
                            <div id="column1" class="grid-25">

                                @if(Auth::check())
                                    <div class="infoCustomer">
                                        <h2><span>1 </span>Thông tin khách hàng</h2>
                                        <div class="purchaseInfo">
                                            <label>
                                                Họ và tên: *
                                                <input type="text" name="customerName" class="validate[required] input customerName" value="{{Auth::user()->username}}" id="form-validation-field-0" required readonly>
                                            </label>
                                            <label>Điện thoại: *
                                                <input type="text" name="customerMobile" class="validate[required,custom[phone]] input customerMobile" value="{{Auth::user()->phone}}" required >
                                            </label><label>Email: *
                                                <input type="email" name="customerEmail" class="validate[required,custom[email]] input customerEmail" value="{{Auth::user()->email}}" required  style=" display:block;width:80%;padding:5px;border:1px solid #ccc;margin:5px 0">
                                            </label>
                                            <label>
                                                Tỉnh/ Thành phố: *
                                                <select id="cityId" name="customerCityId" class="validate[required] input" required>
                                                    <option value="">Chọn Tỉnh/ thành phố</option>
                                                    @foreach($address as $data)
                                                        @foreach((array)$data as $vl)
                                                            <option value="{{$vl['Title']}}" Id_province="{{$vl['ID']}}">{{$vl['Title']}}</option>
                                                        @endforeach
                                                    @endforeach
                                                    {{--<option value="3">Hồ Chí Minh</option>--}}
                                                    {{--<option value="65">Đà Nẵng</option>--}}
                                                    {{--<option value="32">Hải Phòng</option>--}}
                                                    {{--<option value="21">Quảng Ninh</option>--}}
                                                    {{--<option value="17">Khánh Hòa</option>--}}
                                                    {{--<option value="4">An Giang</option>--}}
                                                    {{--<option value="5">Bà Rịa - Vũng Tàu</option>--}}
                                                    {{--<option value="14">Bắc Cạn</option>--}}
                                                    {{--<option value="7">Bắc Giang</option>--}}
                                                    {{--<option value="70">Bạc Liêu</option>--}}
                                                    {{--<option value="6">Bắc Ninh</option>--}}
                                                    {{--<option value="13">Bến Tre</option>--}}
                                                    {{--<option value="8">Bình Dương</option>--}}
                                                    {{--<option value="10">Bình Phước</option>--}}
                                                    {{--<option value="11">Bình Thuận</option>--}}
                                                    {{--<option value="9">Bình Định</option>--}}
                                                    {{--<option value="24">Cà Mau</option>--}}
                                                    {{--<option value="15">Cần Thơ</option>--}}
                                                    {{--<option value="25">Cao Bằng</option>--}}
                                                    {{--<option value="26">Gia Lai</option>--}}
                                                    {{--<option value="27">Hà Giang</option>--}}
                                                    {{--<option value="28">Hà Nam</option>--}}
                                                    {{--<option value="30">Hà Tĩnh</option>--}}
                                                    {{--<option value="31">Hải Dương</option>--}}
                                                    {{--<option value="68">Hậu Giang</option>--}}
                                                    {{--<option value="33">Hoà Bình</option>--}}
                                                    {{--<option value="34">Hưng Yên</option>--}}
                                                    {{--<option value="35">Kiên Giang</option>--}}
                                                    {{--<option value="36">Kon Tum</option>--}}
                                                    {{--<option value="37">Lai Châu</option>--}}
                                                    {{--<option value="38">Lâm Đồng</option>--}}
                                                    {{--<option value="39">Lạng Sơn</option>--}}
                                                    {{--<option value="20">Lào Cai</option>--}}
                                                    {{--<option value="40">Long An</option>--}}
                                                    {{--<option value="23">Nam Định</option>--}}
                                                    {{--<option value="41">Nghệ An</option>--}}
                                                    {{--<option value="42">Ninh Bình</option>--}}
                                                    {{--<option value="43">Ninh Thuận</option>--}}
                                                    {{--<option value="44">Phú Thọ</option>--}}
                                                    {{--<option value="45">Phú Yên</option>--}}
                                                    {{--<option value="46">Quảng Bình</option>--}}
                                                    {{--<option value="47">Quảng Nam</option>--}}
                                                    {{--<option value="48">Quảng Ngãi</option>--}}
                                                    {{--<option value="49">Quảng Trị</option>--}}
                                                    {{--<option value="50">Sóc Trăng</option>--}}
                                                    {{--<option value="51">Sơn La</option>--}}
                                                    {{--<option value="52">Tây Ninh</option>--}}
                                                    {{--<option value="53">Thái Bình</option>--}}
                                                    {{--<option value="54">Thái Nguyên</option>--}}
                                                    {{--<option value="55">Thanh Hoá</option>--}}
                                                    {{--<option value="19">Thừa Thiên Huế</option>--}}
                                                    {{--<option value="56">Tiền Giang</option>--}}
                                                    {{--<option value="57">Trà Vinh</option>--}}
                                                    {{--<option value="58">Tuyên Quang</option>--}}
                                                    {{--<option value="59">Vĩnh Long</option>--}}
                                                    {{--<option value="60">Vĩnh Phúc</option>--}}
                                                    {{--<option value="61">Yên Bái</option>--}}
                                                    {{--<option value="62">Đắc Lắc</option>--}}
                                                    {{--<option value="67">Đắc Nông</option>--}}
                                                    {{--<option value="71">Điện Biên</option>--}}
                                                    {{--<option value="22">Đồng Nai</option>--}}
                                                    {{--<option value="64">Đồng Tháp</option>--}}
                                                </select>
                                            </label>
                                            <label>
                                                Quận/ Huyện: *
                                                <select id="districtId" name="customerDistrictId" class="validate[required] input" required>
                                                    <option value="">Chọn Quận/ Huyện</option>
                                                </select>
                                            </label>
                                            <label>Địa chỉ: *<textarea name="customerAddress" class="validate[required] input customerAddress" required></textarea></label>
                                        </div>
                                    </div>
                                    @else
                                <div class="infoCustomer">
                                    <h2><span>1 </span>Thông tin khách hàng</h2>
                                    <div class="purchaseInfo">
                                        <label>
                                            Họ và tên: *
                                            <input type="text" name="customerName" class="validate[required] input customerName" value="" id="form-validation-field-0" required>
                                        </label>
                                        <label>Điện thoại: *
                                            <input type="text" name="customerMobile" class="validate[required,custom[phone]] input customerMobile" value="" required>
                                        </label><label>Email: *
                                            <input type="email" name="customerEmail" class="validate[required,custom[email]] input customerEmail" value="" required style=" display:block;width:80%;padding:5px;border:1px solid #ccc;margin:5px 0">
                                        </label>
                                        <label>
                                            Tỉnh/ Thành phố: *
                                            <select id="cityId" name="customerCityId" class="validate[required] input" required>
                                                <option value="">Chọn Tỉnh/ thành phố</option>
                                                @foreach($address as $data)
                                                    @foreach((array)$data as $vl)
                                                <option value="{{$vl['Title']}}" Id_province="{{$vl['ID']}}">{{$vl['Title']}}</option>
                                                        @endforeach
                                                @endforeach
{{--                                                <option value="3">Hồ Chí Minh</option>--}}
{{--                                                <option value="65">Đà Nẵng</option>--}}
{{--                                                <option value="32">Hải Phòng</option>--}}
{{--                                                <option value="21">Quảng Ninh</option>--}}
{{--                                                <option value="17">Khánh Hòa</option>--}}
{{--                                                <option value="4">An Giang</option>--}}
{{--                                                <option value="5">Bà Rịa - Vũng Tàu</option>--}}
{{--                                                <option value="14">Bắc Cạn</option>--}}
{{--                                                <option value="7">Bắc Giang</option>--}}
{{--                                                <option value="70">Bạc Liêu</option>--}}
{{--                                                <option value="6">Bắc Ninh</option>--}}
{{--                                                <option value="13">Bến Tre</option>--}}
{{--                                                <option value="8">Bình Dương</option>--}}
{{--                                                <option value="10">Bình Phước</option>--}}
{{--                                                <option value="11">Bình Thuận</option>--}}
{{--                                                <option value="9">Bình Định</option>--}}
{{--                                                <option value="24">Cà Mau</option>--}}
{{--                                                <option value="15">Cần Thơ</option>--}}
{{--                                                <option value="25">Cao Bằng</option>--}}
{{--                                                <option value="26">Gia Lai</option>--}}
{{--                                                <option value="27">Hà Giang</option>--}}
{{--                                                <option value="28">Hà Nam</option>--}}
{{--                                                <option value="30">Hà Tĩnh</option>--}}
{{--                                                <option value="31">Hải Dương</option>--}}
{{--                                                <option value="68">Hậu Giang</option>--}}
{{--                                                <option value="33">Hoà Bình</option>--}}
{{--                                                <option value="34">Hưng Yên</option>--}}
{{--                                                <option value="35">Kiên Giang</option>--}}
{{--                                                <option value="36">Kon Tum</option>--}}
{{--                                                <option value="37">Lai Châu</option>--}}
{{--                                                <option value="38">Lâm Đồng</option>--}}
{{--                                                <option value="39">Lạng Sơn</option>--}}
{{--                                                <option value="20">Lào Cai</option>--}}
{{--                                                <option value="40">Long An</option>--}}
{{--                                                <option value="23">Nam Định</option>--}}
{{--                                                <option value="41">Nghệ An</option>--}}
{{--                                                <option value="42">Ninh Bình</option>--}}
{{--                                                <option value="43">Ninh Thuận</option>--}}
{{--                                                <option value="44">Phú Thọ</option>--}}
{{--                                                <option value="45">Phú Yên</option>--}}
{{--                                                <option value="46">Quảng Bình</option>--}}
{{--                                                <option value="47">Quảng Nam</option>--}}
{{--                                                <option value="48">Quảng Ngãi</option>--}}
{{--                                                <option value="49">Quảng Trị</option>--}}
{{--                                                <option value="50">Sóc Trăng</option>--}}
{{--                                                <option value="51">Sơn La</option>--}}
{{--                                                <option value="52">Tây Ninh</option>--}}
{{--                                                <option value="53">Thái Bình</option>--}}
{{--                                                <option value="54">Thái Nguyên</option>--}}
{{--                                                <option value="55">Thanh Hoá</option>--}}
{{--                                                <option value="19">Thừa Thiên Huế</option>--}}
{{--                                                <option value="56">Tiền Giang</option>--}}
{{--                                                <option value="57">Trà Vinh</option>--}}
{{--                                                <option value="58">Tuyên Quang</option>--}}
{{--                                                <option value="59">Vĩnh Long</option>--}}
{{--                                                <option value="60">Vĩnh Phúc</option>--}}
{{--                                                <option value="61">Yên Bái</option>--}}
{{--                                                <option value="62">Đắc Lắc</option>--}}
{{--                                                <option value="67">Đắc Nông</option>--}}
{{--                                                <option value="71">Điện Biên</option>--}}
{{--                                                <option value="22">Đồng Nai</option>--}}
{{--                                                <option value="64">Đồng Tháp</option>--}}
                                            </select>
                                        </label>

                                        @php
                                            $res = file_get_contents("https://thongtindoanhnghiep.co/api/city");

                                        @endphp

                                        <label>
                                            Quận/ Huyện: *
                                            <select id="districtId" name="customerDistrictId" class="validate[required] input" required>
                                                <option value="">Chọn Quận/ Huyện</option>
                                            </select>
                                        </label>
                                        <label>Địa chỉ: *<textarea name="customerAddress" class="validate[required] input customerAddress" required></textarea></label>
                                    </div>
                                </div>
                                    @endif
                            </div>
                            <div id="column2" class="grid-25">
                                <div class="infoCustomer">
                                    <h2><span>2 </span>Hình thức thanh toán</h2>
                                    <div id="paymentMethod">
                                        <input class="checkCity" value="" type="hidden">
                                        <input class="checkPaymentMethod" value="" type="hidden">
                                        <div class="b">
                                            <label>
                                                <input type="radio" id="rdPaymentMethodCod" name="paymentMethod" class="validate[required]" checked="" value="1">
                                                Thanh toán khi nhận hàng
                                            </label>
                                            <label>
                                                <input type="radio" id="rdPaymentMethodCod" name="paymentMethod" class="validate[required]"   value="2">
                                                Thanh toán qua ngân lượng
                                                <a  href="javascript:void(0)"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
                                            </label>
                                            <label>
                                                <div class="row-fluid show-grid">
                                                    <input type="radio" id="rdPaymentMethodCod" name="paymentMethod" class="validate[required]" value="3">

                                                    <img src="{{asset('images/product/thanhtoan.png')}}">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="column3" class="grid-25">
                                <div class="infoCustomer">
                                    <h2><span>3 </span>Xác nhận đơn hàng</h2>
                                    <div id="reviewCart">
                                        <div class="rvWrap">
                                            @foreach($cart as $item)
                                            <div class="reviewCartItem">
                                                <a class="borImgsreview" href="">
                                                    <img src="{{asset('/images/product/'.$item->options->image)}}" alt="">
                                                </a>
                                                <div class="rvWrp">
                                                    <p><a href="">{{$item->name}}</a></p>
                                                    <p style="color: #ed1c24">
                                                        {{$item->price}} VNĐ
                                                    </p>
                                                    <p>{{$item->qty}}</p>
                                                    <span class="clearfix"></span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <a href="list-cart" class="backShop">Quay về giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div id="column4" class="grid-25">
                                <div class="infoCustomer">
                                    <div id="orderIf">
                                        <p>Tiền hàng <span>{{Cart::subtotal()}} VND </span></p>
                                        <p>Phí vận chuyển
                                            <span id="shipFee">0 đ</span>
                                        </p>
                                        <i class="notePay">(Ngoại thành/Ngoại tỉnh)
                                            sẽ thông báo ngay sau khi đặt hàng thành công</i>
                                        <div class="totalPays">
                                            <p>Tổng cộng <span id="money" style="color: #ed1c24">{{Cart::subtotal()}} </span>VND</p>
                                            <input type="hidden" id="getMn" name="total" value="{{Cart::subtotal()}}">
                                            <input type="hidden" id="getShipFee" value="0">
                                            <label>
                                                <span>Sử dụng mã giảm giá nếu có</span>
                                                <div class="alert alert-success thanhcong" style="display: none">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Success!</strong> Sử dụng mã giảm giá thành công
                                                </div>
                                                <div class="alert alert-warning thatbai" style="display: none">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                                                    <strong>Warning!</strong> Mã giảm giá không hợp lệ or đã được sử dụng
                                                </div>
                                                <input id="coupon" type="text" name="couponCode" class="input" placeholder="Mã giảm giá">
                                                <button type="button" id="getCoupon" class="btnGray">Sử dụng</button>
                                                <p id="txtCode"></p>
                                            </label>
                                            <label>
                                                <span>Ghi chú</span><textarea name="description" class="input" placeholder="Ghi chú"></textarea></label>
                                            <input type="hidden" id="baokimPmMethodId" name="baokimBankPaymentMethodId">
                                            <button id="btnOrder" type="submit" class="btnRed">Xác nhận đơn hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="clearfix"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        $('#getCoupon').click(function () {
            var name = $("#coupon").val();

            console.log('Ten coupon',name);
            $.ajax({
                type:'get',
                url:'<?php echo URL::to('getcoupon')?>',
                data:{
                    name:name,
                },

                success:function (data) {
                    if(data=='thatbai'){
                        $('.thatbai').css("display","inline-block");
                    }
                    else
                    {
                        $('.thanhcong').css("display","inline-block");
                        $('#money').html(data);
                        $('#getMn').val(data);



                    }

                }
            })
        })
        $('#cityId').on('change',function () {
            var id = $('option:selected', this).attr('Id_province');

            console.log(id);
            $.ajax({
                type:'get',
                url:'<?php echo URL::to('district')?>',
                data:{
                    id:id,
                },

                success:function (data) {
                    console.log(data);
                    $('#districtId').html(data);
                }
            })

            })
    </script>

@stop