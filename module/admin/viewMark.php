 <!DOCTYPE html>
<html>
<head>
  <title>View Mark</title>
 <?php include('admin_header.php');?>
   <?php
 if(isset($_GET['form']))
 {

          $form = base64_decode($_GET['form']);
        echo'<input type="hidden" id="classe" value="'.$_GET['form'].'">';
    include'generate.inc.php';
    include('grade_action.php');
    $sql="SELECT * FROM student INNER JOIN marksheet ON student.Reg_no = marksheet.Reg_no INNER JOIN class ON class.c_id =student.c_id WHERE term_id='".$_SESSION['term_id']."' AND c_name='".$form."' AND year='".$_SESSION['year']."' ORDER BY firstname";
          $runst    =mysqli_query($conn,$sql);
      if(mysqli_num_rows($runst) ==0)
      {
          echo'<div class="alert alert-danger" style="text-align:center;">
          <a href="markPage.php" style="float: left; margin-left: 20px; margin-top: 0px;" class="btn btn-primary">Back</a>
              <p>No Student in '.$form.'</p>
          </div>';
      }else
      {
    ?>
  <div class="formheadera">
    <div style="display: inline-block;">Mark Sheet for S <?php echo $form;?></div>
       <a href="markPage.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
        <button type="button" id="generate" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Generate Report</button>
        <button type="button" id="Report_sum" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Result Summary</button>
  </div>
   
       <table id="myTable">
            <thead>
              <tr class="header">
                 <th>No</th>
                 <th>STUDENT NAMES</th>
                 <th>STREAM</th>
                  <th>ENG</th>
                 <th>MTC</th>
                <th>PHY</th>
                <th>CHEM</th>
                <th>BIO</th>
                <th>HIST</th>
                <th>GEO</th>
                <th>COMM</th>
                 <th>AGRI</th>
                <th>CRE</th>
                 <th>FINE ART</th>
                <th>TOTAL</th>
              </tr>
          </thead>
          <tbody>
             <?php
             $no =1;
          while($result=mysqli_fetch_assoc($runst))
          {
          echo'<tr>
                <td>'.$no.'</td>
                
                <td>'.strtoupper($result['firstname']).'  '.strtoupper($result['othername']).'</td>
                 <td>'.$result['stream'].'</td>
                <td>'.$result['English'].'</td>
                <td>'.$result['Mathematics'].'</td>
                <td>'.$result['Physics'].'</td>
                <td>'.$result['Chemistry'].'</td>
                <td>'.$result['Biology'].'</td>
                <td>'.$result['History'].'</td>
                <td>'.$result['Geography'].'</td>
                <td>'.$result['Commerce'].'</td>
                <td>'.$result['Agriculture'].'</td>
                <td>'.$result['CRE'].'</td>
                <td>'.$result['Fine_Art'].'</td>
                <td>'.$result['total'].'</td>
                <input type="hidden" id="form" name="form" value='.$form.'>
                <td><button class="print btn btn-primary" id='.$result['stud_id'].'>Print</button></td>
               </tr>';
               $no++;
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
<script type="text/javascript">
   $(document).ready(function(){
     $(document).on("click",".print",function(){
         var id=$(this).attr("id");
         var form =$("#form").val();
         if(confirm("Confirm If you want to print")){
           window.location="single_student.php?id="+id+"&form="+form+"";
         }
     });
     $(document).on("click","#generate",function(){
       
      var form = $("#classe").val();
       window.location="generate.php?form="+form+"";
     });
     $(document).on("click","#Report_sum",function(){
      var form = $("#classe").val();
       window.location="Result_Summary.php?form="+form+"";
       
     });
     $("table").DataTable();
   });
</script>
