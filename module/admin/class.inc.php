
<?php 
$error_m='';
$success_m='';
 
   $msg='';
   
    include('../../service/connection.php');
  
  $sql ="SELECT * FROM class WHERE stream !=('Art') AND stream !='Science'";
  $result =mysqli_query($conn,$sql);
  $msg.='<option value="000">Select class</option>';
  while($row =mysqli_fetch_assoc($result))
  {
   $msg.='<option value='.$row['c_id'].' > Senior '.$row['c_name'].' ' .$row['stream'].'</option>';  
  }
  echo $msg;


?>