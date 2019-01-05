<?php

 if(!empty($_POST["submup"])){
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
$nextprimdt=$_POST["nxtprimdt"];//*
$policyno=$_POST["policyno_"];//*
$eml=$_POST["email_"];//*
$updaterk=$_POST["updater"];

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
echo $updaterk;


*/
//////////////

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " UPDATE master_table SET name='$nam', payment_recived='$payment', payment_mode='$paymentmode', payment_no='$payno', policy_id='$policyid', policy_date='$policydate', tenure=$tenu, sum_assured=$sumassu, premium_type='$primtyp', main_incentive=$mincentv, incentive=$incentv, bonus=$bonus, bond='$bon', bond_date='$bonddate', customer_bond='$custbon', customer_bond_date='$custbonddt', premium_no=$primno, next_premium=$nextprim, next_premium_date='$nextprimdt', policy_no='$policyno', email='$eml',first_premium=$firstprim where policy_no='$updaterk';UPDATE usrlogin SET email='$eml' WHERE policy_no='$updaterk' ; ";
    // use exec() because no results are returned
    $conn->exec($sql);
    $congo= "Record Updated Successfully";
    header("location:adminindexakmal.php?var=$congo&var2=1");
    }
catch(PDOException $e)
    {
    $congo = $sql . "<br>" . $e->getMessage();
    header("location:http://localhost/admin-login/public_html/adminindexakmal.php?var=$congo&var2=1");
    }

$conn = null;

}





 ?>