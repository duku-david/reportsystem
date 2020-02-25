<?php
  	require_once('../../service/connection.php');
    if(isset($_POST['update']))
    {
    	if(!empty($_POST['id']))
    	{
    		$error_m="";
	    	$success_m="";
	    	$date =$_POST['examDate'];
	    	$time =$_POST['examTime'];
	    	$sub_cod=$_POST['subject'];
	    	$c_id =$_POST['c_id'];
	    	$id   =$_POST['id'];
	    	$sql="UPDATE examschedule SET date='".$date."',time='".$time."',sub_cod='".$sub_cod."',c_name='".$c_id."' WHERE id='".$id."'";
	    	$result =mysqli_query($conn,$sql);
	    	if($result)
	    	{
	    		$success_m .="Examination Time Table Successfully Updated";
	    	}else
	    	{
	    		$error_m .="Examination Time Table Not Successfully Updated";
	    	}

    	}else
    	{
    		$error_m .="Error Occured";	
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