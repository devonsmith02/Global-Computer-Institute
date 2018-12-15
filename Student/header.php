<?php
session_start();
include('../connectdb.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css"/>
<script type="text/javascript" src="../css/jquery-latest.min.js"></script>
<script type="text/javascript" src="../css/script_menu.js"></script>
<link rel="stylesheet" type="text/css" href="../css/styles_menu.css"/>
</head>
<body>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td><img src="../images/LOGO.gif" width="100%" height="187" /></td>
  </tr>
  <tr>
    <td height="675"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="16%" height="671" style="background-color:#222222;" valign="top"><div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li><a href='mycourses.php'><span>My Courses</span></a>
   </li>
   <li><a href='#'><span>Fee Details</span></a>
   </li>
   <li><a href='edit_profile.php'><span>Edit Profile</span></a>
   </li>
   <li ><a href='changepassword.php'><span>Change Password</span></a></li>
   <li class='last'><a href='#'><span>Logout</span></a></li>
</ul>
</div></td>
        <td width="84%" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr style="background-color:#F90">
    <td class="normal_text">User Id-<?php echo $_SESSION['uid'];?></td>
    <td class="normal_text">Students Name-<?php echo $_SESSION['name'];?></td>
    <td class="normal_text">Course Code-<?php echo $_SESSION['course_code'];?></td>
  </tr>
</table>
</td>
          </tr>
          <tr>
            <td valign="middle">