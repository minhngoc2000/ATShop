@extends('Page.index')
@section('cart')
    <script>

        // var frm = $('#Form1');
        //
        // frm.submit(function (e) {
        //
        //     e.preventDefault();
        //
        //     $.ajax({
        //         type: frm.attr('method'),
        //         url: frm.attr('action'),
        //         data: frm.serialize(),
        //         success: function (data) {
        //             console.log('Submission was successful.');
        //             console.log(data);
        //         },
        //         error: function (data) {
        //             console.log('An error occurred.');
        //             console.log(data);
        //         },
        //     });
        // });

        $(document).ready(function() {
            <?php for ($i=1;$i<30;$i++){?>

                $('#quantity_<?=$i?>').on('change keyup', function () {
                    var product_id = $('#proId_<?=$i?>').val();
                    var qty = $('#quantity_<?=$i?>').val();
                    console.log(product_id);
                    console.log('quantity', qty);
                    $.ajax({
                        type: 'get',
                        dataType: 'html',
                        url: 'update/' + product_id,
                        // data: "qty=" + newqty + "& rowId=" +rowId + "& proId=" +proId,
                        data: {
                            product_id: product_id,
                            qty: qty,
                        },

                        success: function (result) {
                            var data = JSON.parse(result);
                            console.log(data.total_price);
                            $('#price_<?=$i?>').html(data.price);
                            $('#total_price').text(data.total_price);
                            $("#cart_count").html(data.count);

                        }


                    });
                })


            <?php } ?>
        })

    </script>
<div class="singleCart">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="grid-100">
            <table id="cartContent">
                <tbody>
                <tr class="title .odd">
                    <td width="500">Sản phẩm</td>
                    <td width="200">Kích cỡ</td>
                    <td width="200">Màu sắc</td>
                    <td width="200">Đơn giá</td>
                    <td width="200">Số lượng</td>
                    <td width="200">Thành tiền</td>
                    <td width="200">&nbsp;</td>
                </tr>
                <?php  $i=1;?>
                @foreach($cart as $item)
                <tr class="cartItem .even">
                    <td class="last" width="500">
                        <a class="borImgscart" href="#">
                            <img src="{{asset('/images/product/'.$item->options->image)}}" alt="" title="">
                        </a>
                        <p class="nameProductcart"><a href="">{{$item->name}}</a></p>
                        <br>
                    </td>

                    <td width="200">
                        <p style="font-weight: bold">
                            {{ $item->options->size}}
                        </p>
                    </td>
                    <td width="200">
                        <p style="font-weight: bold">
                            {{ $item->options->color}}
                        </p>
                    </td>
                    <td width="200">
                        <p style="font-weight: bold">
                            {{ number_format($item->price)}} VNĐ
                        </p>
                    </td>
                    <td width="200">
                        <input type="number" id="quantity_<?=$i?>" value="{{$item->qty}}" maxlength="10" class="qty-input updateCart" min="1" max="10">
                        <input type="hidden" id="proId_<?=$i?>" value="{{$item->id}}" />
                    </td>
                    <td id='price_<?=$i?>' width="200" style="font-weight: bold">
                        {{ number_format($item->subtotal)}}
                    </td>
                    <td  width="200" class="cart_delete">
                        <a class="removeCartItem" href="" data-toggle="modal" data-target="#delete-modal_<?=$i?>" data-id=""><i style="font-size: 14px" class="fa fa-trash-o"></i>Xóa</a>
                        <div class="modal fade" id="delete-modal_<?=$i?>" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Xóa sản phẩm khỏi giỏ hàng ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('cart_delete')}}" method="post" id="#Form1">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="product_id" id="product_id" value="{{$item->id}}">
                                            <button type="submit" class="btn btn-default">Yes</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </td>
                </tr>
                    <?php $i++;?>
                @endforeach
                <tr class="title lastTr .odd" style="text-align: left">
                    <td class="last" width="500">&nbsp;</td>
                    <td width="400" colspan="2"> <b style="color: #ed1c24;font-size: 16px">&nbsp;</b></td>
                    <td  width="400" colspan="2">Tổng cộng: <span id="total_price"style="color: #ed1c24;font-size: 16px">{{Cart::subtotal()}}đ</span></td>
                </tr>
                </tbody>
            </table>
            <div class="cartNavigator">
                <a href="{{route('checkout')}}" class="btnCheckOut btnRed" style="width: 200px;float:right">Tiến hành thanh toán</a>
                <a href="#" class="buyMore btnGreen ">Mua thêm sản phẩm khác</a>
                <span class="clearfix"></span>
            </div>
            <br><br>
        </div>
    </div>
</div>
    <div class="modal1"><!-- Place at bottom of page --></div>
    <style>
        .msgajax{
            display: none;
        }
        .modal1 {
            display:    none;
            position:   fixed;
            z-index:    1000;
            top:        0;
            left:       0;
            height:     100%;
            width:      100%;
            background: rgba( 255, 255, 255, .8 )
            url('http://i.stack.imgur.com/FhHRx.gif')
            50% 50%
            no-repeat;
        }

        /* When the body has the loading class, we turn
           the scrollbar off with overflow:hidden */
        body.loading .modal1 {
            overflow: hidden;
        }

        /* Anytime the body has the loading class, our
           modal element will be visible */
        body.loading .modal1 {
            display: block;
        }
    </style>
    <script>
        $body = $("body");

        $(document).on({
            ajaxStart: function() { $body.addClass("loading");    },
            ajaxStop: function() { $body.removeClass("loading"); }
        });
        var $loading = $('#loading').hide();
        $(document)
            .ajaxStart(function () {
                ajaxLoadingTimeout = setTimeout(function () {
                    $loading.show();
                })

            })
            .ajaxStop(function () {
                $loading.hide();
            });
    </script>
@stop