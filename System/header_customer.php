
<?php 


require_once "db_connection.php";
if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}



$personname=$_SESSION['user_id'];



$sqll ="SELECT * FROM customer WHERE id='$personname'";
		$resultt = $conn->query($sqll);

 
 
	
	
if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
      
   $CFU=$roww['CFU'];   
      if($CFU=='0')
      {
          
        ?>
         <style>
        #CFU {
                display: none;
        }
                </style>
        
        <?php
          
          
     
  
      
      
  }
  
  
  
  
  
  
  
  $CF=$roww['CF'];   
      if($CF=='0')
      {
          
        ?>
         <style>
        #CF {
                display: none;
        }
                </style>
        
        <?php
          
          
      
  
      
      
  }
  
  
  
  $C=$roww['C'];   
      if($C=='0')
      {
          
        ?>
         <style>
        #C {
                display: none;
        }
                </style>
        
        <?php
          
          
     
  
      
      
  }
  
  
  $CCC=$roww['CCC'];   
      if($CCC=='0')
      {
          
        ?>
         <style>
        #CCC {
                display: none;
        }
                </style>
        
        <?php
          
          
    
  
      
      
  }
  
  
  $CC=$roww['CC'];   
      if($CC=='0')
      {
          
        ?>
         <style>
        #CC {
                display: none;
        }
                </style>
        
        <?php
          
          
     
  
      
      
  }
  
  
  $COA=$roww['COA'];   
      if($COA=='0')
      {
          
        ?>
         <style>
        #COA {
                display: none;
        }
                </style>
        
        <?php
          
          
    
  
      
      
  }
  
  
  
  $CA=$roww['CA'];   
      if($CA=='0')
      {
          
        ?>
         <style>
        #CA {
                display: none;
        }
                </style>
        
        <?php
          
          
      
  
      
      
  }
  
  $VC=$roww['VC'];   
      if($VC=='0')
      {
          
        ?>
         <style>
        #VC {
                display: none;
        }
                </style>
        
        <?php
          
          
    
  
      
      
  }
  
  
  $DEL=$roww['DEL'];   
      if($DEL=='0')
      {
          
        ?>
         <style>
        #DEL {
                display: none;
        }
                </style>
        
        <?php
          
          
    
  
      
      
  }
  
  
  
  
  
}

}





?>









<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Travel Synergies | Dashboard</title>
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
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Travel</b>Synergies</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
			  
			  
			  
			  	 <li class="dropdown"> 
			 
			 
			 <select class="notranslate" id="selectBox" onchange="changeFunc();">
   
    <option value="en">English</option>
    <option value="ar">عربي</option>
</select>
			 
			   </li>
			   
			  
			 
			       <!-- Notifications: style can be found in dropdown.less -->
              <li id='VC'class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle1" data-toggle="dropdown">
                  <i class="fa fa-video-camera"></i>
                  <span class="label label-warning "></span>
                </a>
                <ul class="dropdown-menu">
            <a href="video/index.php" ><li>Start Company Conference</li></a>
                      <a href="invitationconference.php" > <li>Invite All Customers</li></a>
                     
                </ul>
              </li>
             
              
              
			
			
			
			
			
			
			
			 
			  <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="chat/users.php" class="dropdown-toggle2">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success countt"></span>
                </a>
               



              </li>
              
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle1" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning count"></span>
                </a>
                <ul class="dropdown-menu">
                
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="dropdown-noti-menu menu">
                     
                     
                    </ul>
                  </li>
               
                </ul>
              </li>
             
			
			
			
			
			
			
			
			  
			  
			  
			  
			  
			  
			  
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $_SESSION['user_name'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $_SESSION['user_name'];?>
                   
                    </p>
                  </li>
               
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
	  
	  
	  
	  
	  

	  
	  
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['user_name'];?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="customer_dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
             
            </li>
           
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Franchisee</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                   <li id='CF'><a href="createoffice.php"><i class="fa fa-building-o"></i> Create Franchisee</a></li>
                <li id='CFU'><a href="create_owner_user.php"><i class="fa fa-users"></i> Create Franchisee Users</a></li>
				<li id='CFU'><a href="view_owner_users.php"><i class="fa fa-street-view"></i> View All Franchisee Users</a></li>
               
				<li id='CF'><a href="view_companies.php"><i class="fa fa-building"></i> View All Franchisee</a></li>
				
				  <li id='C' class="treeview">
              <a href="#">
                <i class="fa fa-copy"></i>
                <span>Contracts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="contract.php"><i class="fa fa-plus"></i> Create Contract</a></li>
				<li><a href="#"><i class="fa fa-eye"></i> View Contracts</a></li>
               
               
              </ul>
            </li>
               
              </ul>
            </li>
            
          
			
	
	<li class="treeview">
              <a href="#">
                <i class="fa fa-database"></i>
                <span>Clients Local Database</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li id='CCC'><a href="create_local_company.php"><i class="fa fa-folder"></i> Create Client Company</a></li>
                <li id='CC'><a href="create_customer.php"><i class="fa fa-folder"></i> Create Customer</a></li>
                <li id='CCC'><a href="view_local_company.php"><i class="fa fa-users"></i> View Client Companies</a></li>
				<li id='CC'><a href="view_customers.php"><i class="fa fa-users"></i> View Customers</a></li>
               
               
              </ul>
            </li>
			
			
			
			 
			    <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Appointments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
               <li id='COA'class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Company Appointments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="appointment.php"><i class="fa fa-plus"></i> Create Appointment</a></li>
				<li><a href="view_appointments.php"><i class="fa fa-bullseye"></i> View Appointments</a></li>
              
               
              </ul>
            </li>
            
            
            
            <li id='CA' class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Client Appointments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="create_customer_appointment.php"><i class="fa fa-plus"></i> Create Appointment</a></li>
				<li><a href="view_customer_appointments.php"><i class="fa fa-bullseye"></i> View Appointments</a></li>
              
               
              </ul>
            </li>
			
            
            
              
              </ul>
            </li>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			  
			
			
			
			
			
			
          
        </section>
        <!-- /.sidebar -->
      </aside>

















<script>
$(document).ready(function(){
	
	
	
 
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

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    
    
    
    
    
    
    
    
    
    
    

<style>


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
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ru', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate');
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




            
            
            
            
            
            				    <!--GOOGLE TRANSLATE-->
					
					<div style="display:none" align="center" id="google_translate_element"></div>
	
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement(
				{pageLanguage: '', includedLanguages:'en,ar'},
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


