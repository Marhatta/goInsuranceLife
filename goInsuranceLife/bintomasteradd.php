<?php
 
$keyadd= $_GET['id'];

//echo $symb;
 
 
$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";

//////////////////


//$deletek=$_POST["deletekey"];//*

//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " INSERT INTO master_table SELECT * FROM bin WHERE policy_no='$keyadd';
    INSERT INTO usrlogin SELECT * FROM usrloginbackup WHERE policy_no='$keyadd';
    DELETE FROM usrloginbackup WHERE policy_no='$keyadd';
    DELETE FROM bin WHERE policy_no='$keyadd';
    CREATE TABLE ".$keyadd."p AS SELECT * from ".$keyadd."pb; 
    DROP TABLE ".$keyadd."pb;
    ";
    // use exec() because no results are returned
    $conn->exec($sql);
    $congo="Record Added from bin to master table Successfully";
    header("location:http:adminindexakmal.php?var=$congo&var2=1");

    }
catch(PDOException $e)
    {
    $congo= $sql . "<br>" . $e->getMessage();
    header("location:http://localhost/admin-login/public_html/adminindexakmal.php?var=$congo&var2=1");
    }

$conn = null;







 ?>