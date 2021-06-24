




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

  <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          
       <?php 
      
	foreach ($blogdata as $row) {
		
		 $image='uploads/'.$row->imageurl;
		$src=base_url($image);
		?>	   
         <!--blog row start-->
          
        <div class="row">
          <div class="col-lg-12">      
<div class="card card-default">              
          <div class="card-header"> 

              <!--blog item start-->
 <div class="row">
     <div class="col-lg-5">
             <img src="<?php echo $src; ?>" class="img-responsive">
     </div>
   <div class="col-lg-7">
             <h3 class="text-primary"><?php echo $row->blogheading; ?></h3>
       <i class="text-info"><?php echo $row->createddate; ?></i>
       <p><?php echo $row->blogsummary; ?></p>
       <a href="<?php echo base_url("Blog_Controller/readblog/$row->blogid"); ?>" target="_blank" class="btn btn-sm btn-primary">Read more</a>
     </div>   
     
              </div>       
      <!--blog  item end-->  
      
         </div>
              </div>
           
          </div>
          <!-- /.col-md-6 -->
        
        </div>
        <!-- blog row end -->
          
	<?php }?>
          
          
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

  