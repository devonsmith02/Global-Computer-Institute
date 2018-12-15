<?php 
session_start();
$reg="";
$rollno="";
$msg="";
include("connectdb.php");
if(isset($_POST['submit']))
{
	$sql=mysqli_query($con,"select * from login where user_id='$_POST[roll_no]'")or die('ERROR'.mysqli_error($con));
	if(mysqli_num_rows($sql)==0)
	{
		$sql=mysqli_query($con,"select * from reg_code where rollno='$_POST[roll_no]' and code='$_POST[reg_no]'")or die('ERROR'.mysqli_error($con));
		if(mysqli_num_rows($sql)>0)
		{
			$sql=mysqli_query($con,"select Name,Father_Name,Course_code from student_detail where Roll_no=$_POST[roll_no]");
			$rs=mysqli_fetch_array($sql);
			$_SESSION['uid']=$_POST['roll_no'];
			$_SESSION['name']=$rs[0];
			$_SESSION['fathers name']=$rs[1];
			$_SESSION['coursecode']=$rs[2];
			header("Location:reg_final.php");	
		}
		else
			$msg="User Already registered";
	}
	else
		$msg="user already registered";
}
?>

<?php include("header.php");?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="images/registration1.png" width="100%" height="300" /></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="46%"><img src="images/reg.jpg" width="100%" height="294" /></td>
        <td width="54%">
        <form method="post" >
        <table width="50%" border="0" align="center" cellpadding="15" cellspacing="0">
          <tr>
            <td align="right" class="normal_text">&nbsp;</td>
            <td ><?php echo $msg;?></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Registration No.</td>
            <td><input type="text" name="reg_no" id="reg_no" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Roll no.</td>
            <td><input type="text" name="roll_no" id="roll_no" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">&nbsp;</td>
            <td><input name="submit" type="submit" class="buttonstyle" id="submit" value="Submit" /></td>
          </tr>
        </table>
        </form>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?php include("footer.php");?>