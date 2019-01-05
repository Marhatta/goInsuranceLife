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
	
	echo 'window.location.href = "jeevan_ankur.php";';
	
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
                <form method="post" action="addcontact.php?id=jeevan_ankur.php">
                  
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
         
        
             
           
            
             <div class=" panel panel-body  ">
                 <div style="position:absolute;font-size:30px;margin-left:40px;margin-top:45px;font-weight:300;" class="wow bounceInLeft">
                     <span style="color:whitesmoke;" class="pol_text1 wow bounceInLeft">LIC's Jeevan Ankur</span>
                   
                 
                 </div>
                 
                 
                  <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:130px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1s">
                      <span class="pol_text2" style="color:whitesmoke;">Invest & ensure that your child stays a step ahead. Gift your child a whole lifetime free of worries</span>
                  </div>
                 
                <!-- 
                  <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:170px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1.5s">
                      <span style="color:whitesmoke;">We are here to guide you</span>
                  </div>
                  
                 
                 <button class="btn btn-success" style="position: absolute;margin-left:40px;margin-top:200px;">Contact us now</button>
                 <span class="fa fa-arrow-left wow bounceInRight" style="font-size:20px;position:absolute;color:#00ff00;margin-top:200px;margin-left:180px;"></span>
            -->
                 <div style="position:absolute;font-size:18px;margin-left:40px;margin-top:150px;font-weight:200;" class="wow fadeInUp" data-wow-delay="1.5s">
                      <span style="color:whitesmoke;"></span>
                  </div>
               
               <div style="margin-right:-60px;">
                 
                 <img src="images/ankur.jpg"  id="ankur_image" class="img-responsive pol_image" style="width:1300px;height:420px;margin-left:-30px;">
            
            </div>
            
           <div class="col-md-12 img-responsive">
                 
                 <div class="col-md-3" style="margin-top:20px;margin-left:-40px;">
                     <span style="font-size:25px;margin-left:50px;color:background;">Secure your life</span><br />
                     <i class="fa fa-shield" style="margin-left:120px;font-size:45px;color:#009933;"></i>
             
                     <a href="study_career.html" class="btn btn-danger wow fadeInLeft" style="width:280px;">
                         Child Career Plan</a>
					<a href="jeevan_ankur.html" class="btn btn-danger wow fadeInLeft" style="width:280px;">
                         LIC's Jeevan Ankur</a>
                  
                     
                    
               
                     
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
                 
LIC’s Jeevan Ankur is a conventional with profits plan, specially designed to meet the educational and other needs of your child. If you are the parent of a child aged upto 17 years, LIC’s Jeevan Ankur is the most suitable insurance plan for you which ensures that your responsibilities are met whether you survive or not and without depending on anyone else.<br><br>

The risk cover under this plan will be on your life as a parent and the named child shall be the nominee under the plan. The policy term shall be based on the age at maturity of the child..</div>
                 
                  
                 
                
 <div style="margin-top:20px;">  <span style="font-weight:300;font-size:20px;color:background;">Benefits :
<i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
<button class="btn btn-warning img-responsive quote2 wow fadeInRight" style="margin-left:400px;" >Live,love,leave well<span style="font-size:13px;font-weight:200;"> &nbsp;Mario&nbsp;Alban&nbsp;Santos</span></button></span><br /><br />
 <span style="font-weight:300;font-size:18px;color:background;">Death benefit :</span>
 <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
<br><br>

<span style="font-weight:300;font-size:18px;color:background;">On death of the Life Assured during the policy term :</span><br>
<p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"> 
Basic Sum Assured shall be payable to the nominee and an income benefit equal to 10% of Basic Sum Assured shall be payable on each policy anniversary, from the policy anniversary coinciding with or next following the date of death, till the end of the policy term.
<br><br>


<span style="font-weight:300;font-size:18px;color:background;">On death of child, when Life Assured is alive :</span><br>
<p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"> On death of the child, the Life Assured will have an option to nominate another child/person and the policy will continue with the same benefit payable to new nominee/legal heirs after the death of the Life Assured during the term of the policy.<br><br>


<span style="font-weight:300;font-size:18px;color:background;">
On death of child/nominee after Life Assured’s death :</span><br>
<p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight">The policy shall continue and the benefits shall be payable to the legal heir(s).



</p><br /></div>


                     
                     
  <div>

        <span style="font-weight:300;font-size:18px;color:background;">Maturity Benefit :
         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
        
 
   <br /><br />  <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight">At the end of the policy term an assured maturity benefit equal to Basic Sum assured along with Loyalty Addition, if any, shall be payable irrespective of survival of the Life Assured.</p><br>
  </div>


    <div>

        <span style="font-weight:300;font-size:18px;color:background;">Loyalty Addition :
         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
         
 
   <br /><br />  <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight">Depending upon the Corporation’s experience the policy will be eligible for Loyalty addition on the stipulated date of maturity irrespective of survival of Life Assured.
   </p><br>
  </div>

   <div>

        <span style="font-weight:300;font-size:20px;color:background;">Optional Benefits :
         <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i></span>
          <button class="btn btn-warning img-responsive quote2 wow fadeInRight" style="margin-left:500px;margin-top:-20px;">Life happens so get life insurance  <span style="font-size:13px;font-weight:200;">Brittany LaRoche</span></button>
 
   <br /><br /> 
<span style="font-weight:300;font-size:18px;color:background;">Accident Benefit Rider :</span>
<i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i><br>
    <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight">This benefit is available under regular premium policies only. An additional sum equal to Accident Benefit Rider Sum Assured is payable upon death due to accident. The Accident Benefit Rider Sum Assured may be opted for an amount upto the Basic Sum Assured subject to minimum of Rs. 25,000 and maximum of Rs. 50 lakh (including all policies with LIC of India and other insurers). This benefit will be available only till the age nearer birthday of the Life assured is 70 yrs.<br><br>

<span style="font-weight:300;font-size:18px;color:background;">Critical Illness Rider :</span>
<i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
<br>
<p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"> An amount equal to Critical Illness Rider Sum Assured will be payable in case of diagnosis of defined categories of Critical Illnesses. The Critical Illness Rider Sum Assured may be opted for an amount upto the Basic Sum Assured subject to a minimum of Rs. 50,000 and a maximum of Rs. 5 lakh (including all policies with LIC of India). This benefit will be available provided the policy matures on or before the Life Assured attains 60years of age.
<br><br>
Critical Illness Rider can be availed with or without Premium Waiver Benefit. If Critical Illness Rider is opted with Premium Waiver Benefit, then in the event of Life Assured diagnosed with any of the Critical Illnesses covered under the policy, the total future premium in respect of the policy will be waived. The Basic Sum Assured under such policies should be equal to the Critical Illness Rider Sum Assured.
 </p><br>
  </div>
                   
   
<div>
     <span style="font-size:18px;font-weight:300;color:background;">Paid-up Value: </span>
      <i class="fa fa-umbrella wow bounceInRight" style="font-size:30px;color: #009933;"></i>
   <br /><br />  <p style="font-weight:400;text-align: justify;font-size:16px;" class="wow fadeInRight"> Under regular premium policies, if after atleast three full years’ premium have been paid and any subsequent premiums be not duly paid, this policy shall not be wholly void, but shall continue as a paid-up policy for a reduced paid-up sum assured. This Paid-Up Sum Assured shall be payable on the date of maturity or on Life Assured’s prior death.
<br><br>
Further, in case of death during the term of the policy, the paid up value shall be paid immediately on death. But, neither income benefit nor paid up value on maturity shall be payable.
<br><br>
Accident Benefit and Critical Illness riders do not acquire any paid-up value.</p><br>


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
                         18 to 50 years
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Maturity Age
                     </td>
                     
                     <td>
                        75 years
                     </td>
                 </tr>
                 <tr>
                     <td>Premium Paying Term
                     </td>
                     
                     <td>
                        Equal to Policy Term


                     </td>
                 </tr>
                 <tr>
                     <td>
                         Policy Term
                     </td>
                     
                     <td>
                            Higher of (18 - Age of Child) or 8 to 25 – Age of Child
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Basic Sum Assured
                     </td>
                     
                     <td>
                         1,00,000 and above (In multiples of Rs. 5000/-)
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Policy Revival
                     </td>
                     
                     <td>
                        Lapsed policies can be revived within 5 years of first unpaid due by paying the entire pending amount


                     </td>
                 </tr>
                 <tr>
                     <td>
                         Loan
                     </td>
                     
                     <td>
                            
                           No loan facility will be available under this plan.
                     </td>
                 </tr>
                 <tr>
                     <td>
                         Policy coverage
                     </td>
                     
                     <td>
                            
                        Death benefit, maturity benefit and survival benefit
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