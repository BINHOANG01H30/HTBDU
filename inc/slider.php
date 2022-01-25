<div class="home">
	<div class="home_slider_container">

		<!-- Home Slider -->
		<div class="owl-carousel owl-theme home_slider">

			<!-- Home Slider Item -->
			<?php foreach ($sliders as $slider) { ?>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider<?php echo $slider['file']; ?>)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Hệ thống giáo dục tiện ích với HTBDU</div>
									<div class="home_slider_subtitle">Tương lại của công nghệ giáo dục</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Tìm kiếm khóa học" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Danh mục</option>
													<?php foreach ($categories as $category) { ?>
														<option><?php echo $category['name'] ?></option>
													<?php } ?>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Chọn mức giá</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">Tìm kiếm</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			<!-- Home Slider Item
			<div class="owl-item">
				<div class="home_slider_background" style="background-image:url(images/home_slider_4.jpg)"></div>
				<div class="home_slider_content">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<div class="home_slider_title">Hệ thống giáo dục tiện ích với HTBDU</div>
								<div class="home_slider_subtitle">Tương lại của công nghệ giáo dục</div>
								<div class="home_slider_form_container">
									<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<input type="search" class="home_search_input" placeholder="Từ khóa tìm kiếm" required="required">
											<select class="dropdown_item_select home_search_input">
												<option>Danh mục</option>
												<option>Category</option>
												<option>Category</option>
											</select>
											<select class="dropdown_item_select home_search_input">
												<option>Chọn mức giá</option>
												<option>Price Type</option>
												<option>Price Type</option>
											</select>
										</div>
										<button type="submit" class="home_search_button">Tìm kiếm</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->

		</div>
	</div>

	<!-- Home Slider Nav -->

	<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
	<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>