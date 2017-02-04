<?php include("./new_tikect_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تغییر پسورد</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	color: #000000;
}
body {
	background-image: url(../img/texture_red.jpg);
}

#mainpg {
	width:300px;
	height:120px;
	border: 1px #000000 dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-image:url(../img/bg.jpg);
text-align:center;
margin-top:20px;
}

#mainpg:hover {

	border: 2px #0000FF dotted;
	
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


a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>

</head>
<center>
  <a href="./Logout.php" class="uibutton" >خروج از مــدیریـت</a>

|
  <a href="./Chenge_pass.php" class="uibutton" >تغییر رمز</a>
|
    <a href="./genral_set.php" class="uibutton" >تنظیــمات سامانه</a>
|
  <a href="./Admin_cp.php"  class="uibutton" >پنل مــدیریت</a>



<div id="mainpg">
<?php

?>
<body>
<center>
<form method="post" action="">
<input type="password" name="passold" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" />: پسورد قدیمی<br/>
<input type="password" name="passnew" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" />: پسورد جدید<br/>
<br/>
<input type="submit" name="send" value="تعویض پسورد"   class="uibutton" />
</form>
</center>
</body>
<?php 
if(isset($_POST['send']))
{
include("../Config.php");
$query="Select * from admin where id ='1' " ;
$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo "not";
	}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);

if($row[1]==EnCryption($_POST['passold']))
{

$pas=$_POST['passnew'];
$query="UPDATE admin SET PASSWORD='".EnCryption($pas)."' WHERE id='1'";
$re=mysqli_query($con,$query);
	if(!$re)
	{
	echo "Query not";
	}
	
	
echo '<center><font color="#FF0000"  size="3" >پسورد با موفقیت تغییر کرد </font></center><br/><br/><br/> ';
echo  '<meta http-equiv="refresh" content="2;URL=./Chenge_pass.php">';
@mysqli_close();


}
else
{
echo "پسورد قدیمی را اشتباه وارد کرده اید";
}

}
?>
</div>
</html>
