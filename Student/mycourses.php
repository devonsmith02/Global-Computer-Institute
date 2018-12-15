<?php include('header.php');
include('../connectdb.php');
$sql=mysqli_query($con,"select * from courses where course_code='$_SESSION[course_code]'");
$rs=mysqli_fetch_array($sql);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="80%"><table width="100%" border="0" cellspacing="25" cellpadding="15">
  <tr>
    <td align="right" class="normal_text">Course Name</td>
    <td><input name="cname" type="text" class="textbox" id="cname" value="<?php echo $rs[1];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Duration</td>
    <td><input name="duration" type="text" class="textbox" id="duration" value="<?php echo $rs[2];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Fees</td>
    <td><input name="fees" type="text" class="textbox" id="fees" value="<?php echo $rs[3];?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Modules</td>
    <td><textarea name="modules" cols="45" rows="5" class="textarea" id="modules" value="<?php echo $rs[4];?>"></textarea></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Career</td>
    <td><textarea name="career" cols="45" rows="5" class="textarea" id="career" value="<?php echo $rs[5];?>"></textarea></td>
  </tr>
</table>
</td>
    <td width="20%"><img src="<?php echo $_SESSION['img'];?>"</td>
  </tr>
</table>

<?php include('footer.php');?>