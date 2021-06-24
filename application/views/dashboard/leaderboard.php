!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Institute Leaderboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
             
            <ol class="breadcrumb float-sm-right">
                <li><a href="#"><i class="fas fa-lg fa-arrow-circle-left"></i></a>&nbsp;&nbsp; </li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Institute Leaderboard</li>
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

        
   
       <div class="row"><div class="col-lg-9">
                <form class="form-horizontal">
                     
                  <div class="form-group row">
                      
                      <label class="col-sm-1 col-form-label">Batch:</label>
                    <div class="col-sm-4">
                        <select id="batchfilter3" class="form-control">
                        <option>Select</option>    
                        <option>Batch 1</option>
                        <option>Batch 2</option>
                        <option>Batch 3</option>  
                        </select>
                    </div> 
                      
                    <label class="col-sm-1 col-form-label">NSTI:</label>
                    <div class="col-sm-4">
                        <select id="centrefilter3"  class="form-control">
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
                   
                   
                        <br>
                                
              
 <div class="row"><div class="col-lg-12">
     <div style="overflow-x: scroll; padding-bottom: 30px;">
     
<table id="tbl_for_leaderboard" width="100%" border="1" cellspacing="0" cellpadding="5" class="tablelist" style="border-collapse: collapse;">
    <thead>
   <tr>
    <th width="5%">S.No </th>
    <th width="20%">Name</th>
    <th width="10%">M1 Theory</th>
    <th width="10%">M1 Practical </th>
    <th width="10%">M2 Theory</th>
    <th width="10%">M2 Practical </th>
    <th width="10%">M3 Theory</th>
    <th width="10%">M3 Practical </th>
    <th width="10%">M4 Theory</th>
    <th width="10%">M4 Practical </th>
    <th width="10%">M5 Theory</th>
    <th width="10%">M5 Practical </th>
    <th width="10%">EM1 Theory</th>
    <th width="10%">EM1 Practical  </th>
    <th width="10%">EM2 Theory</th>
    <th width="10%">EM2 Practical  </th>
    <th width="10%">Employability Skills</th>
    <!--<th width="10%">Total</th>   -->   
  </tr>
    </thead>
        <?php $count=1?>
        <tbody>
        <?php foreach($tbl_students as $student){?>
  <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $student['name'];?></td>
    <td><?php echo $student['m1t'];?></td>
    <td><?php echo $student['m1p'];?></td>
    <td><?php echo $student['m2t'];?></td>
    <td><?php echo $student['m2p'];?></td>
    <td><?php echo $student['m3t'];?></td>
    <td><?php echo $student['m3p'];?></td>
    <td><?php echo $student['m4t'];?></td>
    <td><?php echo $student['m4p'];?></td>
    <td><?php echo $student['m5t'];?></td>
    <td><?php echo $student['m5p'];?></td>
    <td><?php echo $student['em1t'];?></td>
    <td><?php echo $student['em1p'];?></td>
    <td><?php echo $student['em2t'];?></td>
    <td><?php echo $student['em2p'];?></td> 
    <td><?php echo $student['es'];?></td>
    <!--<td><?php //echo $student['total'];?></td> -->     

  </tr>
    <?php 
        $count++;
      }?>
    </tbody>

</table>
   </div>                  
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
