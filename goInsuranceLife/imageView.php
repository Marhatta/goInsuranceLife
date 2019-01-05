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
         if(isset($_GET['Rec_id'])) {
         try
          {  




            $dbhost="localhost";
            $db="u837456730_lic";
            $username="u837456730_root";
            $password="rio147";
          	$tempo=array();
          	$co=0;
            $conn = new PDO("mysql:host=$dbhost;dbname=$db", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT profile_pic,profile_type FROM user WHERE rec_id =".$_GET['Rec_id'];
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
              //echo $v;
            	$tempo[$co]=$v;
            	$co=$co+1;
              
            }
              $row['profile_type']=$tempo[1];
              $row['profile_pic']=$tempo[0];

            header("Content-type:".$row['profile_type']);
        	echo $row["profile_pic"];
          }
          catch(PDOException $e)
          {
            $congo= $sql . "<br>" . $e->getMessage();
          } 
        }
          $conn = null;

?>