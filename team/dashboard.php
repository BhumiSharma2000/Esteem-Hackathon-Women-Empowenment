<?php include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h3>Admins</h3>
              <p>Admins Details</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $countadmin[0]; ?></h3>
              <p>Total Admins</p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $countaadmin[0];  ?></h3>
              <p>Total Active Admins</p>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
            <div class="small-box bg-gray">
            <div class="inner">
              <h3>Staff</h3>
              <p>Staff Details</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy blue">
            <div class="inner">
              <h3><?php echo $countusers[0];  ?></h3>
              <p>Total Staff</p>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy blue">
            <div class="inner">
              <h3><?php echo $countausers[0]; ?></h3>
              <p>Total Active Staffs</p>
            </div>
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    error_reporting(E_ERROR | E_PARSE);
    if($_GET['ep']==1)
    {
      echo "<script> alert('Profile Updated Successfully...');</script>";
    }
  ?>
<?php include("footer.php"); ?>