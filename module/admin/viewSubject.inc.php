<?php
  if(isset($_POST['subject']))
  {
    session_start();
    include_once('../../service/connection.php');
    $sqls = "SELECT * FROM subject INNER JOIN subjecttakenbyteacher ON subjecttakenbyteacher.sub_cod =subject.sub_cod WHERE subject.sub_cod IN (SELECT sub_cod FROM `subjecttakenbyteacher` WHERE initials IN(SELECT initials FROM teacher)) AND year ='".$_SESSION['year']."'";
        $runs    =mysqli_query($conn,$sqls) or die(mysqli_error($conn));
    if(mysqli_num_rows($runs)==0)
      {
        echo'<div class="alert alert-danger" style="text-align:center;">
              <p>Subject Not Yet Assigned To Teachers</p>
          </div>';
      }else
      {
          $output='';
          $output .='<table class="table table-bordered" id="myTable">
                <thead>
          <tr class="header">
               <th>NO</th>
               <th>SUBJECT NAME</th>
               <th>INITIALS</th>
                <th>STREAM</th>
              <th>DELETE</th>         
               </tr>
           </thead>
            <tbody>';
             
            $no1=1;
            while($result = mysqli_fetch_assoc($runs))
            {
              $output .='<tr>
                        <td>'.$no1.'</td>
                        <td>'.$result['name'].'</td>
                        <td>'.$result['initials'].'</td>
                        <td>'.$result['c_id'].'</td>
                        <td><button class="delete btn btn-danger" id="'.$result['id'].'">Delete<span  class="glyphicon glyphicon-remove"></span></button></td>  
                    </tr>';
                    $no1++;
            }
            $output .=' </tbody>
             </table>';
          echo $output;
     }
  }

?>
 <script>
$(document).ready(function(){
     $('.table').DataTable();
  });
</script>