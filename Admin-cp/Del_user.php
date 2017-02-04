<?php include("../User_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$del_item=$_GET["delid"];
$tbl=$_SESSION['sqlslt'];
$query="DELETE FROM '".$tbl."' WHERE id=".$del_item."";
$result=mysqli_query($con,$query);
echo mysqli_error($con);
header("location:./Admin_cp.php");  
?>

</body>
</html>
