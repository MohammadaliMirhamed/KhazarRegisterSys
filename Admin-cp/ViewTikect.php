<?php include("../User_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تیکت ها</title>


<style>
#mainpg {
	width:780px;
	height:auto;
	border: 0px #EE0000  dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
text-align:center;
margin-top:14px;
text-align:center;
}





#ekhtar {
	width:650px;
	height:auto;
	border: 2px #EE0000  dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	background-color:#EE0000;
font-family:Tahoma;
font-size:16px;
color:#EEEEEE;
text-align:center;
margin-top:14px;
}
body {
	background-image: url(../img/bg.jpg);
}


.css_btn_class {
	font-size:16px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #d83526;
	padding:9px 18px;
	text-decoration:none;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #fe1a00), color-stop(100%, #ce0100) );
	background:-moz-linear-gradient( center top, #fe1a00 5%, #ce0100 100% );
	background:-ms-linear-gradient( top, #fe1a00 5%, #ce0100 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100');
	background-color:#fe1a00;
	color:#ffffff;
	display:inline-block;
	text-shadow:1px 1px 0px #b23e35;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #f29c93;
 	-moz-box-shadow:inset 1px 1px 0px 0px #f29c93;
 	box-shadow:inset 1px 1px 0px 0px #f29c93;
}.css_btn_class:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #ce0100), color-stop(100%, #fe1a00) );
	background:-moz-linear-gradient( center top, #ce0100 5%, #fe1a00 100% );
	background:-ms-linear-gradient( top, #ce0100 5%, #fe1a00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00');
	background-color:#ce0100;
}.css_btn_class:active {
	position:relative;
	top:1px;
}
/* This css button was generated by http://html-generator.weebly.com */




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



#usertext {
width:700px;
	height:auto;
	text-align:right;
	background-color:#f4f4f4;
	
	border: 3px solid #DBDBDB;
	margin-top:30px;
	font-family:tahoma;
	font-size:13px;
	margin-left:45px;
}
#usertext:hover { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 8px #7bc1f7; 
    -moz-box-shadow: 0px 0px 8px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 8px #7bc1f7; 
} 


.usertextt {
	width:650px;
	height:auto;
	text-align:right;
	background-color:#f4f4f4;
	margin-top:10px;
	margin-bottom:20px;
	font-family:tahoma;
	font-size:13px;
	float:right;
	margin-right:30px;
	
	
}


.underline {
	width:400px;
	text-shadow:1px 2px 1px #CCCCCC;
	border-bottom: 1px dotted #ccc;
	margin: 0 10px 10px;
	margin-left:250px;
	margin-top:-10px;
	padding: 0 18px 7px 0;
	
}

</style>





<script>
function mh()
{

if(document.form1.post.value=="")
{
alert ("متن تیکت خالی است");
}
else
{
document.form1.send.type="submit" ;
t="?NUMber="+document.form1.hi.value+"&Username="+document.form1.hii.value;
document.form1.action="./viewtikect.php"+t; ;
}
}
</script>





</head>

<body>


<div id="mainpg">



<a href="./Logout.php" class="uibutton">خروج</a>
|
  <a href="./sql.php" class="uibutton">بازگشت به مدیریت سامانه</a>
|
  <a href="./Absent_persent_sheet.php" class="uibutton" >فهرست حضور غیاب</a>
 |
  <a href="./all_user_print.php" class="uibutton" >چاپ فهرست کاربران</a>
 |
  <a href="./mng_tikets.php" class="uibutton">تیکت ها فعال</a>
|
  <a href="./insert_marks.php" class="uibutton">درج و تغییر نمرات</a>
<br/>



<?php

include("../Date_cheker.php");		
			






@$tblname=$_SESSION['sqlslt'];

	
	


if(!isset($_SESSION['sqlslt']))
{
echo '<script> alert ("شما جدول ای انتخاب نکرده اید بنابراین به صفحه انتخاب منتقل می شوید");</script>';			
echo '<meta http-equiv="refresh" content="0;URL=./sql.php">';

}   


else
{





@$number=$_REQUEST['NUMber'];
@$Username=$_REQUEST['Username'];


$Username=str_replace(" ","+",$Username);





@$query="Select * from tikects where tblname='".$_SESSION['sqlslt']."' AND username='".$Username."' AND id='".$number."' " ;
			$result=mysqli_query($con,$query);
			if(!$result)
				{
					echo "not";
				}
				
			$row = mysqli_fetch_row($result);
			
			



if($row[5]==1 || $row[5]==2 || $row[5]==3 || $row[5]==4) {
echo '
<font  color="#FF0033"><h2>ارسال پاسخ شما</h2></font>
<form name="form1" method="post">
          ↓ متن تیکت ↓ <br />
		  <textarea name="post" cols="40" rows="5" class="textbox" style="width:450px;height:90px;"></textarea>
<br/>



<br/>         <br/>

<input type="button" name="send"  onclick="mh()" class="css_btn_class" value="ایجاد" /> 



<br/>';}else{echo '<br/><br/><font color="#FF0000"  size="+1" >این تیکت بسته شده است و امکان ارسال پاسخ وجود ندارد</font><br/>';}

			?>
			
			
			
			<input type="hidden" name="hi"  value="<?php echo $row[0];?>" />

						<input type="hidden" name="hii"  value="<?php echo $Username;?>" />
			
			

<?php



			
							echo DeCryption($row[4]);
		
			

if(isset($_POST['send']))
{

if($_POST['post']=='')
{echo'</br><font color="#FF0000"  size="+1" >فیلد پاسخ خالی است</font></br>';}else{


//For Creattime
$Cdate=jdate('Y/m/j');
$Ctime=jstrftime('%H:%M:%S');
$CEdate="در تاریخ  "."".$Cdate."".'  در ساعت '."".$Ctime;
//----

		

//For Close Tikect
$CloseTikect=jdate('Y-m-j',strtotime("+3 day"));
//-----
		
		
		
		

		$fulltext=
		"<div id=usertext>"
		."".
		"<h5>".$CEdate."              ".$_SESSION['UserName_Admin']."   ارسال شده توسط مدیریت   »   </h5>
		<div class=underline ></div>
		<div class=usertextt>"
		."".
		$_POST['post']."".
		"".
		"".
		"</div><br/><br/><br/><br/></div>"."".DeCryption($row[4]);



				$sql="UPDATE tikects SET text='".EnCryption($fulltext)."' , creattime='".$CEdate."',sust='3',closetikect='".$CloseTikect."' where id='".$number."' AND tblname= '".$_SESSION['sqlslt']."' AND username='".$Username."' ";

 
		$re=mysqli_query($con,$sql);
			if(!$re)
			{
			echo "Query not";
			}


echo '<script> alert ("تیکت با موفقیت ارسال شد");</script>';			
echo  "<meta http-equiv=\"refresh\" content=\"0;URL=./ViewTikect.php?NUMber=$row[0]&Username=$Username\">";

}


}
			
			
			
			


}







?>



















</div>

</center>
</form>


</body>
</html>
