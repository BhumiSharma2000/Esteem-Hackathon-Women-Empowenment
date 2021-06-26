<?php include("header.php"); ?>
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
        Team
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Team</li>
      </ol>
          <?php
            if(isset($_GET['flag']))
            {
                if($_GET['flag']==1)
                {
                   echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Team Added Successfully</i></u></b></font></center><br/>";
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
           <?php
            include "connection.php";
           ?>
            <div class="box-body">
              <form role="form" method="POST" action="insertteam.php" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Employee</label>
                  <select name="employee" style="margin-left:2px">
                    <option value="pick">--Select Employee---</option>
                      <?php
                      $a="SELECT name FROM tbl_detail WHERE login_id IN(SELECT login_id FROM tbl_login WHERE type='2' AND department IS NULL)";
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
                  <label>Team-Number</label>
                  <select name="team-number" style="margin-left:2px">
                    <option value="pick">--Select Team-Number---</option>
	                    <option value="1" selected>1</option> 
                    <option value="2" >2</option> 
                    <option value="3">3</option> 
                    <option value="4">4</option> 
                    <option value="5">5</option> 
                    </select>
                </div>
                  <div class="form-group">
                  <label>Department</label>
                  <select name="department" style="margin-left:2px">
                    <option value="pick">--Select Department---</option>
	                    <option value="Sales" selected>Sales</option> 
                    <option value="R&D" >Research and Deveploment</option> 
                    <option value="HR">Human Resource Management </option> 
                    </select>
                </div>
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
  