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
	
	echo 'window.location.href = "jeevan_arogya.php";';
	
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
                <form method="post" action="addcontact.php?id=jeevan_arogya.php">
                  
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
      <li><a href="file:///C:/xampp/Desktop/htdocs/final_lic%20(1)/final_lic/public_html/index.html"><i class=" fa fa-home" style='padding-bottom:10px;margin-left:-50px;margin-top: 20px; '></i> Home</a></li>



            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shield" style="padding-bottom:10px;margin-left:-50px;"></i> Policies<b class="caret"></b></a>
                    <ul class="dropdown-menu" style="width:80px;">
                       <li><a href="child_mback.html">Child Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="money_back20.html">Money Back Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="new_endow.html" id="1">Endowment Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="jeevan_arogya.html">Health Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="anmol_jeevan.html">Terms Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="jeevan_nidhi.html">Pension Plans</a></li>
                        <li class="divider"></li>
                        <li><a href="study_career.html">Study Plans</a></li>
            <li class="divider"></li>
            <li><a href="unit.html">ULIP Plans</a></li>
                        <li class="divider"></li>
            <li><a href="jeevan_mangal.html">Micro Insurance<br>Plans</a></li>
                        <li class="divider"></li>
            <li><a href="aam_admi.html">Social Security<br>Scheme</a></li>
                        <li class="divider"></li>
            <li><a href="group_credit.html">Group Plans</a></li>
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
                 <a href="index.html">  <i class="fa fa-home wow fadeInRight" style="font-size:40px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="index.html"> <span style="font-size:15px;color:#3b5998;margin-left:60px;"> Home </span></a>
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
         
        
             
             
             <div class="col-md-12" style="margin-top:30px;">
                  
            
                 
            
             </div>
             
            
             <div class=" panel panel-body  ">
                 <div style="position:absolute;font-size:30px;margin-left:40px;margin-top:45px;font-weight:300;" class="wow bounceInLeft">
                     <span style="color:whitesmoke;" class="wow bounceInLeft pol_text1">LIC's Jeevan Arogya </span>
                   
                 
                 </div>
                 
                 
                  <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:120px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1s">
                      <span style="color:whitesmoke;" class="pol_text2">A full proof plan which will take care of health of your whole family. </p></span>
                  </div>
                 
                 <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:150px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1.5s">
                      <span style="color:whitesmoke;"></span>
                  </div>
                 
                 
                 <div style="margin-right:-60px;">
                 <img src="images/jeevanarogya.jpg"  id="jeevan_arogya_image" class="img-responsive pol_image" style="width:1300px;height:420px;margin-left:-30px;">
                 </div>
                 
           <div class="col-md-12 img-responsive">
                 
                 <div class="col-md-3" style="margin-top:20px;margin-left:-40px;">
                     <span style="font-size:25px;margin-left:50px;color:background;">Secure your life</span><br />
                     <i class="fa fa-shield" style="margin-left:120px;font-size:45px;color:#009933;"></i>
             
                     <a href="jeevan_arogya.html" class="btn btn-danger wow fadeInLeft" style="width:280px;">LIC's Jeevan Arogya
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
                 LIC's Jeevan Arogya is a unique non-participating non-linked plan which provides health insurance cover against certain specified health risks and provides you with timely support in case of medical emergencies and helps you and your family remain financially independent in difficult times.

Health has been a major concern on everybody’s mind, including yours. In these days of skyrocketing medical expenses, when a family member is ill, it is a traumatic time for the rest of the family. As a caring person, you do not want to let any unfortunate incident to affect your plans for you and your family. So why let any medical emergencies shatter your peace of mind.</div>
                 
                  
                 
                
                     <div style="margin-top:20px;">  <span style="font-weight:300;font-size:20px;color:background;"> LIC’s Jeevan Arogya gives you:
</span>
                             <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
                             <button class="btn btn-warning img-responsive wow fadeInRight quote1" style="margin-left:400px;" >Live,love,leave well<span style="font-size:13px;font-weight:200;"> &nbsp;Mario&nbsp;Alban&nbsp;Santos</span></button></span><br /><br />
                       <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight">
                        <ul>              
<li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Valuable financial protection in case of hospitalisation, surgery etc</li>
<li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Increasing Health cover every year</li>
<li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Lump sum benefit irrespective of actual medical costs</li>
<li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> No claim benefit</li>
<li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Flexible benefit limit to choose from</li>
<li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Flexible premium payment options</li>
</ul>
   </p></div>

   <div>
    <span style="font-weight:300;font-size:18px;color:background;">Who can be insured?

     <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
    
    <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"><br>
        You (as Principal Insured (PI)), your spouse, your children, your parents and parents of your spouse can all be insured under one policy. Quite a relief isn’t it, to have all insured under one policy!
The minimum and maximum age at entry is as under:</p><br />

   </div>
                     
                     
  <div>

        <span style="font-weight:300;font-size:18px;color:background;">How long are each insured under this policy? 

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
    Each of the insured are covered for Health risks up to age (80). Children are insured up to age 25 years.
  </div>

 <div>

        <span style="font-weight:300;font-size:20px;color:background;">BENEFITS :

    <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
     <button class="btn btn-warning img-responsive wow fadeInRight quote1" style="margin-left:400px;" >Live,love,leave well<span style="font-size:13px;font-weight:200;"> &nbsp;Mario&nbsp;Alban&nbsp;Santos</span></button></span><br /><br />
            
                              
       <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight">
        <ul>
          <li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Hospital cash benefit (HCB)</li>
          <li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Major Surgical Benefit (MSB)</li>
          <li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Day Care Procedure Benefit</li>
          <li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Other Surgical Benefit</li>
          <li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Ambulance Benefit</li>
          <li style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"> Premium waiver Benefit (PWB)</li>

        </ul>

         </div>
   <div>

        <span style="font-weight:300;font-size:18px;color:background;">A) Hospital Cash Benefit :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
 If you or any of the insured lives covered under the policy is hospitalised due to Accidental Body Injury or Sickness and the stay in hospital exceeds a continuous period of 24 hours, then for any continuous period of 24 hours or part thereof, provided any such part stay exceeds a continuous period of 4 hours (after having completed the 24 hours as above) in a non-ICU ward/room of a hospital, an amount equal to the Applicable Daily Benefit (ADB) available under the policy during that policy year shall be payable subject to benefit limits and conditions mentioned in Para 11A) and exclusions mentioned in Para 15 below.<br><br>
During the first year of cover commencement in respect of each insured, the Applicable Daily Benefit shall be the Initial Daily Benefit amount chosen by you and mentioned in the policy Schedule.<br><br>
The amount of ADB for each policy year, after the first policy year, shall consist of 2 parts:<br><br>
An arithmetic addition of an amount equal to 5% (five percent) of the Initial Daily Benefit to the Applicable Daily Benefit of the previous Policy Year. Such increase in the Applicable Daily Benefit shall be effected on each policy anniversary during the Cover Period and shall continue until it attains a maximum amount of 1.5 times the Initial Daily Benefit. Thereafter, this amount in each Policy Year in future shall remain at that maximum level attained.<br><br>
Further arithmetic addition of an amount equal to “No Claim Benefit” (as described in Para 1.G) below) provided the policy attracts and is eligible for it. There shall be no maximum limit for such increase which means that if this policy is eligible for “No Claim Benefit”, the same shall be granted throughout the Cover Period without any maximum limit.<br><br>
For members included subsequently under the policy, the benefit in the first year shall be equal to Initial Daily Benefit amount and thereafter the Applicable Daily Benefit shall increase as above.<br><br>
If any of the member insured is required to stay in an Intensive Care Unit of a hospital, two times the Applicable Daily Benefit will be payable subject to benefit limits and conditions mentioned in Para 11A) and exclusions mentioned in Para 15 below.<br>
During one period of 24 continuous hours (i.e. one day) of Hospitalisation (after having completed the 24 hours as above), if the said Hospitalisation included stay in an Intensive Care Unit as well as in any other in-patient (non-Intensive Care Unit) ward of the Hospital, the Corporation shall pay benefits as if the admission was to the Intensive Care Unit provided that the period of Hospitalisation in the Intensive Care Unit was at least 4 continuous hours.<br><br>
No benefit will be payable for the first 24 hours of hospitalisation. However, for every Hospitalization that extends for a continuous period of 7 days or more, the Daily Hospital Cash Benefit would also be paid for first 24 hours (day one) of hospitalization, regardless of whether the Insured was admitted in a general or special ward or in an intensive care unit.<br>

  </div>

 <div>

        <span style="font-weight:300;font-size:18px;color:background;">B) Major Surgical Benefit :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
        
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>In the event of an Insured under this plan, due to medical necessity, undergoing one of the surgeries defined in Major Surgical Benefit Annexure, within the cover period in a hospital due to Accidental Bodily Injury or Sickness, the respective benefit percentage of the Major Surgical Benefit Sum Assured, as specified against each of the eligible surgeries mentioned in Major Surgical Benefit Annexure, shall be paid subject to benefit limits and conditions mentioned in Para 11B) and exclusions mentioned in Para 15 below.
   </div>


<div>
   <span style="font-weight:300;font-size:18px;color:background;">C) Day Care Procedure Benefit :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
    In the event of an Insured under this Plan undergoing any specified Day Care Procedure mentioned in the Day Care Procedure Benefit Annexure due to medical necessity, a lump sum amount equal to 5 (five) times the Applicable Daily Benefit shall be paid, regardless of the actual costs incurred, subject to benefit limits and conditions mentioned in Para 11C) and exclusions mentioned in Para 15 below.
</div>


<div>
  <span style="font-weight:300;font-size:18px;color:background;">D) Other Surgical Benefit :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
In the event of an Insured under this Plan, due to medical necessity, undergoing any Surgery not listed under Major Surgical Benefit or Day Care Procedure Benefit, causing the Insured’s Hospitalization to exceed a continuous period of 24 hours within the Cover Period, then, a daily benefit equal to 2 (two) times the Applicable Daily Benefit shall be paid for each continuous period of 24 hours or part thereof provided any such part stay exceeds a continuous period of 4 hours of Hospitalization, subject to benefit limits and conditions mentioned in Para 11D) and exclusions mentioned in Para 15 below
</div>


<div>
   <span style="font-weight:300;font-size:18px;color:background;">E) Ambulance Benefit

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
    In the event that a Major Surgical Benefit falling under Category 1 or Category 2 (as mentioned in the Major Surgical Benefit Annexure) is payable and emergency transportation costs by an ambulance have been incurred, an additional lump sum of ` 1,000 will be payable in lieu of ambulance expenses.<br>

</div>

<div>
   <span style="font-weight:300;font-size:18px;color:background;">F) Premium Waiver Benefit:

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
     In the event that a Major Surgical Benefit falling under Category 1 or Category 2 (as mentioned in the Major Surgical Benefit Annexure) is payable in respect of any Insured covered under the policy, the total annualized premium i.e. total one year premium in respect of that Policy from the date of instalment premium due coinciding with or next following the date of the Surgery will be waived.<br>

</div>
<div>
   <span style="font-weight:300;font-size:18px;color:background;">G) No claim benefit:

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
      A no claim benefit will be paid in the event that during the period between Date of Commencement of policy and next Automatic Renewal Date or between two Automatic Renewal Dates (described in Para 4 below) there are no claims in respect of any Insured covered under your policy. The amount of the no claim benefit would be equal to 5% (five percent) of the Initial Daily Benefit in respect of each Insured and the resulting amount shall be added to arrive at the Applicable Daily Benefit in respect of each Insured for the Policy Year next following the most recent Automatic Renewal Date.<br>

<br><br>
</div>

<div>
   <span style="font-weight:300;font-size:18px;color:background;">Payment of Premiums:

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
   You may pay premiums regularly at yearly or half-yearly intervals over the term of the policy.<br><br>
   The premium in respect of each individual will be payable from the date of entry into the policy till the date of exit from the policy and will depend on the age of the insured member, the level of Hospital Cash Benefit (HCB) chosen, whether the insured member is Principal Insured or any other Insured life (in case of cover for more than one member in a policy). The level of premium for Principal Insured and the other insured members shall be different for the same age and same level of cover.<br><br>
   The premiums are guaranteed for 3 years from the date of commencement of policy. Thereafter i.e. at the end of every 3 years, the Corporation reserves the right to review the premium to take account of the experience of the portfolio subject to prior approval from IRDA. The rates applicable on every Automatic Renewal Date shall be guaranteed for a further period of 3 years i.e. till next Automatic Renewal Date.<br><br>
   The premium rates in respect of each insured member on renewal will be based on age of that member at the time of inclusion into the policy.
  <br><br>
   The total premium to be charged for a policy will be the sum of premiums in respect of each member to be covered in that policy.
   <br>   

</div>

<div>
   <span style="font-weight:300;font-size:18px;color:background;">2. Automatic Renewal Date :
         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>

   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>The installment premium will be guaranteed in respect of each Insured for a period of 3 years from the Date of Commencement of the policy, i.e. for the first 3 years of the policy. Thereafter, at the end of every third policy anniversary, the premiums may be reviewed to take into account the Corporation’s experience, subject to prior approval from IRDA. These premium due dates, at the end of every third policy anniversary, starting from the date of commencement of policy till the date of cover expiry, on which the installment premiums are reviewable, will be referred as Automatic Renewal Dates in respect of all Insured in the Policy.<br><br>
    On any Automatic Renewal Date in the future, the installment premium will be based on the age of the Insured at the time of inclusion into the policy and the Corporation’s premium rates then prevailing for this product.<br><br></p>

    <span style="font-weight:300;font-size:18px;color:background;">Options :</span>
      <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
       <span style="font-weight:300;font-size:16px;color:background;"> <u>A) Cover to new additional members :</u></span>
         If PI gets married/ remarried during the term of the policy, the spouse and parents-in- law can be included in the policy within six months from the date of marriage / remarriage, but the cover shall start from the policy anniversary coinciding with or next ollowing the date of inclusion. Enhanced premium shall be due from such policy anniversary.<br><br>
        Similarly, Any child born/legally adopted after taking the policy can also be covered from the next immediate policy anniversary date following the date on which the child completes the age of 3 months. If the age of legally adopted child on the date of adoption is more than 3 months, the child can be covered from policy anniversary coinciding with or next following the date of adoption. Enhanced premiums shall be due from such policy anniversary.<br><br>
        Inclusion of each additional member will be on payment of enhanced premiums and subject to various terms and conditions of the plan.<br><br>
        Any addition of new lives shall be allowed by the PI only. After the death of PI, no addition will be allowed.<br><br>
        Addition in any other case will not be allowed. The existing spouse, parents, parents- in-law and children, if not covered at the time of taking policy, shall not be covered under the policy.<br><br>
        If both of the parents (father and mother) are alive and are eligible for cover, then either both of them will have to be covered or none of them will be covered. The PI will not have any option to choose one of them. The same condition will apply for parents-in- law also at the time of purchasing a policy or on addition of new members under an existing policy.<br><br>

        <span style="font-weight:300;font-size:16px;color:background;"><u>B) Option to migrate :</u></span> Children covered under this plan shall have the option to take a suitable new health insurance policy (subject to underwriting) at the end of the specified exit age or at the renewal of the policy after completion of 18 years of age.
        <br><br>
        i) The new policy should be purchased within 90 days of the termination of child’s membership from the existing policy.<br><br>
        ii) The Insured member shall be eligible for suitable credits gained for pre-existing conditions and time bound exclusions for all the previous years, provided the policy is in-force. The outstanding Waiting periods and outstanding period of any Exclusion will however apply under the new policy.<br><br>
        iii) These credits shall be available up to a maximum of the current SA level under the existing policy.
        <br><br>
        iv) Other terms and conditions including premium rates will be as applicable for the new policy.<br><br>
        
        <span style="font-weight:300;font-size:16px;color:background;"><u>C) Quick Cash facility :</u></span> If any of the insured lives undergoes any eligible surgery covered under Category I or II of MSB in any of the listed network hospitals, you, as PI will have an option to avail Quick Cash facility. Under this facility, 50% of eligible MSB amount would be made available even during the period of hospitalization of any of the insured lives covered (the surgery may be either planned or emergency due to accident) instead of waiting for making a claim for the benefit after discharge. It will be only an advance payment in the event of hospitalization for any MSB defined in the surgeries listed under categories I & II and permissible under the policy conditions of the plan. This will be, however, subject to approval from the Corporation, and the advance amount will be adjusted from the final settlement of MSB claim amount.<br><br>
        This facility of advance payment could be availed by submitting your Bank Account details in the prescribed format. The amount of advance shall be credited to your bank account directly.<br><br>

        <span style="font-weight:300;font-size:18px;color:background;"><u>D) LIC New Term Assurance Rider (512B210V01) :</u></span> You, as PI, and/ or your spouse may opt for Term Assurance as optional rider equal to the MSB SA. In case of unfortunate death, an amount equal to Term Assurance Sum Assured will be payable on death during the term for which Term Assurance Rider is opted for.<br><br>
        <span style="font-weight:300;font-size:18px;color:background;"><u>E) LIC Accident Benefit Rider (512B203V02):</u></span> You and/ or your spouse may also opt for Accident Benefit Rider if Term Assurance Rider has been opted for. Maximum Accident Benefit Sum Assured shall be equal to the Term Assurance Rider SA. In case of unfortunate death due to an accident, an amount equal to Accident Benefit Sum Assured shall be payable.Accident Benefit Rider will be available under the plan by payment of additional premium of ` 0.50 for every ` 1,000/- of the Accident Benefit Sum Assured per policy year in respect of each life to be covered.<br><br>
        The additional premium for this benefit will not be required to be paid on and after the Policy anniversary on which the Term Assurance Rider ceases.<br><br>


</div>

<div>
   <span style="font-weight:300;font-size:18px;color:background;">3. Other Features :
         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
      <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
<span style="font-weight:300;font-size:16px;color:background;">A) Death Benefit under the basic plan :</span> No death benefits will be payable on the death of any Insured unless any of the Rider Benefits mentioned above has been opted for.<br><br>
On death of the Principal Insured;<br><br>
a) The surviving Insured Spouse will become the Principal Insured provided the option is exercised at the beginning of the contract and the Policy will continue. In such case, the premium for the Insured Spouse will change from the date coinciding with or following instalment premium due date and the new premium would be based on tabular premium rates applicable for PIs and the age for calculation of revised premium rate will be the age at entry of the spouse. If the option is not exercised at the beginning of the contract, the Insured Spouse will not become PI and the policy will terminate.<br><br>
b) If the Insured Spouse had predeceased the Principal Insured, then the other Insured will have the option to take a new policy and the existing Policy will terminate. In respect of these other Insured:<br><br>
i. The new policy will be issued without any underwriting if the new policy is bought within 90 days of the termination of the existing Policy.<br><br>
ii. The maximum entry age condition will not apply for the new policy.<br><br>
iii. The outstanding Waiting periods and outstanding period of any Exclusion will however apply under the new policy.<br><br>
iv. Other terms and conditions including premium rates will be as applicable for the new policy.<br><br>
In the event of death of an Insured person other than the Principal Insured, the policy will continue after removal of the Insured and change in premium will apply from the instalment premium due date coinciding with or next following the date of intimation of death of the Insured.<br><br>
<span style="font-weight:300;font-size:16px;color:background;">B) Maturity Benefit:</span> No benefits are payable at end of the Cover Period.<br><br>
<span style="font-weight:300;font-size:16px;color:background;">C) Discontinuance of premiums:</span> A grace period of one month but not less than 30 days will be allowed for payment of yearly or half yearly premiums.<br><br>
If premium is not paid before the expiry of the days of grace, the Policy lapses and all the benefits payable under this plan will cease.<br><br>
<span style="font-weight:300;font-size:16px;color:background;">D) Revival:</span> A lapsed policy may be revived by the PI within a period of 2 years from the due date of first unpaid premium but before the expiry of cover in respect of PI, on submission of proof of continued insurability to the satisfaction of the Corporation and the payment of all the arrears of premium together with interest at such rate as may be fixed by the Corporation from time to time. The Corporation reserves the right to accept at original terms, accept with modified terms or decline the revival of a discontinued policy. The revival of the discontinued policy shall take effect only after the same is approved by the Corporation and is specifically communicated to the PI.<br><br>
Waiting periods and Exclusions, as described in Para 14 and 15 respectively, will apply on revival. The Principal Insured may need to provide satisfactory evidence of good health in respect of each Insured as required by the Corporation, at his own expense. The Date of Revival will be when all requirements for revival/reinstatement are met and approved by the Corporation at its sole discretion.<br><br>
No benefit will be paid for an event that occurred during the lapse period till the Date of Revival when the Policy was in a discontinued state.<br><br>
Further, if the Automatic Renewal Date falls between the revival period and revival is done after the Automatic Renewal Date, the premium before and after the Automatic Renewal Date may be different.<br><br>
Revival will not be allowed post the revival period.<br><br>
<span style="font-weight:300;font-size:16px;color:background;">E) Surrender:</span> No surrender value will be available under the plan.<br><br>
<span style="font-weight:300;font-size:18px;color:background;">4. Cooling off period:</span>
  If you are not satisfied with the “Terms and Conditions” of the policy, you may return the policy to us within 15 days from the date of receipt of the policy. The Corporation will cancel the policy and return the premium paid subject to the following deductions:1) Stamp duty on the policy 2) Proportionate Risk Premium for the period on cover 3) Any expense borne by the Corporation on medical examination and special reports, if any of the Insured persons.<br><br>
<span style="font-weight:300;font-size:18px;color:background;">5. Loan:</span>
  No loan will be available under this plan.<br><br>
<span style="font-weight:300;font-size:18px;color:background;">6. Assignment:</span> No Assignment will be allowed under this plan.<br><br>
<span style="font-weight:300;font-size:18px;color:background;">7. Benefit Limits and Conditions:</span><br><br>
 <span style="font-weight:300;font-size:16px;color:background;">A) Hospital Cash Benefit:</span><br><br>
i) The Hospital Cash Benefit shall be payable only if Hospitalisation has occurred within India.<br><br>
ii) The total number of days for which hospital cash benefit would be payable, in respect of each Insured, in a Policy Year would be restricted to <br><br>
a) A maximum of 30 (thirty) days of Hospitalization out of which not more than 15 (fifteen) days shall be in an Intensive Care Unit in the first Policy Year following the date of commencement of cover in respect of that Insured.<br><br>
b) A maximum of 90 (ninety) days of Hospitalization out of which not more than 45 (forty five) days shall be in an Intensive Care Unit in the second and subsequent Policy Years following the date of commencement of cover in respect of that Insured<br><br>
iii) The total number of days of Hospitalization for which Hospital Cash Benefit is payable during the Cover Period, in respect of each and every Insured covered under the policy, shall be limited to a maximum of 720 (seven hundred and twenty) days out of which not more than 360 (three hundred and sixty) days shall be in an Intensive Care Unit. Upon attainment of this limit by an Insured, the Hospital Cash Benefit in respect of that Insured shall cease immediately.<br><br>
iv) The Benefit Limits specified in the above clauses in respect of an Insured under this Policy, shall solely and exclusively apply to that Insured. Any unclaimed Hospital Cash Benefit of any one Insured is not transferable to any other Insured.<br><br>
 <span style="font-weight:300;font-size:16px;color:background;">B) Major Surgical Benefit:</span><br><br>
i. If more than one Surgery is performed on the Insured, through the same incision or by making different incisions, during the same surgical session, the Corporation shall only pay for that Surgery performed in respect of which the largest amount shall become payable.<br><br>
ii. The Major Surgical Benefit shall be paid as a lump sum as specified for the benefit concerned and is subject to providing proof of Surgery to the satisfaction of the Corporation.<br><br>
iii. All Surgical Procedures claimed should be confirmed as essential and required, by a qualified Physician or Surgeon, to the satisfaction of the Corporation.<br><br>
iv. The Major Surgical Benefit will be payable only after the Corporation is satisfied on the basis of medical evidence that the specified Surgery covered under the Policy has been performed.<br><br>
v. The Major Surgical Benefit shall be payable only if the Surgery has been performed within India.<br><br>
vi. The amount in lieu of ambulance expenses shall be payable only once in respect of each Insured in any Policy Year and is subject to providing satisfactory evidence to the Corporation.<br><br>
vii. The total amount payable in respect of each Insured under the Major Surgical Benefit in any Policy Year during the Cover Period shall not exceed 100% of the Major Surgical Benefit Sum Assured in that Policy year.<br><br>
viii. The total amount payable in respect of each Insured during the Cover Period under the Major Surgical Benefit shall not exceed a maximum limit of 800% of the Major Surgical Benefit Sum Assured. If the total amount paid in respect of an Insured equals this lifetime maximum limit, the Major Surgical Benefit in respect of that Insured will cease immediately.<br><br>
ix. The Benefit Limits specified in the above clauses in respect of an Insured under this Policy, shall solely and exclusively apply to that Insured. Any unclaimed Major Surgical Benefit of any one Insured is not transferable to any other Insured.<br><br>
x. The Major Surgical benefit for any surgery cannot be claimed and shall not be payable more than once for the same surgery during the term of the policy.<br><br>
 <span style="font-weight:300;font-size:16px;color:background;">C) Day Care Procedure Benefit:</span><br><br>
i. If more than one Day Care Procedure is performed on the Insured, through the same incision or by making different incisions, during the same surgical session, the Corporation shall only pay for one Day Care Surgical Procedure.<br><br>
ii. The Day Care Procedure Benefit shall be paid as a lump sum and is subject to providing proof of Surgery to the satisfaction of the Corporation.<br><br>
iii. All Surgical Procedures claimed should be confirmed as essential and required, by a qualified Physician or Surgeon, to the satisfaction of the Corporation.<br><br>
iv. The Day Care Procedure Benefit will be payable only after the Corporation is satisfied on the basis of medical evidence that the specified Surgical Procedure covered under the policy has been performed.<br><br>
v. The Day Care Procedure Benefit shall be payable only if the Surgical Procedure has been performed within India.<br><br>
vi. In respect of each Insured, the Day Care Procedure Benefit will be payable only up to a maximum of 3 (three) Surgical Procedures in any Policy Year during the Cover Period.<br><br>
vii. In respect of each Insured during the Cover Period, the Day Care Procedure Benefit will be payable only up to a maximum of 24 (twenty four) Surgical Procedures. If the number of Surgical Procedures eligible for the Day Care Procedure Benefit in respect of an Insured equals this lifetime maximum limit, the Day Care Procedure Benefit in respect of that Insured will cease immediately.<br><br>
viii. The Benefit Limits specified in the above clauses in respect of an Insured under this Policy, shall solely and exclusively apply to that Insured. Any unclaimed Day Care Procedure Benefit of any one Insured is not transferable to any other Insured.<br><br>
ix. If a Day Care Procedure Benefit is performed no Hospital Cash Benefit shall be paid.<br><br>
 <span style="font-weight:300;font-size:16px;color:background;">D) Other Surgical Benefit:</span><br><br>
i. If more than one Surgical Procedure is performed on the Insured, through the same incision or by making different incisions, during the same surgical session, the Corporation shall only pay for one Surgical Procedure.<br><br>
ii. The Other Surgical Benefit shall be paid as a Daily Benefit and is subject to providing proof of Surgery to the satisfaction of the Corporation.<br><br>
iii. All Surgical Procedures claimed should be confirmed as essential and required, by a qualified Physician or Surgeon, to the satisfaction of the Corporation.<br><br>
iv. The Other Surgical Benefit will be payable only after the Corporation is satisfied on the basis of medical evidence that the specified Surgical Procedure covered under the policy has been performed.<br><br>
v. The Other Surgical Benefit shall be payable only if the Surgical Procedure has been performed within India.<br><br>
vi. The total number of days of Hospitalization for which the Other Surgical Benefit is payable during a Policy Year in respect of each and every Insured covered under the Policy shall not exceed 15 (fifteen) days in the first Policy Year following the date of commencement of cover in respect of that Insured and 45 (forty five) days for the second and subsequent Policy Years following the date of commencement of cover in respect of that Insured.<br><br>
vii. The total number of days of Hospitalization for which the Other Surgical Benefit is payable during the Cover Period, in respect of each and every Insured covered under the Policy shall not exceed a maximum limit of 360 (three hundred and sixty) days. Upon attainment of this lifetime maximum limit, the Other Surgical Benefit in respect of that Insured will cease immediately.<br><br>
viii. The Benefit Limits specified in the above clauses in respect of an Insured under this Policy, shall solely and exclusively apply to that Insured. Any unclaimed Other Surgical Benefit on any one Insured is not transferable to any other Insured.<br><br>
 <span style="font-weight:300;font-size:18px;color:background;">8. Commencement And Termination Of Benefit Covers:</span><br><br>
  The Hospital Cash Benefit, Major Surgical Benefit, Day Care Procedure Benefit and Other Surgical Benefit cover in respect of each Insured covered under your policy shall commence on the Date of Cover Commencement individually stated in the Policy Schedule.<br><br>
The Hospital Cash Benefit, Major Surgical Benefit, Day Care Procedure Benefit and Other Surgical Benefit cover in respect of each Insured shall terminate at the earliest of the following:<br><br>
i. The Date of Cover Expiry mentioned in the Policy Schedule;<br><br>
ii. On exhausting all the lifetime maximum Benefit Limits as specified in Para 11 above;<br><br>
iii. On death or Date of Cover Expiry of the Principal Insured and if the Policy does not continue with the Insured Spouse as the Principal Insured;<br><br>
iv. On death or Date of Cover Expiry of Insured Spouse after the Policy continues with the Insured Spouse as the Principal Insured after the PI dies or reaches his/her Date of Cover Expiry.<br><br>
v. On death of the Insured;vi.In respect of the Insured Spouse, on divorce or legal separation from the Principal Insured;<br><br>
vii.On termination of the Policy due to non-payment of premium or any other reason.<br><br>
 <span style="font-weight:300;font-size:18px;color:background;">9.Termination of Policy:</span><br><br>
A)If policy is issued on single life:<br><br>
The policy shall terminate at the earliest of the following:<br><br>
i. Non-payment of premiums within the revival period;<br><br>
ii. On death;<br><br>
iii. On the Date of Cover Expiry mentioned in the Policy Schedule;<br><br>
iv. On exhausting all the lifetime maximum Benefit Limits as specified in Para 11 above.<br><br>
B) If policy is issued on more than one lifeThe policy shall terminate at the earliest of the following:<br><br>
i. Non-payment of premiums within the revival period;<br><br>
ii. On PI exhausting all the lifetime maximum Benefit Limits as specified in Para 11 above.<br><br>
iii. On death or Date of Cover Expiry, of the Principal Insured and if the Policy does not continue with the Insured Spouse as the Principal Insured.<br><br>
iv. On the death or Date of Cover Expiry, of Insured Spouse after the Policy continues with the Insured Spouse as the Principal Insured after the PI dies or reaches his/her Date of Cover Expiry.<br><br>
 <span style="font-weight:300;font-size:18px;color:background;">10. Waiting Period:</span><br><br>
General waiting period:<br><br>
There shall be no general waiting period in case Hospitalization or Surgery is due to Accidental Bodily Injury. There shall be a general waiting period during which no benefits shall be payable in the event of Hospitalization or Surgery, if the said Hospitalization or Surgery occurred due to Sickness.<br><br>
i. The general waiting period shall be 90 (ninety) days from the Date of Cover Commencement in respect of each Insured.<br><br>
ii. If the policy is revived after discontinuance of the Cover then the following shall apply in respect of each Insured:<br><br>
a. If the request for revival is received by the Corporation within 90 (ninety) days from the due date of the first unpaid premium, then there shall be a general waiting period of 45 (forty five) days from the Date of Revival in respect of each Insured.<br><br>
b. If the request for revival is received by the Corporation beyond 90 (ninety) days from the due date of the first unpaid premium, then there shall be a general waiting period of 90 (ninety) days from the Date of Revival in respect of each Insured.<br><br>
Specific waiting period:<br><br>
In addition, in respect of each Insured, no benefits are available hereunder and no payment will be made by the Corporation for any claim under this Policy on account of Hospitalization or Surgery directly or indirectly caused by, based on, arising out of or howsoever attributable to any of the following during the specific waiting period:  <br><br>
i. Treatment for adenoid or tonsillar disorders<br><br>
ii. Treatment for anal fistula or anal fissure<br><br>
iii. Treatment for benign enlargement of prostate gland<br><br>
iv. Treatment for benign uterine disorders like fibroids, uterine prolapse, dysfunctional uterine bleeding etc<br><br>
v. Treatment for Cataract<br><br>
vi. Treatment for Gall stones<br><br>
vii. Treatment for slip disc<br><br>
viii. Treatment for Piles<br><br>
ix. Treatment for benign thyroid disorders<br><br>
x. Treatment for Hernia<br><br>
xi. Treatment for hydrocele<br><br>
xii. Treatment for degenerative joint conditions<br><br>
xiii. Treatment for sinus disorders<br><br>
xiv. Treatment for kidney or urinary tract stones<br><br>
xv. Treatment for varicose veins<br><br>
xvi. Treatment for Carpal tunnel syndrome<br><br>
xvii. Treatment for benign breast disorders e.g. fibroadenoma, fibrocystic disease etc<br><br>
The specific waiting period in respect of the treatments specified in the list above shall be as follows:<br><br>
i. The specific waiting period shall be 2 (two) years from the Date of Cover Commencement in respect of each Insured.<br><br>
ii. If the policy is revived after discontinuance of the Cover then the following shall apply in respect of each Insured:
<br><br>a. If the request for revival is received by the Corporation within less than 90 (ninety) days from the due date of the first unpaid premium, then the specific waiting period shall continue to be till 2 (two) years from the Date of Cover Commencement in respect of each Insured.<br><br>
b. If the request for revival is received by the Corporation beyond 90 (ninety) days from the due date of the first unpaid premium, then there shall be a specific waiting period of 2 (two) years from the Date of Revival in respect of each Insured.No charges for this benefit shall be deducted after the benefit ceases.   
<br><br> <span style="font-weight:300;font-size:18px;color:background;">11. Exclusions:</span><br><br>
No benefits are available hereunder and no payment will be made by the Corporation for any claim under this policy on account of hospitalization or surgery directly or indirectly caused by, based on, arising out of or howsoever attributable to any of the following:<br><br>
i. Any Pre-existing Condition unless disclosed to and accepted by the Corporation prior to the Date of Cover Commencement or the Date of Revival (if the Policy is revived after discontinuance of the Cover).<br><br>
ii. Any treatment or Surgery not performed by a Physician/Surgeon or any treatment or Surgery of a purely experimental nature.<br><br>
iii. Any routine or prescribed medical check up or examination.<br><br>
iv. Medical Expenses relating to any treatment primarily for diagnostic, X-ray or laboratory examinations.<br><br>
v. Any Sickness that has been classified as an Epidemic by the Central or State Government.<br><br>
vi. Circumcision, cosmetic or aesthetic treatments of any description, change of gender surgery, plastic surgery (unless such plastic surgery is necessary for the treatment of Illness or accidental Bodily Injury as a direct result of the insured event and performed with in 6 months of the same).<br><br>
vii. Hospitalisation or Surgery for donation of an organ by donor.<br><br>
viii. Treatment for correction of birth defects or congenital anomalies.<br><br>
ix. Dental treatment or surgery of any kind unless necessitated by Accidental Bodily Injury.<br><br>
x. Convalescence, general debility, nervous or other breakdown, rest cure, congenital diseases or defect or anomaly, sterilisation or infertility (diagnosis and treatment), any sanatoriums, spa or rest cures or long term care or hospitalization undertaken as a preventive or recuperative measure.<br><br>
xi. Self afflicted injuries or conditions (attempted suicide), and/or the use or misuse of any drugs or alcohol and complications arising from it.<br><br>
xii. Any sexually transmitted diseases or any condition directly or indirectly caused to or associated with Human Immuno Deficiency (HIV) Virus or any Syndrome or condition of a similar kind commonly referred to as AIDS.<br><br>
xiii. Removal or correction or replacement of any material /prosthesis / medical devices that was implanted in a former surgery before Date of Cover commencement or Date of Revival (if the Policy is revived after discontinuance of the Cover).<br><br>
xiv. Any diagnosis or treatment arising from or traceable to pregnancy (whether uterine or extra uterine), childbirth including caesarean section, medical termination of pregnancy and/or any treatment related to pre and post natal care of the mother or the new born.<br><br>
xv. Hospitalisation for the sole purpose of physiotherapy or any ailment for which hospitalization is not warranted due to advancement in medical technology.<br><br>
xvi. War, invasion, act of foreign enemy, hostilities (whether war be declared or not), civil war, rebellion, revolution, insurrection military or usurped power of civil commotion or loot or pillage in connection herewith.<br><br>
xvii. Naval or military operations(including duties of peace time) of the armed forces or air force and participation in operations requiring the use of arms or which are ordered by military authorities for combating terrorists, rebels and the like.<br><br>
xviii. Any natural peril (including but not limited to avalanche, earthquake, volcanic eruptions or any kind of natural hazard).<br><br>
xix. Participation in any hazardous activity or sports including but not limited to racing, scuba diving, aerial sports, bungee jumping and mountaineering or in any criminal or illegal activities.<br><br>
xx. To any loss, damage or expense due to or arising out of, directly or indirectly, nuclear reaction, radiation or radioactive contamination regardless of how it was caused.<br><br>
xxi. Hospitalisation expenses related to Non-allopathic methods of treatment or surgery.<br><br>
xxii. Participation in any criminal or illegal activities.<br><br>
xxiii. Treatment arising from the Insured failure to act on proper medical advice.<br><br>
 <span style="font-weight:300;font-size:18px;color:background;">12 Taxes:</span> <br><br>
Taxes, if any, shall be as per the Tax laws and the rate of tax shall be as applicable from time to time.The amount of tax as per the prevailing rates shall be payable by the Policyholder on premiums including extra premiums, if any.   <br><br>
SECTION 45 OF THE INSURANCE ACT, 1938:<br><br>
Provisions regarding policy not being called into question in terms of Section 45 of the Insurance Act, 1938 as amended by Insurance Laws (Amendment) Act, 2015 are as follows:  <br><br>
 1. No Policy of Life Insurance shall be called in question on any ground whatsoever after expiry of 3 yrs froma. the date of issuance of policy orb. the date of commencement of risk orc. the date of revival of policy ord. the date of rider to the policy whichever is later.  <br><br>
  2. On the ground of fraud, a policy of Life Insurance may be called in question within 3 years froma. the date of issuance of policy orb. the date of commencement of risk orc. the date of revival of policy ord. the date of rider to the policywhichever is later.
 <br><br>
  For this, the insurer should communicate in writing to the insured or legal representative or nominee or assignees of insured, as applicable, mentioning the ground and materials on which such decision is based.
 <br><br>
  Fraud means any of the following acts committed by insured or by his agent, with the intent to deceive the insurer or to induce the insurer to issue a life insurance policy:
 <br><br>
  a.The suggestion, as a fact of that which is not true and which the insured does not believe to be true;
 <br><br>
  b. The active concealment of a fact by the insured having knowledge or belief of the fact;<br><br>
  c. Any other act fitted to deceive; andd. Any such act or omission as the law specifically declares to be fraudulent.
 <br><br>
  4. Mere silence is not fraud unless, depending on circumstances of the case, it is the duty of the insured or his agent keeping silence to speak or silence is in itself equivalent to speak.
 <br><br>
  5. No Insurer shall repudiate a life insurance Policy on the ground of Fraud, if the Insured / beneficiary can prove that the misstatement was true to the best of his knowledge and there was no deliberate intention to suppress the fact or that such mis-statement of or suppression of material fact are within the knowledge of the insurer. Onus of disproving is upon the policyholder, if alive, or beneficiaries.
 <br><br>
  6. Life insurance Policy can be called in question within 3 years on the ground that any statement of or suppression of a fact material to expectancy of life of the insured was incorrectly made in the proposal or other document basis which policy was issued or revived or rider issued. For this, the insurer should communicate in writing to the insured or legal representative or nominee or assignees of insured, as applicable, mentioning the ground and materials on which decision to repudiate the policy of life insurance is based.
 <br><br>
  7. In case repudiation is on ground of mis-statement and not on fraud, the premium collected on policy till the date of repudiation shall be paid to the insured or legal representative or nominee or assignees of insured, within a period of 90 days from the date of repudiation.
 <br><br>
  8. Fact shall not be considered material unless it has a direct bearing on the risk undertaken by the insurer. The onus is on insurer to show that if the insurer had been aware of the said fact, no life insurance policy would have been issued to the insured.
<br><br>
 9. The insurer can call for proof of age at any time if he is entitled to do so and no policy shall be deemed to be called in question merely because the terms of the policy are adjusted on subsequent proof of age of life insured. So, this Section will not be applicable for questioning age or adjustment based on proof of age submitted subsequently.


   
    </div>



  
                     
      
</div>

     

           </div>
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
                         <a  style="color:whitesmoke;" href="jeevan_anand.html">New&nbsp;Jeevan&nbsp;Anand</a>
                        </li>
                        <li>
                             <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                  <a style="color:whitesmoke;" href="jeevan_labh.html">Jeevan&nbsp;Labh</a>
              </li>
              <li>
                   <i class="fa fa-chevron-right wow swing" data-wow-iteration="infinite" style="color:#ffffe6;"></i>
                  <a style="color:whitesmoke;" href="jeevan_akshay.html">Jeevan&nbsp;Akshay</a>
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