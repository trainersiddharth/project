
<!--google chart start-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Batch', 'No of Students']

          <?php foreach($map1_dashboard as $m){
            
            echo ",['".$m["centre"]."',".$m["students"]."]";
          }
            
          ?>
          
          ]);

        var options = {
          width: '100%',
        height:300,
          chart: {
            title: '.',
            subtitle: ''
          },
          bars: 'vertical', // Required for Material Bar Charts.
          series: {
            0: { axis: 'distance' } // Bind series 0 to an axis named 'distance'.
            //1: { axis: 'brightness' }  Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              distance: {label: 'parsecs'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('batch1-chart'));
      chart.draw(data, options);
    };
    </script>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
             
            <ol class="breadcrumb float-sm-right">
                <li><a href="#"><i class="fas fa-lg fa-arrow-circle-left"></i></a>&nbsp;&nbsp; </li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">



        <div class="row">
            
          <div class="col-lg-12">      
    
          <div class="row">
            
          <div class="col-lg-12">      
           
<div class="card card-default">              
          <div class="card-header"> 

        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php
                      echo $dashboard_centres['id'];
                  ?>

                </h3>

                <p>Institutes </p>
              </div>
              <div class="icon">
               <i class="fas fa-university"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                   <?php
                      echo $dashboard_trainers;
                  ?>

                </h3>

                <p>Trainers</p>
              </div>
              <div class="icon">
               <i class="fas fa-chalkboard-teacher"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php
                      echo $dashboard_student;
                  ?>
                </h3>

                <p>Students</p>
              </div>
              <div class="icon">
               <i class="fas fa-user-graduate"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  
                  <?php
                      echo $dashboard_batch;
                  ?>
                </h3>

                <p>Batches</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
            
       
            
        </div>
          
           
         </div>
              </div>
           
          </div>
          <!-- /.col-md-6 -->
          
              </div>
        <!-- /.row -->



        <div class="row">   
  <div class="col-lg-12">    
      <div style="padding:10px !important; background:#ffffff; box-sizing: border-box;"> <div id="batch1-chart"></div></div>        
   </div>
   </div>
   </div>


      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
