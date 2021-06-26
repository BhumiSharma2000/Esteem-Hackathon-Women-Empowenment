<?php 
        include "connection.php";
        include "header.php";
?>
<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'slack';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
	$data1 = '';
	$data2 = '';
	$sql = "SELECT * FROM complain";
    $result = mysqli_query($mysqli, $sql);
	while ($row = mysqli_fetch_array($result)) 
    {
		$data1 = $data1 . '"'. $row['complain'].'",';
		$data2 = $data2 . '"'. $row['no_of_vote'] .'",';
	}
	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
?>        
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admins
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Manage Admin</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View Complain</h3> 
            </div>
               <table border="1"  class="table table-hover">
        <th>Complain Name</th>
        <th>No. of Votes Occurred</th>
     		<?php
            include "connection.php";
            $sql = "SELECT * FROM complain "; 
        
            if($res = mysqli_query($con, $sql)) 
            { 
                if(mysqli_num_rows($res)>0) 
                { 
                    while ($row = mysqli_fetch_array($res)) 
		            { 
                        echo "<tr>"; 
                        echo "<td>".$row['complain']."</td>"; 
                        echo "<td>".$row['no_of_vote']."</td>"; 
                        echo "</tr>"; 
                    } 
                    echo "</table>"; 
            } 
            else 
            { 
                        echo "No matching records are found."; 
            } 
            }  
?> 
    </table>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <div id="js__scroll-to-section" class="container g-padding-y-20--xs g-padding-y-20--xsm" style="color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
				padding: 10px;
                margin:100px 100px 100px 10px">
            <h1 style="font-family: Arial;
			    margin: 0px 100px 10px 10px;
			    padding: 0;
			    color: white;
			    text-align: center;
			    background: #555652;">No. of Votes Occurred till now</h1>
            <canvas id="chart" style="width: 20%; height: 10vh; background: #222; border: 1px solid #fcb702; margin-top: 10px;"></canvas>
			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $data1; ?>],
		            datasets: 
		            [
		            {
		            	label: 'No. of Times Occurred',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 2	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
                  
        </div>
               
              </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
    <?php
        include "footer.php";
    ?>
        <!-- End Form -->
        <!--========== END PAGE CONTENT ==========-->