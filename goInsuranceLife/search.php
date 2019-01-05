<html>
 
 <head>
  <link href="bootstrap.css" rel="stylesheet" type="text/css">
 </head>
 <div class="table-responsive">
 <table class="table table-striped table-bordered">
 
 <tr><th>Name</th><th>Payment Recieved</th><th>Payment Mode</th><th>Payment No</th><th>Policy ID</th><th>Policy Date</th><th>Tenure</th><th>Sum Assured</th><th>Premium Type</th><th>Main Incentive</th><th>Incentive</th><th>Bonus</th><th>Bond</th><th>Bond Date</th><th>Customer Bond</th><th>Customer Bond Date</th><th>Premium No</th><th>Next Premium</th><th>Next Premium Date</th><th>Policy No</th><th>Email</th><th>First Premium</th></tr>
 <?php


class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
$searchk=$_POST["searchkey"];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM master_table where name like '%".$searchk."%'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?> 


</table>
</div>
</html>