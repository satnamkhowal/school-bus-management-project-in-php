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
	      <h2 class="pull-left"><i class="fa-building-o"></i>Add Route</h2>

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
                  <div class="pull-left">Add New Route</div>
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
                     <form class="form-horizontal" method="post" action="setting.php?admin2=addRoute" enctype="multipart/form-data" role="form">
                     <div class="form-group">
                                  <label class="col-lg-2 control-label">Vehicle type</label>
                                  <div class="col-lg-5">
                                    <select class="form-control" name="vehicle_type">
                                      <option selected="selected" >Select Vehicle</option>
                                    <?php 
										$select_bus_type=$dbFun->select_bus_type();
										while($arr=mysql_fetch_array($select_bus_type))
											
										//$companies=$dbfun->companies();
		
											// while($arr=mysql_fetch_array($companies))  
  {	
										?>
                                    <option value="<?php echo $arr['vehicle_type_name']; ?>"><?php echo $arr['vehicle_type_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                  </div>
                                </div>
                     <div class="form-group">
                                  <label class="col-lg-2 control-label">Vehicle Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="VehicleNumber" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                      <div class="form-group">
                                  <label class="col-lg-2 control-label">Driver Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="DriverName" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Conductor Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="ConductorName" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Driver Mob Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="driver_mob_number" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Conductor Mobile Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="conductor_mobile_number" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Route Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="RouteNumber" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                      <div class="form-group">
                                  <label class="col-lg-2 control-label">Route Map</label>
                                  <div class="col-lg-5">
                                    <input type="file" name="RouteMap" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Google Route Map Code</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="GMapCode" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Starting Bus Stand</label>
                                  <div class="col-lg-5">
                                   <select class="form-control" name="StratingPoint">
                                   <option selected>Select Starting Bus Stand</option>
                                   <?php 
										$sql="select * from bus_stands";
										$sql2=mysql_query($sql);
										while($arr=mysql_fetch_array($sql2))
										{
										?>
                                   <option value="<?php echo $arr['bus_stand_name']; ?>"><?php echo $arr['bus_stand_name']; ?></option>
                                   <?php } ?>
                                   </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Via Bus Stands</label>
                                  <div class="col-lg-2">
                                    <select multiple="" name="BusVia[]" class="form-control">
                                    <option selected >Select Route Bus Stands</option>
                                      <?php 
										$sql="select * from bus_stands";
										$sql2=mysql_query($sql);
										while($arr=mysql_fetch_array($sql2))
										{
										?>
                                   <option value="<?php echo $arr['bus_stand_name']; ?>"><?php echo $arr['bus_stand_name']; ?></option>
                                   <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <input type="submit" value="Add Bus" name="add_company" class="btn btn-sm btn-danger" />
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
						if($_REQUEST['update']=="update_vehicle_route")
						{
							$vehicle_route_id=$_REQUEST['vehicle_route_id'];
							$vehicle_route=mysql_query("SELECT * FROM `vehicle_route` WHERE vehicle_route_id=$vehicle_route_id");
							$vehicle_route_data=mysql_fetch_array($vehicle_route);
							/* $company_id= $_REQUEST['company_id'];
							$qr=$dbfun->select_company_id($company_id);
							$company=mysql_fetch_array($qr);
							//print_r($company);
							*/
							//print_r($arr);
							?>
                           
                            <div class="widget wgreen" id="demo">
                
                <div class="widget-head">
                  <div class="pull-left">Update Route Information</div>
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
                     <form class="form-horizontal" method="post" action="setting.php?admin2=UpdateRoute" enctype="multipart/form-data" role="form">
                      <input type="hidden" name="vehicle_route_id" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['vehicle_route_id']; ?>">
                     <div class="form-group">
                                  <label class="col-lg-2 control-label">Vehicle type</label>
                                  <div class="col-lg-5">
                                    <select class="form-control" name="vehicle_type">
                                      <option selected="selected" >Select Vehicle</option>
                                    <?php 
										$select_bus_type=$dbFun->select_bus_type();
										while($arr=mysql_fetch_array($select_bus_type))
											
										//$companies=$dbfun->companies();
		
											// while($arr=mysql_fetch_array($companies))  
  {	
										?>
                                    <option <?php if($vehicle_route_data['vehicle_type_name']==$arr['vehicle_type_name']) echo"selected"; ?> value="<?php echo $arr['vehicle_type_name']; ?>"><?php echo $arr['vehicle_type_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                  </div>
                                </div>
                     <div class="form-group">
                                  <label class="col-lg-2 control-label">Vehicle Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="VehicleNumber" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['vehicle_number'] ?>">
                                  </div>
                                </div>
                      <div class="form-group">
                                  <label class="col-lg-2 control-label">Driver Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="DriverName" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['driver_name'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Conductor Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="ConductorName" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['conductor_name'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Driver Mob Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="driver_mob_number" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['driver_mob_number'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Conductor Mobile Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="conductor_mobile_number" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['conductor_mobile_number'] ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Route Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="RouteNumber" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['route_number'] ?>">
                                  </div>
                                </div>
                      <div class="form-group">
                                  <label class="col-lg-2 control-label">Route Map</label>
                                  <div class="col-lg-5">
                                    <input type="file" name="RouteMap" class="form-control" placeholder="Input Box" value="<?php echo $vehicle_route_data['route_map'] ?>">
                                    <img src="<?php echo $vehicle_route_data['route_map'] ?>" height="50px" width="50px">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Starting Bus Stand</label>
                                  <div class="col-lg-5">
                                   <select class="form-control" name="StratingPoint">
                                   <option  selected>Select Starting Bus Stand</option>
                                   <?php 
										$sql="select * from bus_stands";
										$sql2=mysql_query($sql);
										while($arr=mysql_fetch_array($sql2))
										{
										?>
                                   <option <?php if($vehicle_route_data['starting_bus_stand']==$arr['bus_stand_name']) echo"selected"; ?> value="<?php echo $arr['bus_stand_name']; ?>"><?php echo $arr['bus_stand_name']; ?></option>
                                   <?php } ?>
                                   </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Via Bus Stands</label>
                                  <div class="col-lg-2">
                                    <select multiple="" name="BusVia[]" class="form-control">
                                    <option selected >Select Route Bus Stands</option>
                                      <?php 
										$sql="select * from bus_stands";
										$sql2=mysql_query($sql);
										while($arr=mysql_fetch_array($sql2))
										{
										?>
                                   <option <?php if($vehicle_route_data['via_bus_stand']==$arr['bus_stand_name']) echo"selected"; ?>  value="<?php echo $arr['bus_stand_name']; ?>"><?php echo $arr['bus_stand_name']; ?></option>
                                   <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <input type="submit" value="Add Bus" name="add_company" class="btn btn-sm btn-danger" />
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
                  <div class="pull-left">View Bus Route</div>
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
									<table cellpadding="0" cellspacing="0" border="0" id="data-table-1" class="mytable" width="150%">
										<thead>
											<tr>
												<th>#</th>
												<th>Route Number</th>
												<th>Vehicle type</th>
												<th>Vehicle Number</th>
                                                <th>Driver Name</th>
                                                <th>Conductor Name</th>
                                                <th>
Driver Mob Number
</th>
                                                <th>Conductor Mobile Number</th>
                                                <th>Route Map</th>
                                                <th>Starting Bus Stand</th>
                                                <th>Via Bus Stands</th>
                                                <th>Status</th>
												<th>control</th>
											</tr>
										</thead>
										<tbody>
                                        <?php 
											
											$vehicle_route=$dbFun->select_from_vehicle_route();
											while($arr=mysql_fetch_assoc($vehicle_route))
											//print_r($arr);
										//$companies=$dbfun->companies();
		
											// while($arr=mysql_fetch_array($companies))  
  {	
										?>
									             <tr>
												<td><?php echo $arr['vehicle_route_id']; ?></td>
                                                <td><?php echo $arr['route_number']; ?></td>
                                                <td><?php echo $arr['vehicle_type_name']; ?></td>
                                                <td><?php echo $arr['vehicle_number']; ?></td>
                                                <td><?php echo $arr['driver_name']; ?></td>
                                                <td><?php echo $arr['conductor_name']; ?></td>
                                                <td><?php echo $arr['driver_mob_number']; ?></td>
                                                <td><?php echo $arr['conductor_mobile_number']; ?></td>
                                                
                                               <td><?php echo $arr['route_map']; ?></td>
                                               <td><?php echo $arr['starting_bus_stand']; ?></td> 
                                               <td><?php echo $arr['via_bus_stand']; ?></td>
												<td> 
								<?php 
                                if($arr['status']==1)
                                {
                                ?>

                                                <a href="setting.php?vehicle_route_id=<?php echo $arr['vehicle_route_id']; ?>&admin2=route_status&status=0"><span class="label label-success">Active</span></a>
                                                
                                                <?php } else { ?>
                                               <a href="setting.php?vehicle_route_id=<?php echo $arr['vehicle_route_id']; ?>&admin2=route_status&status=1"> <span class="label label-danger">Banned</span></a></td>
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
								 <a href="AddRoot.php?vehicle_route_id=<?php echo $arr['vehicle_route_id']; ?>&update=update_vehicle_route"><button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button></a>
                                 
								  <a href="setting.php?company_id=<?php echo $arr['company_id']; ?>&admin=delete_companydata"><button class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </button></a></td>
                              
											</tr>                    
                                            <?php } ?>       	
                                        </tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Route Number</th>
												<th>Vehicle type</th>
												<th>Vehicle Number</th>
                                                <th>Driver Name</th>
                                                <th>Conductor Name</th>
                                                <th>
Driver Mob Number
</th>
                                                <th>Conductor Mobile Number</th>
                                                <th>Route Map</th>
                                                <th>Starting Bus Stand</th>
                                                <th>Via Bus Stands</th>
                                                <th>Status</th>
												<th>control</th>
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