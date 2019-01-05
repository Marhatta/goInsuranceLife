<?php
if(!empty($_POST["deletesub"])){
$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";

//////////////////
$primno=$_POST["del_pr_key"];

$policyno=$_POST["del_policy_no"];


//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM ".$policyno."p WHERE premium_no_=$primno";
    
    
    // use exec() because no results are returned

 
    $conn->exec($sql);


    $congo= "Record Deleted Successfully";
    header("location:pr_index.php?var=$congo&var2=1");
    }
catch(PDOException $e)
    {
    $congo= $sql . "<br>" . $e->getMessage();
    //echo $sql1 . "<br>" . $e->getMessage();
    header("location:pr_index.php?var=$congo&var2=1");
    
    }

$conn = null;

}





 ?>