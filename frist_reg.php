<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>توضیحات <?php if(isset($_REQUEST['name'])){echo $_REQUEST['name'];}else{echo "موجود نیست";}?></title>
<style>

#mainpg {
	width:600px;
	height:auto;
	margin:30px auto;
	padding:5px;
		border: 2px #EE0000 dotted;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
margin-top:150px;
	background-image: url(img/bg.jpg);
	font-family: Tahoma;
	color: #CC0000;
	text-align:right;
	
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




body {
	background-image: url(img/bbbg.jpg);
}
</style>
</head>


<body>
<div id="mainpg">

<?PHP



session_start();


//unset($_SESSION['reguser']);


if(isset($_REQUEST['name']))
{
include("./Config.php");
@$name=$_REQUEST['name'];
$sql="Select * from nametbl where faname ='".$name."' ";
$reslt=mysqli_query($con,$sql);
if(!$reslt){echo "not";}
$num=mysqli_num_rows($reslt);
$row = mysqli_fetch_row($reslt);

if($num)
{
echo $row[3];

$_SESSION['fff']=$row[0];



}
}
else
{
echo "موجود نیست";
}


if(isset($_POST['send']))
{
$url= $_SESSION['fff'];
$_SESSION['reguser']=11;

header("location:./Reg_user.php?name=".$url."");

unset($_SESSION['fff']);


}


?>


<br/><br/><br/><br/><br/>
<form action="frist_reg.php" name="form1" method="post">
<center><input type="submit" name="send" class="uibutton" value="رفتن به مرحله بعد ثبت نام" /></center>
</form>
</div>















</body>

</html>
