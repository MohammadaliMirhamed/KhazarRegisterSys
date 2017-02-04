<?php 
include("../User_cheker.php");

if(!isset($_SESSION['print']))
	{header("location:../index.php");}
else {
	
		$del_id=$_SESSION['UserName'];

					
		$query="Select * from ".$_SESSION['TabelName']." where pass ='".$del_id."' " ;
		$result=mysqli_query($con,$query);
			if(!$result)
				{
					echo "not";
				}
			$row = mysqli_fetch_row($result);


					$pass=DeCryption($row[13]);
					$shname=DeCryption($row[5]);
					$fname=DeCryption($row[0]);
					$lname=DeCryption($row[1]);
					$fathername=DeCryption($row[2]);
					$tdata=DeCryption($row[3]);
					$mahalt=DeCryption($row[4]);
					$address=DeCryption($row[6]);
					$tel=DeCryption($row[7]);
					$mobile=DeCryption($row[8]);
					$pic=DeCryption($row[12]);
					$codemeli=DeCryption($row[15]);
					
		
		
		$query2="Select * from genral where id=1" ;
		$result2=mysqli_query($con,$query2);
			if(!$result2)
				{
					echo "not";
				}
			$row2 = mysqli_fetch_row($result2);
			
					$address=($row2[6]);
					$time=($row2[4]);
					$date=($row2[5]);
					
					
	
	}
 
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>
.table2 {
    border: 1px solid #000;
    text-align: right;
    margin-left: auto;
    margin-right: auto;
    width: 850px;
    direction: rtl;
    padding: 10px;
}
.td_head {
	font-family:Tahoma ;
	font-size:12px;
	color:#000 ;
	font-weight:bold ;
	height:35px;
	vertical-align:middle;
	padding-right:10px;
	background-color:#f1f1f1 ;
    text-align: right;
}
.lable2 {
	    padding-right: 10px;
    height: 30px;
    vertical-align: middle;
    font-family: Tahoma;
    font-size: 12px;
    border: 2px;
    border-style: groove;
    text-align: right;
    color: #000;
}
.lable22 {
	padding-right:10px;
	height:30px;
	vertical-align:middle;
	font-family:Tahoma ;
	font-size:12px;
    text-align: right;
    color: #000 ;
    font-weight: bold;;
}
.lable33 {
	padding-right:3px;
	height:30px;
	vertical-align:middle;
	font-family:Tahoma ;
	font-size:12px;
	text-align:center;
    width: 50%;
    color: #000 ;
}
.imgPic{
    width: 150px;
    height: 150px;
    border: 2px;
    border-style: dashed;
}
</style>
</head><title>پرینت کارت</title><body><table border="0" cellspacing="0" cellpadding="0" class="table2" id="login">
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
	</tr>
    <tr>
        <td colspan="4" style="text-align: center; font-family: Tahoma;"><h3> هئیت انجمن های ورزشی استان </h3><h5>( کارت ورود به جلسه امتحان )</h5></td>
	</tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="text-align: center;padding-bottom: 5px;"><img class="imgPic" src="<?php echo $pic;?>"/></td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
	</tr>
</table>

<br/>
<table border="0" cellspacing="0" cellpadding="0" class="table2" id="login">
	<tr id="MM">
		<tr>
			<td class="lable2">نام : <?php echo $fname;?></td>
			<td class="lable2">نام خانوادگی : <?php echo $lname;?></td>
		</tr>
		<tr>
			<td class="lable2">نام پدر : <?php echo $fathername;?></td>
			<td class="lable2">محل تولد : <?php echo $mahalt;?></td>
		</tr>
		<tr>
			<td class="lable2">شماره شناسنامه : <?php echo $shname;?></td>
			<td class="lable2">کد ملی : <?php echo $codemeli;?></td>
		</tr>
		<tr>
			<td class="lable2">تاریخ تولد : <?php echo $tdata;?></td>
			<td class="lable2">شماره تلفن : <?php echo $mobile;?></td>
		</tr>

	</tr>		
</table>
</br>
<table border="0" cellspacing="0" cellpadding="0" class="table2" id="login">
	<tr id="MM">
		<tr>
			<td class="lable2"><font style="font-weight: bold;font-style: italic;">آدرس محل امتحان </font> : <?php echo $address;?></td>
		</tr>
		<tr>
			<td class="lable2"><font style="font-weight: bold;font-style: italic;">تاریخ امتحان </font> : <?php echo $date;?></td>
		</tr>
		<tr>
			<td class="lable2"><font style="font-weight: bold;font-style: italic;">ساعت امتحان </font> : <?php echo $time;?></td>
		</tr>
		<tr>
			<td class="lable2"><font style="font-weight: bold;font-style: italic;"><center><img style="width: 180px;height: 150px;" src="../img/stamp.png"/><center></td>
		</tr>
		
	</tr>		
</table>
<br/>
<center><a href="./User_cp.php"><input type="button"    value="بازگشت" /></a></center>
</body></html>

 
 
 

