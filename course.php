<?php
include 'inc/header.php';
include 'Mailer/sendEmail.php';
?>

<!-- Home -->

<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.php">Trang chủ</a></li>
							<li><a href="courses.php">Khóa học</a></li>
							<li>Chi tiết khóa học</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Course -->

<div class="course">
	<div class="container">
		<div class="row">

			<!-- Course -->
			<div class="col-lg-8">

				<div class="course_container">
					<div class="course_title"><?php echo $products['name_course']; ?></div>
					<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

						<!-- Course Info Item -->
						<div class="course_info_item">
							<div class="course_info_title">Giáo viên:</div>
							<div class="course_info_text"><a href="#"><?php echo $teacher['name_gv']; ?></a></div>
						</div>

						<!-- Course Info Item -->
						<div class="course_info_item">
							<div class="course_info_title">Đánh giá:</div>
							<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
						</div>

						<!-- Course Info Item -->
						<div class="course_info_item">
							<div class="course_info_title">Danh mục:</div>
							<div class="course_info_text"><a href="#"><?php echo $categories; ?></a></div>
						</div>

					</div>

					<!-- Course Image -->
					<div class="course_image"><img src="images/course<?= $products['hinh_anh'] ?>" alt=""></div>

					<!-- Course Tabs -->
					<div class="course_tabs_container">
						<div class="tabs d-flex flex-row align-items-center justify-content-start">
							<div class="tab active">Chi tiết</div>
							<div class="tab">Lộ trình</div>
							<div class="tab">Đánh giá</div>
						</div>
						<div class="tab_panels">

							<!-- Description -->
							<div class="tab_panel active">
								<div class="tab_panel_title"><?php echo $products['name_course']; ?></div>
								<div class="tab_panel_content">
									<div class="tab_panel_text">
										<p><?php echo $products['mo_ta_chi_tiet']; ?></p>
									</div>
									<div class="tab_panel_section">
										<div class="tab_panel_subtitle">Yêu cầu</div>
										<ul class="tab_panel_bullets">
											<li>Học viên có đầy đủ thiết bị học tập như: máy tính, điện thoại</li>
											<li>Chuẩn bị đường truyền tốt</li>
											<li>Báo cáo tiến độ học tập theo quy định của khóa học</li>
										</ul>
									</div>
									<div class="tab_panel_section">
										<div class="tab_panel_subtitle">Mục tiêu của khóa học là gì ?</div>
										<div class="tab_panel_text">
											<p>Như những gì khóa học có và để đáng với công sức cũng như tiền bạc. Khi khóa học hoàn thành cũng là lúc bạn hoàn chỉnh kiến thức và có thể sử dụng nó một cách hiệu quả trong thời gian ngắn nhất</p>
										</div>
									</div>
									<div class="tab_panel_faq">
										<div class="tab_panel_title">FAQ</div>

										<!-- Accordions -->
										<div class="accordions">

											<div class="elements_accordions">

												<div class="accordion_container">
													<div class="accordion d-flex flex-row align-items-center">
														<div>Tôi có được hoàn tiền nếu không vừa lòng?</div>
													</div>
													<div class="accordion_panel">
														<p>Bạn sẽ được hoàn trả tiền nếu không vừa lòng trong vòng 2 ngày</p>
													</div>
												</div>

												<div class="accordion_container">
													<div class="accordion d-flex flex-row align-items-center active">
														<div>Giáo viên có đủ chất lượng không?</div>
													</div>
													<div class="accordion_panel">
														<p>Với đội ngũ giáo viên từng là giảng viên đại học được tuyển chọn khắt khe. Hứa hẹn sẽ là những người truyền lửa giúp bạn có một trải nghiệm và kết quả học tập chất lượng nhất </p>
													</div>
												</div>

												<div class="accordion_container">
													<div class="accordion d-flex flex-row align-items-center">
														<div>Tôi phải làm gì khi không thể tham gia học?</div>
													</div>
													<div class="accordion_panel">
														<p>Bạn có thể tạm dừng tiến độ của khóa học và hãy quay lại sớm nhé</p>
													</div>
												</div>

												<div class="accordion_container">
													<div class="accordion d-flex flex-row align-items-center">
														<div>Tôi có thế học cùng nhiều người chứ?</div>
													</div>
													<div class="accordion_panel">
														<p>Vâng. Tất nhiên rồi</p>
													</div>
												</div>

												<div class="accordion_container">
													<div class="accordion d-flex flex-row align-items-center">
														<div>Tôi có cần tham gia các cuộc giao lưu không?</div>
													</div>
													<div class="accordion_panel">
														<p>Sẽ không bắt buộc đâu, nhưng nó sẽ là cơ hội cho bạn phát triển nhiều điều đấy ^^</p>
													</div>
												</div>

											</div>

										</div>
									</div>
								</div>
							</div>

							<!-- Curriculum -->
							<div class="tab_panel tab_panel_2">
								<div class="tab_panel_content">
									<div class="tab_panel_title"><?php echo $products['name_course']; ?></div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p><?php echo $products['mo_ta_ngan_gon']; ?></p>
										</div>

										<!-- Dropdowns -->
										<ul class="dropdowns">
											<li class="has_children">
												<div class="dropdown_item">
													<div class="dropdown_item_title"><span>Lecture 1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
													<div class="dropdown_item_text">
														<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
													</div>
												</div>
												<ul>
													<li>
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 1.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 1.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li class="has_children">
												<div class="dropdown_item">
													<div class="dropdown_item_title"><span>Lecture 2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
													<div class="dropdown_item_text">
														<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
													</div>
												</div>
												<ul>
													<li>
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 2.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown_item">
															<div class="dropdown_item_title"><span>Lecture 2.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
															<div class="dropdown_item_text">
																<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="dropdown_item">
													<div class="dropdown_item_title"><span>Lecture 3:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
													<div class="dropdown_item_text">
														<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="dropdown_item">
													<div class="dropdown_item_title"><span>Lecture 4:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
													<div class="dropdown_item_text">
														<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="dropdown_item">
													<div class="dropdown_item_title"><span>Lecture 5:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
													<div class="dropdown_item_text">
														<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Reviews -->
							<div class="tab_panel tab_panel_3">
								<div class="tab_panel_title">Đánh giá khóa học</div>

								<!-- Rating -->
								<div class="review_rating_container">
									<div class="review_rating">
										<div class="review_rating_num">4.5</div>
										<div class="review_rating_stars">
											<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
										</div>
										<div class="review_rating_text">(28 đánh giá)</div>
									</div>
									<div class="review_rating_bars">
										<ul>
											<li><span>5 Star</span>
												<div class="review_rating_bar">
													<div style="width:90%;"></div>
												</div>
											</li>
											<li><span>4 Star</span>
												<div class="review_rating_bar">
													<div style="width:75%;"></div>
												</div>
											</li>
											<li><span>3 Star</span>
												<div class="review_rating_bar">
													<div style="width:32%;"></div>
												</div>
											</li>
											<li><span>2 Star</span>
												<div class="review_rating_bar">
													<div style="width:10%;"></div>
												</div>
											</li>
											<li><span>1 Star</span>
												<div class="review_rating_bar">
													<div style="width:3%;"></div>
												</div>
											</li>
										</ul>
									</div>
								</div>

								<!-- Comments -->
								<div class="comments_container">
									<ul class="comments_list">
										<li>
											<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
												<div class="comment_image">
													<div><img src="images/comment_1.jpg" alt=""></div>
												</div>
												<div class="comment_content">
													<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
														<div class="comment_author"><a href="#">Milley Cyrus</a></div>
														<div class="comment_rating">
															<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
														</div>
														<div class="comment_time ml-auto">1 day ago</div>
													</div>
													<div class="comment_text">
														<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
													</div>
													<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
														<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
														<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
													</div>
												</div>
											</div>
											<ul>
												<li>
													<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
														<div class="comment_image">
															<div><img src="images/comment_2.jpg" alt=""></div>
														</div>
														<div class="comment_content">
															<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																<div class="comment_author"><a href="#">John Tyler</a></div>
																<div class="comment_rating">
																	<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
																</div>
																<div class="comment_time ml-auto">1 day ago</div>
															</div>
															<div class="comment_text">
																<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
															</div>
															<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
												<div class="comment_image">
													<div><img src="images/comment_3.jpg" alt=""></div>
												</div>
												<div class="comment_content">
													<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
														<div class="comment_author"><a href="#">Milley Cyrus</a></div>
														<div class="comment_rating">
															<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
														</div>
														<div class="comment_time ml-auto">1 day ago</div>
													</div>
													<div class="comment_text">
														<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
													</div>
													<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
														<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
														<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<div class="add_comment_container">
										<div class="add_comment_title">Viết bình luận</div>
										<div class="add_comment_text">Bạn cần đăng nhập trước <a href="#">Đăng nhập</a> để đăng bình luận.</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- Course Sidebar -->
			<div class="col-lg-4">
				<div class="sidebar">

					<!-- Feature -->
					<div class="sidebar_section">
						<div class="sidebar_section_title">Tổng quan khóa học</div>
						<div class="sidebar_feature">
							<div class="course_price"><?= number_format($products['gia_canh_tranh'], 0, ".", "."); ?> VNĐ</div>

							<!-- Features -->
							<div class="feature_list">

								<!-- Feature -->
								<div class="feature d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Thời gian:</span></div>
									<div class="feature_text ml-auto">2 tuần</div>
								</div>

								<!-- Feature -->
								<div class="feature d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Số bài học:</span></div>
									<div class="feature_text ml-auto">30</div>
								</div>

								<!-- Feature -->
								<div class="feature d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Bài tập:</span></div>
									<div class="feature_text ml-auto">6</div>
								</div>

								<!-- Feature -->
								<div class="feature d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Thực hành:</span></div>
									<div class="feature_text ml-auto">Có</div>
								</div>

								<!-- Feature -->
								<div class="feature d-flex flex-row align-items-center justify-content-start">
									<div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Số tài khoản có thể tham gia:</span></div>
									<div class="feature_text ml-auto">3</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="sidebar_section">
						<div class="sidebar_section_title"><?php echo $teacher['name_gv']; ?></div>
						<div class="sidebar_teacher">
							<div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
								<div class="teacher_image"><img src="images/teachers<?php echo $teacher['avatar']; ?>" alt=""></div>
								<div class="teacher_title">
									<div class="teacher_name"><a href="#"></a></div>
									<div class="teacher_position"><?php echo $teacher['major']; ?></div>
								</div>
							</div>
							<div class="teacher_meta_container">
								<!-- Teacher Rating -->
								<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_meta_title">Đánh giá:</div>
									<div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>
								</div>
								<!-- Teacher Review -->
								<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_meta_title">Lượt đánh giá:</div>
									<div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>
								</div>
								<!-- Teacher Quizzes -->
								<div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
									<div class="teacher_meta_title">Người theo dõi:</div>
									<div class="teacher_meta_text ml-auto"><span>600</span><i class="fa fa-user" aria-hidden="true"></i></div>
								</div>
							</div>
							<div class="teacher_info">
								<p><?php echo $teacher['intrduction']; ?></p>
							</div>
						</div>

					</div>

					<div class="sidebar_section">
						<div class="buy_now_button">
							<a href="?action=cart&id_sp=<?php echo $products['id']; ?>"><button type="button" class="btn btn-primary btn-lg btn-block">Mua ngay</button></a>
							<?php
							$_SESSION['id_sp'] = $_GET['id_sp'];
							?>
						</div>
					</div>

					<!-- Khóa học mới nhất -->
					<div class="sidebar_section">
						<div class="sidebar_section_title">Khóa học mới nhất</div>
						<div class="sidebar_latest">

							<?php foreach ($product_new as $sanphammoi) { ?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image">
										<div><img src="images/course<?= $sanphammoi['hinh_anh'] ?>" alt=""></div>
									</div>
									<div class="latest_content">
										<div class="latest_title"><a href="?action=course&id_nsp=<?php echo $sanphammoi['id_danhmuc']; ?>&id_sp=<?php echo $sanphammoi['id']; ?>"><?= $sanphammoi['name_course'] ?></a></div>
										<div class="latest_price"><?= number_format($sanphammoi['gia_canh_tranh'], 0, ".", "."); ?> VNĐ</div>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Newsletter -->

<div class="newsletter">
	<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

					<!-- Newsletter Content -->
					<div class="newsletter_content text-lg-left text-center">
						<div class="newsletter_title">Đăng ký ngay</div>
						<div class="newsletter_subtitle">Đăng ký nhận tin tức mới nhất về điện thoại thông minh và các ưu đãi lớn mà chúng tôi cung cấp</div>
					</div>

					<!-- Newsletter Form -->
					<div class="newsletter_form_container ml-lg-auto">
						<form action="" method="post" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
							<input type="email" name="email" class="newsletter_input" placeholder="Nhập email" required="required">
							<button type="submit" name="submit" class="newsletter_button">Đăng ký</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php
	include 'inc/footer/ft_course.php';
	?>
	<link rel="stylesheet" type="text/css" href="styles/course.css">
	<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">