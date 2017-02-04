<?php include("./new_tikect_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تنظیمات عمومی سامانه</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	color: #000000;
}
body {
	background-image: url(../img/texture_red.jpg) ;
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
	width:400px;
	height:480px;
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


-->
</style></head>

<body>

<br />
<center>
  <a href="./Logout.php" class="uibutton">خروج از مــدیریـت</a>

|
  <a href="./Chenge_pass.php" class="uibutton">تغییر رمز</a>
|
  <a href="./Post_mng.php" class="uibutton">مدیریت اطلاعیه ها</a>
|
  <a href="./genral_set.php" class="uibutton">تنظیــمات سامانه</a>
|
  <a href="./Admin_cp.php" class="uibutton">پنل مــدیریت</a>



<div id="mainpg">

<form  method="post" name="form1" action="genral_set.php">

<?php 



$query="Select * from genral where id ='1' ";
$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}
$num=mysqli_num_rows($result);
$row = mysqli_fetch_row($result);



?>

<?php

if (isset($_POST['send']))
{

$titel=addslashes(htmlspecialchars($_POST['titel']));
//$mamalit=addslashes(htmlspecialchars($_POST['mamalit']));
$datap=addslashes(htmlspecialchars($_POST['datap']));
$timep=addslashes(htmlspecialchars($_POST['timep']));
$addres=addslashes(htmlspecialchars($_POST['addres']));





if(isset($_POST['closesite']))
{
$closesite=addslashes(htmlspecialchars($_POST['closesite']));
}
else
{
$closesite=addslashes(htmlspecialchars($_POST['closesiteh']));
}

if(isset($_POST['closereg']))
{
$closereg=addslashes(htmlspecialchars($_POST['closereg']));
}
else
{
$closereg=addslashes(htmlspecialchars($_POST['closeregh']));
}






include("../Config.php");
$query="UPDATE genral SET titel='".$titel."' ,  closesite='".$closesite."' ,	date='".$datap."',	time='".$timep."' ,	address='".$addres."' ,closereg='".$closereg."'    WHERE  id='1' " ;


$result=mysqli_query($con,$query);
if(!$result)
{
echo "Query not";
}
echo '<font color="#FF0000"  size="+2" >لطفاً چند ثانیه صبر کنید تغییرات با موفقیت انجام شد</font><br/><br/><br/> ';
echo '<meta http-equiv="refresh" content="2;URL=./genral_set.php">';
@mysqli_close();


}


?>



<br />
 <input type="text" name="titel" value="<?php echo $row[1];?>" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" /> عنوان سایت<br />


--------------------------------------------------------------------------------<br />



 <label>
      <input type="radio" name="closesite"   value="1" />
      باز بودن سامانه</label>
    <br />
    <label>
      <input type="radio" name="closesite"  value="0" />
      بسته بودن سامانه</label>
    <br />

<?php


if($row[2]==1)
{
echo '<font color="#009933"  size="+1" >سایت باز است</font><br/>  ';
}
else
{
echo '<font  color="#FF0000" size="+1" >سایت بسته است</font><br/> ';
}

?>
--------------------------------------------------------------------------------<br />



 <label>
      <input type="radio" name="closereg"  value="1" />
      صفحه ثبت نام باز است</label>
    <br />
    <label>
      <input type="radio" name="closereg"  value="0" />
      صفحه ثبت نام بسته است</label>
    <br />

<?php


if($row[8]==1)
{
echo '<font color="#009933"  size="+1" >صفحه ثبت نام باز است</font><br/>  ';
}
else
{
echo '<font  color="#FF0000" size="+1" >صفحه ثبت نام بسته است</font><br/> ';
}

?>
--------------------------------------------------------------------------------<br />
<!--
اطلاعیه
<br />
<textarea name="mamalit" cols="45" rows="7"   style="border-radius: 20px;text-align:center;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" ><?php echo $row[7]?></textarea>
<br />
<?php

/*
if(!$row[7]=="")
{
echo '<font color="#009933"  size="+1" >اطلاعیه سایت فعال است</font><br/>  ';
}
else
{
echo '<font  color="#FF0000" size="+1" >اطلاعیه سایت غیر فعال است</font><br/> ';
}
*/
?>

--------------------------------------------------------------------------------<br />
-->
  <h4>پرینت کارت ورود</h4>
<input type="text" name="datap"  value="<?php echo $row[4]?>"  style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" /> : تاریخ  :
<input type="text" name="timep"   value="<?php echo $row[5]?>" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" />  زمان   
<br />
<br />
آدرس محل برگزاری
<br />
<input name="addres" type="text"  value="<?php echo $row[6]?>" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" size="50" />
<br />
<?php
if($row[4]=="" || $row[5]=="" || $row[6]=="")
{
echo '<font  color="#FF0000" size="+1" >پرینت کارت فعال نیست »» لطفاً تاریخ و زمان و آدرس را پر کنید تا پرینت کار فعال شود</font><br/> ';
}
else
{
echo '<font color="#009933"  size="+1" >پرینت کارت فعال است برای غیر فعال کردن فیلد ها را خالی و ذخیره کنید</font><br/>  ';

}
?>






<br />--------------------------------------------------------------------------------<br />



<input type="hidden" name="closesiteh" value="<?php echo $row[2]?>" />
<input type="hidden" name="closeregh" value="<?php echo $row[8]?>" />
<input type="submit" value="ذخیره" class="uibutton" name="send" />
</form>
</center>
</div>

</body>
</html>
