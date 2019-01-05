<?php
if(!empty($_POST["deletesub"])){
$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";

//////////////////


$deletek=$_POST["deletekey"];//*

//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " INSERT INTO bin SELECT * FROM master_table WHERE policy_no='$deletek';
    INSERT INTO usrloginbackup SELECT * FROM usrlogin WHERE policy_no='$deletek';
    DELETE FROM usrlogin WHERE policy_no='$deletek';
    DELETE FROM master_table WHERE policy_no='$deletek';
    CREATE TABLE ".$deletek."pb AS SELECT * from ".$deletek."p; 
    DROP TABLE ".$deletek."p; ";
    // use exec() because no results are returned
    $conn->exec($sql);
    $congo = "Record Deleted Successfully";
    header("location:adminindexakmal.php?var=$congo&var2=1");

    }
catch(PDOException $e)
    {
    
    $congo= $sql . "<br>" . $e->getMessage();
    header("location:adminindexakmal.php?var=$congo&var2=1");
    }

$conn = null;

}





 ?>