<!DOCTYPE html>
<html>
	<head>
		<title>CS</title>

      <style type="text/css">
			#header {
				text-align:center;
				background-color:#4F81BD;
				color:white;
				padding:5px;
			}

			#divcenter {
				text-align:center;
			}

		</style>

		<?php
			$dbhost = '127.0.0.1';
			$dbuser = 'root';
			$dbpass = 'hokkaidou';
			$dbname = 'csdb';
			$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
			mysql_query("SET NAMES 'utf8'");
			mysql_select_db($dbname);

			//$sqlDep = "SELECT * from department ;";
			//$sqlYName = "SELECT * from yid ;";
			//$sqlCou = "SELECT * from course ;";
			//$sqlCoulist = "SELECT * from course_list ;";
			//$sqlUser = "SELECT * from user ;";


			$dName = $_POST['dName'];
			$yName = $_POST['yName'];
			$cName = $_POST['cName'];
			$$userName = $_POST['uName'];



			//$clistID = $_POST['clistID'];
			//$uid = $_POST["uid"];
			//$cou_id = $_POST['cou_id'];
			//$dName = $_POST['dName'];
			//$yName = $_POST['yName'];
			//$cName = $_POST['cName'];
			$userName = $_POST['uName'];
			mysql_query("insert into course_list(clistID,uid,cid,dName,yName,cName) values('".$clistID."', '".$uid."', '".$cid."', '".$dName."', '".$yName."', '".$cName."')");
			echo $userName[0];

		?>

	</head>

	<body>
   
      <div id="header">
        <h1>選課系統</h1>
        <p>learning.</p>
      </div>
      <br>

		<form>
		<div id="divcenter" ><label>Male</label>
				<table width="100%" align="center">
					<tr>
						<td align="center">
							歡迎 &nbsp; <?php echo$_POST['csuser']; ?> &nbsp; 使用者 <br/>
						</td>
					</tr>
				</table>
		</div>
			<div id="divcenter">
				<table width="100%" align="center">
					<tr>
						<td width="33%" align="center">
							課程<br/>
						</td>
						<td width="33%" align="center">
							年級<br/>
						</td>
						<td width="33%" align="center">
							系別<br/>
						</td>
					</tr>
					<tr>
						<td align="center">
							<?php echo$_POST['course']; ?><br/>
						</td>
						<td align="center">
							<?php echo$_POST['year']; ?><br/>
						</td>
						<td align="center">
							<?php echo$_POST['dep']; ?><br/>
						</td>
					</tr>
				</table>
				<br>
				<input type="submit" value="Confirm">
			</div>  
		</form>
	</body>
</html>






