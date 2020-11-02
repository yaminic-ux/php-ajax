	<!DOCTYPE html>
	<html>
	<head>
		<title>Insert data</title>
		<style type="text/css">
			
			form#thisform {
			    display: flex;
			    align-items: center;
			    justify-content: space-between;
			}
			div#errormessage {
			    color: red;
			    position: absolute;
			    top: 0;
			    left: 0;
			    right: 0;
			    bottom: 0;
			}
			div#successmessage {
			    color: green;
			    position: absolute;
			    top: 0;
			    left: 0;
			    right: 0;
			    bottom: 0;
			}
			table {
			    position: relative;
			    z-index: 99;
			}
		</style>
	</head>
	<body>
	
		<table border="0" width="500" height="100%" cellspacing="0">
			<tr >
				<td colspan="3" align="center"><input type="button" id="loaddata" value="Load Data"></td>
			</tr>
			<tr><td>
				<form id="thisform">
				First Name<input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Last Name<input type="text" id="lname">
				<input type="submit" name="btn" id="insertbtn">
				</form>
				</td>
			</tr>
			<tr>
				<td colspan="3" id="results">
				</td>
			</tr>
		</table>
	  <div id="errormessage"></div>
	  <div id="successmessage"></div>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script type="text/javascript" src="js/script.js"></script>
	</body>
	</html>