<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>send</title>
</head>

<body>
<?php
session_start();

if ($_SESSION['fname']=="" || $_SESSION['lname']=="" || $_SESSION['fathername']==""  || $_SESSION['tdata']==""    
|| $_SESSION['mahalt']==""  || $_SESSION['shname']==""  || $_SESSION['address']==""  || $_SESSION['tel']==""
|| $_SESSION['mobile']==""  || $_SESSION['postcode']=="" || $_SESSION['codemeli']=="")
{
header("location:../index.php");     
}

else
{
include_once("./Sender.php");
$url = 'http://payline.ir/payment/gateway-send';
$api = 'ApiPayment';
$amount = 1000;
$redirect = './Get.php';
$result = send($url,$api,$amount,$redirect);
if($result > 0 && is_numeric($result)){
$go = "http://payline.ir/payment/gateway-$result";
header("Location:$go");
}






}


?>

</body>
</html>
