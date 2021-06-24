   
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
      google.charts.setOnLoadCallback();


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
          //alert(data);
          var obj = JSON.parse(data);
          var x="['Centre','Student']";
          for (i = 0; i < obj.length; i++){
           x+=",['"+obj[i].centre + "'," + obj[i].student+"]";
          }
          $('batch1-chart').html(x);
          /*
          var dat = new google.visualization.arrayToDataTable([x]);
          alert(dat);
          

          
          var options = {
          width: '100%',
        height:300,
          chart: {
            title: '.',
            subtitle: ''
          },
          bars: 'vertical', // Required for Material Bar Charts.
          series: {
            0: { axis: 'distance' } // Bind series 0 to an axis named 'distance'.
            //1: { axis: 'brightness' }  Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              distance: {label: 'parsecs'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
            }
          }
        };

        var chart = new google.charts.Bar(document.getElementById('batch1-chart'));
        chart.draw(dat, options);
        */
        }
      });

}); 




   /*
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


      function drawMonthwiseChart(chart_data, chart_main_title)
      {
          var jsonData = chart_data;
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Centre');
          data.addColumn('number', 'Students');
          $.each(jsonData, function(i, jsonData){
              var month = jsonData.centre;
              var profit = parseInt($.trim(jsonData.student));
              data.addRows([[month, profit]]);
          });
          var options = {
              title:chart_main_title,
              hAxis: {
                  title: "Centre"
              },
              vAxis: {
                  title: 'Students'
              }
          };

          var chart = new google.visualization.ColumnChart(document.getElementById('batch1-chart'));
          chart.draw(data, options);
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
	$(document).ready(function(){
		$('#blogtext').prop('required',true);
		$('#blogsummary').prop('required',true);
  $('#blogheading').keydown(function (e) {
        var k = e.which;
    var ok = k >= 65 && k <= 90 || // A-Z
        k >= 96 && k <= 105 || // a-z
        k >= 35 && k <= 40 || // arrows
        k == 8 || // Backspaces
        (!e.shiftKey && k >= 48 && k <= 57); // 0-9

    if (!ok){
        e.preventDefault();
    }
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
