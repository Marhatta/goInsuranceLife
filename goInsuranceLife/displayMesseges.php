<html>
<head>

<link href="bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>



 <!-------------------------------------------------------------------->

 <div class="table-responsive" style="">
 <table class="table table-striped table-bordered">
 
 <tr><th>Name</th><th>Email</th><th>Contact</th><th>Messege</th><th>Date</th><th>Option</th></tr>
 <!-------------------------------------------------------------------->

 
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
$alldata=array();
$count=0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM customer order by date desc");
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
$i=0;
$count=$count-1;
for ($x = 0; $x <= $count/7; $x++) {
$i++;
    echo "<tr><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td><a href='deleteMessege.php?id=".$alldata[$i-6]."'><i class='fa fa-trash-o' aria-hidden='true'></i></a><td></tr>";
    
    
    $i++;
}


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE customer SET readed=1 where readed=0";
    // use exec() because no results are returned
    $conn->exec($sql);

/*echo $alldata[0];//name
echo $alldata[1];//email
echo $alldata[2];//paymode*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;


?>
 
</table>
</div>



</html>