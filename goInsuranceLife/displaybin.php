<html>
 
 <head>
  <link href="bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
 <div class="table-responsive">
 <table class="table table-striped table-bordered">
 
 <tr><th>Name</th><th>Payment Recieved</th><th>Payment Mode</th><th>Payment No</th><th>Policy ID</th><th>Policy Date</th><th>Tenure</th><th>Sum Assured</th><th>Premium Type</th><th>Main Incentive</th><th>Incentive</th><th>Bonus</th><th>Bond</th><th>Bond Date</th><th>Customer Bond</th><th>Customer Bond Date</th><th>Premium No</th><th>Next Premium</th><th>Next Premium Date</th><th>Policy No</th><th>Email</th><th>First Premium</th><th>Add To Master Table</th><th>Permanantly Delete</th></tr>
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
    $stmt = $conn->prepare("SELECT * FROM bin order by policy_date desc");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //echo $v;
        $alldata[$count]=$v;
        $count=$count+1;
    }
    
/*
echo $alldata[0];//
echo $alldata[1];//
echo $alldata[2];//
echo $alldata[3];//
echo $alldata[4];//
echo $alldata[5];//
echo $alldata[6];//
echo $alldata[7];//
echo $alldata[8];//
echo $alldata[9];//
echo $alldata[10];//
echo $alldata[11];//
echo $alldata[12];//
echo $alldata[13];//
echo $alldata[14];//
echo $alldata[15];//
echo $alldata[16];//
echo $alldata[17];//
echo $alldata[18];//
echo $alldata[19];//policy_no
echo $alldata[20];//
echo $alldata[21];//


*/

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
$i=0;
$count=$count-1;
for ($x = 0; $x <= $count/22; $x++) {
    echo "<tr><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td>".$alldata[$i++]."</td><td><a href='bintomasteradd.php?id=".$alldata[$i-3]."'><i class='fa fa-file-archive-o' aria-hidden='true'></i></a><td><td><a href='deletefrombin.php?id=".$alldata[$i-3]."'><i class='fa-trash-o' aria-hidden='true'></i></a><td></tr>";
}



?> 


</table>
</div>
</html>