   
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
        $('#MyTable').DataTable({
            responsive: true
        });
    });
    $(document).ready(function() {
        $('#MyTable2').DataTable({
            responsive: true
        });
    });
</script> 
<script>
jQuery(document).ready(function($){
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();
  
  // Account for home page with empty path
  if ( path == '' ) {
    path = 'index.php';
  }
      
  var target = $('nav a[href="'+path+'"]');
  // Add active class to target link
  target.addClass('active');
});
</script>


<script>
    $(document).ready(function(){

      
      $("#sidebar_skills").click(function(){

        //alert($('#centrefilter1').val())
        
        $.ajax({
          url:"<?php echo base_url(); ?>Dashboard/loadCentre",
          method:"POST",
          data:{desc:"fetch"},
          datatype:'text',
          error: function() {
            alert('Something is wrong');
          },

          success:function(data)
          {
            alert(data);
            $('#centrefilter1').html(data);
            $('#centrefilter2').html(data);
          }
        });
        

      });

    });
</script>


</body>
</html>
