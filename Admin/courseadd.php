<?php 
$c ="";
$n ="";
$d ="Select Duration";
$f ="";
$m ="";
$ca ="";
$msg="";
$flag=1;
include("../connectdb.php");
if(isset($_POST['submit']))
{
	$sql = mysqli_query($con,"select course_code from courses where course_code='$_POST[code]'");
	if(mysqli_num_rows($sql)==0)
	{
		$sql = mysqli_query($con,"select course_name from courses where course_name='$_POST[course_name]'");
		if(mysqli_num_rows($sql)==0)
		{
			 $sql=mysqli_query($con,"insert into courses values ('$_POST[code]','$_POST[course_name]','$_POST[duration]','$_POST[fee]','$_POST[modules]','$_POST[career]')") or die('Error'.mysqli_error($con));
			 $msg="Your deatails saved sucsesfully";
			 $c ="";
			$n ="";
			$d ="Select Duration";
			$f ="";
			$m ="";
			$ca ="";			 
		}
		else
		{
			$flag=0;
			$msg="Course Name already exists";
			
			
		}
	}
	else
	{
		$flag=0;
		$msg="Course Code already exists";
	}
	if($flag==0)
	{
		$c =$_POST['code'];
		$n =$_POST['course_name'];
		$d =$_POST['duration'];
		$f =$_POST['fee'];
		$m =$_POST['modules'];
		$ca =$_POST['career'];
	}
}

?>
<?php include("header.php");?>
<form method="post" onsubmit="return validate();" name="form">
<table width="90%" border="0" align="center" cellpadding="15" cellspacing="0" class="border_radius">
  <tr>
    <td colspan="2" align="center" class="normal_text" ><?php echo $msg;?></td>
    </tr>
  <tr>
    <td width="34%" align="right" class="normal_text">Course Code</td>
    <td width="66%" class="normal_text"><label for="Code"></label>
      <input name="code" type="text" class="textbox" id="code" value="<?php echo $c;?>" />
      <div id="cod" class="msg_error"></div></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Course Name</td>
    <td class="normal_text"><label for="course_name"></label>
      <input name="course_name" type="text" class="textbox" id="course_name" value="<?php echo $n?>"/>
      <div id="name" class="msg_error"></div></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Duration</td>
    <td class="normal_text"><label for="duration"></label>
      <select name="duration" class="normal_text" id="duration" value="<?php echo $d?>">
        <option>Select Duration</option>
        <option>1 year</option>
        <option>2 Years</option>
        <option>3 Years</option>
        <option>4 Years</option>
        <option>5 Years</option>
      </select>
      <div id="d" class="msg_error"></div></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Course Fee</td>
    <td class="normal_text"><label for="fee"></label>
      <input name="fee" type="text" class="textbox" id="fee" value="<?php echo $f?>"/>
      <div id="fees" class="msg_error"></div></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Modules</td>
    <td class="normal_text"><label for="modules"></label>
      <textarea name="modules" cols="45" rows="5" class="textarea" id="modules" value="<?php echo $m ?>"></textarea></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Career</td>
    <td class="normal_text"><label for="career"></label>
      <textarea name="career" cols="45" rows="5" class="textarea" id="career" value="<?php echo $ca?>"></textarea></td>
  </tr>
  <tr>
    <td height="86">&nbsp;</td>
    <td><input name="submit" type="submit" class="buttonstyle" id="submit" value="Submit" /></td>
  </tr>
</table>
</form>
<?php include("footer.php");?>
<script>
var chk_code = /^[0-9A-Za-z]{2,7}$/;
var chk_name = /^[A-Za-z ]{2,35}$/;
var chk_fee = /^[0-9]{3,8}$/;
function validate()
{
	var code = form.code.value;
	var name = form.course_name.value;
	var dur = form.duration.value;
	var fee = form.fee.value;
	var flag = 1;
	if(!chk_code.test(code))
	{
		document.getElementById('cod').innerHTML="Please enter a valid code";
		if(flag==1)
			form.code.focus();
		flag=0;
	}
	else
		document.getElementById('cod').innerHTML="";
	if(!chk_name.test(name))
	{
		document.getElementById('name').innerHTML="Please enter a valid name";
		if(flag==1)
			form.course_name.focus();
		flag=0;
	}
	else
		document.getElementById('name').innerHTML="";
	if(dur=="Select Duration")
		{
		document.getElementById('d').innerHTML="Please select something!!";
		if(flag==1)
			form.dur.focus();
		flag=0;
	}
	else
		document.getElementById('d').innerHTML="";
	if(!chk_fee.test(fee))
	{
		document.getElementById('fees').innerHTML="This is not our fee!!";
		if(flag==1)
			form.fee.focus();
		flag=0;
	}
	else
		document.getElementById('fees').innerHTML="";
	if(flag==1)
		return true;
	else
		return false;
}
</script>
