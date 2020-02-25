<?php
	include('../../service/connection.php');
if(isset($_POST['present']))
{
	$result ="";
	$sid=$_POST['initials'];
	$attendmon = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$sid'";
	$resmon = mysqli_query($conn,$attendmon);
	$result.='<table id="myTable">';
	$result.="<tr class='header'> <th>All Present Dates:</th></tr>";
	if(mysqli_num_rows($resmon)==0)
	{

		$result.='<tr><td><div class="alert alert-danger" style="text-align:center;"><p>No Attendance</p>
          </div></td></tr>';
	}else
	{
		while($r=mysqli_fetch_array($resmon))
		{
		 $result.="<tr><td>".$r['date']."</div></td></tr>";

		}
	}
	$result.='</table>';
	echo $result;
}
if(isset($_POST['absent']))
{
	$result ="";
	 $sid=$_POST['initials'];
	$attendmon = "SELECT DISTINCT (date) FROM attendance WHERE  date not in (select DISTINCT(date) from attendance where attendedid='$sid')";
	$resmon =mysqli_query($conn,$attendmon) or die(mysqli_error($conn));
	$result.="<tr><th>Absent All Dates:</th></tr>";
	$result.='<table class="table table-bordered" id="myTable">';
	$result.="<tr class='header'><th>All Present Dates:</th></tr>";
	if(mysqli_num_rows($resmon)==0)
	{

		$result.='<tr><td><div class="alert alert-danger" style="text-align:center;"><p>No Attendance</p>
          </div></td></tr>';
	}else
	{
		while($r=mysqli_fetch_array($resmon))
		{
		 $result.="<tr><td>".$r['date']."</div></td></tr>";

		}
	}
	$result.='</table>';
	echo $result;
}
?>