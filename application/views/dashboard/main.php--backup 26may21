


<!--google chart start-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Batch1', 'No of Students']

          <?php foreach($dashboard_map1 as $m){
            
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
    
   <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Batch2', 'No of Students']
          <?php foreach($dashboard_map2 as $m){
            
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

      var chart = new google.charts.Bar(document.getElementById('batch1-chart2'));
      chart.draw(data, options);
    };
    </script> 
    
   <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Batch3', 'No of Students']

          <?php foreach($dashboard_map3 as $m){
            
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

      var chart = new google.charts.Bar(document.getElementById('batch1-chart3'));
      chart.draw(data, options);
    };
    </script>  
    <!--google chart end-->


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
  
              
        <div class="row">
            
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>18</h3>

                <p>Graduates</p>
              </div>
              <div class="icon">
               <i class="fas fa-graduation-cap"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>365</h3>

                <p>Students in Training</p>
              </div>
              <div class="icon">
               <i class="fas fa-pencil-ruler"></i>
              </div>
              
            </div>
          </div>
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>365</h3>

                <p>Students Eligible for Internship</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-check"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
            
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>88</h3>

                <p> Internships</p>
              </div>
              <div class="icon">
               <i class="fas fa-industry"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>70</h3>

                <p>Eligible for Jobs</p>
              </div>
              <div class="icon">
               <i class="fas fa-user-cog"></i>
              </div>
              
            </div>
          </div>
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>18</h3>

                <p>Placements</p>
              </div>
              <div class="icon">
               <i class="fas fa-business-time"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->  
         
        </div>   
      
    </div>
           
          </div>
          <!-- /.col-md-6 -->
          
            
        </div>
       
          
          
        
       
     <br><br>  
          </div>
          <!-- /.col-md-6 -->
          
          <!--Graph chart start-->
          
         <div class="row">   
  <div class="col-lg-4">    
      <div style="padding:10px !important; background:#ffffff; box-sizing: border-box;"> <div id="batch1-chart"></div></div>        
   </div>
             
  <div class="col-lg-4">    
      <div style="padding:10px !important; background:#ffffff; box-sizing: border-box;"> <div id="batch1-chart2"></div></div>        
   </div>            
 <div class="col-lg-4">    
      <div style="padding:10px !important; background:#ffffff; box-sizing: border-box;"> <div id="batch1-chart3"></div></div>        
   </div>                 
          </div>
      <!--Graph chart end-->  
          <br><br>
          
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  
</div>
      <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
