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
                            <form id="apply-job" action="{{route('contact.store')}}" method="post"
                                  class="wpcf7-form">
                                @csrf
                                <div class="form-ct">
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap text-name">
                                                <input type="text"
                                                   name="name"
                                                   value="" size="40"
                                                   class="apply-full-name wpcf7-form-control wpcf7-text wpcf7-validates-as-required form_lien_he"
                                                   id="text-name"
                                                   aria-required="true"
                                                   aria-invalid="false"
                                                   placeholder="Họ và tên"/></span>
                                    </div>
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap email-contact">
                                                <input type="email"
                                                   name="email"
                                                   value=""
                                                   size="40"
                                                   class="apply-email wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form_lien_he"
                                                   id="email-contact"
                                                   aria-required="true"
                                                   aria-invalid="false"
                                                   placeholder="Email"/></span>
                                    </div>
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap tel-contact">
                                                <input type="text"
                                                     name="phone"
                                                     value=""
                                                     class="apply-phone wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form_lien_he"
                                                     id="phoneNumber"
                                                     placeholder="Số điện thoại"/></span>
                                    </div>
                                    <div class="form-row w50">
                                            <span class="wpcf7-form-control-wrap text-address">
                                                <input type="text"
                                                  name="text-address"
                                                  value="" size="40"
                                                  class="apply-address wpcf7-form-control wpcf7-text form_lien_he"
                                                  id="text-address"
                                                  aria-invalid="false"
                                                  placeholder="Địa chỉ"/></span>
                                    </div>
                                    <div class="form-row">
                                            <span class="wpcf7-form-control-wrap textarea-noidung"><textarea
                                                    name="textarea-noidung" cols="40" rows="10"
                                                    class="apply-note wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form_lien_he"
                                                    id="textarea-noidung" aria-required="true" aria-invalid="false"
                                                    placeholder="Lời nhắn"></textarea></span>
                                    </div>
                                    <div class="form-row center-txt">
                                        <input type="submit" value="Gửi"
                                               class="wpcf7-form-control wpcf7-submit form_lien_he" />
                                    </div>
                                </div>
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
@push('scripts')
    <script>
        $('#apply-job').submit(function (e) {
            console.log(123);
            e.preventDefault();
            let formData = new FormData(this);
            let name = $('.apply-full-name').val();
            let email = $('.apply-email').val();
            let phone = $('.apply-phone').val();
            let address = $('.apply-address').val();
            let note = $('.apply-note').val();
            let check = true;
            $('.note-name').html('');
            $('.note-email').html('');
            $('.note-phone').html('');
            $('.apply-address').html('');
            $('.apply-note').html('');

            {{--if (check) {--}}
            {{--    $('.btn-apply-cs').css('display', 'none');--}}
            {{--    $('.loading-comment').css('display', 'block');--}}
            {{--    setTimeout(function () {--}}
            {{--        $.ajax({--}}
            {{--            type: 'POST',--}}
            {{--            url: "{{ route('apply-now') }}",--}}
            {{--            data: formData,--}}
            {{--            contentType: false,--}}
            {{--            processData: false,--}}
            {{--            success: (res) => {--}}
            {{--                let is_check = res.data.success;--}}
            {{--                let data = res.data;--}}
            {{--                console.log(data);--}}
            {{--                if (is_check === 422) {--}}
            {{--                    let errors = res.data.data;--}}
            {{--                    if (errors.captcha) {--}}
            {{--                        $('.note-captcha').html(errors.captcha[0]);--}}
            {{--                    }--}}
            {{--                    if (errors.file_cv) {--}}
            {{--                        $('.note-file').html(errors.file_cv[0]);--}}
            {{--                    }--}}
            {{--                    getCaptcha();--}}
            {{--                    $('.apply-captcha').val('');--}}
            {{--                } else if (is_check === 101) {--}}
            {{--                    const swalWithBootstrapButtons = Swal.mixin({--}}
            {{--                        customClass: {--}}
            {{--                            confirmButton: 'btn btn-apply-cs',--}}
            {{--                        },--}}
            {{--                        buttonsStyling: false--}}
            {{--                    })--}}
            {{--                    swalWithBootstrapButtons.fire({--}}
            {{--                        title: 'Thông báo',--}}
            {{--                        text: data.message,--}}
            {{--                        icon: 'success',--}}
            {{--                        confirmButtonText: 'Đóng',--}}
            {{--                        reverseButtons: true--}}
            {{--                    })--}}
            {{--                } else {--}}
            {{--                    // alert(data.message);--}}
            {{--                    const swalWithBootstrapButtons = Swal.mixin({--}}
            {{--                        customClass: {--}}
            {{--                            confirmButton: 'btn btn-apply-cs',--}}
            {{--                        },--}}
            {{--                        buttonsStyling: false--}}
            {{--                    })--}}
            {{--                    swalWithBootstrapButtons.fire({--}}
            {{--                        title: 'Thông báo',--}}
            {{--                        text: data.message,--}}
            {{--                        icon: 'success',--}}
            {{--                        confirmButtonText: 'Đóng',--}}
            {{--                        reverseButtons: true--}}
            {{--                    }).then((result) => {--}}
            {{--                        if (result.isConfirmed) {--}}
            {{--                            window.location.reload();--}}
            {{--                        }--}}
            {{--                    })--}}
            {{--                    // window.location.reload();--}}
            {{--                }--}}
            {{--                $('.btn-apply-cs').css('display', 'inline-block');--}}
            {{--                $('.loading-comment').css('display', 'none');--}}
            {{--            },--}}
            {{--            error: function (response) {--}}
            {{--                $('#file-input-error').text(response.responseJSON.message);--}}
            {{--            }--}}
            {{--        });--}}
            {{--    }, 500);--}}
            {{--}--}}
        });
    </script>
    <script type="text/javascript">
        const isNumericInput = (event) => {
            const key = event.keyCode;
            return ((key >= 48 && key <= 57) || // Allow number line
                (key >= 96 && key <= 105) // Allow number pad
            );
        };
        const isModifierKey = (event) => {
            const key = event.keyCode;
            return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
                (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
                (key > 36 && key < 41) || // Allow left, up, right, down
                (
                    // Allow Ctrl/Command + A,C,V,X,Z
                    (event.ctrlKey === true || event.metaKey === true) &&
                    (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
                )
        };
        const enforceFormat = (event) => {
            // Input must be of a valid number format or a modifier key, and not longer than ten digits
            if (!isNumericInput(event) && !isModifierKey(event)) {
                event.preventDefault();
            }
        };
        const formatToPhone = (event) => {
            if (isModifierKey(event)) {
                return;
            }
            // I am lazy and don't like to type things more than once
            const target = event.target;
            const input = event.target.value.replace(/\D/g, '').substring(0, 10); // First ten digits of input only
            const zip = input.substring(0, 3);
            const middle = input.substring(3, 6);
            const last = input.substring(6, 10);
            if (input.length > 6) {
                target.value = `${zip} ${middle} ${last}`;
            } else if (input.length > 3) {
                target.value = `${zip} ${middle}`;
            } else if (input.length > 0) {
                target.value = `${zip}`;
            }
        };
        const inputElement_ = document.getElementById('phoneNumber');
        inputElement_.addEventListener('keydown', enforceFormat);
        inputElement_.addEventListener('keyup', formatToPhone);
    </script>

@endpush
