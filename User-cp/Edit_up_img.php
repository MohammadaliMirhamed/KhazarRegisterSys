<?php include("../User_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>وبگو | فایل سرور برای پردازش آپلود</title>
<!-- http://webgoo.ir -->
<style type="text/css">
body{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px;
	direction:rtl;
}
.server{
	font-style:italic;
}
</style>
<?php
	
	// <= Add File <= Config.php + cybric.php + session_start();


$del_id=$_SESSION['UserName'];	
	
	
//تعیین فرمت یا اندازه مجاز و سایر پارامترها
if ($_FILES["user-file"]["type"] == "image/jpeg" || $_FILES["user-file"]["type"] == "image/png" && $_FILES["user-file"]["size"] < 1000) {
	//بررسی سایر خطاهای سرور
	if ($_FILES["user-file"]["error"] > 0){
		echo "<div class=\"server\">خطا: " . $_FILES["user-file"]["error"] . "</div><br />";
		$check_result = 0;
		}
	//بررسی وجود یا عدم وجود فایل با نام مشابه در سرور	
	else{
		if (file_exists("../user-upload/" . $_FILES["user-file"]["name"])){
			echo "<div class=\"server\">این فایل در حال حاضر وجود دارد! <br /><br />".$_FILES["user-file"]["name"]. "</div><br />";
			$check_result = 0;		
			}
		//انتقال و ذخیره فایل در سرور	
		else{		  
		






$query="Select * from ".$_SESSION['TabelName']." WHERE pass='".$del_id."' ";

			
			$re=mysqli_query($con,$query);
			$row = mysqli_fetch_row($re);
			if(!$re)
				{
					echo "Query not";
				}	


unlink(DeCryption($row[12]));









   

$newName=rand(100,1000000).time();


$name=$_FILES["user-file"]["name"];
$mainname=$newName."".$name;

	move_uploaded_file($_FILES["user-file"]["tmp_name"],"../user-upload/" . $mainname);

	$url=EnCryption("../user-upload/"."".$mainname);


			$query="UPDATE ".$_SESSION['TabelName']." SET pic='".$url."' WHERE pass='".$del_id."' ";
			
			$re=mysqli_query($con,$query);
			if(!$re)
				{
					echo "Query not";
				}	
						$check_result = 1;		
						
						

		  }
	}
}
//خطای تعیین فرمت یا اندازه مجاز و سایر پارامترها
else{
	if($_FILES["user-file"]["size"] > 1000){
		echo "<div class=\"server\">حجم فایل خیلی زیاد است!</div>";
	}
	else{
		echo "<div class=\"server\">فرمت فایل مجاز نیست!</div>";
	}
	$check_result = 0;
}






?>
<script type="text/javascript">
window.top.window.upload_end(<?php echo $check_result; ?>);
</script>

</head>
</html>