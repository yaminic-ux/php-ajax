<?php
$con=mysqli_connect("localhost","root","","ajaxdata") or die("connection failed");
$sql="SELECT * from emp_table";
$result= mysqli_query($con,$sql) or die("SQL query failed!");

    $output ="";
	if(mysqli_num_rows($result) > 0){
		$output.='<table border="1" width="100%" cellspacing="0" cellpadding="10px">
					<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Delete Row</th>
					<th>Edit Row</th>
					</tr>';
					while($row=mysqli_fetch_assoc($result)){
						/*	echo "<pre>";
							echo print_r($row);*/
						$output.="<tr>
							<td align='center'>{$row["id"]}</td><td align='center'>{$row["fname"]} {$row["lname"]}</td><td align='center'><a class='deleteBtn' data-id='{$row["id"]}'>Delete</button></a></td>
								<td align='center'><a class='editBtn' data-id='{$row["id"]}'>Edit</button></a></td>
						</tr>";

					}
					$output.="</table>";
					mysqli_close($con);
					echo $output;
	}else{
		echo "results not found";

	}

?>