<?php include("./new_tikect_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ویرایش اطلاعات</title>
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
			width:685px;
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

</head>
<body>


<script type="text/javascript" src="../Js/jscripts/tiny_mce/tiny_mce.js"></script>
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

<?php


$del_id =$_REQUEST['id'];

$query="Select * from notic where id ='".$del_id."' " ;
$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo "not";
	}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);


					$post=$row[1];
					$titel=$row[2];
			



?>


<?php

if (isset($_POST['send']))
{
include("../Config.php");

@$post=$_POST['elm1'];
@$titel=$_POST['titel'];


$query="UPDATE notic SET post='".EnCryption($post)."' , titel='".$titel."'  WHERE id='".$del_id."' ";
$re=mysqli_query($con,$query);
	if(!$re)
	{
	echo "Query not";
	}
	
	
	echo '<script> alert ("اطلاعیه با موفقیت ویرایش شد ");</script>';			
echo  "<meta http-equiv=\"refresh\" content=\"0;URL=./Post_mng.php\">";

	
	
@mysqli_close();
}

?>



<div id="mainpg">

<form id="form1" name="form1" method="post" action="./Post_edit.php?id=<?php echo $del_id;?>" style="text-align:center">
  <label>
  <input name="titel" type="text" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" size="50"  value="<?php echo $row[2];?>" />: عنوان اطلاعیه
  </label>
  <p>
    <label>
	<br />
    <textarea id="elm1" name="elm1" rows="15" cols="80" style="border-radius: 20px;text-align:center;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"><?php echo DeCryption($row[1]);?></textarea>
    </label>
  </p>
  <input type="submit" name="send" value="تغییرات اعمال شود" class="uibutton" />
  <a href="./Post_mng.php">  <input type="button" name="یییی"  class="uibutton"  value="بازگشت"/></a>

</form>

</div>


</div>




</body>
</html>
