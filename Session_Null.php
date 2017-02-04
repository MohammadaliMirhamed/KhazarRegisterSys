<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
session_start();
unset($_SESSION['UserName']);
unset($_SESSION['PassWord']);
unset($_SESSION['TableName']);
unset($_SESSION['Kind_User']);
/*
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['fathername']);
unset($_SESSION['tdata']);
unset($_SESSION['mahalt']);
unset($_SESSION['shname']);
unset($_SESSION['address']);
unset($_SESSION['tel']);
unset($_SESSION['mobile']);
unset($_SESSION['hadfyou']);
unset($_SESSION['postcode']);
unset($_SESSION['pass']);
unset($_SESSION['codetra']);
unset($_SESSION['stutpayment']);
unset($_SESSION['codemeli']);
unset($_SESSION['tblnames']);
*/
session_destroy();
header("location:./index.php");
?>
</body>
</html>
