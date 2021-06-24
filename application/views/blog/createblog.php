<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Program Updates</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
             
            <ol class="breadcrumb float-sm-right">
                <li><a href="#"><i class="fas fa-lg fa-arrow-circle-left"></i></a>&nbsp;&nbsp; </li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Program Updates</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      
      <!--Main content--->
	
     <div class="content">
      <div class="container-fluid">
        <div class="row">
            
          <div class="col-lg-12">      
           
<div class="card card-default">              
          <div class="card-header"> 

                   <h4>Add New</h4> 
             
                  <div class="row"><div class="col-lg-12">
                                     
             <?php echo $error;?>
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
                   
<form action="<?php base_url('Blog_Controller/do_upload'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                      
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title:</label>
                    <div class="col-sm-10">
                      <input type="text" name="blogheading" id="blogheading" class="form-control" required>
                    </div>
                  </div>
                    
                    
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Text Body:</label>
                    <div class="col-sm-10">
                      <textarea rows="9" name="blogtext" id="blogtext" class="form-control" required></textarea>
                    </div>
                  </div>  
                    
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Summary:</label>
                    <div class="col-sm-10">
                      <textarea rows="2" name="blogsummary" id="blogsummary" class="form-control" required></textarea>
                    </div>
                  </div>  
                    
                    
                   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Upload Images (Max 3 images):</label>
                    <div class="col-sm-4">
                       <input type="file" name="userfile[]" size="20" multiple="multiple" required>
                    </div>
                  </div>  
                    
                    
                   <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                     <button type="submit" value="upload" class="btn btn-primary">Submit</button>
                    </div>
                  </div>                 
              </form>
                  </div></div>
                   
              
         </div>
              </div>
           
          </div>
          <!-- /.col-md-6 -->
          
            
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div> 
      
      
      
</div>