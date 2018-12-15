<?php session_start() ;?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="css/jquery-1.9.1.js"></script>
  <script src="css/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/cal_style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
<style type="text/css">
<!--
.style2 {
	font-size: 30px;
	color: #FFFF00;
}
.style4 {font-size: 20px}
-->
</style>

<script>
var ck_name=/^[A-Za-z. ]{3,40}$/;
var ck_email=/^([a-zA-Z0-9\.])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})+$/;
var ck_phone=/^[0-9\-]{7,12}$/;
var ck_exp=/^[A-Za-z0-9?,&\n%()=!. ]{10,500}$/;
var ck_dob=/^[0-9\-]{10,15}$/;
function validate(form)
{
	var name=form.name.value;
	var email=form.email.value;
	var contact=form.cno.value;
	var add=form.add.value;
	var qua=form.qua.value;
	var dob=form.dob.value;
	var gen=form.gen.value;
	if(!ck_name.test(name))
		{
			document.getElementById('fn').innerHTML = "You Must Enter a Valid Name";
  			form.name.focus();
  			return(false);
		}
		else
  			document.getElementById('fn').innerHTML = "";

	if(!ck_email.test(email))
		{
			document.getElementById('em').innerHTML = "You Must Enter a Valid Email-Id";
  			form.email.focus();
  			return(false);
		}
		else
  			document.getElementById('em').innerHTML = "";
		
				
		if(!ck_phone.test(contact))
		{
			document.getElementById('cn').innerHTML = "You Must Enter a Valid Contact No";
  			form.cno.focus();
  			return(false);
		}
		else
  			document.getElementById('cn').innerHTML = "";
		if(gen=="")
		{
			document.getElementById('gn').innerHTML = "You Must Select a Valid Gender";
  			return(false);
		}
		else
  			document.getElementById('gn').innerHTML = "";
		
		if(!ck_dob.test(dob))
		{
			document.getElementById('db').innerHTML = "You Must Enter a Valid Date of Birth";
  			form.dob.focus();
  			return(false);
		}
		else
  			document.getElementById('db').innerHTML = "";		
		if(qua=="Select Qualification")
		{
			document.getElementById('qu').innerHTML = "You Must Select a Valid Qualification";
  			form.qua.focus();
  			return(false);
		}
		else
  			document.getElementById('qu').innerHTML = "";
		if(!ck_exp.test(add))
		{
			document.getElementById('ad').innerHTML = "You Must Enter a Valid Address";
  			form.add.focus();
  			return(false);
		}
		else
  			document.getElementById('ad').innerHTML = "";
	
		
				
		
		return true;
	}
	
</script>
<script>
$('#demo').dcalendarpicker();
$('#calendar-demo').dcalendar(); //creates the calendar
</script>

<?php
	$n="";
	$e="";
	$cno="";
	$dob="";
	$add="";
	$q="Select Qualification";
	$msg="";
	include("connectdb.php");
	if(isset($_POST['Submit']))
	{
		$file_name=$_FILES["resume"]["name"];
		$file_tmp_name=$_FILES["resume"]["tmp_name"];
		 $sql=mysqli_query($con,"select sno from career order by sno desc") or die('ERROR'.mysqli_error($con));
		 $rs=mysqli_fetch_array($sql);
		 $sno=$rs['sno']+1;
		 $ext=end(explode('.', $file_name));
		if($ext=="pdf" || $ext=="doc" || $ext=="docx" )
		{
				$new_file_name=$sno.".".$ext;
				$upload_path="cv/".$new_file_name;
				move_uploaded_file($file_tmp_name,$upload_path);
				$cd=date("d-m-y");
			    $sql=mysqli_query($con,"insert into career values ('$sno','$_POST[name]','$_POST[email]','$_POST[cno]','$_POST[gen]','$_POST[dob]','$_POST[qua]','$_POST[add]','$new_file_name','$cd')") or die('Error'.mysqli_error($con));
			    $msg='Your Career Detail is successfully saved';
				
			$e="";
			$cno="";
			$n="";
			$add="";
			$dob="";
			$q="Select Qualification";
		}	
		else
		{
			$n=$_POST['name'];
			$e=$_POST['email'];
			$cno=$_POST['cno'];
			$add=$_POST['add'];
			$dob=$_POST['dob'];
			$q=$_POST['qua'];
			$msg="Please Select a Valid CV File...";
		}
	 
	 }
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body topmargin="0">
<table width="82%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-style:solid;border-width:thin">
  <tr>
    <td><?php include("header.php");?></td>
  </tr>
  <tr>
    <td height="422"><table width="100%" height="423" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="48"><img src="images/career_banner.jpg" width="100%" height="150" /></td>
      </tr>
      <tr>
        <td height="266"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="45%" height="273"><img src="images/Career.jpg" width="100%" height="301" /></td>
            <td width="55%" align="center"><table width="96%" border="0" cellspacing="0" cellpadding="0"  style="border-style:solid;border-width:thin" bordercolor="#CCCCCC">
              <tr>
                <td height="286">
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="30"><div align="center"><?php echo $msg;?></div></td>
                  </tr>
                  <tr>
                    <td><form method="post" onsubmit="return validate(this);" name="form" enctype="multipart/form-data"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="290">
                      <tr>
                        <td width="36%"><div align="right" class="style3">Name</div></td>
                        <td width="3%">&nbsp;</td>
                        <td width="61%"><div align="left">
                          <input name="name" type="text" id="name" value="<?php echo $n; ?>" size="30%" />
                        </div><font color='red'> <DIV id="fn"> </DIV> </font></td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style3">Email-Id</div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <input name="email" type="text" id="email" value="<?php echo $e; ?>" size="30%" />
                        </div><font color='red'> <DIV id="em"> </DIV> </font></td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style3">Contact No</div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <input name="cno" type="text" id="cno" value="<?php echo $cno; ?>" size="30%" />
                        </div><font color='red'> <DIV id="cn"> </DIV> </font></td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style3">Gender</div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="37%" class="style3"><input name="gen" type="radio" id="radio" value="M" checked="checked" />
                                Male</td>
                              <td width="63%" class="style3"><input type="radio" name="gen" id="radio2" value="F" />
                                Female</td>
                            </tr>
                          </table>
                        </div><font color='red'> <DIV id="gn"> </DIV> </font></td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style3">Date of Birth</div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <input name="dob" type="text" id="datepicker" value="<?php echo $dob; ?>" size="30%" />
                        </div><font color='red'> <DIV id="db"> </DIV> </font></td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style3">Qualification</div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <select name="qua" id="qua">
                            <option value="<?php echo $q;?>"><?php echo $q;?></option>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                            <option value="B.Tech">B.Tech</option>
                            <option value="M.Tech">M.Tech</option>
                            <option value="PGDCA">PGDCA</option>
                            <option value="DCA">DCA</option>
                          </select>
                        </div><font color='red'> <DIV id="qu"> </DIV> </font></td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style3">Address</div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <textarea name="add" cols="30%" id="add"><?php echo $add; ?></textarea>
                        </div><font color='red'> <DIV id="ad"> </DIV> </font></td>
                      </tr>
                      <tr>
                        <td><div align="right" class="style3">Upload Your CV</div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <input type="file" name="resume" id="resume" />
                        </div></td>
                      </tr>
                      <tr>
                        <td><div align="right"></div></td>
                        <td>&nbsp;</td>
                        <td><div align="left">
                          <input type="submit" name="Submit" id="Submit" value="Submit" />
                        </div></td>
                      </tr>
                    </table></form></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php include("footer.php");?></td>
  </tr>
</table>
</body>
</html>