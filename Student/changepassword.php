<?php include('header.php');
include('../connectdb.php');
$msg='';
if(isset($_POST['submit']))
{
	$sql=mysqli_query($con,"select password from login where password='$_POST[opass]'");
	if(mysqli_num_rows($sql)>0)
	{
		$sql=mysqli_query($con,"update login set password='$_POST[cnpass]'");
		$msg='Password updated successfully';
	}
	else
	{
		$msg='invalid password';
	}
	$msg='';	
}
?>
<table width="100%" border="0" cellspacing="15" cellpadding="15">
  <tr>
    <td align="center" class="main_heading">LOGIN</td>
  </tr>
  <tr>
    <td align="center"><?php echo $msg?></td>
  </tr>
  <tr>
    <td>
    <form method="post">
    <table width="100%" border="0" cellspacing="15" cellpadding="15">
  <tr>
    <td width="37%" align="right" class="normal_text">Old Password</td>
    <td width="63%"><input name="opass" type="password" class="textbox" id="opass" /></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">New Password</td>
    <td><input name="npass" type="password" class="textbox" id="npass" /></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Confirm New Password</td>
    <td><input name="cnpass" type="password" class="textbox" id="cnpass" /></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">&nbsp;</td>
    <td><input name="submit" type="submit" class="buttonstyle" id="submit" value="Submit" /></td>
  </tr>
</table>
</form>
</td>
  </tr>
</table>

<?php include('footer.php');?>