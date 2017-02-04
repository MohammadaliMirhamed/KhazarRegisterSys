<?php
include("../User_cheker.php");
$del_id =$_REQUEST['id'];
$query="DELETE FROM notic WHERE id='".$del_id."'" ;
$result=mysqli_query($con,$query);
header("location:./Post_mng.php");  
?>