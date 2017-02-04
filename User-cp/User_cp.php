<?php 
include("./new_tikect_cheker.php");
include("../Date_cheker.php");		
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>پنل کاربری</title>

<link href="styles.css" rel="stylesheet" type="text/css" />



<script type="text/javascript" src="css-pop.js"></script>


<style type="text/css">



body,td,th {
	font-family: Tahoma;
	color: #CC0000;
}
body {
	background-image: url(../img/bbbg.jpg);
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
background-image:url(../img/bg.jpg);
text-align:center;
margin-top:14px;
}




.mainpg{
	width:150px;
	height:190px;
	border: 2px #FF0000 dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-color:#FFFFFF;
text-align:center;
margin-top:14px;
}

.mainpg:hover {
	width:150px;
	height:190px;
	border: 2px #0000FF dotted;
	margin:30px auto;
	padding:5px;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
font-family:Tahoma;
font-size:13px;
background-color:#FFFFFF;
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


a{
	text-decoration:none;
	color:#06C;
}
a:hover{
	color:#666;
}
.ok {
	display:block;
	padding:4px;
	border:0px #666 solid;
	color:#090;
	width:300px;
}
.error {
	display:block;
	padding:4px;
	border:0px #666 solid;
	color:#C00;
	width:300px;	
	
}
#upload-process{
	z-index:1000;
    visibility:hidden;
}
.frame{
	width:200px;
	height:30px;
	border:0px #666 solid;
}



.ekhtar {
	width:600px;
	height:20px;
	border: 1px #EE0000  dotted;
	border-radius:10px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	background-color:#EE0000;
font-family:Tahoma;
font-size:14px;
color:#EEEEEE;
text-align:center;
}


</style></head>


<body>



<script type="text/javascript">
function upload_start(){
      document.getElementById('upload-process').style.visibility = 'visible';
      return true;
}

function upload_end(check_upload){
      var server_response = '';
      if (check_upload == 1){
         server_response = '<span class="ok">فایل با موفقیت آپلود شد!<\/span>';
		 alert ("عکس شما بارگذاری شد");			
		 top.location="./User_cp.php";
      }
      else {
         server_response = '<span class="error">انتقال فایل به سرور انجام نشد!<\/span>';
      }
      document.getElementById('upload-process').style.visibility = 'hidden';
      document.getElementById('upload-form').innerHTML = server_response;
      return true;   
}
</script>




<div id="mainpg" >
<br />





<?php
	// <= Add File <= Config.php + cybric.php + session_start();






$del_id=$_SESSION['UserName'];

					
$query="Select * from ".$_SESSION['TabelName']." where pass ='".$del_id."' " ;
$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo "not";
	}
$num=mysqli_num_rows($result);
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
					$postcode=DeCryption($row[9]);
					$spayment=$row[11];
	       			$codetra=DeCryption($row[14]);
					$codemeli=DeCryption($row[15]);
					$mark=$row[18];




	







?>

<?php

if (isset($_POST['send']))
{

$fname=EnCryption($_POST['fname']);
$lname=EnCryption($_POST['lname']);
$fathername=EnCryption($_POST['fathername']);
$tdata=EnCryption($_POST['tdata']);
$mahalt=EnCryption($_POST['mahalt']);
$shname=EnCryption($_POST['shname']);
$address=EnCryption($_POST['address']);
$tel=EnCryption($_POST['tel']);
$mobile=EnCryption($_POST['mobile']);
$postcode=EnCryption($_POST['postcode']);
//$pass=EnCryption($_POST['passs']);
$codemeli=EnCryption($_POST['codemeli']);



$query="UPDATE ".$_SESSION['TabelName']." SET fname='".$fname."', lname='".$lname."' , fathername='".$fathername."' , tdata='".$tdata."' , mahalt='".$mahalt."' ,  shname='".$shname."' , address='".$address."' , tel='".$tel."' , mobile='".$mobile."', postcode='".$postcode."' , codemeli='".$codemeli."' WHERE pass='".EnCryption($pass)."' ";
$re=mysqli_query($con,$query);
	if(!$re)
	{
	echo "Query not";
	}
	
	
	
	
						
$query="Select * from ".$_SESSION['TabelName']." where pass ='".$del_id."' " ;
$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo "not";
	}
$num=mysqli_num_rows($result);
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
					$postcode=DeCryption($row[9]);
					$spayment=$row[11];
	       			$codetra=DeCryption($row[14]);
					$codemeli=DeCryption($row[15]);
					$mark=$row[18];

	
echo '<center><font color="#FF0000"  size="+2" >تغییرات با موفقیت انجام شد</font></center><br/><br/><br/> ';
echo  '<meta http-equiv="refresh" content="2;URL=./User_cp.php">';
@mysqli_close();
}

?>


<?php
	if (isset($_POST['pr']))
		{
$querye="Select * from genral where id ='1' ";
$resulte=mysqli_query($con,$querye);
if(!$resulte)
{
echo "Query not";
}
$nume=mysqli_num_rows($resulte);
$rowe = mysqli_fetch_row($resulte);

			
			if($rowe[4]=="" || $rowe[5]=="" || $rowe[6]=="")
			{
			echo '<script> alert ("مجوز چاپ کارت صادر نشده است");</script>';
			}
			else
			{
				$_SESSION['print']=$codemeli;
				echo '<meta http-equiv="refresh" content="0;URL=./Print_form.php">';

			
			}




		} 
		
		
		if (isset($_POST['tickt'])){header("location:./mng_tikets.php");}
?>
<?php

if($row[12]=='')
{
echo "<div class='ekhtar'>";
echo "عکس شما در سیستم بارگذاری نشده است</div>";
}


?>





<form  method="POST"  name="form1" >

<p> 
        
		 <input type="text" name="fname" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="20" value="<?php echo $fname; ?>"/>  :نام              <br />

           <input type="text" name="lname" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="20" value="<?php echo $lname; ?>"/>  :نام خانوادگی<br />
		   
       <input type="text" name="fathername" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="20" value="<?php echo $fathername; ?>"/>  :نام پدر         <br />

           <input type="text" name="tdata" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="10"  value="<?php echo $tdata; ?>"/>  :تاریخ تولد     <br />
<font color="#FF00FF">مثال تاریخ تولد : 1392/02/02</font>
<br/>
           <input type="text" name="mahalt" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="15" value="<?php echo $mahalt; ?>"/>  :محل تولد      <br />

           <input type="text" name="shname" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;width:135px;" maxlength="15"value="<?php echo $shname; ?>"/>:شماره شناسنامه<br />

           <input type="text" name="codemeli" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="15" value="<?php echo $codemeli; ?>"/>  :کد ملی        <br />

           <input type="text" name="address" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="400" value="<?php echo $address; ?>"/>  :آدرس منزل    <br />

           <input type="text" name="tel" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="15"  value="<?php echo $tel; ?>"/>  :تلفن منزل    <br />
<font color="#FF00FF">مثال تلفن منزل: 2233445-0131</font>
<br/>

           <input type="text" name="mobile" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="11"  value="<?php echo $mobile; ?>"/>  :تلفن همراه   <br />
<font color="#FF00FF">مثال تلفن همراه: 09112223344</font>
<br/>
           <input type="text" name="postcode" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="11" value="<?php echo $postcode; ?>"/>  :کد پستی    <br />

           <input type="text" name="spayment" style="width:135px;border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="15"    disabled="disabled" value="<?php echo $spayment; ?>"/>  :وضعیت پرداخت<br />

           <input type="text" name="codetra" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="11"  disabled="disabled" value="<?php echo $codetra; ?>"/>  :کد تراکنش   <br />
           <input type="text" name="pass" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="11" disabled="disabled" value="<?php echo $pass; ?>"  />  :کد رهیگیری  <br />
           <input type="text" name="mark" style="border-radius: 20px;text-align:center;height:25px;background-color:#CCCCCC;margin-top:2px;border: 1px #000000 dotted;" maxlength="11" disabled="disabled" value="<?php if(is_numeric($mark))echo $mark; else echo "نمره وارد نشده است"; ?>"  />  :نمره  <br />

		   
		   <input type="hidden" name="passs" value="<?php echo $pass; ?>"  />
 					<input type="hidden" name="h" value="h" />

 
 
 
 
 
 
 
   
       <br/>

<a href="./Logout_user.php"><input type="button"   name="send"  class="uibutton"  value="خروج از پنل" /></a>
<input type="submit"   name="pr"  class="uibutton"  value="پرینت برگه ورود" />
<a href="./mng_tikets.php"><input type="button"   name="send"  class="uibutton"  value="تیکت ها / جدید" /></a>
<input type="button"   name="send"  onclick="popup('popUpDiv')"  class="uibutton"  value="درج / تغییر عکس" />
<input type="submit"   name="send"  class="uibutton"  value="ذخیره تغییرات" />








		                    
</form>

</div>









    



    


    

    <div id="blanket" style="display:none;"></div>

	<div id="popUpDiv" style="display:none;" align="center">

        	<a href="#" onclick="popup('popUpDiv')" ><img src="../img/table_delete.png"  width="40" height="40" align="right"/></a>




<?php

if($row[12]=='')
{
echo '
<form action="New_up_img.php" method="post" enctype="multipart/form-data" target="upload-target" onsubmit="upload_start();">
<iframe id="upload-target" name="upload-target" class="frame"></iframe></br>';
echo "<img src=\"../img/stock_people.png\" class=mainpg height=\"120\" width=\"110\" alt=\"loading\" />";
echo '
<center>
<br/>

<label for="user-file"></label>
<input type="submit"  value="بارگزاری عکس" />
<input type="file" id="user-file" name="user-file" />
</form>
<div id="upload-process"><img src="loading.gif" height="16" width="16" alt="loading" /> در حال پردازش...</div>
<div id="upload-form"></div>
</center>
';
}
else
{
echo '
<form action="Edit_up_img.php" method="post" enctype="multipart/form-data" target="upload-target" onsubmit="upload_start();">
<iframe id="upload-target" name="upload-target" class="frame"></iframe></br>';
echo "
<img src=\"".DeCryption($row[12])."\"  class=mainpg height=\"130\" width=\"120\" alt=\"loading\" />";
echo '
<center>
<br/>
<label for="user-file"></label>
<input type="submit" value="تغییر عکس" />
<input type="file"  id="user-file" name="user-file" />
</form>
<div id="upload-process"><img src="loading.gif" height="16" width="16" alt="loading" /> در حال پردازش...</div>
<div id="upload-form"></div>
</center>
';
}

?>







	</div>	




    









</body>
</html>
