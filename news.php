<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-image: url(img/texture_red.jpg);
}


#mainpg {
	width:600px;
	height:auto;
	margin:30px auto;
	padding:5px;
	border: 0px #ffffff dotted;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
margin-top:5px;
}
#titel {
	width:590px;
	height:30px;
	margin:30px auto;
	padding:5px;
	border: 2px #CC0000 dotted;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
margin-top:0px;
background-color:#CCCCCC;
}
#post {
	width:590px;
	height:auto;
	margin:30px auto;
	padding:5px;
	border: 2px #CC0000 dotted;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
margin-top:-26px;
background-image:url(img/bg.jpg);
text-align:right;
}

#ezaf {
	width:590px;
	height:30px;
	margin:30px auto;
	padding:5px;
	border: 2px #CC0000 dotted;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
margin-top:-26px;
background-color:#CCCCCC;
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
</style>
<?php
include("./pay/cybric.php");

@$id=$_REQUEST['id'];

include("./Config.php");
$query="Select * from notic where id ='".$id."' ";
$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);
if($num)
{
echo '<title>'.$row[2].'</title>';
}
else
{
echo '<title>خبر یافت نشده</title>';
}
@mysqli_close();

?>

</head>

<body>
<center>
|
  <a href="./index.php" class="uibutton">صفحه اصلی</a>
  </center>
<div id="mainpg">
<br />
<div id="titel">
<?php
@$id=$_REQUEST['id'];

include("./Config.php");
$query="Select * from notic where id ='".$id."' ";
$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);
if($num)
{
echo '<center><font color="#FF0000"  size="+2"  > '.$row[2].' </font></center>';
}
else
{
}
@mysqli_close();

?>
</div>

<div id="post">
<?php
@$id=$_REQUEST['id'];

include("./Config.php");
$query="Select * from notic where id ='".$id."' ";
$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);
if($num)
{
echo DeCryption($row[1]);
}
else
{
echo '<center><h3>خبر یافت نشده</h3></center>';
}
@mysqli_close();

?>
</div>


<div id="ezaf">
<?php
@$id=$_REQUEST['id'];

include("./Config.php");
$query="Select * from notic where id ='".$id."' ";
$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);
if($num)
{
echo '               ایجاد شده در : <font color="#FF0000"   > '.$row[3].' </font>         <font color="#FF0000"   > '.$row[4].' </font>: نوشته شده توسط ';
}
else
{
}
@mysqli_close();

?>
</div>
</div>
</body>
</html>
