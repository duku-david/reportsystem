<style type="text/css">
	#notice1{
		color: green;
		font-size: 20px;
		margin: 0px;
		padding: 0px;

	}
</style>
<?php
echo"<div id='notice1'>";
	echo"<marquee>";
require_once('../../service/connection.php');
$query4="SELECT notice FROM notice ORDER BY id DESC LIMIT 0,3";
$result=mysqli_query($conn,$query4);
if(mysqli_num_rows($result)==0)
{

	echo "There Is No Announcement ON The Board: ";

}else
{

	echo "New Announcement: ";
	while($row=mysqli_fetch_assoc($result)){
	echo "{$row['notice']} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 

	};
	
}
echo"</marquee></div>";	
?>