<?php
if(isset($_POST['c_id']))
{
	require_once "../../service/connection.php";
	session_start();
	$msg ='';
	$sub_cod =$_POST['sub_cod'];
   	$sql="SELECT * FROM class WHERE c_id IN (SELECT c_id FROM subjecttakenbyteacher WHERE initials='".$_SESSION['initials']."' AND sub_cod='".$sub_cod."' AND year='".$_SESSION['year']."')";
   	$result =mysqli_query($conn,$sql);
 	if(mysqli_num_rows($result) > 0)
 	{
 		$msg.='<option value="000">Select class</option>';
 		while($row =mysqli_fetch_assoc($result))
		{
		   $msg.='<option value='.$row['c_id'].' > Senior '.$row['c_name'].' ' .$row['stream'].'</option>';  
		}	
 	}else
 	{
 		$msg.='<option value="000">'.$sub_cod.'</option>';
 		// $msg.='<option value="000">You Are Not Assigned Class!</option>';
 	}
	
	echo $msg;
}
	


?>