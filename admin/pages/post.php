<?php include "header.php"; ?>

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <?php include "sidebar.php"; ?>

    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">

      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-home"></i> Post</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index-2.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Dashboard</a>
        </div>

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->


	    <!-- Matter -->

	    <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-8">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Make Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
					<form class="form">
						<input type="text" class="form-control col-lg-8" placeholder="Enter Title">
						<br /><br />
						
						<input type="file" >
						
						<div class="text-area">
							<!-- Add the "cleditor" to textarea to add CLeditor -->
							<textarea class="cleditor" name="input"></textarea>

						</div>
						
						<div class="clearfix"></div>
					
					</form>

                  </div>
                  <div class="widget-foot">
                    Word Count : 205
                  </div>
                </div>
              </div>   
              
            </div>

            <!-- post sidebar -->

            <div class="col-md-4">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Details</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">

                    <form class="form">

                      <h6><strong>Category</strong></h6>
						<div class="checkbox">
							<label>
							  <input type="checkbox"> Medicine
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"> Health
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"> Allopathy
							</label>
						</div>						
	
					  <hr />
						
                      <h6><strong>Tags</strong></h6>
                      <input class="form-control col-lg-12" type="text" placeholder="Tags">
						
						<div class="clearfix"></div>
						
					<div class="buttons">
                      <button class="btn btn-sm btn-default">Save Draft</button> 
                      <button class="btn btn-sm btn-info">Publish</button>
                      <button class="btn btn-sm btn-danger">Trash</button>
					</div>

                    </form>

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  

            </div>

          </div>
        </div>
		  </div>

		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<?php include "footer.php"; ?>

<!-- JS -->
<script src="js/jquery.js"></script> <!-- jQuery -->
<script src="js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="js/jquery-ui.min.js"></script> <!-- jQuery UI -->
<script src="js/moment.min.js"></script> <!-- Moment js for full calendar -->
<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="js/jquery.slimscroll.min.js"></script> <!-- jQuery Slim Scroll -->
<script src="js/jquery.dataTables.min.js"></script> <!-- Data tables -->

<!-- jQuery Flot -->
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="js/sparklines.js"></script> <!-- Sparklines -->
<script src="js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="js/jquery.onoff.min.js"></script> <!-- Bootstrap Toggle -->
<script src="js/filter.js"></script> <!-- Filter for support page -->
<script src="js/custom.js"></script> <!-- Custom codes -->
<script src="js/charts.js"></script> <!-- Charts & Graphs -->

</body>
</html>