<?php include("./new_tikect_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>مدیریت اطلاعیه ها</title>
<style type="text/css">
<!--
body {
	background-image: url(../img/bg.jpg);
}


body,td,th {
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
			width:490px;
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
		width: 101%; 
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
  <a href="./Logout.php" class="uibutton">خروج از مــدیریـت</a>

|
  <a href="./Chenge_pass.php" class="uibutton">تغییر رمز</a>
|
  <a href="./genral_set.php" class="uibutton">تنظیــمات سامانه</a>
 |
  <a href="./Post_mng.php" class="uibutton">مدیریت اطلاعیه ها</a>
|
  <a href="./Admin_cp.php" class="uibutton">پنل مــدیریت</a>
  </center>
</head>
<center><a href="./Certe_post.php"><input type="button" name="send"  class="splash" value="ایجاد اطلاعیه جدید" style="margin-top:12px;" /></a></center>

<hr />

<h4 align="center">تمام اطلاعیه های سایت</h4>
<div id="mainpg">
<table border="1" cellpadding="4" cellspacing="0"  >
<td style="font:Tahoma ;color:#FF0000"> <b>حذف</b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b>تغییر</b> </td>
<td  style="font:Tahoma ;color:#FF0000"> <b>تاریخ ایجاد</b> </td>

<td style="font:Tahoma ;color:#FF0000"> <b>شماره پست</b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b>عنوان پست</b> </td>
<?php

@$sql="SELECT * FROM notic";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo "Query not";
}
@$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++)
{
@$row = mysqli_fetch_row($result);

echo '<tr>';
echo "<td align=center  class=listbodyp> <b>  <a href=\"./Post_del.php?id=".$row['0']."\"><img src='../img/delete.gif'/></a>  </b> </td>";       
echo "<td align=center class=listbodyp> <b>  <a href=\"./Post_edit.php?id=".$row['0']."\"><img src='../img/edit.gif'/></a>  </b> </td>"; 
echo "<td align=center  class=listbodyp> <b> $row[3] </b> </td>";

echo "<td align=center  class=listbodyp> <b> $row[0] </b> </td>";
echo "<td align=center  class=listbodyp> <b> $row[2] </b> </td>";

echo '</tr>';
}



?>
</table>
</div>
<body>

</body>
</html>
