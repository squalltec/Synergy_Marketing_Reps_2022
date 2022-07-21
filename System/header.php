
<?php 
session_start();
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
















$di=$_SESSION['user_id'];



$sqll ="SELECT * FROM users WHERE id='$di'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
	 





?>













<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SMRT-Hub | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
  
  
  
  
  
  
  
  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">











  </head>
  
  
  <style>
      .logo:hover{
         background-color: #EED202 !important;
      }
  </style>
  
  
  
  <style>
      .user-image{
          width:50px !important;
          height:50px !important;
      }
  </style>
  
  <style>.no-print{
  display:none;
  margin-top:35px;
  }</style>
  <body class="skin-black">
    <div class="wrapper">
      
      <header  class="main-header">
        <!-- Logo -->
        <a style='height:63px; background-color: #EED202 ; text-decoration:none;' href="dashboard.php" class="notranslate logo">
            
            <svg style="margin-top:3px;  width:40%;" id="Layer_5" data-name="Layer 5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1130 795.02"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-2{fill:url(#linear-gradient-2);}.cls-3{fill:url(#linear-gradient-3);}</style><linearGradient id="linear-gradient" x1="684.39" y1="443.54" x2="1206.76" y2="443.54" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#8c6239"></stop><stop offset="1" stop-color="#d4af37"></stop></linearGradient><linearGradient id="linear-gradient-2" x1="378" y1="440.55" x2="767.74" y2="440.55" xlink:href="#linear-gradient"></linearGradient><linearGradient id="linear-gradient-3" x1="1120.83" y1="437.01" x2="1508" y2="437.01" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#8c6239"></stop><stop offset="0.54" stop-color="#b58e38"></stop><stop offset="1" stop-color="#d4af37"></stop></linearGradient></defs><g id="Layer_4" data-name="Layer 4"><path class="cls-1" d="M1161.32,589.08l-218.44,252-215.53-248,85.48-99.21,129.91,149,46.62-54-305-352.51L849.27,46h190.81c53.72,61.75,109,125.33,166.68,191.63-43.16,49.71-85.43,98.38-130.09,149.79l-85-98.46,42.64-52-89.4-103.26L856,236Z" transform="translate(-378 -46.03)"></path><path class="cls-2" d="M767.74,441.79l-84.86,97.86-46.21-48.83-88,99.31H378L637,291Z" transform="translate(-378 -46.03)"></path><path class="cls-3" d="M1508,585.72H1337.22L1251,488l-44.43,48.66-85.73-98.61,129.76-149.75Z" transform="translate(-378 -46.03)"></path></g></svg></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            
          </a>
          
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
           
                
                
                
                
                    
                
                
            <li class="notifications-menu">
                
                <style>
                    .search-container{
    background: #fff;
    height: 30px;
    border-radius: 30px;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.8s;
    /*box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
    inset -7px -7px 10px 0px rgba(0,0,0,.1),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
   text-shadow:  0px 0px 6px rgba(255,255,255,.3),
              -4px -4px 6px rgba(116, 125, 136, .2);
  text-shadow: 2px 2px 3px rgba(255,255,255,0.5);*/
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}

.search-container:hover > .search-input{
    width: 400px;
}

.search-container .search-input{
    background: transparent;
    border: none;
    outline:none;
    width: 0px;
    font-weight: 500;
    font-size: 16px;
    transition: 0.8s;

}

.search-container .search-btn .fas{
    color: #5cbdbb;
}



.search-container:hover{
  animation: hoverShake 0.15s linear 3;
}
                </style>
                 <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
   <br/>
   
   
   <div  class="search-container">
        <input type="text" id='search' name="search" placeholder="Search..." class="search-input">
       &nbsp; <a href="#" class="search-btn">
                <i style="color:black;" class="fas fa-search"></i>      
        </a>&nbsp;&nbsp;
    </div>
            </li>
            
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                	  <!-- Notifications: style can be found in dropdown.less -->
              <li style='display: inline;' class="v dropdown notifications-menu">
                <a style=' margin:auto; top:8px;' href="#" class="dropdown-toggle1" data-toggle="dropdown">
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

<lord-icon
    src="https://cdn.lordicon.com/vmibgbhr.json"
    trigger=""
    class='hidev'
    delay="5"
    colors="primary:#000000"
    style="float:left; width:25px;height:25px">
</lord-icon><lord-icon
    src="https://cdn.lordicon.com/vmibgbhr.json"
    trigger="loop"
    class='showv'
    delay="5"
    colors="primary:#000000"
    style="float:left;  width:25px;height:25px">
</lord-icon> View Panels
                  <span class="label label-warning"></span>
                </a>
                <ul  style='border-radius:8px;' class="dropdown-menu">
               
                  <li style=''>
                      
                    <!-- inner menu: contains the actual data -->
                    <ul style='' align='center' class=" menu">
                        
               
                 <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>


<li class=''>

  
<a href="view_companies.php">Franchisee</a>

</li>

<li class=''>

  
<a href="view_users.php">Franchisee Users</a>

</li>


<li class=''>

  
<a href="view_local_company.php">Local Companies</a>

</li>
                   
                   <li> 
                   <a href="view_customers.php"> Local Customers</a></li>
                   
                   
                   
                    <li> 
                   <a href="view_international_companies.php"> International Companies</a></li>
                   
                   
                   
                    <li> 
                   <a href="view_customers_international.php"> International Customers</a></li>
                   
                   
                   
                   
                     
                    </ul>
                  </li>
               
                </ul>
              </li>
                
                
                
                
                
              
              
              
              
              
              
              
              
              
              
                
                
              
              
              
              
              
              
              
              
              
              
            
            
            
            
            
                	  <!-- Notifications: style can be found in dropdown.less -->
              <li class=" notifications-menu">
                <a  style='max-height:20px;' class="dropdown-toggle1" data-toggle="dropdown">
                
                
                 &nbsp;  <select class="selectpicker notranslate" id="selectBox" onchange="changeFunc();" data-width="fit">
    <option value="en" data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
     <option value="ar" data-content='<span class="flag-icon flag-icon-ae"></span> عربي '>عربي</option>
    <option value="de" data-content='<span class="flag-icon flag-icon-de"></span> German'>German</option>
    <option value="ru" data-content='<span class="flag-icon flag-icon-ru"></span> Russian'>Russian</option>
      <option value="sv" data-content='<span class="flag-icon flag-icon-se"></span> Swedish'>Swedish</option>
 
  
  </select>
                
        <script>
            var chooseLang = function() {
  $('.selectpicker').selectpicker();
};

chooseLang();
        </script>        
                
                
                
                	 
<!--			 <select style='color:black;' class="notranslate" id="selectBox" onchange="changeFunc();">
  
    <option value="en">English</option>
    <option value="ru">Russian</option>
    <option value="ar">عربي</option>
</select>
            -->    
                
                
                
                </a>
                
              </li>
                    
                    
                    
                    
                    
                    
                    
                
                	  <!-- Notifications: style can be found in dropdown.less -->
              <li style='display: inline;' class="v dropdown notifications-menu">
                <a style=' margin:auto; top:8px;' href="#" class="dropdown-toggle1" data-toggle="dropdown">
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

<lord-icon
    src="https://cdn.lordicon.com/itykargr.json"
    trigger=""
    class='hidev'
    delay="5"
    colors="primary:#000000"
    style="float:left; width:25px;height:25px">
</lord-icon><lord-icon
    src="https://cdn.lordicon.com/itykargr.json"
    trigger="loop"
    class='showv'
    delay="5"
    colors="primary:#000000"
    style="float:left;  width:25px;height:25px">
</lord-icon>
                  <span class="label label-warning"></span>
                </a>
                <ul  style='border-radius:8px;' class="dropdown-menu">
               
                  <li style=''>
                       <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <!-- inner menu: contains the actual data -->
                    <ul id='emailslist' style='' align='center' class=" menu">
                        
               
                


                   
                   
                     
                    </ul>
                  </li>
               
                </ul>
              </li>
                
              
              
              
              
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                 
			 
			     <li class="vccc dropdown notifications-menu">
                <a style='display:inline;' href="whatsapp" class="dropdown-toggle2">
                  
                 <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>


<lord-icon
    src="https://cdn.lordicon.com/uvextprq.json"
    trigger=""
    class='hidevccc'
    delay="5"
    colors="primary:#000000"
    style="margin-top:23px !important; margin-right:-40px !important;  float:left; width:25px;height:25px">
</lord-icon>

<lord-icon
    src="https://cdn.lordicon.com/uvextprq.json"
    trigger="loop"
    class='showvccc'
    delay="5"
    colors="primary:#000000"
    style="margin-top:23px !important; margin-right:-40px !important;  float:left;  width:25px;height:25px">
</lord-icon>

         <span id='countmsgs' style='z-index:1; margin-top:18px;' class="label label-warning count">
       
                        
                    </span>        
                </a>
               



              </li>
              
              
              
              
              
              
              
              
              
              
              
            
              
              
             
               <!-- Notifications: style can be found in dropdown.less -->
              <li class="vccc dropdown notifications-menu">
               <a href="video/index.php" class="dropdown-toggle1">
                 
<lord-icon
    src="https://cdn.lordicon.com/axyzxviq.json"
    trigger=""
    class='hidevccc'
    delay="5"
    colors="primary:#000000"
    style="margin-top:8px !important; margin-right:-9px !important;  float:left; width:25px;height:25px">
</lord-icon>

<lord-icon
    src="https://cdn.lordicon.com/axyzxviq.json"
    trigger="loop"
    class='showvccc'
    delay="5"
    colors="primary:#000000"
    style="margin-top:8px !important; margin-right:-9px !important;  float:left;  width:25px;height:25px">
</lord-icon>
                  <span class="label label-warning "></span>
                </a>
          
              </li>
             
                
                 <style>
			      .vccc:hover .hidevccc{
                        display:none;
                        
                    }
                    
                     .vccc:hover .showvccc{
                        display:block;
                    }
                    
                    .vccc:not(:hover) .hidevccc {
                        display:block;
                    }
                    
                     .vccc:not(:hover) .showvccc {
                        display:none;
                    }
                    
			 </style>
			 
                
                
                
           
              
             
			  
			  <!-- Messages: style can be found in dropdown.less-->
         <!--    <li class="vccc dropdown notifications-menu">
                <a style='display:inline;' href="#" class="dropdown-toggle2">
                  

<lord-icon
    src="https://cdn.lordicon.com/itykargr.json"
    trigger=""
    class='hidevccc'
    delay="5"
    colors="primary:#000000"
    style="margin-top:12px !important;  float:left; width:25px;height:25px">
</lord-icon>

<lord-icon
    src="https://cdn.lordicon.com/itykargr.json"
    trigger="loop"
    class='showvccc'
    delay="5"
    colors="primary:#000000"
    style="margin-top:12px !important;  float:left;  width:25px;height:25px">
</lord-icon>

                  <span class="label label-success"></span>
                </a>
               </li>


-->
           
			 
              
              
			
			  
			  
			  
			  
			  
			  
			  
			  <!-- Notifications: style can be found in dropdown.less -->
        <!--      <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle1" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning count"></span>
                </a>
                <ul class="dropdown-menu">
                
                  <li>
                  
                    <ul class="dropdown-noti-menu menu">
                     
                     
                    </ul>
                  </li>
               
                </ul>
              </li>-->
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
        <style>
            .user-header{
                height:300px !important;
                background-color:black;
               
            }
            
            .small-box{
                border-radius:8px;
            }
        </style>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="admin/<?php echo $roww['img'];?>" class="user-image" alt="User Image"/>
                 
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li style=' border-radius:5%;'  class="user-header">
                    <img src="admin/<?php echo $roww['img'];?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $roww['name'];?>
                   
                    </p>
                    <p>
                      <?php echo $roww['email'];?>
                   
                    </p>
                    
                    <br/>
                    <a href="profile.php" style="border-radius:12px;" class="btn btn-default btn-flat">Manage your Account</a>
                    <br/>
                    <p align='center' ><a href="logout.php" style="width:100px; border-radius:12px;" class="btn btn-default btn-flat">Sign out</a></p>
                    
                  </li>
                  
                  
                  
                   
                  
                  
               
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a style='color:black;' href="#">Privacy Policy</a>
                    </div>
                 
                    <div class="pull-right">
                       <a style='color:black;' href="#">Terms of Service</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
			
			
          </div>
        </nav>
	
	
	
	
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
 
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 40px;
  right: 28px;
  width: 5%;
}

</style>





	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

      </header>
	  
	  
	  
	  
	  

	  
	  
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
          <br/>
        <section class="sidebar">
          <!-- Sidebar user panel -->
    
    
    <!--      <div class="user-panel">
            <div class="pull-left image">
              
              <img src="admin/<?php echo $roww['img'];?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p class='notranslate'>SMRT &nbsp; Hub <br/><small> V.1.0</small></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          -->
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            
            
            <li style='display:inline;' class="dashb active treeview">
              <a href="dashboard.php">
                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                
                <style>
                
                      .vcc:hover .hidevcc{
                        display:none;
                        
                    }
                    
                     .vcc:hover .showvcc{
                        display:block;
                    }
                    
                    .vcc:not(:hover) .hidevcc {
                        display:block;
                    }
                    
                     .vcc:not(:hover) .showvcc {
                        display:none;
                    }
                    
                    
                    
                    .vcc2:hover .hidevcc2{
                        display:none;
                        
                    }
                    
                     .vcc2:hover .showvcc2{
                        display:block;
                    }
                    
                    .vcc2:not(:hover) .hidevcc2 {
                        display:block;
                    }
                    
                     .vcc2:not(:hover) .showvcc2 {
                        display:none;
                    }
                    
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                    .dashb:hover .hidedash{
                        display:none;
                        
                    }
                    
                     .dashb:hover .showdash{
                        display:block;
                    }
                    
                    .dashb:not(:hover) .hidedash {
                        display:block;
                    }
                    
                     .dashb:not(:hover) .showdash {
                        display:none;
                    }
                    
                    
                    
                    
                    
                    
                    .data:hover .hidedata{
                        display:none;
                        
                    }
                    
                     .data:hover .showdata{
                        display:block;
                    }
                    
                    .data:not(:hover) .hidedata {
                        display:block;
                    }
                    
                     .data:not(:hover) .showdata {
                        display:none;
                    }
                    
                    
                    
                    
                    
                    
                     .cr:hover .hidecr{
                        display:none;
                        
                    }
                    
                     .cr:hover .showcr{
                        display:block;
                    }
                    
                    .cr:not(:hover) .hidecr {
                        display:block;
                    }
                    
                     .cr:not(:hover) .showcr {
                        display:none;
                    }
                    
                    
                    
                        .cr2:hover .hidecr2{
                        display:none;
                        
                    }
                    
                     .cr2:hover .showcr2{
                        display:block;
                    }
                    
                    .cr2:not(:hover) .hidecr2 {
                        display:block;
                    }
                    
                     .cr2:not(:hover) .showcr2 {
                        display:none;
                    }
                    
                    
                    
                    
                     .v:hover .hidev{
                        display:none;
                        
                    }
                    
                     .v:hover .showv{
                        display:block;
                    }
                    
                    .v:not(:hover) .hidev {
                        display:block;
                    }
                    
                     .v:not(:hover) .showv {
                        display:none;
                    }
                    
                    
                    
                </style>
 <lord-icon
    src="https://cdn.lordicon.com/spkantfu.json"
    trigger="" class='hidedash'
     delay="1000"
      colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>

<lord-icon
    src="https://cdn.lordicon.com/spkantfu.json"
    trigger="loop" class='showdash'
     delay="100"
      colors="primary:#ffffff"
    style="float:left; width:25px; height:25px">
</lord-icon>
<span>Home</span>
              </a>
             
            </li>
           
            
           
           
           
			
			   <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Franchise</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                   <li><a href="createoffice.php"><i class="fa fa-building-o"></i> Create Franchisee</a></li>
                <li><a href="createfuser.php"><i class="fa fa-users"></i> Create Franchisee Users</a></li>
			
				  <li class="treeview">
              <a href="#">
                <i class="fa fa-copy"></i>
                <span>Contracts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="contractnew.php"><i class="fa fa-plus"></i> Create Contract</a></li>
				<li><a href="#"><i class="fa fa-eye"></i> View Contracts</a></li>
               
               
              </ul>
            </li>
               
              </ul>
            </li>
            
           
           
           
            
          
		
		
		
		
	
			   <li class="treeview">
              <a href="#">
                <i class="fa fa-address-card"></i>
		Database
		<i class="fa fa-angle-left pull-right"></i>
		
	<ul class="treeview-menu">
	
	<li style='display:inline;' class=" treeview">
              <a class='data' href="#">
               <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

<lord-icon
       src="https://cdn.lordicon.com/kpsnbsyj.json"
    trigger=""
    delay="1000"
    class='hidedata'
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
<lord-icon
        src="https://cdn.lordicon.com/kpsnbsyj.json"
    class='showdata'
    trigger="loop"
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
                <span>Local Database</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li style='display:inline;' class='cr'><a href="create_local_company.php">
                    <br/>
                    
                    
                    
                    
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    trigger=""
    class='hidecr'
    delay="1000"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon> 

<lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    trigger="loop"
    class='showcr'
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>

Create Client Company</a></li>
                <li style='display:inline;'><a class='cr2' href="create_customer.php">
                       <br/>
                    <lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    class='hidecr2'
    trigger=""
    delay="1000"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
<lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    class='showcr2'
    trigger="loop"
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
Create Customer</a></li>
                
               
              </ul>
            </li>
			
			
			
			
			
			   <li style='display:inline;' class=" treeview">
              <a class='data' href="#">
               <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

<lord-icon
       src="https://cdn.lordicon.com/kpsnbsyj.json"
    trigger=""
    delay="1000"
    class='hidedata'
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
<lord-icon
        src="https://cdn.lordicon.com/kpsnbsyj.json"
    class='showdata'
    trigger="loop"
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
                <span>International Database</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li style='display:inline;' class='cr'><a href="create_international_company.php">
                    <br/>
                    
                    
                    
                    
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    trigger=""
    class='hidecr'
    delay="1000"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon> 

<lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    trigger="loop"
    class='showcr'
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>

Create Client Company</a></li>
                <li style='display:inline;'><a class='cr2' href="create_customer_international.php">
                       <br/>
                    <lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    class='hidecr2'
    trigger=""
    delay="1000"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
<lord-icon
    src="https://cdn.lordicon.com/auvicynv.json"
    class='showcr2'
    trigger="loop"
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
Create Customer</a></li>
                
               
              </ul>
            </li>
			
			
			
			
			
			
			
			
			</ul>	
			 
			 
			    
			    
			    </li>
			    
			    
			    
			    
			    
			    
			    
			    
			 
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			<!--  
			  <li style='display:inline;' class=" treeview">
              <a class='data' href="#">
               <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

<lord-icon
    src="https://cdn.lordicon.com/sygggnra.json"
    trigger=""
    delay="1000"
    class='hidedata'
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
<lord-icon
    src="https://cdn.lordicon.com/sygggnra.json"
    class='showdata'
    trigger="loop"
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>
                <span>Contract</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li style='display:inline;' class='cr'><a href="create_local_company.php">
                    <br/>
                    
                    
                    
                    
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
     src="https://cdn.lordicon.com/biwxmlnf.json"
    trigger=""
    class='hidecr'
    delay="1000"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon> 

<lord-icon
    src="https://cdn.lordicon.com/biwxmlnf.json"
    trigger="loop"
    class='showcr'
    delay="100"
    colors="primary:#ffffff"
    style="float:left; width:25px;height:25px">
</lord-icon>

Create Contract</a></li>
            
                
               
              </ul>
            </li>
			 
			-->
			
			
			
			
			    
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

  <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                    <span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
               <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Appointments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="appointment.php"><i class="fa fa-plus"></i> Create an Appointment</a></li>
				<li><a href="view_appointments.php"><i class="fa fa-bullseye"></i> View Appointments</a></li>
              
               
              </ul>
            </li>
            
            
            
        <!--    <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Client Appointments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="create_customer_appointment.php"><i class="fa fa-plus"></i> Create Appointment</a></li>
				<li><a href="view_customer_appointments.php"><i class="fa fa-bullseye"></i> View Appointments</a></li>
              
               
              </ul>
            </li>-->
            
            
            
            
               <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Sales Meetings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="create_meeting_letter.php"><i class="fa fa-plus"></i> Create Meeting</a></li>
				<li><a href="view_meeting_letter.php"><i class="fa fa-bullseye"></i> View Meeting</a></li>
              
               
              </ul>
            </li>
            
            
               <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Sales Report</span>
                
              </a>
            
            </li>
			
            
            
              
              </ul>
            </li>
			
			
			
			
			  <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>International Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                   <li><a href="#"><i class="fa fa-plus"></i> Flight Tickets</a></li>
                <li><a href="#"><i class="fa fa-plus"></i> Expenses</a></li>
			
			
               
              </ul>
            </li>
			
			
			
			
			
			    		<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Marketing Material</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 
                   <li style='color:white;' class='sign'><a href='example.php'><i class="fa fa-plus"></i>Visiting Card</a></li>
                
                <li style='color:white;' class='sign'><a href='emailsign.php'><i class="fa fa-plus"></i>Email Signature</a></li>
                
                <li style='color:white;' class='sign'><a href='letterhead.php'><i class="fa fa-plus"></i>Letter Head</a></li>
                
                  <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Presentation</a></li>
                  
                    <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Company Profile</a></li>
               
              </ul>
            </li>
            
			
			
			
			
			
			
			
				<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Human Resource</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 
                   <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Asset Registration</a></li>
                <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Reminders</a></li>
                <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Expirations</a></li>
                <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Staff Vacations</a></li>
                <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Sick Leave</a></li>
                <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Cost Allocation</a></li>
                
               	
				<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Staff</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 
                   <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Business Reciepts</a></li
                
               
               
              </ul>
            </li>
               
              </ul>
            </li>
			
			
		
			
			
			
			
				<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Accounts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                 
                   <li style='color:white;' class=''><a href='#'><i class="fa fa-plus"></i>Accounting Software</a></li
                
               
               
              </ul>
            </li>
			
			
          
        </section>
		
		





        <!-- /.sidebar -->
      </aside>





<input style='display:none;' value='danialhussain1994@gmail.com' name='emailme' id='emailme'>
<input style='display:none;' value='ydupapjqcbxfoqyo' name='passwordme' id='passwordme'>










<script>
$(document).ready(function(){

	var username = $('#emailme').val();
	var password = $('#passwordme').val();
	

	
		 $.ajax({
              type:'POST',
              url:'trymail.php',
              data:{'username':username, 'password':password},
             

			 success:function(result){
                
                $("#emailslist").html(result);
                
                      
                  }
				  
				            
          }); 
	
	
	

	
	
	
	
	
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-noti-menu').html(data.notification);
	
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
	 
    }
   }
  });
  
  
 }
 
 load_unseen_notification();
 
 
 
 $(document).on('click', '.dropdown-toggle1', function(){
  $('.count').html('');
  load_unseen_notification('noti');
 });
 
 
 
 
 
 
 
 
 
 
   
   
   
   	
   
 
 function load_unseen_notification2(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    
	 if(data.unseen_notification2 > 0)
    {
	  $('.countt').html(data.unseen_notification2);
	}
    
   }
  });
 }
 
 load_unseen_notification2();
 
 
 
 $(document).on('click', '.dropdown-toggle2', function(){
  $('.countt').html('');
  load_unseen_notification2('msg');
 });
 
 
   
   
   
 
 
 
 
 
 
 
  setInterval(function(){ 
   $.ajax({
   url:"countmsgs.php",
   method:"POST",
  
   success:function(data)
   {
    
    $('#countmsgs').html(data);
   }
  });
 
 
  }, 1000);
 
 
 
 
 setInterval(function(){ 
  load_unseen_notification();
  
   load_unseen_notification2();
 }, 5000);
 

 
});
</script>

















    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    
    
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

   

    <!-- AdminLTE for demo purposes -->
    
    <script src="dist/js/demo.js" type="text/javascript"></script>
    
    
    
    
    
    

<style>
.VIpgJd-suEOdc{
  display:none !important;   
    
}

.goog-logo-link {
    display:none !important;
} 
    
.goog-te-gadget{
    color: transparent !important;
}

.goog-te-banner-frame.skiptranslate {
    display: none !important;
	
    } 
	body {
    top: 0px !important; 
    }
	
	.goog-te-combo
	{
	
	background-color:white;
	color:black;
	
	}
	
	
		.goog-te-combo option { color: black; }
		.goog-te-combo select { color: black; }
	
	
</style>








<script>
    
    function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    	changeLanguage(selectedValue);
   
   }
    
</script>



<script>

function googleTranslateInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ar,ru,de,sv', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate');
}

/**
 * This will fire the event on target element
 * @param element
 * @param event
 * @returns {boolean}
 */
function fireEvent(element,event){
  console.log("in Fire Event");
  if (document.createEventObject){
    // dispatch for IE
    //console.log("in IE FireEvent");
    var evt = document.createEventObject();
    return element.fireEvent('on'+event,evt)
  }
  else{
    // dispatch for firefox + others
    //console.log("In HTML5 dispatchEvent");
    var evt = document.createEvent("HTMLEvents");
    evt.initEvent(event, true, true ); // event type,bubbling,cancelable
    return !element.dispatchEvent(evt);
  }
}

/**
 * This will set the language and fire the event
 * @param lang
 * e.g onclick="changeLanguage('bn')"
 */
function changeLanguage(lang) {
  var jObj = $('.goog-te-combo');
  var db = jObj.get(0);
  jObj.val(lang);
  fireEvent(db, 'change');
}

 </script>

<script>
    $(document).keypress(
  function(event){
      
      
    
      
    if (event.which == '13') {
        
        var az= document.getElementById('enterenable').value;
        if(az=='enable')
        {
        
        }
        else{
      event.preventDefault();
      
        }
      
      
    }
});
</script>


            
            
            
            
            
            				    <!--GOOGLE TRANSLATE-->
					
					<div style="display:none" align="center" id="google_translate_element"></div>
	
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement(
				{pageLanguage: '', includedLanguages:'en,ar,ru,de,sv'},
				'google_translate_element'
			);
		}
	</script>
	
	<script type="text/javascript" src=
"https://translate.google.com/translate_a/element.js?
		cb=googleTranslateElementInit">
	</script>
					
					<!--GOOGLE TRANSLATE END-->
            
          


    
    
    
    
    
    
  </body>
</html>

<?php
  }
}
?>


