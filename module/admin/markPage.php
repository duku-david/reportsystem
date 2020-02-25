<!DOCTYPE html>
<html>
<head>
  <title>Mark Page</title>
      <?php include('admin_header.php'); ?>

      <style type="text/css">
      	.Viewforms-container{
     margin: 0px auto;
  width: 530px;
  border: 1px solid grey;
  margin-top: 20px;
  margin-bottom: 20px;
  background-color: #fff;

}

.Viewforms {
     display: inline-flex;
}

.Viewforms .btn-primary{
  width: 100px;
  padding: 12px;
  text-align: center;
  margin: 5px;
  margin-top: 20px;
  margin-bottom: 20px;


}

      </style>

        
               <div class="formheadera" >View Marks Form</div>
              <div class="main-wrappings">
                
                    <div class="Viewforms-container">
                       
                            <div class="formheaderb"></div>
                             <?php global $msg; echo $msg;?>

                      <div class="Viewforms">
                          
                         <a href="viewMark.php?form=<?php echo base64_encode("One") ?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Senior One</a>
						         </div>
                     <div class="Viewforms">
                          
                         <a href="viewMark.php?form=<?php echo base64_encode("Two") ?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Senior Two</a>
                     </div><div class="Viewforms">
                          
                         <a href="viewMark.php?form=<?php echo base64_encode("Three") ?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Senior Three</a>
                     </div><div class="Viewforms">
                          
                         <a href="viewMark.php?form=<?php echo base64_encode("Four")?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Senior Four</a>
                     </div>
                          
                    </div>
            </div>

<?php include('../../footer.php');?>

 