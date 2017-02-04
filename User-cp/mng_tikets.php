<?php 
include("./new_tikect_cheker.php");
include("../Date_cheker.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>مدیریت تیکت ها</title>
<style type="text/css">
<!--
body {
	background-image: url(../img/bg.jpg);
		font-family: Tahoma;

}


td,th {
	font-family: Tahoma;
	color: #000000;

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


#mainpg {
			width:800px;
				height:auto;
	border: 1px #000000 dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-image: url(../img/bg.jpg);
text-align:center;
margin-top:14px;
}


	table { 
		width: 100%; 
		border-collapse: collapse; 
		text-align:center
	}
	
	tr:nth-of-type(odd) { 
		background: #eee; 
		text-align:center;
		
	}


 td,th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align:center; 
	}
	

	 tr { 
		
	}
	tr:hover { 
background-color:#FFFF00

	}
	
	.splash {border-radius: 10px;;width:187px; height:63px; background:url(../img/read_shape.png) 0 0 no-repeat; text-align:center; font-family: 'Open Sans', sans-serif; font-weight:50; text-transform: uppercase; font-size:24px; line-height:29px; padding:14px 0px 15px 0px; text-shadow:1px 1px 1px #b92411; display:inline-block; color:#fff; letter-spacing:-1px;}
.splash:hover {background-position:0 -58px; text-decoration:none;}

-->
</style>
<center>

<a href="./Logout_user.php"><input type="submit"    class="uibutton"  value="خروج از پنل" /></a>
<a href="./User_cp.php"><input type="submit"    class="uibutton"  value="بازگشت پرو فایل" /></a>

  </center>
</head>
<center><a href="./creat_tikect.php"><input type="button" name="send"  class="splash" value="ایجاد تیکت جدید" style="margin-top:12px;" /></a></center>

<hr />

<h4 align="center">لیست تمام تیکت ها</h4>
<div id="mainpg">
<table border="1" cellpadding="4" cellspacing="0"  >
<td style="font:Tahoma ;color:#FF0000" > <b>  ورود  </b> </td>
<td style="font:Tahoma ;color:#FF0000" > <b>  وضعیت تیکت  </b> </td>
<td style="font:Tahoma ;color:#FF0000" > <b>  آخرین بروز رسانی  </b> </td>
<td style="font:Tahoma ;color:#FF0000" > <b>  مــوضـوع  </b> </td>
<td style="font:Tahoma ;color:#FF0000" > <b>  شماره تیکت  </b> </td>
<td style="font:Tahoma ;color:#FF0000" > <b>  #  </b> </td>

</div>

<?php
	// <= Add File <= Config.php + cybric.php + session_start();







										

$User=$_SESSION['UserName'];

		

$query="Select * from tikects where tblname='".$_SESSION['TabelName']."' AND username='".$User."' ORDER BY id DESC " ;
			$result=mysqli_query($con,$query);
			if(!$result)
				{
					echo "not";
				}
				
				
				
				
@$num=mysqli_num_rows($result);
$cmd=1;

for($i=0;$i<$num;$i++)

{
$row = mysqli_fetch_row($result);

echo "<tr>";
	
echo "<td align='center'>";


{echo "<a href=\"./ViewTikect.php?NUMber=$row[0]\"><img src='../img/enter2.png' class='mg' width='35' height='35' /> </a>";}

echo "</td>";
	
	


	
	
	

echo "<td align='center' >";
if($row[5]==1 || $row[5]==2)
{echo '<font color="#009933"  size="+1" >پاسخ کاربر</font><br/>';}
else if($row[5] ==3 || $row[5] ==4)
{echo '<font color="#FF0000"  size="+1" >پاسخ مدیریت</font><br/>';}
else if($row[5] ==5)
{echo '<font color="#000000"  size="+1" >بسته شده</font><br/>';}

echo "</td>";
echo "<td align='center'> <b> $row[7] </b> </td>";
echo "<td align='center'> <b> $row[3] </b> </td>";
echo "<td align='center'> <b> $row[0] </b> </td>";
echo "<td align='center'> <b> $cmd </b> </td>";



$cmd++;



echo "</tr>";



}
?>
</table>
<?php

if($num==0){echo '<font color="#FF0000"  size="+1" >تیکت ای وجود ندارد</font><br/>';}

?>
</div>
<br /><br /><br />
<center>
<font color="#FF0000"  size="+1" >توجه : در صورتی که تیکت طی 72 ساعت  (3 روز)  پاسخ داده نشود به صورت خوکار بسته خواهد شد</font><br/>
</center>
<body>
<font color="#000000"
</body>
</html>
