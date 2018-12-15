<?php
session_start();
$msg='';
include('connectdb.php');
if(isset($_POST['submit']))
{
	if($_POST['otp']==$_SESSION['otp'])
	{
		$sql=mysqli_query($con,"update login set password='$_POST[npass]' where user_id='$_SESSION[roll_no]'")or die('ERROR'.mysqli_error($con));
		header("Location:login.php");
	}
	else
	{
		$msg="Invalid Otp";
	}
	
	$msg='';
}
?>
<?php include('header.php');?>
<form method="post">
<table width="95%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="main_heading">Set New Password</td>
  </tr>
  <tr>
    <td>
    <table width="50%" border="0" align="center" cellpadding="15" cellspacing="15">
      <tr>
        <td align="right" class="normal_text">OTP</td>
        <td><input name="otp" type="text" class="textbox" id="otp" /></td>
      </tr>
      <tr>
        <td align="right" class="normal_text">New Password</td>
        <td><input name="npass" type="password" class="textbox" id="npass" /></td>
      </tr>
      <tr>
        <td align="right" class="normal_text">Confirm password</td>
        <td><input name="cpass" type="password" class="textbox" id="cpass" /></td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td align="center"><?php echo $msg;?></td>
  </tr>
  <tr>
    <td align="center"><input name="submit" type="submit" class="buttonstyle" id="submit" value="Submit" /></td>
  </tr>
</table>
</form>
<?php include('footer.php');?>