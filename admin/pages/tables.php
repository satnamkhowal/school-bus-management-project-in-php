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
        <h2 class="pull-left"><i class="fa fa-table"></i> Tables</h2>

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

          <!-- Table -->

            <div class="row">

              <div class="col-md-12">

                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Location</th>
							  <th>Age</th>
							  <th>Education</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>1</td>
							  <td>Ashok</td>
							  <td>India</td>
							  <td>23</td>
							  <td>B.Tech</td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>Kumarasamy</td>
							  <td>USA</td>
							  <td>22</td>
							  <td>BE</td>
							</tr>
							<tr>
							  <td>3</td>
							  <td>Babura</td>
							  <td>UK</td>
							  <td>43</td>
							  <td>PhD</td>
							</tr>
							<tr>
							  <td>4</td>
							  <td>Ravi Kumar</td>
							  <td>China</td>
							  <td>73</td>
							  <td>PUC</td>
							</tr>
							<tr>
							  <td>5</td>
							  <td>Santhosh</td>
							  <td>Japan</td>
							  <td>43</td>
							  <td>M.Tech</td>
							</tr>                                                                        
						  </tbody>
						</table>
					</div>
					
                    <div class="widget-foot">

                      
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      
                      <div class="clearfix"></div> 

                    </div>

                  </div>
                </div>



                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Location</th>
							  <th>Date</th>
							  <th>Type</th>
							  <th>Status</th>
							  <th>Control</th>
							</tr>
						  </thead>
						  <tbody>

							<tr>
							  <td>1</td>
							  <td>Ravi Kumar</td>
							  <td>India</td>
							  <td>23/12/2012</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>
							  <td>

								  <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
							  
							  </td>
							</tr>


							<tr>
							  <td>2</td>
							  <td>Parneethi Chopra</td>
							  <td>USA</td>
							  <td>13/02/2012</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>
							  <td>

								  <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>

							  </td>
							</tr>

							<tr>
							  <td>3</td>
							  <td>Kumar Ragu</td>
							  <td>Japan</td>
							  <td>12/03/2012</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>
							  <td>

								<div class="btn-group">
								  <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
								</div>

							  </td>
							</tr>

							<tr>
							  <td>4</td>
							  <td>Vishnu Vardan</td>
							  <td>Bangkok</td>
							  <td>03/11/2012</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>
							  <td>

								<div class="btn-group">
								  <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
								</div>

							  </td>
							</tr>

							<tr>
							  <td>5</td>
							  <td>Anuksha Sharma</td>
							  <td>Singapore</td>
							  <td>13/32/2012</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>
							  <td>

								<div class="btn-group1">
								  <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
								  <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
								  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
								</div>

							  </td>
							</tr>                                                            

						  </tbody>
						</table>
					</div>

                    <div class="widget-foot">

                     
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                     
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>


              </div>

            </div>


            <div class="row">

              <div class="col-md-6">
                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Location</th>
							  <th>Type</th>
							  <th>Status</th>
							</tr>
						  </thead>
						  <tbody>

							<tr>
							  <td>1</td>
							  <td>Ravi Kumar</td>
							  <td>India</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>

							</tr>


							<tr>
							  <td>2</td>
							  <td>Parneethi Chopra</td>
							  <td>USA</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>

							</tr>

							<tr>
							  <td>3</td>
							  <td>Kumar Ragu</td>
							  <td>Japan</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>

							</tr>

							<tr>
							  <td>4</td>
							  <td>Vishnu Vardan</td>
							  <td>Bangkok</td>
							  <td>Paid</td>
							  <td><span class="label label-success">Active</span></td>

							</tr>

							<tr>
							  <td>5</td>
							  <td>Anuksha Sharma</td>
							  <td>Singapore</td>
							  <td>Free</td>
							  <td><span class="label label-danger">Banned</span></td>
		  
							</tr>                                                            

						  </tbody>
						</table>
					</div>

                    <div class="widget-foot">

                     
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                     
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>
              </div>

              <div class="col-md-6">

                <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Name</th>
							  <th>Location</th>
							  <th>Date</th>
							  <th>Type</th>
							</tr>
						  </thead>
						  <tbody>

							<tr>
							  <td>1</td>
							  <td>Ravi Kumar</td>
							  <td>India</td>
							  <td>23/12/2012</td>
							  <td>Paid</td>
							</tr>


							<tr>
							  <td>2</td>
							  <td>Parneethi Chopra</td>
							  <td>USA</td>
							  <td>13/02/2012</td>
							  <td>Free</td>
							</tr>

							<tr>
							  <td>3</td>
							  <td>Kumar Ragu</td>
							  <td>Japan</td>
							  <td>12/03/2012</td>
							  <td>Paid</td>
							</tr>

							<tr>
							  <td>4</td>
							  <td>Vishnu Vardan</td>
							  <td>Bangkok</td>
							  <td>03/11/2012</td>
							  <td>Paid</td>
							</tr>

							<tr>
							  <td>5</td>
							  <td>Anuksha Sharma</td>
							  <td>Singapore</td>
							  <td>13/32/2012</td>
							  <td>Free</td>
							</tr>                                                            

						  </tbody>
						</table>
					</div>

                    <div class="widget-foot">

                      
                        <ul class="pagination pagination-sm pull-right">
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      
                      <div class="clearfix"></div> 

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