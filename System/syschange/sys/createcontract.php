
  <?php
 session_start();
require_once "db_connection.php";



if (isset($_POST['submit'])) {
	

		
$user = $_POST['user'];
$companyname = $_POST['company'];
$appointment =$_POST['name'];

$date = $_POST['date'];
$time =$_POST['time'];




}
?>



<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'headmain.php';?>
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- Daterange picker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	
    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
	<link href="../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
 <!--*******************
        Preloader start
    ********************-->
   <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
<?php include('header.php');

if(isset($_SESSION['user_id'])=="") {
header("Location: login.php");
}


?>
     <!--**********************************
            Nav header end
        ***********************************-->
   

    		
		<!--**********************************
            Content body start
        ***********************************-->
		 <div class="content-body">

            <div class="container-fluid">
			
			
			
			
			<form id="regForm" action="#" method="post" enctype="multipart/form-data">
			
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Contract</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
								
								
								
								
								
								
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 


	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 
  
 	

 
   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
      

        <!-- Main content -->
        <section class="content">
		
          <div class="row">
		  
		    <!-- form start -->
                <form action="#" method="post">
				
				
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
               
              
				
				
				
				
                  <div class="box-body">
				  
				  
		<label>Country</label>		  
				  
				<select name="country" class='form-control' id="country" class="county">
<option value="0">-- Select Country --</option>
<option value="United States">United States</option>
<option value="Canada">Canada</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua">Antigua</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijani">Azerbaijani</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Netherlands">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia-Hercegovina">Bosnia-Hercegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British IOT">British IOT</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Rep">Central African Rep</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Faeroe Islands">Faeroe Islands</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern">French Southern</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard">Heard</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="MNP">MNP</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="NER">NER</option>
<option value="Netherlands">Netherlands</option>
<option value="Neutral Zone">Neutral Zone</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="North Korea">North Korea</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre">Saint Pierre</option>
<option value="Saint Vincent">Saint Vincent</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Scotland">Scotland</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovak Republic">Slovak Republic</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somali Democratic">Somali Democratic</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia</option>
<option value="South Korea">South Korea</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
<option value="STP">STP</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="TCA">TCA</option>
<option value="Thailand">Thailand</option>
<option value="Toga">Toga</option>
<option value="Togolese">Togolese</option>
<option value="Tokelau">Tokelau</option>
<option value="Tongo">Tongo</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab">United Arab</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Upper Volta">Upper Volta</option>
<option value="Uruguay">Uruguay</option>
<option value="USSR(Former)">USSR(Former)</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="VI, British">VI, British</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, USA">Virgin Islands, USA</option>
<option value="Western Sahara">Western Sahara</option>
<option value="WLF">WLF</option>
<option value="Yemen">Yemen</option>
<option value="Yugoslavia">Yugoslavia</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
					
					
					

</br>
</br>
</br>


                    <!-- textarea -->
					<label>Address</label>
                    <div class="form-group">
                      
                     <p  id="address"> </p>
                    </div>
                   
				   
				   
				
</br>
</br>
   
				   
				   <label>Currency</label>	
				   
				   <select class='form-control' id="currency" name="currency">
    <option>select currency</option>
    <option value="AFN">Afghan Afghani</option>
    <option value="ALL">Albanian Lek</option>
    <option value="DZD">Algerian Dinar</option>
    <option value="AOA">Angolan Kwanza</option>
    <option value="ARS">Argentine Peso</option>
    <option value="AMD">Armenian Dram</option>
    <option value="AWG">Aruban Florin</option>
    <option value="AUD">Australian Dollar</option>
    <option value="AZN">Azerbaijani Manat</option>
    <option value="BSD">Bahamian Dollar</option>
    <option value="BHD">Bahraini Dinar</option>
    <option value="BDT">Bangladeshi Taka</option>
    <option value="BBD">Barbadian Dollar</option>
    <option value="BYR">Belarusian Ruble</option>
    <option value="BEF">Belgian Franc</option>
    <option value="BZD">Belize Dollar</option>
    <option value="BMD">Bermudan Dollar</option>
    <option value="BTN">Bhutanese Ngultrum</option>
    <option value="BTC">Bitcoin</option>
    <option value="BOB">Bolivian Boliviano</option>
    <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
    <option value="BWP">Botswanan Pula</option>
    <option value="BRL">Brazilian Real</option>
    <option value="GBP">British Pound Sterling</option>
    <option value="BND">Brunei Dollar</option>
    <option value="BGN">Bulgarian Lev</option>
    <option value="BIF">Burundian Franc</option>
    <option value="KHR">Cambodian Riel</option>
    <option value="CAD">Canadian Dollar</option>
    <option value="CVE">Cape Verdean Escudo</option>
    <option value="KYD">Cayman Islands Dollar</option>
    <option value="XOF">CFA Franc BCEAO</option>
    <option value="XAF">CFA Franc BEAC</option>
    <option value="XPF">CFP Franc</option>
    <option value="CLP">Chilean Peso</option>
    <option value="CNY">Chinese Yuan</option>
    <option value="COP">Colombian Peso</option>
    <option value="KMF">Comorian Franc</option>
    <option value="CDF">Congolese Franc</option>
    <option value="CRC">Costa Rican ColÃ³n</option>
    <option value="HRK">Croatian Kuna</option>
    <option value="CUC">Cuban Convertible Peso</option>
    <option value="CZK">Czech Republic Koruna</option>
    <option value="DKK">Danish Krone</option>
    <option value="DJF">Djiboutian Franc</option>
    <option value="DOP">Dominican Peso</option>
    <option value="XCD">East Caribbean Dollar</option>
    <option value="EGP">Egyptian Pound</option>
    <option value="ERN">Eritrean Nakfa</option>
    <option value="EEK">Estonian Kroon</option>
    <option value="ETB">Ethiopian Birr</option>
    <option value="EUR">Euro</option>
    <option value="FKP">Falkland Islands Pound</option>
    <option value="FJD">Fijian Dollar</option>
    <option value="GMD">Gambian Dalasi</option>
    <option value="GEL">Georgian Lari</option>
    <option value="DEM">German Mark</option>
    <option value="GHS">Ghanaian Cedi</option>
    <option value="GIP">Gibraltar Pound</option>
    <option value="GRD">Greek Drachma</option>
    <option value="GTQ">Guatemalan Quetzal</option>
    <option value="GNF">Guinean Franc</option>
    <option value="GYD">Guyanaese Dollar</option>
    <option value="HTG">Haitian Gourde</option>
    <option value="HNL">Honduran Lempira</option>
    <option value="HKD">Hong Kong Dollar</option>
    <option value="HUF">Hungarian Forint</option>
    <option value="ISK">Icelandic KrÃ³na</option>
    <option value="INR">Indian Rupee</option>
    <option value="IDR">Indonesian Rupiah</option>
    <option value="IRR">Iranian Rial</option>
    <option value="IQD">Iraqi Dinar</option>
    <option value="ILS">Israeli New Sheqel</option>
    <option value="ITL">Italian Lira</option>
    <option value="JMD">Jamaican Dollar</option>
    <option value="JPY">Japanese Yen</option>
    <option value="JOD">Jordanian Dinar</option>
    <option value="KZT">Kazakhstani Tenge</option>
    <option value="KES">Kenyan Shilling</option>
    <option value="KWD">Kuwaiti Dinar</option>
    <option value="KGS">Kyrgystani Som</option>
    <option value="LAK">Laotian Kip</option>
    <option value="LVL">Latvian Lats</option>
    <option value="LBP">Lebanese Pound</option>
    <option value="LSL">Lesotho Loti</option>
    <option value="LRD">Liberian Dollar</option>
    <option value="LYD">Libyan Dinar</option>
    <option value="LTL">Lithuanian Litas</option>
    <option value="MOP">Macanese Pataca</option>
    <option value="MKD">Macedonian Denar</option>
    <option value="MGA">Malagasy Ariary</option>
    <option value="MWK">Malawian Kwacha</option>
    <option value="MYR">Malaysian Ringgit</option>
    <option value="MVR">Maldivian Rufiyaa</option>
    <option value="MRO">Mauritanian Ouguiya</option>
    <option value="MUR">Mauritian Rupee</option>
    <option value="MXN">Mexican Peso</option>
    <option value="MDL">Moldovan Leu</option>
    <option value="MNT">Mongolian Tugrik</option>
    <option value="MAD">Moroccan Dirham</option>
    <option value="MZM">Mozambican Metical</option>
    <option value="MMK">Myanmar Kyat</option>
    <option value="NAD">Namibian Dollar</option>
    <option value="NPR">Nepalese Rupee</option>
    <option value="ANG">Netherlands Antillean Guilder</option>
    <option value="TWD">New Taiwan Dollar</option>
    <option value="NZD">New Zealand Dollar</option>
    <option value="NIO">Nicaraguan CÃ³rdoba</option>
    <option value="NGN">Nigerian Naira</option>
    <option value="KPW">North Korean Won</option>
    <option value="NOK">Norwegian Krone</option>
    <option value="OMR">Omani Rial</option>
    <option value="PKR">Pakistani Rupee</option>
    <option value="PAB">Panamanian Balboa</option>
    <option value="PGK">Papua New Guinean Kina</option>
    <option value="PYG">Paraguayan Guarani</option>
    <option value="PEN">Peruvian Nuevo Sol</option>
    <option value="PHP">Philippine Peso</option>
    <option value="PLN">Polish Zloty</option>
    <option value="QAR">Qatari Rial</option>
    <option value="RON">Romanian Leu</option>
    <option value="RUB">Russian Ruble</option>
    <option value="RWF">Rwandan Franc</option>
    <option value="SVC">Salvadoran ColÃ³n</option>
    <option value="WST">Samoan Tala</option>
    <option value="SAR">Saudi Riyal</option>
    <option value="RSD">Serbian Dinar</option>
    <option value="SCR">Seychellois Rupee</option>
    <option value="SLL">Sierra Leonean Leone</option>
    <option value="SGD">Singapore Dollar</option>
    <option value="SKK">Slovak Koruna</option>
    <option value="SBD">Solomon Islands Dollar</option>
    <option value="SOS">Somali Shilling</option>
    <option value="ZAR">South African Rand</option>
    <option value="KRW">South Korean Won</option>
    <option value="XDR">Special Drawing Rights</option>
    <option value="LKR">Sri Lankan Rupee</option>
    <option value="SHP">St. Helena Pound</option>
    <option value="SDG">Sudanese Pound</option>
    <option value="SRD">Surinamese Dollar</option>
    <option value="SZL">Swazi Lilangeni</option>
    <option value="SEK">Swedish Krona</option>
    <option value="CHF">Swiss Franc</option>
    <option value="SYP">Syrian Pound</option>
    <option value="STD">São Tomé and Príncipe Dobra</option>
    <option value="TJS">Tajikistani Somoni</option>
    <option value="TZS">Tanzanian Shilling</option>
    <option value="THB">Thai Baht</option>
    <option value="TOP">Tongan pa'anga</option>
    <option value="TTD">Trinidad & Tobago Dollar</option>
    <option value="TND">Tunisian Dinar</option>
    <option value="TRY">Turkish Lira</option>
    <option value="TMT">Turkmenistani Manat</option>
    <option value="UGX">Ugandan Shilling</option>
    <option value="UAH">Ukrainian Hryvnia</option>
    <option value="AED">United Arab Emirates Dirham</option>
    <option value="UYU">Uruguayan Peso</option>
    <option value="USD">US Dollar</option>
    <option value="UZS">Uzbekistan Som</option>
    <option value="VUV">Vanuatu Vatu</option>
    <option value="VEF">Venezuelan BolÃ­var</option>
    <option value="VND">Vietnamese Dong</option>
    <option value="YER">Yemeni Rial</option>
    <option value="ZMK">Zambian Kwacha</option>
</select>

			
</br>
</br>
	   
				   
				   
				   

  <div class="form-group">
                      <label>Client Address</label>
                      <input required  type="text" id="clientaddress" class="form-control"/>
                    </div>
					
						   

  <div class="form-group">
                      <label>Client City</label>
                      <input required  type="text" id="clientcity" class="form-control"/>
                    </div>
					
						   

  <div class="form-group">
                      <label>Client PO Box</label>
                      <input required  type="text" id="clientpobox" class="form-control"/>
                    </div>
					
					
					
  <div class="form-group">
                      <label>Client Phone</label>
                      <input required  type="number" id="clientphone" class="form-control"/>
                    </div>
					
				   


  <div class="form-group">
                      <label>Client Email</label>
                      <input required  type="email" id="clientemail" class="form-control"/>
                    </div>
					
					
					
  <div class="form-group">
                      <label>Contract Start Date</label>
                      <input required  type="date" id="contractstartdate"name="contractstartdate" class="form-control"/>
                    </div>




  <div class="form-group">
                      <label>Contract End Date</label>
                      <input required  type="date" id="contractenddate" name="contractenddate" class="form-control"/>
                    </div>








  <div class="form-group">
                      <label>Raise Invoice For</label>
                      <input required  type="text" name="invoicefor" class="form-control"/>
                    </div>


</br>
</br>

<label>Payable By</label>
<select class='form-control' required name="payableby">
<option>Select Payment</option>
<option>PayPal</option>
<option>CreditCard</option>
</select>


</br>
</br>



  <div class="form-group">
                      <label>Payable Amount</label>
                      <input required  type="number" name="payableamount" class="form-control"/>
                    </div>



  <div class="form-group">
                      <label>System Fee</label>
                      <input required  type="number" name="systemfee" class="form-control"/>
                    </div>



  <div class="form-group">
                      <label>Per Transaction Fee</label>
                      <input required  type="number" name="pertransactionfee" class="form-control"/>
                    </div>


  <div class="form-group">
                      <label>Client Requires Online Access?</label>
                      <input required  type="text" name="onlineaccess" class="form-control"/>
                    </div>



</br>
</br>


<label>Per Transaction Fee Type</label>
<select  class='form-control' id="paymenttype" required name="payableby">
<option>Select Payment</option>
<option>A</option>
<option>B</option>
</select>

</br>
</br>


<!--



					<label>Scope of Work</label>
                    <div class="form-group">
                      
                     <p id="scope"> </p>
                    </div>
                   





					<label>Partnership Inclusions</label>
                    <div class="form-group">
                      
                     <p id="partnerinclusions">
					 
					 </p>
                    </div>





					<label>Partnership Benefits</label>
                    <div class="form-group">
                      
                     <p id="partnerbenefits">
					 
					 </p>
                    </div>






					<label>Terms and Conditions</label>
                    <div class="form-group">
                      
                     <p id="termsconditions">
					 
					 </p>
                    </div>



					<label>Financial Obligations</label>
                    <div class="form-group">
                      
                     <p id="financialobligations">
					 
					 </p>
                    </div>




					<label>Cancellation and Performance Review</label>
                    <div class="form-group">
                      
                     <p id="cancelper">
					 
					 </p>
                    </div>



					<label>Commitments / Contracts</label>
                    <div class="form-group">
                      
                     <p id="comcon">
					 
					 </p>
                    </div>





					<label>Representation Company</label>
                    <div class="form-group">
                      
                     <p id="repcomp">
					 
					 </p>
                    </div>


-->






 <div class="box-footer">
                 
                    <input style="float:left;"type="button" id="repp" value="Print Secondary Contract" class="btn btn-primary btn-sm btn_print_secondary">
                 
                 
                    <input style="float:right;"type="button" id="rep" value="Print Franchise Contract" class="btn btn-primary btn-sm btn_print">
                  </div>


</br>
</br></br>
</br>
</br>
</br>
</br>
</br>

<style>

	.invoice-box {
		max-width: 800px;
		margin: auto;
		padding: 30px;
		border: 1px solid #eee;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
		font-size: 16px;
		line-height: 24px;
		font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		color: #555;
	}

	.invoice-box table {
		width: 100%;
		line-height: inherit;
		text-align: left;
	}

	.invoice-box table td {
		padding: 5px;
		vertical-align: top;
	}

	.invoice-box table tr td:nth-child(2) {
		text-align: left;
	}

	.invoice-box table tr.top table td {
		padding-bottom: 20px;
	}

	.invoice-box table tr.top table td.title {
		font-size: 45px;
		line-height: 45px;
		color: #333;
	}

	.invoice-box table tr.information table td {
		padding-bottom: 40px;
	}

	.invoice-box table tr.heading td {
		background: #eee;
		border-bottom: 1px solid #ddd;
		font-weight: bold;
	}

	.invoice-box table tr.details td {
		padding-bottom: 20px;
	}

	.invoice-box table tr.item td {
		border-bottom: 1px solid #eee;
	}

	.invoice-box table tr.item.last td {
		border-bottom: none;
	}

	.invoice-box table tr.total td:nth-child(2) {
		border-top: 2px solid #eee;
		font-weight: bold;
	}

	@media only screen and (max-width: 600px) {
		.invoice-box table tr.top table td {
			width: 100%;
			display: block;
			text-align: center;
		}

		.invoice-box table tr.information table td {
			width: 100%;
			display: block;
			text-align: center;
		}
	}

	/** RTL **/
	.invoice-box.rtl {
		direction: rtl;
		font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
	}

	.invoice-box.rtl table {
		text-align: right;
	}

	.invoice-box.rtl table tr td:nth-child(2) {
		text-align: left;
	}


		
</style>







   <!-- textarea -->
					<label>Full Contract</label>
                    <div class="form-group">
                      
                  <p id="new">
			
			</p>
			
                    </div>










   <!-- textarea -->
					<label>Full Secondary Contract</label>
                    <div class="form-group">
                      
                  <p id="all">
			
			</p>
			
                    </div>


	




<script>



jQuery(document).ready(function($) {
	
	
	var	compy="";
	var compyy="";
	var compyyy="";
	var trm="";
	var fo="";
	var canper="";
	var cmcn="";
	
var bankdetails="";
var sdate="";
var edate="";
var conf="";	
var conag="";	
var remarks="";	
var law="<b>XIII.          Law Governing Contract and Legal Expenses:</b> </br></br> 1. This Contract shall be governed by and construed in accordance with the laws of Dubai, UAE </br></br> 2. If any provision in this Contract is held by a court of competent jurisdiction to be invalid, void, or unenforceable, the remaining provisions shall nevertheless continue in full force without being impaired or invalidated in any way. </br> </br> 3. The prevailing Party in any legal action arising out of this Agreement shall be entitled, in addition to any other rights and remedies it may have, to reimbursement for its expenses, including court costs and reasonable attorneys and experts fees and costs.";		 
var witness="IN WITNESS WHEREOF, the parties have executed this Contract on the date indicated below: </br> </br> </br> </br>";	
	
var rpcm="<b>IV.            Representation Companies on commission basis:</b> </br> </br> 1. Miracle Adventure Tourism LLC – Dubai, UAE (1% FIT, 2% Groups and MICE) </br> </br> 2. Al Ruwad Real Estate LLC – Dubai, UAE (15% commission on sales referral (UAE Real Estate broker) </br> </br> 3. Business Platform LLC – Dubai, UAE (15% on sales referral (UAE business setup and sponsorships)</br> </br>";

$('#repcomp').html(rpcm);

	


var ptben="<b>VI.            Partner Benefits:</b> </br> </br> 1. Global network representation</br> </br> 2. Partner referral and reward solutions</br> </br> 3. Pre-structured business module ( All general contracts available online )</br> </br> 4. TS – Online system access with cash generation options</br> </br> 5. 30% of booking fee (1 – 10 $ per booking ( per stay ) from the client)</br> </br> 6. 25% of system charge from DMC monthly fee</br> </br> 7. 40% of advertising fees</br> </br> 8. 30% of booking fee through partner network generation</br> </br> 9. 25% of Data Entry charges (Contracting and setting up accounts)</br> </br> 10. Online Sales Report generation (Client monthly report)</br> </br> 11. Financial reports and cash forecasts of incoming bookings and etc.</br> </br>";

$('#partnerbenefits').html(ptben);



var compyyyy="<b>V.             TS – Partnership inclusions:</b> </br> </br> 1. Right to use Travel Synergies logo and trade mark </br> </br> 2. Built in partnership commission structure </br> </br> 3. Maintenance of the TS – Online booking engine </br> </br> 4. Access to the TS – Admin panel </br> </br> 5. Hosting and maintaining of the company website incl. a page for each TS-Partner office </br> </br> 6. Head office support </br> </br> 7. 2 x t-synergies.com email accounts </br> </br> 8. Country specific website and general updates the same i.e ( www.ru.t-synergies.com ) </br> </br> 9. Company collateral ( letterhead, e-signature, partner contracts ) </br> </br> 10. Online Sales Report generation </br> </br> 11. Admin panel to control and monitor due fees from clients as well as future bookings in the pipeline. </br> </br> 12. Group Finance and accounting module ( Squallb%ks ) </br> </br>" ;
	
	
	
	$('#partnerinclusions').html(compyyyy);
	
	
	
	
	
	
	
	
	
	 $("#paymenttype").on('change', function() {
		 
		 sdate=$("#contractstartdate").val();
		 edate=$("#contractenddate").val();
		 clientaddress=$("#clientaddress").val();
		 clientphone=$("#clientphone").val();
		 clientemail=$("#clientemail").val();
		 clientcity=$("#clientcity").val();
		 clientpobox=$("#clientpobox").val();
	
	var yearss = new Date(new Date(edate) - new Date(sdate)).getFullYear() - 1970;
	
	var date1 = new Date(sdate);
	var date2 = new Date(edate);

var m1=date1.getMonth()+1;

var m2=date2.getMonth()+1;
var monthss=(m2-m1)+1;

	
var newcontract="<h4 align='center'><b>Travel Synergies Franchisee Contract</b></h4></br></br></br></br>This Contract is entered into between Travel Synergies Head Office, hereafter (referred to as TS-HO) and Travel Group Dolores – <b>"+compy+"</b>, the Destination Marketing Service corporation in <b>"+compy+"</b> (hereafter referred to as <b>“TS -"+compy+"”</b>). Upon the terms and conditions of the Contract, the Franchisor hereby grants to the Franchisee the exclusive license to use the Travel Synergies Business System for the term specified in the Contract and the rights to use including without limitation:</br></br><div class='invoice-box'><table cellpadding='0' cellspacing='0' ><tr class='information'><td colspan='2'><table><tr><td><b>Between:</b></br>Travel Synergies Head Office<br />1603, Nassima Towers,<br />Sheikh Zayed Road,<br/>Dubai, UAE<br/>Tel +971 4 5911244<br/>E-mail: md@t-synergies.com</td><td><b>And:</b> </br>Travel Group - Dolores<br />"+clientaddress+",<br />"+clientcity+" "+clientpobox+",<br/>"+compy+"<br/>Tel : "+clientphone+"<br/>E-mail: "+clientemail+"</td></tr></table></td></tr></table></div></br></br><b>1. Containment of Entire Agreement Herein:</b></br>This contract supersedes any and all other agreements, either oral or in writing, between the parties hereto with respect to the services to be provided by TS-HO and payments to be provided by <b>TS-"+compy+"</b>. This Contract contains all of the covenants and agreements between the parties. Each party to this Contract acknowledges that no representations, inducements, promises, or agreements, made orally or otherwise, have been made by any party, or anyone acting on behalf of any party, which are not embodied herein, and that no other agreement will be effective unless it is in writing signed by the party to be changed.</br></br><b>2. Agreement Term:</b></br>The contracted terms apply for a period of "+yearss+" years ("+monthss+" months), commencing on "+sdate+" and terminating on "+edate+", if not determined otherwise.</br></br><b>3. Territory</b></br> The territory for purpose of this agreement with regards to Sales and Marketing of products and services shall be limited to the territory of “"+compy+"”</br></br><b>4. Franchisor Commitments</b></br>System is granted under the relevant contracts and agreements.</br></br>I. Right to use Travel Synergies logo and trade mark</br>II. Built in partnership commission structure</br>III. Hosting and maintaining of the company website incl. a page for each TS-Partner office</br>IV. Head office support in terms of limited Marketing, Documentation, Sales Support</br>V. 2 x t-synergies.com email accounts</br>VI. Country specific website and general updates</br>VII. Company collateral (letterhead, e-signature, partner contracts, brand guidelines and materials: Newsletters, emailers etc.)</br>VIII. Online Sales Report generation</br>IX. Admin panel to control and monitor due fees from clients as well as future bookings in the pipeline. </br></br><b>The Right to:</b> Trademark, Service mark, Commercial designation, Secrets of operational know-how.</br>Franchisee agrees that the above is the Franchisor’s property, and to the extent same is “intellectual property”, that is protected in accordance with the current international legislation of the UAE.</br></br>The Franchisee has the right to use Travel Synergies Business System solely for the purpose of opening and operating the company and providing services in the manner and conditions stipulated in the Contract.</br></br><b>5. Assignment</br>TS-"+compy+",</b> shall provide Sales/Marketing and Public Relations services and support within the territory to their clients. Services shall include, but will not be limited to the following: </br></br>I. Implement the mutually agreed sales/marketing and promotional/public relations activities (based on brand guidelines and determined market strategy) </br>II. Prepare sales/marketing, public relations and promotional recommendations that will be used to develop and promote their Clients within the Destination with TS-HO approval.</br>III. Conduct programs to publicize and promote to TO’s, TA’s, direct clients from the market to the Client.</br>IV. Advise the Client on travel trade, media trends and developments within the territory, with the possibility to impact the number of guests to The Client.</br>V. Provide market intelligence on Clients current market position i.e., rates, competitor sets an etc.</br>VI. Conduct regular media “sales calls” each month in their market.</br>VII. Submit a monthly activity report, in English, detailing the activities conducted by TS-"+compy+" on behalf of their clients.</br>VIII. Additional duties may be agreed to through contract amendments or charge orders to be prepared and agreed in advance between the Client and TS-HO.</br></br><b>6. Franchisee Commitments/Contracts:</b></br>I. The Franchisee, will obtain TS-HO approval before entering into any contract or making any commitments with a third party on TS-HO behalf.</br>II. The Franchisee shall provide TS-HO with a copy of all written contracts in such manner as mutually agreed.</br>III. The Franchisee undertakes and agrees to use Travel Synergies Business System solely for the purposes related to the activities of the company and the provision of services under Travel Synergies brand, in strict compliance with the provisions of the Contract, instructions and recommendations of the Franchisor, as well as the requirements of the current legislation or regulations of the country and/or local jurisdiction in which the company is located and will operate.</br>IV. To ensure the functioning of the company and provide services under the Travel Synergies brand in accordance with the requirements and established standards of Travel Synergies Business System.</br>V. To keep all information received from the Franchisor confidential. In this case the Franchisee shall enter into an agreement with each employee of the company on non-disclosure of confidential information, which constitutes any part of the Travel Synergies Business System and/or has become known to the Franchisee in connection with its business activities.</br>VI. To recognize, not contest and not restrict the exclusive rights of the Franchisor to the Travel Synergies Business System and immediately inform the Franchisor of the fact of any contesting, misappropriation, restriction or unauthorized use by third parties of the exclusive rights of the Franchisor to the Travel Synergies Business System during the entire term of the Contract.</br>VII. Not to grant to third parties the right to use the Travel Synergies Business System in business activities, including by signing sublicense or sub franchise agreements with third parties, which are absolutely <b>prohibited and if such activities arise, further legal actions will be taken forward in terms of breach of contract and all terms included</b>.</br>VIII. To pay in full and on time all Fees payable to the Franchisor under the Contract.</br>IX. To follow all updates and timely inform Personnel about changes and additions to the Travel Synergies Business System.</br>X. To attend all meetings, training and other events organized by the Franchisor.</br>XI. To submit financial reports requested by the Franchisor. To ensure the quality of the operation, effective marketing and promotion in social networks, daily management and compliance with service standards, systematized and transparent management accounting for the effective use of the Travel Synergies Business System in the course of business activities, as well as compliance with the current legislation or regulations of the country and/or local jurisdiction in which the company is located and will operate.</br>XII. The Franchisor has the right:</br>To check the compliance of the Franchisee with the terms and conditions of the Contract and demand that the quality of services provided under the Travel Synergies brand meets the requirements and established standards of the Travel Synergies System and this Contract.</br>XIII. The Franchisor undertakes and agrees to transmit to the Franchisee, the information and materials that make up the Travel Synergies Business System and that are necessary for the Franchisee to exercise its rights under the Contract, within 3 (three) working days provided that the Franchisee meets the conditions specified in the Contract.</br></br><b>6.1 Hiring of employees:</b></br>I. The Franchisor shall provide the Franchisee with recommendations and requirements for the selection of the Personnel, including qualification requirements and instructions for the job duties of the Personnel.</br>II. The Personnel shall be staffed in accordance with the requirements of the Franchisor.</br>III. Each employee of the company shall mandatorily participate in and successfully conclude the appropriate training on Travel Synergies Business System.</br>IV. The Franchisee undertakes to acquaint Personnel member with the requirements of Travel Synergies Business System including without limitation:</br>V. The list of services provided by company under the Travel Synergies brand; methods and standards of service; the established rules and requirements of the Franchisor.</br>VI. The Franchisee shall at its expense provide 2 uniforms to each employee. When the uniforms are old, damaged or not presentable as to brand standards they may be turned in and replaced with new ones.</br>VII. The Franchisee shall have the right, by agreement with the Franchisor, independently and/or with third parties, conduct training of the Personnel in the company and according to the programs agreed with the Franchisor.</br></br><b>7. Marketing Support</b></br>I. At the Opening and the Start Date of the company, the Franchisee undertakes to conduct an advertising campaign, as well as to place internal and external advertising of the company in accordance with the instructions and recommendations of the Franchisor.</br>II. The plan of advertising activities shall be developed by the Franchisee in agreement with the Franchisor. The Franchisor directly provides and/or approves materials prepared by the Franchisee aimed at advertising of the company and services under the Travel Synergies brand.</br>III. The Franchisee not less than 10 (ten) calendar days before the expected moment of implementation and use of the promotional materials prepared by them undertakes to submit for approval the Franchisor all samples of promotional materials, including sketches and detailed description of the procedure for use of such materials, unless otherwise agreed by the Parties.</br>IV. Within 3 (three) to 5 (five) business days of receipt the Franchisor undertakes to review the advertising materials submitted by the Franchisee and provide its written consent or reasoned refusal of use.</br>V. The Franchisee undertakes to ensure the safety, serviceability, and appropriate appearance, based on brand standards, of any advertising material of the company as well as to perform at its own expense all necessary actions related to the implementation.</br>VI. The Franchisee undertakes to cooperate with and assist the Franchisor in holding press conferences, interviews, photo and video shoots, including those of an advertising nature, giving comments, explanations and conducting PR-actions.</br>VII. The Franchisee may not prepare and publish its own publications in printed and electronic form, including on the internet and in mass media, related to the methods of Travel Synergies Business System, unless otherwise agreed in writing by the Franchisor.</br></br><b>8. Selling / Transferring of Franchise</b></br>TS-"+compy+" may sell or transfer the franchise with prior written and approved notice from TS-HO. TS-HO reserves the right to deny any selling or transferring of ownership of the franchise location for any reason.</br></br><b>9. Sales and Marketing actions</b></br>To evaluate the activities of the Franchisee, including inspection of the activities of the company for compliance with the requirements and established standards of the Travel Synergies Business System without significant interference in the business activities of the Franchisee during the entire term of the Contract.</br></br>To ensure legal protection of the trademark and service mark of the Travel Synergies brand and the Travel Synergies Business System when receiving information from the Franchisee about their illegal use by third parties.</br></br>To notify the Franchisee of changes in the prices of branded consumables of the Travel Synergies brand and document the expediency of such changes at least 15 (fifteen) calendar days before making the appropriate changes.</br></br>For the use of the Business System Travel Synergies the Franchisee undertakes to pay to the Franchisor the established amount of the Franchise Fees.</br></br><b>10. Terms and Conditions:</b>I. Services must be provided in a professional manner conforming to generally accepted marketing/promotion practices generally answers must be made within a 24 hours’ time span.</br>II. Any amendments to the partner contracts, must be pre-approved by TS-HO.</br>III. TS-"+compy+", shall comply in good faith with the terms of this Agreement and shall indemnify, defend and hold TS-HO, harmless from and against any cost, liability or expense, including attorney’s fees, arising from any claimed rights of third parties, which would constitute a breach of contract.</br></br><b>11. Financial Obligations and Partnership fees:</b>I. This Contract amount agreed and accepted is for USD 10,000 as a joining fee and USD 24,000 per Calendar year annually as the franchise fee.</br><u>Payment schedule :</u></br><b>Joining Fee:</b>USD 10.000 joining fee is payable immediately along with signing of this contract</br><b><u>Franchise Fee:</u></b></br><b>USD 24,000 is payable in 3 equal payments as follows:</b></br>1st Payment         USD 8,000 is payable immediately along with the joining fees</br>2nd Payment          USD 8,000 is payable after 1 month of first payment</br>3rd Payment          USD 8,000 is payable after 2 months of first payment</br></br>II. TS-HO shall submit at the beginning of every contracted month an invoice to <b>TS-"+compy+"</b> raised in USD for any commissions and fees payable to <b>TS-"+compy+"</b>.</br>III. <b>TS-"+compy+"</b> will make payment to TS-HO in USD by wire transfer within fifteen (15) days from the date on which the invoice is received. Payment will be made in full with all necessary bank charges associated with the transfer.</br></br>IV. <b>Royalty Fees:</b></br>The Franchise will pay monthly 5% of the gross revenue generated.</br>The Franchise will pay monthly 5% of the gross revenue generated.</br></br>V. Payments to be transferred to the following bank account:</br>VI. Past due payments shall accrue interest at the rate of 3% per month.</br>VII. In case of early termination of the Contract on the initiative of the Franchisee and after transfer of information and materials, which constitute the Travel Synergies Business System and trade secrets of the Franchisor, for any reason, the Initial Fee shall not be refunded to the Franchisee</br></br><b>Emirates NBD</b></br>Business Bay, Dubai, UAE (Business Banking AQZ)</br>Dubai, United Arab Emirates</br><div class='invoice-box'><table cellpadding='0' cellspacing='0' ><tr class='information'><td colspan='2'><table><tr><td><b>Account Name</b><br /><b>Account No</b><br /><b>IBAN</b><br/><b>Swift Code</b><br/>Telephone No</td><td>S J GLOKAL OIL TRADING L.L.C<br />102568673120<br />USD AE36026000102568673120<br/>EBILAEAD<br/>+971 43 556 444</td></tr></table></td></tr></table></div></br>The obligations of the Franchisee to pay the Franchise Fees shall be deemed to have been fulfilled from the moment the funds are credited to the Franchisor’s current bank account.</br>Each of the Parties shall pay the taxes and fees to be paid in accordance with the current legislation or regulations of the country and/or local jurisdiction in which the company is located and will operate in connection with the execution and the performance of the Contract.</br></br><b>12. Franchise Fee Terms</b></br>The Franchisor has the right to increase the amount of the Franchise Fees taking into account the inflation level in accordance with the current economic situation. Such change shall apply only to future Franchise Fees payable by the Franchisee and shall take effect 30 (thirty) calendar days after the Franchisor has notified the Franchisee of such increase.</br>The Franchisee confirms and recognizes that the Franchise Fees under the Contract are reasonable and non-refundable regardless of the economic or other results of the company activity.</br></br><b>13. Special Projects and Events</b></br>From time-to-time TS – HO will strive to acquire special projects i.e., sales rights for The FIFA World Cup Qatar 2022, Such projects will have its own contractual addendums. In this instance TS-HO will facilitate the appointment of TS–"+compy+" as the officially appointed “Exclusive Agent”</br></br><b>14. Cancellation/Performance Review:</b></br>I. In the event the Franchisor does not give the Franchisee a written notice of its unwillingness to renew the Contract not later than 60 (sixty) days before the expiration of the term of the Contract, or any extended term of the Contract, the validity of the Contract shall be automatically extended for 1 (one) year. The term of the Contract, including each such one-year renewal, is limited to a total of 5 (five) years from the Effective date. Upon expiration any of the term or any extended term, the Contract shall be automatically terminated without any notice.</br>II. The Franchisee shall reply to all requests of the Franchisor, to agree and approve all matters concerning the functioning of the company and provision of services under the “Travel Synergies” brand according to the provisions of the Contract, not later than 5 (five) working days from any such request.</br>III. Either TS-HO or TS-"+compy+", may give the other party notice of cancellation of this agreement in writing, with termination taking effect three months from the date of notice. In such a case, TS-"+compy+", shall pay TS–HO any outstanding balance of fees due through to the termination of the agreement. </br>IV. In the event this agreement is cancelled by either party for whatsoever reason. The logo and trademark of Travel Synergies and all its co-existing rights belong to TS-HO. TS-"+compy+", has no right or claim towards the same and must relinquish any and all such properties within 2 weeks of such notice.</br>V. In the event of non-payment, continuous service lapses, Breach of contract due to negligence or harm to the TS brand will be construed as a reason for termination. In this event TS-"+compy+", has to provide acceptable reasons for the occurrence in order to continue said partnership within 48 hours.</br>VI. If the Franchisee does not fulfill its obligations under the Contract and/or if the Franchisee materially violates the terms and conditions of the Contract, the Franchisor shall have the right to.</br>VII. Failure by the Franchisee to fulfill a specified contractual obligation or to eliminate any breach of the Contract within the period of time set by the Franchisor to fulfill a certain obligation and/or to eliminate the breach of the Contract.</br>VIII. Refusal without satisfactory cause by the Franchisee to participate in Internships, meetings and/or other events held by the Franchisor in accordance with the terms and conditions of the Contract.</br>IX. Obstruction of the representatives of the Franchisor, who evaluate the activity of the Franchisee, if such obstruction makes it impossible to obtain reliable data on the activity of the Franchisee and its compliance with the terms and conditions of the Contract.</br>X. Actions by the Franchisee without the Franchisor’s consent, approval or other prior authorization if the Franchisee’s actions under the Contract require such consent, approval or other prior authorization by the Franchisor.</br></br><b>16. Confidentiality</b></br>Both Parties agree that each Party will not disclose to others; or take or use for its own purposes or purposes of others any confidential information of the other Party, such as terms of the contract, marketing plans, contacts etc... Confidential Information means all information of any nature that is made available by either TS-HO or TS-"+compy+".</br>This obligation shall survive termination or expiration of this Agreement (regardless of the reason for such expiration or termination) during the entire term of validity of the Contract, as well as within 5 (five) years after termination of the Contract.</br></br><b>17. Law Governing Contract and Legal Expenses:</b></br>I. This Contract shall be governed by and construed in accordance with the laws of Dubai, UAE </br>II. If any provision in this Contract is held by a court of competent jurisdiction to be invalid, void, or unenforceable, the remaining provisions shall nevertheless continue in full force without being impaired or invalidated in any way.</br>III. The prevailing Party in any legal action arising out of this Agreement shall be entitled, in addition to any other rights and remedies it may have, to reimbursement for its expenses, including court costs and reasonable attorneys and expert fees and costs.</br></br><b>18. Force Majeure</b></br>Neither Party shall be liable before the other Party for failure to fulfill its obligations caused by circumstances beyond the will and desire of the Parties that could not have been foreseen or avoided, including declared or actual war, civil unrest, epidemics, earthquakes, floods, fires and other natural disasters, actions of state or municipal authorities and other insurmountable circumstances, if such Party claiming the occurrence of a force majeure event can reasonably demonstrate such force majeure event conclusively prevented such Party from fulfilling its obligations under the Contract.</br>The Party that fails to fulfill its obligations as a result of force majeure event shall notify the other Party in writing about the obstacle and its impact on the fulfillment of obligations without delay, but not later than 5 (five) days after the occurrence of the aforementioned circumstances.</br>The notice shall contain detailed characteristics of the circumstances allegedly causing the inability of such Party to fulfill its obligations as a result of a force majeure event, as well as measures taken by the Party to eliminate the consequences of such circumstances.</br>The Party that has not notified the other Party of its inability to fulfill its obligations under the Contract shall lose the right to refer to such inability.</br>If the above circumstances allegedly constituting a force majeure event, as demonstrated by such Party, last more than 60 (sixty) consecutive days, the Party alleging the force majeure event shall have the right to refuse further performance of its obligations under the Contract. In this case, neither of the Parties shall have the right to claim damages from the other Party.</br>In this case, the Contract shall be terminated with the mutual settlement of accounts of the Parties for the actually fulfilled obligations under the Contract.</br></br><b>19. Special conditions</b></br>The Franchisee hereby certifies that it/he/she has duly examined all opportunities and risks of business activities for the provision of services and activities of company under the Travel Synergies brand under the Contract. The Franchisee acknowledges that the success and profitability of the company depends on the abilities and capabilities of the Franchisee.</br>The Franchisee acknowledges and agrees that the activities of the company involve risks, including without limitation:</br><p align='center'>business seasonality</br>Personnel departure, including the transition to competitors</br>changes in the legislation governing the activities of the Franchisee</p></br>The Franchisor hereby makes no warranties, either express or implied, as to the possible results of the work and success of the Franchisee, and the Franchisee acknowledges and accepts this fact.</br>The Franchisee hereby confirms that it/he/she has read all the terms and conditions and has understood the contents of the Contract. The Franchisee hereby acknowledges that it/he/she has had sufficient time and opportunity to seek and obtain advice on the potential benefits and possible risks associated with the execution and performance of the Contract.</br>The Franchisee also confirms that it/he/she is duly qualified to carry out business activities under the Contract and that if an entity has been properly established and that it/he/she is operating in accordancewith the requirements of the laws of the country of formation and/or residence.</br>All rights and information provided by the Franchisor to the Franchisee under the Contract shall apply to the operation of the Café, and the Travel Synergies Business System shall be exclusively used for the operation of such company in the manner and under the conditions stipulated by the Contract. The use of the company for any purpose or utilization of any system or procedure in the company other than Travel Synergies Business System as set forth in the manner and under the conditions stipulated by the Contract shall constitute a violation of the Contract.</br>The Franchisee hereby guarantees that during the term of the Contract, it/he/she will not carry out activities similar to those of the Travel Synergies Business System, using the commercial designations and/or service marks of the Travel Synergies brand, including its affiliates, close relatives and other persons, on any territory wherever located.</br></br><b>20. Final Provisions</b></br>All amendments and additions or agreements related to the termination of the Contract shall be executed in writing and signed by authorized representatives of the Parties, and any amendments or additions shall be an integral part of the Contract. </br>The Contract is subject to registration with the State Service of Intellectual Property and Innovation under the Government of the UAE</br>The Franchisee warrants and guarantees that it/he/she has all rights and authorities necessary for conducting business activities of the Franchisee, concluding the Contract and fulfilling the obligations of the Franchisee under the Contract.</br>The Franchisee hereby warrants and guarantees that execution and performance of the Contract will not entail a conflict of interests with third parties, and will not contradict the requirements of any law or regulations.</br></br>IN WITNESS WHEREOF, the parties have executed this Contract on the date indicated below:</br></br><div class='invoice-box'><table cellpadding='0' cellspacing='0' ><tr class='information'><td colspan='2'><table><tr><td>Signed on behalf of Travel Synergies –Head Office– UAE<br /><br /><br />Name: Mr. Dilan Fernando<br />Designation: Managing Director<br/>Date:</td><td>Signed on behalf of Travel Synergies- "+compy+"<br /><br /><br />Name:<br />Designation<br/>Date:</td></tr></table></td></tr></table></div></br></br>";	








var allcontract="<h4 align='center'><b>Travel Synergies Contract</b></h4></br></br></br></br></br></br> <div class='invoice-box'><table cellpadding='0' cellspacing='0' ><tr class='information'><td colspan='2'><table><tr><td>Travel Synergies Head Office<br />414, Office Court Building,<br />Oud Metha Street,<br/>Dubai, UAE<br/>Tel +971 4 3353233<br/>E-mail: ceo@t-synergies.com</td><td>Travel Synergies – "+compy+"<br />Address: 117036, Profsoyuznaya,<br />1, of.54, Moscow,<br/>"+compy+"<br/>Tel :<br/>E-mail:md.ru@t-synergies.com</td></tr></table></td></tr></table></div></br></br></br></br> <b>I.             Effective Period and Validity:</b> </br></br></br></br> 1. This contract shall commence on "+sdate+", and shall terminate on "+edate+" .</br></br> 2. The agreed partnership fee is valid for the duration of the said period. Thereafter certain increases in costs will be negotiated and agreed upon mutually by both parties.</br></br>"+compyyy+"</br></br>"+cmcn+"</br></br>"+rpcm+"</br></br>"+compyyyy+"</br></br>"+ptben+"</br></br>"+trm+"</br></br>"+fo+"</br></br>"+bankdetails+"</br></br>"+canper+"</br></br>"+conf+"</br></br>"+conag+"</br></br>"+law+"</br></br>"+remarks;
	
	
	
	

$('#all').html(allcontract);


$('#new').html(newcontract);

	
		
		
		
		
		
	 })
	
	
	
	
	
	
	
	
	
	
 bankdetails="Travel Synergies Head Office (Sub Division of Miracle Adventure Tourism LLC )</br> </br> Ras Al Khaimah  Bank </br> </br> Oud Metha Branch </br> </br> Dubai, United Arab Emirates </br> </br> Account Name        Miracle Adventure Tourism LLC </br> </br> Account No             018 – 2002398 – 002 </br> </br> IBAN                        AE790400000182002398002 </br> </br> Swift Code              NRAKAEAK </br> </br> Telephone No          +971 - 4 – 224 8000 </br> </br> Fax No.                    +971 - 4 – 337 0324 /42 </br> </br>";	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    $("#country").on('change', function() {
		
			compy = $("#country").val();
	
	


 compyy="Travel Synergies – "+compy+"</br> </br> Address: 117036, Profsoyuznaya, </br> </br> 1, of.54, Moscow, </br> </br> "+compy+" </br> </br> Tel : </br> </br> E-mail:     md.ru@t-synergies.com";

 compyyy="<b>II.             Scope of Work: </b></br> </br> TS- "+compy+ "to their clients. Services shall include, but will not be limited to the following: </br> </br>  1. Implement the mutually agreed sales/marketing and promotional/public relations activities. </br> </br> 2. Prepare sales/marketing, public relations and promotional recommendations that will be used to develop and promote the Client within "+compy+"</br> </br> 3. Conduct programs to publicize and promote to TO’s, TA’s, direct clients from "+compy+" n market to the Client. </br> </br> 4. Advise the Client on travel trade, media trends and developments within "+compy+" , with the possibility to impact the number of guests to The Client </br> </br> 5. Provide market intelligence on Clients current market position i.e rates, competitor sets an etc. </br> </br> 6. Conduct regular media “sales calls” each month in the "+compy+" n market. </br> </br> 7. Submit a monthly activity report, in English, detailing the activities conducted by TS- "+compy+" on behalf of the Client </br> </br> 8. Additional duties may be agreed to through contract amendments or charge orders to be prepared and agreed in advance between the Client and TS- "+compy+ " .";

	

	


	$('#address').html(compyy);
	$('#scope').html(compyyy);
	
	
	
	
	
	
	
	
	
	
	
	
	

 trm="<b>VIII.          Terms and Conditions:</b></br> </br> 1. Services must be provided in a professional manner conforming to generally accepted marketing/promotion practices generally answers must be made within a 24 hours time span. </br> </br> 2. Any amendments to the partner contracts, must be pre-approved by TS-HO. </br> </br> 3. TS- "+compy+" , shall comply in good faith with the terms of this Agreement and shall indemnify, defend and hold TS-HO, harmless from and against any cost, liability or expense, including attorney’s fees, arising from any claimed rights of third parties, which would constitute a breach of contract. </br> </br> ";

$('#termsconditions').html(trm);

	
	
	
 fo="<b>IX.          Financial Obligations and Partnership fees:</b></br> </br> 1. This Contract amount agreed and accepted is for $ 2000.00 per Calendar Month (Payable 3 months in advance each month). This monthly contract amount shall cover all business expenses incurred by TS – HO as a partner fee. In addition to the monthly contract amount, TS - "+compy+" shall pay 30% profit share on all sales generated after expenses, </br> </br> 2. TS-HO shall submit at the beginning of every contracted month an invoice to TS- "+compy+" raised in $. Should any invoices. </br> </br> 3. TS- "+compy+" will make payment to TS-HO in $ by wire transfer within fifteen (15) days from the date on which the invoice is received. Payment will be made in full with all necessary bank charges associated with the transfer. Invoices will be raised for every 3 months. i.e. this means that the first invoice will be charged for i.e October, November, December (always 3 months in advance) </br> </br> 4. Past due payments shall accrue interest at the rate of 3% per month. </br> </br> 5. Payments to be transferred to the following bank account:</br></br>";

$('#financialobligations').html(fo);

	
	
	
 canper="<b>X.             Cancellation/Performance Review:</b></br> </br> 1. Either TS-HO or TS- "+compy+" shall pay TS–HO any outstanding balance of fees due through to the termination of the agreement. </br> </br> 2. In the event this agreement is cancelled by either party for whatsoever reason. The logo and trademark of Travel Synergies and all its co-existing rights belong to TS-HO. TS- "+compy+" , has no right or claim towards the same. </br> </br> 3. TS- Synergies online system and any and all tools provided by TS-HO to TS- "+compy+" has no right or claim whatsoever towards the same. </br> </br> 4. In the event of non-payment, continuous service lapses, Breach of contract due to negligence or harm to the TS brand will be construed as a reason for termination. In this event TS- "+compy+" , has to provide acceptable reasons for the occurrence in order to continue said partnership. </br> </br> ";

$('#cancelper').html(canper);

	
	
		
 cmcn="<b>III.           Commitments/Contracts:</b></br> </br> 1. TS- "+compy+" will obtain The Client’s approval before entering into any contract or making any other commitment with a third party on The Client’s behalf. </br> </br> 2. TS- "+compy+" shall provide The Client with a copy of all written contracts in such manner as mutually agreed.</br> </br> 3. TS- "+compy+" will copy in TS-HO on all such documentation </br> </br>	";

$('#comcon').html(cmcn);

	
	
	

	
conf="<b>XI.           Confidentiality</b></br> </br> 1. Both Parties agree that each Party will not disclose to others; or take or use for its own purposes or purposes of others any confidential information of the other Party, such as terms of the contract, marketing plans. Confidential Information means all information of any nature that is made available by either The HO or TS- "+compy+". </br> </br> 2. This obligation shall survive termination or expiration of this Agreement (regardless of the reason for such expiration or termination).";



conag="<b>XII            Containment of Entire Agreement Herein:</b> </br> </br> This contract supersedes any and all other agreements, either oral or in writing, between the parties hereto with respect to the services to be provided by TS-HO and payments to be provided by TS- "+compy+" . This Contract contains all of the covenants and agreements between the parties. Each party to this Contract acknowledges that no representations, inducements, promises, or agreements, made orally or otherwise, have been made by any party, or anyone acting on behalf of any party, which are not embodied herein, and that no other agreement will be effective unless it is in writing signed by the party to be changed.";

	
	
	 // $.ajax({
           //   type:'POST',
      //        url:'backend.php',
        //      data:{'compy':compy},
        //      success:function(result){
        //          $('#state').html(result);
                 
       //       }
       //   }); 
	
	
	
remarks="</br> </br> </br> </br> <div class='invoice-box'><table cellpadding='0' cellspacing='0' ><tr class='information'><td colspan='2'><table><tr><td>Signed on behalf of Travel Synergies –HO<br/><br/><br />Name: Mr. Dilan Fernando<br />Designation : Chief Executive Officer<br/></td><td>Signed on behalf of Travel Synergies - "+compy+"<br /><br/><br/>Name: Mr. Dmitry Panyushkin<br />Designation : Managing Director - "+compy+"<br/></td></tr></table></td></tr></table></div> </br> </br>";	
	
	
	
	
	
	
		
})

})


</script>





	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>

 

	<script type="text/javascript">
	$(document).ready(function($) 
	{ 






		$(document).on('click', '.btn_print', function(event) 
		{
			event.preventDefault();

			//credit : https://ekoopmans.github.io/html2pdf.js
			
			var element = document.getElementById('new'); 

			//easy
			//html2pdf().from(element).save();

			//custom file name
			//html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


			//more custom settings
			var opt = 
			{
			  margin:       1,
			  filename:     'contract_'+js.AutoCode()+'.pdf',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
			};

			// New Promise-based usage:
			html2pdf().set(opt).from(element).save();

			 
		});
		
		
		
		
		$(document).on('click', '.btn_print_secondary', function(event) 
		{
			event.preventDefault();

			//credit : https://ekoopmans.github.io/html2pdf.js
			
			var element = document.getElementById('all'); 

			//easy
			//html2pdf().from(element).save();

			//custom file name
			//html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


			//more custom settings
			var opt = 
			{
			  margin:       1,
			  filename:     'contract_'+js.AutoCode()+'.pdf',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
			};

			// New Promise-based usage:
			html2pdf().set(opt).from(element).save();

			 
		});


 
 
	});
	</script>







					
					
					
                  </div><!-- /.box-body -->












              </div><!-- /.box -->



         
            </div><!--/.col (left) -->
			
			
		
			
			
			
			
				  
				  
                </form>
			
			
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
								
								
								
								
								
								</div>
                            </div>
                        </div>
                    </div>
                </div>
				
				</form>
				
				
            </div>
        </div>
     <!--**********************************
            Content body end
        ***********************************-->



    	
        <!--**********************************
            Footer start
        ***********************************-->
       <?php  include 'footer.php'; ?>
        <!--**********************************
            Footer end
        ***********************************-->
    
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
 


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    
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

	

    
	
</body>
</html>
