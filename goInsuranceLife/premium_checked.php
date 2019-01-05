<?php
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
/*
$servername = "localhost";
$username = "root";
$password = "rio147";
$dbname = "lic";
*/
$to_be_mail=array();
$counte=0;


$tod=date('Y-m-d');
$dt = strtotime($tod);
$fdt=86400*2;
$fdt2=$dt+$fdt;




$d_ate=date('Y-m-d',$fdt2);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT name,email FROM master_table where next_premium_date='".$d_ate."'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $to_be_mail[$counte]=$v;
        $counte=$counte+1;
    }
    $counte=0;
    
    foreach ($to_be_mail as $value) {
    
    $msg = "You Have To Pay Your Premium on ".$d_ate."\n Only two days are left from now please remember\nHave a nice Day :-)\nVinod Bhat.";
    $msgadmin = "A customer Has to pay his Premium on ".$d_ate." i.e. two days from today and His Name is ".$to_be_mail[$counte]." You can go search him\nHave a nice Day :-).";
    
    $msg = wordwrap($msg,70);
    $msgadmin = wordwrap($msgadmin,70);
    $counte=$counte+1;
    
    mail("$to_be_mail[$counte]","Premium Remainder",$msg);
    mail("vinod.bhat87@gmail.com","Premium Remainder",$msgadmin);
    $counte=$counte+1;
    
    
    
}
    
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>