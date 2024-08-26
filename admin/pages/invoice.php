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
        <h2 class="pull-left"><i class="fa fa-file-o"></i> Invoice</h2>

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
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Invoice</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd invoice">
                    
                    <div class="row">

                      <div class="col-md-4">
                        <h4><strong>MacBeath</strong></h4>
                        <p>
                          19/133, New New York Street<br>
                          Near Bus Stop, Right side <br>
                          Mexico, NY - 63442<br>
                          USA
                        </p>
                      </div>

                      <div class="col-md-4">
                        <h4><strong>MacMedia</strong></h4>
                        <p>
                          24/133, Mexico Street<br>
                          Near Airport, Right side <br>
                          Mexico, CA - 53432<br>
                          Mexico
                        </p>                        
                      </div>

                      <div class="col-md-4">
                        <h4><strong>Invoice</strong></h4>
                        <p>
                          <strong>Invoice No</strong> : 52322<br>
                          <strong>Date</strong> : 12/34/2012<br>
                          <strong>Account No</strong> : 4290293203
                        </p>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-12">
                        <hr />
						
						<div class="table-responsive">
							<table class="table table-striped table-hover table-bordered">
							  <thead>
								<tr>
								  <th>#</th>
								  <th>Name</th>
								  <th>Quantity</th>
								  <th>Unit Price</th>
								  <th>Tax</th>
								  <th>Total</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>1</td>
								  <td>Sony Xperia Pro X1242</td>
								  <td>5</td>
								  <td>$534</td>
								  <td>12.5%</td>
								  <td>$2424</td>
								</tr>     
								<tr>
								  <td>2</td>
								  <td>Samsung Galaxy Pro</td>
								  <td>2</td>
								  <td>$244</td>
								  <td>12.5%</td>
								  <td>$5342</td>
								</tr>  
								<tr>
								  <td>3</td>
								  <td>Apple iPhone 5G - Black</td>
								  <td>7</td>
								  <td>$434</td>
								  <td>12.5%</td>
								  <td>$34524</td>
								</tr>  
								<tr>
								  <td>4</td>
								  <td>Nokia Lumina Tipo - Windows Mobile</td>
								  <td>4</td>
								  <td>$754</td>
								  <td>12.5%</td>
								  <td>$8866</td>
								</tr>  
								<tr>
								  <td>5</td>
								  <td>Motorola Defy 29323</td>
								  <td>5</td>
								  <td>$644</td>
								  <td>12.5%</td>
								  <td>$88865</td>
								</tr>  
								<tr>
								  <td>6</td>
								  <td>Micromax Funbook - Android Tablet</td>
								  <td>9</td>
								  <td>$434</td>
								  <td>12.5%</td>
								  <td>$53535</td>
								</tr>                                                                                                                                                                
								<tr>  
								  <td></td>
								  <td></td>
								  <td></td>
								  <td></td>
								  <td><strong>Total</strong></td>
								  <td><strong>$2405</strong></td>
								</tr>
							  </tbody>
							</table>
						</div>
							
                      </div>

                    </div>

                  </div>
                  <div class="widget-foot">
					<div class="pull-right">
						<button class="btn btn-info btn-sm">Send Invoice</button> &nbsp; 
						<button class="btn btn-default btn-sm">Cancel</button>
					</div>
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