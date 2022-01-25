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
                            <h2>Quản lý danh mục</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên danh mục</th>
                                        <th>Hình ảnh</th>
                                        <th>Sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $category) : ?>
                                        <tr>
                                            <td>
                                                <form method="post">
                                                    <input type="hidden" name="action" value="del_nhomsp">
                                                    <label for="nsp_<?php echo $category['id']; ?>" class="btn"><i style=" font-size: 24px;" class="fa fa-close red_color"></i></label>
                                                    <input id="nsp_<?php echo $category['id']; ?>" type="submit" name="category_id" value="<?php echo $category['id']; ?>" class="hidden" />
                                                </form>
                                            </td>
                                            <td><a href="?action=ql_sp&category_id=<?php echo $category['id']; ?>&code=0"><?php echo $category['name']; ?></a></td>
                                            <td><img style="width:100px;" src="../images<?php echo $category['ctg_img']; ?>"></td>
                                            <td>
                                                <a href="?action=edit_nsp&category_id=<?php echo $category['id']; ?>"><i style=" font-size: 24px;" class="fa fa-edit blue_color"></i></a>
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
                            <h2>Sửa đổi thông tin danh mục</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info ">
                        <form class="form-group" method="post">
                            <input type="hidden" name="action" value="sua_nhomsp">
							<input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
                            <div class="form-group">
                                <label for="exampleInputName2">Nhập tên</label>
                                <input type="text" class="form-control" name="ten_nhomsp" value="<?php echo $category_name1; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Đường dẫn hình ảnh</label>
                                <input type="text" class="form-control" name="hinh_nhomsp" value="<?php echo $category_img; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Danh sách sản phẩm</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Code</th>
                                        <th>Tên khóa học</th>
                                        <th>Hình ảnh</th>
                                        <th style="width:120px;">Giá</th>
                                        <th style="width:120px;">Giảm giảm</th>
                                        <th>Tóm tắt</th>
                                        <th style="width:100px;">Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product) : ?>
                                        <tr>
                                            <td>
                                                <form method="post">
                                                    <input type="hidden" name="action" value="del_sp">
                                                    <label for="sp_<?php echo $product['id']; ?>" class="btn"><i style=" font-size: 24px;" class="fa fa-close red_color"></i></label>
                                                    <input id="sp_<?php echo $product['id']; ?>" type="submit" name="id_sanpham" value="<?php echo $product['id']; ?>" class="hidden" />
                                                </form>
                                            </td>
                                            <td><a href="?action=ql_sp&category_id=<?php echo $product['id_danhmuc']; ?>&code=<?php echo $product['code']; ?>"><?php echo $product['code']; ?></a></td>
                                            <td style="text-align:left;"><?php echo $product['name_course']; ?></td>
                                            <td><img style="width:100px;" src="../images/course<?php echo $product['hinh_anh']; ?>"></td>
                                            <td><?php echo number_format($product['gia_khoa_hoc']); ?> VNĐ</td>
                                            <td><?php echo number_format($product['gia_canh_tranh']); ?> VNĐ</td>
                                            <td style="height: 30px; overflow: hidden;text-overflow: ellipsis;"><?php echo $product['mo_ta_ngan_gon']; ?></td>
                                            <td>
                                                <a href="?action=edit_sp&product_id=<?php echo $product['id']; ?>"><i style=" font-size: 24px;" class="fa fa-edit blue_color"></i></a></label>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
</body>

</html>