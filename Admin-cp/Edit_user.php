<?php include("./new_tikect_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش اطلاعات</title>
<style type="text/css">
body,td,th {
	font-family: Tahoma;
	color: #CC0000;
}
body {
	background-image: url(img/bbbg.jpg);
}



#mainpg {
	width:600px;
	height:auto;
	border: 0px #000000 dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-image:url(img/bg.jpg);
text-align:center;
margin-top:14px;
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
</head>
<body>

  <a href="./genral_set.php">تنظیــمات سامانه</a>
|
  <a href="./Admin_cp.php">پنل مــدیریت</a>
|
  <a href="./Chenge_pass.php">تغییر رمز</a>
|
  <a href="./Logout.php">خروج از مــدیریـت</a>
  <br />
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  <br />
  <br />
  <br />


<?php

$del_id =$_REQUEST['shname'];

$query="Select * from ".$_SESSION['sqlslt']." where shname ='".$del_id."' " ;
$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo "not";
	}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);


					$pass=DeCryption($row[13]);
					$shname=DeCryption($row[5]);
					$fname=DeCryption($row[0]);
					$lname=DeCryption($row[1]);
					$fathername=DeCryption($row[2]);
					$tdata=DeCryption($row[3]);
					$mahalt=DeCryption($row[4]);
					$address=DeCryption($row[6]);
					$tel=DeCryption($row[7]);
					$mobile=DeCryption($row[8]);
					$postcode=DeCryption($row[9]);
					$spayment=DeCryption($row[11]);
	       			$codetra=DeCryption($row[14]);
					$codemeli=DeCryption($row[15]);





?>


<?php

if (isset($_POST['send']))
{
include("../Config.php");

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
$pass=EnCryption($_POST['pass']);
$codemeli=EnCryption($_POST['codemeli']);


$query="UPDATE ".$_SESSION['sqlslt']." SET fname='".$fname."', lname='".$lname."' , fathername='".$fathername."' , tdata='".$tdata."' , mahalt='".$mahalt."' ,  shname='".$shname."' , address='".$address."' , tel='".$tel."' , mobile='".$mobile."', postcode='".$postcode."' , codemeli='".$codemeli."' WHERE pass='".$pass."' ";
$re=mysqli_query($con,$query);
	if(!$re)
	{
	echo "Query not";
	}
	
	
echo '<center><font color="#FF0000"  size="+2" >تغییرات با موفقیت انجام شد</font></center><br/><br/><br/> ';
echo  '<meta http-equiv="refresh" content="2;URL=./Edit_user.php?shname='.$del_id.' ">';
@mysqli_close();
}

?>
<div id="mainpg">
<center>
<form method="post" action="./Edit_user.php?shname=<?php echo $del_id;?>" name="form1">
         <p>نام => 
             <input type="text" name="fname"  value="<?php echo $fname; ?>" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" />
           <br />
           نام خانوادگی => 
           <input type="text" name="lname"  value="<?php echo $lname; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" />
           <br />
           نام پدر => 
           <input type="text" name="fathername" value="<?php echo $fathername; ?>" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" />
           <br />
           تاریخ تولد => 
           <input type="text" name="tdata" value="<?php echo $tdata; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
           محل تولد => 
           <input type="text" name="mahalt" value="<?php echo $mahalt; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
           شماره شناسنامه =>
           <input type="text" name="shname" value="<?php echo $shname; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
		   کدملی =>
           <input type="text" name="codemeli" value="<?php echo $codemeli; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
           آدرس منزل => 
           <input type="text" name="address" value="<?php echo $address; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
           تلفن منزل => 
           <input type="text" name="tel" value="<?php echo $tel; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
           تلفن همراه => 
           <input type="text" name="mobile" value="<?php echo $mobile; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
           کد پستی => 
           <input type="text" name="postcode" value="<?php echo $postcode; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <input type="hidden" name="pass"  value="<?php echo $pass; ?>"  />
           <br />
		       وضعیت پرداخت => 
           <input type="text" name="postcode" disabled="disabled" value="<?php echo $spayment; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>
           <br />
		       کد تراکنش => 
           <input type="text" name="codetra" disabled="disabled" value="<?php echo $codetra; ?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"/>

           <br />
		   
      <input type="submit" value="edit" name="send" />
	     
		 
</form>

</div>




</body>
</html>
