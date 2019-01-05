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
        <div class=" img-responsive " style="margin-top:50px;">

       <script>

/*   Free Script provided by HIOXINDIA            */
/*   visit us at http://www.hscripts.com     */
/*   This is a copyright product of hioxindia.com */


var heading = "#ffaaff";
var bgcolor1 = "#ffdddd";
var bgcolor2 = "#eeffcc";
var font1 = "blue";
var font2 = "#000000";
var height = "500";
var width = "900";


function DaysInMonth(Y, M) {
    with (new Date(Y, M, 1, 12)) {
        setDate(0);
        return getDate();
    }
}

function setcal(mon,yea)
{
	mon=mon+1;
	var days = DaysInMonth(yea,mon);
	var D = new Date(mon+"/01/"+yea);
	var day = D.getDay();
		
	var ar = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	var df = ar[mon-1];
	df = df+", "+D.getFullYear();
	document.xxx.ddd.value = df;

	var ddf = document.calen.length;
	
	for(var xx=0; xx<ddf; xx++)
		document.calen[xx].value = "";

	var ss = 1;
	for(var xx=day; xx<day+days; xx++){
		document.calen[xx].value = ss++;
	}
}

var exd = new Date();
var monthe = exd.getMonth();
var yeare = exd.getFullYear();

function prev()
{
	monthe = monthe-1;
	if(monthe < 0)
	{
		yeare = yeare-1;	
		monthe = 11;
	}
	setcal(monthe, yeare);
	return false;
}

function next()
{
	monthe = monthe+1;
	if(monthe > 11)
	{
		yeare = yeare+1;	
		monthe = 0;
	}
	setcal(monthe, yeare);
	return false;
}

function thismon()
{
	//yeare = yeare+1900;
	setcal(monthe, yeare);
}

document.write("<table width="+width+" height="+height+" cellpadding=1 cellspacing=0 \
		style=\"font-family: arial, verdana; color: "+font1+"; font-size: 12px;\" bgcolor="+bgcolor1+" border=1>\
			<tr bgcolor="+heading+" align=center><td colspan=7>\
				<table width=100% align=center style=\"color: "+font2+"; font-size: 12px;\" align=center>\
				<tr align=center><td><a style=\"cursor: pointer;\" onclick=\"return prev()\">Prev</a></td>\
				<td><form name=xxx style=\"margin: 0px; padding: 0px;\"><input size=12 style=\"font-size: 12px; \
				font-weight: bold; text-align: center; font-family: san-serif, verdana, arial;\" type=text name=ddd></form></td>\
				<td><a style=\"cursor: pointer;\" onclick=\"return next()\">Next</a></td></tr></table>\
			</td></tr>\
			<tr bgcolor="+bgcolor2+" align=center><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thur</td><td>Fri</td><td>Sat</td></tr>");
document.write("<form name=calen style=\"border: 0px; padding:0px;\">");
for(var xx=0; xx<6; xx++)
{
	document.write("<tr>");
	for(var cc=0; cc<7; cc++){
		var dd = xx*7+cc;
		if(dd == 41)
			document.write("<td align=center><a style=\"font-size: 9px; color: 888888; text-decoration: none;\" href=http://www.hscripts.com>H</a></td>");
		else
			document.write("<td align=center><input style=\"background-color: "+bgcolor1+"; color: "+font2+"; border: 0px; \" name=x"+dd+" readonly size=1></td>");
	}
	document.write("</tr>");
}

document.write("</form></table>");

thismon();

/*   Free Script provided by HIOXINDIA            */
/*   visit us at http://www.hscripts.com     */
/*   This is a copyright product of hioxindia.com */




</script>

      </div>
    </div>


</body>
</html>