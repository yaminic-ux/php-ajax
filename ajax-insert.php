<?php
$first_name = $_POST["fname"];
$last_name =$_POST["lname"];

$con = mysqli_connect("localhost","root","","ajaxdata") or die("Connection failed!");
$sql= "INSERT INTO emp_table(fname,lname) VALUES('$first_name','$last_name')";

/*mysqli_error($sql);*/
if(mysqli_query($con,$sql)){
	
	echo "1";
}else{
	echo "0";
}
?>