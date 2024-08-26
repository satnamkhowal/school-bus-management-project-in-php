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
	      <h2 class="pull-left"><i class="fa-building-o"></i> Student Zone</h2>

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
                  <div class="pull-left">Add New Students</div>
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
                     <form class="form-horizontal" method="post" action="setting.php?admin2=addStudent" enctype="multipart/form-data" role="form">
                              <div class="form-group">
                                  <label class="col-lg-2 control-label">Student Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="StName" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Father's Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="fName" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Mother's Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="mName" class="form-control" placeholder="Input Box">
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Student Photo</label>
                                  <div class="col-lg-5">
                                    <input type="file" name="StPhoto" >
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Home Bus Stand</label>
                                  <div class="col-lg-5">
                                    <select name="HomeBusStand">
                                    <option>select Home Bus Stand</option>
                                         <?php
										 $select_bus_stand=$dbFun->select_Bus_stand(); 
										/*$sql="select * from bus_stands";
										$sql2=mysql_query($sql);*/
										while($arr=mysql_fetch_array($select_bus_stand))
										{
										?>
                                    <option value="<?php echo $arr['bus_stand_name']; ?>"><?php echo $arr['bus_stand_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Route Number</label>
                                  <div class="col-lg-5">
                                    <select name="RouteNumber">
                                    <option> Select Route Number</option>
                                    <?php 
											
											$vehicle_route=$dbFun->select_from_vehicle_route();
											while($arr=mysql_fetch_assoc($vehicle_route))
											{
									?>
                                    <option value="<?php echo $arr['route_number']; ?>"><?php echo $arr['route_number']; ?>		</option>
                                    <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Student Mob number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="StPhoneNumber" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Parents Mob Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="PMobileNumber" class="form-control" placeholder="Input Box">
                                  </div>
                                </div>
                                 
                               <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <input type="submit" value="Add" name="AddStudent" class="btn btn-sm btn-danger" />
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
						if($_REQUEST['update']=="update_studentdata")
						{
							$student_id=$_REQUEST['student_id'];
							$qr=mysql_query("SELECT * FROM `students` WHERE student_id='$student_id'");
							$st_id=mysql_fetch_array($qr);
							//print_r($st_id);
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
                     <form class="form-horizontal" method="post" action="setting.php?admin2=upStudent" enctype="multipart/form-data" role="form">
                     <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                              <div class="form-group">
                                  <label class="col-lg-2 control-label">Student Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="StName" class="form-control" placeholder="Input Box" value="<?php echo $st_id['st_name']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Father's Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="fName" class="form-control" placeholder="Input Box" value="<?php echo $st_id['f_name']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Mother's Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="mName" class="form-control" placeholder="Input Box" value="<?php echo $st_id['m_name']; ?>">
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Student Photo</label>
                                  <div class="col-lg-5">
                                    <input type="file" name="StPhoto" value="<?php echo $st_id['st_photo']; ?>">
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Home Bus Stand</label>
                                  <div class="col-lg-5">
                                    <select name="HomeBusStand">
                                    <option>select Home Bus Stand</option>
                                         <?php
										 $select_bus_stand=$dbFun->select_Bus_stand(); 
										/*$sql="select * from bus_stands";
										$sql2=mysql_query($sql);*/
										while($arr=mysql_fetch_array($select_bus_stand))
										{
										?>
                                    <option <?php if($st_id['home_bus_stand_name']==$arr['bus_stand_name']) echo "selected";?> value="<?php echo $arr['bus_stand_name']; ?>"><?php echo $arr['bus_stand_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Route Number</label>
                                  <div class="col-lg-5">
                                    <select name="RouteNumber">
                                    <option> Select Route Number</option>
                                    <?php 
											
											$vehicle_route=$dbFun->select_from_vehicle_route();
											while($arr=mysql_fetch_assoc($vehicle_route))
											{
									?>
                                    <option <?php if($st_id['route_number']==$arr['route_number']) echo "selected"; ?> value="<?php echo $arr['route_number']; ?>"><?php echo $arr['route_number']; ?>		</option>
                                    <?php } ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Student Mob number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="StPhoneNumber" class="form-control" placeholder="Input Box" value="<?php echo $st_id['st_mobile']; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Parents Mob Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" name="PMobileNumber" class="form-control" placeholder="Input Box" value="<?php echo $st_id['p_mobile']; ?>">
                                  </div>
                                </div>
                                 
                               <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    <input type="submit" value="Add" name="AddStudent" class="btn btn-sm btn-danger" />
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
                  <div class="pull-left">View students</div>
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
									<table cellpadding="0" cellspacing="0" border="0" id="data-table-1" width="120%">
										<thead>
											<tr>
												<th>#</th>
												<th>Student Name</th>
												<th>Father's Name</th>
												<th>Mother's Name</th>
												<th>Photo</th>
                                                <th>Home Bus Stand
</th>
                                                <th>Route Number</th>
                                                <th>Student Mob number</th>
                                                <th>Parents Mob Number</th>
                                                <th>Control</th>
											</tr>
										</thead>
										<tbody>
                                        <?php 
										$student=$dbFun->selectFromstudents();
										while($st_arr=mysql_fetch_array($student))
										//print_r($st_arr);
										/*$companies=$dbfun->companies();
		
											 while($arr=mysql_fetch_array($companies)) */ 
  {	
										?>
									             <tr>
												<td><?php echo $st_arr['student_id']; ?></td>
												<td><?php echo $st_arr['st_name']; ?></td>
                                                <td><?php echo $st_arr['f_name']; ?></td>
                                                <td><?php echo $st_arr['m_name']; ?></td>
												<td>
                                                <img src="<?php echo $st_arr['st_photo']; ?>" height="40px" width="50px" />
                                                </td>
                                                <td><?php echo $st_arr['home_bus_stand_name']; ?></td>
                                                <td><?php echo $st_arr['route_number']; ?></td>
                                                <td><?php echo $st_arr['st_mobile']; ?></td>
                                                <td><?php echo $st_arr['p_mobile']; ?></td>
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
								 <a href="AddStudent.php?student_id=<?php echo $st_arr['student_id']; ?>&update=update_studentdata"><button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button></a>
                                 
								  <a href="setting.php?company_id=<?php echo $arr['company_id']; ?>&admin=delete_companydata"><button class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </button></a></td>
                              
											</tr>                    
                                            <?php } ?>       	
                                        </tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Student Name</th>
												<th>Father's Name</th>
												<th>Mother's Name</th>
												<th>Photo</th>
                                                <th>Home Bus Stand
</th>
                                                <th>Route Number</th>
                                                <th>Student Mob number</th>
                                                <th>Parents Mob Number</th>
                                                <th>Control</th>
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