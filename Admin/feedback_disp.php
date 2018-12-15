<?php
include('../connectdb.php');
$sno=$_GET['s_no'];
$sql=mysqli_query($con,"select * from feedback where sno='$sno'");
$rs=mysqli_fetch_array($sql);
?>
<?php include("header.php");?>
<table width="100%" border="0" align="right" cellpadding="15" cellspacing="15" class="normal_text">
  <tr>
    <td width="24%" align="right" class="normal_text">Serial No.</td>
    <td width="76%"><input name="sno" type="text" class="textbox" id="sno" value="<?php echo $rs[0];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Name</td>
    <td><input name="name" type="text" class="textbox" id="name" value="<?php echo $rs[1];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Email Id</td>
    <td><input name="eml" type="text" class="textbox" id="eml" value="<?php echo $rs[2];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Contact No.</td>
    <td><input name="cno" type="text" class="textbox" id="cno" value="<?php echo $rs[3];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Feedback</td>
    <td><textarea name="fb" cols="45" rows="5" class="textarea" id="fb"><?php echo $rs[4];?></textarea></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Date</td>
    <td><input name="date" type="text" class="textbox" id="date" value="<?php echo $rs[5];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">&nbsp;</td>
    <td><input name="back" type="submit" class="buttonstyle" id="back" value="Back" /></td>
  </tr>
</table>

<?php include("footer.php");?>