<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h3>Giới thiệu</h3>
                <p>Chào mừng bạn đến với AtShop &#8211; Chuyên kinh doanh  phân phối  các mặt hàng quần áo thời trang giá rẻ chính hãng ,uy tín chất lượng hàng đầu Việt Nam &nbsp; Giới thiệu về HTShop HTShop được thành lập năm 2018...<a style="color:#fff" href="#">Xem thêm</a></p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h3>Thời trang</h3>
                <ul>
                    <!-- Get category -->
                    <li>
                        <a href="#">Thời trang nam</a>
                    </li>
                    <li>
                        <a href="#" >Điện thoại nữ</a>
                    </li>
                    <li>
                        <a href="#">Phụ kiện</a>
                    </li>
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                    <li>
                        <a href="#">Tra cứu đơn hàng</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h3>Tài khoản</h3>
                <ul>
                    <li><a href="#">Tài khoản của bạn</a></li>
                    <li><a href="list-cart">Giỏ hàng</a></li>
                    <li><a href="tin-tuc">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <h3>Liên hệ với chúng tôi</h3>
                <p>
                    <span>Địa chỉ: 78 Linh Trung ,Linh Trung,Thủ Đức,TP-Hồ Chí Minh</span>
                    <span>Email: thuanuit@gmail.com</span>
                    <span>Điện thoại: 0973968888</span>
                    <span>Website: http://htshop.esy.es/</span>
                </p>
            </div>
        </div>
    </div>


    <div class="copyright"> Bản quyền thuộc về ATShop© 2018 - Xây dựng và phát triển bởi <a href="https://www.facebook.com/thuanuit" tppabs="https://www.facebook.com/thuanuit">Thuanuit</a> </div>

    <script type="text/javascript">


        function wishlist(id_pro){
            console.log(id_pro);
            $.ajax({
                type:'get',
                url:'<?php echo URL::to('yeu-thich')?>',
                data:{
                    id_pro:id_pro
                },

                success:function (data) {
                    console.log(data);
                    if(data=="thanh cong"){
                        $.alert({
                            title: 'Thành công',
                            content: 'Đã thêm vào danh sách yêu thích',
                        });

                    }
                    else if(data=="that bai")
                    {
                        $.alert({
                            title: 'Thất bại',
                            content: 'Sản phẩm đã tồn tại trong danh sách yêu thích',
                        });
                    }
                    else {
                        $.alert({
                            title: 'Thất bại',
                            content: 'Bạn cần đăng nhập để thực hiện chức năng này',
                        });
                    }

                }
            })
        }


        $( document ).ready(function() {
            $(".filterMore").on("change",function () {
                // var id=$(this).val();
                // $('option').attr("selected","selected");
                var name=$(this).find('option:selected').attr("name");
                console.log('name',name);
                var id=$(this).val();
                console.log(id);
                $.ajax(
                    {
                        url: '<?php echo URL::to("filter") ?>',
                        type: 'get',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id_subcategory: id,
                            name:name,


                        },
                        datatype:"html",
                        success: function (result) {
                            console.log(result);
                            $('.listProductcategory').html(result);

                        },
                        error: function(e) {

                        }
                    } );

            })
            $(".filter").on("change",function () {
                // var id=$(this).val();
                // $('option').attr("selected","selected");
                var name=$(this).find('option:selected').attr("name");
                console.log('name',name);
                var id=$(this).val();
                console.log(id);
                $.ajax(
                    {
                        url: '<?php echo URL::to("filter_2") ?>',
                        type: 'get',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id_color: id,
                            name:name,


                        },
                        datatype:"html",
                        success: function (result) {
                            console.log(result);
                            $('.listProductcategory').html(result);

                        },
                        error: function(e) {

                        }
                    } );

            })
            $(".filter_search").on("change",function () {
                // var id=$(this).val();
                // $('option').attr("selected","selected");
                var name=$(this).find('option:selected').attr("name");
                console.log('name',name);
                var id=$(this).val();
                console.log(id);
                $.ajax(
                    {
                        url: '<?php echo URL::to("filter_search") ?>',
                        type: 'get',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            key: id,
                            name:name,


                        },
                        datatype:"html",
                        success: function (result) {
                            console.log(result);
                            $('.listProductcategory').html(result);

                        },
                        error: function(e) {

                        }
                    } );

            })
        });


    </script>


</div>