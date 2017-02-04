<?php include("./new_tikect_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحه مدیریت</title>
<style>
.listbody2{
	height:26px;
	background-color:#B7B7B7;
	color:#fff;
	text-align:right;
	}	
.listbody{
	height:26px;
	background-color:#efefef;
	text-align:center;
	}
.listbodyb{
	height:26px;
	text-align:center;
	}
.listbodyb2{
	height:26px;
	text-align:right;
	background-color:#f4f4f4;
	border: 1px solid #DBDBDB;
	margin-top:30px;
	}	

tr.listbodyp:nth-child(even){
	/*background:#FCFCFC;*/
	background:#efefef;
	}
tr.listbodyp:nth-child(odd){
	background:#EFEFEF;
	}
body {
	background-image: url(../img/bg.jpg);
}



* { 
	margin: 0; 
	padding: 0; 
}
body { 
   font-family: Tahoma;
   font-size:14px;
   
   }
#page-wrap {
	margin: 50px;
}
p {
	margin: 20px 0; 
}

	/* 
	Generic Styling, for Desktops/Laptops 
	*/
	table { 
		width: 150%; 
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


#ekhtar {
	width:300px;
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



<script>
function mh()
{
if(document.form1.srch.value=="")
{
alert("فیلد جستجو تکمیل نشده است ");
}

else
{
document.form1.serch.type="submit" ;
}
}


</script>

</head>

<body>

<br />
<center>

  <a href="./Logout.php" class="uibutton">خروج از مدیریت</a>
|
  <a href="./sql.php" class="uibutton">بازگشت به مدیریت سامانه</a>
|
  <a href="./print_mng.php" class="uibutton">مجوز چاپ برکه ورود</a>
|
  <a href="./Absent_persent_sheet.php" class="uibutton" >چاپ فهرست حضور غیاب</a>
 |
  <a href="./all_user_print.php" class="uibutton" >چاپ فهرست کاربران</a>
 |
  <a href="./mng_tikets.php" class="uibutton">تیکت ها فعال</a>|
  <a href="./insert_marks.php" class="uibutton">درج و تغییر نمرات</a>
  
  
 
  
  
  

<br />

<br />
<br />

<form name="form1"  method="post">
<table border="1" cellpadding="4" cellspacing="0"    width="1400">
<td style="font:Tahoma ;color:#FF0000"> <b> حذف </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> تغییر </b> </td>
<td  style="font:Tahoma ;color:#FF0000"> <b> نمره </b> </td>
<td  style="font:Tahoma ;color:#FF0000"> <b> کد تراکنش </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> وضعیت پرداخت </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> کدپستی </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> تلفن همراه </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> ثابت تلفن </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> آدرس منزل </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> کد رهیگری </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> کد ملی </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> شماره شناسنامه </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> تاریخ تولد </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> نام خانوادگی </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> نام </b> </td>
<td style="font:Tahoma ;color:#FF0000"> <b> انتخاب </b> </td>
<td  style="font:Tahoma ;color:#FF0000"> <b> شماره </b> </td>

<?php



include("../Date_cheker.php");						
//include("./new_tikect_cheker.php");	

@$tblname=$_SESSION['sqlslt'];

	
	
		
$amir=1;
$mamali=1;

if(!isset($_SESSION['sqlslt']))
{
echo '<script> alert ("شما جدول ای انتخاب نکرده اید بنابراین به صفحه انتخاب منتقل می شوید");</script>';			
echo '<meta http-equiv="refresh" content="0;URL=./sql.php">';

}


//بعد از فشرده شدن دکمه جستوجو
else if(isset($_POST['serch']))
{


include("../Config.php");
$srch=EnCryption($_POST['srch']);
//مشخص کردن جستو جو براساس

		if($_POST['mamali']=='کد رهیگیری')
		{$postion='pass';}
		else if($_POST['mamali']=='شماره شناسنامه')
		{$postion='shname';}
		else if($_POST['mamali']=='کد ملی')
		{$postion='codemeli';}
		else if($_POST['mamali']=='نام خانوادگی')
		{$postion='lname';}
		else if($_POST['mamali']=='کد پستی')
		{$postion='postcode';}
		else if($_POST['mamali']=='تلفن همراه')
		{$postion='mobile';}
		else if($_POST['mamali']=='تلفن ثابت')
		{$postion='tel';}
		else if($_POST['mamali']=='کد تراکنش')
		{$postion='codetra';}
		else if($_POST['mamali']=='تاریخ تولد')
		{$postion='tdata';}
//مشخص کردن جستو جو براساس   پایان




		//if(is_numeric($srch))
			//{
				$query="Select * from ".$tblname." where ".$postion." = '".$srch."' ";
							$result=mysqli_query($con,$query);
								if(!$result)
									{
										echo "Query not";
									}

							@$num=mysqli_num_rows($result);
							@$row = mysqli_fetch_row($result);


								if(@$row)
									{
										for($i=0;$i<$num;$i++)

											{

														echo '<tr>';
											
														echo "<td align=center  class=listbodyp> <b>  <a                  href=\"./Del_user.php?shname=".$row['5']."\"><img           src='../img/delete.gif'/></a>  </b> </td>";       
														echo "<td align=center class=listbodyp> <b>  <a href=\"./Edit_user.php?shname=".$row['5']."\"><img src='../img/edit.gif'/></a>  </b> </td>"; 
																	if($row[18]=="")
														{
										    echo "<td align=center  class=listbodyp> <b> نمره ثبت نشده  </b> </td>";

														}
														else
														{
											echo "<td align=center  class=listbodyp> <b>".$row[18]." </b> </td>";

														}      
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[14])." </b> </td>";
											     		echo '<td align=center  class=listbodyp> <b> <font color="#00CC66"> '.$row[11].'  </font> </b> </td> ';
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[9])." </b> </td>";
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[8])." </b> </td>";
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[7])." </b> </td>";
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[6])." </b> </td>";
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[13])." </b> </td>";
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[15])." </b> </td>";
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[5])." </b> </td>";
														echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[3])." </b> </td>";
														echo "<td align=center class=listbodyp> <b>  ".DeCryption($row[1])." </b> </td>";
														echo "<td align=center class=listbodyp> <b>  ".DeCryption($row[0])." </b> </td>";
														echo '<td align=center class=listbodyp> <b> <input type="checkbox" name="checkbox[]"  value="'.$row[5].'" /> </b> </td>';
														echo "<td align=center class=listbodyp> <b>  $mamali  </b> </td>";
														echo '</tr>';
							@$row = mysqli_fetch_row($result);
$mamali++;
$amir++;

										    }

								echo '<br/><br/><font color="#FF0000"><h2>جستجو براساس   ( '.$_POST['mamali'].' )   تکمیل شد </h2></font><br/><br/>';

			 }	
			
	  if ($amir=='1')
	     	{	
	          echo '<br/><br/><font color="#FF0000"><h2>کاربری با   ('.$_POST['srch'].')    ( '.$_POST['mamali'].' )   یافت نشد </h2></font><br/><br/>';
			  
	     	}
			  
}


  




else
{
include("../Config.php");

if($_SESSION['sqlslt']==11){@$_SESSION['sqlslt']=$_REQUEST['form'];}

@$tblname=$_SESSION['sqlslt'];




include("../Config.php");
$query="Select * from ".@$tblname." ";
$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}


@$num=mysqli_num_rows($result);
if($num==0)
{
echo "اطاعاتی ثبت نشده است      ";
echo @$tblname;

echo "     در جدول";

}
else
{

for($i=0;$i<$num;$i++)

{
$row = mysqli_fetch_row($result);

echo '<tr>';
													
echo "<td align=center  class=listbodyp> <b>  <a href=\"./Del_user.php?delid=".$row['0']."\"><img src='../img/delete.gif'/></a>  </b> </td>";       
echo "<td align=center class=listbodyp> <b>  <a href=\"./Edit_user.php?shname=".$row['5']."\"><img src='../img/edit.gif'/></a>  </b> </td>";  
if($row[18]=="")
														{
										    echo "<td align=center  class=listbodyp> <b> نمره ثبت نشده  </b> </td>";

														}
														else
														{
											echo "<td align=center  class=listbodyp> <b> $row[18] </b> </td>";

														}     
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[14])." </b> </td>";
echo '<td align=center  class=listbodyp> <b> <font color="#00CC66"> '.$row[11].'  </font> </b> </td> ';
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[9])." </b> </td>";
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[8])." </b> </td>";
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[7])." </b> </td>";
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[6])." </b> </td>";
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[13])." </b> </td>";
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[15])." </b> </td>";
echo "<td align=center  class=listbodyp> <b> ".DeCryption($row[5])." </b> </td>";
echo "<td align=center  class=listbodyp><b>  ".DeCryption($row[3])." </b> </td>";
echo "<td align=center class=listbodyp> <b>  ".DeCryption($row[1])." </b> </td>";
echo "<td align=center class=listbodyp> <b>  ".DeCryption($row[0])." </b> </td>";
echo '<td align=center class=listbodyp> <b> <input type="checkbox" name="checkbox[]"  value="'.$row[5].'" /> </b> </td>';
echo "<td align=center class=listbodyp> <b>  $mamali  </b> </td>";
$mamali++;

echo '</tr>';
@$checkbox = $_POST['checkbox'];

}
}


}

?>

<?php
include("../Config.php");


				
				if(@$checkbox){
				    for($i=0;$i<$num;$i++){
				        @$del_id = $checkbox[$i];
				        $sql = "DELETE FROM ".$tblname." WHERE shname='".$del_id."'";
				        $result = mysqli_query($con,$sql);
						}
						// رفرش صفحه در صورت اجرای موفقیت آمیز کد 
					if($result){
				    echo "<meta http-equiv=\"refresh\" content=\"0;URL=./Admin_cp.php\">";
					}
					}
					

				
				@mysqli_close();



?>


</table>
<br />

<br />
<br />

_______________________________
<br />
<br />
<select name="mamali" class="uibutton">
<option>کد رهیگیری</option>
<option>شماره شناسنامه</option>
<option>کد ملی</option>
<option>نام خانوادگی</option>
<option>کد پستی</option>
<option>تلفن همراه</option>
<option>تلفن ثابت</option>
<option>تاریخ تولد</option>
<option>کد تراکنش</option>
</select><br />
<input type="text" name="srch" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"  maxlength="15" /><br />
<input type="button"  name="serch" onclick="mh()" value="جستجو" dir="rtl" class="uibutton"  />
<br />
_______________________________
<br />

<br />

<input type="submit" value="حذف دسته ای"  class="uibutton" />
|
<a href="./Admin_cp.php"><input type="submit"  value="مشاهده تمام کاربران" class="uibutton" /></a>
</form>






</center>
</body>
</html>
