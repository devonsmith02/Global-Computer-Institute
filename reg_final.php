<?php 
session_start();
include("connectdb.php");
if(isset($_POST['submit']))
{
	$sql=mysqli_query($con,"insert into login values ('$_SESSION[uid]','$_POST[cpass]','S')");

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
        <form method="post" enctype="multipart/form-data" >
          <table width="75%" border="0" align="center" cellpadding="15" cellspacing="0">
            <tr>
              <td align="right" class="normal_text">Students Name</td>
              <td><input name="stname" type="text" class="textbox" id="stname" value="<?php echo $_SESSION['name'];?>"/></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">Fathers Name</td>
              <td><input name="fname" type="text" class="textbox" id="fname" value="<?php echo $_SESSION['fathers name'];?>"/></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">Course Code</td>
              <td><input name="ccode" type="text" class="textbox" id="ccode" value="<?php echo $_SESSION['course code'];?>"/></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">Date of Admission</td>
              <td><input name="doa" type="text" class="textbox" id="doa" /></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">Password</td>
              <td><input name="password" type="password" class="textbox" id="password" /></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">Confirm Password</td>
              <td><input name="cpass" type="password" class="textbox" id="cpass" /></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">Profile Picture</td>
              <td><input type="file" name="dp" id="dp" /></td>
            </tr>
            <tr>
              <td align="right" class="normal_text">&nbsp;</td>
              <td><input name="submit" type="submit" class="buttonstyle" id="submit" value="submit" /></td>
            </tr>
          </table>
        </form>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<?php include("footer.php");?>