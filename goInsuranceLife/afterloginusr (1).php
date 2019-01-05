<?php

session_start();

	if(!isset($_SESSION['usrrec']))
	{
        	header('location:index.php');
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
$policyno=$_SESSION['usrrec'];
$allrecords=array();
$counte=0;



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT name,email,payment_mode,payment_no,policy_id,policy_date,tenure,sum_assured,premium_type from master_table where policy_no='$policyno' ");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $allrecords[$counte]=$v;
        $counte=$counte+1;
    }
    
//echo "<h4 style='margin-top:150px;margin-left:280px;color:green;'>".$allrecords[1]."".$allrecords[2]."".$allrecords[3]."".$allrecords[4]."".$allrecords[5]."".$allrecords[6]."".$allrecords[7]."".$allrecords[8]."</h4>";    
/*echo ".$allrecords[0].";//name
echo ".$allrecords[1].";//email
echo ".$allrecords[2].";//paymode
echo ".$allrecords[3].";//pay_no
echo ".$allrecords[4].";//policy_id
echo ".$allrecords[5].";//policydate
echo ".$allrecords[6].";//tenure
echo ".$allrecords[7].";//sumassurde
echo ".$allrecords[8].";//premiumtype
echo "</h2>"
*/
//echo $allrecords[9];//pr_no
//echo $allrecords[10];//premium
//echo $allrecords[11];//premiumdate    
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
//$conn = null;


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
                          if(isset($_POST['p_submit']))
                          {
                            $curr_pwd=$_POST["pwd"];
                            $new_pwd=$_POST["pwd1"];
                            $conf_pwd=($_POST["pwd2"]);
                            $b=1;
                            if(empty($curr_pwd))
                            {
                              $error="Please Enter Valid Password";
                              $b=2;
                            }
                            if((!empty($new_pwd)) && (!empty($conf_pwd)))
                            {
                              if($new_pwd != $conf_pwd)
                              {
                                $error="Please Enter Valid Password";
                                $b=2;
                              }
                            }
                            else
                            {
                              $error="Please Enter Valid Password";
                              $b=2;
                            }
                            if($b==1)
                            {

                              $policy_n=$_SESSION['usrrec'];
                              $dbhost="localhost";
                              $username="u837456730_root";
                              $password="rio147";
                              $db="u837456730_lic";
                              try
                              {
                                $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
                                // set the PDO error mode to exception
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $stmt = $conn->prepare("UPDATE usrlogin SET password='$new_pwd'
                              WHERE password='$curr_pwd' AND policy_no='$policy_n'");
                                $stmt->execute();
                                $p=$stmt->rowCount();
                                if($p==1)
                                {
                                  $congo="Password Changed Successfully";
                                  echo "<script  type='text/javascript' language='javaScript'>
                                        alert('".$congo."');"."</script>";
                                }
                                else
                                {
                                  $congo="Current Password Is Wrong";
                                  echo "<script  type='text/javascript' language='javaScript'>
                                        alert('".$congo."');"."</script>";
                                }
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
                        <?php if($b==2) : ?>
                            <script  type='text/javascript' language='javaScript'>alert('<?php echo $error;?>');
                              </script>
                           <?php endif ?>

                        <form method="POST">
                        
                          <input type="password" name="pwd" class="form-control" placeholder="Current Password"></br></br>
                          <input type="password" name="pwd1" class="form-control"  placeholder="New Password"></br></br>
                          <input type="password" name="pwd2" class="form-control"  placeholder="Confirm Password"></br></br>
                         
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-info" name="p_submit">
                            <button type="close" class="btn btn-primary " data-dismiss="modal">Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
          </div>





<!---->
<div class="header">

    <div class="navbar navbar-fixed-top" style="height:38px;">


<button class="navbar-toggle" data-target=".navHeaderCollapse" data-toggle="collapse">
<i class="fa fa-bars" style="font-size:20px;"></i>
</button>

<div class="collapse navbar-collapse navHeaderCollapse">



<ul class="nav nav-tabs" style="background:#3b5998;">
<li style="font-weight:300;font-size:20px;color:white;margin-left:10px;margin-top:10px;">

<span style="font-size:23px;font-weight:200;">go</span><i class="fa fa-umbrella" style="font-size:35px;"></i><span style="font-size:23px;font-weight:200;margin-left:-10px;">nsurance</span><span style="font-size:23px;font-weight:200;">life</span>
<span style="font-size:18px;font-weight:300;margin-left:-5px;">.com</span>
</li>
<li style="float:right;color:white;"><a href="afterloginusr.php?logout='1'"><i class="fa fa-sign-out"></i>
<span style="color:white;">Logout</span></a></li>
<?php
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['usrrec']);
		header('location:index.php');
	}
	if(!isset($_SESSION['usrrec']))
      	{
        	header('location:index.php');
      	}
?>

<li class="dropdown" style="float:right;color:white;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i><?php echo " ".$allrecords[0]; ?></a>
    <ul class="dropdown-menu">
        <li><a  href="#"  data-toggle="modal" data-target="#myModal_1">Change Password</a></li>
    </ul>
</li>


</ul>
</div>
</div>
</div>





    
 <div class="col-md-12" style="margin-top:60px;">
 <button class="btn btn-success img-responsive" style="align:center;width:100%;margin-bottom:20px;">Here are your Details</button>
 </div>   
 <div class="col-md-12" style="text-align:center;"><span style="font-size:20px;font-weight:200;">For any further changes or details.Please contact administrator.</span></div>
 <div class=" table table-responsive col-md-12" style=" margin-top:80px;margin-right:20px;">
 <table class="table table responsive table-hover table-striped table-bordered" id="maindata">
 
<tr><th>Name</th><td><?php echo $allrecords[0]; ?></td></tr>
<tr><th>Email</th><td><?php echo $allrecords[1]; ?></td></tr>
<tr><th>Policy No</th><td><?php echo $policyno; ?></td></tr>
<tr><th>Payment Mode</th><td><?php echo $allrecords[2]; ?></td></tr>
<tr><th>Payment No</th><td><?php echo $allrecords[3]; ?></td></tr>
<tr><th>Policy ID</th><td><?php echo $allrecords[4]; ?></td></tr>
<tr><th>Policy Date</th><td><?php echo $allrecords[5]; ?></td></tr>
<tr><th>Tenure</th><td><?php echo $allrecords[6]; ?></td></tr>
<tr><th>Sum Assured</th><td><?php echo $allrecords[7]; ?></td></tr>
<tr><th>Premium Type</th><td><?php if($allrecords[8]=='m')
					echo "Monthly";
					else if($allrecords[8]=='y')
					echo "Yearly"; 
					else if($allrecords[8]=='q')
					echo "Quaterly";
					else
					echo "Half Yearly";?></td></tr>

 
 </table>
 </div>
 <!-------------------------------------------------------------------->



<div style="">
 <button class="btn btn-success img-responsive" style="align:center;width:100%;margin-bottom:20px;">Premium Details</button>
 </div> 
 <div class="table-responsive" style="margin-top:100px;margin-right:20px;">
 <table class="table table-responsive table-hover table-striped table-bordered">
 
 <tr><th>No</th><th>Premium</th><th>Premium Date</th></tr>
 <!-------------------------------------------------------------------->

 
<?php
$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
$count=0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM ".$policyno."p");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $primtbl[$count]=$v;
        $count=$count+1;
    }
    
/*echo $primtbl[0];//name
echo $primtbl[1];//email
echo $primtbl[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
$i=0;
$count=$count-1;
for ($x = 0; $x <= $count/3; $x++) {
    echo "<tr><td>".$primtbl[$i++]."</td><td>".$primtbl[$i++]."</td><td>".$primtbl[$i++]."</td></tr>";
}



?>
 
</table>
</div>
</body>
</html>