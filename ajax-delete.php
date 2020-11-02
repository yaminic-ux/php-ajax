<?php
$emp_id = $_POST["eid"];

$con = mysqli_connect("localhost","root","","ajaxdata") or die("Connection failed!");
$sql= "DELETE from emp_table WHERE id = {$emp_id}";

/*mysqli_error($sql);*/
if(mysqli_query($con,$sql)){
	
	echo "1";
}else{
	echo "0";
}
?>