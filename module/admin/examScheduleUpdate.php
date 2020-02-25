<?php
	include("../../service/connection.php");
   if(isset($_POST['single']))
   {
      $sql ="SELECT * FROM subject INNER JOIN examschedule ON subject.sub_cod =examschedule.sub_cod WHERE id ='".$_POST['id']."'";
      $result  =mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0)
      {
        while ($row =mysqli_fetch_assoc($result)) 
        {
           echo json_encode($row);
        }
      }
   }

?>