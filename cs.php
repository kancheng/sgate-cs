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
			.container {
				overflow: hidden;
			}
			
			#div1, #div2, #div3 { 
			 	display: inline-block; 
			 	width: 600px; 
			 	line-height: 40px; 
			 	background-color: #fafafa; 
			 	text-align: center; 
			 	margin-left: 5px; 
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

			$sqlDep = "SELECT * from department ;";
			$sqlYName = "SELECT * from yid ;";
			$sqlCou = "SELECT * from course ;";
			$sqlUser = "SELECT * from user ;";
			$sqlCoulist = "SELECT * from course_list ;";

			$resultDep = mysql_query($sqlDep) or die('MySQL query error');
			$resultYName = mysql_query($sqlYName) or die('MySQL query error');
			$resultCou = mysql_query($sqlCou) or die('MySQL query error');
			$resultUser = mysql_query($sqlUser) or die('MySQL query error');
			$resultCoulist = mysql_query($sqlCoulist) or die('MySQL query error');

			$depName = array();
			$yName = array();
			$cName = array();
			$userId = array();
			$userName = array();
			$clistID = array();
			$clist_uid = array();
			$clist_cid = array();
			$clist_dName = array();
			$clist_yName = array();
			$clist_cName = array();


			while($row = mysql_fetch_array($resultDep)){
				//echo $row['dName'];
				array_push($depName, $row['dName']);
			}

			while($row = mysql_fetch_array($resultYName)){
				array_push($yName, $row['yName']);
			}

			while($row = mysql_fetch_array($resultCou)){
				array_push($cName, $row['cName']);
			}

			while($row = mysql_fetch_array($resultUser)){
				array_push($userId, $row['uid']);
				array_push($userName, $row['uName']);
			}

			while($row = mysql_fetch_array($resultCoulist)){
				array_push($clistID, $row['clistID']);
				array_push($clist_uid, $row['uid']);
				array_push($clist_cid, $row['cid']);
				array_push($clist_dName, $row['dName']);
				array_push($clist_yName, $row['yName']);
				array_push($clist_cName, $row['cName']);				
			}

			//echo $depName[0];
			//echo $yName[0];
			//echo $cName[0];
			//echo $userId[0];
			//echo $userName[0];
			//echo $clistID[0];
			//echo $clist_uid[0];
			//echo $clist_cid[0];
			//echo $clist_dName[0];
			//echo $clist_yName[0];
			//echo $clist_cName[0];

		?>

	</head>

	<body>
   
      <div id="header">
        <h1>選課系統</h1>
        <p>learning.</p>
      </div>

	<form action="csView.php" method="POST">

		<div id="divcenter" name="csuser" value="<?= $userName[0]?>">
			<p> 歡迎 &nbsp; <?php echo$userName[0]; ?> &nbsp; 使用者 </p>
		</div>
		<div id="divcenter">      
			<div id="div1">
				<p>系所</p>
				<select name="dep">
					<option value="<?= $depName[0]?>"> 
						<?= $depName[0]?>
					</option>
					<option value="<?= $depName[1]?>">
						<?= $depName[1]?>
					</option>
					<option value="<?= $depName[2]?>">
						<?= $depName[2]?>
					</option>
					<option value="<?= $depName[3]?>">
						<?= $depName[3]?>
					</option>
					<option value="<?= $depName[4]?>">
						<?= $depName[4]?>
					</option>
					<option value="<?= $depName[5]?>">
						<?= $depName[5]?>
					</option>
					<option value="<?= $depName[6]?>">
						<?= $depName[6]?>
					</option>
					<option value="<?= $depName[7]?>">
						<?= $depName[7]?>
					</option>
					<option value="<?= $depName[8]?>">
						<?= $depName[8]?>
					</option>
					<option value="<?= $depName[9]?>">
						<?= $depName[9]?>
					</option>
					<option value="<?= $depName[10]?>">
						<?= $depName[10]?>
					</option>
					<option value="<?= $depName[11]?>">
						<?= $depName[11]?>
					</option>
					<option value="<?= $depName[12]?>">
						<?= $depName[12]?>
					</option>
					<option value="<?= $depName[13]?>">
						<?= $depName[13]?>
					</option>
				</select>
			</div>

			<div  id="div2">      
				<p>年級</p>
				<select name="year">
					<option value="<?= $yName[0]?>">
						<?= $yName[0]?>
					</option>
					<option value="<?= $yName[1]?>">
						<?= $yName[1]?>
					</option>
					<option value="<?= $yName[2]?>">
						<?= $yName[2]?>
					</option>
					<option value="<?= $yName[3]?>">
						<?= $yName[3]?>
					</option>
				</select>
			</div>

			<div  id="div3">      
				<p>課程</p>
				<select name="course">
					<option value="<?= $cName[0]?>">
						<?= $cName[0]?>
					</option>
					<option value="<?= $cName[1]?>">
						<?= $cName[1]?>
					</option>
					<option value="<?= $cName[2]?>">
						<?= $cName[2]?>
					</option>
					<option value="<?= $cName[3]?>">
						<?= $cName[3]?>
					</option>
					<option value="<?= $cName[4]?>">
						<?= $cName[4]?>
					</option>
					<option value="<?= $cName[5]?>">
						<?= $cName[5]?>
					</option>
					<option value="<?= $cName[6]?>">
						<?= $cName[6]?>
					</option>
					<option value="<?= $cName[7]?>">
						<?= $cName[7]?>
					</option>
					<option value="<?= $cName[8]?>">
						<?= $cName[8]?>
					</option>
					<option value="<?= $cName[9]?>">
						<?= $cName[9]?>
					</option>
					<option value="<?= $cName[10]?>">
						<?= $cName[10]?>
					</option>
					<option value="<?= $cName[11]?>">
						<?= $cName[11]?>
					</option>
					<option value="<?= $cName[12]?>">
						<?= $cName[12]?>
					</option>
					<option value="<?= $cName[13]?>">
						<?= $cName[13]?>
					</option>
					<option value="<?= $cName[14]?>">
						<?= $cName[14]?>
					</option>
					<option value="<?= $cName[15]?>">
						<?= $cName[15]?>
					</option>
					<option value="<?= $cName[16]?>">
						<?= $cName[16]?>
					</option>
					<option value="<?= $cName[17]?>">
						<?= $cName[17]?>
					</option>
					<option value="<?= $cName[18]?>">
						<?= $cName[18]?>
					</option>
					<option value="<?= $cName[19]?>">
						<?= $cName[19]?>
					</option>
					<option value="<?= $cName[20]?>">
						<?= $cName[20]?>
					</option>
					<option value="<?= $cName[21]?>">
						<?= $cName[21]?>
					</option>
					<option value="<?= $cName[22]?>">
						<?= $cName[22]?>
					</option>
				</select>
			</div>
		</div>
		<div id="divcenter">
			<input type="submit" value="Submit">
		</div>
	</form>
	</body>
</html>






