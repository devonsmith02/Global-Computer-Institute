<?php
	include("connectdb.php");
	$msg="";
	if(isset($_POST['Submit']))
	{
		$cd=date('d-m-y');	
		$sql=mysqli_query($con,"insert into feedback(name,email_id,contact_no,feedback,dof,status) values ('$_POST[name]','$_POST[email]','$_POST[cno]','$_POST[fb]','$cd','N')") or die('Error - : '.mysqli_error($con));
	 $msg='Your feedback is successfully saved';
	}
?>

<?php include("header.php");?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="110"><img src="images/cus1.jpg" width="100%" height="180" /></td>
  </tr>
  <tr>
    <td height="422" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="424" align="center" width="50%"><table width="96%" border="0" cellpadding="0" cellspacing="0" class="border_radius">
          <tr>
            <td height="33" align="center" class="main_heading">Contact Us</td>
          </tr>
          <tr>
            <td height="375" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"  height="375">
              <tr>
                <td width="2%">&nbsp;</td>
                <td width="98%" class="sub_heading">Head Office Assress</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="normal_text">Global Computer Institute,123 Lodhi Complex, New Delhi</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="sub_heading">Branch Office Address</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="normal_text">Global Computer Institute,542 Eldeco Colony Lucknow</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="sub_heading">Contact Person</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="normal_text">Vinod Kumar Singh Rana ( 7007266077 )</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="normal_text">Priyanshu Tiwari ( 7985255396 )</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="sub_heading">Email-Id</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="normal_text">contactus@gicst.com</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="sub_heading">Web Site Address</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="normal_text">www.gicst.com</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td align="center"><table width="96%" border="0" cellpadding="0" cellspacing="0" class="border_radius">
          <tr>
            <td height="33" align="center" class="main_heading">Feedback Form</td>
          </tr>
          <tr>
            <td height="375" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="36" align="center" class="msg"><?php echo $msg;?></td>
              </tr>
              <tr>
                <td height="339">
                <form method="post" onsubmit="return validate();" name="form">
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0"  height="339">
                  <tr>
                    <td width="36%" align="right" class="normal_text">Name</td>
                    <td width="3%">&nbsp;</td>
                    <td width="61%"><label for="name"></label>
                      <input name="name" type="text" class="textbox" id="name" /></td>
                  </tr>
                  <tr>
                    <td align="right" class="normal_text">Email-Id</td>
                    <td>&nbsp;</td>
                    <td><input name="email" type="text" class="textbox" id="email" /></td>
                  </tr>
                  <tr>
                    <td align="right" class="normal_text">Contact No</td>
                    <td>&nbsp;</td>
                    <td><input name="cno" type="text" class="textbox" id="cno" /></td>
                  </tr>
                  <tr>
                    <td align="right" class="normal_text">Feedback</td>
                    <td>&nbsp;</td>
                    <td><textarea name="fb" class="textarea" id="fb"></textarea></td>
                  </tr>
                  <tr>
                    <td align="right" class="normal_text">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input name="Submit" type="submit" class="buttonstyle" id="Submit" value="Submit" /></td>
                  </tr>
                </table>
                </form>
                </td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<?php include("footer.php");?>
<script>
	var chk_name=/^[A-Za-z ]{2,30}$/;
	var chk_cno=/^[0-9]{7,12}$/;
	var chk_msg=/^[A-Za-z0-9?,&\n%()=!.\- ]{10,500}$/;
	var chk_email=/^([a-zA-Z0-9\.])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})+$/;
	function validate()
	{
		var name=form.name.value;	
		var cno=form.cno.value;	
		var email=form.email.value;
		var msg=form.fb.value;
		var arr=[];
		if(!chk_name.test(name))
		{
			arr[arr.length]="Please enter a valid Name";	
		}
		if(!chk_email.test(email))
		{
			arr[arr.length]="Please Enter a Valid Email-Id";
		}
		if(cno!="" && !chk_cno.test(cno))
		{
			arr[arr.length]="Please enter a valid Contact No.";	
		}
		if(!chk_msg.test(msg))
		{
			arr[arr.length]="Please Enter a Valid Message of min 10 Char.";
		}
		if(arr.length>0)
		{
			var msg="Please enter the following detail properly...\n";
			for(var i=0;i<arr.length;i++)
			{
				msg+="\n"+(i+1)+". "+arr[i];	
			}
			alert(msg);
			return false;
		}
		return true;
	}
</script>