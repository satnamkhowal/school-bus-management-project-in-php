<?php include "header.php"; ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Student Zone</h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.php">Home</a></li>
                                <li class="active"><a href="#">profile</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section teacher-course section-padding">
                    <div class="container teacher-course-wrapper">
                        <div class="underline">Students</div>
                        <div class="course-table">
                            <div class="outer-container">
                                <div class="inner-container">
                                    <div class="table-header">
                                        <table class="edu-table-responsive">
                                            <thead>
                                            <tr class="heading-table">
                                                <th class="col-5">id</th>
                                                <th class="col-5">Student name</th>
                                                <th class="col-5">Student Photo</th>
                                                <th class="col-5">Home Bus Stand</th>
                                                <th class="col-5">Route Number</th>
                                                <th class="col-5">Route Map</th>
                                                <th class="col-5">More</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="table-body">
                                        <table class="edu-table-responsive table-hover">
                                            <tbody>
                                            <?php
											$student=$dbFun->selectFromstudents();
										while($st_arr=mysql_fetch_array($student))
										{
											?>
                                            <tr>
                                            <td><span><?php echo $st_arr['student_id']; ?></span></td>
                                            <td><span style="margin-left: -72px !important;"><?php echo $st_arr['st_name']; ?></span></td>
                                            <td><span style=""><img src="admin/<?php echo $st_arr['st_photo']; ?>" height="40px" width="50px"></span></td>
                                            <td style=""><span style=""><?php echo $st_arr['home_bus_stand_name']; ?></span></td>
                                            <td><span style=""> <?php echo $st_arr['route_number']; ?></span></td>
                                       <td><?php 
												$sql=mysql_query("SELECT * FROM `vehicle_route` WHERE route_number='".$st_arr['route_number']."'");
												$route_map=mysql_fetch_array($sql);
											?>
                                       
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="admin/<?php echo $route_map['route_map']; ?>" height="40px" width="50px">
											</td>
                                            <td><a href="ViewStudents.php?student_id=<?php echo $st_arr['student_id']; ?>">More</a></td>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<?php include_once("footer.php"); ?>
<!-- THEME SETTING-->
<!-- LOADING--><!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
}</script>
<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="assets/js/pages/profile-teacher.js"></script>
</body>

<!-- Mirrored from swlabs.co/edugate/profile-teacher.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2016 18:29:59 GMT -->
</html>