<?php session_start();
      	if(!isset($_SESSION['username']))
      	{
        	header('location:login.php');
      	}
   
          $usr=$_SESSION['username'];
          $servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
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
        $messegecount=1;
          try
          {  
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("select count(email) from customer WHERE readed=0;");
		    $stmt->execute();
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
			        $messegecount=$v;
			    }
          }
          catch(PDOException $e)
          {
            $congo= $sql . "<br>" . $e->getMessage();
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
	
	echo 'window.location.href = "adminindexakmal.php";';
	
	echo "</script>";
}


?>
<html>
<head>
    <link href="bootstrap.css" rel="stylesheet" type="text/css">

    <link href="styleadmin.css" rel="stylesheet" type="text/css">
    <script src="jquery.js" type="text/javascript"></script>
    <script src="bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<!---modal for changing profile photo-->
          <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                    <?php
                      if(count($_FILES) > 0) {
                        if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
      
                          $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
                          $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
                          $user_name=$_SESSION['username'];
                         $servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
                          $counte=0;
                          try {
                                $conn = new PDO("mysql:host= $servername;dbname=$dbname", $username, $password);
                                // set the PDO error mode to exception
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("UPDATE user SET profile_type ='{$imageProperties['mime']}', profile_pic='{$imgData}' WHERE user_id='$user_name'");
                                $stmt->execute();
                                $congo="Successfully inserted";
                          
                          }
                          catch(PDOException $e)
                          {
                            $congo= $sql . "<br>" . $e->getMessage();
                          }
                          $conn = null;
                        }
                      }
                     ?>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" align="center">Change Profile</h4>
                      </div>
                      <div class="modal-body">
                        <form enctype="multipart/form-data" action="" method="POST">
                          <input type="file" class="form-control" name="userImage">
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-info" value="submit">
                            <button type="close" class="btn btn-primary " data-dismiss="modal">Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
          </div>


	<!---modal for changing Password-->
          <div class="modal fade" id="myModal_1" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" align="center">Change Password</h4>
                      </div>
                      <div class="modal-body">
                        <?php
                        if(empty($error)){
                          if(isset($_POST['submit']))
                          {
                            $curr_pwd=$_POST["pwd"];
                            $new_pwd=$_POST["pwd1"];
                            $conf_pwd=$_POST["pwd2"];
                            if(empty($curr_pwd))
                            {
                              $error['p_wd']="Current Password Requried";
                            }
                            if((!empty($new_pwd)) && (!empty($conf_pwd)))
                            {
                              if($new_pwd != $conf_pwd)
                              {
                                $error['p_wd2']="Both Passwords Didn't Not Match";
                              }
                            }
                            else
                            {
                              $error['p_wd1']="Both Passwords Requried";
                            }
                            if(count($error)==0)
                            {
                              
                              $user_name=$_SESSION['username'];
                              $servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
                              try
                              {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                // set the PDO error mode to exception
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("UPDATE user SET  password='$new_pwd'
                              WHERE user_id='$user_name' AND password='$curr_pwd'");
                                $stmt->execute();
                                $congo="Password Changed Successfully";
                              }
                              catch(PDOException $e)
                              {
                                $congo= $sql . "<br>" . $e->getMessage();
                              } 
                            }
                          }$conn = null;
                        }
                        ?>
                        <form method="POST">
                        
                          <input type="password" name="pwd" class="form-control" placeholder="Current Password"></br></br>
                          <input type="password" name="pwd1" class="form-control"  placeholder="New Password"></br></br>
                          <input type="password" name="pwd2" class="form-control"  placeholder="Confirm Password"></br></br>
                         
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-info" name="submit">
                            <button type="close" class="btn btn-primary " data-dismiss="modal">Close</button>
                            <?php 

                            if(!empty($error)>0)
                            {
                              foreach($error as $errors)
                              {
                                echo $errors."<br/>";
                              }
                            }
                            ?>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
          </div>




<div class="header">

    <div class="navbar navbar-fixed-top" style="height:38px;">


<button class="navbar-toggle" data-target=".navHeaderCollapse" data-toggle="collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<div class="collapse navbar-collapse navHeaderCollapse">



<ul class="nav nav-tabs" style="background:#e65c00;">
<li style="font-weight:300;font-size:20px;color:white;margin-left:10px;margin-top:10px;">Life Insurance Corporation of India</li>
<li style="float:right;color:white;"><a href="login.php?logout='1'"><i class="fa fa-sign-out"></i>Logout</li></a>
<li class="dropdown" style="float:right;color:white;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i><?php echo " ".$_SESSION['username']; ?></a>
    <ul class="dropdown-menu">
        <li><!-- Trigger the modal with a button -->
            <a  href="#"  data-toggle="modal" data-target="#myModal">Change Profile</a>
        </li>
        <li><a  href="#"  data-toggle="modal" data-target="#myModal_1">Change Password</a></li>
        <li><a href="#">Change User_id</a></li>
        <li><a href="#">Add Contact</a></li>
    </ul>
</li>

</ul>
</div>
</div>
</div>





    <div class="sidebar col-md-3">

        <ul id="nav">
            
            <?php
          $usr=$_SESSION['username'];
          $servername="localhost";
          $username="u837456730_root";
          $password="rio147";
          $db="u837456730_lic";
         
        $messegecount=1;
          try
          {  
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT rec_id FROM user WHERE user_id ='$usr'");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
              //echo $v;
              $row['rec_id']=$v;
            }
            
            $stmt = $conn->prepare("select count(email) from customer WHERE readed=0;");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
              $messegecount=$v;
            }
          }
          catch(PDOException $e)
          {
            $congo= $sql . "<br>" . $e->getMessage();
          } 
          $conn = null;
        ?>
        <img src="imageView.php?Rec_id=<?php echo $row['rec_id'];  ?>" id="user_profile_picture" /><br/>
                    

            
            
            <span style="font-weight:300;margin-left:10px;color:white;"> Welcome<?php echo " ".$_SESSION['username']?>
            </span>

            <li><a href="adminpage.php"><i class="fa fa-dashboard active"></i> Dashboard</a></li>
            <li><a href="notes.php"><i class="fa fa-sticky-note"></i> Make Notes </a></li>
            <li><a href="cal.html"><i class="fa fa-calendar"></i> Calendar</a></li>
            <li><a href="displayMesseges.php"><i class="fa fa-envelope"></i> Messages&nbsp;&nbsp;&nbsp;<div class="badge"><?php echo $messegecount; ?></div></a></li>
            <li><a href="adminindexakmal.php"><i class="fa fa-pencil"></i> Maintain Database</a></li>
 
        </ul>
        
        <div class="well" style="background:#e65c00;">
        <div style="text-align: center;color:white;"><br />Disk Space Used</div>
        <br />
        <div class="progress progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0"
             aria-valuemax="100" style="width:40%;text-align: center;color:white;">40%
            <span class="sr-only">40% complete</span>
            
        </div>
    </div>
</div>
    <div class="col-md-9">
        
        <div class="panel" style="background-color:#333333;color:white; ">
            
        <div class="panel-heading" style="margin-left:160px;margin-top:100px;margin-bottom:50px;font-weight:300;font-size:25px;">
            <u>REGISTER YOUR CLIENTS HERE</u></div>
           
            <div col-md-3>
                 <table style="border:2px solid white;float:right;margin-right:30px;margin-top:-85px;">
                
                    <td>
                <div style="margin-right:30px;margin:10px;">
  
            <form method="post" action="search.php" enctype="">      
                  
                    <input type="text" name="searchkey" placeholder="Enter name"> <i class="fa fa-search" style="color:white;"></i><br /><br />
            <input type="submit" name="searchsub" style="color:black; margin-left:5px;" value="Search">
            
            </form>
  
  
            <form method="post" action="update.php" enctype="">      
                  
                    <input type="text" name="updatekey" placeholder="Enter policy no"> <i class="fa fa-search" style="color:white;"></i><br /><br />
            <input type="submit" name="updatesub" style="color:black; margin-left:5px;" value="Update">
            
            </form>
  
            <form method="post" action="delete.php" enctype="">      
                  
                    <input type="text" name="deletekey" placeholder="Enter policy no"> <i class="fa fa-search" style="color:white;"></i><br /><br />
            <input type="submit" name="deletesub" style="color:black; margin-left:5px;" value="Delete">
            
            </form>
		<br/><br/>
  		<a href="displaybin.php">BIN</a>
  		
		<br/><br/>
  		<a href="displaytables.php">Dispaly Records</a>

		<br/><br/>
  		<a href="pr_index.php">Premium Section</a>

		<br/><br/>
  		<a href="displayMesseges.php">Display Messeges</a>

		<br/><br/>
  		<a href="seelogindetails.php">User's Login Details</a>
  			
                </div>
                    </td>
                  
           
        </div>
                  </table>
            </div>
            <div class="panel-body">
        <form method="post" action="addmastertbl.php" enctype="">
            <input id="name" name="nam_" type="text"   placeholder="Enter name"> <i class="fa fa-user"></i><br /><br />
            <input id="name" name="email_" type="text"   placeholder="Enter Email"> <i class="fa fa-user"></i><br />

            <br /><span style="margin-left:150px;">Payment Received ? </span>
            <input type="radio" name="payment" value="yes"> Yes
            <input type="radio" name="payment" value="no"> No   &nbsp;&nbsp;<i class="fa fa-money"></i><br /><br />
            
            <span style="margin-left:150px;">Payment Mode</span>
           <select name="paymentmode_">
               <option value="CHEQUE" style="background-color:black;"> Cheque</option>
               <option value="NEFT"><span style="color:black;">NEFT</span></option> 
           </select> <i class="fa fa-google-wallet"></i><br /><br />
           
 <input id="polno" name="paymentno_" type="text" placeholder="Enter Cheque/NEFT number"> <i class="fa fa-number"></i><br /><br />           
            <input id="polno" name="policyno_" type="text" placeholder="Enter Policy number"> <i class="fa fa-number"></i><br /><br />
            <input id="poltype" name="policyid_" type="text" placeholder="Enter type/ID for policy recognition"><br /><br />
            <input id="poldate" name="policydate_" type="date" placeholder="Enter policy date(yyyy-mm-dd)">
             <i class="fa fa-calendar"></i><br /><br />
            <input id="tenure" name="firstprim_" type="number" placeholder="Enter First Premium "><br /><br />

        <!--    <input id="nextpremiumdate" name="nxtprimdt" type="date" placeholder="Next premium date(yyyy-mm-dd)"> <i class="fa fa-calendar"></i><br /><br /> -->
            <input id="tenure" name="nxtprim" type="number" placeholder="Enter Next Premium"><br /><br />
            <input id="tenure" name="primno" type="number" placeholder="Enter Next Premium No"><br /><br />

            <input id="tenure" name="tenur" type="number" placeholder="Enter tenure"><br /><br />
            <input id="sumassured" name="sumassur" type="number" placeholder="Sum assured"><br /><br />
            <span style="margin-left:150px;">Premium payment type </span>
            <select name="primtype">
                <option  value="y">Yearly</option>
                <option  value="h">Half-yearly</option>
                <option  value="m">Monthly</option>
                <option  value="q">Quaterly</option>
            </select><br /><br />
            <span style="margin-left:150px;"> Bond received from LIC ? </span>
            <input type="radio" name="bond" value="y"> Yes
            <input type="radio"  name="bond" value="n"> No<br /><br />
            <input id="bondreceived" name="bonddate_" type="date" placeholder="Enter date on which bond is received">  <i class="fa fa-calendar"></i><br /><br />
            <span style="margin-left:150px;">  Bond given to party? </span>
            <input type="radio"  name="custbond" value="y"> Yes
            <input type="radio" name="custbond" value="n"> No<br /><br />
            <input id="bondgiventoparty" name="custbonddt_" type="date" placeholder="Enter date on which bond is given to party(yyyy-mm-dd)">  <i class="fa fa-calendar"></i>
            <br /> <br /><input type="submit" name="subm" style="color:black;margin-left:150px;" value="Save">
             <input type="reset"  style="color:black;margin-left:25px;" value="clear">
           
            
            </div>
        </form>
            </div>
    </div>