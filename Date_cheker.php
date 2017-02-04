<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<?php
@include("../jdf.php");	
@include("../Config.php");
@include("./jdf.php");	
@include("./Config.php");
@$CloseTikect=jdate('Y-m-j');
$sql="UPDATE  tikects SET sust='5' where closetikect<='".$CloseTikect."' " ;
			$result=mysqli_query($con,$sql);
			if(!$result)
				{
					echo "not";
				}
//include("../Date_cheker.php");						
?>
</body>
</html>
