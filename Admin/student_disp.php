<?php 
session_start();
include("../connectdb.php");
	$sql= mysqli_query($con,"select * from student_detail where Roll_no='$_GET[s_no]'");
	$sq= mysqli_query($con,"select * from fee_details where Roll_no='$_GET[s_no]'");
	$s= mysqli_query($con,"select code from reg_code where Roll_no='$_GET[s_no]'");
	$rs = mysqli_fetch_array($sql);
	$r = mysqli_fetch_array($sq);
	$ccode=$rs[3];
	$o= mysqli_query($con,"select * from courses where course_code='$ccode'");
	$t = mysqli_fetch_array($o);
	$cname=$t[0];
	$duration=$t[2];
	$cfee=$rs[5];
	$reg_code=$s;
	$Roll_no=$rs[0];
	$stname=$rs[1];
	$fanme=$rs[2];
	$gendre=$rs[8];
	$doa=$rs[6];
	$eml=$rs[10];
	$Receipt_no=$r[0];
	$amount=$r[2];
	$mop=$r[3];
	$bname=$r[4];
	$cno=$r[5];
?>
<?php include("header.php");?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="main_heading">Student's Admission Information</td>
  </tr>
  <tr>
    <td>
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td class="glossyheading">Course Detail</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="15" cellpadding="0">
          <tr>
            <td width="43%" align="right" class="normal_text">Course Code</td>
            <td width="57%"><input name="ccode" type="text" class="textbox" value="<?php echo $ccode;?>"/></td>
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
            <td><input name="stname" type="text" class="textbox" id="stname" value="<?php echo $stname;?>"/>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Father's Name</td>
            <td><input name="fname" type="text" class="textbox" id="fname" value="<?php echo $fname;?>"/>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Gender</td>
            <td class="normal_text"><input name="gender" type="text" class="textbox" value="<?php echo $gendre;?>"/></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Date Of Admission</td>
            <td><input name="doa" type="text" class="textbox" id="doa" value="<?php echo $doa;?>" /></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Email id</td>
            <td><input name="eml" type="text" class="textbox" id="eml" value="<?php echo $eml;?>"/></td>
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
            <td><input name="amount" type="text" class="textbox" id="amount" value="<?php echo $amount;?>"/>
            </td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Mode Of Payment</td>
            <td><input name="mop" type="text" class="textbox" id="mop" value="<?php echo $mop;?>"/></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Bank Name</td>
            <td><input name="bname" type="text" class="textbox" id="bname" value="<?php echo $bname;?>"/></td>
          </tr>
          <tr>
            <td align="right" class="normal_text">Cheque No.</td>
            <td><input name="cno" type="text" class="textbox" id="cno" value="<?php echo $cno;?>"/></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<?php include("footer.php");?>