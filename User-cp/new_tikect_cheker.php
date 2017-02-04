<?php include("../User_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	

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


.ekhtar {
	width:330px;
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


</style>
<body>
<form  method="POST"  name="form10051020" >
<?php

	// <= Add File <= Config.php + cybric.php + session_start();

$User=$_SESSION['UserName'];


$query="Select * from tikects where sust='3' AND tblname='".$_SESSION['TabelName']."' AND username='".$User."' " ;
			$result=mysqli_query($con,$query);
			if(!$result)
				{
					echo "not";
				}
				
				@$num=mysqli_num_rows($result);
				$row = mysqli_fetch_row($result);

				if($num==1)
				
				{
						echo "<div class='ekhtar'>";
	echo "<input type=\"submit\"   name=\"viweticket\"  class=\"uibutton\"  value=\"مشاهده\"  />";

			echo "   تیکت جدید دریافت کردید    ";		

		echo "</div>";
		
		
		
		
		if(isset($_POST['viweticket']))
	{
@$number=$row[0];
$sql="UPDATE tikects SET sust='4' where id='".$number."' AND tblname= '".$_SESSION['TabelName']."' AND username='".$User."' ";

 
		$re=mysqli_query($con,$sql);
			if(!$re)
			{
			echo "Query not";
			}


			header("location:./ViewTikect.php?NUMber=$row[0]");    

			 

	}
		
		

}
else if($num>1)
{

echo "<div class='ekhtar'>";
	echo "<input type=\"submit\"   name=\"viweticket\"  class=\"uibutton\"  value=\"مدیریت تیکت ها\"  />";

			echo "   شما $num تیکت جدید دریافت کردید    ";		

		echo "</div>";
		
if(isset($_POST['viweticket']))
	{
	@$number=$row[0];
$sql="UPDATE tikects SET sust='4' where  tblname= '".$_SESSION['TabelName']."' AND username='".$User."' ";

 
		$re=mysqli_query($con,$sql);
			if(!$re)
			{
			echo "Query not";
			}


	
			header("location:./mng_tikets.php"); }}
?>
</form>
</body>
</html>
