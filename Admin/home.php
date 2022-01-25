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
        <div class="row">
            <div class="col-md-12 col-lg-4 widget_progress_section margin_bottom_30">
                <div class="white_shd full">
                    <div class="widget_progress_bar">
                        <p class="progress_no">Tổng số thể loại: <?php get_soluong_danhmuc(); ?></p>
                        <div class="progress_bar">
                            <!-- Skill Bars -->
                            <span class="skill" style="width:73%;">Thể loại bán chạy: Ngoại ngữ </span><span class="info_valume">73%</span></span>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 widget_progress_section margin_bottom_30">
                <div class="white_shd full red_color">
                    <div class="widget_progress_bar">
                        <p class="progress_no">Tổng số khóa học: <?php get_soluong_sanpham_all(); ?></p>
                        <div class="progress_bar">
                            <!-- Skill Bars -->
                            <span class="skill" style="width:90%;"><?php get_soluong_sanpham_da_ban(); ?> khóa học đã bán
                                <span class="info_valume">
                                    <?php
                                    echo "alo";
                                    ?>
                                    %
                                </span>
                            </span>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 widget_progress_section margin_bottom_30">
                <div class="white_shd full">
                    <div class="widget_progress_bar">
                        <p class="progress_no">Tổng số giáo viên: <?php get_soluong_gv(); ?></p>
                        <div class="progress_bar">
                            <!-- Skill Bars -->
                            <span class="skill" style="width:100%;">Nổi bật: 4 <span class="info_valume">100%</span></span>
                            <div class="progress skill-bar ">
                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row column4 graph">
            <div class="col-md-7">
                <div class="white_shd full ">
                    <div class="full graph_head" style="background-color: #2196f3; overflow: hidden; border-radius: 3px; color: white ;">
                        <div class="heading1 margin_0">
                            <h2>Thống kê theo danh mục</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên danh mục</th>
                                        <th>Hình ảnh</th>
                                        <th>Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $category) : ?>
                                        <tr>
                                            <td>
                                                <a href="?action=ql_sp&category_id=<?php echo $category['id']; ?>&hangsx=0"><?php echo $category['name']; ?></a>
                                            </td>
                                            <td>
                                                <img style="width:100px; height: 70px;" src="../images/<?php echo $category['ctg_img']; ?>">
                                            </td>
                                            <td>
                                                <p></p><?php get_soluong_sanpham($category['id']); ?> khóa học
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Thống kê khóa học</h2>
                        </div>
                    </div>
                    <div class="map_section padding_infor_info">
                        <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Danh mục khóa học', 'Hours per Day'],
                                    <?php foreach ($categories1 as $category) : ?>
                                        ['<?php echo $category['name']; ?>', <?php get_soluong_sanpham($category['id']); ?>],
                                    <?php endforeach; ?>
                                ]);

                                // Optional; add a title and set the width and height of the chart
                                var options = {
                                    'title': 'Biểu đồ',
                                    'width': 600,
                                    'height': 400
                                };

                                // Display the chart inside the <div> element with id="piechart"
                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                chart.draw(data, options);
                            }
                        </script>
                        <div id="piechart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="dash_blog margin_bottom_30">
                    <div class="dash_blog_inner">
                        <div class="dash_head">
                            <h3><span><i class="fa fa-user"></i> Người dùng</span></h3>
                        </div>
                        <div class="table_section padding_infor_info">
                            <div class="table-responsive-sm">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cấp độ</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="">Quản trị viên</a></td>
                                            <td><?php get_soluong_user('2'); ?> thành viên</td>
                                        </tr>
                                        <tr>
                                            <td>Người dùng</td>
                                            <td><?php get_soluong_user('1'); ?> thành viên</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="full graph_head">
                                <div class="heading1 margin_0">
                                    <h2>Tỷ lệ %</h2>
                                </div>
                            </div>
                            <div class="full progress_bar_inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="progress_bar">
                                            <!-- Skill Bars -->
                                            <span class="skill" style="width:73%;">Quản trị viên <span class="info_valume">73%</span></span>
                                            <div class="progress skill-bar ">
                                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                                                </div>
                                            </div>
                                            <span class="skill" style="width:62%;">Khách hàng <span class="info_valume">62%</span></span>
                                            <div class="progress skill-bar">
                                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end graph -->
        </div>
    </div>
    <!-- end dashboard inner -->
</div>
</div>
</div>
<?php include 'view/footer_admin.php' ?>
</body>

</html>