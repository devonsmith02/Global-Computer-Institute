<?php
	include("connectdb.php");
	$msg="";
	if(isset($_POST['submit']))
	{
		$cd=date('d-m-y');	
		$sql=mysqli_query($con,"insert into career(name,email_id,contact_no,address,doe,status) values ('$_POST[name]','$_POST[eml]','$_POST[cno]','$_POST[add]','$cd','N')") or die('Error - : '.mysqli_error($con));
	 $msg='Your Information is successfully saved';
	}
?>

<?php include("header.php");?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="images/career_banner.jpg" width="100%" height="183" /></td>
        </tr>
        <tr>
          <td>
          
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="45%"><img src="images/Career.jpg" width="100%" height="680" /></td>
              <td valign="top" >
              <form method="post" enctype="multipart/form-data" name="form" onsubmit="return validate();">
              <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center" class="main_heading">Career Details
                  <div id="ms" class="msg"><?php echo $msg;?></div>
                  </td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="15" cellpadding="15">
                    <tr>
                      <td align="right" class="normal_text">Name</td>
                      <td><label for="name"></label>
                        <input name="name" type="text" class="textbox" id="name" />
                        <div id ="n" class="msg_error"></div>
                        </td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">Email Id</td>
                      <td><label for="eml"></label>
                        <input name="eml" type="text" class="textbox" id="eml" />
                        <div id ="e" class="msg_error"></div>
                        </td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">Contact No.</td>
                      <td><label for="cno"></label>
                        <input name="cno" type="text" class="textbox" id="cno" />
                        <div id ="c" class="msg_error"></div></td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">Gender</td>
                      <td class="normal_text"><input name="radio" type="radio" id="male" value="male" checked="checked" />
                        Male 
                          <input type="radio" name="radio" id="fmale" value="fmale" />
                          <label for="fmale">Female</label></td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">Date Of Birth</td>
                      <td><label for="dob"></label>
                        <input name="dob" type="text" class="textbox" id="dob" />
                        <div id ="d" class="msg_error"></div></td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">Qualification</td>
                      <td><label for="quli"></label>
                        <select name="quli" id="quli">
                          <option value="Select Option">Select Option</option>
                          <option>B.Tech</option>
                          <option>B.C.A.</option>
                          <option>M.C.A.</option>
                        </select>
                        <div id="q" class="msg_error"></div></td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">Address</td>
                      <td><label for="add"></label>
                        <textarea name="add" cols="45" rows="5" class="textarea" id="add"></textarea>
                        <div id ="ad" class="msg_error"></div></td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">Upload Yor CV</td>
                      <td><label for="Uplod"></label>
                        <input name="Uplod" type="file" id="Uplod" /></td>
                    </tr>
                    <tr>
                      <td align="right" class="normal_text">&nbsp;</td>
                      <td><input name="submit" type="submit" class="buttonstyle" id="submit" value="Submit" /></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
              </form>
              </td>
            </tr>
          </table>
          
          </td>
        </tr>
      </table>
<?php include("footer.php");?>
<script>
	var chk_name=/^[A-Za-z ]{2,30}$/;
	var chk_cno=/^[0-9]{7,12}$/;
	var chk_add=/^[A-Za-z0-9?,&\n%()=!.\- ]{10,500}$/;
	var chk_email=/^([a-zA-Z0-9\.])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})+$/;
	function validate()
	{
		var name=form.name.value;	
		var cno=form.cno.value;	
		var eml=form.eml.value;
		var add=form.add.value;
		var quali=form.quli.value;
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
		if(!chk_email.test(eml))
		{
			document.getElementById('e').innerHTML = "You Must Enter a Valid Email-Id";
  			if(flag==1)
				form.eml.focus();
  			flag=0;
		}
		else
  			document.getElementById('e').innerHTML = "";
		if(!chk_cno.test(cno))
		{
			document.getElementById('c').innerHTML = "You Must Enter a Valid contact no.";
  			if(flag==1)
				form.cno.focus();
  			flag=0;
		}
		else
  			document.getElementById('c').innerHTML = "";
		if(quali=="Select Option")
		{
			document.getElementById('q').innerHTML = "please select something!!!";
			if(flag==1)
				form.quli.focus();
  			flag=0;
		}
		else
  			document.getElementById('q').innerHTML = "";
		if(!chk_add.test(add))
		{
			document.getElementById('ad').innerHTML = "You Must Enter a Valid address";
  			if(flag==1)
				form.add.focus();
  			flag=0;
		}
		else
  			document.getElementById('ad').innerHTML = "";	
		if(flag==1)
			return true;	
		else
			return false;
	}
</script>