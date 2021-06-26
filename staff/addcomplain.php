<?php include("header.php");
error_reporting(E_PARSE | E_ERROR);
include "connection.php";
	session_start();?>?>
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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <style>
    #myDiv
    {
      border: 2px solid lightgray;
      height:210px;
      width:210px;
      float: left;
    }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Task
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Tasks</li>
      </ol>
          <?php
            if(isset($_GET['flag']))
            {
                if($_GET['flag']==1)
                {
                   echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Complain Added Successfully</i></u></b></font></center><br/>";
                }
            }
          ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="insertcomplain.php" enctype="multipart/form-data" >
                <!-- text input -->
                   <div class="form-group">
                  <label>Staff Name</label>
                  <select name="employee" style="margin-left:2px">
                    <option value="pick">--Select Staff---</option>
                      <?php
                      $a="SELECT name FROM tbl_detail";
                      var_dump($a);
                      $b=mysqli_query($con,$a);
                      while($e=mysqli_fetch_array($b))
                      {
                          echo $e['name'];
                      ?> 
	                    <option value='<?php echo $e['name'];?>' selected><?php echo $e['name'];?></option> 
                      <?php
                      }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder="Enter Description..." required></textarea>
                  </div>
                <!-- textarea -->
              <div class="box-footer" style="float:right;">
                <input type="submit" name="submit" value="ADD" class="btn btn-primary">
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?> 
  