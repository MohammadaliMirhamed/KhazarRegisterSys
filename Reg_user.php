<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ثبت نام</title>
<style type="text/css">
body,td,th {
	font-family: Tahoma;
	color: #CC0000;
}
body {
	background-image: url(img/bbbg.jpg);
}



#mainpg {
	width:600px;
	height:auto;
	border: 0px #000000 dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-image:url(img/bg.jpg);
text-align:center;
margin-top:14px;
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

</style>










</head>

<body>
<div id="mainpg" >

<?php

session_start();
if(!isset($_SESSION['reguser']) || !isset($_REQUEST['name']) )
{
echo '<script> alert ("شما جدول ای انتخاب نکرده اید بنابراین به صفحه انتخاب منتقل می شوید");</script>';			
echo '<center><h3>.::مسیر ثبت نام را درست انتخاب نکرده اید از صفحه اصلی وارد شوید ::.</h3></center>';
echo '<center><h2>.::در حال انتقال به صفحه اصلی::.</h2></center>';
echo  '<meta http-equiv="refresh" content="0;URL=./index.php">';

}
else{

@$nname=$_REQUEST['name'];
include("./Config.php");
@$ssql="Select * from nametbl where faname ='".$name."' ";
$ress=mysqli_query($con,$ssql);
if(!$ress){echo "not";}
@$roww = mysqli_fetch_row($ress);


if($roww[2]==0 || $roww[2]=="")
{



if(

@$name=$_REQUEST['name']);
include("./Config.php");
$sql="Select * from nametbl where faname ='".$name."' ";
$res=mysqli_query($con,$sql);
if(!$res){echo "not";}
@$row = mysqli_fetch_row($res);


//تبدیل تاریخ میلادی به شمسی
$timezone = 0;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
$now = date("Y-m-d", time()+$timezone);
$time = date("H:i:s", time()+$timezone);
list($year, $month, $day) = explode('-', $now);
list($hour, $minute, $second) = explode(':', $time);
$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
include ('./jdf.php');
$jalali_date = jdate("زمان :H:i  |  تاریخ: Y/m/d",$timestamp);
$time=$jalali_date;
//تبدیل تاریخ میلادی به شمسی




echo "<center><h2>".$_REQUEST['name']."</h2></center>";
echo '
<script>

function mamali()
{

if(document.form1.fname.value=="")
{
alert("فیلد نام تکمیل نشده است");
}

else if(document.form1.lname.value=="")
{
alert("فیلد نام خانوادگی تکمیل نشده است");
}
else if(document.form1.fathername.value=="")
{
alert("فیلد نام پدر تکمیل نشده است");
}
else if(document.form1.tdata.value=="")
{
alert("فیلد تاریخ تولد تکمیل نشده است");
}
else if(document.form1.mahalt.value=="")
{
alert("فیلد محل تولد تکمیل نشده است");
}
else if(document.form1.shname.value=="")
{
alert("فیلد شماره شناسنامه تکمیل نشده است");
}
else if(document.form1.codemeli.value=="")
{
alert("فیلد شماره کد ملی تکمیل نشده است");
}
else if(document.form1.address.value=="")
{
alert("فیلد آدرس منزل تکمیل نشده است");
}
else if(document.form1.tel.value=="")
{
alert("فیلد تلفن منزل تکمیل نشده است");
}
else if(document.form1.mobile.value=="")
{
alert("فیلد تلفن همراه تکمیل نشده است");
}
else if(document.form1.email.value=="")
{
alert("فیلد ایمیل تکمیل نشده است");
}
else if(document.form1.postcode.value=="")
{
alert("فیلد کد پستی تکمیل نشده است");
}
else if(document.form1.checkbox.checked==false)
{
alert("شما قوانین را نپذیرفتید !!");
}
else
{
document.form1.send.type="submit" ;
alert("تمام اطلاعات فیلد ها تکمیل است در حال انتقال به درگاه پرداخت هستید.");
document.form1.action="./Pay/Get.php" ;
}


}


</script>



<form  method="POST"  name="form1" >
<p> 
        <input type="hidden" name="nameirani" value='.$row[1].' />

        <input type="hidden" name="dtime" value="'.$time.'" />
		
		 <input type="text" name="fname" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="20"/>  :نام              <br />

           <input type="text" name="lname" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="20"/>  :نام خانوادگی<br />
		   
       <input type="text" name="fathername" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="20"/>  :نام پدر         <br />

           <input type="text" name="tdata" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="10" />  :تاریخ تولد     <br />
<font color="#FF00FF">مثال تاریخ تولد : 1392/02/02</font>
<br/>

           <input type="text" name="mahalt" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="15"/>  :محل تولد      <br />

           <input type="text" name="shname" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;width:135px;" maxlength="15"/>:شماره شناسنامه<br />

           <input type="text" name="codemeli" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="15"/>  :کد ملی        <br />

           <input type="text" name="address" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="400"/>  :آدرس منزل    <br />

           <input type="text" name="tel" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="15" "/>  :تلفن منزل    <br />
<font color="#FF00FF">مثال تلفن منزل: 2233445-0131</font>
<br/>

           <input type="text" name="mobile" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="11" />  :تلفن همراه   <br />
<font color="#FF00FF">مثال تلفن همراه: 09112223344</font> <br />

<input type="text" name="email" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="51" />  :ایمیل         <br />
<font color="#FF00FF">مثال : info@yahoo.com</font>

<br/>
           <input type="text" name="postcode" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="11"/>  :کد پستی    <br />



<br/>


           ↓ هدف شما از شرکت در این مسابقه  ↓ <br />
		  <textarea name="hadfyou" cols="40" rows="5" style="border-radius: 20px;text-align:center;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;"></textarea>
       <br/>

	     
		 
           <label>
           <input type="checkbox" name="checkbox" value="checkbox" />
           من تمام قوانین را مطالعه کردم و حاضرم در این آموزش شرکت کنم</label>
           <br />     
       <br/>

		              <input type="button"   name="send" onclick="mamali()" class="uibutton"         value="ادامه ثبت نام و اتصال به درگاه پرداخت" />

					<input type="hidden" name="h" value="h" />
		                    
                  </p>
</form>


';

}
else
{
echo '<script> alert ("این جدول غیر فعال شده است و نمی توانید ثبت نام کنید");</script>';			
echo '<center><h3>.::مسیر ثبت نام را درست انتخاب نکرده اید از صفحه اصلی وارد شوید ::.</h3></center>';
echo '<center><h2>.::در حال انتقال به صفحه اصلی::.</h2></center>';
echo  '<meta http-equiv="refresh" content="0;URL=./index.php">';
}

}


?>
</div>




</body>
</html>
