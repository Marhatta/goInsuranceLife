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
	
	echo 'window.location.href = "aam_admi.php";';
	
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
                <form method="post" action="addcontact.php?id=aam_admi.php">
                  
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
     
  <!--  
    <div id="fb-root"></div>  <!--fb plugin jscode> -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





<!--
<div id="fb-root"></div>  <!--follow plugin-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="col-md-12 img-responsive">
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


   <!-- 
    <div class="col-md-12"> 
        <div class="col-md-6">
            <div class="fb-follow" data-href="https://www.facebook.com/vinod.bhat.37" data-width="500"
                 data-height="80" data-layout="standard" data-size="large" data-show-faces="true"></div>
        </div>
        
  
    </div>  
    

<!-- fb plugin here -->

<!--
<div class="col-md-12" style="font-size:20px;font-weight:200;margin-top:20px;background-color:#3b5998;color:whitesmoke;">Login to Facebook
    <i class="fa fa-facebook-f"></i> and Share your views here</div>
        <div  style="margin-top:30px;" class="fb-comments" data-href="http://localhost:8383/final_lic/endowment.html" 
             data-width="300" data-numposts="7"></div>
-->
    
    
    
    
    

                  
     <div class="col-md-12 img-responsive">
         
        
             
             
             
             
            
             <div class=" panel panel-body img-responsive ">
                 <div style="position:absolute;font-size:30px;margin-left:40px;margin-top:45px;font-weight:300;" class="wow bounceInLeft">
                     <span style="color:whitesmoke;" class="wow bounceInLeft pol_text1">LIC's Aam Aadmi Bima Yojna </span>
                   
                 
                 </div>
                 
                 
                  <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:100px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1s">
                      <span style="color:whitesmoke;" class="pol_text2">Our plans are based on you. </span>
                  </div>
                 
                 
                 
            
                 
                 <div style="margin-right: -60px;">
                 <img src="images/amadmi.jpg"  id="endow_image" class="img-responsive pol_image" style="width:100%;height:420px;margin-left:-30px;">
                 </div>
           <div class="col-md-12 img-responsive">
                 
                 <div class="col-md-3" style="margin-top:20px;margin-left:-40px;">
                     <span style="font-size:25px;margin-left:50px;color:background;">Secure your life</span><br />
                     <i class="fa fa-shield" style="margin-left:120px;font-size:45px;color:#009933;"></i>
             
                    
                         <a href="aam_admi.html" class="btn btn-danger wow fadeInLeft" style="width:100%;">Aam Aadmi Bima Yojna</a>
                  
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
                 Ministry of Finance, Government of India has approved the merger of Social Security Schemes viz., Aam Admi Bima Yojana (AABY) and Janashree Bima Yojana (JBY).<br>

The merged scheme is renamed "Aam Admi Bima Yojana" and has come into effect from 01.01.2013..</div>
                 
                  
                 
                
                     <div style="margin-top:20px;">  <span style="font-weight:300;font-size:20px;color:background;"> A) DETAILS OF THE SCHEME :
                             <i class="fa fa-umbrella wow bounceInRight " style="font-size:30px;color: #009933;"></i>
                             <button class="btn btn-warning img-responsive wow fadeInRight quote1" style="margin-left:400px;" >Live,love,leave well<span style="font-size:13px;font-weight:200;"> &nbsp;Mario&nbsp;Alban&nbsp;Santos</span></button></span><br /><br />
                       <span style="font-size:18px;font-weight:300;color:background;">1. Eligibility criteria :</span>   <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
                           
                 <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
                  1. The members should be aged between 18 years completed and 59 years nearer birthday.<br>
                  2. The member should normally be the head of the family or one earning member of the below poverty line family (BPL) or marginally above the poverty line under identified vocational group/rural landless household.</p><br /></div>

                     
   <div>
    <span style="font-weight:300;font-size:18px;color:background;">2. Nodal Agency
     <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
    
    <p style="font-weight:400;text-align:justify;font-size:16px;" class="wow fadeInRight"><br>
        "Nodal Agency" shall mean the Central Ministerial Department/State Government / Union Territory of India/any other institutionalized arrangement/any registered NGO appointed to administer the Scheme as per the rules. In the case of "Rural Landless Households", the nodal agency will mean the State Government/Union Territory appointed to administer the Scheme</p><br />
   </div>
                     
                     
  <div>

        <span style="font-weight:300;font-size:18px;color:background;">3. Age Proof :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
    a) Ration Card<br>
b) Extract from Birth Register<br>
c) Extract from School Certificate<br>
d) Voter's List<br>
e) Identity card issued by reputed employer/Government Department<br>
f) Unique Identification Card (Aadhar Card)<br>
  </div>
          <div>

        <span style="font-weight:300;font-size:18px;color:background;">4. Premium :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>

   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
    The premium to be charged initially under the scheme will be Rs.200/- per annum per member for a cover of Rs.30,000/-, out of which 50% will be subsidized from the Social Security Fund . In case of Rural Landless Household (RLH) remaining 50 % premium shall be borne by the State Government/ Union Territory and in case of other occupational group the remaining 50% premium shall be borne by the Nodal Agency and/or Member and/or State Government/ Union Territory.<br><br>
</div>

 <div>

        <span style="font-weight:300;font-size:20px;color:background;">B) BENEFITS :

    <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
                             <button class="btn btn-warning img-responsive wow fadeInRight quote2" style="margin-left:400px;" >Live,love,leave well<span style="font-size:13px;font-weight:200;"> &nbsp;Mario&nbsp;Alban&nbsp;Santos</span></button></span><br /><br />
                       <span style="font-size:18px;font-weight:300;color:background;">i) Natural Death :</span>     <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
                              
                 <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>Upon death of a member, during the period of insurance cover the Sum Assured of Rs.30,000/- under assurance, then in force, shall become payable to the nominee


         </div>
   <div>

        <span style="font-weight:300;font-size:18px;color:background;">ii) Accidental Death / Disability Benefits : 

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>Members in case of accident, during the period of insurance cover<br>
a) On death, due to accident Rs.75,000/-<br>
b) Permanent Total Disability, due to accident Rs.75,000/-<br>
i. Loss of 2 eyes or 2 limbs OR<br>
ii. Loss of one eye & one limb, in an accident<br>
c) Loss of one eye or one limb, in an accident Rs.37,500/-<br>
  </div>

 <div>

        <span style="font-weight:300;font-size:18px;color:background;">iii)  Scholarship benefits : 

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
        
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>Scholarship as a Free Add-on benefit will be provided to a maximum of two children of the beneficiary studying between 9th to 12th Standard @ Rs.100/= per month for each child payable half yearly – on 1st July and on 1st January, each year<br>
   </div>


<div>
   <span style="font-weight:300;font-size:18px;color:background;">6. Claim Procedure :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
    The death or disability claims under the scheme will be settled by the P&GS Unit of LIC by making direct payment to the beneficiaries through NEFT or where there is no NEFT facility available then in such cases directly to the bank account of beneficiaries with prior approval from Competent authority the A/C payee cheque or claim can be paid by any other mode as decided by LIC.<br>

In the event of death of the member during the period of coverage and while the policy is in force, his/her nominee will have to make an application along with Death Certificate for payment of claim amount to the designated official of the Nodal Agency.<br>

The designated official of the Nodal Agency shall verify the claim papers and submit the same along with the death certificate and a certificate that the deceased member was head /earning member of the family belonging to the BPL/Marginally above BPL family under the eligible occupations under the scheme.<br>
Nodal Agency should submit along with the application, the following requirements:<br><br>

a) Claim Form duly completed in all respects<br>
b) Original death certificate along with a copy duly attested.<br>
In case of accident benefit claim the following additional requirements will have to be submitted along with the Death Registration Certificate:<br>
Copy of FIR<br>
Post Mortem Report<br>
Police Inquest Report<br>
Police Conclusion Report / Final Report of Police.<br>
</div>


<div>
  <span style="font-weight:300;font-size:18px;color:background;">7. Permanent Total Disability Benefit :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
The claimant has to submit documentary evidence of the accident, as also the Medical certificate from a Government Civil Surgeon or qualified Government Orthopaedician certifying permanent total/ partial disability due to accident, stating loss of limb/s of the member covered under the scheme.<br><br>

Every member shall appoint a nominee to receive the claim amount after his death. Nomination form is a part of the membership application form and it should include particulars of the nominee to receive the claim amount. It should be ensured that this procedure is followed without fail so that there is no difficulty at the time of settlement of death claims. The Nomination form will be kept in the custody of the Panchayat/ Nodal Agency and shall be forwarded to LIC along with the claim papers on the death of the member.<br>
</div>


<div>
   <span style="font-weight:300;font-size:18px;color:background;">8. Claim Procedure for Scholarships :

         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
   <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"><br>
    1. The member whose child is eligible for scholarship shall fill up an application form half yearly and submit it to the Nodal Agency. The Nodal Agency will identify the students.
    <br>
    2.The Nodal Agency in turn will submit the list of beneficiary students to the concerned P&GS unit with full details such as name of the student, school's name, class, member's name, master policy no., membership no. and NEFT details for direct payment.<br>
    3. Every half year, for 1st July and 1st January, each year LIC will credit the scholarship payment to the Account of the beneficiary student, by NEFT.<br>
     4. Any other mode of payment of scholarships as decided by LIC/Government may be applicable in future.<br>


</div>

   
             
    </div>
  </div>

<div class="col-md-12 img-responsive">
         <table class=" table table-responsive table-hover table-striped  wow fadeInLeft" >
                       <caption>OCCUPATIONS/ VOCATIONS COVERED UNDER AAM AADMI BIMA YOJANA
 </caption>

  <tbody>
    <tr>
      <td >Sr.No.</td>
      <td >Occupation</td>
      <td >Sr.No.</td>
      <td >Occupation</td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td >
      <p>1</p>
      </td>
      <td >
      <p>Beedi Workers</p>
      </td>
      <td >
      <p>25</p>
      </td>
      <td >
      <p>Food Stuffs like Khandsari / Sugar</p>
      </td>
    </tr>

    <tr>
      <td>  
      <p>2</p>
      </td>
      <td>      
      <p>Brick Kiln Workers</p>
      </td>
      <td>     
      <p>26</p>
      </td>
      <td>
      <p>Textile</p>
      </td>
    </tr>

    <tr>
<td>      <p>3</p>
      </td>
<td>      <p>Carpenters</p>
      </td>
<td>      <p>27</p>
      </td><td>
      <p>Manufacture of Wood Products</p>
      </td>
    </tr>
    <tr>
<td>      <p>4</p>
      </td>
<td>      <p>Cobblers</p>
      </td>
<td>      <p>28</p>
      </td><td>
      <p>Manufacture of Paper Products</p>
      </td>
    </tr>
    <tr>
<td>      <p>5</p>
      </td>
<td>      <p>Fishermen</p>
      </td>
<td>      <p>29</p>
      </td><td>
      <p>Manufacture of Leather Products</p>
      </td>
    </tr>
    <tr>
<td>      <p>6</p>
      </td>
<td>      <p>Hamals</p>
      </td>
<td>      <p>30</p>
      </td><td>
      <p>Printing</p>
      </td>
    </tr>
    <tr>
<td>      <p>7</p>
      </td>
<td>      <p>Handicraft Artisans</p>
      </td>
<td>      <p>31</p>
      </td><td>
      <p>Rubber &amp; Coal Products</p>
      </td>
    </tr>
    <tr>
<td>      <p>8</p>
      </td>
<td>      <p>Handloom Weavers</p>
      </td>
<td>      <p>32</p>
      </td><td>
      <p>Chemical Products like candle manufacture</p>
      </td>
    </tr>
    <tr>
<td>      <p>9</p>
      </td>
<td>      <p>Handloom &amp; Khadi Weavers</p>
      </td>
<td>      <p>33</p>
      </td><td>
      <p>Mineral products like earthen toys manufacture</p>
      </td>
    </tr>
    <tr>
<td>      <p>10</p>
      </td>
<td>      <p>Lady Tailors</p>
      </td>
<td>      <p>34</p>
      </td><td>
      <p>Agriculturists</p>
      </td>
    </tr>
    <tr>
<td>      <p>11</p>
      </td>
<td>      <p>Leather &amp; Tannery Workers</p>
      </td>
<td>      <p>35</p>
      </td><td>
      <p>Transport Drivers Association</p>
      </td>
    </tr>
    <tr>
<td>      <p>12</p>
      </td>
<td>      <p>Papad Workers attached to ‘SEWA’</p>
      </td>
<td>      <p>36</p>
      </td><td>
      <p>Transport Karmacharis</p>
      </td>
    </tr>
    <tr>
<td>      <p>13</p>
      </td>
<td>      <p>Physically Handicapped Self Employed Persons</p>
      </td>
<td>      <p>37</p>
      </td><td>
      <p>Rural Poor</p>
      </td>
    </tr>
    <tr>
<td>      <p>14</p>
      </td>
<td>      <p>Primary Milk Producers</p>
      </td>
<td>      <p>38</p>
      </td><td>
      <p>Construction Workers</p>
      </td>
    </tr>
    <tr>
<td>      <p>15</p>
      </td>
<td>      <p>Rickshaw Pullers / Auto Drivers</p>
      </td>
<td>      <p>39</p>
      </td><td>
      <p>Fire Crackers’ Workers</p>
      </td>
    </tr>
    <tr>
<td>      <p>16</p>
      </td>
<td>      <p>Safai Karamacharis</p>
      </td>
<td>      <p>40</p>
      </td><td>
      <p>Coconut Processors</p>
      </td>
    </tr>
    <tr>
<td>      <p>17</p>
      </td>
<td>      <p>Salt Growers</p>
      </td>
<td>      <p>41</p>
      </td><td>
      <p>Aanganwadi Teachers</p>
      </td>
    </tr>
    <tr>
<td>      <p>18</p>
      </td>
<td>      <p>Tendu Leaf Collectors</p>
      </td>
<td>      <p>42</p>
      </td><td>
      <p>Kotwal</p>
      </td>
    </tr>
    <tr>
<td>      <p>19</p>
      </td>
<td>      <p>Scheme for the Urban Poor</p>
      </td>
<td>      <p>43</p>
      </td><td>
      <p>Plantation Workers</p>
      </td>
    </tr>
    <tr>
<td>      <p>20</p>
      </td>
<td>      <p>Forest Workers</p>
      </td>
<td>      <p>44</p>
      </td><td>
      <p>Women Associated with Self-Help Groups</p>
      </td>
    </tr>
    <tr>
<td>      <p>21</p>
      </td>
<td>      <p>Sericulture</p>
      </td>
<td>      <p>45</p>
      </td><td>
      <p>Sheep Breeders</p>
      </td>
    </tr>
    <tr>
<td>      <p>22</p>
      </td>
<td>      <p>Toddy Tappers</p>
      </td>
<td>      <p>46</p>
      </td><td>
      <p>Overseas Indian Workers</p>
      </td>
    </tr>
    <tr>
<td>      <p>23</p>
      </td>
<td>      <p>Powerloom Workers</p>
      </td>
<td>      <p>47*</p>
      </td><td>
      <p>Rural Landless Households</p>
      </td>
    </tr>
    <tr>
<td>      <p>24</p>
      </td>
<td>      <p>Hilly Area Women</p>
      </td>
<td>      <p>48</p>
      </td><td>
      <p>Unorganized workers covered under RSBY</p>
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

  </div>
  
  
  

  
</body>
  
  </html>