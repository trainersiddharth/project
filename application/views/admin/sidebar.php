
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/logo.png" alt="" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>ADIT</b> Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2" id="myDIV">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     
          <li class="nav-item">
            <a href="<?php echo base_url('Admin_Controller/index')?>" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt"></i>
               <p>Dashboard</p>
            </a>
          </li>
      
            <li class="nav-item">
            <a href="<?php echo base_url('Admin_Controller/addCentre')?>" class="nav-link">
            <i class="nav-icon fas fa-university"></i>
              <p>Upload Institution</p>
            </a>
          </li>
            
           <li class="nav-item">
            <a href="<?php echo base_url('Admin_Controller/addBatch')?>" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Upload Batch Detail </p>
            </a>
          </li>
            
           <li class="nav-item">
            <a href="<?php echo base_url('Admin_Controller/addStudent')?>" class="nav-link">
            <i class="nav-icon fas fa-upload"></i>
              <p>Upload Student Detail</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('Admin_Controller/downloadData')?>" class="nav-link">
            <i class="nav-icon fas fa-download"></i>
              <p>Download Student Data</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('Admin_Controller/updateMarks')?>" class="nav-link">
            <i class="nav-icon fas fa-user-edit"></i>
              <p>Update Student Marks</p>
			 </a>
          </li>    
          <li class="nav-item">
            <a href="<?php echo base_url('Blog_Controller/createblog')?>" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Create Program Updates</p>
            </a>
          </li>        
		<li class="nav-item">
            <a href="<?php echo base_url('Blog_Controller/viewblog')?>" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
              <p>View Program Updates</p>
            </a>
          </li>      		  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>