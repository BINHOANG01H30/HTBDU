<?php include 'view/header_admin.php'; ?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Bảng điểu khiển</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column4 graph">
            <!-- Gallery section -->
            <div class="col-md-8">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Quản lý hình ảnh</h2>
                        </div>
                    </div>
                    <div class="full gallery_section_inner padding_infor_info">
                        <div class="row">
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Hình ảnh danh mục</h2>
                                    <span>---------------------------</span>
                                </div>
                            </div>
                            <?php foreach ($hinh_nsp as $file) { ?>
                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                    <div class="column">
                                        <a data-fancybox="gallery" href="../images/categories/<?php echo $file; ?>"><img class="img-responsive" data-target="#<?php echo substr($file, 0, -4); ?>" src="../images/categories/<?php echo $file; ?>" /></a>
                                    </div>
                                    <div class="heading_section">
                                        <h4><?php echo $file; ?></h4>
                                        <form method="post">
                                            <input type="hidden" name="action" value="del_img_nsp">
                                            <label for="<?php echo $file; ?>" class="btn"><h4><i  class="fa fa-trash"></i></h4></label>
                                            <input id="<?php echo $file; ?>" type="submit" name="id_img" value="<?php echo $file; ?>" class="hidden" />
									    </form>
                                    </div>
                                    
                                </div>
                            <?php } ?>
                            <!-- Hình ảnh khóa học -->

                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Hình ảnh khóa học</h2>
                                    <span>---------------------------</span>
                                </div>
                            </div>

                            <!-- ---------------------------------------------------------------------- -->
                            <?php foreach ($hinh_sp as $file) { ?>
                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                    <div class="column">
                                        <a data-fancybox="gallery" href="../images/course/<?php echo $file; ?>"><img class="img-responsive" data-target="#<?php echo substr($file, 0, -4); ?>" src="../images/course/<?php echo $file; ?>" alt="#" /></a>
                                    </div>
                                    <div class="heading_section">
                                        <h4><?php echo $file; ?></h4>
                                        <form method="post">
                                            <input type="hidden" name="action" value="del_img_sp">
                                            <label for="<?php echo $file; ?>" class="btn"><h4><i  class="fa fa-trash"></i></h4></label>
                                            <input id="<?php echo $file; ?>" type="submit" name="id_img" value="<?php echo $file; ?>" class="hidden" />
									    </form>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- Hình ảnh giáo viên -->
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Hình ảnh giáo viên</h2>
                                    <span>---------------------------</span>
                                </div>
                            </div>

                            <!-- ---------------------------------------------------------------------- -->
                            <?php foreach ($hinh_gv as $file) { ?>
                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                    <div class="column">
                                        <a data-fancybox="gallery" href="../images/teachers/<?php echo $file; ?>"><img class="img-responsive" data-target="#<?php echo substr($file, 0, -4); ?>" src="../images/teachers/<?php echo $file; ?>" alt="#" /></a>
                                    </div>
                                    <div class="heading_section">
                                        <h4><?php echo $file; ?></h4>
                                        <form method="post">
                                            <input type="hidden" name="action" value="del_img_gv">
                                            <label for="<?php echo $file; ?>" class="btn"><h4><i  class="fa fa-trash"></i></h4></label>
                                            <input id="<?php echo $file; ?>" type="submit" name="id_img" value="<?php echo $file; ?>" class="hidden" />
									    </form>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mini-content">
                    <div class="title">
                        <h2>Thêm hình ảnh danh mục </h2>
                    </div>
                    <div class="main-mini-content">
                        <form action="upload_nsp.php" class="dropzone">
                            <div class="dz-default dz-message">
                                <span>Tải hình lên</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mini-content">
                    <div class="title">
                        <h2>Thêm hình ảnh khóa học</h2>
                    </div>
                    <div class="main-mini-content">
                        <form action="upload_sp.php" class="dropzone">
                            <div class="dz-default dz-message">
                                <span>Tải hình lên</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mini-content">
                    <div class="title">
                        <h2>Thêm hình ảnh giáo viên</h2>
                    </div>
                    <div class="main-mini-content">
                        <form action="upload_gv.php" class="dropzone">
                            <div class="dz-default dz-message">
                                <span>Tải hình lên</span>
                            </div>
                        </form>
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