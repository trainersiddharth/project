
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
            <a href="<?php echo base_url('Dashboard/index')?>" class="nav-link">
              <i class="nav-icon fa fa-tachometer-alt"></i>
               <p>Dashboard</p>
            </a>
          </li>
      
            <li class="nav-item">
            <a href="<?php echo base_url('Dashboard/instituteStatistics')?>" class="nav-link">
            <i class="nav-icon fas fa-university"></i>
              <p>Institution Statistics</p>
            </a>
          </li>
            
           <li class="nav-item">
            <a href="<?php echo base_url('Dashboard/instituteLeaderboard')?>" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Institute Leaderboard </p>
            </a>
          </li>
            
           <li class="nav-item">
            <a id="sidebar_skills" href="<?php echo base_url('Dashboard/skillsbuildPerformance')?>" class="nav-link" onclick="loadCen()">
            <i class="nav-icon fas fa-chart-line"></i>
              <p>SkillsBuild Performance </p>
            </a>
          </li>  
            
            
                                                             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>