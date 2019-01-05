<?php

///////////////

$primno=$_POST["pr_no"];
$premium=$_POST["pr_"];
$prdate=$_POST["pr_date"];
$policyno=$_POST["pr_policyno"];
/////////////////////////////////////////////////////////////////////////////////////////////////////////
 
if(!empty($_POST["sub_pr"])){

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
$alldata=array();
$count=0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT max(premium_no_) FROM ".$policyno."p");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $alldata[$count]=$v;
        $count=$count+1;
    }
    
/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;







if($primno==$alldata[0])
{

$secquery="UPDATE master_table SET next_premium=$premium,next_premium_date='$prdate',premium_no=$primno WHERE policy_no='$policyno';";

}
else
{

$secquery="";
}




///////////////////////////////////////////////////////////////////////////////////////////////////////////








$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
//////////////////



//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE ".$policyno."p SET premium_=$premium , premium_date_='$prdate' WHERE premium_no_=$primno;$secquery";
    
    
    // use exec() because no results are returned

 
    $conn->exec($sql);
	

    $congo= "Record Updated Successfully";
   header("location:pr_index.php?var=$congo&var2=1");
    }
catch(PDOException $e)
    {
    $congo= $sql . "<br>" . $e->getMessage();
    //echo $sql1 . "<br>" . $e->getMessage();
   header("location:pr_index.php?var=$congo&var2=1");
    }
//echo $congo;

$conn = null;

}





 ?>