<?php include("../User_cheker.php");
include("../Date_cheker.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ایجاد تیکت</title>
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
	border: 1px #FF0000 dotted;
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




 .textbox { 
    border: 1px solid #c4c4c4; 
    height: 20px; 
    width: 150px; 
    font-size: 13px; 
	margin-top:7px;
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 4px; 
    -webkit-border-radius: 4px; 
    box-shadow: 0px 0px 8px #d9d9d9; 
    -moz-box-shadow: 0px 0px 8px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 8px #d9d9d9; 
} 
 
.textbox:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 8px #7bc1f7; 
    -moz-box-shadow: 0px 0px 8px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 8px #7bc1f7; 
} 


</style>
<center>


  
<a href="./Logout_user.php"><input type="submit"    class="uibutton"  value="خروج از پنل" /></a>
<a href="./mng_tikets.php"><input type="submit"     class="uibutton"  value="تیکت ها / جدید" /></a>
<a href="./User_cp.php"><input type="submit"    class="uibutton"  value="بازگشت پرو فایل" /></a>

  </center>
</head>
<br />
<br />

<script>
function mh()
{
if(document.form1.subject.value=="")
{
alert ("عنوان تیکت خالی است");
}
else if(document.form1.post.value=="")
{
alert ("متن تیکت خالی است");
}
else
{
document.form1.send.type="submit" ;
document.form1.action="./creat_tikect.php" ;
}
}
</script>
<br /> <br />  <br /> <br />  <br /> <br />  
<div id="mainpg">


<form name="form1" method="post" >
<input type="text" name="subject"  class="textbox" /> : عنوان تیکت
<br /> <br />          ↓ متن تیکت ↓ <br />
		  <textarea name="post" cols="40" rows="5" class="textbox" style="width:450px;height:90px;"></textarea>
<br/>




<br/><input type="button" name="send" onclick="mh()"  class="uibutton" value="ایجاد" />          <br/>
</form>
</div>

<?php
				








@$User=$_SESSION['UserName'];



if(isset($_POST['send']))
{






//For ID
$query="Select * from tikects where tblname='".$_SESSION['TabelName']."' AND username='".$User."' ORDER BY id DESC " ;
$result=mysqli_query($con,$query);
			if(!$result)
				{
					echo "not";
				}
$num=mysqli_num_rows($result);
if($num>=1)
{
$row = mysqli_fetch_row($result);
$id=$row[0];
$id++;
}
else
{
$id=1000;
}
//----









//For Creattime
$Cdate=jdate('Y/m/j');
$Ctime=jstrftime('%H:%M:%S');
$CEdate="در تاریخ  "."".$Cdate."".'  در ساعت '."".$Ctime;
//----








//For Tikect Text
@$fulltext=
"<div id=usertext>"
."".
"<h5>ارسال شده توسط کاربر » ".$CEdate."    </h5>
<div class=underline ></div>
<div class=usertextt>"
."".
$_POST['post']."".
"".
"".
"</div><br/><br/><br/><br/></div>";
//--------







//For Close Tikect
$CloseTikect=jdate('Y-m-j',strtotime("+3 day"));
//-----



//For Subject
$subject=$_POST['subject'];
//-----



$sql="INSERT INTO tikects (id, tblname, username, subject, text, sust, closetikect, creattime) VALUES ('".$id."','".$_SESSION['TabelName']."','".$User."','".$subject."','".EnCryption($fulltext)."','1','".$CloseTikect."','".$CEdate."')";

$result=mysqli_query($con,$sql);
			if(!$result)
				{
					echo "not";
				}



echo '<script> alert ("تیکت با موفقیت ارسال شد");</script>';			
echo  "<meta http-equiv=\"refresh\" content=\"0;URL=./ViewTikect.php?NUMber=$id\">";



}



?>
<body>

</body>
</html>
