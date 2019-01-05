<!DOCTYPE html>
<html lang="en-US">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet" type="text/css">
        
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="jquery.js" type="text/javascript"></script>
        <script src="bootstrap.js" type="text/javascript"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>	
<title>goinsurancelife</title>
<link rel="shortcut icon" class="classtit" href="images/logomain.png">
<link rel="stylesheet" href="animate.css">
   <script src="wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
 
   <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<?php

$alertmes= $_GET['var'];
$alertmes2= $_GET['var2'];


if($alertmes2==1)
{

	echo "<script  type='text/javascript' language='javaScript'>";
	
	echo "alert('".$alertmes."');";
	
	echo 'window.location.href = "group_leave_encash.php";';
	
	echo "</script>";



}

?>


     </head>
<!--contact modal-->
     <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h1>Contact Us</h1></center>
              </div>
              <div class="modal-body">
                <p style="color:red">* Mandotary Fields</p>
                <form method="post" action="addcontact.php?id=group_leave_encash.php">
                  
                  <input type="text" class="form-control" placeholder="Enter Your Name" name="usrName"><p style="color:red">*</p>
                  <input type="email" class="form-control" placeholder="Enter Your Email" name="usrEmail"><p style="color:red">*</p>
                  <input type="number" maxlength="10" class="form-control" placeholder="Enter Your Contact Number" name="usrContact"><p style="color:red">*</p>
                  <label>Gender :</label>
                  <input type="radio" name="gender" value="male"> Male
                  <input type="radio" name="gender" value="female"> Female<p style="color:red">*</p>
                  <textarea cols="50" type="text" id="user_comment" class="form-control" placeholder="Enter Your Query Here..." name="usrMes"></textarea><p style="color:red">*</p>
                
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-info" name="submit">
                <button type="reset" class="btn btn-primary " >Clear</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    
<header>

  
    <div class="col-md-12" >
        <div class="col-md-2">
             <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul  id="sidebarlist" style="list-style:none;">
      <div>
          <i class="fa fa-umbrella" style="font-size:60px;color:whitesmoke;margin-left:-30px;"><span style="font-size:35px;margin-left:-10px;">nsurance</span></i>
      </div>
      <li><a href="index.html"><i class=" fa fa-home" style='padding-bottom:10px;margin-left:-50px;margin-top: 20px; '></i> Home</a></li>



            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shield" style="padding-bottom:10px;margin-left:-50px;"></i> Policies<b class="caret"></b></a>
                    <ul class="dropdown-menu" style="width:80px;">
                        <li><a href="child_mback.php">Child Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="money_back20.php">Money Back Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="new_endow.php" id="1">Endowment Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="jeevan_arogya.php">Health Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="anmol_jeevan.php">Terms Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="jeevan_nidhi.php">Pension Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="study_career.php">Study Plans</a></li>
            <li class="divider"></li>
            <li><a href="unit.php">ULIP Plans</a></li>
                        <li class="divider"></li>
            <li><a href="jeevan_mangal.php">Micro Insurance<br>Plans</a></li>
                        <li class="divider"></li>
            <li><a href="aam_admi.php">Social Security<br>Scheme</a></li>
                        <li class="divider"></li>
            <li><a href="group_credit.php">Group Plans</a></li>
                    </ul>
            </li>
            <li><a href="contact.html" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" style='padding-bottom:10px;margin-left:-50px;'></i> Contact</a>


            </li>
            <li><a href="aboutus.html"><i class="fa fa-info-circle" style='padding-bottom:10px;margin-left:-50px;'></i> About</a></li>
            <li><a href="faq.html"><i class="fa fa-question-circle" style='padding-bottom:10px;margin-left:-50px;'></i> FAQ's</a></li>
            <li><a href="premium_calc.html"><i class="fa fa-calculator" style='margin-left:-50px;'></i>Premium Calculator</a></li>

             </ul>
</div>





<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
    


<!-- Use any element to open the sidenav -->

<div  onclick="openNav()"><h3><i class="fa fa-bars" style="margin-top:-10px;margin-left:-10px;"></i></h3><P style=margin-left:-10px;>MENU</p></div>



<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
         
</div>
        
       <div class="col-md-6 img-responsive " >
            <span style="font-size:35px;font-family:cursive;margin-left:-30px;color:#3b5998;" class="myLogo1" >
                go<i class="fa fa-umbrella img-responsive" id="logoumbrella"
                     style="font-size:90px;color:#3b5998;margin-left:-20px;text-shadow:10px 10px 5px grey;"></i></span>
            
            <span  style="font-size:35px;font-family:cursive;margin-left:-40px;color:#3b5998;" class="myLogo2">nsurance</span>
             <span  style="font-size:35px;font-family:cursive;color:#3b5998;">life</span>
        </div>
        <div class="col-md-4">
            <script type="text/javascript"   >
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<div id="google_translate_element" style="float:right;margin-top:13px;"></div>
        </div>
    </div>

  <div>
    <ul class="social">
        <li><a href=""><i class="fa fa-google-plus " style="background-color:#d34836;color:whitesmoke;text-align: center;"></i></a></li>
         <li><a href=""><i class="fa fa-facebook" style="background-color:#3b5998;color:whitesmoke;width:50px;text-align: center;"></i></a></li>
          <li><a href=""><i class="fa fa-instagram" style="background-color:#ff4d6a ;color:whitesmoke; width:50px;text-align: center;"></i></a></li>
           <li><a href=""><i class="fa fa-twitter" style="background-color:skyblue ;color:whitesmoke ;width:50px;text-align: center;"></i></a></li>
    </ul>
    </div>


</header>
     
     
 <!--<hr id="horizontalline" style="border:4px solid green;margin-top:70px;border-radius: 50%;">    -->

<body>
     
 

<div class="col-md-12">
    <div class="col-md-4">

    </div>

    <div class="col-md-8">
    <div class="col-md-2">
             <div style="margin-top:30px;">
                 <a href="premium_calc.html">  <i class="fa fa-calculator wow fadeInRight" style="font-size:40px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="premium_calc.html"> <span style="font-size:15px;color:#3b5998;margin-left:10px;"> Premium&nbsp;Calculator </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2">
             <div style="margin-top:30px;">
                 <a href="index.php">  <i class="fa fa-home wow fadeInRight" style="font-size:40px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="index.php"> <span style="font-size:15px;color:#3b5998;margin-left:60px;"> Home </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2">
             <div style="margin-top:30px;">
                 <a href="contact.html" data-toggle="modal" data-target="#myModal">  <i class="fa fa-envelope  wow fadeInRight" style="font-size:40px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="contact.html" data-toggle="modal" data-target="#myModal"> <span style="font-size:15px;color:#3b5998;margin-left:60px;"> Contact </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2">
             <div style="margin-top:30px;">
                 <a href="faq.html">  <i class="fa fa-question-circle  wow fadeInRight" style="font-size:40px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="faq.html"> <span style="font-size:15px;color:#3b5998;margin-left:60px;"> FAQ's </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2">
             <div style="margin-top:30px;">
                 <a href="aboutus.html">  <i class="fa fa-info-circle  wow fadeInRight" style="font-size:40px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="aboutus.html"> <span style="font-size:15px;color:#3b5998;margin-left:50px;"> About&nbsp;Us </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2">
             <div style="margin-top:30px;">
                 <a href="feedback.html">  <i class="fa fa-comment  wow fadeInRight" style="font-size:40px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="feedback.html"> <span style="font-size:15px;color:#3b5998;margin-left:30px;"> Feedback </span></a>
             </div>
             
         </div>
</div>
</div>
    <div class="col-md-12 img-responsive">
         
        
            
             <div class=" panel panel-body  ">
                 <div style="position:absolute;font-size:30px;margin-left:40px;margin-top:45px;font-weight:300;" class="wow bounceInLeft">
                     <span style="color:whitesmoke;" class="wow bounceInLeft pol_text1  ">LIC's Group Leave Encashment Scheme Plan</span>
                   
                 
                 </div>
                 
                 
                  <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:100px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1s">
                      <span style="color:whitesmoke;"></span>
                  </div>
                 
                 
                  
                 <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:150px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1.5s">
                      <span style="color:whitesmoke;"></span>
                  </div>
                 <div style="margin-right:-60px;">
                 <img src="images/leave_encashment.png"  id="endow_image" class="img-responsive pol_image" style="width:1300px;height:420px;margin-left:-30px;">
                 </div>
           <div class="col-md-12 img-responsive">
                 
                 <div class="col-md-3" style="margin-top:20px;margin-left:-40px;">
                     <span style="font-size:25px;margin-left:50px;color:background;">Secure your life</span><br />
                     <i class="fa fa-shield" style="margin-left:120px;font-size:45px;color:#009933;"></i>
             
                     <a href="group_credit.php" class="btn btn-danger wow fadeInLeft" style="width:280px;">
                         LIC Group Credit Life Insurance Plan</a>
                  
                     
                     <a href="single_premium_group.php" class="btn btn-danger wow fadeInLeft" style="margin-top:10px;width:280px;">
                       LIC Single Premium Group Insurance 
                     </a>
                     
                     <a href="group_leave_encash.php" class="btn btn-danger wow fadeInLeft" style="margin-top:10px;width:280px;">
                         LIC New Group Leave Encashment Plan
                     </a> 
                     
                      <a href="group_supreannuation.php" class="btn btn-danger wow fadeInLeft" style="margin-top:10px;width:280px;" >
                         LIC New Group Superannuation Cash <br> Accumulation Plan
                     </a> 
                     
                     
                       <a href="renew_group1.php" class="btn btn-danger wow fadeInLeft" style="margin-top:10px;width:280px;" >
                        LIC New 1 Year Renewable Group <br> Term Assurance Plan I
                     </a>
                   <a href="renew_group2.php" class="btn btn-danger wow fadeInLeft" style="margin-top:10px;width:280px;" >
                        LIC New 1 Year Renewable Group <br>Term Assurance Plan II
                     </a>
                   <a href="group_gratuity.php" class="btn btn-danger wow fadeInLeft" style="margin-top:10px;width:280px;" >
                        LIC New Group Gratuity Cash<br> Accumulation Plan
                     </a> 
                     
                     
                     <div style="margin-top:30px;">
                         <span style="font-size:20px;font-weight:200;margin-left:50px;">Still Confused..?</span>
                         <br />
                         <i class="fa fa-meh-o" style="font-size:60px;margin-left:75px;color:burlywood;"></i>
                     </div>
                     
                     
                     <div style="margin-top:30px;">
                         <span style="font-size:20px;font-weight:200;margin-left:25px;">Dont worry.We will help</span>
                         <i class="fa fa-smile-o"  style="font-size:60px;margin-left:75px;color:burlywood;"></i>
                     </div>
                     
                     <div style="margin-top:30px">
                         <button class="btn btn-info" style="margin-left:40px;"><a href="contact.html" data-toggle="modal" data-target="#myModal">Contact us here</a>
                             <i class="fa fa-address-book"></i></button> 
                     </div>
                     
                   </div> 
                     
                 
                 <div class="col-md-9" style="margin-left:20px;">
                 <div style="text-align:justify;font-weight:400;font-size:16px;margin-top:20px;" class="wow fadeInRight" >
                LIC’s New Group Leave Encashment Plan is a non–linked non-participating, fund based Variable Insurance Product. This plan helps to meet the employer’s Liability for providing Leave Encashment facility to their employees. The Plan also offers Life Cover Benefit so that in case of death of a group member an amount equal to sum assured in respect of that member will be paid. The amount of life cover in respect of each member shall be guided by the scheme rules of the employer.</div>
                       
<div>
                  <br><br><span style="font-weight:300;font-size:18px;color:background;"> Contribution :  <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span><br><br>
               <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Each policy year a Policyholder shall pay Contributions to secure Leave Encashment Benefit as per Scheme Rules and also to provide Life Cover Benefit.<br><br>
              The Contributions received under the scheme may include Contributions towards the past service liability and the Contributions in respect of that year. The employer/trustees may pay the Contributions at any time during the year.<br><br>
            All the Contributions paid by employer/ trustees will be credited to the Policy Account maintained in the name of employer/trustees.
          </div>     

<div>
                  <span style="font-weight:300;font-size:18px;color:background;"> Policy Account :  <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i> </span><br><br>
              <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight">  A single Policy Account shall be maintained in respect of all Contributions received from policyholder.<br><br>
                For a new scheme, a Policy Account will be created in respect of a scheme as soon as the Policyholder pays the first Contribution. The Policyholder’s Account shall be credited with interest amount by providing the following types of interest rates:<br><br>

                <strong>Minimum Floor Rate (MFR):</strong> MFR is a guaranteed interest rate that Policy Account shall earn during the entire policy term. This plan offers a Minimum Floor Rate (MFR) of 0.5% p.a.<br>
<strong>Additional Interest Rate (AIR):</strong> In addition to MFR, the Corporation shall also declare a non zero-positive Additional Interest Rate (AIR) at the beginning of each financial quarter on the Policy Account. This AIR shall remain guaranteed for that quarter.<br><br>
<strong>Residual Addition (RA):</strong> Starting from the fifth policy anniversary, in addition to MFR and AIR, the Corporation may also declare a non zero- positive Residual Addition (RA) on Policy Account at the end of each policy year.
          </div>     



                     
                  <div style="margin-top:20px;">  <span style="font-weight:300;font-size:20px;color:background;"> Benefits :
                       <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
                       <button class="btn btn-warning img-responsive wow fadeInRight quote1" style="margin-left:400px;" >Live,love,leave well<span style="font-size:13px;font-weight:200;"> &nbsp;Mario&nbsp;Alban&nbsp;Santos</span></button></span><br /><br />

                 <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight">In case of unfortunate death of a member Benefits payable on death of a member while in service: The benefit payable will be equal to the sum of following:<br><br>
                  Sum assured and<br><br>
                  Leave Encashment Benefit as per the scheme rules.<br><br>
                  Benefits payable on retirement / leaving service before Retirement: The Leave Encashment Benefits shall be payable as specified in the scheme rules
</p><br /></div>

                     
   <div>
    <span style="font-weight:300;font-size:20px;color:background;"> Charges :
     <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
     <button class="btn btn-warning img-responsive  wow fadeInRight quote2" style="margin-left:500px;margin-top:-20px;">Life is priceless, insurance is affordable <span style="font-size:13px;font-weight:200;">Dan Wilcox</span></button><br><br>

      <span style="font-weight:300;font-size:18px;color:background;"> Mortality Charges : <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
    <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"><br />
         Mortality Charge is the amount required to secure the Life Cover Benefits to the   members from year to year as per scheme rules. Mortality Charges will be deducted from Policy Account Value on monthly basis in advance.<br><br>
The total Mortality Charge to be deducted from Policy Account Value shall be the sum of Mortality Charges in respect of each member covered under the policy.<br><br>
The Mortality Charge Table to be applied to a group will depend on the size, mortality experience and risk profile including occupation of the group</p><br /><br>



      <span style="font-weight:300;font-size:18px;color:background;"> Policy Administration Charges : <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
    <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"><br />
         The Policy Administration Charge per year shall be Rs. 0.15 per Rs.1000/- of total Life Cover Benefit under the policy at the time of deduction of the charge. This charge will be a deducted from Policy Account on monthly basis in advance.</p><br />



      <span style="font-weight:300;font-size:18px;color:background;"> Market Value Adjustment : <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
    <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"><br />
          A Market Value Adjustment (MVA) will be applicable on Bulk Exits and complete surrender of the policy. The MVA will be applicable on withdrawal amount which is over and above 25% of the Policy Account Value. The MVA amount shall be derived at the time of exit using the following formula.<br><br>
MVA amount = [Maximum (0, Policy Account Value – Market Value) / Policy Account Value] * (Net amount which is over and above the amount representing Bulk Exit)<br><br>

Where, Market Value is derived from the revaluation of assets at the time when MVA is carried out. The assets will be earmarked separately for this product. The MVA amount, if any, will be deducted from the Policy Account Value.</p><br />



      <span style="font-weight:300;font-size:18px;color:background;"> Surrender Charges : <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
    <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"><br />
         If the policy is surrendered within three policy years from the date of commencement, the surrender charge shall be 0.05% of the Policy Account Value subject to maximum of Rs.500,000/-.<br><br>
No surrender charge will be levied if a policy is surrendered after completion of third policy anniversary.</p><br />


   </div>


          

                     
     </div>
                 
     
             
            
             
             
             </div>
             
             
             
    </div>

  
                     
         
      
    
    <div class="col-md-12">
         <table class=" table table-responsive table-hover table-striped  wow fadeInLeft" >
             <caption>Plan Parameters </caption>
             <tbody>
                 <tr>
                     <td>
                         Age of Entry
                     </td>
                     
                     <td>
                        18 to 75 years
                 </tr>
                 
                 <tr>
                     <td>Premium Paying Mode
                     </td>
                     
                     <td>
                        Single Premium only
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Policy Term
                     </td>
                     
                     <td>
                          Annually renewable
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Basic Sum Assured
                     </td>
                     
                     <td>
                         1,000 and above 
                     </td>
                 </tr>
              
                 <tr>
                     <td>
                         Loan
                     </td>
                     
                     <td>
                         No Loan
                     </td>
                 </tr>
               
                
                 
             </tbody>
         
         </table>
         
     </div>
 
</div>

     

  
  
 <button onclick="topFunction()" id="myBtn" title="Go to top">
             <i class="fa fa-arrow-up"></i></button>
         
   
         
    
 
  


 
  <footer class="col-md-12 wow fadeInRight" style="background:black;margin-top:5px;">
      
      <div class="col-md-8">
          <div class="footer_title">
              <br /><br />
              <span style="color:whitesmoke;"><u>About LIC</u></span>
            <br /><br />
                  
           <div class="description">
              <p>
                  <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite"  style="color:#ffffe6;"></i>
                  <span style="color:whitesmoke;">  Life Insurance Corporation of India is the No. 1 brand in service sector and 240 million+ lives are part of LIC of India.</span>
                  
                  <br/>
                   <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                   <span style="color:whitesmoke;"> LIC policies are available for all segment.</span>
                  <br />
                   <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                   <span style="color:whitesmoke;"> Transparency in operations.</span>
                  <br />
                   <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                   <span style="color:whitesmoke;"> Settles more than 2 claims per second.</span>
                   <br />
                    <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                    <span style="color:whitesmoke;"> LIC has a customer base of more than 28 crore policy holders.</span>
                   
              </p>
           
          </div>
      </div>
      </div>
      <div class="col-md-4">
          <div class="col-md-5 links">
          <ul style="list-style:none;margin-top:30px;">
              <li>
                  <p style="color:whitesmoke;"><u>Quick&nbsp;Links</u></p>
              </li>
              <li>
                  <br />
                  <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                      
                  <a  style="color:whitesmoke;" href="whylic.html">Why LIC?</a>
              </li>
              <li>
                   <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                  <a  style="color:whitesmoke;" href="contact.html" data-toggle="modal" data-target="#myModal">Contact</a>
              </li>
              <li>
                   <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                  <a style="color:whitesmoke;" href="aboutus.html">About Us</a>
              </li>
          </ul>
          </div>
              
              <div class="col-md-7">
                  <ul style="list-style:none;margin-top:30px;">
                      <li><p style="color:whitesmoke;"><u>Popular&nbsp;Plans</u></li>
                      <li>
                          <br />
                           <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                         <a  style="color:whitesmoke;" href="jeevan_anand.php">New&nbsp;Jeevan&nbsp;Anand</a>
                        </li>
                        <li>
                             <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                  <a style="color:whitesmoke;" href="jeevan_labh.php">Jeevan&nbsp;Labh</a>
              </li>
              <li>
                   <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                  <a style="color:whitesmoke;" href="jeevan_akshay.php">Jeevan&nbsp;Akshay</a>
              </li>
                  </ul>
              </div>
      </div>
      
      
     
      
     
      <div class="col-md-12">
         
      </div>
      <div class="breadcrumb col-md-12">
          <li class="breadcrumb-item"><i class="fa fa-user"> </i> Vinod Bhat</li>
           <li class="breadcrumb-item"><i class="fa fa-phone"> 9811884408</i></li>
            <li class="breadcrumb-item"><i class="fa fa-envelope"></i> support@goinsurancelife.com</li>
      </div>
      <div class="col-md-12" style="text-align:center;"><a  style="color:whitesmoke;" href="https://www.licindia.in">Visit LIC India for more details</a></div>
      <div class="col-md-12">
      <hr>
      </div>
      <div class="col-md-12">
      <div class="col-md-6">
          <span style="color:whitesmoke;">Copyright &copy; 2017</span> <a  style="color:whitesmoke" href="#">Bhatpolicy.com</a>.<span style="color:whitesmoke;">All rights Reserved</span>
      </div>
      
      <div class="col-md-6" style="float:right; text-align: right; color:whitesmoke;">
          Designed by CodeBazaar
      </div>
      </div>
      
       
  </footer>

  
  
  
  

  
</body>
  
  </html>