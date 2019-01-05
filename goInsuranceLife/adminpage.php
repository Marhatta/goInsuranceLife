<?php session_start();
      if(!isset($_SESSION['username']))
      {
        header('location:login.php');
      }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>
  <meta charset="utf-8">
   
  <link href="styleadmin.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stylegraph.css">
  <link rel="stylesheet" href="css/bar.css">
 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
                                $error['succ']="Password Changed Successfully";
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
  <div class="navbar navbar-fixed-top img-responsive" style="height:38px;">
<button class="navbar-toggle" data-target=".navHeaderCollapse" data-toggle="collapse">
<i class="fa fa-bars"></i>

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

      <div class="sidebar col-md-2 img-responsive">

        <ul id="nav">
        <?php
          $usr=$_SESSION['username'];


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
            <li><a href="adminpage.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            
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
        <div class="dashboard img-responsive col-md-12">
            <h1> <i class="fa fa-gear gear" style="color:white;margin-left:20px;"></i><span style="font-weight:200;" class="manage"> Manage your site</span></h1>
            
        </div>
        <div class="panel img-responsive col-md-12">
            <div class="panel-title">
                <h3>Overview</h3></div>
           <div class="panel-body">
            <div class="col-md-4">
                <div class="well">
                <h2>
                <?php
                  try
                  {  
                    $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT count(policy_no) FROM master_table");
                    $stmt->execute();
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    //echo $v;
                      echo $v;
                    }
                  }
                  catch(PDOException $e)
                  {
                    $congo= $sql . "<br>" . $e->getMessage();
                  } 
                  $conn = null;
                ?>
                </h2>
                <h5 style="text-align:center;">Policies Sold</h5> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="well">
                <h2><i class="fa fa-signal"></i>
                <?php
                  try
                  {  
                    $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM count");
                    $stmt->execute();
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    //echo $v;
                      echo $v;
                    }
                  }
                  catch(PDOException $e)
                  {
                    $congo= $sql . "<br>" . $e->getMessage();
                  } 
                  $conn = null;
                ?>
                </h2>
                <h5 style="text-align:center;">Visitors</h5> 
            </div>
            </div>

            <div class="col-md-4">
                <div class="well">
               <h2><i class="fa fa-plus"></i> 35</h2>
                <h6 style="text-align:center;"> Total Policies</h6> 
                </div>
            </div>
    </div>
   </div>
    </div>
<?php


$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
$alldata3=array();
$count=0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=01;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[0]=$v;
    }
    
    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=02;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[1]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=03;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[2]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=04;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[3]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=05;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[4]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=06;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[5]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=07;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[6]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=08;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[7]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=09;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[8]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=10;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[9]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=11;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[10]=$v;
    }

    $stmt = $conn->prepare("select count(policy_no) from master_table where MONTH(policy_date)=12;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $alldata3[11]=$v;
    }
    

/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;




?>
<div class="col-md-9" style="margin-left:-80px;">    
    <div id="wrapper">
         <div class="chart">
            <h3>Police Sold As Per Month</h3></br>
            <table id="data-table" border="1" cellpadding="10" cellspacing="5">
               <thead>
                  <tr>
                     <td>&nbsp;</td>
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody >
                  <tr >
                      <th scope="row" >JAN</th>
                      <td>
<?php echo $alldata3[0]; ?>
                      </td>
                  </tr>
                  <tr>
                     <th scope="row">FEB</th>
                     <td><?php echo $alldata3[1]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">MAR</th>
                     <td><?php echo $alldata3[2]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">APR</th>
                     <td><?php echo $alldata3[3]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">MAY</th>
                     <td><?php echo $alldata3[4]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">JUNE</th>
                     <td><?php echo $alldata3[5]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">JUL</th>
                     <td>
<?php echo $alldata3[6]; ?>
                    </td>
                  </tr>
                  <tr>
                     <th scope="row">AUG</th>
                     <td><?php echo $alldata3[7]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">SEP</th>
                     <td><?php echo $alldata3[8]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">OCT</th>
                     <td><?php echo $alldata3[9]; ?></td>
                  </tr>
                  <tr>
                     <th scope="row">NOV</th>
                     <td><?php echo $alldata3[10]; ?></td>
                  </tr>
                  <tr>
                    
                     <th scope="row">DEC</th>
                     <td><?php echo $alldata3[11]; ?></td>
                  </tr>
               </tbody>
            </table>


         </div>
      </div>
    </div>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/graph.js"></script>
              

</body>
</html>