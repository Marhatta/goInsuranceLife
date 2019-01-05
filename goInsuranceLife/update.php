<?php
      session_start();
      if(!isset($_SESSION['username']))
      {
        header('location:login.php');
      }
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
$updatek=$_POST["updatekey"];
$allrecords=array();
$counte=0;



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT name,email,payment_recived,payment_mode,payment_no,policy_no,policy_id,policy_date,first_premium,next_premium_date,next_premium,premium_no,tenure,sum_assured,premium_type,bond,bond_date,customer_bond,customer_bond_date FROM master_table where policy_no='$updatek'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $allrecords[$counte]=$v;
        $counte=$counte+1;
    }
    
echo $allrecords[0];
echo $allrecords[1];
echo $allrecords[2];
    
    
                
    $stmt = $conn->prepare("select count(email) from customer WHERE readed=0;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $messegecount=$v;
    }

    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

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

                          $dbhost="localhost";
                          $username="u837456730_root";
                          $password="rio147";
                          $db="u837456730_lic";
                          $counte=0;

                          try {
                                $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
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
                        }
                      }
                          $conn = null;
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
                        if(empty($error))
                        {
                          if(isset($_POST['submit']))
                          {
                            $curr_pwd=$_POST["pwd"];
                            $new_pwd=$_POST["pwd1"];
                            $conf_pwd=($_POST["pwd2"]);
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

                              $dbhost="localhost";
                              $username="u837456730_root";
                              $password="rio147";
                              $db="u837456730_lic";
                              try
                              {
                                $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
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
                          }
                        }
                        $conn = null;
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

          $dbhost="localhost";
          $username="u837456730_root";
          $password="rio147";
          $db="u837456730_lic";
        $messegecount=1;
          try
          {  
            $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
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
                    
          


            <span style="font-weight:300;margin-left:10px;color:white;"> Welcome <?php echo " ".$_SESSION['username'];?>
            </span>

            <li><a href="adminindexakmal.php"><i class="fa fa-dashboard active"></i> Dashboard</a></li>
 
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
            <u>UPDATE YOUR CLIENT'S DETAILS HERE</u></div>
           
            <div col-md-3>
                 <table style="border:2px solid white;float:right;margin-right:30px;margin-top:-85px;">
<!---                
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
  

                </div>
                    </td>
     ---->               
           
        </div>
                  </table>
            </div>
            <div class="panel-body">
        <form method="post" action="fupdatemastertable.php" enctype="">
	<span style="margin-left:150px;">Search Key(Cant Change):</span><br/><input id="name" name="updater" type="text" value="<?php echo $updatek; ?>" readonly> <i class="fa fa-user"></i><br /><br/>
            <span style="margin-left:150px;">Name</span><br/><input id="name" name="nam_" type="text" value="<?php echo $allrecords[0]; ?>" > <i class="fa fa-user"></i><br /><br/>
            <span style="margin-left:150px;">Email</span><br/><input id="name" name="email_" type="text"   value="<?php echo $allrecords[1]; ?>" > <i class="fa fa-user"></i><br /><br/>

            
            <span style="margin-left:150px;">Payment Recived(use yes/no)</span><br/><input id="name" type="text" name="payment" value="<?php echo $allrecords[2]; ?>" ><i class="fa fa-money"></i><br /><br />
            
            <span style="margin-left:150px;">Payment Mode(CHEQUE/NEFT)</span><br/>
           <input id="name" name="paymentmode_" type="text" value="<?php echo $allrecords[3]; ?>" >
           <i class="fa fa-google-wallet"></i><br /><br />
           
 <span style="margin-left:150px;">Payment No</span><br/><input id="polno" name="paymentno_" type="text" value="<?php echo $allrecords[4]; ?>" > <i class="fa fa-number"></i><br /><br />           
            <span style="margin-left:150px;">Policy NO</span><br/><input id="polno" name="policyno_" type="text" value="<?php echo $allrecords[5]; ?>" > <i class="fa fa-number"></i><br /><br />
            <span style="margin-left:150px;">Policy ID</span><br/><input id="poltype" name="policyid_" type="text" value="<?php echo $allrecords[6]; ?>"><br /><br />
            <span style="margin-left:150px;">Policy Date</span><br/><input id="poldate" name="policydate_" type="date" value="<?php echo $allrecords[7]; ?>" >
             <i class="fa fa-calendar"></i><br /><br />
            <span style="margin-left:150px;">First Premium</span><br/><input id="tenure" name="firstprim_" type="number" value="<?php echo $allrecords[8]; ?>" ><br /><br />

            <span style="margin-left:150px;">Next Premium Date</span><br/><input id="nextpremiumdate" name="nxtprimdt" type="date" value="<?php echo $allrecords[9]; ?>" > <i class="fa fa-calendar"></i><br /><br />
            <span style="margin-left:150px;">Next Premium Date</span><br/><input id="tenure" name="nxtprim" type="number" value="<?php echo $allrecords[10]; ?>" ><br /><br />
            <span style="margin-left:150px;">Next Premium No</span><br/><input id="tenure" name="primno" type="number" value="<?php echo $allrecords[11]; ?>" ><br /><br />

           <span style="margin-left:150px;">Tenure</span><br/> <input id="tenure" name="tenur" type="number" value="<?php echo $allrecords[12]; ?>" ><br /><br />
            <span style="margin-left:150px;">Sum Assured</span><br/><input id="sumassured" name="sumassur" type="number" value="<?php echo $allrecords[13]; ?>" ><br /><br />
            <span style="margin-left:150px;">Premium payment type(y/m/q/h) </span><br/>
            <input id="tenure" name="primtype" type="text" value="<?php echo $allrecords[14]; ?>" >
<br /><br />
            <span style="margin-left:150px;"> Bond received from LIC ? (y/n)</span><br/>
            <input id="tenure" type="text" name="bond" value="<?php echo $allrecords[15]; ?>" >
<br /><br />
            <span style="margin-left:150px;">Bond Recieved Date</span><br/><input id="bondreceived" name="bonddate_" type="date" value="<?php echo $allrecords[16]; ?>" >  <i class="fa fa-calendar"></i><br /><br />
            <span style="margin-left:150px;">  Bond given to party? (y/n)</span><br/>
            <input type="text" id="bondreceived" name="custbond" value="<?php echo $allrecords[17]; ?>" >
 <br /><br />
            <span style="margin-left:150px;">Bond Given Date</span><br/><input id="bondgiventoparty" name="custbonddt_" type="date" id="bondreceived" value="<?php echo $allrecords[18]; ?>" >  <i class="fa fa-calendar"></i>
            <br /> <br /><input type="submit" name="submup" style="color:black;margin-left:150px;" value="Save & Update">
             <input type="reset"  style="color:black;margin-left:25px;" value="clear">
           
            
            </div>
        </form>
            </div>
    </div>