<?php 
session_start();

$userscounter=0;
$officescounter=0;
$appointmentscounter=0;
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}


if ($_SESSION['role']=="partner"){
header("Location: partner_dashboard.php");
}

else if ($_SESSION['role']=="staff"){
header("Location: staff_dashboard.php");
}




else if ($_SESSION['role']=="sales"){
header("Location: sales_dashboard.php");
}

else if ($_SESSION['role']=="accounts"){
header("Location: accounts_dashboard.php");
}





$companyu=$_SESSION['company'];
$sql = "SELECT * FROM users WHERE company='$companyu'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $userscounter++;
  }
}






$sql = "SELECT * FROM appointments WHERE company='$companyu'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $appointmentscounter++;
  }
}







include('header_customer.php');
?>











      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $userscounter;?></h3>
                  <p>Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
        
		
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $appointmentscounter;?></h3>
                  <p>Appointments</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
         
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
           
        </section><!-- /.content -->
		
		
		
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2022 <a href="http://www.t-synergies.com">Travel Synergies</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->










































