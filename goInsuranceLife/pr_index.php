<?php
	session_start();
      	if(!isset($_SESSION['username']))
  	{
        	header('location:login.php');
      	}

          $dbhost="localhost";
          $username="u837456730_root";
          $password="rio147";
          $db="u837456730_lic";
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
            $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
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
	
	echo 'window.location.href = "pr_index.php";';
	
	echo "</script>";



}


if(!empty($_POST['subdt']))
{
$iodt=$_POST['datein'];
$ipdate=strtotime($_POST['datein']);
	if($_POST['prtp']=='m')
	{
		$conv=30*86400;
		$opd=$ipdate+$conv;
		$opdt=date( 'Y-m-d', $opd);	
	}

	if($_POST['prtp']=='y')
	{
		$conv=364*86400;
		$opd=$ipdate+$conv;
		$opdt=date( 'Y-m-d', $opd);	
	
	}
	if($_POST['prtp']=='h')
	{
		$conv=182*86400;
		$opd=$ipdate+$conv;
		$opdt=date( 'Y-m-d', $opd);	
	
	}
	if($_POST['prtp']=='q')
	{
		$conv=91*86400;
		$opd=$ipdate+$conv;
		$opdt=date( 'Y-m-d', $opd);	
	
	}
	


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

            <li><a href="adminpage.php"><i class="fa fa-dashboard active"></i> Dashboard</a></li>
          
            <li><a href="notes.php"><i class="fa fa-sticky-note"></i> Make Notes </a></li>
            <li><a href="cal.php"><i class="fa fa-calendar"></i> Calendar</a></li>
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
        
        <div class="col-md-12">
            
        <div style="margin-top:60px;margin-bottom:50px;font-weight:200;font-size:25px;text-align:center;">
            <button class="btn btn-success" style=" font-size:26px;align:center;margin-left:100px;">PREMIUM PORTAL</button>
<span style="font-size:20px;float:right;"><a href="index.php">Go to Website </a><i class="fa fa-eye"></i></span>
</div>
           <div class="col-md-12" style=" text-align:center;">
<span style="font-size:20px;">Search/Delete/Modify Premium </span>
</div>
            <div class="col-md-12" style="text-align:center;">
                
                <div style="margin:10px;background-color:#0086b3; width:100%;" class="col-md-12">
  <!---################################################################################################################################------>
            <form method="post"  style="margin-top:40px;" action="pr_search.php" enctype="">      
                  
                    <input type="text" name="searchkey" placeholder="Enter Policy No"> <i class="fa fa-search" style="color:white;"></i><br /><br />
            <input type="submit" name="searchsub" style="color:black; margin-left:5px;" value="Search">
            
            </form>


  <!---################################################################################################################################------>
  
  
            <form method="post" action="pr_update.php" enctype="">      
                  
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



  <!---################################################################################################################################------>

  
                </div>
                    </td>
                  
           
        </div>
                 
            </div>
            <div class="col-md-12">
<div class="col-md-12" style="text-align:center;margin-top:20px;">
<span style="font-size:20px;">Calulate dates for Monthly/Quaterly/Half-Yearly/Yearly Premiums</span>
<div class="col-md-12" style="background-color:#0086b3;">            
<form method="post" action="?" enctype="" style="margin-top:20px;">
           <span style="color:whitesmoke;">Enter date</span> <input id="name" style="margin-left:-1px;" name="datein" value="<?php echo $iodt; ?>" type="date" placeholder="Enter Date">
            <br /><br />
 <span style="color:whitesmoke;margin-left:-50px;">Select your choice</span>
            <select name="prtp" id="name"  style="margin-left:-1px;" >
            <option value="m" >Monthly</option>
            <option value="y">Yearly</option>
            <option value="h">Half-Yearly</option>
            <option value="q">Quaterly</option>
            </select><br /><br />
 <input type="submit" name="subdt" style="color:black;margin-left:80px;" value="Get Date"><br /><br />
            <input id="name" name="dateop" style="margin-left:70px;" type="date" value="<?php echo $opdt; ?>"><br /><br />
         
           
            </form>
            
          </div>  
            <div class="col-md-12" style="text-align:center;margin-top:20px;">
<span style="font-size:22px; ">Add Premiums</span>
</div>

 <div class="col-md-12" style="background-color:#0086b3;">
        <form method="post" action="addintoprmtbl.php" enctype="" style="margin-top:20px;">
            <input id="name" name="pr_no" type="number" style="margin-left:90px;"  placeholder="Enter Premium No"> <i class="fa fa-user"></i><br /><br />
            <input id="name" name="pr_" type="number"  style="margin-left:90px;" placeholder="Enter Premium"> <i class="fa fa-user"></i><br />

            <br />
<span style="color:whitesmoke;margin-left:-57px;">Next Premium Date</span>
 	<input id="polno" style="margin-left:10px;" name="pr_date" type="date" value="<?php echo $opdt; ?>"> <i class="fa fa-number"></i><br /><br />           
            <input id="polno"  style="margin-left:83px;" name="pr_policyno" type="text" placeholder="Enter Policy number"> <i class="fa fa-number"></i><br /><br />

            <br /> <br /><input type="submit" name="sub_pr" style="color:black;margin-left:150px;" value="Save">
             <input type="reset"  style="color:black;margin-left:25px;" value="clear">
           
            
            </div>
        </form>
</div>
            </div>
    </div>