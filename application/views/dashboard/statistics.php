<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Institution Statistics</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
             
            <ol class="breadcrumb float-sm-right">
                <li><a href="#"><i class="fas fa-lg fa-arrow-circle-left"></i></a>&nbsp;&nbsp; </li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Institution Statistics</li>
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
                                
<table width="100%" border="1" cellspacing="0" cellpadding="5" class="tablelist" style="border-collapse: collapse;"  id="MyTable">
    <thead>
   <tr>
    <th width="5%">S.No </th>
    <th width="20%">NSTI Name </th>
    <th width="10%">Students Batch 1</th>
    <th width="10%">Student Batch 2 </th>
    <th width="10%">Student batch 3 </th> 
    <th width="15%">POC Name </th>
    <th width="15%">Trainer Name</th> 
    <th width="15%">Trainer Email </th>     
  </tr>
    </thead>
        <tbody>
  <tr>
    <td>1.</td>
    <td>NSTI Dehradun</td>
    <td>452 </td>
    <td>681</td>
    <td>739</td>
    <td>Rajesh</td>
    <td>Aman</td>
    <td>aman@gmail.com</td>  
  </tr>
    
  <tr>
    <td>2.</td>
    <td>NSTI Noida</td>
    <td>628 </td>
    <td>398</td>
    <td>428</td>
    <td>Jon</td>
    <td>Deepak</td>
    <td>deepak@gmail.com</td>  
  </tr>
    
  <tr>
    <td>3.</td>
    <td>NSTI Indore</td>
    <td>385 </td>
    <td>826</td>
    <td>675</td>
    <td>Raghav</td>
    <td>Seema</td>
    <td>seema@gmail.com</td>  
  </tr>  
    </tbody>
</table>

<?php print_r($tbl_students); ?>
                      
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