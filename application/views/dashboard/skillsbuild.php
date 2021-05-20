<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">SkillsBuild Performance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
             
            <ol class="breadcrumb float-sm-right">
                <li><a href="#"><i class="fas fa-lg fa-arrow-circle-left"></i></a>&nbsp;&nbsp; </li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SkillsBuild Performance</li>
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

         
 <div class="row"><div class="col-lg-12">

     
        
                    <!--Tab start-->
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Institute View </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Student View</a>
              </li>             
            </ul>
                    
            <div class="tab-content" id="custom-content-below-tabContent">
                <!--tab 1 content body start-->
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                 
                  <br>
                
             
     
                  <div class="row"><div class="col-lg-9">
                <form class="form-horizontal">
                     
                  <div class="form-group row">
                      
                      <label class="col-sm-1 col-form-label">Batch:</label>
                    <div class="col-sm-4">
                        <select id="batchfilter1"  class="form-control">
                        <option>Select</option>    
                        <option>Batch 1</option>
                        <option>Batch 2</option>
                        <option>Batch 3</option>  
                        </select>
                    </div> 
                      
                    <label class="col-sm-1 col-form-label">NSTI:</label>
                    <div class="col-sm-4">
                        <select id="centrefilter1" class="form-control">
                        <option>Select</option>   
                        <option>NSTI Noida</option>
                        <option>NSTI Dehradun</option>
                         <option>NSTI Indore</option>
                         <option>NSTI Mumbai</option>   
                        </select>
                    </div>
                 
                  </div>             
              </form>
                  </div></div>
                   
             
                  <div class="row"><div class="col-lg-12">
                   
                                                  
<table id="tbl_for_centre" width="100%" border="1" cellspacing="0" cellpadding="5" style="border-collapse:collapse;" class="tablelist">
    <thead>
   <tr>
    <th width="10%">S.No </th>
    <th width="30%">NSTI Name </th>
    <th width="20%">Students</th>
    <th width="20%">Course Completions</th>
    <th width="20%">Learning Hours</th>     
  </tr>
    </thead>
        <tbody>
        <?php $count=1; ?>
        <?php foreach($centre_wise as $d){?>
  <tr>
    <td><?php echo $count; ?></td>
    <td><?php echo $d['centre']; ?></td>
    <td><?php echo $d['students']; ?></td>
    <td><?php echo $d['courses']; ?></td>
    <td><?php echo $d['duration']; ?></td>  
  </tr>

  <?php $count++;
   }
  ?> 
    </tbody>
</table>
      
                      
                      </div></div>
                   
              
                  
                  
              </div>
                 <!--tab 1 content body end-->
                
                 <!--tab 2 content body start-->
              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                 
            
               <br>
                  
          
     
                  <div class="row"><div class="col-lg-9">
                <form class="form-horizontal">
                     
                  <div class="form-group row">
                      
                      <label class="col-sm-1 col-form-label">Batch:</label>
                    <div class="col-sm-4">
                        <select id="batchfilter2"  class="form-control">
                        <option>Select</option>    
                        <option>Batch 1</option>
                        <option>Batch 2</option>
                        <option>Batch 3</option>  
                        </select>
                    </div> 
                      
                    <label class="col-sm-1 col-form-label">NSTI:</label>
                    <div class="col-sm-4">
                        <select  id="centrefilter2" class="form-control">
                        <option>Select</option>    
                        <option>NSTI Noida</option>
                        <option>NSTI Dehradun</option>
                         <option>NSTI Indore</option>
                         <option>NSTI Mumbai</option>   
                        </select>
                    </div>
                 
                  </div>             
              </form>
                  </div></div>
                   
                           
                  
                  
          <div class="row">
                 <div class="col-lg-12">  
            
                               
                                                  
<table id="tbl_for_student" width="100%" border="1" cellspacing="0" cellpadding="5" style="border-collapse:collapse;" class="tablelist">
    <thead>
   <tr>
    <th width="10%">S.No </th>
    <th width="30%">Students Name </th>
    <th width="20%">NSTI Name</th>
    <th width="20%">Courses</th>
    <th width="20%">Learning Hours</th>     
  </tr>
    </thead>
        <tbody>
        <?php $count=1;?>

        <?php foreach($student_wise as $s){?>
  <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $s['name'];?></td>
    <td><?php echo $s['centre'];?></td>
    <td><?php echo $s['courses'];?></td>
    <td><?php echo $s['duration'];?></td>  
  </tr>
  <?php 
        $count++;
        }
  ?>
      
    </tbody>
</table>
      
            
                     
              </div>
              </div>
            
            
             
              
              
               
                  
                  
              </div>   
                 <!--tab 2 content body end-->
            </div>
            <!--Tab end-->
           
             
     
                      </div></div>
              
      
           
         </div>
              </div>
           
          </div>
          <!-- /.col-md-6 -->
          
            
        </div>
       
       
     <br><br>  
          </div>
          <!-- /.col-md-6 -->
          
            
        </div>
        <!-- /.row -->
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
  <!-- /.control-sidebar -->

<script>
    $(document).ready(function() {
        $('#MyTable').DataTable({
            responsive: true
        });
    });
</script> 
