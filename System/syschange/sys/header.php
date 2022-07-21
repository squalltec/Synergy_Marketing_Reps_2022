
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





<title>Synergy Marketing Reps</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



<style>

.page-titles{
     border-radius:0%;
}

.card{
    border-radius:0%;
}


    *:not(i) {
        font-family:"Google Sans", "Noto Sans", "Noto Sans JP", "Noto Sans KR", "Noto Naskh Arabic", "Noto Sans Thai", "Noto Sans Hebrew", "Noto Sans Bengali", sans-serif !important;
    }
</style>

<div class="nav-header">
            <a href="login.php" class="brand-logo">
				<svg style="width:40%;" id="Layer_5" data-name="Layer 5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1130 795.02"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-2{fill:url(#linear-gradient-2);}.cls-3{fill:url(#linear-gradient-3);}</style><linearGradient id="linear-gradient" x1="684.39" y1="443.54" x2="1206.76" y2="443.54" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#8c6239"/><stop offset="1" stop-color="#d4af37"/></linearGradient><linearGradient id="linear-gradient-2" x1="378" y1="440.55" x2="767.74" y2="440.55" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="1120.83" y1="437.01" x2="1508" y2="437.01" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#8c6239"/><stop offset="0.54" stop-color="#b58e38"/><stop offset="1" stop-color="#d4af37"/></linearGradient></defs><g id="Layer_4" data-name="Layer 4"><path class="cls-1" d="M1161.32,589.08l-218.44,252-215.53-248,85.48-99.21,129.91,149,46.62-54-305-352.51L849.27,46h190.81c53.72,61.75,109,125.33,166.68,191.63-43.16,49.71-85.43,98.38-130.09,149.79l-85-98.46,42.64-52-89.4-103.26L856,236Z" transform="translate(-378 -46.03)"/><path class="cls-2" d="M767.74,441.79l-84.86,97.86-46.21-48.83-88,99.31H378L637,291Z" transform="translate(-378 -46.03)"/><path class="cls-3" d="M1508,585.72H1337.22L1251,488l-44.43,48.66-85.73-98.61,129.76-149.75Z" transform="translate(-378 -46.03)"/></g></svg>
				<div class="brand-title">
				    
			<b  class="notranslate" style="margin-top:5%; color:white; font-size:1em;">	Synergy Marketing Reps</b>
			<br/>
				
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<style>
		    .card-header{
		        border-radius:0 !important;
		    }
		    
		    .toolbar-bottom{
		        margin-top:2%;
		       
		    }
		    
		    .sw-btn-next{
		      
		        float:right;
		    }
		    
		    .sw-btn-prev{
		      
		        float:left;
		        
		    }
		    
		     .sw-btn-subm{
		     
		        float:right;
		    }
		    
		    
		</style>
		
		
		 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="login.php" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span style="margin-left:-5%;" class="nav-text">Dashboard</span>
						</a>
                        

                    </li>
					
                    
                <!-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-chart-pie"></i>
							<span class="nav-text">TS-Head Office</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="createoffice.php">Create Franchise</a></li>
							<li><a href="createprofile.php">Create Franchise User</a></li>
							<li><a href="view_users.php">View All Franchisee Users</a></li>
							<li><a href="view_companies.php"> View All Franchisee</a></li>
							<li><a href="createcontract.php"> Create Contract</a></li>	
							<li><a href="#"> View Contracts</a></li>	
                            
						</ul>
                    </li>-->
					    
                 <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-building"></i>
							<span  style="margin-left:-3%;" class="nav-text">Clients Database</span>
						</a>
                        <ul  aria-expanded="false">
							<li style="margin-left:-1%;"><a href="create_local_company.php"> Create Client Company</a></li>
							
							<li style="margin-left:-1%;"><a href="create_customer.php"> Create Customer</a></li>
						
						
						<!--	<li style="margin-left:-1%;"><a href="view_client_companies.php"> View Client Companies</a></li>
							<li style="margin-left:-1%;"><a href="view_customers.php"> View Customers</a></li>-->	
	

						</ul>
                    </li>
						
				<!--	 <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-calendar-check"></i>
							<span class="nav-text">Appointments</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="appointment.php">Create Company Appointment</a></li>
							
							<li><a href="view_company_appointments.php">  View Company Appointments</a></li>
							<li><a href="create_customer_appointment.php"> Create Clients Appointments</a></li>
							<li><a href="view_customer_appointments.php"> View Clients Appointments</a></li>
							<li><a href="create_meeting_letter.php"> Create Sales Meeting</a></li>	
							<li><a href="view_meeting_letter.php">View Sales Meeting</a></li>	
	

						</ul>
                    </li>-->

                </ul>
			
				
				
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                
                            </div>
							
                        </div>
                        <ul class="navbar-nav header-right">
						
						
						
						
						
						<style>.no-print{
  
  margin-top:35px;
  }</style>
  
		
						
						
						
						
						
						
						<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
						
						
						<style>
						    .sselect option{
						        font-size:1.2em;
						        
						    }
						</style>
						
						
							<li class="nav-item d-flex align-items-center">
								<div style=' width:150px;' class="input-group search-area">
								  
								    <style>
								       
								    </style>
								    
								    
								    
								    
									
									 <select align="center" style=" border-radius:0% !important; font-size:1.2em;" class="sselect form-control">
									     
									
									    <option align="center" value="" selected disabled hidden>View Panels</option>
									     
									     <option  align="center"  value="viewcheck.php">Companies</option></a>
									     
									   
									   
									     <option align="center"  value="viewcheck_customers.php">Customers</option>
   
 
</select> 





<script>




$(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});









    $(".sselect").click(function() {
  var open = $(this).data("isopen");
  if(open) {
    
      if($(this).val()==null)
      {
          
      }
      else{
    window.location.href = $(this).val()
      }
     
  }
  //set isopen to opposite so next time when use clicked select box
  //it wont trigger this event
  $(this).data("isopen", !open);
});
</script>
									
									
									</div>
							</li>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
				
						
							<li class="nav-item d-flex align-items-center">
								<div style=' width:100px;' class="input-group search-area">
									
									 <select style="border-radius:0% !important; font-size:1.2em;" class="form-control notranslate" id="selectBox" onchange="changeFunc();">
   
 
    <option style="font-size:1.2em;" align='center' value="en"><img src="UKflag.png" style="width:5%;">English</option>
    
    <option style="font-size:1.2em;" align='center'  value="ar"><img src="uaeflag.png" style="width:5%;">عربي</option>
    
  <option style="font-size:1.2em; " align='center' value="ru"><img src="russianflag.png" style="width:5%;">  Russian</option>
</select> 
									
									
									</div>
							</li>
					<!--		<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="video/index.php">
									 <i class="fa fa-video-camera"></i>
                                </a>
							</li>	-->
							
						<!--	<li class="nav-item notifications-menu dropdown notification_dropdown">
                               
							   <a class="nav-link" href="#" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#717579"></path>
										<path d="M9.9819 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1838 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.9819Z" fill="#717579"></path>
									</svg>
                                    <span class="badge light text-white bg-warning count rounded-circle"></span>
                                </a>
								
                                
								
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
										<ul class="dropdown-noti-menu menu timeline">
										
										
										
										
										
										
										
										</ul>
										</div>
										</div>
								
								
								
								
								
								
								
								
								
                            </li>
							-->
						
							
						<!--	<li class="nav-item dropdown messages-menu notification_dropdown">
                                <a class="dropdown-toggle2 nav-link bell-link " href="chat/users.php" >
								<svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M27.076 6.24662C26.962 5.48439 26.5787 4.78822 25.9955 4.28434C25.4123 3.78045 24.6679 3.50219 23.8971 3.5H4.10289C3.33217 3.50219 2.58775 3.78045 2.00456 4.28434C1.42137 4.78822 1.03803 5.48439 0.924011 6.24662L14 14.7079L27.076 6.24662Z" fill="#717579"></path>
									<path d="M14.4751 16.485C14.3336 16.5765 14.1686 16.6252 14 16.6252C13.8314 16.6252 13.6664 16.5765 13.5249 16.485L0.875 8.30025V21.2721C0.875926 22.1279 1.2163 22.9484 1.82145 23.5536C2.42659 24.1587 3.24707 24.4991 4.10288 24.5H23.8971C24.7529 24.4991 25.5734 24.1587 26.1786 23.5536C26.7837 22.9484 27.1241 22.1279 27.125 21.2721V8.29938L14.4751 16.485Z" fill="#717579"></path>
								</svg>
									<span class="badge light text-white bg-danger rounded-circle countt"></span>
                                </a>
							</li>	
							-->
							
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="admin/<?php echo $roww['img'];?>" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<!--<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inbox </span>
									</a>-->
									
									
									<a href="logout.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
									
										<a href="profile.php" class="dropdown-item ai-icon">
									<i class="fa fa-user" aria-hidden="true"></i>
										<span class="ms-2">Profile </span>
									</a>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
                    

<?php
  }
}
?>



 <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>



    <script src="vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="js/plugins-init/jquery.validate-init.js"></script>


	<!-- Form Steps -->
	<script src="vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	


	  <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>	










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
 
 
 
 $(document).on('click', '.av-link', function(){
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





















    
		<script>

        $(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 0); 
		});
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'dark';
				new dlabSettings(dlabSettingsOptions);
			},0)
		});
		
	    </script>
		
		
		
		
		
    

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
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ar,ru', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate');
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
				{pageLanguage: '', includedLanguages:'en,ar,ru'},
				'google_translate_element'
			);
		}
	</script>
	
	<script type="text/javascript" src=
"https://translate.google.com/translate_a/element.js?
		cb=googleTranslateElementInit">
	</script>
					
					<!--GOOGLE TRANSLATE END-->
            
          


    