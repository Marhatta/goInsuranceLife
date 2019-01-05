<?php 
	session_start();
	//$result =mysql_query($query);s
	$username1="";
	$password1="";
	$errors = array();
	if(isset($_POST['login']))
	{
		$username1=$_POST["userid"];
		$password1=$_POST["pwd"];
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

		if(empty($username1))
		{
			$errors[]="Username is required";
		}
		if(empty($password1))
		{
			$errors[]="Password is required";
		}

		if(count($errors)==0)
		{
			$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
			$counte=0;

			try {
    		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    		// set the PDO error mode to exception
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$stmt = $conn->prepare("SELECT * FROM user WHERE user_id = '$username1' AND password = '$password1'");
    		$stmt->execute();

    		// set the resulting array to associative
    		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    			foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        		//echo $v;
        			$usrrec[$counte]=$v;
        			$counte=$counte+1;
    			}
    		}
    		catch(PDOException $e) {
    		$congo= "Error " . $e->getMessage();
			}
			$conn = null;
			
			if(!empty($usrrec[0])) 
			{
				$_SESSION['username']=$username1;
				header('location:adminpage.php');
			}
			else
			{
				$errors[]="Username/Password is incorrect";
			}
			
		
		}
	}
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location:login.php');
	}
	
?>