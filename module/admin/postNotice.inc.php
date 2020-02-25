<?php
if(isset($_POST['submit_notice']))
{
$notice=addslashes(trim($_POST['notice']));
	$error_m="";
	$success_m="";
	if(!empty($notice))
	{
		require_once('../../service/connection.php');
		$query3="INSERT INTO notice (notice) VALUES ('".$notice."')";
		if($sql=mysqli_query($conn,$query3))
		{
		$success_m.="Notice Posted";
			
		}else
		{
		$error_m.="error";
		}
	}else
	{
		$error_m.="Please Enter Text";	
	}

	if($error_m)
	    {
	      echo'<div class="alert alert-danger">
	              <button class="close" data-dismiss="alert" >&times;</button>
	               <p>'.$error_m.'</p>
	              </div>';
	    }else if($success_m)
	    {
	       echo'<div class="alert alert-success">
	              <button class="close" data-dismiss="alert" >&times;</button>
	               <p>'.$success_m.'</p>
	              </div>';
	    }

}

?>