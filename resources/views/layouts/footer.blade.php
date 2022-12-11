<footer id="footer" class="footer-wrapper">

    <section class="section sec_footer dark hide-for-small" id="section_962445108">
        <div class="bg section-bg fill bg-fill  ">


        </div><!-- .section-bg -->

        <div class="section-content relative">


                <span class="scroll-to" data-label="Scroll to: #lien-he" data-bullet="true" data-link="#lien-he"
                      data-title="Footer"><a name="lien-he"></a></span>

            <div class="gap-element" style="display:block; height:auto; padding-top:60px" class="clearfix"></div>

            <div class="row align-center" id="row-605036246">

                <div class="col medium-6 small-12 large-6">
                    <div class="col-inner text-center dark">

                        <h3>Thông tin liên hệ<br/>
                            {{$info['company']}}</h3>
                        <p><span
                                style="color: #ffffff;">Địa chỉ: {{$info['address']}}</span>
                        </p>
                        <p><span style="color: #ffffff;">Hotline: <a
                                    href="tel:{{$info['phone']}}">{{$info['phone']}}</a></span>
                        </p>
                        <p><span style="color: #ffffff;">Email: <a
                                    href="mailto:{{$info['email']}}"><span
                                        class="__cf_email__">{{$info['email']}}</span></a></span>
                        </p>
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1214612176">
                            <div class="img-inner dark">
                                <div class="logo__site">
                                    <div class="logo__site--main">
                                        <a href="http://127.0.0.1:8000" class="custom-logo-link" rel="home"
                                           aria-current="page">
                                            <img src="/userfiles/images/logo/logo.png" class="custom-logo" alt="Logo"
                                                 decoding="async">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <style scope="scope">

                                #image_1214612176 {
                                    width: 50%;
                                }
                            </style>
                        </div>


                    </div>
                </div>
                <div class="col medium-3 small-6 large-6">
                    <div class="col-inner">

                        <h3 style="text-align: center;">Đăng ký tham quan và nhận báo giá</h3>
                        <p style="text-align: center;"><span style="color: #ffffff;">Gọi ngay <a
                                    href="tel:{{$info['phone']}}">{{$info['phone']}}</a> (24/7)</span><br/><span
                                style="color: #ffffff;">hoặc ĐĂNG KÝ THAM QUAN và NHẬN BÁO GIÁ</span></p>
                        <div role="form" class="wpcf7" id="wpcf7-f43-o2" lang="vi" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="{{route('contact.store')}}" method="post"
                                  class="wpcf7-form" novalidate="novalidate">

                                <div class="form-ct clear">
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap text-name">
                                                <input type="text"
                                                   name="text-name"
                                                   value="" size="40"
                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form_lien_he"
                                                   id="text-name"
                                                   aria-required="true"
                                                   aria-invalid="false"
                                                   placeholder="Họ và tên"/></span>
                                    </div>
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap email-contact">
                                                <input type="email"
                                                   name="email-contact"
                                                   value=""
                                                   size="40"
                                                   class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form_lien_he"
                                                   id="email-contact"
                                                   aria-required="true"
                                                   aria-invalid="false"
                                                   placeholder="Email"/></span>
                                    </div>
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap tel-contact">
                                                <input type="number"
                                                     name="tel-contact"
                                                     value="" size="40"
                                                     class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form_lien_he"
                                                     id="phoneNumber"
                                                     aria-required="true"
                                                     aria-invalid="false"
                                                     placeholder="Số điện thoại"/></span>
                                    </div>
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap text-address">
                                                <input type="text"
                                                  name="text-address"
                                                  value="" size="40"
                                                  class="wpcf7-form-control wpcf7-text form_lien_he"
                                                  id="text-address"
                                                  aria-invalid="false"
                                                  placeholder="Địa chỉ"/></span>
                                    </div>
                                    <div class="form-row">
                                            <span class="wpcf7-form-control-wrap textarea-noidung"><textarea
                                                    name="textarea-noidung" cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form_lien_he"
                                                    id="textarea-noidung" aria-required="true" aria-invalid="false"
                                                    placeholder="Lời nhắn"></textarea></span>
                                    </div>
                                    <div class="form-row center-txt">
                                        <input type="submit" value="Gửi"
                                               class="wpcf7-form-control wpcf7-submit form_lien_he" id="bt-gui"/>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div><!-- .section-content -->
        <style scope="scope">

            #section_962445108 {
                padding-top: 0px;
                padding-bottom: 0px;
            }

            #section_962445108 .section-bg.bg-loaded {
                background-image: url(wp-content/uploads/2018/12/footer-bg.jpg);
            }
        </style>
    </section>

    <div class="absolute-footer dark medium-text-center text-center">
        <div class="container clearfix">


            <div class="footer-primary pull-left">
                <div class="copyright-footer">
                    © Bản quyền thuộc về
                    . Thiết kế website BCN
                </div>
            </div><!-- .left -->
        </div><!-- .container -->
    </div><!-- .absolute-footer -->

    <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle"
       id="top-link"><i class="icon-angle-up"></i></a>

</footer><!-- .footer-wrapper -->
