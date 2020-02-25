<!DOCTYPE html>
<html>
<head>
  <title>Add Notice </title>
  <style type="text/css">
  	.conn
  {
    width: 450px;
    border: 1px solid #ccc;
    background: #ECECFA;
    border-radius: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: #ECECFA;
  margin-bottom: 20px;
  }
  label
  {
    color:steelblue;
  }
  </style>
<?php include('admin_header.php'); ?>

<div class="formheadera" >Add Notice To Board</div>
    <div class="main-wrappings">
        <div class="container conn" style="width: 500px; margin: auto; margin-bottom: 20px; padding-bottom: 10px;">
          		<div id="data_result" style="text-align: center;"></div>
          		<form action="postNotice.inc.php" method="POST" id="noticeForm">
					<div class="form-group">
					<label>Notice</label>
					<textarea class="textarea" cols="70" rows="10" name="notices" id="notices"></textarea>
					</div>
				
					<button type="submit" class="btn btn-primary" name="submit_notice">Add Notice</button>
				</form>
      		</div> 
		</div>
	</div>
<script type="text/javascript" src="javascript/Class_Sld_Valids.js">

</script>


<?php include('../../footer.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		sendAndReviceData();
		function sendAndReviceData()
		{
			$(document).on("submit","#noticeForm",function(e){
				e.preventDefault();
				var notice  =$("#notices").val().trim();
				if(notice==null || notice=="" || notice==false)
				{
					$("#data_result").html("Please Enter Notice").css("color","red");
				}else
				{
					$("#data_result").html("").css("color","");
					$.ajax({
						url:"postNotice.inc.php",
						type:"POST",
						data:{notice:notice,submit_notice:1},
						success:function(d)
						{
							$("#data_result").html(d);
						}
					});
				}
			});
		}
	});
</script>


