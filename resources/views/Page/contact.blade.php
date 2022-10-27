@extends('Page.index')
@section('contact')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">

                    <h2 class="title text-center">LIÊN HỆ <strong>CHÚNG TÔI</strong></h2>
                    <div id="gmap"  class="contact-map">


                        <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7836.837196320275!2d106.78426678472509!3d10.855732311042082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752768cc28d88f%3A0xa2cc745189875985!2zS2h1IEPDtG5nIG5naOG7hyBjYW8gcXXhuq1uIDk!5e0!3m2!1svi!2s!4v1530211889903" width="1150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="contact-form">
                            <h2 class="title text-center">Liên lạc</h2>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form  action="" method="post" class="contact-form" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Họ tên" required="required" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" value="">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="subject" class="form-control" required="required" placeholder="Tiêu đề">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội dung liên lạc"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-info">
                            <h2 class="title text-center">THÔNG TIN LIÊN HỆ</h2>
                            <address>
                                <p>minhngocit</p>
                                <p>Khu phố 6 phường linh trung thủ đức</p>
                                <p></p>
                                <p>Di Động: +84 375253126</p>
                                <p></p>
                                <p>Email:tongminhngoc2000@gmail.com</p>
                            </address>
                            <div class="social-networks">
                                <div class="fb-page" data-href="https://www.facebook.com/Tu%E1%BA%A5n-Th%E1%BA%AFng-Bakery-307549689685452/" data-tabs="timeline" data-width="270" data-height="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Tu%E1%BA%A5n-Th%E1%BA%AFng-Bakery-307549689685452/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tu%E1%BA%A5n-Th%E1%BA%AFng-Bakery-307549689685452/">Minh Ngọc Bakery</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#contact-page-->
@stop