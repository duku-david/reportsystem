<?php
   include("../../service/connection.php");
  if (isset($_POST['exam'])) 
  {
    session_start();
    $sqls = "SELECT * FROM examschedule";
        $runs    =mysqli_query($conn,$sqls) or die(mysqli_error($conn));
     $sql ="SELECT name FROM subject WHERE sub_cod IN(SELECT sub_cod FROM examschedule)";
     $result1 =mysqli_query($conn,$sql);
     $row =mysqli_fetch_assoc($result1);

      $output='';
      if(mysqli_num_rows($runs) ==0)
      {
        $output.='<div class="alert alert-danger" style="text-align:center;">
              <p>No Examination Time Table Created"</p>
          </div>';
      }else
      {
      $output .='<table class="table table-bordered" id="myTable">
          <thead>
          <tr class="header">
               <th>NO</th>
              <th>DATE</th>
               <th>TIME</th>
               <th>SUBJECT</th>
              <th>CLASS</th>
              <th>EDIT</th>
              <th>DELETE</th>         
               </tr>
           </thead>
        <tbody>';
         
        $no1=1;
        while($result = mysqli_fetch_assoc($runs))
        {
                $output .='<tr>
                    <td>'.$no1.'</td>
                    <td>'.$result['date'].'</td>
                    <td>'.$result['time'].'</td>
                    <td>'.$result['sub_cod'].'</td>
                     <td>SENIOR '.$result['c_name'].'</td>
                    <td><button class="update btn btn-primary" id="'.$result['id'].'">Edit<span class="glyphicon glyphicon-open"></button></td>
                    <td><button class="delete btn btn-danger" id="'.$result['id'].'">Delete<span  class="glyphicon glyphicon-remove"></span></button></td>  
                </tr>';
                $no1++;
          }
       }
    $output .=' </tbody>
         </table>';
 echo $output;
}
?>
<script type="text/javascript">
  $(document).ready(function(){
     $('table').DataTable();
  });
</script>