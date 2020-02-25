<!DOCTYPE html>
<html>
<head>
  <title>View Student</title>
<?php include('staff_header.php'); ?>
<?php
      $sql = "SELECT COUNT(firstname) AS count_s FROM student WHERE c_id IN(SELECT c_id FROM subjecttakenbyteacher WHERE initials ='".$_SESSION['initials']."' AND year='".$_SESSION['year']."')";
                 $res_count =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $res_ct_arry1=mysqli_fetch_array($res_count);
      $sqls = "SELECT * FROM student INNER JOIN class ON class.c_id =student.c_id WHERE student.c_id IN(SELECT c_id FROM subjecttakenbyteacher WHERE initials ='".$_SESSION['initials']."') AND year='".$_SESSION['year']."' ORDER BY firstname";
        $runs    =mysqli_query($conn,$sqls);

      if(mysqli_num_rows($runs) ==0)
      {
          echo'<div class="alert alert-danger" style="text-align:center;">
          <a href="markPage.php" style="float: left; margin-left: 20px; margin-top: 0px;" class="btn btn-primary">Back</a>
              <p>No Student</p>
          </div>';
      }else
      {
  ?>


                  <div class="formheadera">Total Number Of Students <span style="border-radius: 200px; padding-left: 15px; padding-right: 15px; background-color: #FFB6C1;"><?php echo ($res_ct_arry1['count_s']); ?></span> </div>


 <div class="main-wrappings">
    <div style="margin: 0px auto; width: 70%; margin-top: 20px;">
      
       <table class="table table-bordered" id="myTable" style="margin-top: 0px;">
          <thead>
            <tr class="header">
               <th>ID</th>
               <th>STUDENT NAME</th>
              <th>REGISTRATION NUMBER</th>
               <th>FORM</th>
                <th>STREAM</th>
              <th>GENDER</th>
            </tr>
          </thead>
           <tbody>
           <?php
                     
              
                 $no1= 1;

                 while($result = mysqli_fetch_assoc($runs)){
                          
               echo" <tr>";
                    echo "<td>".$no1."</td>";
                    echo "<td>".$result['firstname']."  ".$result['othername']."</td>";
                    echo "<td>".$result['Reg_no']."</td>";
                    echo "<td>S ".$result['c_name']."</td>";
                    echo "<td>".$result['c_id']."</td>";
                     echo "<td>".$result['gender']."</td>";
                  $no1++;
               }

          ?>
          
        </tbody>
      </table>
  </div>
</div>
     
<?php } include('../../footer.php');?>
<script>
  $(document).ready(function(){
    $(".table").DataTable();
  });
</script>