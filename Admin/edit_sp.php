<?php include 'view/header_admin.php'; ?>
<!-- dashboard inner -->
<div class="midde_cont">
	<div class="container-fluid">
		<div class="row column_title">
			<div class="col-md-12">
				<div class="page_title">
					<h2>Chỉnh sửa thông tin khóa học</h2>
				</div>
			</div>
		</div>
		<!-- row -->
		<form class="row" method="post">
			<input type="hidden" name="action" value="sua_sp">
			<input type="hidden" name="product_id" value="<?php echo $products['id']; ?>">
			<!-- table section -->
			<div class="col-md-6">
				<div class="white_shd full margin_bottom_30">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<img style="max-width:100%;" src="../images/course<?php echo $products['hinh_anh']; ?>">
						</div>
					</div>
					<div class="full graph_head row">
						<label for="hinh" class="col-sm-3 control-label title_input">URL</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="hinh" name="hinh" value="<?php echo $products['hinh_anh']; ?>">
						</div>
					</div>
					<div class="full graph_head row">
						<label for="ten_sp" class="col-sm-3 control-label title_input">Tên khóa học</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="name_course" name="name_course" value="<?php echo $products['name_course']; ?>">
						</div>
					</div>
					<div class="full graph_head row">
						<label for="ten_sp" class="col-sm-12 control-label title_input">Chi tiết khóa học</label>
						<div class="col-sm-12" style="margin-top:20px; color: #73879C;">
							<?php echo $products['mo_ta_chi_tiet']; ?>
						</div>
					</div>
				</div>
			</div>
			<!-- table section -->
			<div class="col-md-6">
				<div class="white_shd full margin_bottom_30">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2><?php echo $products['name_course']; ?></h2>
						</div>
					</div>
					<div class="table_section padding_infor_info ">
						<form class="form-group" method="post">
							<input type="hidden" name="action" value="sua_sp">
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Chọn danh mục</label>
								<select class="form-control" name="category_id">
									<option value="0">-- Chọn danh mục --</option>
									<?php foreach ($categories as $category) : ?>
										<option value="<?php echo $category['id']; ?>">
											<?php echo $category['name']; ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Code</label>
								<input type="text" class="form-control" id="code" name="code" placeholder="Code" value="<?php echo $products['code']; ?>">
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Tóm tắt</label>
								<input type="text" class="form-control" id="tomtat" name="tomtat" placeholder="Tóm tắt khóa học" value="<?php echo $products['mo_ta_ngan_gon']; ?>">
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Thịnh hành</label>
								<input type="text" class="form-control" id="thinhhanh" name="thinhhanh" placeholder="Khóa học thịnh hành" value="<?php echo $products['khoa_hoc_thinh_hanh']; ?>">
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Nỗi bật</label>
								<input type="text" class="form-control" id="noibat" name="noibat" value="<?php echo $products['khoa_hoc_noi_bat']; ?>">
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Mới</label>
								<input type="text" class="form-control" id="moi" name="moi" value="<?php echo $products['khoa_hoc_moi']; ?>">
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Giá bán</label>
								<input type="text" class="form-control" id="gia" name="gia" value="<?php echo $products['gia_khoa_hoc']; ?>">
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Giảm giá</label>
								<input type="text" class="form-control" id="giamgia" name="giamgia" value="<?php echo $products['gia_canh_tranh']; ?>">
							</div>
							<div class="form-group">
								<label class="title_input" for="exampleInputName2">Thông tin chi tiết khóa học</label>
								<textarea id="chitiet" name="chitiet"><?php echo $products['mo_ta_chi_tiet']; ?></textarea>
								<script>
									ClassicEditor
										.create(document.querySelector('#chitiet'))
										.then(editor => {
											console.log(editor);
										})
										.catch(error => {
											console.error(error);
										});
								</script>
							</div>
							<button type="submit" class="btn btn-primary">Lưu thay đổi</button>
						</form>

					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- end dashboard inner -->
</div>
</div>
</div>
<?php include 'view/footer_admin.php' ?>
</body>

</html>