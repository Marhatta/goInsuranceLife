<?php
if(!empty($_POST["sub_pr"])){
$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";


//////////////////
$primno=$_POST["pr_no"];
$premium=$_POST["pr_"];
$prdate=$_POST["pr_date"];
$policyno=$_POST["pr_policyno"];


//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " INSERT INTO ".$policyno."p VALUES ($primno,$premium,'$prdate');
    	     UPDATE master_table SET next_premium=$premium,next_premium_date='$prdate',premium_no=$primno WHERE policy_no='$policyno'; ";
    
    
    // use exec() because no results are returned

 
    $conn->exec($sql);


    $congo="New Record Created Successfully";
    header("location:http://localhost/admin-login/public_html/pr_index.php?var=$congo&var2=1");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    //echo $sql1 . "<br>" . $e->getMessage();
    header("location:http://localhost/admin-login/public_html/pr_index.php?var=$congo&var2=1");
    }


$conn = null;

}





 ?>