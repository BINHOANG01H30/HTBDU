<?php
include 'inc/header.php'
?>

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li>Thanh toán</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-md-5 order-md-2 mb-5">
            <h4 class="d-flex justify-content-between align-items-center mb-3 ml-2">
                <span class="text-muted">Khóa học</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0 mb-3"><?php echo $products['name_course']; ?></h6>
                        <p class="text-muted"><?php echo $products['mo_ta_ngan_gon']; ?></p>
                    </div>
                    <span class="text-muted"><?= number_format($products['gia_khoa_hoc'], 0, ".", "."); ?>đ</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Mã giảm giá</h6>
                        <p><?php echo $products['ma_giam_gia']; ?></p>
                    </div>
                    <span class="text-success">-0đ</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span style="color: black;">Tổng cộng (VNĐ)</span>
                    <strong style="color: red;"><?= number_format($products['gia_canh_tranh'], 0, ".", "."); ?>đ</strong>
                    <?php
                    $giaban = $products['gia_canh_tranh'] / 22952;
                    $vnd_to_usd = (string)$giaban;
                    ?>
                    <input type="hidden" id="vnd_to_usd" value="$<?php echo $vnd_to_usd ?>">
                </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Mã giảm giá">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Áp dụng</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-7 order-md-1">
            <h4 class="mb-3">Thông tin khách hàng</h4>
            <form class="needs-validation mb-5" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Tên <span style=" color: red;">(*)</span></label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Tên họp lệ là bắt buộc </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Họ <span style=" color: red;">(*)</span></label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Họ hợp lệ là bắt buộc </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username">Tên người dùng</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Nguyen Van A" value="<?= $_SESSION['username'] ?>" required="">
                        <div class="invalid-feedback" style="width: 100%;"> Tên người dùng là bắt buộc. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Không bắt buộc)</span></label>
                    <?php
                    $email = 'htbdu@example.com';
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        echo '<input type="email" class="form-control" id="email" placeholder="htbdu@example.com" value=' . $email . ' pattern=".+@.+(\.[a-z]{2-3}){1-2}" >';
                    } else {
                        echo '<input type="email" class="form-control" id="email" placeholder="htbdu@example.com">';
                    }
                    ?>
                    <div class="invalid-feedback"> Email không hợp lệ. </div>
                </div>
                <div class="row">
                    <div class="col-md-9 mb-2">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" placeholder="" required="">
                        <div class="invalid-feedback"> Vui lòng điền địa chỉ hợp lệ. </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="zip">Mã bưu điện</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback"> Yêu cầu mã bưu điện. </div>
                    </div>
                </div>
                <hr class="mb-1">

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Lưu thông tin của tôi</label>
                </div>
                <hr class="mb-3">
                <h4 class="mb-3">Thanh toán với</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio my-3">
                        <input id="momo" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="momo">
                            <img style="width: 30px; height: 20px;" src="images/payment/logo-momo-png-1.png" alt="">
                            Ví MoMo
                        </label>
                    </div>
                    <div class="custom-control custom-radio my-3">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required="">
                        <label class="custom-control-label" for="credit">
                            <img style="width: 30px; height: 20px;" src="images/payment/visa.png" alt="">
                            Thanh toán bằng thẻ Visa, Master, JCB,..
                        </label>
                    </div>
                    <div class="custom-control custom-radio my-3">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">
                            <img style="width: 30px; height: 20px;" src="images/payment/local_atm.png" alt="">
                            Thẻ ATM nội địa
                        </label>
                    </div>
                    <div id="paypal-button"></div>
                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                    <script>
                        var usd = document.getElementById("vnd_to_usd");
                        var usdVal = "";
                        if (usd) {
                            usdVal = usd.value;
                        }
                        <?php
                        $giabandau = $products['gia_canh_tranh'];
                        $giaban = $giabandau / 22952;
                        $giaban_VND = (string)$giaban;
                        ?>
                        paypal.Button.render({
                            // Configure environment
                            env: 'sandbox',
                            client: {
                                sandbox: 'Admrcy6rJ47TJ6IrXb2bJVRf2CPQ1jUmw4RiSgIvRtwSDW7BxLiQsQ_tGRVmIb9I6bVu9kj1jvZAspgw',
                                production: 'demo_production_client_id'
                            },
                            // Customize button (optional)
                            locale: 'en_US',
                            style: {
                                size: 'small',
                                color: 'gold',
                                shape: 'pill',
                            },

                            // Enable Pay Now checkout flow (optional)
                            commit: true,

                            // Set up a payment
                            payment: function(data, actions) {
                                return actions.payment.create({
                                    transactions: [{
                                        amount: {
                                            total: <?php echo $giaVND; ?>,
                                            currency: 'USD'
                                        }
                                    }]
                                });
                            },
                            // Execute the payment
                            onAuthorize: function(data, actions) {
                                return actions.payment.execute().then(function() {
                                    // Show a confirmation message to the buyer
                                    window.alert('Cảm ơn bạn đã mua sản phẩm của chúng tôi. Ghé lại lần sau nhé!');
                                });
                            }
                        }, '#paypal-button');
                    </script>
                </div>
                <!-- <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Tên trên thẻ</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                        <small class="text-muted">Tên được ghi trên thẻ</small>
                        <div class="invalid-feedback"> Tên trên thẻ là bắt buộc </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Số thẻ</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                        <div class="invalid-feedback"> Số thẻ là bắt buộc </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3"> 
                        <label for="cc-expiration">Ngày hết hạn</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                        <div class="invalid-feedback"> Bắt buộc nhập trường này </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                        <div class="invalid-feedback"> Trường này là bắt buộc </div>
                    </div>
                </div> -->
            </form>

            <form method="post" style="margin-top:20px;">
                <input type="hidden" name="action" value="checkout">
                <input type="hidden" name="user_id" value="<?php $username = $_SESSION['username'];
                                                            $username = get_id_user($username);
                                                            echo $username; ?>">
                <input type="hidden" name="chitiet" value="
								<?php 
                                    $cart_chitiet = $products['id'];
                                    echo $cart_chitiet;
                                ?>
								">
                <input type="hidden" name="thanh_tien" value="<?php echo $giabandau; ?>">
                <input type="hidden" name="SDT_email" value="<?php echo $email; ?>">
                <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s"); ?>">
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Gửi yêu cầu thanh toán</button> 
            </form>
        </div>
    </div>
</div>

<?php
include 'inc/footer/ft_cart.php'
?>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">