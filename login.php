<?php
session_start();
$msg="";
include("connectdb.php");
if(isset($_POST['login']))
{
	$sql=mysqli_query($con,"select profile from login where user_id='$_POST[username]' and password='$_POST[password]'")or die('ERROR'.mysqli_error($con));
	$rs=mysqli_fetch_array($sql);
	$profile=$rs[0];
	if(mysqli_num_rows($sql)>0)
	{
		if($profile=='A')
			header('Location:admin/student.php');
		else
		{
			$sql=mysqli_query($con,"select name,course_code,Father_name from student_detail where Roll_no='$_POST[username]'")or die('ERROR'.mysqli_error($con));
			$rs=mysqli_fetch_array($sql);
			$_SESSION['name']=	$rs[0];
			$_SESSION['course_code']=$rs[1];
			$_SESSION['uid']=$_POST['username'];
			header('Location:Student/index.php');
		}
	}
	else
	{
		$msg="invalid username or password";
		$msg="";
	}
}
?>
<?php include("header.php");?>
<form method="post">
      <table width="50%" border="0" align="center" cellpadding="15" cellspacing="0">
        <tr>
          <td align="center" class="main_heading">LOGIN</td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellspacing="15" cellpadding="0">
            <tr>
              <td width="41%" align="right" class="normal_text">USERNAME</td>
              <td width="59%"><input name="username" type="text" class="textbox" id="username" /></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">PASSWORD</td>
              <td><input name="password" type="password" class="textbox" id="password" /></td>
            </tr>
            <tr>
              <td align="right" class="normal_text"><?php echo $msg;?></td>
              <td align="left" class="normal_text"><a href="forgot.php">Forgot Password</a></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">&nbsp;</td>
              <td><input name="login" type="submit" class="buttonstyle" id="login" value="Login" /></td>
            </tr>
          </table></td>
        </tr>
      </table>
 </form>
<?php include("footer.php");?>