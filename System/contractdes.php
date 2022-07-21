<?php
session_start();
include "header.php";
$s=$_SESSION['cont_sdate'];
$e=$_SESSION['cont_edate'];
$start = new DateTime($s);
$end = new DateTime($e);

$diff = $start->diff($end);

$yearsInMonths = $diff->format('%r%y') * 12;
$months = $diff->format('%r%m');
$totalMonths = $yearsInMonths + $months;

$as=$start->format("Y");
$ae=$end->format("Y");

$totalyears=$ae-$as;

?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 


	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 
  
 	

   <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Contract
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contracts</a></li>
            <li class="active">Create Contract</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		
         




<input type='submit' id='btn_print' value='Print Contract'>

<div style='padding-right:10% !important; ' id='new'>




<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><span style='font-size:13px;font-family:"Times New Roman",serif;'> </span></p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><span style='font-size:13px;font-family:"Times New Roman",serif;'>                                                                                                                      </span></p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.5pt;'><span style='font-size:12px;font-family:"Times New Roman",serif;'> </span></p>
<p style='margin-top:2.2pt;margin-right:158.45pt;margin-bottom:.0001pt;margin-left:157.85pt;text-align:center;font-size:19px;font-family:"Calibri Light",sans-serif;text-decoration:underline;'><strong><span style="font-size:21px;">Synergy Marketing Reps</span></strong><strong><span style="font-size:21px;"> </span></strong><strong><span style="font-size:21px;">Franchisee</span></strong><strong><span style="font-size:21px;"> </span></strong><strong><span style="font-size:21px;">Contract</span></strong></p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:7px;"> </span></p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.8pt;margin-right:6.3pt;margin-left:5.95pt;text-align:justify;line-height:107%;'>This Contract is entered into between Synergy Marketing Reps Head Office, hereafter (referred to as SM-HO) and <?php echo $_SESSION['cont_title']; ?> <?php echo $_SESSION['cont_name'];?>, <?php echo $_SESSION['cont_country'];?> National holding passport No. <?php echo $_SESSION['cont_passport'];?>. The Sales and Marketing Service corporation in <?php echo $_SESSION['cont_city'].', '; ?><?php echo $_SESSION['cont_country']; ?> (hereafter referred to as &ldquo;Franchisee&rdquo;). Upon the terms and conditions of the Contract, the Franchisor hereby grants to the Franchisee the exclusive license to use the Synergy Marketing Reps Business System for the term specified in the Contract and the rights to use including without limitation:</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.8pt;margin-right:6.3pt;margin-left:5.95pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.05pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.5pt;margin-right:0in;margin-left:0in;'><span style="font-size:9px;"> </span></p>
<table style="border: none;margin-left:30.2pt;border-collapse:collapse;">
    <tbody>
        <tr>
            <td style="width: 215.6pt;padding: 0in;height: 99.95pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:10.0pt;line-height:12.2pt;'><span style="font-size:16px;">Between:</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:67.2pt;margin-left:10.0pt;'><span style="font-size:16px;">Synergy Marketing Reps Head Office 1603, Nassima Towers, Sheikh Zayed Road,</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.1pt;margin-right:0in;margin-left:10.0pt;'><span style="font-size:16px;">Dubai, UAE</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:10.0pt;'><span style="font-size:16px;">Tel +971 4 5911244</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:10.0pt;line-height:13.4pt;'><span style="font-size:16px;">E-mail: </span><a href="mailto:info@synergymarketingreps.com"><span style="font-size:16px;">info@synergymarketingreps.com</span></a></p>
            </td>
            <td style="width: 250.4pt;padding: 0in;height: 99.95pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:64.15pt;line-height:12.2pt;'><span style="font-size:16px;">And:</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:64.15pt;'><span style="font-size:16px;"><?php echo $_SESSION['cont_name'];?></span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:40.35pt;margin-left:64.15pt;'><span style="font-size:16px;"><?php echo $_SESSION['cont_address']; ?></span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:40.35pt;margin-left:64.15pt;'><span style="font-size:16px;"><?php echo $_SESSION['cont_city'].', '; ?><?php echo $_SESSION['cont_country']; ?></span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:64.15pt;'><span style="font-size:16px;">Tel: <?php echo $_SESSION['cont_phone'];?></span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:64.15pt;line-height:13.4pt;'><span style="font-size:16px;">E-mail: </span><a href="file:///C%3A/Users/97150/AppData/Local/Microsoft/Windows/INetCache/Content.Outlook/VIUN7MUS/<?php echo $_SESSION['cont_email'];?>"><span style="font-size:16px;"><?php echo $_SESSION['cont_email'];?></span></a></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:13px;"> </span></p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:13px;"> </span></p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: decimal;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Containment of Entire Agreement Herein:</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.9pt;margin-right:6.65pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>This contract supersedes any and all other agreements, either oral or in writing, between the parties hereto with respect to the services to be provided by SM-HO and services to be provided by Franchisee. This Contract contains all the covenants and agreements between the parties. Each party to this Contract acknowledges that no representations, inducements, promises, or agreements, made orally or otherwise, have been made by any party, or anyone acting on behalf of any party, which are not embodied herein, and that no other agreement will be effective unless it is in writing signed by the party to be changed.</p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Agreement Term</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.75pt;margin-left:42.0pt;text-align:justify;text-indent:-.05pt;line-height:107%;'>The contracted terms apply for a period of <?php echo $totalyears;?> years (<?php echo $totalMonths;?> Months), commencing on <?php echo $_SESSION['cont_sdate'];?> and terminating on <?php echo $_SESSION['cont_edate'];?>, if not determined otherwise.</p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Territory</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.65pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The territory for purpose of this agreement with regards to Sales and Marketing of products and services shall be limited to the territory of &ldquo;<?php echo $_SESSION['cont_city'].', '; ?><?php echo $_SESSION['cont_country']; ?>&rdquo;</p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Franchisor Commitments</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:6.0pt;text-indent:.5in;'>System is granted under the relevant contracts and agreements.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:6.0pt;text-indent:.5in;'>Right to use Synergy Marketing Reps logo and trade mark</p>
<ol class="decimal_type" style="list-style-type: upper-roman;">
    <li>Built in partnership commission structure</li>
    <li>Partner referral and rewards</li>
    <li>Hosting and maintaining of the company website incl. a separate webpage</li>
    <li>Head office support in terms of limited Marketing, Documentation, Sales Support</li>
    <li>2 x company e-mail accounts</li>
    <li>Cloud based secure data environment</li>
    <li>Access to Synergy Marketing Reps proprietary and revolutionary admin panel.</li>
</ol>
<p style='margin-top:1.15pt;margin-right:0in;margin-bottom:.0001pt;margin-left:68.95pt;text-align:left;text-indent:0in;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.8pt;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'>The Right to: Trademark; Service mark; Commercial designation; Secrets of operational know-how. Franchisee agrees that the above is the Franchisor&rsquo;s property, and to the extent same is &ldquo;intellectual property&rdquo;, that is protected in accordance with the current international legislation of the UAE.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:15px;"> </span></p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'>The Franchisee has the right to use Synergy Marketing Reps Business System solely for the purpose of opening and operating the company and providing services in the manner and conditions stipulated in the Contract.</p><br/>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'> </p>
<ol style="list-style-type: undefined;margin-left:32px;">
    <li><strong>SM - Admin Panel </strong>
        <ol style="list-style-type: upper-roman;">
            <li>Access to your complete CRM</li>
            <li>All regular contracts completely online</li>
            <li>Mass Emailing solution</li>
            <li>Company Collateral (Letter heads, Email signatures, Business cards, Contracts and etc.)</li>
            <li>Sales meeting scheduling</li>
            <li>Staff and asset management</li>
            <li>Basic Human Resources functions</li>
            <li>Sales report generation by dictation</li>
            <li>Multi language</li>
            <li>Direct access to your clients and partners</li>
            <li>One touch access to all generated reports and market intelligence</li>
            <li>Sales Meeting Scheduling</li>
            <li>Exhibition Handling</li>
            <li>Road show handling</li>
            <li>Online booking engine system for hospitality entities (SM-ON)</li>
            <li>E-commerce platform for trade and product partners (Tradelinks)</li>
            <li>Auto invoicing and commission calculations</li>
            <li>Partner Video conferencing and messaging</li>
            <li>AI Virtual Assistant (Hugo / Brie)</li>
            <li>Major Holidays, Birthday and etc greeting cards</li>
            <li>Mass emailing solution</li>
            <li>Financial reports and cash forecasts of incoming bookings etc.</li>
            <li>SM Memorabilia and gifts access and delivery options</li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;text-align:justify;text-indent:.5in;'><strong>Partner Benefits:</strong></p>
<ol class="decimal_type" style="list-style-type: upper-roman;margin-left:0.75in;">
    <li>Booking fee (3 &ndash; 10 USD per person per booking per stay from the client)</li>
    <li>25% of system charge from Trade partners signed by the Franchisee as a monthly fee</li>
    <li>25% of advertising fees brought in by the Franchisee</li>
    <li>25% of booking fee through partner network generation</li>
    <li>25% of Data Entry charges (Contracting and setting up accounts)</li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:0in;margin-right:.5pt;margin-left:42.0pt;line-height:107%;'> </p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Assignment</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.1pt;margin-right:.5pt;margin-left:42.0pt;text-indent:-.05pt;line-height:107%;'>Franchisee, shall provide Sales/Marketing and Public Relations services and support within the territory to their clients. Services shall include, but will not be limited to the following:</p>
<ol style="list-style-type: upper-roman;">
    <li>Implement the mutually agreed sales/marketing and promotional/public relations activities (based on brand guidelines and determined market strategy)</li>
    <li>Prepare sales/marketing, public relations and promotional recommendations that will be used to develop and promote their Clients within the Destination with SM-HO approval.<ol style="list-style-type: undefined;">
            <li>Conduct programs to publicize and promote services to direct clients from the market to the Client.<ol style="list-style-type: undefined;">
                    <li>Advise the Client on trade segments, media trends and developments within the territory, with the possibility to impact the number of guests to The Client;<ol style="list-style-type: upper-alpha;">
                            <li>Provide market intelligence on Clients current market position i.e., pricing, competitor sets etc.</li>
                            <li>Conduct regular media &ldquo;sales calls&rdquo; each month in their market.<ol style="list-style-type: undefined;">
                                    <li>Submit a monthly activity report, in English, detailing the activities conducted by Franchisee on      behalf of their clients.<ol style="list-style-type: undefined;">
                                            <li>Additional duties may be agreed to through contract amendments or charge orders to be prepared and agreed in advance between the Client and SM-HO.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.35pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.35pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.35pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.35pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.35pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.35pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:15px;"> </span></p>
<ol style="list-style-type: undefined;margin-left:32px;">
    <li><strong><span style='font-family:"Calibri",sans-serif;'>Franchisee Commitments/Contracts:</span></strong>
        <ol style="list-style-type: upper-roman;">
            <li>The Franchisee, will obtain SM-HO approval prior to entering into a contract or making any commitments with a third party on behalf of SM-HO.</li>
            <li>The Franchisee shall provide SM-HO with a copy of all written contracts in such manner as mutually agreed.</li>
            <li>The Franchisee undertakes and agrees to use Synergy Marketing Reps Business System solely for the purposes related to the activities of the company and the provision of services under Synergy Marketing Reps brand, in strict compliance with the provisions of the Contract, instructions and recommendations of the Franchisor, as well as the requirements of the current legislation or regulations of the country and/or local jurisdiction in which the company is located and will operate.<ol style="list-style-type: undefined;">
                    <li>To ensure the functioning of the company and provide services under the Synergy Marketing Reps brand in accordance with the requirements and established standards of the Franchisors Business System.</li>
                    <li>To keep all information received from the Franchisor confidential. In this case the Franchisee shall enter into an agreement with each employee of the company on non-disclosure of confidential information, which constitutes any part of the Synergy Marketing Reps Business System and/or has become known to the Franchisee in connection with its business activities.</li>
                    <li>To recognize, not contest and not restrict the exclusive rights of the Franchisor to the Synergy Marketing Reps Business System and immediately inform the Franchisor of the fact of any contesting, misappropriation, restriction, or unauthorized use by third parties of the exclusive rights of the Franchisor to the Synergy Marketing Reps Business System during the entire term of the Contract.</li>
                    <li>Not to grant to third parties the right to use the Synergy Marketing Reps Business System in business activities, including by signing sublicense or sub franchise agreements with third parties, which are absolutely prohibited and if such activities arise. Legal actions will be taken forward in terms of breach of  contract and all terms included.<ol style="list-style-type: undefined;">
                            <li>To pay in full and on time all Fees payable to the Franchisor under the Contract.</li>
                            <li>To follow all updates and timely inform Personnel about changes and additions to the Synergy Marketing Reps                 Business System.<ol style="list-style-type: upper-alpha;">
                                    <li>To attend all meetings, training and other events organized by the Franchisor.<ol style="list-style-type: undefined;">
                                            <li>To submit financial reports requested by the Franchisor. To ensure the quality of the operation, effective marketing and promotion in social networks, daily management and compliance with service            standards, systematized and transparent management accounting for the effective use of the Synergy Marketing Reps Business System in the course of business activities, as well as compliance with the current legislation or regulations of the country and/or local jurisdiction in which the company is located in and             will operate.<ol style="list-style-type: undefined;">
                                                    <li>The Franchisor has the right:</li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.1pt;margin-right:6.35pt;margin-left:68.95pt;text-align:justify;line-height:107%;'>To check the compliance of the Franchisee with the terms and conditions of the Contract and demand            that the quality of services provided under the Synergy Marketing Reps brand meets the requirements and established standards of the Synergy Marketing Reps System and this Contract.</p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>The Franchisor undertakes and agrees to transmit to the Franchisee, the information and materials that make up the Synergy Marketing Reps Business System and that are necessary for the Franchisee to exercise its rights under the Contract, within 3 (three) working days provided that the Franchisee meets the conditions specified in the Contract.</li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:15px;"> </span></p>
<ol class="decimal_type" style="list-style-type: undefined;">
    <li><strong>Hiring of employees</strong>
        <ol style="list-style-type: upper-roman;">
            <li>The Franchisor shall provide the Franchisee with recommendations and requirements for the selection of the Personnel, including qualification requirements and instructions for the job duties of the Personnel.<ol style="list-style-type: undefined;">
                    <li>The Personnel shall be staffed in accordance with the requirements of the Franchisor.</li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:13.35pt;'> </p>
<ol style="list-style-type: undefined;">
    <li>Each employee of the company shall mandatorily participate in and successfully conclude the appropriate training on Synergy Marketing Reps Business System.<ol style="list-style-type: undefined;">
            <li>The Franchisee undertakes to acquaint Personnel member with the requirements of Synergy Marketing Reps Business System including without limitation:</li>
            <li>The list of services provided by company under the Synergy Marketing Reps brand; methods and standards of  service; the established rules and requirements of the Franchisor.</li>
            <li>The Franchisee shall at its expense provide uniforms to each employee. When the uniforms are old/  damaged/not presentable as to brand standards they may be turned in and replaced with new ones.</li>
            <li>The Franchisee shall have the right, by agreement with the Franchisor, independently and/or with third parties, conduct training of the Personnel in the company and according to the programs agreed  with the Franchisor.</li>
        </ol>
    </li>
</ol>
<ol style="list-style-type: upper-roman;">
    <li>At the Opening and the Start Date of the company, the Franchisee undertakes to conduct an advertising campaign, as well as to place internal and external advertising of the company in accordance with the instructions and recommendations of the Franchisor.</li>
    <li>The plan of advertising activities shall be developed by the Franchisee in agreement with the Franchisor. The Franchisor directly provides and/or approves materials prepared by the Franchisee aimed at advertising of the company and services under the Synergy Marketing Reps brand.<ol style="list-style-type: undefined;">
            <li>The Franchisee not less than 10 (ten) calendar days before the expected moment of implementation and use of the promotional materials prepared by them undertakes to submit for approval the Franchisor all samples of promotional materials, including sketches and detailed description of the procedure for use of such materials, unless otherwise agreed by the Parties.<ol style="list-style-type: undefined;">
                    <li>Within 3 (three) to 5 (five) business days of receipt the Franchisor undertakes to review the advertising materials submitted by the Franchisee and provide its written consent or reasoned refusal of use.</li>
                    <li>The Franchisee undertakes to ensure the safety, serviceability, and appropriate appearance, based on brand standards, of any advertising material of the company as well as to perform at its own expense all necessary actions related to the implementation.<ol style="list-style-type: undefined;">
                            <li>The Franchisee undertakes to cooperate with and assist the Franchisor in holding press conferences, interviews, photo, and video shoots, including those of an advertising nature, giving comments, explanations and conducting PR-actions.</li>
                            <li>The Franchisee may not prepare and publish its own publications in printed and electronic form, including on the internet and in mass media, related to the methods of Synergy Marketing Reps Business System, unless otherwise agreed in writing by the Franchisor.</li>
                        </ol>
                    </li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.2pt;'><span style="font-size:15px;"> </span></p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Selling / Transferring of Franchise</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.05pt;margin-right:6.6pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>Franchisee may sell or transfer the franchise with prior written and approved notice from SM-HO. SM-HO reserves the right to deny any selling or transferring of ownership of the franchise location for any reason.</p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Sales and Marketing actions</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.05pt;margin-right:6.35pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>To evaluate the activities of the Franchisee, including inspection of the activities of the company for compliance with the requirements and established standards of the Synergy Marketing Reps Business System without significant interference in the business activities of the Franchisee during the entire term of the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.85pt;margin-right:6.5pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>To ensure legal protection of the trademark and service mark of the Synergy Marketing Reps brand and the Synergy Marketing Reps Business System when receiving information from the Franchisee about their illegal use by third parties.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.45pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>To notify the Franchisee of changes in the prices of branded consumables of the Synergy Marketing Reps brand and document the expediency of such changes at least 15 (fifteen) calendar days before making the appropriate changes.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.45pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.45pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.45pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:6.55pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>For the use of the Business System Synergy Marketing Reps the Franchisee undertakes to pay to the Franchisor the                      established amount of the Franchise Fees.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.3pt;'><span style="font-size:18px;"> </span></p>
<ol style="list-style-type: undefined;margin-left:32px;">
    <li><strong>Terms and Conditions:</strong>
        <ol style="list-style-type: upper-roman;">
            <li>Services must be provided in a professional manner conforming to generally accepted marketing/promotion practices generally answers must be made within a 24 hours&rsquo; time span.<ol style="list-style-type: undefined;">
                    <li>Any amendments to the partner contracts, must be pre-approved by SM-HO.<ol style="list-style-type: undefined;">
                            <li>Franchisee, shall comply in good faith with the terms of this Agreement and shall indemnify, defend, and hold SM-HO, harmless from and against any cost, liability, or expense, including attorney&rsquo;s fees, arising from any claimed rights of third parties, which would constitute a breach of contract.</li>
                        </ol>
                    </li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.2pt;'><span style="font-size:17px;"> </span></p>
<ol style="list-style-type: undefined;margin-left:32px;">
    <li><strong>Financial Obligations and Partnership fees:</strong>
        <ol style="list-style-type: upper-roman;">
            <li>This Contract amount agreed and accepted is USD 2,000 per month as the franchise fee.</li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:73.55pt;'><strong>However, it has been agreed by both parties that this amount will become payable only once the Franchisee starts generating revenue of a minimum of USD 3,000 per month.</strong></p>
<ol style="list-style-type: undefined;">
    <li>SM-HO shall submit at the beginning of every contracted month an invoice to the franchisee raised in USD for any payments due.</li>
    <li>Franchisee will make payment to SM-HO in USD by wire transfer within fifteen (15) days from the date on which the invoice is received. Payment will be made in full with all necessary bank charges associated with the transfer.</li>
    <li>The Franchisee is expected to recommend a minimum of 3 trade partners during a calendar year to their partner franchisee offices. (Through the system)</li>
    <li>If recommended partner signs up for any services or products. The recommended franchisee will receive 25% of the agreed amount between the 2 parties on a monthly basis.</li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.35pt;'><strong><span style="font-size:15px;"> </span></strong></p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;"><br/>
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Royalty Fees:</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.1pt;margin-right:0in;margin-left:73.55pt;'>The Franchise will pay quarterly 5% of the gross revenue generated.</p>
<ol style="list-style-type: upper-roman;">
    <li>Payments to be transferred to the following bank account:</li>
    <li>Past due payments shall accrue interest at the rate of 3% per month.</li>
    <li>In case of early termination of the Contract on the initiative of the Franchisee and after transfer of information and materials, which constitute the Synergy Marketing Reps Business System and trade secrets of the Franchisor, for any reason, the Initial Fee shall not be refunded to the Franchisee</li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:0in;margin-left:73.55pt;'>Emirates NBD</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.1pt;margin-right:3.2in;margin-left:73.55pt;line-height:150%;'>Business Bay, Dubai, UAE (Business Banking AQZ) Dubai, United Arab Emirates</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:73.55pt;line-height:13.35pt;'>Account Name                    S J GLOKAL OIL TRADING L.L.C</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.1pt;margin-right:0in;margin-left:73.55pt;'>Account No                          102568673120</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.1pt;margin-right:0in;margin-left:73.55pt;'>IBAN                                      USD AE36026000102568673120</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.1pt;margin-right:0in;margin-left:73.55pt;'>Swift Code                            EBILAEAD</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.95pt;margin-right:0in;margin-left:73.55pt;'>Telephone No                     +971 43 556 444</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.15pt;'><span style="font-size:16px;"> </span></p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.8pt;margin-right:6.65pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The obligations of the Franchisee to pay the Franchise Fees shall be deemed to have been fulfilled from the moment the funds are credited to the Franchisor&rsquo;s current bank account.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.1pt;margin-right:6.55pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>Each of the Parties shall pay the taxes and fees to be paid in accordance with the current legislation or regulations of the country and/or local jurisdiction in which the company is located and will operate in connection with the execution and the performance of the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.1pt;margin-right:6.55pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.1pt;margin-right:6.55pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.1pt;margin-right:6.55pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.1pt;margin-right:6.55pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Franchise Fee Terms</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.4pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Franchisor has the right to increase the amount of the Franchise Fees taking into account the inflation level in accordance with the current economic situation. Such change shall apply only to future Franchise Fees payable by the Franchisee and shall take effect 30 (thirty) calendar days after the Franchisor has notified the Franchisee of such increase.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:6.5pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Franchisee confirms and recognizes that the Franchise Fees under the Contract are reasonable and non- refundable regardless of the economic or other results of the company activity.</p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Special Projects and Events.</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.05pt;margin-right:6.55pt;margin-left:41.95pt;text-align:justify;line-height:115%;'>From time-to-time SM&ndash;HO will strive to acquire special projects i.e., sales rights for The FIFA World Cup, such projects will have its own contractual addendums. In this instance SM-HO will facilitate the appointment of SM&ndash;<?php echo $_SESSION['cont_city'].', '; ?><?php echo $_SESSION['cont_country']; ?> as an official partner.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
<ol style="list-style-type: undefined;margin-left:32px;">
    <li><strong>Cancellation/Performance Review:</strong>
        <ol style="list-style-type: upper-roman;"><br/><br/>
            <li>In the event the Franchisor does not give the Franchisee a written notice of its unwillingness to renew the Contract not later than 60 (sixty) days before the expiration of the term of the Contract, or any extended term of the Contract, the validity of the Contract shall be automatically extended for 1 (one) year. The term of the Contract, including each such one-year renewal, is limited to a total of 5 (five) years from the Effective date. Upon expiration any of the term or any</li>
            <li>extended term, the Contract shall be automatically terminated without any notice.</li>
            <li>The Franchisee shall reply to all requests of the Franchisor, to agree and approve all matters concerning the functioning of the company and provision of services under the &ldquo;Synergy Marketing Reps&rdquo; brand according to the provisions of the Contract, not later than 5 (five) working days from any such request.<ol style="list-style-type: undefined;">
                    <li>Either SM-HO or Franchisee, may give the other party notice of cancellation of this agreement in writing, with termination taking effect three months from the date of notice. In such a case, SM- <?php echo $_SESSION['cont_city'].', '; ?><?php echo $_SESSION['cont_country']; ?>, shall pay SM&ndash;HO any outstanding balance of fees due through to the termination of the agreement.<ol style="list-style-type: upper-alpha;">
                            <li>In the event this agreement is cancelled by either party for whatsoever reason. The logo and trademark of Synergy Marketing Reps and all its co-existing rights belong to SM-HO. Franchisee, has no right or claim towards the same and must relinquish any and all such properties within 2 weeks of such notice.</li>
                            <li>In the event of non-payment, continuous service lapses, Breach of contract due to negligence or harm to the SM brand will be construed as a reason for termination. In this event Franchisee, has to provide acceptable reasons for the occurrence in order to continue said partnership within 48 hours.</li><br/>
                            <li>If the Franchisee does not fulfill its obligations under the Contract and/or if the Franchisee materially violates the terms and conditions of the Contract, the Franchisor shall have the right to.</li>
                            <li>Failure by the Franchisee to fulfill a specified contractual obligation or to eliminate any breach of the contract within a period of time set by the Franchisor to fulfill a certain obligation and/or to eliminate the breach of the Contract.</li>
                            <li>Refusal without satisfactory cause by the Franchisee to participate in Internships, meetings and/or other events held by the Franchisor in accordance with the terms and conditions of the Contract.</li>
                            <li>Obstruction of the representatives of the Franchisor, who evaluate the activity of the Franchisee, if such obstruction makes it impossible to obtain reliable data on the activity of the Franchisee and its compliance with the terms and conditions of the Contract.</li>
                            <li>Actions by the Franchisee without the Franchisor&rsquo;s consent, approval or other prior authorization if the Franchisee&rsquo;s actions under the Contract require such consent, approval or other prior authorization by the Franchisor.</li>
                        </ol>
                    </li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.6pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.6pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.6pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.6pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.6pt;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-right:6.6pt;line-height:107%;'> </p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Confidentiality</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.05pt;margin-right:6.5pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>Both Parties agree that each Party will not disclose to others; or take or use for its own purposes or purposes of others any confidential information of the other Party, such as terms of the contract, marketing plans, contacts etc... Confidential Information means all information of any nature that is made available by either SM-HO or Franchisee.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.55pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>This obligation shall survive termination or expiration of this Agreement (regardless of the reason for such expiration or termination) during the entire term of validity of the Contract, as well as within 5 (five) years after termination of the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:15px;"> </span></p>
<ol style="list-style-type: undefined;margin-left:32px;">
    <li><strong>Law Governing Contract and Legal Expenses:</strong>
        <ol style="list-style-type: upper-roman;">
            <li>This Contract shall be governed by and construed in accordance with the laws of Dubai, UAE<ol style="list-style-type: undefined;">
                    <li>If any provision in this Contract is held by a court of competent jurisdiction to be invalid, void, or unenforceable, the remaining provisions shall nevertheless continue in full force without being impaired or invalidated in any way.</li>
                    <li>The prevailing Party in any legal action arising out of this Agreement shall be entitled, in addition to any other rights and remedies it may have, to reimbursement for its expenses, including court costs and reasonable attorneys and expert fees and costs.</li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.05pt;margin-right:6.5pt;margin-left:0in;line-height:107%;'> </p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Force Majeure</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.45pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>Neither Party shall be liable before the other Party for failure to fulfill its obligations caused by circumstances beyond the will and desire of the Parties that could not have been foreseen or avoided, including declared or actual war, civil unrest, epidemics, earthquakes, floods, fires and other natural disasters, actions of state or municipal authorities and other insurmountable circumstances, if such Party claiming the occurrence of a force majeure event can reasonably demonstrate such force majeure event conclusively prevented such Party from fulfilling its obligations under the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.45pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.45pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Party that fails to fulfill its obligations as a result of force majeure event shall notify the other Party in writing about the obstacle and its impact on the fulfillment of obligations without delay, but not later than 5 (five) days after the occurrence of the afore-mentioned circumstances.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.8pt;margin-right:6.55pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The notice shall contain detailed characteristics of the circumstances allegedly causing the inability of such Party to fulfill its obligations as a result of a force majeure event, as well as measures taken by the Party to eliminate the consequences of such circumstances.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.65pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>The Party that has not notified the other Party of its inability to fulfill its obligations under the Contract shall lose the right to refer to such inability.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:6.45pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>If the above circumstances allegedly constituting a force majeure event, as demonstrated by such Party, last more than 60 (sixty) consecutive days, the Party alleging the force majeure event shall have the right to refuse further performance of its obligations under the Contract. In this case, neither of the Parties shall have the right to claim damages from the other Party.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:6.55pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>In this case, the Contract shall be terminated with the mutual settlement of accounts of the Parties for the fulfilled obligations under the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;"><br/><br/><br/>
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Special conditions</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.35pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Franchisee hereby certifies that it/he/she has duly examined all opportunities and risks of business activities for the provision of services and activities of company under the Synergy Marketing Reps brand under the Contract. The Franchisee acknowledges that the success and profitability of the company depends on the abilities and capabilities of the Franchisee.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.35pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.35pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.35pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.35pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:1.95pt;margin-right:6.35pt;margin-left:42.0pt;text-align:justify;line-height:107%;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.4pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Franchisee acknowledges and agrees that the activities of the company involve risks, including without limitation:</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:0in;margin-left:78.0pt;'>business seasonality; Personnel departure, including the transition to competitors; changes in the legislation governing the activities of the Franchisee; competitiveness.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:9.15pt;margin-right:6.8pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Franchisor hereby makes no warranties, either express or implied, as to the possible results of the work and success of the Franchisee, and the Franchisee acknowledges and accepts this fact.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:6.25pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Franchisee hereby confirms that it/he/she has read all the terms and conditions and has understood the contents of the Contract. The Franchisee hereby acknowledges that it/he/she has had sufficient time and opportunity to seek and obtain advice on the potential benefits and possible risks associated with the execution and performance of the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.25pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Franchisee also confirms that it/he/she is duly qualified to carry out business activities under the Contract and that if an entity has been properly established and that it/he/she is operating in accordance with the requirements of the laws of the country of formation and/or residence.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:6.3pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>All rights and information provided by the Franchisor to the Franchisee under the Contract shall apply to the operation of the Caf&eacute;, and the Synergy Marketing Reps Business System shall be exclusively used for the operation of such company in the manner and under the conditions stipulated by the Contract. The use of the company for any purpose or utilization of any system or procedure in the company other than Synergy Marketing Reps Business System as set forth in the manner and under the conditions stipulated by the Contract shall constitute a violation of the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.95pt;margin-right:6.55pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>The Franchisee hereby guarantees that during the term of the Contract, it/he/she will not carry out activities similar to those of the Synergy Marketing Reps Business System, using the commercial designations and/or service marks of the Synergy Marketing Reps brand, including its affiliates, close relatives and other persons, on any territory wherever located.</p>
<div style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'>
    <ol style="margin-bottom:0in;list-style-type: undefined;margin-left:32px;">
        <li style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'><strong>Final Provisions</strong></li>
    </ol>
</div>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:2.05pt;margin-right:6.5pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>All amendments and additions or agreements related to the termination of the Contract shall be executed in writing and signed by authorized representatives of the Parties, and any amendments or additions shall be an integral part of the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:7.85pt;margin-right:6.5pt;margin-left:42.0pt;text-align:justify;line-height:107%;'>The Contract is subject to registration with the State Service of Intellectual Property and Innovation under the Government of the UAE</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.05pt;margin-right:6.5pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>The Franchisee warrants and guarantees that it/he/she has all rights and authorities necessary for conducting business activities of the Franchisee, concluding the Contract and fulfilling the obligations of the Franchisee under the Contract.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:8.0pt;margin-right:6.45pt;margin-left:41.95pt;text-align:justify;line-height:107%;'>The Franchisee hereby warrants and guarantees that execution and performance of the Contract will not entail a conflict of interests with third parties, and will not contradict the requirements of any law or regulations.</p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:41.95pt;text-align:justify;'> </p>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:41.95pt;text-align:justify;'>IN WITNESS WHEREOF, the parties have executed this Contract on the date indicated below:</p>
<p style='margin:0in;margin-bottom:.05pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.2pt;margin-right:0in;margin-left:0in;'><span style="font-size:12px;"> </span></p>
<table style="border: none;margin-left:29.45pt;border-collapse:collapse;">
    <tbody>
        <tr>
            <td style="width: 247.5pt;padding: 0in;height: 119.85pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:10.0pt;line-height:11.25pt;'>Signed on behalf of Synergy Marketing Reps</p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-left:10.0pt;line-height:11.25pt;'>Head Office &ndash; UAE</p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.4pt;'><span style="font-size:13px;"> </span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.05pt;margin-right:99.25pt;margin-left:10.0pt;line-height:13.5pt;'><strong>Name:</strong> Mr. Dilan Fernando <strong>Designation</strong>: CEO</p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.05pt;margin-right:99.25pt;margin-left:10.0pt;line-height:13.5pt;'> <strong>Date:</strong></p>
            </td>
            <td style="width: 238.85pt;padding: 0in;height: 119.85pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;line-height:11.25pt;'>Signed by</p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.25pt;'> </p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.05pt;margin-right:111.7pt;margin-left:24.9pt;'><strong> </strong></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.05pt;margin-right:111.7pt;margin-left:0in;'><strong>Name:</strong> <?php echo $_SESSION['cont_name'];?></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.05pt;margin-right:111.7pt;margin-left:0in;'><strong>Designation:</strong> <?php echo $_SESSION['cont_designation'];?></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;margin-top:.05pt;margin-right:111.7pt;margin-left:0in;'><strong>Date:</strong></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0in;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri Light",sans-serif;'> </p>



</div>







</section>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script type="text/javascript">
	$(document).ready(function($) 
	{ 

		$(document).on('click', '#btn_print', function(event) 
		{
			event.preventDefault();
			
	
			
			var element = document.getElementById('new'); 


		
	let worker=	html2pdf(element, {
  margin:       2,
  filename:     'myfile.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
  jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
});
	

	
	
	
	
		
		

			 
		});
	
		
});
		</script>