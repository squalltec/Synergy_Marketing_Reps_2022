<?php 
session_start();

$usersscounter=0;
$userscounter=0;
$officescounter=0;
$appointmentscounter=0;
require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}


else if ($_SESSION['role']=="customer"){
header("Location: customer_dashboard.php");
}

else if ($_SESSION['role']=="partner"){
header("Location: partner_dashboard.php");
}

else if ($_SESSION['role']=="staff"){
header("Location: staff_dashboard.php");
}


else if ($_SESSION['role']=="owner"){
header("Location: owner_dashboard.php");
}

else if ($_SESSION['role']=="sales"){
header("Location: sales_dashboard.php");
}

else if ($_SESSION['role']=="accounts"){
header("Location: accounts_dashboard.php");
}







$sql = "SELECT * FROM customer WHERE DEL='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $userscounter++;
  }
}



$sql = "SELECT * FROM local_company WHERE DEL='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $officescounter++;
  }
}




$sql = "SELECT * FROM office WHERE DEL='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $appointmentscounter++;
  }
}





$sql = "SELECT * FROM users WHERE DEL='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $usersscounter++;
  }
}


include('header.php');
?>











      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section  style='color:white; background-color:#222;'  class="content-header">
          <h1>
            Home
           
          </h1>
          <ol class="breadcrumb">
            <li  ><a style='color:white;' href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li style='color:white;' class="active">Dashboard</li>
          </ol>
          <br/>
        </section>

        <!-- Main content -->
        <section class="content">
            
            
            
          
            
            
            
            
            
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $usersscounter;?></h3>
                  <p>Franchisee Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $appointmentscounter;?><sup style="font-size: 20px"></sup></h3>
                  <p>Franchisee</p>
                 
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $officescounter;?></h3>
                  <p>Local Companies</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                     <h3><?php echo $userscounter;?></h3>
                  <p>Local Company Users</p>
                 
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
           
        </section><!-- /.content -->
		
		
		
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->




<?php
include('footer.php');
?>




