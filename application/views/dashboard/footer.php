   
  <!-- Main Footer -->
  <footer class="main-footer">
   Copyright &copy; 
      <script type="text/javascript">
  document.write(new Date().getFullYear());
</script>  
      <strong>Edunet Foundation</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block"> </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>


<script>

$(document).ready(function(){

load_Cen();
load_Bat();

function load_Cen()
{
  $.ajax({
    url:"<?php echo base_url('Dashboard/loadCentre'); ?>",
    method:"POST",
    success:function(data)
    {
      $('#centrefilter1').html(data);
      $('#centrefilter2').html(data);
      $('#centrefilter3').html(data);
    }
  })
}


function load_Bat()
{
  $.ajax({
    url:"<?php echo base_url('Dashboard/loadBatch'); ?>",
    method:"POST",
    success:function(data)
    {
      $('#batchfilter1').html(data);
      $('#batchfilter2').html(data);
      $('#batchfilter3').html(data);
    }
  })
}

});
</script>




<script type="text/javascript">

$(document).ready(function(){


      $('#centrefilter1').change(function(){

      x=$('#batchfilter1').val();
      y=$('#centrefilter1').val();

      $.ajax({
        url:"<?php echo base_url('Dashboard/getDataFilter_centre'); ?>",
        method:"POST",
        data:{
          batch_id:x,
          centre_id:y
        },
        success:function(data)
        {
          $('#tbl_for_centre').html(data);
        }
      })

      });


      $('#batchfilter1').change(function(){

      x=$('#batchfilter1').val();
      y=$('#centrefilter1').val();


      $.ajax({
      url:"<?php echo base_url('Dashboard/getDataFilter_centre'); ?>",
      method:"POST",
      data:{
        batch_id:x,
        centre_id:y
      },
      success:function(data)
      {
        $('#tbl_for_centre').html(data);
      }
      })

      });

      $('#centrefilter2').change(function(){

      x=$('#batchfilter2').val();
      y=$('#centrefilter2').val();

      $.ajax({
        url:"<?php echo base_url('Dashboard/getDataFilter_student'); ?>",
        method:"POST",
        data:{
          batch_id:x,
          centre_id:y
        },
        success:function(data)
        {
          $('#tbl_for_student').html(data);
        }
      })

      });


      $('#batchfilter2').change(function(){

      x=$('#batchfilter2').val();
      y=$('#centrefilter2').val();


      $.ajax({
      url:"<?php echo base_url('Dashboard/getDataFilter_student'); ?>",
      method:"POST",
      data:{
        batch_id:x,
        centre_id:y
      },
      success:function(data)
      {
        $('#tbl_for_student').html(data);
      }
      })

      });


      // 3rd 

      $('#centrefilter3').change(function(){

      x=$('#batchfilter3').val();
      y=$('#centrefilter3').val();

      $.ajax({
        url:"<?php echo base_url('Dashboard/getDataFilter_leaderboard'); ?>",
        method:"POST",
        data:{
          batch_id:x,
          centre_id:y
        },
        success:function(data)
        {
          $('#tbl_for_leaderboard').html(data);
        }
      })

      });


      $('#batchfilter3').change(function(){

      x=$('#batchfilter3').val();
      y=$('#centrefilter3').val();


      $.ajax({
      url:"<?php echo base_url('Dashboard/getDataFilter_leaderboard'); ?>",
      method:"POST",
      data:{
        batch_id:x,
        centre_id:y
      },
      success:function(data)
      {
        $('#tbl_for_leaderboard').html(data);
      }
      })

      });




});

</script>


<!-- Bootstrap -->
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url();?>dist/js/adminlte.js"></script>

 <!-- jQuery Knob -->
<script src="<?php echo base_url();?>plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url();?>plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url();?>dist/js/demo.js"></script>
<script src="<?php echo base_url();?>dist/js/pages/dashboard3.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<script>
   $(document).ready(function() {
    var t = $('#tbl_for_leaderboard').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "pageLength": 25,
        responsive: true,

        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );


$(document).ready(function() {
    var t = $('#MyTable2').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "pageLength": 25,
            responsive: true,

        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );


$(document).ready(function() {
    var t = $('#tbl_for_centre').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "pageLength": 25,
        responsive: true,
        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

$(document).ready(function() {
    var t = $('#tbl_for_student').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "pageLength": 25,
            responsive: true,
        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

</script>


<script>
jQuery(document).ready(function($){
  // Get current path and find target link

  var path=<?php echo base_url('Dashboard'); ?> ;

  alert(path)

  path += '/'+ window.location.pathname.split("/").pop();
  
  // Account for home page with empty path
  if ( path == '' ) {
    path = 'index';
  }

  alert(path)
      
  var target = $('nav a[href="'+path+'"]');
  // Add active class to target link
  target.addClass('active');
});
</script>




</body>
</html>
