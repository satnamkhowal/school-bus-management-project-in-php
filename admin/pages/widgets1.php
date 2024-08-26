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
        <h2 class="pull-left"><i class="fa fa-list-alt"></i> Widgets</h2>

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

            <!-- Chats widget -->
            <div class="col-md-4">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Chats</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
				  <!-- Below class "scroll-chat" will add nice scroll bar. It uses Slim Scroll jQuery plugin. Check custom.js for the code -->
                  <div class="padd scroll-chat">
                    
                    <ul class="chats">

                      <!-- Chat by us. Use the class "by-me". -->
                      <li class="by-me">
                        <!-- Use the class "pull-left" in avatar -->
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In meta area, first include "name" and then "time" -->
                          <div class="chat-meta">Ashok <span class="pull-right">3 hours ago</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li> 

                      <!-- Chat by other. Use the class "by-other". -->
                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta">3 hours ago <span class="pull-right">Ravi</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>   

                      <li class="by-me">
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <div class="chat-meta">Ashok <span class="pull-right">4 hours ago</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>                                                              

                    </ul>

                  </div>
                  <!-- Widget footer -->
                  <div class="widget-foot">
                      
					<div class="input-group">
					  <input type="text" class="form-control">
					  <span class="input-group-btn">
						<button class="btn btn-default" type="button">Send</button>
					  </span>
					</div>


                  </div>
                </div>


              </div> 
            </div>

            <!-- Recent posts widget -->
            <div class="col-md-4">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Recent Posts</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">
                    

                    <ul class="recent">


                      <li>
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </li>



                      <li>
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </li>



                      <li>
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </li>                                        


                    </ul>


                  </div>
                  <!-- Widget footer -->
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

            <!-- Recent comments widget -->
            <div class="col-md-4">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Recent Comments</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">

                    <ul class="recent">


                      <li>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                          </div>

                          <button class="btn btn-xs btn-danger pull-right">Spam</button>

                          <div class="clearfix"></div>
                        </div>
                      </li>



                      <li>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                          </div>

                          <button class="btn btn-xs btn-danger pull-right">Spam</button>

                          <div class="clearfix"></div>
                        </div>
                      </li>



                      <li>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-xs btn-default"><i class="fa fa-check"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> </button>
                            <button class="btn btn-xs btn-default"><i class="fa fa-times"></i> </button>
                          </div>

                          <button class="btn btn-xs btn-danger pull-right">Spam</button>

                          <div class="clearfix"></div>
                        </div>
                      </li>                                        


                    </ul>

                  </div>
                  <!-- Widget footer -->
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


            <!-- Black widget -->
            <div class="col-md-4">
              <div class="widget wblack">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Black Widget</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">
                    <h4>This is Hero Unit</h4>
                    <p>Nullam justo nunc, dignissim at convallis posuere, sodales dignissim eu orci. Duis a risus sed dolor placerat semper quis in urna. Nullam justo nunc, dignissim at convallis posuere, dignissim sodales eu orci. Duis a risus sed dolor placerat semper quis in urna.</p>
                  </div>

                  <div class="widget-foot">
                  </div>
                </div>
              </div>
            </div>

            <!-- File Upload widget -->
            <div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">File Upload</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  <!-- File upload list starts -->
                  <ul class="file-upload">

                    <li>
                      <!-- Icon with file name -->
                      <strong><i class="fa fa-upload"></i> File_Name_Here.Mp3</strong>
                      <!-- Upload details -->
                      <div class="file-meta">3.3 of 5MB - 5 mins - 1MB/Sec</div>
                      <!-- Progress bar -->
                      <div class="progress progress-animated progress-striped active">
						  <div class="progress-bar progress-bar-success" data-percentage="100">
							<span class="sr-only">80% Complete</span>
						  </div>
					  </div>
                    </li>

                    <li>
                      <strong><i class="fa fa-check"></i> Second_File.Mp3</strong>
                      <div class="file-meta">5MB - 5 mins - Completed</div>
                    </li>

                    <li>
                      <strong><i class="fa fa-check"></i> Third_File_Here.Mp3</strong>
                      <div class="file-meta">5MB - 5 mins - Stopped</div>
                    </li>
                                                           
                  </ul>

                  <div class="widget-foot">
                    <button class="btn btn-default btn-xs pull-right">Clear All</button>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <!-- Server Status -->
            <div class="col-md-4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Server Status</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  
				  <div class="table-responsive">
					  <table class="table table-striped table-bordered table-hover">
						<tr>
						  <td>Domain</td>
						  <td>sitedomain.com</td>
						</tr> 
						<tr>
						  <td>IP Address</td>
						  <td>192.425.2.4</td>
						</tr> 
						<tr>
						  <td>Disk Space</td>
						  <td>600GB / 60000GB</td>
						</tr> 
						<tr>
						  <td>Bandwidth</td>
						  <td>1000GB / 2000GB</td>
						</tr> 
						<tr>
						  <td>PHP Version</td>
						  <td>5.1.1</td>
						</tr> 
						<tr>
						  <td>MySQL Databases</td>
						  <td>10</td>
						</tr>                                                                                                     
					  </table>
				  </div>

                  <div class="widget-foot">
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