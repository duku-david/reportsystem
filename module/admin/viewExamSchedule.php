<!DOCTYPE html>
<html>
<head>
  <title>View Exam Schedule</title>
<?php include('admin_header.php'); ?>
 <!-- The Modal -->
<div class="modal fade" id="myModals" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="modal-title"></h4>
        <div id="output"></div>
        <button type="button" class="close" id="close">&times;</button>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal-body">
      <form id="form2" method="post" enctype="multipart/form-data">
            <div class="form-group">
                 <label>Date</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="examDate" id="examDate" class="form-control">
                 </div>
                 <p id="examDate_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Time</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="examTime" id="examTime" class="form-control">
                </div>
                <p id="examTime_error" align="center"></p>
            </div>
             <div class="form-group">
                 <label>Subject</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <select  name="subject" id="subject" class="form-control">
                            <?php
            
                $sql ="SELECT * FROM subject";
                $result =mysqli_query($conn,$sql);
                
                      while($row =mysqli_fetch_assoc($result)){
            ?>    
                      <option value="<?php echo $row['sub_cod'];?>"><?php echo $row['name'];?></option>
                       <?php } ?>
                      </select>
                  </div>
                   <p id="subject_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Class</label>
                <div class="input-group con"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select name="c_id" id="c_id"  class="form-control"> 
                  </select>
                  </div>
                    <p id="c_id_error" align="center"></p>
              </div>
      </div>
        
      <!-- Modal footer -->
      <div class="modal-footer">
          <input type="hidden" name="id" id="id">
         <button type="submit" class="btn btn-info">Update</button>
        <button type="button" class="btn btn-defualt" id="close1">Close</button>
      </div>
      </form>
    </div>
  </div>
</div> 

      
<div class="formheadera">Examination Time Table
 <!-- <a href="examSchedule.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a> --> 
</div>
<div class="main-wrappings">
   <div id="modal_output"></div>
     <div id="viewExamSchedule"></div>
</div>           
<?php include('../../footer.php');?>
 <script type="text/javascript" src="../../style/javascript/OAlevel_validate.js">
        
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
          $(document).on("click","#close",Close);
           $(document).on("click","#close1",Close);
           
           function Close()
           {
             $("#examDate").css("border-color","");
             $("#examDate_error").html("");
             $("#examTime_error").html("");
             $("#subject_error").html("");
             $("#c_id_error").html("");
             $("#examTime").css("border-color","");
             $("#subject").css("border-color","");
            $("#c_id").css("border-color","");

             $("#myModals").modal("hide");
              viewExamOutput();
           }
         viewExamOutput();
         function viewExamOutput()
        {
          $.ajax({
            url:"viewExamSchedule.inc.php",
            type:"POST",
            data:{exam:1},
            success:function(data){
              $("#viewExamSchedule").html(data);
            }
          });
        }
        
        //on form submit? updata olevel Student
        $("#form2").on("submit",function(event) {
          event.preventDefault();
           var id =$("#id");
          var id_error =$("#id_error");
         var examDate = $("#examDate");
         var examDate_error =$("#examDate_error");
         var examTime = $("#examTime");
         var examTime_error =$("#examTime_error");
         var sub_cod  = $("#subject");
         var sub_cod_error =$("#subject_error");
          var c_id  = $("#c_id");
          var c_id_error =$("#c_id_error");
        
         if (examDate.val().trim()=="")
         {
           examDate.css("border","0.5px solid red");
           examDate_error.html("Please Enter Date For Exam").css("color","red");
           return false;
         }else if (examTime.val().trim()=="")
         {
           examTime.css("border","0.5px solid red");
           examTime.html("Please Enter Exam Time").css("color","red");
           return false;
         }else if(sub_cod.val().trim()=="000")
         {
            sub_cod.css("border","0.5px solid red");
            sub_cod_error.html("Please Select Subject").css("color","red");
            return false; 
         }else if(c_id.val().trim()=="000")
         {
            c_id.css("border","0.5px solid red");
            c_id_error.html("Please Select Class").css("color","red");
            return false; 
         }else 
         {
            id.css("border","");
            id_error.html("");
            examDate.css("border","");
            examDate_error.html("");
            examTime.css("border","");
            examTime_error.html("");
             sub_cod.css("border","");
            sub_cod_error.html("");
            c_id.css("border","");
            c_id_error.html("");
  
            $.ajax({
                  url:"examUpdate.php",
                  type:"POST",
                  data:{update:1,id:id.val(),examDate:examDate.val(),examTime:examTime.val(),subject:sub_cod.val(),c_id:c_id.val()},
                  success:function(d)
                  {
                     $("#modal_output").html(d);
                     $("#myModals").modal("hide");
                     $.ajax({
                        url:"viewExamSchedule.inc.php",
                        type:"POST",
                        data:{exam:1},
                        success:function(data){
                          $("#viewExamSchedule").html(data);
                        }
                      });   
                  }
              });
          }
        });
      
      });
</script>
<script type="text/javascript">
  $(document).ready(function(){
      singleExam();
      Delete();
       aDelete();
   

    function singleExam() {
    $(document).on("click",".update",function(){
       var id = $(this).attr("id");
           $.ajax({
              url:"examScheduleUpdate.php",
              type:"POST",
              data:{single:1,id:id},
              dataType:"json",
              success:function(data)
              {
                  $(".modal-title").html("Update Examination Time Table");
                  $("#examDate").val(data.date);
                  $("#examTime").val(data.time);
                  $("#id").val(data.id);
                  $("label").css("color","steelblue");
                     var c_id='class';
                    $.ajax({
                       url:"classPicker.php",
                       type:"POST",
                       data:{c_id:c_id},
                       success:function(d)
                       {
                         $("#c_id").html(d);
                       }
                    });
                  $("#myModals").modal("show");             
              }
           });
    });
  }

    function Delete()
    {
      $(document).on("click",".delete",function(){
          var id = $(this).attr("id");
          if(confirm("do you ready want to delete?")){

             $.ajax({
                url:"deleteTimeTable.php",
                type:"POST",
                data:{delete:id},
                success:function(data){
                    $("#modal_output").html(data);
                    $.ajax({
                      url:"viewExamSchedule.inc.php",
                      type:"POST",
                      data:{exam:1},
                      success:function(data){
                        $("#viewExamSchedule").html(data);
                      }
                    });
                }
              });
          }
          
      });
    }
  });
  
$(document).ready(function(){
     $('.table').DataTable();
  });
</script>

