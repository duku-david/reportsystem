<!DOCTYPE html>
<html>
<head>
  <title>Staff Page</title>
  <?php include('staff_header.php'); ?>
 
<div class="formheadera" >Select Class and Subjects</div>
<div class="main-wrappings">
   <div id="sub_output"></div>
    <div class="container form2 w-100 mb-2" style="width: 500px; margin: auto; margin-bottom: 20px;">
   

<?php include'../../service/connection.php'; ?>

      <div id="data_result"></div>
        <div class="formheaderb">O LEVEL</div>
          <form id="studentform" method="post" action="marksheet.php">
              <div class="form-group">
                 <label>Subject</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <select  name="subject" id="subject" class="form-control">
                            <option value="000">Select Subject</option>

                            <?php
            
                $sql ="SELECT * FROM subject WHERE sub_cod IN (SELECT sub_cod FROM subjecttakenbyteacher WHERE initials='".$_SESSION['initials']."')";
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
                 <label>Form/Class Stream</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <select  name="stream" id="stream" class="form-control">
                        
                      </select>
                  </div>
                  <p id="form_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Teachers Initials</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" readonly="" value="<?php echo strtoupper($_SESSION['initials'])?>" name="initials" id="initials" class="form-control">
                </div>
                 <input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username'];?>" class="form-control" >
                <p id="initial_error" align="center"></p>
            </div>
            <div class="button-group">
                <button class="btn btn-warning" type="submit" name="omarksheet" value="omarksheet">Open Mark Sheet<i class="glyphicon glyphiconon-userhicon-send"></i></button>
           </div>
        </form> 
      </div> 
</div>
</div>


<script type="text/javascript" src="javascript/Class_Sld_Valids.js">

</script>


<?php include('../../footer.php');?>

<script type="text/javascript">
  $(document).ready(function(){

      $(document).on("blur","#subject",function(){
         var subject = $("#subject");
         var subject_e =$("#subject_error");
         subjects(subject,subject_e);
    });

    $(document).on("blur","#stream",function(){
          var stream = $("#stream");
          var stream_e =$("#form_error");
          form(stream,stream_e);
    });
    $(document).on("input","#initials",function(){
          var initial=$("#initials");
          var initial_e=$("#initial_error");
          initials(initial,initial_e);


    });
    
      $(document).on("submit","#studentform",function(e){
           e.preventDefault();
            var subject = $("#subject");
            var subject_e =$("#subject_error");
            var stream = $("#stream");
            var stream_e =$("#form_error");
            var initial=$("#initials");
            var initial_e=$("#initial_error");
              if(subject.val()=="000"){
                subject.css("border","0.5px solid red");
                subject_e.html("please Select Subject").css("color","red");
                return false;
              } else if(stream.val()=="000"){
                stream.css("border","0.5px solid red");
                stream_e.html("please Select Class").css("color","red");
                return false;
              }else if(initial.val()==""){
                initial.css("border","0.5px solid red");
                initial_e.html("please enter Initials").css("color","red");
                return false;
              }else
              {  
                var subject = $("#subject").val();
                var stream = $("#stream").val();
                var initial=$("#initials").val();
                var username=$("#username").val();
                 $.ajax({
                    url:"marksheet.php",
                    type:"POST",
                    data:{
                      subject:subject,
                      stream:stream,
                      initials:initial,
                      username:username
                    },
                    success:function(d){
                        $("#data_result").html(d);
                     
                    }
                 });
              }

      });
     
      
  });
  Class_Option();
   function Class_Option()
        {
           var c_id='class';
           $(document).on("change","#subject",function(){
              var sub_cod =$("#subject").val();
                $.ajax({
                     url:"onChangeClass.php",
                     type:"POST",
                     data:{c_id:c_id,sub_cod:sub_cod},
                     success:function(d)
                     {
                       $("#stream").html(d);
                     }
              });  
           });
          
        }
   
    </script>
