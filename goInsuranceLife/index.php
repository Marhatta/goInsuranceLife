<?php
$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";

//////////////
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " UPDATE count SET count_number=count_number+1 ";
    
    
    // use exec() because no results are returned

 
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    $congo= $sql . "<br>" . $e->getMessage();
    //echo $sql1 . "<br>" . $e->getMessage();
    echo $congo;
    }

$conn = null;

 ?>




<?php

$alertmes= $_GET['var'];
$alertmes2= $_GET['var2'];


if($alertmes2==1)
{

	echo "<script  type='text/javascript' language='javaScript'>";
	
	echo "alert('".$alertmes."');";
	
	echo 'window.location.href = "index.php";';
	
	echo "</script>";



}

?>




<?php
$symb= $_GET['var2'];
session_start();

if($symb==999){

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return parent::current();
    }

    function beginChildren() {
        
    }

    function endChildren() {
       
    }
}

$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";

$usrnm=$_POST["user_email"];
$pass=$_POST["user_pwd"];
$usrrec=array();
$counte=0;



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare(" SELECT policy_no from usrlogin where email='$usrnm' and password='$pass' ");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $usrrec[$counte]=$v;
        $counte=$counte+1;
    }
if(!empty($usrrec[0]))
{
	$_SESSION['usrrec']=$usrrec[0];
	//echo "Login Succesful";
	header("location:afterloginusr.php");
}
else
{
	
	header('location:index.php?var="user id password not matching"&var2=1');
}    
    
    
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;



}

?>


<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="bootstrap.css" rel="stylesheet" type="text/css">
        
        <link href="style.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <script src="jquery.js" type="text/javascript"></script>
        <script src="bootstrap.js" type="text/javascript"></script>
      
      
        

        <link rel="stylesheet" href="animate.css">
   <script src="wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
                 
        <title>goinsurancelife</title>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     
        <link rel="shortcut icon" class="classtit" href="images/logomain.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        
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


        
        
    
    </head>
    
<body>

<header>
    
    <div class="col-md-12" >
        <div class="col-md-2">
             <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul  id="sidebarlist" style="list-style:none;">
      <div>
          <a href="index.php"><i class="fa fa-umbrella" style="font-size:60px;color:whitesmoke;margin-left:-30px;"><span style="font-size:35px;margin-left:-10px;">nsurance</span></i></a>
      </div>
      <li><a href="index.php"><i class=" fa fa-home" style='padding-bottom:10px;margin-left:-50px;margin-top: 20px; '></i> Home</a></li>



            
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
            <li><a href="#" data-toggle="modal" data-target="#myContactModal"><i class="fa fa-envelope" style='padding-bottom:10px;margin-left:-50px;'></i> Contact</a>


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
        <div class="col-md-4 googletranslator">
            <script type="text/javascript"   >
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<div id="google_translate_element" style="float:right;margin-top:13px;"></div>
        </div>
    </div>
    
    
    
<div class="col-md-12">
    
    
<div class="carousel slide" id="myCarousel" style="margin-left:-15px;margin-right:-15px;">

<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
<li data-target="#myCarousel" data-slide-to="5"></li>
</ol>

<div class="carousel-inner ">

    
<div class="item active  ">
<img src="images/b2.jpg" id="carousal-img3" class="img-responsive">


     
<div class="col-md-8">
    <span class="carousal-text wow bounceInLeft img-responsive" data-wow-delay="0.5s" data-wow-duration="1.5s">Plan your future today</span>
    <button  class="carousal-text1 btn btn-success wow bounceInRight img-responsive" data-wow-delay="1s"  >
        <a href="#" data-toggle="modal" data-target="#myContactModal" style="text-decoration: none;">
            <span style="color:whitesmoke;">Contact us now</span> </a> <i class="fa fa-phone carousal-icon" style="font-size:30px;"></i>
</button>
   </div>
</div>
    
    
<div class="item">

<img src="images/slider1.jpg" id="carousal-img1" class="img-responsive">

<div class="col-md-8">
    <span class="carousal-text2 wow slideInLeft img-responsive">Protection for your loved one's</span>
    
   </div>

</div>

<div class="item ">
<img src="images/slider2.jpg" id="carousal-img2" class="img-responsive">

<div class="col-md-8">
    <span class="carousal-text2 wow slideInLeft img-responsive">Protect your most valueable asset</span>

    <span class="carousal-text3 wow slideInLeft img-responsive" data-wow-delay="1s" style="margin-top:50px;">Your family</span>
   
   </div>

</div>




<div class="item ">
<img src="images/b1.jpg" id="carousal-img4" class="img-responsive">

</div>

<div class="item ">
<img src="images/b3.jpg" id="carousal-img5" class="img-responsive">

</div>


<a href="#myCarousel" class="left carousel-control" data-slide="prev">
    <h1 style="margin-top:200px;"><span class="fa fa-chevron-left"></span></h1>

</a>

<a href="#myCarousel" class="right carousel-control" data-slide="next">
    <h1 style="margin-top:200px;"><span class="fa fa-chevron-right"></span></h1>

</a>

</div>


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
   
    
   


 
     
    
             
     <div class="col-md-12 img-responsive ">
         <div class="col-md-2 img-responsive nav_icon1">
             <div style="margin-top:30px;">
                 <a href="premium_calc.html">  <i class="fa fa-calculator nav_icon1" style="font-size:60px;margin-left:60px;color:#3b5998;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="premium_calc.html"> <span style="font-size:20px;color:#3b5998;margin-left:10px;"> Premium&nbsp;Calculator </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2 img-responsive nav_icon2">
             <div style="margin-top:30px;">
                 <a href="index.php">  <i class="fa fa-home" style="font-size:60px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="index.php"> <span style="font-size:20px;color:#3b5998;margin-left:60px;"> Home </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2 img-responsive nav_icon3">
             <div style="margin-top:30px;">
            <div class="modal fade" id="myContactModal" role="dialog"> <!-- my contact modal -->
        <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h1>Contact Us</h1></center>
              </div>
              <div class="modal-body">
                <p style="color:red">* Mandotary Fields</p>
                <form method="post" action="addcontact.php?id=index.php" enctype="">
                  
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
                 <a href="#" data-toggle="modal" data-target="#myContactModal">  <i class="fa fa-envelope" style="font-size:60px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="#" data-toggle="modal" data-target="#myContactModal"> <span style="font-size:20px;color:#3b5998;margin-left:60px;"> Contact </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2 img-responsive nav_icon4">
             <div style="margin-top:30px;">
                 <a href="faq.html">  <i class="fa fa-question-circle" style="font-size:60px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="faq.html"> <span style="font-size:20px;color:#3b5998;margin-left:60px;"> FAQ's </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2 img-responsive nav_icon5">
             <div style="margin-top:30px;">
                 <a href="aboutus.html">  <i class="fa fa-info-circle" style="font-size:60px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="aboutus.html"> <span style="font-size:20px;color:#3b5998;margin-left:50px;"> About&nbsp;Us </span></a>
             </div>
             
         </div>
         
         <div class="col-md-2 img-responsive nav_icon6">
             <div style="margin-top:30px;">
                 <a href="feedback.html">  <i class="fa fa-comment" style="font-size:60px;margin-left:60px;color:#3b5998;;"></i></a>
             </div>
             <div style="margin-top:10px;">
                 <a href="feedback.html"> <span style="font-size:20px;color:#3b5998;margin-left:30px;"> Feedback </span></a>
             </div>
             
         </div>
     </div>
     
     
      <div class="col-md-12" >
         <div class="col-md-4">
             <h3><i class="fa fa-quote-left"></i></h3>
             <p style="font-size:20px;background: #d9d9d9;">
                 If a child, a spouse, a life partner, or a parent depends on you and your income, you need life insurance.</p>
             <h5>-Suze Orman</h5>
              <h3><i class="fa fa-quote-right"></i></h3>
         </div>
         <div class="col-md-4">
             <p style="font-size:70px;text-align: center;font-weight:200;" class="wow bounceInUp">Here you go</p>
             <button class="btn btn-success wow bounceInUp img-responsive" data-toggle="modal" data-target="#myModal" style="width:400px;height:40px;text-align:center;">LOGIN</button>
             <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                  <!-- Modal content-->
                    <div class="modal-content">
                    <form method="post" action="index.php?var2=999" enctype="" >
                      <div class="modal-header" style="background-color: #5cb85c;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <center><h2 style="color: blue"></h2></center>
                      
                        
                          <center><span style="font-size: 40px;color: white" class="fa fa-user"></span></center><br>
                          <input type="email" name="user_email" placeholder="Enter Your Email" class="form-control"><br>
                       
                          <input type="password" name="user_pwd" placeholder="Enter Your Password" class="form-control"><br>
                          <a href="#" style="color: blue">Forgot Password..?</a>
                     </div>
                        <div class="modal-footer">
                          <center><button type="submit" class="btn btn-success" name="sub_login">Login</button></center>
                        </div>
                      </form>
                    </div>
                </div>
             </div>
             
         </div>
         
         <div class="col-md-4">
              <h3><i class="fa fa-quote-left"></i></h3>
             <p style="font-size:20px;background: #d9d9d9;">
                 You do not buy life insurance because you are going to die, but because those you love
                    are going to live.
              <h3><i class="fa fa-quote-right"></i></h3>
             
         </div>
     </div>
         
         <div class="col-md-12 " style="margin-top:15px;">
           
         <div class="col-md-4"  id="endowment">
             <p style="font-size:35px;text-align:center;font-weight:200;">Endowment Plan</p>
             <div class="myumbrella">
             <h1 style="text-align:center;"> <i class="fa fa-umbrella wow rotateInDownLeft"   style="font-size:100px;color:#009933;" ></i></h1>
             </div>
             <p style="text-align:justify; font-weight: 500;color:#808080;" class="wow bounceInUp" data-wow-duration="1s"> LIC's New Endowment Plan is a participating non-linked plan
            which offers an attractive combination of protection and saving features. 
            This combination provides financial support for the family of the deceased policyholder
            any time before maturity and good lump sum amount at the time of maturity for the surviving policyholders. 
            This plan also takes care of liquidity needs through its loan facility..</p>
        <a href="new_endow.php" class="badge">Know more</a>
                 
         </div>
         
         <div class="col-md-4" >
             <p style="font-size:35px;text-align:center;font-weight:200;"  >Group Plan</p>
             <div class="myuser">
             <h1 style="text-align:center;"> <i class="fa fa-users wow rotateInDownLeft"  style="font-size:100px;color:#009933;" ></i></h1>
             </div>
             <p style="text-align:justify; font-weight: 500;color:#808080;" class="wow bounceInUp "  data-wow-duration="1s"  > This plan is specially designed to meet the increasing educational, 
            marriage and other needs of growing children. 
            It provides the risk cover on the life of child not only during the policy 
            term but also during the extended term (i.e. 7 years after the expiry of policy term).
            A number of Survival benefits are payable on surviving by the life assured to the end 
            of the specified durations.</p>
        <a href="group_credit.php" class="badge">Know more</a>
                 
         </div>
         
         
          <div class="col-md-4">
             <p style="font-size:35px;text-align:center;font-weight:200;"> Money Back</p>
             <div class="mymoney">
             <h1 style="text-align:center;"> <i class="fa fa-money wow rotateInDownLeft"  style="font-size:100px;color:#009933;" ></i></h1>
             </div>
             <p style="text-align:justify; font-weight: 500;color:#808080;" class="wow bounceInUp" data-wow-duration="1s">  LIC's New Money Back Plan-20 years is a participating non-linked plan
           which offers an attractive combination of protection against death 
           throughout the term of the plan along with the periodic payment on survival
           at specified durations during the term. This unique combination provides 
           financial support for the family of the deceased policyholder any time 
           before maturity and lump sum amount at the time of maturity for the surviving policyholders.
           This plan also takes care of liquidity needs through its loan facility.
           </p>
        <a href="money_back20.php" class="badge">Know more</a>
                 
         </div>
         
         
          <div class="col-md-4" >
              <p style="font-size:35px;text-align:center;font-weight:200;"> Pension Plan</p>
              <div class="myruppee">
             <h1 style="text-align:center;"> <i class="fa fa-inr wow rotateInDownLeft"  style="font-size:100px;color:#009933;" ></i></h1>
              </div>
             <p style="text-align:justify;font-weight: 500;color:#808080;" class="wow bounceInUp" data-wow-duration="1s"> 
            These policies are most suited for senior citizens and those planning
            a secure future, so that you never give up on the best things in life.
        
            </p>

        <a href="jeevan_nidhi.php" class="badge">Know more</a>
        
                 
         </div>
         
         
         
         <div class="col-md-4" >
              <p style="font-size:35px;text-align:center;font-weight:200;"> Terms Plan</p>
              <div class="myshield">
             <h1 style="text-align:center;"> <i class="fa fa-shield wow rotateInDownLeft"  style="font-size:100px;color:#009933;" ></i></h1>
              </div>
             <p style="text-align:justify; font-weight: 500;color:#808080;" class="wow bounceInUp" data-wow-duration="1s"> 
           There are many reasons why LIC is a good choice for term insurance policies. These reasons are: <br /><br />
       
   1. It has the best claims settlement ratio of over 98%.
      This means that it successfully settle 98% of the claims that they get.<br /><br />
   2. It has out-performed all its competitors from the private sector, especially in terms of claims settlement.<br /><br />
   3. It has insurance plans that can be bought online. This means that easier to ensure that you are covered.
        
            </p>

        <a href="anmol_jeevan.php" class="badge">Know more</a>
        
                 
         </div>
         
         
          <div class="col-md-4" >
              <p style="font-size:35px;text-align:center;font-weight:200;"> Study Plan</p>
              <div class="mybook">
             <h1 style="text-align:center;"> <i class="fa fa-book wow rotateInDownLeft"  style="font-size:100px;color:#009933;" ></i></h1>
              </div>
             <p style="text-align:justify; font-weight: 500;color:#808080;" class="wow bounceInUp" data-wow-duration="1s"> 
          Study plan
Online LIC India provide various type plan and policy like 
LIC study plan, health plan, child plan, endowment plan and all. 
Here you can save you tax. This arrangement is uniquely intended 
to meet the expanding instructive, marriage and different needs of developing youngsters.
It gives the hazard cover on the life of youngster amid the strategy term as well as 
amid the augmented term. Various Survival advantages are payable on making due by 
the life guaranteed to the finish of the specified duration.
        
            </p>

        <a href="study_career.php" class="badge">Know more</a>
        
                 
     </div>
         
         <button onclick="topFunction()" id="myBtn" title="Go to top">
             <i class="fa fa-arrow-up"></i></button>
         
     </div>  
         
    
 
  


 
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
                  <a  style="color:whitesmoke;" href="#" data-toggle="modal" data-target="#myContactModal">Contact</a>
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
          <span style="color:whitesmoke;">Copyright &copy; 2017</span> <a  style="color:whitesmoke" href="#">goinsurancelife.com</a>.<span style="color:whitesmoke;">All rights Reserved</span>
      </div>
      
      <div class="col-md-6" style="float:right; text-align: right; color:whitesmoke;">
          Designed by CodeBazaar
      </div>
      </div>
      
       
  </footer>

</body>
</html>