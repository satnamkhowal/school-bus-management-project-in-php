<?php include "header.php"; ?>

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <?php include  "sidebar.php"; ?>

    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left"><i class="fa fa-magic"></i> User Interface</h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index-2.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">User Interface</a>
        </div>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container">

          <div class="row">

            <div class="col-md-6">

              <div class="widget wred">
                <div class="widget-head">
                  <div class="pull-left">UI Elements</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">
                    
                    <h5>Button Group</h5>
                    <div class="btn-group">
                      <button class="btn btn-danger">Left</button>
                      <button class="btn btn-success">Center</button>
                      <button class="btn btn-primary">Right</button>
                    </div>
                    <hr />

					<h5>Toggle Button</h5>
					<div class="sw-lblue">
						<input type="checkbox" class="toggleBtn" checked />
					</div>
					<div class="sw-red">
						<input type="checkbox" class="toggleBtn" checked />
					</div>
					<div class="sw-green">
						<input type="checkbox" class="toggleBtn" checked />
					</div>
					<div class="sw-blue">
						<input type="checkbox" class="toggleBtn" checked />
					</div>
					<div class="sw-orange">
						<input type="checkbox" class="toggleBtn" checked />
					</div>
					<div>
						<input type="checkbox" class="toggleBtn" checked />
					</div>
					<hr />                                  

                    <h5>Button Dropdown</h5>
                    <div class="btn-group">
                      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <hr />

                    <h5>Pagination</h5>
                    
                      <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    
                    <hr />

                    <h5>Labels</h5>
                    <span class="label label-danger">Default</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-default">Important</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-primary">Success</span>
                    <hr />

                    <h5>Badges</h5>
                    <span class="label label-danger">1</span>
                    <span class="label label-success">2</span>
                    <span class="label label-warning">3</span>
                    <span class="label label-info">4</span>
                    <span class="label label-default">5</span>
                    <span class="label label-primary">6</span>
                    <hr />

                    <h5>Alerts</h5>
                    <div class="alert alert-warning">
                      Oh snap! Change a few things up and try submitting again.
                    </div>
                    <div class="alert alert-success">
                      Well done! You successfully read this important alert message.
                    </div>
                    <div class="alert alert-info">
                      Heads up! This alert needs your attention, but it's not super important.
                    </div>                                        
                    <hr />


                    <h5>Modal</h5>
                    <!-- Button to trigger modal -->
                    <a href="#myModal" class="btn btn-info" data-toggle="modal">Launch demo modal</a>
                     
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        <p>One fine body…</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
					</div>
					</div>
                    <hr />


                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>  

            </div>
            <div class="col-md-6">

              <div class="widget wviolet">
                <div class="widget-head">
                  <div class="pull-left">UI Elements</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">

                    <h5>Horizontal Slider</h5>

                    <div id="master4" class="slider-yellow"></div>
                    <div id="master1" class="slider-red"></div>
                    <div id="master3" class="slider-green"></div>
                    <div id="master5" class="slider-orange"></div>
                    <div id="master2" class="slider-blue"></div>
                    <div id="master6" class="slider-violet"></div>
                     
                    <hr />

                    <h5>Progressbar</h5>

                   <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							<span class="sr-only">80% Complete</span>
						  </div>
					   </div>
                    <hr />

                    <h5>Progressbar Animated</h5>

                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-warning"  data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>
                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-info"  data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>
                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-danger"  data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>
                     <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-success" data-percentage="100">
							<span class="sr-only">100% Complete</span>
						  </div>
					  </div>

                    <hr />

                    <h5>Vertical Slider</h5>

                    <div id="eq">
                        <span class="slider-red">88</span>
                        <span class="slider-blue">77</span>
                        <span class="slider-green">55</span>
                        <span class="slider-yellow">33</span>
                        <span class="slider-orange">40</span>
                        <span class="slider-violet">45</span>
                        <div class="clearfix"></div>
                    </div>

					<hr />

					<!-- Date Picker -->
					<h4>Date Picker</h4>
					 <div id="datetimepicker1" class="input-append input-group dtpicker">
						<input data-format="yyyy-MM-dd" type="text" class="form-control">
						<span class="input-group-addon add-on">
							<i data-time-icon="fa fa-times" data-date-icon="fa fa-calendar"></i>
						</span>
					</div>
					<hr />
					<!-- Heading -->
					<h4>Time Picker</h4>
					<!-- Time Picker -->
					<div id="datetimepicker2" class="input-append input-group dtpicker">
						<input data-format="hh:mm:ss" class="form-control" type="text">
						<span class="input-group-addon add-on">
							<i data-time-icon="fa fa-clock-o" data-date-icon="fa fa-calendar"></i>
						</span>
					</div>

                    <hr />

                    <h5>Star Rating</h5>

                    <div class="rateit" data-rateit-resetable="false"></div>
                    <hr />

                    <h5>Tabs</h5>
                    <ul id="myTab" class="nav nav-tabs">
                      <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                      <li><a href="#profile" data-toggle="tab">Profile</a></li>
                      <li><a href="#cont" data-toggle="tab">Content</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                      </div>
                      <div class="tab-pane fade" id="profile">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                      </div>
                      <div class="tab-pane fade" id="cont">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
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

</body>
</html>