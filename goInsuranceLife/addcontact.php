<?php


if(!empty($_POST["submit"])){

$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";

$nam=$_POST["usrName"];
$ema=$_POST["usrEmail"];
$conta=$_POST["usrContact"];
$mes=$_POST["usrMes"];

$prevurl=$_GET['id'];

if( empty($_POST["usrName"]) || empty($_POST["usrEmail"]) || empty($_POST["usrContact"]) || empty($_POST["usrMes"]) || $nam=="" || $ema=="" || $conta=="" || $mes=="" )
{

$congo="Please Fill all field We need all fields to Reach to You";
header("location:$prevurl?var=$congo&var2=1");

}
else{
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO customer (name,email,contact,messege,readed)
    VALUES ('$nam','$ema','$conta','$mes',0)";
    // use exec() because no results are returned
    $conn->exec($sql);
    $congo= "Messege Sent Successfully We will reach you soon";
    header("location:$prevurl?var=$congo&var2=1");

    }
catch(PDOException $e)
    {
    $congo= $sql . "<br>" . $e->getMessage();
    header("location:$prevurl?var=$congo&var2=1");

    }

$conn = null;
}
}

?>