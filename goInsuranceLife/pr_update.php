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
$policyno=$_POST["up_policy_no"];
$primno=$_POST["up_pr_key"];

$allrecords=array();
$counte=0;



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT premium_no_,premium_,premium_date_ FROM ".$policyno."p where premium_no_ ='$primno'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $allrecords[$counte]=$v;
        $counte=$counte+1;
    }
    

    
                
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


if(empty($allrecords[0]))
     {

        $congo= "Record Not Found";
        header("location:pr_index.php?var=$congo&var2=1");
      }


?> 
<html>
<head>
    <link href="bootstrap.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
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
                    
            <span style="font-weight:300;margin-left:10px;color:white;"> Welcome,<?php echo " ".$_SESSION['username'];?>
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
        
       
            
        <div  class="col-md-12" style="margin-top:50px;font-weight:200;font-size:25px;text-align:center;">
            <button class="btn btn-success">PREMIUM PORTAL</button></div>
           
            
                 
   <!---################################################################################################################################------>

<div class="col-md-12" style="text-align:center;margin-top:20px;">
<span style="font-size:20px">Search/Update/Delete Premiums</span>
</div>
  <div style="background-color:#0086b3; margin-top:20px;width:100%;text-align:center;" class="col-md-12">
            <form method="post" action="pr_search.php" enctype="" style="margin:10px;">      
                  
                    <input type="text" name="searchkey" placeholder="Enter Policy No"> <i class="fa fa-search" style="color:white;"></i><br /><br />
            <input type="submit" name="searchsub" style="color:black; margin-left:5px;" value="Search">
            
            </form>
  
  <!---################################################################################################################################------>

<br />
 
            <form method="post" action="pr_update.php" enctype="" >      
                  
                    <input type="text" name="up_policy_no" placeholder="Enter Policy No"> <i class="fa fa-search" style="color:black;"></i>
                    <input type="text" name="up_pr_key" placeholder="Enter Premium No"> <i class="fa fa-search" style="color:black;"></i>
                    <br /><br />
            <input type="submit" name="updatesub" style="color:black; margin-left:5px;" value="Update">
            
            </form>
 
 <!---################################################################################################################################------>

  
            <form method="post" action="pr_delete.php" enctype="">      
                  
                     <input type="text" name="del_policy_no" placeholder="Enter Policy No"> <i class="fa fa-search" style="color:black;"></i>
                    <input type="text" name="del_pr_key" placeholder="Enter Premium No"> <i class="fa fa-search" style="color:black;"></i>
                    <br /><br />
            <input type="submit" name="deletesub" style="color:black; margin-left:5px;" value="Delete">
            
            </form>

 </div>



  <!---################################################################################################################################------>
<div class="col-md-12" style="text-align:center;margin-top:20px;">
<span style="font-size:20px;margin-left:50px;">Update Premiums</span>
</div>
<div class="col-md-12" style="background-color:#0086b3;">
        <form method="post" action="updateprmtbl.php" enctype="" style="margin:10px;">
<span style="color:whitesmoke;margin-left:60px;">Premium No</span>           
 <input id="name" name="pr_no" type="number" style="margin-left:100px;"  value="<?php echo $allrecords[0]; ?>" readonly> <i class="fa fa-user"></i><br /><br />
<span style="color:whitesmoke;margin-left:53px;">Premium</span>           
 <input id="name" name="pr_" type="number" style="margin-left:130px;"  value="<?php echo $allrecords[1]; ?>"> <i class="fa fa-user"></i><br />

            <br />
<span style="color:whitesmoke;margin-left:50px;">Premium Date</span> 	
<input id="polno" name="pr_date" style="margin-left:100px;" type="date" value="<?php echo $allrecords[2]; ?>"> <i class="fa fa-number"></i><br /><br />           
<span style="color:whitesmoke;margin-left:46px;">Policy Number</span>          
 <input id="polno" name="pr_policyno"  style="margin-left:100px;" type="text" value="<?php echo $policyno; ?>" readonly> <i class="fa fa-number"></i><br /><br />

            <br /> <br /><input type="submit" name="sub_pr" style="color:black;margin-left:150px;" value="Save">
             <input type="reset"  style="color:black;margin-left:25px;" value="clear">
           
            
           
        </form>

  <!---################################################################################################################################------>


</div>
     </div>
    </div>