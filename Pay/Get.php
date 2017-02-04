<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>وضعیت ثبت نام</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	color: #CC0000;
}
body {
}

#mainpg {
	width:410px;
	height:350px;
	border: 2px #000000 dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-image:url(../img/bg.jpg);
text-align:center;
margin-top:150px;
}


.uibutton { 
    position: relative; 
    z-index: 1;
    overflow: visible; 
    display: inline-block; 
    padding: 0.3em 0.6em 0.375em; 
    border: 1px solid #999; 
    border-bottom-color: #888;
    margin: 0;
    text-decoration: none; 
    text-align: center;
    font: bold 11px/normal 'lucida grande', tahoma, verdana, arial, sans-serif; 
    white-space: nowrap; 
    cursor: pointer; 
    /* outline: none; */
    color: #333; 
    background-color: #eee;
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f6f6), to(#e4e4e3));
    background-image: -moz-linear-gradient(#f5f6f6, #e4e4e3);
    background-image: -o-linear-gradient(#f5f6f6, #e4e4e3);
    background-image: linear-gradient(#f5f6f6, #e4e4e3);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#f5f6f6', EndColorStr='#e4e4e3'); /* for IE 6 - 9 */
    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #fff;
    -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #fff;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #fff;
    /* IE hacks */
    zoom: 1; 
    *display: inline; 
}

.uibutton:hover,
.uibutton:focus,
.uibutton:active {
    border-color: #777 #777 #666;
}

.uibutton:active {
    border-color: #aaa;
    background: #ddd;
    filter: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}

/* overrides extra padding on button elements in Firefox */
.uibutton::-moz-focus-inner {
    padding: 0;
    border: 0;
}


</style></head>


<body>

<script>
 function printPage()
 {
        window.print();
 }   
    </script>
	<div id="mainpg">
<?php
/*

include_once("./Sender.php");
$url = 'http://payline.ir/payment/gateway-result-second';
$api = 'a0d4d-306e8-a8526-f8d61-fa1dd3ba63c7feff5980db53e0ce';
@$trans_id = $_POST['trans_id'];
$id_get = @$_POST['id_get'];
$result = get($url,$api,$trans_id,$id_get);

*/

$result=1;
if($result==1)
{
include("../Config.php");
include("./cybric.php");

session_start();






$fname=EnCryption($_POST['fname']);
$lname=EnCryption($_POST['lname']);
$fathername=EnCryption($_POST['fathername']);
$tdata=EnCryption($_POST['tdata']);
$mahalt=EnCryption($_POST['mahalt']);
$shname=EnCryption($_POST['shname']);
$address=EnCryption($_POST['address']);
$tel=EnCryption($_POST['tel']);
$mobile=EnCryption($_POST['mobile']);
$postcode=EnCryption($_POST['postcode']);
$dtime=$_POST['dtime'];
$email=$_POST['email'];
$hadfyou=EnCryption($_POST['hadfyou']);
$stutpayment="پرداخت موفق";
$codemeli=EnCryption($_POST['codemeli']);
$temp=DeCryption($codemeli);
@$pass=EnCryption($temp*2);
$codetra=EnCryption(rand(10000000, 99999999));
$tblname=$_POST['nameirani'];



/*
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$fathername=$_SESSION['fathername'];
$tdata=$_SESSION['tdata'];
$mahalt=$_SESSION['mahalt'];
$shname=$_SESSION['shname'];
$address=$_SESSION['address'];
$tel=$_SESSION['tel'];
$mobile=$_SESSION['mobile'];
$postcode=$_SESSION['postcode'];
$hadfyou=$_SESSION['hadfyou'];
$stutpayment="پرداخت موفق";
$codemeli=$_SESSION['codemeli'];
$dtime=$_SESSION['dtime'];
$email=$_SESSION['email'];
$temp=DeCryption($codemeli);
@$pass=EnCryption($temp*2);
@$codetra=$_POST['trans_id'];
$tblname=$_SESSION['nameirani'];
*/

$traid=DeCryption(rand(10000000, 99999999));


$query="INSERT INTO ".$tblname." (fname, lname, fathername, tdata, mahalt, shname, address, tel, mobile, postcode, hadfyou, stutpayment,pic, pass, codetra, codemeli, crite, email,mark,txtticket,newticket) VALUES ('".$fname."','".$lname."','".$fathername."','".$tdata."','".$mahalt."','".$shname."','".$address."','".$tel."','".$mobile."','".$postcode."','".$hadfyou."','".$stutpayment."','','".$pass."','".$codetra."','".$codemeli."','".$dtime."','".$email."','','','')";
$re=mysqli_query($con,$query);
	if(!$re)
	{
	echo "Query not";
	echo mysqli_error($con);
	}


echo "<center>";
echo "<h3>";
echo "هیئت انجمن های ورزشی کلانشهر رشت";
echo "<br/>----------------------------------------------------------------- ";
echo    DeCryption($codetra);
echo "  شماره تراکنش ";
echo "<br/>----------------------------------------------------------------- ";
echo "<br/>پرداخت هزینه شما با موفقیت انجام شد<br/>";
echo "کد رهیگری :";
echo DeCryption($pass);
echo " <br/>رمز عبور شما : کد ملی شما  " ;
echo "<br/>----------------------------------------------------------------- ";
echo "<br/>**اطلاعات شما با موفقیت در سایت ثبت شد**";
echo "<br/>برای اطلاع از زمان وتاریخ و مکان آموزش و زمان چاپ کارت در صفحه اصلی سایت در قسمت اطلاعیه مشاهده فرمایید";
echo "<br/>----------------------------------------------------------------- ";
echo 'برای ویرایش مجدد اطلاعات می توانید در صفحه اصلی از قسمت بخش ورود کاربران اقدام فرمایید';
echo "</h3></center>";
echo '<a href="../index.php"><input type="submit"   name="send"  class="uibutton"  value="صفحه اصلی" /></a>';
echo '&nbsp;&nbsp;<input type="button" onclick="printPage()"   name="send"  class="uibutton"  value="چاپ" />';




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
unset($_SESSION['postcode']);
unset($_SESSION['hadfyou']);
unset($_SESSION['h']);
unset($_SESSION['codemeli']);
unset($_SESSION['dtime']);
unset($_SESSION['email']);
unset($_SESSION['nameirani']);*/

session_destroy();

@mysqli_close();
}

else
{
echo "(حالا به صفحه اصلی باز خواهید گشت)پرداخت ناموفق بوده است";
echo  '<meta http-equiv="refresh" content="2;URL=../index.php">';
}


echo '</div>';


?>


</body>
</html>