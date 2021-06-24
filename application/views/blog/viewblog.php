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
        <div class="row">
            
          <div class="col-lg-12">      
           
<div class="card card-default">              
          <div class="card-header"> 

           
                                
              
 <div class="row"><div class="col-lg-12">
                                
<table width="100%" border="1" cellspacing="0" cellpadding="5" class="tablelist" style="border-collapse: collapse;"  id="MyTable">
    <thead>
   <tr>
    <th width="5%">S.No </th>
    <th width="40%">Title </th>
    <th width="23%">Text body</th>
    <th width="12%">Created on</th>
    <th width="10%"></th>     
  </tr>
    </thead>
        <tbody>
            
   <?php
	$i=1;
	if(!empty($blogdata)){
	foreach ($blogdata as $row)
{
	    $image='uploads/'.$row->imageurl;
		$src=base_url($image);
		$readmore='<a href='.base_url("Blog_Controller/readblog/$row->blogid").'>Read Blog</a>';
		$edit='<a href='.base_url("Blog_Controller/readblog/$row->blogid").' class="text-primary" title="View"><i class="far fa-eye"></i></a> &nbsp;<a href='.base_url("Blog_Controller/editblog/$row->blogid").' title="Edit"  class="text-success"><i class="far fa-edit"></i></a> &nbsp;
        <a href='.base_url("Blog_Controller/deleteblog/$row->blogid").' class="text-danger" title="Delete"><i class="far fa-trash-alt"></i></a>';
		
        echo "<tr><td>".$i++."</td>";
		//echo "<td>"."<img src=".$src." width=200px height=200px >"."</td>";
		echo "<td><a href='".base_url("Blog_Controller/readblog/$row->blogid")."'><b>".$row->blogheading."</b></a></td>";
        //echo "<td>".$row->blogtext."</td>";
        
        echo "<td>".$row->blogsummary."..."."</td>";
        echo "<td>".$row->createddate."</td>";
       // echo "<td>".$row->modifieddate."</td>";
        //echo "<td>".$row->status."</td></tr>";
        echo "<td>".$edit."</td></tr>";
       
		
}

	}
	?>
 
    </tbody>
</table>
                      
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
    <!-- /.content -->
    



</div>