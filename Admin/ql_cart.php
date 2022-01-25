<?php include 'view/header_admin.php'; ?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title hidden-print">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Bảng điều khiển</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30 hidden-print">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Quản lý hóa đơn</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-trash blue_color" style=" font-size: 20px; text-align: center;"></i></th>
                                        <th>Tên khách hàng</th>
                                        <th>Email</th>
                                        <th>Mã khóa học</th>
                                        <th>Tổng tiền</th>
                                        <th>Thời gian</th>
                                        <th>Trang thái</th>
                                        <th>Duyệt đơn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($carts as $cart) : ?>
                                        <tr>
                                            <td>
                                                <form method="post">
                                                    <input type="hidden" name="action" value="del_cart">
                                                    <label for="cart_<?php echo $cart['id']; ?>" class="btn"><i style=" font-size: 24px;" class="fa fa-close red_color"></i></label>
                                                    <input id="cart_<?php echo $cart['id']; ?>" type="submit" name="id" value="<?php echo $cart['id']; ?>" class="hidden" />
                                                </form>
                                            </td>
                                            <td>
                                                <p><?php echo get_ten_user($cart['user_id']); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo get_email_user($cart['user_id']); ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $cart['chi_tiet']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo number_format($cart['thanh_tien']) . 'đ'; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $cart['ngay_mua']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $cart['trang_thai']; ?></p>
                                            </td>
                                            <td>
                                                <form method="post">
                                                    <input type="hidden" name="action" value="up_cart">
                                                    <input type="hidden" name="cartid" value="<?php echo $cart['id']; ?>">
                                                    <input type="hidden" name="userid" value="<?php echo $cart['user_id']; ?>">
                                                    <input type="hidden" name="chitiet" value="<?php echo $cart['chi_tiet']; ?>">
                                                    <input type="hidden" name="thanhtien" value="<?php echo $cart['thanh_tien']; ?>">
                                                    <input type="hidden" name="date" value="<?php echo $cart['ngay_mua']; ?>">
                                                    <input type="hidden" name="email" value="<?php echo $cart['SDT_email']; ?>">
                                                    <?php
                                                    if ($cart['trang_thai'] == 'Đang chờ xử lý') {
                                                        echo "<input type='hidden' name='trangthai' value='Đã thanh toán'>";
                                                    } else {
                                                        echo "<input type='hidden' name='trangthai' value='Đang chờ xử lý'>";
                                                    }
                                                    ?>
                                                    <label for="up_cart<?php echo $cart['id']; ?>" data-toggle='tooltip' data-placement='bottom' title='Thay đổi trạng thái giỏ hàng' class="btn"><i style=" font-size: 24px;" class="fa fa-check-square blue2_color"></i></label>
                                                    <i style=" font-size: 24px;" class="fa fa-print red_color btn-lg" data-toggle="modal" data-target="#myModal"></i>
                                                    <a class="pick" href="?action=ql_cart&id_cart=<?php echo $cart['id']; ?>">Chọn</a>
                                                    <input id="up_cart<?php echo $cart['id']; ?>" type="submit" class="hidden" />
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <!-- Modal print-->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <!-- invoice section -->
                                        <div class="col-md-12">
                                            <div class="white_shd full ">
                                                <div class="full graph_head">
                                                    <div class="heading1 margin_0">
                                                        <h2><i class="fa fa-file-text-o"></i> Hóa đơn</h2>
                                                    </div>
                                                    <div style="padding-left: 450px;"><img src="../images/logo_black.png" alt=""></div>
                                                </div>
                                                <div class="full">
                                                    <div class="invoice_inner">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                                                    <h4>Từ</h4>
                                                                    <p><strong>HTBDU</strong><br>
                                                                        470 Trần Đại Nghĩa, Hòa Hải, Ngũ Hành Sơn<br>
                                                                        Đà Nẵng<br>
                                                                        <strong>Phone : </strong><a href="tel:0335163978">+(84)35 165 978</a><br>
                                                                        <strong>Email : </strong><a href="mailto:htbdu.web@gmail.com"> Info.htbdu@gmail.com</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                                                    <h4>Tới</h4>
                                                                    <p><strong><?php echo get_ten_user($cart['user_id']); ?></strong><br>
                                                                        <strong>Email : </strong><a href="mailto:htbdu.web@gmail.com"><?php echo get_email_user($cart['user_id']); ?></a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                                                    <h4>Số hóa đơn - #<?php echo $cart['id']; ?> </h4>
                                                                    <p><strong>Mã hóa đơn : </strong><?php echo $cart['id']; ?><br>
                                                                        <strong>Thời gian: </strong><?php echo $cart['ngay_mua']; ?><br>
                                                                        <strong>Tài khoản: </strong><?php echo get_email_user($cart['user_id']); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="full padding_infor_info">
                                                    <div class="table_row">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Tên khách hàng</th>
                                                                        <th>Tên khóa học</th>
                                                                        <th>Mã khóa học</th>
                                                                        <th>Mô tả</th>
                                                                        <th>Thành tiền</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?php echo get_ten_user($cart['user_id']); ?></td>
                                                                        <td><?php echo get_ten_kh_invoice($cart['chi_tiet']); ?></td>
                                                                        <td><?php echo get_ma_kh_invoice($cart['chi_tiet']); ?></td>
                                                                        <td><?php echo get_tomtat_kh_invoice($cart['chi_tiet']) ?></td>
                                                                        <td><?php echo number_format($cart['thanh_tien']) . 'đ'; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="btnPrint" class="btn cur-p btn-primary hidden-print" data-dismiss="modal"><i style=" font-size: 20px;" class="fa fa-print"></i> In hóa đơn</button>
                                    <button type="button" class="btn cur-p btn-outline-danger hidden-print" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end dashboard inner -->
</div>
</div>
</div>
<?php include 'view/footer_admin.php' ?>
<script>
    const $btnPrint = document.querySelector("#btnPrint");
    $btnPrint.addEventListener("click", () => {
        window.print();
        $('#myModel').modal('hide');
    }, 500);
</script>
<script>
    // lấy phần Modal
    var modal = document.getElementById('myModal');

    // Lấy phần button mở Modal
    var btn = document.getElementById("myBtn");

    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close")[0];

    // Khi button được click thi mở Modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Khi span được click thì đóng Modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Khi click ngoài Modal thì đóng Modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>

</html>