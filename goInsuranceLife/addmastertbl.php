<?php
if(!empty($_POST["subm"])){
$servername = "localhost";
$username = "u837456730_root";
$password = "rio147";
$dbname = "u837456730_lic";
//////////////////


$nam=$_POST["nam_"];//*
$payment=$_POST["payment"];//*
$paymentmode=$_POST["paymentmode_"];//*
$payno=$_POST["paymentno_"];//*
$policyid=$_POST["policyid_"];//*
$policydate=$_POST["policydate_"];//*
$tenu=$_POST["tenur"];//*
$firstprim=$_POST["firstprim_"];//*
$sumassu=$_POST["sumassur"];//*
$primtyp=$_POST['primtype'];//*
$mincentv=$firstprim*0.35;//*
$incentv=$firstprim*0.25;//*
$bonus=$firstprim*0.1;//*
$bon=$_POST["bond"];//*
$bonddate=$_POST["bonddate_"];//*
$custbon=$_POST["custbond"];//*
$custbonddt=$_POST["custbonddt_"];//*
$primno=$_POST["primno"];//*
$nextprim=$_POST["nxtprim"];//*
//$nextprimdt=$_POST["nxtprimdt"];//*
$policyno=$_POST["policyno_"];//*
$eml=$_POST["email_"];//*




$iodt1=$_POST['policydate_'];
$ipdate=strtotime($_POST['policydate_']);
	if($_POST['primtype']=='m')
	{
		$conv=30*86400;
		$opd=$ipdate+$conv;
		$nextprimdt=date( 'Y-m-d', $opd);	
	}

	if($_POST['primtype']=='y')
	{
		$conv=364*86400;
		$opd=$ipdate+$conv;
		$nextprimdt=date( 'Y-m-d', $opd);	
	
	}
	if($_POST['primtype']=='h')
	{
		$conv=182*86400;
		$opd=$ipdate+$conv;
		$nextprimdt=date( 'Y-m-d', $opd);	
	
	}
	if($_POST['primtype']=='q')
	{
		$conv=91*86400;
		$opd=$ipdate+$conv;
		$nextprimdt=date( 'Y-m-d', $opd);	
	
	}
	



/*
echo $nam;
echo $payment;
echo $paymentmode;
echo $payno;
echo $policyid;
echo $policydate;
echo $tenu;
echo $firstprim;
echo $sumassu;
echo $primtyp;
echo $mincentv;//*
echo $incentv;//*
echo $bonus;//*
echo $bon;//*
echo $bonddate;//*
echo $custbon;//*
echo $custbonddt;//*
echo $primno;//*
echo $nextprim;//*
echo $nextprimdt;//*
echo $policyno;//*
echo $eml;//*
*/

//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO master_table (name,payment_recived,payment_mode,payment_no,policy_id,policy_date,tenure,sum_assured,premium_type,main_incentive,incentive,bonus,bond,bond_date,customer_bond,customer_bond_date,premium_no,next_premium,next_premium_date,policy_no,email,first_premium)
    VALUES ('$nam','$payment','$paymentmode','$payno','$policyid','$policydate',$tenu,$sumassu,'$primtyp',$mincentv,$incentv,$bonus,'$bon','$bonddate','$custbon','$custbonddt',$primno,$nextprim,'$nextprimdt','$policyno','$eml',$firstprim);
    CREATE TABLE ".$policyno."p (premium_no_ int(4) PRIMARY KEY,premium_ int(20),premium_date_ date); 
    INSERT INTO ".$policyno."p VALUES (1,$firstprim,'$policydate');
    INSERT INTO ".$policyno."p VALUES ($primno,$nextprim,'$nextprimdt');
    INSERT INTO usrlogin VALUES ('$policyno','$eml','$policyno$policyid$tenu');
    	    
    ";
    
   
    // use exec() because no results are returned

 
    $conn->exec($sql);

// the message
$msg = "Hello $nam\nusername:$eml\npassword:$policyno$policyid$tenu please visit http://www.goinsurancelife.com";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("$eml","Confidential",$msg);


	$congo="Record Inserted Successfully";
    header("location:adminindexakmal.php?var=$congo&var2=1");
    }
catch(PDOException $e)
    {
    $congo= $sql . "<br>" . $e->getMessage();

    header("location:adminindexakmal.php?var=$congo&var2=1");


    //echo $sql1 . "<br>" . $e->getMessage();
    }

$conn = null;

}





 ?>