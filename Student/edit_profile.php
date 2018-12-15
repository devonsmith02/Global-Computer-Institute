<?php include('header.php');
include('../connectdb.php');
$msg='';
if(isset($_POST['submit']))
{
	$sql=mysqli_query($con,"update student_detail set Father_name='$_POST[fname]', Email_id='$_POST[eml]',Contact_no='$_POST[cno]',Address='$_POST[add]' where Roll_no='$_SESSION[uid]' ") or die('ERROR'.mysqli_error($con));
	$msg='Info updated successfully';
}
$msg='';
?>

<table width="95%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="main_heading">Edit Your Profile</td>
  </tr>
  <tr>
    <td class="msg_error" align="center"><?php echo $msg;?></td>
  </tr>
  <tr>
    <td><form method="post">
    <table width="100%" border="0" cellspacing="15" cellpadding="15">
      <tr>
        <td align="right" class="normal_text">Father's Name</td>
        <td><input name="fname" type="text" class="textbox" id="fname" /></td>
      </tr>
      <tr>
        <td align="right" class="normal_text">Email Id</td>
        <td><input name="eml" type="text" class="textbox" id="eml" /></td>
      </tr>
      <tr>
        <td align="right" class="normal_text">Contact No.</td>
        <td><input name="cno" type="text" class="textbox" id="cno" /></td>
      </tr>
      <tr>
        <td align="right" class="normal_text">Address</td>
        <td><textarea name="add" cols="45" rows="5" class="textarea" id="add"></textarea></td>
      </tr>
            <tr>
        <td align="right" class="normal_text"></td>
        <td><input name="submit" type="submit" class="buttonstyle" id="submit" value="Submit" /></td>
      </tr>
    </table></form>
    </td>
  </tr>
</table>

<?php include('footer.php');?>