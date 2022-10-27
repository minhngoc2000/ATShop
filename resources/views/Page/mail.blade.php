<div id=":jx" class="a3s aXjCH m16368f63fad16eef">
    <u></u>

    <div marginwidth="0" marginheight="0">
        <div id="m_8802445919916398151wrapper" dir="ltr" style="background-color:#f5f5f5;margin:0;padding:70px 0 70px 0;width:100%">
            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                <tbody>
                <tr>
                    <?php


                    ?>
                    <td align="center" valign="top">
                        <div id="m_8802445919916398151template_header_image">
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_8802445919916398151template_container" style="background-color:#fdfdfd;border:1px solid #dcdcdc;border-radius:3px!important">
                            <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_8802445919916398151template_header" style="background-color:#557da1;border-radius:3px 3px 0 0!important;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif">
                                        <tbody>
                                        <tr>
                                            <td id="m_8802445919916398151header_wrapper" style="padding:36px 48px;display:block">
                                                <h1 style="color:#ffffff;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left">Cảm ơn bạn đã
                                                    đặt hàng

                                                </h1>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_8802445919916398151template_body">
                                        <tbody>
                                        <tr>
                                            <td valign="top" id="m_8802445919916398151body_content" style="background-color:#fdfdfd">
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td valign="top" style="padding:48px">
                                                            <div id="m_8802445919916398151body_content_inner" style="color:#737373;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">
                                                                <p style="margin:0 0 16px">Đơn hàng của bạn đã được nhận và hiện đang
                                                                    được xử lý. Chi tiết đặt hàng của bạn được hiển
                                                                    thị dưới đây để bạn tham khảo:
                                                                </p>

                                                                <h2 style="color:#557da1;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left">Đơn hàng #{{$order_mail->Id}}</h2>
                                                                <table class="m_8802445919916398151td" cellspacing="0" cellpadding="6" style="width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;color:#737373;border:1px solid #e4e4e4" border="1">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="m_8802445919916398151td" scope="col" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Sản
                                                                            phẩm
                                                                        </th>
                                                                        <th class="m_8802445919916398151td" scope="col" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Số
                                                                            lượng
                                                                        </th>
                                                                        <th class="m_8802445919916398151td" scope="col" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Giá</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($product_mail as $value)
                                                                    <tr class="m_8802445919916398151order_item">
                                                                        <td class="m_8802445919916398151td" style="text-align:left;vertical-align:middle;border:1px solid #eee;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word;color:#737373;padding:12px">
                                                                            {{$value->Name}}<br><small></small>
                                                                        </td>
                                                                        <td class="m_8802445919916398151td" style="text-align:left;vertical-align:middle;border:1px solid #eee;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;color:#737373;padding:12px">{{$value->Quantity}}</td>
                                                                        <td class="m_8802445919916398151td" style="text-align:left;vertical-align:middle;border:1px solid #eee;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;color:#737373;padding:12px"><span class="m_8802445919916398151woocommerce-Price-amount
                                                                        amount">{{$value->Price}}&nbsp;<span class="m_8802445919916398151woocommerce-Price-currencySymbol">₫</span></span></td>
                                                                    </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                    <tfoot>

                                                                    <tr>
                                                                        <th class="m_8802445919916398151td" scope="row" colspan="2" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Tổng cộng:</th>
                                                                        <td class="m_8802445919916398151td" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px"><span class="m_8802445919916398151woocommerce-Price-amount m_8802445919916398151amount">{{$order_mail->Total}}<span class="m_8802445919916398151woocommerce-Price-currencySymbol">₫</span></span></td>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                                <h2 style="color:#557da1;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left">Chi
                                                                    tiết khách hàng
                                                                </h2>
                                                                <ul>
                                                                    <li>
                                                                        <strong>Ghi chú:</strong> <span class="m_8802445919916398151text" style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif">{{$order_mail->Note}}</span>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Email:</strong> <span class="m_8802445919916398151text" style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif"><a href="mailto:thuanuit96@gmail.com" target="_blank">{{$order_mail->Email}}</a></span>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Điện thoại:</strong> <span class="m_8802445919916398151text" style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif">{{$order_mail->PhoneNumber}}</span>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Hình thức thanh toán:</strong> <span class="m_8802445919916398151text" style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif">{{$order_mail->Payment_Method}}</span>
                                                                    </li>
                                                                </ul>
                                                                <table id="m_8802445919916398151addresses" cellspacing="0" cellpadding="0" style="width:100%;vertical-align:top" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="m_8802445919916398151td" valign="top" width="50%">
                                                                            <h3 style="color:#557da1;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left">Địa chỉ thanh toán</h3>
                                                                            <p class="m_8802445919916398151text" style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;margin:0 0 16px">{{$order_mail->Address}}
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="10" cellspacing="0" width="600" id="m_8802445919916398151template_footer">
                                        <tbody>
                                        <tr>
                                            <td valign="top" style="padding:0">
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="m_8802445919916398151credit" style="padding:0 48px 48px 48px;border:0;color:#99b1c7;font-family:Arial;font-size:12px;line-height:125%;text-align:center">
                                                            <p>Thuanuit
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="yj6qo"></div>
            <div class="adL"></div>
        </div>
        <div class="adL">
        </div>
    </div>
    <div class="adL">
    </div>
</div>