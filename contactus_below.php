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
                <td height="36" align="center">&nbsp;</td>
              </tr>
              <tr>
                <td height="339">
                <form method="post" onsubmit="return validate();" name="form">
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0"  height="339">
                  <tr>
                    <td width="36%" align="right" class="normal_text">Name</td>
                    <td width="3%">&nbsp;</td>
                    <td width="61%"><label for="name"></label>
                      <input name="name" type="text" class="textbox" id="name" />
                      <div id="n" class="msg_error"></div>
                      </td>
                  </tr>
                  <tr>
                    <td align="right" class="normal_text">Email-Id</td>
                    <td>&nbsp;</td>
                    <td><input name="email" type="text" class="textbox" id="email" />
                    <div id="e" class="msg_error"></div>
                    </td>
                  </tr>
                  <tr>
                    <td align="right" class="normal_text">Contact No</td>
                    <td>&nbsp;</td>
                    <td><input name="cno" type="text" class="textbox" id="cno" />
                    <div id="c" class="msg_error"></div>
                    </td>
                  </tr>
                  <tr>
                    <td align="right" class="normal_text">Feedback</td>
                    <td>&nbsp;</td>
                    <td><textarea name="fb" class="textarea" id="fb"></textarea>
                    <div id="f" class="msg_error"></div>
                    </td>
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
		var flag=1;
		if(!chk_name.test(name))
		{
			document.getElementById('n').innerHTML = "You Must Enter a Valid Name";
  			if(flag==1)
				form.name.focus();
  			flag=0;
		}
		else
  			document.getElementById('n').innerHTML = "";
		if(!chk_email.test(email))
		{
			document.getElementById('e').innerHTML = "You Must Enter a Valid Email-Id";
  			if(flag==1)
				form.email.focus();
  			flag=0;
		}
		else
  			document.getElementById('e').innerHTML = "";	
		if(flag==1)
			return true;	
		else
			return false;
	}
</script>