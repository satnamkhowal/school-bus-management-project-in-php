<div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="open"><a href="home.php"><i class="fa fa-home"></i> Dashboard</a>
            <!-- Sub menu markup 
            <ul>
              <li><a href="#">Submenu #1</a></li>
              <li><a href="#">Submenu #2</a></li>
              <li><a href="#">Submenu #3</a></li>
            </ul>-->
          </li>
          <li class="has_sub">
			<a href="StudentZone.php"><i class="fa fa-tags fa-fw"></i>Student Zone<span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="AddStudent.php">Add Studens</a></li>
            </ul>
          </li>
          <li class="has_sub">
			<a href=""><i class="fa fa-tags fa-fw"></i>Root Zone<span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="AddRoot.php">Add Root</a></li>
              <li><a href="AddBusStand.php">Add Bus Stands</a></li>
              <li><a href="BusType.php">BusType</a></li>
            </ul>
          </li>
        </ul>
    </div>