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
    <?php $count=1?>
        <tbody>
        <?php foreach($tbl_students as $student){?>
  <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $student['Centre'];?></td>
    <td><?php echo $student['Batch-1'];?></td>
    <td><?php echo $student['Batch-2'];?></td>
    <td><?php echo $student['Batch-3'];?></td>
    <td><?php echo $student['poc_name'];?></td>
    <td><?php echo $student['trainer_name'];?></td>
    <td><?php echo $student['email'];?></td>  
  </tr>
    <?php 
        $count++;
      }?>
    </tbody>
</table>

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