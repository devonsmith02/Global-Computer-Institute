<?php 
$c ="Select Course Code";
$n ="";
$d ="";
$f ="";
$m ="";
$ca ="";
$msg="";
$flag=1;
include("../connectdb.php");
if($_POST)
{
	$sql = mysqli_query($con,"select * from courses where course_code='$_POST[code]'");
	$rs=mysqli_fetch_array($sql);
	$c =$rs[0];
		$n =$rs[1];
		$d =$rs[2];
		$f =$rs[3];
		$m =$rs[4];
		$ca =$rs[5];
}
if(isset($_POST['Submit']))
{
	$sql = mysqli_query($con,"update courses set duration = '$_POST[dauration]', fees = '$_POST[fee]', modules= '$_POST[modules]', career= '$_POST[career]' where course_code='$_POST[code]'");
	$c ="Select Course Code";
$n ="";
$d ="";
$f ="";
$m ="";
$ca ="";
$msg="Course Modified Successfully";
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
    <td width="66%" class="normal_text">
      
      <select name="code" class="normal_text" id="code" onchange="submit()">
          <option value="<?php echo $c;?>"><?php echo $c;?></option>
        <?php
			$sql = mysqli_query($con,"select course_code from courses order by course_code");
			while($rs=mysqli_fetch_array($sql))
			{
				
				?>
                <option value="<?php echo $rs[0];?>"><?php echo $rs[0];?></option>
                <?php
			}
		
			?>
        
          
          
        </select>
      </td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Course Name</td>
    <td class="normal_text"><label for="course_name"></label>
      <input name="course_name" type="text" class="textbox" id="course_name" value="<?php echo $n?>" readonly="readonly"/>
      <div id="name" class="msg_error"></div></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Duration</td>
    <td class="normal_text"><label for="code"></label>
      <div id="d" class="msg_error">
        <input name="duration" type="text" class="textbox" id="duration" value="<?php echo $d;?>" readonly="readonly" />
      </div></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Course Fee</td>
    <td class="normal_text"><label for="fee"></label>
      <select name="duration2" class="normal_text" id="duration2" value="<?php echo $d?>">
        <option value="<?php echo $d;?>"><?php echo $d;?></option>
          <option value="1 Year">1 year</option>
          <option value="2 Year">2 Years</option>
          <option value="3 year">3 Years</option>
          <option value="4 Year">4 Years</option>
          <option value="5 Years">5 Years</option>
      </select>
      <div id="fees" class="msg_error"></div></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Modules</td>
    <td class="normal_text"><label for="modules"></label>
      <textarea name="modules" cols="45" rows="5" readonly="readonly" class="textarea" id="modules" ><?php echo $m; ?></textarea></td>
  </tr>
  <tr>
    <td align="right" class="normal_text">Career</td>
    <td class="normal_text"><label for="career"></label>
      <textarea name="career" cols="45" rows="5" readonly="readonly" class="textarea" id="career" ><?php echo $ca; ?></textarea></td>
  </tr>
  <tr>
    <td height="86">&nbsp;</td>
    <td><input name="Submit" type="submit" class="buttonstyle" id="Submit" value="Submit" /></td>
  </tr>
</table>
</form>
<?php include("footer.php");?>
<script>
var chk_code = /^[0-9A-Za-z]{2,7}$/;
var chk_name = /^[A-Za-z]{2,10}$/;
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
