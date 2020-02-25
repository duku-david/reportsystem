
<?php 
$error_m='';
$success_m='';
 
   $msg='';
   
    include('../../service/connection.php');
    session_start();
  
  $sql ="SELECT * FROM class WHERE stream !=('Art') AND stream !='Science' AND c_id IN(SELECT c_id FROM student WHERE year='".$_SESSION['year']."')";
  $result =mysqli_query($conn,$sql);
  $msg.='<option value="000">Select class</option>';
  while($row =mysqli_fetch_assoc($result))
  {
   $msg.='<option value='.$row['c_id'].' > Senior '.$row['c_name'].' ' .$row['stream'].'</option>';  
  }
  echo $msg;


?>