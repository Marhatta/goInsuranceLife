<?php session_start();
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

////////////////////////


          $servername="localhost";
          $username="u837456730_root";
          $password="rio147";
          $dbname="u837456730_lic";

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
    $stmt = $conn->prepare("select count(email) from customer WHERE readed=0;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {    
        $messegecount=$v;
    }

      $filed_err = array();
      $succ="";

      if(isset($_POST['Save']))
      {
        $note_title=$_POST["notetitle"];
        $note_message=$_POST["notemessage"];
        if(empty($note_title))
        {
          $filed_err[]="Please Enter Note's Title";
        }
        if(empty($note_message))
        {
          $filed_err[]="Please Enter Your Message";
        }
        if(count($filed_err)==0)
        {

          $servername="localhost";
          $username="u837456730_root";
          $password="rio147";
          $dbname="u837456730_lic";
          $d=date("y/m/d");
          try 
          {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "INSERT INTO notes (note_title,note,note_date) VALUES ('$note_title','$note_message','$d')";
          // use exec() because no results are returned
          $conn->exec($sql);
          $succ="New Note Saved successfully";
          }
          catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
          }
        }
         $conn = null;
      }
     
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <link href="styleadmin.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

                          $servername="localhost";
                          $username="u837456730_root";
                          $password="rio147";
                          $db="u837456730_lic";
                          $counte=0;
                          try {
                                $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
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
<li style="font-size:18px;margin-left:500px;"><a href="index.php"> Go to Website <i class="fa fa-eye"></i></a> </li>
<li style="float:right;color:white;"><a href="login.php?logout='1'"><i class="fa fa-sign-out"></i>Logout</li></a>
	
<li class="dropdown" style="float:right;color:white;"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i><?php echo " ".$_SESSION['username']; ?> <i class="fa fa-chevron-down"></i></a>
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

            <span style="font-weight:300;margin-left:10px;color:white;"> Welcome <?php echo $_SESSION['username'];?>
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
    </div>

<div class="col-md-9 img-responsive">
<div class="col-md-12">
        <div  id="notes" class="col-md-5 thumbnail img-responsive" style="background-color:black;">
        <form style="margin-top:50px; " method="POST">
            <div style="text-align: center;margin-top:-25px;">
            <center><h2 style="color:white"><i class="fa fa-pencil">Add a Note</i></h2></div></center>
            <p style="color:red">
            <?php 
              if(count($filed_err)>0)
              {
                foreach($filed_err as $error)
                {
                  echo $error."<br/>";
                }
              }
              echo $succ; 
            ?></p><br />
            <input type="text" id="notetitle" name="notetitle" style="margin-left:20px;" class="form-control" placeholder="Enter the title of the Note">
            <h2 style="color:whitesmoke;font-size:25px;font-weight:200;margin-left:20px;">Write Your Note:</h2>
            <textarea  id="notemessage" name="notemessage" class="form-control"  style="margin-left:20px;"></textarea>
            <br /><br />
            <input style="margin-left:50px;"  class="btn btn-success" type="submit" name="Save">
            <input style="margin-left:20px;" class="btn btn-primary" type="reset" value="Clear">

        </form>
        
        </div>
        <div class="col-md-4 " style="margin-top:50px;">
        <h3>Search for a Note <i class="fa fa-pencil"> </i></h3>
        <form method="post" action="notesearchresult.php" enctype="">
        <input type="text" placeholder="Enter title of the Note" name="key" class="form-control" style="width:300px;height:40px;"><br />
        <input type="submit" name="Search" class="btn btn-success fa fa-search">
        
        </form>
        <?php 
         $err="";
          if(isset($_POST['Search']))
          {
            $notetitle=$_POST["title_1"];
            if(empty($notetitle))
            {
              $err="Filed Is Empty.....";
            }
            else
            {
              $d=date("y/m/d");

              $servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
              $counte=0;
              $value=array();
              try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  // set the PDO error mode to exception
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $stmt = $conn->prepare("SELECT note_date,note FROM notes WHERE note_title LIKE '$notetitle'");
                  $stmt->execute();
                  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
              
                      $value[$counte]=$v;
                      $counte=$counte+1;
                  }
                   if(!empty($value[0]))
                   {
                  echo "Added On:".@$value[0]."</br>";
                  echo "Note".@$value[1];
                  }
                  if(empty($value[0]))
                  {
                    echo "<br/>";
                    echo "Note Not Found.....";
                  }
                  $congo="successful";
                  }
                  catch(PDOException $e)
                  {
                  echo "Note Not Found.....";
                  }
                  

              $conn = null;
            }
          }

        ?>



  
 
    <p style="color: red;margin-top:10px; "><?php echo $err;?></p>
    
        <?php 

          $dbhost="localhost";
          $username="u837456730_root";
          $password="rio147";
          $db="u837456730_lic";
          $counte=0;
          
        try
        {  
            $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT note,note_date FROM notes order by note_date desc");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
              
              $value[$counte]=$v;
              $counte=$counte+1;
              
            }
            
            
            
          }
          catch(PDOException $e)
          {
            $congo= $sql . "<br>" . $e->getMessage();
          } 
          $conn = null;
          
          
    ?>
    
        Recent Notes <i class="fa fa-pencil"> </i>
        <div class="well img-responsive" style="width:100%;"  >
            Added on:<?php  echo $value[1]; ?>
            <div class="well img-responsive" style="height:100px;width:100%;" >
                <?php 
           echo $value[0];
                ?>
            </div>
            Added on:<?php echo $value[3]; ?>
            <div class="well img-responsive" style="height:100px;">
                <?php
                  echo $value[2];
                ?>
            </div> 

        </div>
    
    
    
       
        <?php 
            
            if (isset($_POST['show'])) : ?>
            <?php
              $counte=$ct=0;
              try
              {  
                $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT note_date,note FROM notes");
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
              ?>
               <?php foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) :?>
                  
                   
                  <p>Added on:</p>
                  <?php
                  $notes_val[$counte]=$v;
                  echo $notes_val[$counte]; ?>
                  <div class="well img-responsive" >
                    <div class="well img-responsive" style="height:100px;">
                      <?php 
                        $counte=$counte+2;
                        $ct=$counte;
                        echo $notes_val[$ct];
                      ?>
                    </div>
                  </div>
                  
                <?php endforeach ?>
             <?php }
              catch(PDOException $e)
              {
                $congo= $sql . "<br>" . $e->getMessage();
              } 
              $conn = null;
            ?>
            
            <?php endif ?> 
                
        
       <a href="displayNotes.php"> <button name="show" class="btn btn-success" style="width:343px;">View all Notes <i class="fa fa-pencil"> </i> </button></a>
       </div>
</div>
      </div>

</body>
</html>