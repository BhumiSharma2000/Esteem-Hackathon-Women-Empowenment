<?php include("header.php");
error_reporting(E_PARSE | E_ERROR);
include "connection.php";
	session_start();?>
<!-- Content Wrapper. Contains page content -->
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
        <?php
            if(isset($_GET['flag']))
            {
                if($_GET['flag']==1)
                {
                   echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Voted Successfully</i></u></b></font></center><br/>";   
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
              <h3 class="box-title">View Complain</h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Sr.No</th>
                  <th>Name_of_Respondent</th>
				  <th>Complain</th>
				  <th>Date</th>
                    <th>Counter</th>
                </tr>
                   <?php
                       $log = $_SESSION['log'];
                        $a = "SELECT * FROM tbl_login WHERE email_id='$log'";
                        $aa = mysqli_query($con,$a);
                        $value = mysqli_fetch_array($aa);
                        $id1 = $value['login_id'];
                      $ab="SELECT * FROM tbl_login WHERE login_id='$id1'";
                      $ba=mysqli_query($con,$ab);
                      $ea=mysqli_fetch_array($ba);
                      ?>
				<?php
					$query="SELECT * FROM complain";
					$result2 = mysqli_query($con,$query);
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['name_of_respondent'];?></td>
                  <td><?php echo $value2['complain'];?></td>
				  <td><?php echo $value2['date'];?></td>
                    <td><a class="btn btn-primary btn-xs" href="insertvote.php?id=<?php echo $value2['c_id'];?>" 
					onclick="return confirm('Sure to Delete  ?');">Vote</a></td>
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