<?php 
session_start();
include('connectdb.php');
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"select Contact_no from student_detail where Roll_no='$_POST[roll_no]'");
include('way2sms-api.php');
$rs=mysqli_fetch_array($sql);
$c=$rs[0];
$n=rand(100000,999999);
$_SESSION['otp']=$n;
$_SESSION['roll_no']=$rs[0];
sendWay2SMS ( '9838462683' , 'Priyanshu02' , $c, $n);
header("Location:forgot_final.php");
}
?>
<?php include('header.php');?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="217" align="center" style="font-size:100px; font-family:Arial, Helvetica, sans-serif;">Forgot Password</td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="32%"><img src="images/forgot-password-problem.jpg" width="100%" height="270" /></td>
              <td width="68%">
              <form method="post">
              <table width="100%" border="0" cellspacing="15" cellpadding="15">
                <tr>
                  <td><table width="100%" border="0" cellspacing="15" cellpadding="15">
                    <tr>
                      <td align="right" class="normal_text">Roll No.</td>
                      <td><input name="roll_no" type="text" class="textbox" id="roll_no" /></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="center"><input name="submit" type="submit" class="buttonstyle" id="submit" value="Submit" /></td>
                </tr>
              </table>
              </form>
              </td>
            </tr>
          </table></td>
        </tr>
      </table>
<?php include('footer.php');?>