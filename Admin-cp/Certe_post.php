<?php include("./new_tikect_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ایجاد اطلاعیه</title>
<style type="text/css">
<!--
body {
	background-image: url(../img/bg.jpg);
}


body,td,th {
	font-family: Tahoma;
	color: #FF0000;
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
			width:635px;
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
margin-top:50px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}


-->
</style>


</head>

<body>
<?php

//تبدیل تاریخ میلادی به شمسی
$timezone = 0;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
$now = date("Y-m-d", time()+$timezone);
$time = date("H:i:s", time()+$timezone);
list($year, $month, $day) = explode('-', $now);
list($hour, $minute, $second) = explode(':', $time);
$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
include ('../jdf.php');
$jalali_date = jdate("زمان :H:i  |  تاریخ: Y/m/d",$timestamp);
//تبدیل تاریخ میلادی به شمسی


if(isset($_POST['send']))
{


//تکمیل فیلد ها به صورت منزم
include('../config.php');
$query="SELECT * FROM notic ORDER BY id DESC limit 1";
$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);

if($num)
{
$id=$row[0];
$id=$id+1;
}
else
{
$id=1000;
}

$post=$_POST['elm1'];
$titel=$_POST['titel'];
$datime=$jalali_date;
$wrdd=$_SESSION['UserName_Admin'];
//تکمیل فیلد ها به صورت منزم













$query1="Select * from notic where titel ='".$titel."' ";
$result1=mysqli_query($con,$query1);
if(!$result1)
{
echo "Query not";
}
$num1=mysqli_num_rows($result1);
$row1 = mysqli_fetch_row($result1);
if($num1==1)
{
echo 'اطلاعیه ای با این عنوان قبلاً در بانک اطلاعات وجود داشته است لطفاً عنوان را  تصحیح کنید';
}
else
{


$sql="INSERT INTO notic (id, post, titel, datime, wrdd) VALUES ('".$id."','".EnCryption($post)."','".$titel."','".$datime."','".$wrdd."')";
$re=mysqli_query($con,$sql);
	if(!$re)
	{
	echo "Query not";
	}



echo '<script> alert ("اطلاعیه با موفقیت ارسال شد ");</script>';			
echo  "<meta http-equiv=\"refresh\" content=\"0;URL=./Post_mng.php\">";





}
}
?>
<div id="mainpg">

<form id="form1" name="form1" method="post" action="./Certe_post.php" style="text-align:center">
  <label>
  <input name="titel" type="text" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" size="50" />: عنوان اطلاعیه
  </label>


<script type="text/javascript" src="../Js//jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

  <p>



    <label>
	<br />
		<textarea id="elm1" name="elm1" rows="15" cols="80" style="border-radius: 20px;text-align:center;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"></textarea>


    </label>
  </p>
  <input type="submit" name="send" value="ایجاد مطلب" class="uibutton" />
  <a href="./Post_mng.php">  <input type="button" name="یییی"  class="uibutton"  value="بازگشت"/></a>

</form>





</div>

</body>
</html>
