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
	      <h2 class="pull-left"><i class="fa-building-o"></i> Companies</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
         
								  <button class="btn btn-primary" data-toggle="collapse" data-target="#demo"><i class="fa fa-plus"></i> </button>
								  <button class="btn btn-default"><i class="fa fa-refresh"></i> </button>
								  <button class="btn btn-danger"><i class="fa fa-trash-o"></i></i> </button>
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
                <div class="widget wgreen collapse" id="demo">
                
                <div class="widget-head">
                  <div class="pull-left">Add New Compnies</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">

                    <br />
                    <!-- Form starts.  -->
                     <form class="form-horizontal" method="post" action="setting.php?admin=addCompanies" enctype="multipart/form-data" role="form">
                              
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Company Logo</label>
                                  <div class="col-lg-5">
                                    <input type="file" name="company_logo" >
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Company Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="company_name" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                
                          
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <input type="submit" value="Add Company" name="add_company" class="btn btn-sm btn-danger" />
                                  </div>
                                </div>
                              </form>
                      <!-- form -->
                     
                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>
              
               <!-- update form -->   <?php 
					if(isset($_REQUEST['update']))
					{
						if($_REQUEST['update']=="update_companydata")
						{
							$company_id= $_REQUEST['company_id'];
							$qr=$dbfun->select_company_id($company_id);
							$company=mysql_fetch_array($qr);
							//print_r($company);
							?>
                           
                            <div class="widget wgreen" id="demo">
                
                <div class="widget-head">
                  <div class="pull-left">Update Company data</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">

                    <br />
                    <!-- Form starts.  -->
                     <form class="form-horizontal" method="post" action="setting.php?admin=updateCompanies" enctype="multipart/form-data" role="form">
                               <input type="hidden" name="company_id" value="<?php echo $company['company_id']; ?>" >
                          
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Company Logo</label>
                                  <div class="col-lg-5">
                                    <input type="file" value="<?php echo $company['company_logo']; ?>" name="company_logo" >
                                <img src="company_logo/<?php echo $company['company_logo']; ?>" height="50px" width="50px">  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Company Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="company_name" class="form-control" value="<?php echo $company['company_name']; ?>" placeholder="Input Box">
                                  </div>
                                </div>
                                
                          
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <input type="submit" value="Add Company" name="add_company" class="btn btn-sm btn-danger" />
                                  </div>
                                </div>
                              </form>
                      <!-- form -->
                     
                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>
							<?php
						}
					}
				?>
                      
                      <!-- update form -->
                      <script>
					  //Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
					  </script>
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Data Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
							<!-- Table Page -->
							<div class="page-tables">
								<!-- Table -->
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" border="0" id="data-table-1" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Company Name</th>
												<th>Company Logo</th>
												<th>Status</th>
												<th>control</th>
											</tr>
										</thead>
										<tbody>
                                        <?php 
										$companies=$dbfun->companies();
		
											 while($arr=mysql_fetch_array($companies))  
  {	
										?>
									             <tr>
												<td><?php echo $arr['company_id']; ?></td>
												<td><?php echo $arr['company_name']; ?></td>
												<td>
                                                <img src="company_logo/<?php echo $arr['company_logo']; ?>" height="40px" width="40px" />
                                                </td>
												<td> 
								<?php 
                                if($arr['status']==1)
                                {
                                ?>

                                                <a href="setting.php?company_id=<?php echo $arr['company_id']; ?>&admin=status&status=0"><span class="label label-success">Active</span></a>
                                                
                                                <?php } else { ?>
                                               <a href="setting.php?company_id=<?php echo $arr['company_id']; ?>&admin=status&status=1"> <span class="label label-danger">Banned</span></a></td>
                                                <?php } ?>
												<td>
                                                <div id="divdeps" style="display:none" title="">hello</div>
                                     <script>
									 $("#divdeps").dialog({
    autoOpen: false,
    show: 'slide',
    resizable: false,
    position: 'center',
    stack: true,
    height: 'auto',
    width: 'auto',
    modal: true
});
function div_show() {
//document.getElementById('abc').style.display = "block";
$("#divdeps").dialog('open');
}
									 
									 </script>         
								 <a href="Companies.php?company_id=<?php echo $arr['company_id']; ?>&update=update_companydata"><button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button></a>
                                 
								  <a href="setting.php?company_id=<?php echo $arr['company_id']; ?>&admin=delete_companydata"><button class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </button></a></td>
                              
											</tr>                    
                                            <?php } ?>       	
                                        </tbody>
										<tfoot>
											<tr>
												<th>Rendering engine</th>
												<th>Browser</th>
												<th>Platform(s)</th>
												<th>Engine version</th>
												<th>CSS grade</th>
											</tr>
										</tfoot>
									</table>
									<div class="clearfix"></div>
								</div>
								</div>
							</div>

					
                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
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
							  <th>Company Name</th>
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

<!-- Script for this page -->
<script type="text/javascript">
$(function () {

    /* Bar Chart starts */

    var d1 = [];
    for (var i = 0; i <= 20; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 20; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#ff6c24", "#ff2424"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});


/* Curve chart starts */

$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#curve-chart"),
           [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
               series: {
                   lines: { show: true, fill: true},
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, borderWidth:0 },
               yaxis: { min: -1.2, max: 1.2 },
               colors: ["#1eafed", "#1eafed"]
             });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #000',
            padding: '2px 8px',
            color: '#ccc',
            'background-color': '#000',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#curve-chart").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#enableTooltip:checked").length > 0) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    
                    showTooltip(item.pageX, item.pageY, 
                                item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
        }
    }); 

    $("#curve-chart").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });

});

/* Curve chart ends */
</script>

</body>
</html>