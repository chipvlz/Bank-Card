
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="author" content="Mitonios">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="yRi5vqG34WA0RuCUzDIXaGpMcGASIqOEqrmUOxMTFmCPKMPp4vGuBVEtqv20anMcXnQYJFpx-rPm1qYOZiVaDQ==">
    <title>Nạp thẻ 80%</title>
    <meta name="description" content="Nạp thẻ Viettel ưu đãi 80%">
    <meta name="keywords" content="Nạp thẻ Viettel,Mobiphone,Vinaphone">

    <meta property="og:title" content="Nạp thẻ Viettel ưu đãi 80%"/>
    <meta property="og:description" content="Sử dụng cho thuê bao trả trước hoặc trả sau của Viettel"/>
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="article"/>
    <meta property="fb:app_id" content=""/>
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="{{asset('frontend/assets/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/custombox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/mitonios.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/assets/custombox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/hs.core.js')}}"></script>
    <script src="{{asset('frontend/assets/hs.focus-state.js')}}"></script>
    <script src="{{asset('frontend/assets/hs.selectpicker.js')}}"></script>
    <script src="{{asset('frontend/assets/hs.modal-window.js')}}"></script>
    <script src="{{asset('frontend/assets/sweetalert.min.js')}}"></script></head>
<body>
<main id="content" style="min-height: 860px;">
    <!-- Author Section -->
    <div class="position-relative u-space-2 u-gradient-overlay-half-primary-v1 pb-9">
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-md-8">
                <div class="container">
                    <!-- Info -->
                    <div class="mb-6 text-center">
                        <h1 class="text-white">Nạp thẻ chỉ mất <span class="font-weight-bold text-warning">80%</span></h1>
                        <p class="lead u-text-light mb-0">Nạp trực tiếp vào tài khoản của bạn / Áp dụng cho cả thuê bao trả trước & trả sau & Cước phí Internet / Hiện tại chỉ hỗ trợ thuê bao của
                            Viettel</p>
                    </div>
                    <!-- End Info -->
                    <div class="align-items-center shadow-sm p-4 bg-white rounded">
                        <form id="main-form" action="{{URL::route('home.add')}}" method="post">
                            {{csrf_field()}}
                            <div class="js-form-message mb-4">
                                <div class="js-focus-state input-group u-form u-form--modern">
                                    <input type="text" class="form-control u-form__input" name="name"
                                           placeholder="Họ và tên">
                                </div>
                            </div>
                            <div class="js-form-message mb-4">
                                <div class="js-focus-state input-group u-form u-form--modern">
                                    <input type="text" class="form-control u-form__input" name="phone" minlength="9" maxlength="12" required id="phonenumber"
                                           placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="js-form-message mb-4">
                                <label class="h6 small d-block text-uppercase">Bạn muốn nạp?<span class="text-danger">*</span></label>
                                <div class="js-focus-state input-group u-form">
                                    <select class="js-select u-select" data-width="100%" data-style="u-btn-primary--air btn-sm" name="money_charge" id="money_charge-select">
                                        <option value="50">50.000</option>
                                        <option  value="100">100.000</option>
                                        <option value="200">200.000</option>
                                        <option value="500">500.000</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">Chỉ với <span id="result-money">40</span>.000 VNĐ</small>
                                </div>
                            </div>
                            <div class="js-form-message mb-4">
                                <label class="h6 small d-block text-uppercase">Thanh toán cho thuê bao?<span class="text-danger">*</span></label>
                                <div class="js-focus-state input-group u-form">
                                    <select class="js-select u-select select-bootstrap" name="charge_method" data-width="100%" data-style="u-btn-primary--air btn-sm">
                                        <option value="TRATRUOC">Trả trước</option>
                                        <option value="TRASAU">Trả sau</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <button type="submit" class="btn btn-primary u-btn-primary u-btn-wide transition-3d-hover mb-4 btn-submit">Nạp ngay</button>
                                <a href="#detail-modal"
                                   data-modal-effect="blur"
                                   data-modal-target="#detail-modal"
                                   data-overlay-color="#111722"><span class="fa fa-angle-left mr-2"></span> Hướng dẫn</a>
                            </div>
                        </form>                    <script>
                            function checkPhoneNumber(number) {
                                let flag = false;
                                let phone = number.trim(); // ID của trường Số điện thoại
                                phone = phone.replace('(+84)', '0');
                                phone = phone.replace('+84', '0');
                                phone = phone.replace('0084', '0');
                                phone = phone.replace(/ /g, '');
                                if (phone !== '') {
                                    let firstNumber = phone.substring(0, 2);
                                    if ((firstNumber === '09' || firstNumber === '08') && phone.length === 10) {
                                        if (phone.match(/^\d{10}/)) {
                                            flag = true;
                                        }
                                    } else if (firstNumber === '01' && phone.length === 11) {
                                        if (phone.match(/^\d{11}/)) {
                                            flag = true;
                                        }
                                    }
                                }
                                return flag;
                            }

                            $(function () {
                                let canSubmit = false;
                                $('#main-form').submit(function () {
                                    let that = this;
                                    if (canSubmit) {
                                        return true;
                                    } else {
                                        if (!checkPhoneNumber($('#phonenumber').val())) {
                                            swal("", "Số điện thoại không hợp lệ, vui lòng kiểm tra lại", "error");
                                        } else {
                                            swal({
                                                title: "Xác nhận",
                                                text: "Bạn có chắc chắn muốn nạp tiền vào số điện thoại này?",
                                                icon: "warning",
                                                buttons: {
                                                    cancel: "Không",
                                                    confirm: "Đồng ý",
                                                },
                                                dangerMode: true,
                                            }).then((isOk) => {
                                                if (isOk) {
                                                    canSubmit = true;
                                                    that.submit();
                                                } else {
                                                }
                                            });
                                        }
                                        return false;
                                    }
                                })
                            })
                        </script>
                    </div>
                </div>
            </div>
            <!-- SVG Background -->
            <figure class="position-absolute-bottom-0 z-index-minus-1" style="top: 300px">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     width="100%" height="200px" viewBox="20 -20 300 100" style="margin-bottom: -8px;" xml:space="preserve">
        <path class="u-fill-white" opacity="0.4" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
          c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"/>
                    <path class="u-fill-white" opacity="0.4" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
          c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"/>
                    <path class="u-fill-white" opacity="0" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
          H42.401L43.415,98.342z"/>
                    <path class="u-fill-white" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
          c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"/>
      </svg>
            </figure>
            <!-- End SVG Background Section -->
        </div>
    </div>
    <!-- Account Modal Window -->
    <div id="detail-modal" class="js-add-payment-window u-modal-window bg-transparent" style="width: 480px;">
        <div class="bg-white rounded">
            <div class="p-5">
                <div class="text-center mb-9">
                    <h5>Khai báo thông tin</h5>
                    <img src="{{asset('frontend/img/tut-khaibao.png')}}" alt="">
                </div>
                <div class="text-center mb-9">
                    <h5>Chuyển khoản</h5>
                    <img src="{{asset('frontend/img/tut-chuyenkhoan.png')}}" alt="">
                </div>
                <div class="text-center">
                    <h5 class="text-success">Tiền tự động nạp vào tài khoản điện thoại</h5>
                    <img src="{{asset('frontend/img/tut-nhantien.png')}}" alt="">
                </div>
            </div>
            <hr class="my-0">

            <!-- Buttons -->
            <div class="d-flex justify-content-end py-3 px-5">
                <button type="button" class="btn btn-sm u-btn-secondary--air transition-3d-hover" onclick="Custombox.modal.close();">Đóng</button>
            </div>
            <!-- End Buttons -->
        </div>
    </div>
    <!-- End Account Modal Window -->
    <script>
        $(function () {
            $.HSCore.helpers.HSFocusState.init();
            $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-add-project-window', {
                autonomous: true
            });
            $('#money_charge-select').selectpicker().on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
                $('#result-money').html(this.value * 8 / 10)
            });
            $('.select-bootstrap').selectpicker();
        });
    </script>    <!-- End Author Section -->
    <figure class="w-100 position-absolute-bottom-0">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1924 72"
             style="margin-bottom: -8px; enable-background:new 0 0 1924 72;" xml:space="preserve">
        <path class="u-fill-dark" d="M962,0C507,1.5,0,72,0,72h962h962C1924,72,1417,1.5,962,0z"></path>
      </svg>
    </figure>
</main>
<footer class="bg-dark">
    <div class="container u-space-1">
        <div class="row justify-content-lg-between">
            <div class="col-md-8">
                <h3 class="h6 u-text-light">
                    <strong>Điều khoản</strong>
                </h3>
                <ul class="list-unstyled text-secondary mb-0">
                    <li class="d-flex align-items-center py-2">
                        <span class="mr-3">–</span>
                        Hoàn tiền nếu chuyển nhầm
                    </li>
                    <li class="d-flex align-items-center py-2">
                        <span class="mr-3">–</span>
                        Nạp tiền đúng vào số điện thoại đã đăng ký
                    </li>
                    <li class="d-flex align-items-center py-2">
                        <span class="mr-3">–</span>
                        Không bồi hoàn nếu đăng ký sai số điện thoại
                    </li>
                    <li class="d-flex align-items-center py-2">
                        <span class="mr-3">–</span>
                        Nạp tiền trực tiếp vào tài khoản chính
                    </li>
                </ul>
            </div>

            <div class="col-md-4">
                <!-- md -->
                <h3 class="h6 u-text-light">
                    <strong>Liên hệ</strong>
                </h3>
                <!-- End Title -->

                <!-- Address -->
                <address class="u-list--light mb-0">
                    <a class="u-list__link" href="tel:0979788990">Gọi điện: 0989.669.176</a>
                    <a class="u-list__link" href="https://www.facebook.com/Thanh-to%C3%A1n-c%C6%B0%E1%BB%9Bc-vi%E1%BB%85n-th%C3%B4ng-2153066178347642/?modal=admin_todo_tour" target="_blank">Fanpage:Thanh toán cước viễn thông</a>
                </address>
                <!-- End Address -->
            </div>
        </div>
    </div>
</footer>
<!-- JS Plugins Init. -->
<script>

</script>

</body>
</html>
