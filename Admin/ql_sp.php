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
            <div class="col-md-6">
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
            <div class="col-md-6">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Thêm danh mục</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info ">
                        <form class="form-group" method="post">
                            <input type="hidden" name="action" value="them_nhomsp">
                            <div class="form-group">
                                <label for="exampleInputName2">Nhập tên</label>
                                <input type="text" class="form-control" name="ten_nhomsp" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Hình ảnh</label>
                                <input type="text" class="form-control" name="hinh_nhomsp" placeholder="Ghi đường dẫn">
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Thêm khóa học</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info ">
						<form class="form-group" method="post">
							<input type="hidden" name="action" value="them_sp">
							<div class="form-group">
								<label for="exampleInputName2">Chọn danh mục</label>
								<select class="form-control" name="category_id"> 
						            <option value="0">--Danh mục --</option>
						            <?php foreach ($categories2 as $category) : ?> 
						                <option value="<?php echo $category['id']; ?>"> 
						                    <?php echo $category['name']; ?> 
						                </option> 
						            <?php endforeach; ?> 
						        </select>
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Tên khóa học</label>
								<input type="text" class="form-control" name="name_course" placeholder="Nhập tên khóa học">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Code</label>
								<input type="text" class="form-control" name="code" placeholder="Nhập tên nhà cung cấp">
							</div>
							<div class="form-group">
							    <label for="exampleInputEmail2">Chọn ảnh khóa học</label>
							    <input type="text" class="form-control" name="hinh_anh" placeholder="Hình ảnh khóa học">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Tóm tắt</label>
								<input type="text" class="form-control" name="tomtat" placeholder="Tóm tắt khóa học">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Thịnh hành</label>
								<input type="text" class="form-control" name="thinhhanh" placeholder="Khóa học thịnh hành">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Nỗi bật</label>
								<input type="text" class="form-control" name="noibat" placeholder="Khóa học nổi bật">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Mới</label>
								<input type="text" class="form-control" name="moi" placeholder="Khóa học mới">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Giá bán</label>
								<input type="text" class="form-control" name="gia" placeholder="Nhập giá bán">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Giảm giá</label>
								<input type="text" class="form-control" name="giamgia" placeholder="Nhập giá khuyến mãi">
							</div>
							<div class="form-group">
								<label for="exampleInputName2">Thông tin chi tiết khóa học</label>
								<textarea id="chitiet" name="mota"></textarea>
								<script>
                        ClassicEditor
                                .create( document.querySelector( '#chitiet' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
							</div>
	  						<button type="submit" class="btn btn-primary">Thêm</button>
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
                            <h2>Danh sách khóa học</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table" id="sp_datatable">
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