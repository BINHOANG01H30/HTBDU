<?php include 'view/header_admin.php'; ?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Bảng điều khiển</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- table section -->
            <div class="col-md-7">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Quản lý người dùng</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên tài khoản</th>
                                        <th>Email</th>
                                        <th>Vai trò</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td>
                                                <form method="post">
                                                    <input type="hidden" name="action" value="del_user">
                                                    <label for="user_<?php echo $user['id']; ?>" class="btn"><i style=" font-size: 24px;" class="fa fa-close red_color"></i></label>
                                                    <input id="user_<?php echo $user['id']; ?>" type="submit" name="id" value="<?php echo $user['id']; ?>" class="hidden" />
                                                </form>
                                            </td>
                                            <td>
                                                <p><?php echo $user['username']; ?></p>
                                            </td>
                                            <td>
                                                <p><?php echo $user['email']; ?></p>
                                            </td>
                                            <td>
                                                <p>
                                                    <?php
                                                    if ($user['position'] == 1) {
                                                        echo '<a href="?action=ql_user&id=' . $user['position'] . '">Người dùng</a>';
                                                    } else {
                                                        echo '<a href="?action=ql_user&id=' . $user['position'] . '">Quản trị viên</a>';
                                                    }
                                                    ?>
                                                </p>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table section -->
            <div class="col-md-5">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Thêm quản trị viên</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info ">
                        <form class="form-group" method="post">
                            <input type="hidden" name="action" value="them_admin">
                            <div class="form-group">
                                <label for="exampleInputName2">Tên tài khoản</label>
                                <input type="text" class="form-control" name="user" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Mật khẩu</label>
                                <input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
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
</body>

</html>