<?php
    error_reporting(E_ERROR | E_PARSE);
    include("header.php");
    include "connection.php";
    session_start();
    if(!isset($_SESSION['log']))
    {
        header("location:index.php");
    }
    else
    { 
        $log = $_GET['id'];
        $a = "SELECT * FROM project WHERE p_id='$log'";
        
        $aa = mysqli_query($con,$a);
        $value = mysqli_fetch_array($aa);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
<body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="manageusers.php"><i class="fa fa-key"></i> Manage Users</a></li>
        <li class="active">Edit Profile</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
         <?php
        if(isset($_POST['submit']))
        { 
           
                  $name = $_POST['name'];
                    $description = $_POST['description'];
                    $start=$_POST['start'];
                    $end=$_POST['end'];
                    $team=$_POST['team-number'];
                    $qw="UPDATE project SET project_name='$name',description='$description',start_date='$start',end_date='$end' WHERE p_id='$log'";
                    $updated = mysqli_query($con,$qw);
                    var_dump($qw);
                    if($updated)
                      {
                            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Profile Updated');window.location.href='manageproject.php?flag=1';</script>");  
                      }      
                      else
                      {
                          echo "<font style='color:red'>Error...</font>";
                      }
        }
?>
      <div class="row">
        <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action='' enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Project Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name ..."  value="<?php echo $value['project_name']; ?>" required />
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="description"  placeholder="Enter Description..." required> <?php echo $value['description']; ?></textarea>
                </div>
				<div class="form-group" >
                <label>Start Date:</label>
<input type="text" name="start" class="form-control" placeholder="Enter date ..."  value="<?php echo $value['start_date']; ?>" required />
					<!-- /.input group -->
				</div>
                  <div class="form-group" >
                <label>End Date:</label>
                      <input type="text" name="end" class="form-control" placeholder="Enter date ..."  value="<?php echo $value['end_date']; ?>" required />

                    </div>
                  <div class="form-group">
                  <label>Team-Number</label>
                  <select name="team-number" style="margin-left:2px">
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
	                    <option value='<?php echo $ea['team_number'];?>' selected><?php echo $ea['team_number'];?></option> 
                    </select>
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
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script>
    $(document).ready(function () 
    {
        $('#datepicker').datepicker
        ({    
            endDate: '+1d',
            autoclose: true
        });  });
    </script>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<?php
  }
?>
<?php include("footer.php"); ?>