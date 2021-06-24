<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Upload Student Details</h1>
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

      <?php

      if(!empty($this->session->flashdata('success'))){
        echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
      }

      ?>


      <?php

      if(!empty($this->session->flashdata('error'))){
        echo "<div class='alert alert-danger'>".$this->session->flashdata('error')."</div>";
      }

      ?>
                            
      
    <!--tab content start-->
        
        <form action="<?php echo base_url('Admin_Controller/importStudent')?>" method="post" enctype="multipart/form-data">
        
        
        <div class="panel panel-primary">
             <div class="panel-body">
                <div class="form-group">
                    <br>
                    <label class="control-label"><strong>
                  Select CSV
                    </strong>
                    </label><br>
                    <input type="file" name="csv_file" id="csv_file" required accept=".csv" />

                </div>
                         
                 <br>
                 

                <input class="btn btn-primary nextBtn pull-right" type="submit" value="Upload" name="submit"/>

                                <br>

                <a href="<?php echo base_url();?>formats/students-format.csv">Download Sample Format</a>
            </div>
        
    </form>

    
              
              
  </div>
                    
           
         </div>
              </div>
           
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

