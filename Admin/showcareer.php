<?php
	include("../connectdb.php");
	$sno='';
	if($_GET)
	{
		$sno=$_GET['s_no'];
		echo $sno;
		$sql=mysqli_query($con,"delete from career where serial_no='$sno'");

	}
?>
<?php include('header.php');?>

<table width="97%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><link rel="stylesheet" type="text/css" href="../css/pagination.css">
<div class="app-sidebar__overlay" data-toggle=""></div>
    <form method="post">
    <main >
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email-Id</th>
                    <th>Contact No</th>
                    <th>Select</th>
                  </tr>
                </thead>
                <tbody>
                <?php
				$n=0;

			$sql = mysqli_query($con,"select * from career order by serial_no desc");
			while($rs=mysqli_fetch_array($sql))
			{
				$n=$n+1;
				?>
                  <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $rs[1];?></td>
                    <td><?php echo $rs[2];?></td>
                    <td><?php echo $rs[3];?></td>
                    <td><div align="center"><a href="career_disp.php?s_no=<?php echo $rs['serial_no'];?>" style="text-decoration:none"><img src="../Images/edit.png" alt="Display Record" title="Display Record" border="0" /></a>
                           
                           &nbsp;&nbsp;<a href="showcareer.php?s_no=<?php echo $rs['serial_no'];?>"  style="text-decoration:none"><img src="../Images/del.png" alt="Delete Record" title="Delete Record" border="0" /></a></div></td>
                  </tr>
			<?php
			}
			?>
 
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main></form>
    <script src="../css/jquery-3.2.1.min.js"></script>

    <script src="../css/main.js"></script>

    <script src="../css/pace.min.js"></script>

    <script type="text/javascript" src="../css/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../css/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script></td>
  </tr>
</table>

<?php include('footer.php')?>