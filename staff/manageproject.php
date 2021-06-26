<?php include("header.php");?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff
        <small>Staff Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Manage Staff</li>
      </ol>
        <?php
            if(isset($_GET['flag']))
            {
                if($_GET['flag']==1)
                {
                   echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Project Edited Successfully</i></u></b></font></center><br/>";   
                }
            }
        ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Staff</h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                     <?php
                       $log = $_SESSION['log'];
                        $a = "SELECT * FROM tbl_login WHERE email_id='$log'";
                        $aa = mysqli_query($con,$a);
                        $value = mysqli_fetch_array($aa);
                        $id1 = $value['login_id'];
                      $ab="SELECT * FROM tbl_login WHERE login_id='$id1'";
                      $ba=mysqli_query($con,$ab);
                      $ea=mysqli_fetch_array($ba);
                    $no=$ea['team_number'];
                      ?>
                  <th>Sr.No</th>
                  <th>Project Name</th>
				  <th>Description</th>
				  <th>Start_Date</th>
                  <th>End_Date</th>
                </tr>
				<?php
					$query="SELECT * FROM project WHERE active='1' AND team_number='$no'";
					$result2 = mysqli_query($con,$query);
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['project_name'];?></td>
                  <td><?php echo $value2['description'];?></td>
				  <td><?php echo $value2['start_date'];?></td>
                    <td><?php echo $value2['end_date'];?></td>
				</tr>
				<?php
					$seq++;
					}
				?>
              </table>
              </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php"); ?>