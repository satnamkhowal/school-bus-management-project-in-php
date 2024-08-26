<?php include "header.php";
$student_id=$_REQUEST['student_id'];
$qr=mysql_query("SELECT * FROM `students` WHERE student_id='$student_id'");
$arr=mysql_fetch_array($qr);
//print_r($arr);
 ?>
<!-- WRAPPER-->
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section section-padding profile-teacher">
                    <div class="container">
                        <div class="profile-teacher-wrapper">
                            <div class="teacher-info">
                                <div class="staff-item2 customize">
                                    <div class="staff-item-wrapper">
                                        <div class="staff-info"><a href="#" class="staff-avatar"><img src="admin/<?php echo $arr['st_photo']; ?>" alt="" class="img-responsive"/></a><a href="#" class="staff-name"><?php echo $arr['st_name']; ?></a></div>
                                    </div>
                                 
                                </div>
                                <div class="teacher-des">
                                    <div class="title"><?php echo $arr['st_name']; ?></div>
                                    <div class="content"><p class="content-detail">
                                     <table class="table table-condensed">
    <thead>
      <tr>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Class</th>
        <th>Addres</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $arr['f_name']; ?></td>
        <td><?php echo $arr['m_name']; ?></td>
        <td><?php echo $arr['m_name']; ?></td>
        <td><?php echo $arr['m_name']; ?></td>
      </tr>
    </tbody>
  </table>
  					<hr>
                    <table class="table table-condensed">
    <thead>
      <tr>
        <th>Student Mobile  Number</th>
        <th>Parents Mobile number</th>
        <th>Bus Number</th>
        <th>Route Number</th>
      </tr>
    </thead>
    <tbody>
    <?php
		$route_id=mysql_query("SELECT * FROM `vehicle_route` WHERE 	route_number='".$arr['route_number']."'");
		$route_id_arr=mysql_fetch_array($route_id);
	 ?>
      <tr>
        <td><?php echo $arr['st_mobile']; ?></td>
        <td><?php echo $arr['p_mobile']; ?></td>
        <td><?php echo $route_id_arr['vehicle_number']; ?></td>
        <td><?php echo $arr['route_number']; ?></td>
      </tr>
    </tbody>
  </table>
  <hr>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Home Bus Stand</th>
        <th>Driver Contact Number</th>
        <th>Conductor Contact number</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $arr['home_bus_stand_name']; ?></td>
        <td><?php echo $route_id_arr['driver_mob_number']; ?></td>
        <td><?php echo $route_id_arr['conductor_mobile_number']; ?></td>
        <td></td>
      </tr>
    </tbody>
  </table>
                                    </p>

                                        <p class="content-detail">
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Route Map</h3>
             <?php echo $route_id_arr['g_map_code']; ?>
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
</html>