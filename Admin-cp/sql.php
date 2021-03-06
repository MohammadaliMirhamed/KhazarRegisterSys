<?php 
include("./new_tikect_cheker.php");
include("../Date_cheker.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>مدیریت سامانه</title>
<style>
	table { 
		width: 70%; 
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
	

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body {
	background-image: url(../img/bg.jpg);
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
	width:500px;
	height:550px;
	border: 2px #000000 dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-image:url(../img/bg.jpg);
text-align:center;
margin-top:150px;
}


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


.imgnew{width:150px;}

.imgnew:hover{width:130px;table-layout:fixed;}



.mg{opacity:2;filter:alpha(opacity=110);}
.mg:hover{opacity:0.8;filter:alpha(opacity=80);}


</style>




<script type="text/javascript">


function zabet(mz) {  
    var item;  
    item = document.getElementById(mz);  
    if (item.style.display == "none") {  
        item.style.display = "inline";  
   }  
    else {  
        item.style.display = "none"  
    }  
}


function mh()
{
if(document.form1.tblname.value=="")
{
alert("نام جدول وارد نشده است ");
}
else if(document.form1.faname.value=="")
{
alert ("عنوان جدول وارد نشده است ");
}
else if(document.form1.monay.value=="")
{
alert ("هزینه ثبت نام وارد نشده است ");
}
else if(document.form1.post.value=="")
{
alert ("توضیحات جدول وارد نشده است");
}
else
{
document.form1.send.type="submit" ;
document.form1.action="./sql.php" ;
}
}
</script>


</head>

<body>
<br />
<br />
<center>
  <a href="./Logout.php" class="uibutton">خروج از مدیریت</a>
|
  <a href="./Chenge_pass.php" class="uibutton">تغییر رمز</a>
|
  <a href="#" class="uibutton" >چاپ فهرست کاربران</a>
 |
  <a href="./Post_mng.php" class="uibutton">مدیریت اطلاعیه ها</a>
|
  <a href="./genral_set.php" class="uibutton">تنظیمات عمومی</a>
  |
  <a href="./mng_tikets.php" class="uibutton">تیکت ها فعال</a>|
 
  
  
  

<br />
<br />
<br />

<table border="1" cellpadding="4" cellspacing="0"    >
<td style="font:Tahoma ;color:#9900FF" align="center"> <b> عنوان جدول </b> </td>
<td style="font:Tahoma ;color:#9900FF" align="center"> <b> نام جدول  </b> </td>
<td style="font:Tahoma ;color:#9900FF" align="center"> <b> افراد  ثبت نام کرده   </b> </td>
<td style="font:Tahoma ;color:#9900FF" align="center"> <b> مدیریت  </b> </td>
<td style="font:Tahoma ;color:#9900FF" align="center" > <b> تغییر </b> </td>
<td style="font:Tahoma ;color:#9900FF" align="center" > <b> حذف جدول </b> </td>
<td style="font:Tahoma " align="center" > <b>(<font color="#EE0000"> غیرفعال</font>/<font color="#0000FF">فعال</font> )</b> </td>



<?php
						

unset($_SESSION['sqlslt']);


$f=1;
if($f==1)
{
mysqli_connect("localhost","root","");
$result = mysqli_query($con,"SHOW TABLE STATUS FROM khazar  ");
while($array = mysqli_fetch_array($result)) {
@$total = $array[Data_length]+$array[Index_length];
if(@$array[Name]=='admin' || @$array[Name]=='notic' || @$array[Name]=='genral' || @$array[Name]=='nametbl')
{
}
else
{

@$mamalis[]=@$array[Name];
@$mamalisff[]=@$array[Rows];



}


}



//####################in frist show information form database The Aoutomatic#############################


$qffuery="Select * from nametbl ORDER BY enname ";
$rrr=mysqli_query($con,$qffuery);
@$num=mysqli_num_rows($rrr);
for($i=0;$i<$num;$i++)

{
$row = mysqli_fetch_row($rrr);

echo "<tr>";
	
	
	
$Qlist="Select * from ".$row[1]." ";
$cmdQlist=mysqli_query($con,$Qlist);
$TBlRegisterationum=mysqli_num_rows($cmdQlist);

	
	//$mamalisff[$i]
	
	
echo "<td align='center'> <b> $row[0] </b> </td>";
echo "<td align='center'> <b> $row[1] </b> </td>";
echo "<td align='center'> <b> $TBlRegisterationum </b> </td>";

echo "<td align='center'><a href=\"./sql.php?form=".$row[1]."\"><img src='../img/admin-ic.png' class='mg' width='35' height='35' /></a> </td>";

echo "<td align='center'><a href=\"./sql.php?form=".$row[1]."\"><img src='../img/edit.png' class='mg' width='35' height='35' /></a> </td>";


echo "<td align='center'>";
echo  '<a href="./sql.php?del='.$row[1].'" onclick="';
echo 'return confirm';
echo "('آیا مطمئن هستید که این جدول حذف شود ؟";
echo "')";
echo '"';
echo "><img src='../img/table_delete.png'  class='mg' width='35' height='35' /></a>";
echo "</td>";



if($row[2]==0)
{
echo "<td align='center'><a href=\"./sql.php?enbldisbl=$row[2]&enbldisbl1=$row[0]\"><img src='../img/on.png' class='mg' width='35' height='35' /> </a></td>";
}
else if($row[2]==1)
{
echo "<td align='center'><a href=\"./sql.php?enbldisbl=$row[2]&enbldisbl1=$row[0]\"><img src='../img/off.png' class='mg' width='35' height='35' /></a></td>";
}


echo "</tr>";



}
if($num==0)
{echo "<h2 style=color:red;>جدولی در دیتا بیس موجود نمی باشد</h2>";}
}
//####################in frist show information form database The Aoutomatic#############################







//###############################if perss submit button run this event ###############################################

if(isset($_POST['send'])){



//###################################create New Table in database#######################################################
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$mamali=$_POST['tblname'];

$sql= "
CREATE TABLE IF NOT EXISTS `".$mamali."` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `fathername` text NOT NULL,
  `tdata` text NOT NULL,
  `mahalt` text NOT NULL,
  `shname` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL,
  `mobile` text NOT NULL,
  `postcode` text NOT NULL,
  `hadfyou` text NOT NULL,
  `stutpayment` text NOT NULL,
  `pic` text NOT NULL,
  `pass` text NOT NULL,
  `codetra` text NOT NULL,
  `codemeli` text NOT NULL,
  `crite` text NOT NULL,
  `email` text NOT NULL,
  `mark` text NOT NULL,
  `txtticket` text NOT NULL,
  `newticket` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

";
				$reee=mysqli_query($con,$sql);
				if(!$reee)
				{
					echo "Query not";
					

				}
//###################################create New Table in database#######################################################


		
//######################chek for inserted bifor else inseert in database#######################################		
				
				@$gg=$_POST['tblname'];


				$q="Select * from nametbl where enname ='".$gg."' " ;

				$re=mysqli_query($con,$q);
				if(!$re)
				{
					echo "Query not";
					

				}
				
			    @$num=mysqli_num_rows($re);
			
				if($num==0)
					{
					
						$faname=$_POST['faname'];
						$sql="INSERT INTO nametbl (faname, enname, post, monay) VALUES ('".$faname."','".$gg."','".$_POST['post']."','".$_POST['monay']."')";
					
						$rdd=mysqli_query($con,$sql);
						if(!$rdd)
							{
								echo "Created unsucessFull";
								echo "<br/>".mysqli_error($con);
							}
						else
							{
								echo '<center><font color="#FF0000"  size="+2" >جدول مورد نظر با موفقیت ایجاد شد</font></center><br/><br/><br/> ';
								echo  '<meta http-equiv="refresh" content="1;URL=./sql.php">';
							}
					

				
					}	
				
				else
					{
						echo '<center><font color="#FF0000"  size="+2" >نام جدول قبلاً در دیتا بیس وجود داشته</font></center><br/><br/><br/> ';
						echo  '<meta http-equiv="refresh" content="1;URL=./sql.php">';
					}
//######################chek for inserted bifor else inseert in database#######################################		
				



}
//###############################if perss submit button run this event ###############################################





//###########################for inter admin table#################################
//unset($_SESSION['sqlslt']);

if(isset($_REQUEST['form']))
{


@$form=$_REQUEST['form'];
$_SESSION['sqlslt']=$_REQUEST['form'];
echo  '<meta http-equiv="refresh" content="0;URL=./Admin_cp.php?form='.$form.'">';   


}
//###########################for inter admin table#################################






//###########################for delet record table#################################

if(isset($_REQUEST['del']))
{



include("../Config.php");
echo  "لطفاً  صبر کنید ";
$ssddd=$_REQUEST['del'];
$ssql="DROP TABLE IF EXISTS `".$ssddd."` ";
$sssql="DELETE FROM nametbl WHERE enname='".$ssddd."' " ;;
@$rrdd=mysqli_query($con,$ssql);
@$rrrdd=mysqli_query($con,$sssql);

if(!$rrdd){echo "Qourey No66t";}
if(!$rrrdd){echo "Qourey No66t";}

unset($_REQUEST['del']);
echo  '<meta http-equiv="refresh" content="0;URL=./sql.php">';   
}
//###########################for delet record table#################################





//###########################for enable and disable table#################################

if(isset($_GET['enbldisbl']))
{
include("../Config.php");

$ed=$_GET['enbldisbl'];
$edd=$_GET['enbldisbl1'];

if($ed==0)
{
$sql="UPDATE nametbl SET ed=1 WHERE faname='".$edd."' ";
$result=mysqli_query($con,$sql);
}
else if($ed==1)
{
$sql="UPDATE nametbl SET ed=0 WHERE faname='".$edd."' ";
$result=mysqli_query($con,$sql);
}

echo  '<meta http-equiv="refresh" content="0;URL=./sql.php">';   

}
//###########################for enable and disable table#################################












?>
</table>
<br/><br/><br/>
<div style="display: none;" id="LeftDiv">
<div id="mainpg">
<font  color="#FF0033"><h2>ایجاد جدول جدید</h2></font>
<form name="form1" method="post" >
<input type="text" name="tblname" class="textbox" /> : نام            <br/>
<br /><font color="#FF00FF">حتماً انگلیسی football : مثال</font><br />
<input type="text" name="faname"  class="textbox"/>  : عنوان جدول <br/>
<br /><font color="#FF00FF">مثال : ثبت نام مسابقات جام رمضان فوتبال » نمایش در صفحه اصلی« فرم های ثبت نام</font><br />
<input type="text" name="monay"  class="textbox"/>   :هزینه ثبت نام<br/>
<br /><font color="#FF00FF">مثال : 100000 به ریال  معادل 10000 تومان </font><br />

<br />           ↓ مطلب و توضیحات تکمیلی قبل از ثبت نام ↓ <br />
		  <textarea name="post" cols="40" rows="5" class="textbox" style="width:350px;height:150px;"></textarea>
       <br/>




<br/><input type="button" name="send" onclick="mh()" class="css_btn_class" value="ایجاد" />          <br/>
</form>
</div></div>

<div onclick="zabet('LeftDiv')"><img src="../img/tab_new_raised.png" class="imgnew" ></img></div>  

</center>







</body>

</html>
