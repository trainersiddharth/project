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
              <li class="breadcrumb-item"><a href="#">View Blog List</a></li>
              <li class="breadcrumb-item active"><?php echo $blogheading ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      
    <!--Main content-->
      <div class="content">
      <div class="container-fluid">
          <div class="row"><div class="col-lg-12">
        <div class="card card-default"><div class="card-header">
              
  <div class="row"><div class="col-lg-12"> 
      <h3 class="text-primary"><?php echo $blogheading ?></h3>
      <i class="text-info"><?php echo $createddate; ?></i>
 </div></div>
            
    <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8 col-xs-12 mt-2">      
       
       <!--slider start-->
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php 
  for($i=0;$i<count($images);$i++){ 
  if(!empty($images[$i])){
  ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="<?php echo ($i==0)?'active':'';?>"></li>
  <?php }
  }
  ?>
   

  </ol>
  <div class="carousel-inner">
<?php 
   for($i=0;$i<count($images);$i++){ 
    if(!empty($images[$i])){
	?>
    <div class="carousel-item <?php echo ($i==0)?'active':'';?>">
      <img class="d-block w-100" src="<?php echo $images[$i];?>" >
    </div>
 <?php
    }
 }
 ?>   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
        <!--slider end-->
        </div></div> 
          
<div class="row"><div class="col-lg-12 mt-3">
<p><?php echo $blogcontent; ?></p>
</div></div>  
            
            
            
      </div></div>    
      </div></div>  
          
      </div>
      <!-- /.container-fluid -->
    </div>
      



</div>