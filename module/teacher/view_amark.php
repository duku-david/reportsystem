<!DOCTYPE html>
<html>
<head>
  <title>View Mark</title>
 <?php include('staff_header.php'); ?>
<?php include('grade_action.php');?>
 <?php
 if(isset($_GET['form']))
 {

     $form = base64_decode($_GET['form']);
    $sql="SELECT * FROM student INNER JOIN marksheet ON student.Reg_no = marksheet.Reg_no INNER JOIN class ON class.c_id =student.c_id WHERE term_id='".$_SESSION['term_id']."' AND c_name='".$form."' AND year='".$_SESSION['year']."' ORDER BY firstname";
          $runst    =mysqli_query($conn,$sql);
      if(mysqli_num_rows($runst) ==0)
      {
          echo'<div class="alert alert-danger" style="text-align:center;">
          <a href="mark_page.php" style="float: left; margin-left: 20px; margin-top: 0px;" class="btn btn-primary">Back</a>
              <p>No Student in '.$form.'</p>
          </div>';
      }else
      {
    ?>

    <div class="formheadera" >
      <div style="display: inline-block;">MarkSheets for Senior <?php echo $form?></div>
       <a href="mark_page.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
    </div>
    <div class="main-wrappings">
    <table id="myTable">
         

  <tr class="header">
    <thead>
         <th>No</th>
         <th>STUDENT NAMES</th>
         <th>ENG</th>
         <th>LIT</th>
         <th>MTC</th>
        <th>PHY</th>
        <th>CHEM</th>
        <th>BIO</th>
        <th>HIST</th>
        <th>GEO</th>
        <th>COMM</th>
        <th>CRE</th>
        <th>AGRI</th>
        <th>TOTAL</th>
        
        
     </thead>
  </tr>
  
  <tbody>
     <?php

                 $no1 = 1;

                 while($result = mysqli_fetch_assoc($runst)){
                     
                  echo"<tr>";
                    echo "<td>".$no1." </td>";
                     echo "<td>".strtoupper($result['firstname'])."  ".strtoupper($result['othername'])." </td>";
                       echo "<td>".$result['English']." </td>";
                      echo "<td>".$result['Fine_Art']." </td>";
                       echo "<td>".$result['Mathematics']." </td>";
                        echo "<td>".$result['Physics']." </td>";
                         echo "<td>".$result['Chemistry']." </td>";
                          echo "<td>".$result['Biology']." </td>";
                           echo "<td>".$result['History']." </td>";
                            echo "<td>".$result['Geography']." </td>";
                             echo "<td>".$result['Commerce']." </td>";
                             echo "<td>".$result['CRE']." </td>";
                              echo "<td>".$result['Agriculture']." </td>";
                              echo "<td>".Sum((int)$result['English'],(int)$result['Fine_Art'],(int)$result['Mathematics'],(int)$result['Physics'],(int)$result['Chemistry'],(int)$result['Biology'],(int)$result['History'],(int)$result['Geography'],(int)$result['Commerce'],(int)$result['CRE'],(int)$result['Agriculture'])." </td>";
                   
                  echo "</tr>";
                  $no1++;
                 }

    ?>
  </tbody>
  
</table>

<?php
    }
}
?>
</div>
<?php include('../../footer.php');?>