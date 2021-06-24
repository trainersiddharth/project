<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Download Student Details</h1>
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
      
    <!--tab content start-->
        
        <form action="<?php echo base_url('Admin_Controller/exportData')?>" method="post" enctype="multipart/form-data">
        
        
        <div class="panel panel-primary">
             <div class="panel-body">
                <div class="form-group">
                    <br>
                    <label class="control-label"><strong>
                  Select Batch
                    </strong>
                    </label>
                    <select name="batch">
                        <option value="1">Batch-1</option>
                        <option value="2">Batch-2</option>
                        <option value="3">Batch-3</option>
                    </select>
                </div>
                         
                <input class="btn btn-primary nextBtn pull-right" type="submit" value="Download" name="submit"/>
            </div>
        
    </form>
    </div>

    </div></div></div></div></div></div>