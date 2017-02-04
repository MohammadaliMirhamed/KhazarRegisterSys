<?php
@session_start();

if(@isset($_POST['UserName']) || @$_POST['UserName']!='' && @isset($_POST['PassWord']) || @$_POST['PassWord']!='')
{
 include("./Config.php");
 
 		     @$Query="Select * from nametbl where faname ='".$_POST['Table_Fa_Name']."' ";
  			 @$Result=mysqli_query($con,$Query);if(!$Result){echo "Sql Code Is Fail";}
			 @$TableName=mysqli_fetch_row($Result);

$UserName=$_POST['UserName'];
$PassWord=$_POST['PassWord'];

             @$Query="Select * from ".$TableName[1]." where pass ='".EnCryption($UserName)."' AND codemeli ='".EnCryption($PassWord)."' ";					
			 @$Result=mysqli_query($con,$Query);if(!$Result){echo "Sql Code Is Fail";}
    		 @$Num=mysqli_num_rows($Result);
			 @$Row = mysqli_fetch_row($Result);
			 	if(@$Num==1)
				{	
					$_SESSION['UserName']=$Row[13];
					$_SESSION['PassWord']=$Row[15];
					$_SESSION['TabelName']=$TableName[1];
					$_SESSION['Kind_User']="User";
					echo '<meta http-equiv="refresh" content="0;URL=./User-cp/User_cp.php">';

					


				}
			 	else if(@$Num==0 || @$Num=='' || @$Num=="" || @$Num=='' || @$Num>1)
				{	
	 				    echo "<script>alert('اطلاعات را اشتباه وارد کرده اید')</script>";		
						echo '<meta http-equiv="refresh" content="0;URL=./Session_Null.php">';
						

				}
		
		
	
	
}
else if(@isset($_SESSION['UserName']) || @$_SESSION['UserName']!='' && @isset($_SESSION['PassWord']) || @$_SESSION['PassWord']!='' && @$_SESSION['Kind_User']=="User" &&  @isset($_SESSION['TabelName']) || @$_SESSION['TabelName']!='')
{

			include("../pay/cybric.php");
            include("../Config.php");
			 	
			 @$Query1="Select * from ".$_SESSION['TabelName']." where pass ='".$_SESSION['UserName']."' AND codemeli ='".$_SESSION['PassWord']."' ";					
			 @$Result1=mysqli_query($con,$Query1);if(!$Result1){echo "Sql Code Is Fail";}
    		 @$Num1=mysqli_num_rows($Result1);
			 @$Row1 = mysqli_fetch_row($Result1);

			 if(@$Num1==1)
				{	
					
	 				    
				}
			 	else if(@$Num1==0 || @$Num1=='' || @$Num1=="" || @$Num1=='' || @$Num1>1)
				{	
					    header("location:./Logout_user.php");
				}





}

else if(@isset($_POST['UserName_Admin']) || @$_POST['UserName_Admin']!='' && @isset($_POST['PassWord_Admin']) || @$_POST['PassWord_Admin']!='')
{
 
 include("../pay/cybric.php");
 include("../Config.php");
 
 		     


			 $Query3="SELECT * FROM admin WHERE USERNAME ='".$_POST['UserName_Admin']."' AND PASSWORD ='".EnCryption($_POST['PassWord_Admin'])."' ";					
			 $Result3=mysqli_query($con,$Query3);
				if(!$Result3){echo "Sql Code Is Fail";}
				
  
    		 $Num3=mysqli_num_rows($Result3);
			 $Row3 = mysqli_fetch_row($Result3);
			 	if(@$Num3==1)
				{	
					$_SESSION['UserName_Admin']=$Row3[0];
					$_SESSION['PassWord_Admin']=$Row3[1];
					$_SESSION['Kind_User']="Admin";
					header("location:./sql.php");
					

				}
			 	else if(@$Num3==0 || @$Num3=='' || @$Num3=="" || @$Num3=='' || @$Num3>1)
				{	
	 				    echo "<script>alert('اطلاعات را اشتباه وارد کرده اید')</script>";	
						echo '<meta http-equiv="refresh" content="0;URL=./Session_Null.php">';
				}
		
		
	
	
}
else if(@isset($_SESSION['UserName_Admin']) || @$_SESSION['UserName_Admin']!='' && @isset($_SESSION['PassWord_Admin']) || @$_SESSION['PassWord_Admin']!='' && @$_SESSION['Kind_User']=="Admin" )
{

			@include("../pay/cybric.php");
            @include("../Config.php");
			 	
            @$Query4="Select * from Admin where USERNAME ='".$_SESSION['UserName_Admin']."' AND PASSWORD ='".$_SESSION['PassWord_Admin']."' ";					
			 @$Result4=mysqli_query($con,$Query4);if(!$Result4){echo "Sql Code Is Fail";}
    		 @$Num4=mysqli_num_rows($Result4);
			 @$Row4 = mysqli_fetch_row($Result4);

			 if(@$Num4==1)
				{	

				}
			 	else if(@$Num4==0 || @$Num4=='' || @$Num4=="" || @$Num4=='' || @$Num4>1)
				{	
						@header("location:./Logout.php");
				    									
				}

}
else{header("location:./Logout.php");}
?>