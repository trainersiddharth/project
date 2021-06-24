   
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

      google.charts.load('current', {'packages':['bar']});
      //google.charts.setOnLoadCallback(drawChart);

  $('#batchfilter1').change(function(){

      x=$('#batchfilter1').val();
      alert(x);
      $.ajax({
        url:"<?php echo base_url('Admin_Controller/chart_filter'); ?>",
        method:"POST",
        data:{
          batch_id:x
        },
        success:function(data)
        {
          var dat = new google.visualization.DataTable(data);
          var chart = new google.charts.Bar(document.getElementById('batch1-chart'));
          chart.draw(data, {width: 400, height: 240});
        }
      })

});    /*
      function drawChart() {
        var jsonData = $.ajax({
            url: "getData.php",
            dataType: "json",
            async: false
            }).responseText;
            
        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable(jsonData);
  
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, {width: 400, height: 240});
      }
      */

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
</body>
</html>
