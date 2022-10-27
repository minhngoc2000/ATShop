@extends('Page.index')
@section('check_order')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
                <div id="pfView" class="orderView">
                    <h3>Tra cứu đơn hàng</h3>
                    <span style="font-size: 14px;color:#000; font-family: arial">  Hãy nhập <b>Số điện thoại</b> hoặc <b>Mã đơn hàng</b> để tra cứu tình trạng đơn hàng của bạn nhé</span>
                    <form class="form-inline " id="frmIndexOrder" action="">
                        <div class="form-groups txtFill">
                            <input type="text" name="q" placeholder="Nhập số điện thoại hoặc mã đơn hàng">
                        </div>
                        <div class="form-groups">
                            <button type="submit" class="btn-danger">Kiểm tra</button>
                        </div>
                    </form>
                    <br>
                    <div class="text-center" style="margin-top: 40px;">
                        <div class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>.orderView>h3 {
            display: block;
            text-align: center;
            text-transform: uppercase;
            color: #666;
            font-size: 25px;
        }
        .orderView>span {
            display: block;
            text-align: center;
        }
        .orderView>span {
            font-style: italic;
            display: block;
            padding: 15px 0;
        }
        .form-inline {
            display: block;
            text-align: center;
        }
        #frmIndexOrder .txtFill {
            width: 50%;
        }
        #frmIndexOrder .form-groups input {
            border: 1px solid #DEDEDE;
            padding: 10px;
            width: 100%;
        }
        #frmIndexOrder .form-groups {
            margin: 0;
        }
        .form-inline>.form-groups {
            display: inline-block;
            margin: 10px;
        }
        #frmIndexOrder .btn-danger {
            border: none;
            background: #f37021;
            color: #fff;
            padding: 11px 20px;
            margin-left: -2px;
        }
        .table-bordered tr th{
            background: #f6f6f6;
            color: #333;
        }
        .table{
            width: 100% !important;
        }
        .table tr td,
        .table tr th{
            text-align: center;
        }
        #noteStatus{
            text-align: left;
            margin: 30px 0;
        }
        #noteStatus>p{
            padding: 5px 0;
            font-size: 13px;
        }
        .table{
            margin:auto;
        }
        .text-center{
            text-align: center !important;
        }
        .desOrderSearch {
            width: 60%;
            margin: 0 auto;
            padding: 10px 0;
            font-family: arial;
            text-align: center;
        }
        .table tr td, .table tr th{
            padding: 7px;
            border: 1px solid #ddd;
        }
    </style>
</div>
@stop
