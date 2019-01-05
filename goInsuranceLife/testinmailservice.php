<?php
// the message
$msg = "Hello...\nYou Got Post In Codebazaar As CEO";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$eml="ziyadakmal.it@mmcoe.edu.in";
// send email
mail("$eml","CodeBazaar.in",$msg);

echo "done";

?>