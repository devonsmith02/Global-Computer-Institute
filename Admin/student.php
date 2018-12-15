<?php 
$c="Select Course Code";
$cname="";
$duration="";
$cfee="";
$msg="";
$flag=1;
include("../connectdb.php");
$reg_code=rand(1000,9999)."-".rand(1000,9999);
if($_POST)
{
	$reg_code=$_POST['registration'];	
}
if($_POST)
{
	$sql= mysqli_query($con,"select * from courses where course_code='$_POST[ccode]'");
	$rs = mysqli_fetch_array($sql);
	$c=$rs[0];
	$cname=$rs[1];
	$duration=$rs[2];
	$cfee=$rs[3];
	$modules=$rs[4];
	$flag=0;
}
$sql=mysqli_query($con,"select Roll_no from student_detail order by Roll_no desc") or die('ERROR'.mysqli_error($con));
$rs=mysqli_fetch_array($sql);
$Roll_no=$rs['Roll_no']+1;
$sq=mysqli_query($con,"select Receipt_no from fee_details order by Receipt_no desc")or die('ERROR'.mysqli_error($con));
$r=mysqli_fetch_array($sq);
$Receipt_no=$r['Receipt_no']+1;
if(isset($_POST['Submit']))
{
	$flag=1;
	if($_POST['gender']=="M")
		$img="../Profile/male.jpg";
	else
		$img="../Profile/female.jpg";	
	$file_name=$_FILES["dp"]["name"];
	$file_tmp_name=$_FILES["dp"]["tmp_name"];
	$ext=end(explode('.', $file_name));
	$sno=$_POST['rollno'];
		if($ext=="jpeg" || $ext=="jpg"|| $ext="png" )
		{
			$new_file_name=$sno.".".$ext;
			$upload_path="../Profile/".$new_file_name;
			move_uploaded_file($file_tmp_name,$upload_path);
			$img="../Profile".$new_file_name;
		}
		else
		{
			$msg="Please select appropriate file";
			$flag=0;
		}
		if($flag==1)
		{
			
	$sql=mysqli_query( $con,"insert into student_detail values ('$_POST[rollno]','$_POST[stname]','$_POST[fname]','$_POST[ccode]','$modules','$_POST[cfee]','$_POST[doa]','','$_POST[gender]','$_POST[cno2]','$_POST[eml]','','$img')")or die('ERROR'.mysqli_error($con));
	$sql=mysqli_query( $con,"insert into fee_details values ('$_POST[reciept]','$_POST[rollno]','$_POST[amount]','$_POST[mop]','$_POST[bname]','$_POST[cno]','$_POST[doa]')")or die('ERROR'.mysqli_error($con));
	$sql=mysqli_query( $con,"insert into reg_code values('$_POST[rollno]', '$reg_code')")or die('ERROR'.mysqli_error($con));
		}
	$msg="Details Saved Successfuly";
	$c="Select Course Code";
	$cname="";
	$duration="";
	$cfee="";
	$msg="";	
}
?>
<?php include("header.php");?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="main_heading">Student's Admission Information</td>
  </tr>
  <tr>
    <td value="<?php echo $msg?>"></td>
  </tr>
  <tr>
    <td>
    <form method="post" name="form" onsubmit="return validate()" enctype="multipart/form-data">
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td class="glossyheading">Course Detail</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="15" cellpadding="0">
          <tr>
            <td width="43%" align="right" class="normal_text">Course Code</td>
            <td width="57%"><select name="ccode" size="1" class="textbox" id="ccode" onchange="submit()">
              <option value="<?php echo $c;?>"><?php echo $c;?></option>
        <?php
			$sql = mysqli_query($con,"select course_code from courses order by course_code");
			while($rs=mysqli_fetch_array($sql))
			{
				
				?>
                <option value="<?php echo $rs[0];?>"><?php echo $rs[0];?></option>
                <?php
			}
		
			?></select>
            <div id="c" class="msg_error"></div>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Course Name</td>
            <td><input name="cname" type="text" class="textbox" id="cname" value="<?php echo $cname;?>" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Duration</td>
            <td><input name="duration" type="text" class="textbox" id="duration" value="<?php echo $duration;?>"/></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Course Fee</td>
            <td><input name="cfee" type="text" class="textbox" id="cfee" value="<?php echo $cfee;?>"/></td>
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td class="glossyheading">Student's Personal Detail</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="15" cellpadding="0">
          <tr>
            <td width="43%" align="right" class="normal_text">Registration Code</td>
            <td width="57%"><input name="registration" type="text" class="textbox" id="registration" value="<?php echo $reg_code;?>"/></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Roll No.</td>
            <td><input name="rollno" type="text" class="textbox" id="rollno" value="<?php echo $Roll_no?>"/></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Student's Name</td>
            <td><input name="stname" type="text" class="textbox" id="stname" />
            <div id="sn" class="msg_error"></div>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Father's Name</td>
            <td><input name="fname" type="text" class="textbox" id="fname" />
            <div id="fn" class="msg_error"></div>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Gender</td>
            <td class="normal_text"><input name="gender" type="radio" id="male" value="M" checked="checked" />
              Male 
                <input type="radio" name="gender" id="fmale" value="F" />
                Female</td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Date Of Admission</td>
            <td><input name="doa" type="text" class="textbox" id="doa" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Email id</td>
            <td><input name="eml" type="text" class="textbox" id="eml" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Contact No.</td>
            <td><input name="cno2" type="text" class="textbox" id="cno2" />
            <div id="cn" class="msg_error"></div>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Upload Picture</td>
            <td><input type="file" name="dp" id="dp" /></td>
          </tr>
        </table></td>
      </tr>
      <tr class="glossyheading">
        <td class:"glossyheading">Fee Detail</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="15" cellpadding="0">
          <tr>
            <td width="42%" align="right" class="normal_text">Reciept Code</td>
            <td width="58%"><input name="reciept" type="text" class="textbox" id="reciept" value="<?php echo $Receipt_no?>"/></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Amount</td>
            <td><input name="amount" type="text" class="textbox" id="amount" />
            <div id="a" class="msg_error"></div>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Mode Of Payment</td>
            <td><input name="mop" type="text" class="textbox" id="mop" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Bank Name</td>
            <td><input name="bname" type="text" class="textbox" id="bname" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Cheque No.</td>
            <td><input name="cno" type="text" class="textbox" id="cno" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center"><input name="Submit" type="submit" class="buttonstyle" id="Submit" value="Submit" /></td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
</table>
<?php include("footer.php");?>
<script>
var chk_stname=/^[A-Za-z ]{5,30}$/;
var chk_fname=/^[A-Za-z ]{5,30}$/;
var chk_eml = /^[A-Za-z0-9.@_]{3,30}$/;
var chk_amount=/^[0-9]{5,9}$/;
var chk_cno=/^[0-9]{2,10}$/;
var flag =1;
function validate()
{
	var stname = form.stname.value;
	var fname = form.fname.value;
	var eml = form.eml.value;
	var ccode = form.ccode.value;
	var amount = form.amount.value;
	var cno = form.cno2.value;
	if(ccode=='Select Course Code')
	{
		document.getElementById('c').innerHTML="Please select something";
		if(flag==1)
			form.ccode.focus();
		flag=0;
	}
	else
		document.getElementById('c').innerHTML="";
	if(!chk_stname.test(stname))
	{
		document.getElementById('sn').innerHTML="Please enter a valid name";
		if(flag==1)
			form.stname.focus();
		flag=0;
	}
	else
		document.getElementById('sn').innerHTML="";
	if(!chk_fname.test(fname))
	{
		document.getElementById('fn').innerHTML="Please enter a valid name";
		if(flag==1)
			form.fname.focus();
		flag=0;
	}
	else
		document.getElementById('fn').innerHTML="";
	if(!chk_cno.test(cno))
	{
		document.getElementById('cn').innerHTML="Please enter a valid contact no.";
		if(flag==1)
			form.cno2.focus();
		flag=0;
	}
	else
		document.getElementById('cn').innerHTML="";
	if(!chk_amount.test(amount))
	{
		document.getElementById('a').innerHTML="Please enter a valid amount";
		if(flag==1)
			form.amount.focus();
		flag=0;
	}
	else
		document.getElementById('a').innerHTML="";
	if(flag==0)
		return false;
	else
		return true;
}
</script>