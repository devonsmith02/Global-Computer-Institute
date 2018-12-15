<?php include('header.php');
$sql=mysqli_query($con,"select a.*,b.course_name from student_detail a,courses b where a.course_code=b.course_code and a.Roll_no='$_SESSION[uid]'");
$rs=mysqli_fetch_array($sql);
$fname=$rs[2];
$gender=$rs[8];
$cno=$rs[9];
$eml=$rs[10];
$add=$rs[11];
$doa=$rs[6];
$img=$rs[12];
$_SESSION['img']=$rs[12];
$cn=$rs['course_name'];?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="80%"><table width="100%" border="0" cellspacing="15" cellpadding="15">
  <tr>
    <td width="32%" align="right" class="normal_text">Father's Name</td>
    <td width="68%"><input name="fname" type="text" class="textbox" id="fname" value="<?php echo $fname;?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Course Name</td>
    <td><input name="cname" type="text" class="textbox" id="cname" value="<?php echo $cn;?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Gender</td>
    <td><input name="gender" type="text" class="textbox" id="gender" value="<?php echo $gender;?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Contact No.</td>
    <td><input name="cno" type="text" class="textbox" id="cno" value="<?php echo $cno;?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Email Id.</td>
    <td><input name="eml" type="text" class="textbox" id="eml" value="<?php echo $eml;?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Address</td>
    <td><input name="address" type="text" class="textbox" id="address" value="<?php echo $add;?>"/></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Date Of Admission</td>
    <td><input name="doa" type="text" class="textbox" id="doa" value="<?php echo $doa;?>"/></td>
  </tr>
</table></td>
    <td width="20%" valign="top" align="center"><a href="changedp.php"><img src="<?php echo $img;?>" height="150px" width="150px"/></a></td>
  </tr>
</table>

<?php include('footer.php')?>