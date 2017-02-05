<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html;charset=UTF-8"http-equiv="Content-Type">
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

			#div1, #div2, #div3 { 
			 	display: inline-block; 
			 	width: 300px; 
			 	line-height: 40px; 
			 	background-color: #fafafa; 
			 	text-align: center; 
			 	margin-left: 5px; 
			}

		</style>
	</head>

	<body>

	<div id="header">
		<h1>選課系統管理</h1>
		<p>learning.</p>
	</div>
		</br>
	<table width="100%" align="center">
		<?php 
			include ("csconnectDB.inc"); //載入連線檔案

			$sql = "SELECT * from course_list"; //給予SQL指令

			$result = mysql_query($sql) or die("invalid query"); //傳給MySQL指令

			echo "<tr>";
			echo "<td align=\"center\">選課編號</td>";
			echo "<td align=\"center\">使用者編號</td>";
			echo "<td align=\"center\">課程編號</td>";
			echo "<td align=\"center\">系所名稱</td>";
			echo "<td align=\"center\">年級</td>";
			echo "<td align=\"center\">課程名稱</td>";
			echo "</tr>";

			while($record=mysql_fetch_array($result)) //將所有資料顯示出來
			{

				echo "<tr>" ; 
				echo "<td align=\"center\">".$record["clistId"]."</td>";
				echo "<td align=\"center\">".$record["uid"]."</td>";
				echo "<td align=\"center\">".$record["cid"]."</td>";
				echo "<td align=\"center\">".$record["dName"]."</td>";
				echo "<td align=\"center\">".$record["yName"]."</td>";
				echo "<td align=\"center\">".$record["cName"]."</td>";
				echo "</tr>";
			}
		?>
	</table>
		<div id="divcenter">
			<div id="div1">  
				<form action="csmInsert.php" method="POST">
					<h2>Insert</h2><br>
					選課編號:<input type="text" name="clistId"><br>
					使用者編號:<input type="text" name="uid"><br>
					課程編號:<input type="text" name="cid"><br>
					系所名稱:<input type="text" name="dName"><br>
					年級:<input type="text" name="yName"><br>
					課程名稱:<input type="text" name="cName"><br>
					<input type="submit" value="Submit"><br>
				</form>
			</div>

			<div id="div2"> 
				<form action="csmUpdate.php" method="POST">
				<h2>Update</h2><br>
					選課編號:<input type="text" name="clistId"><br>
					使用者編號:<input type="text" name="uid"><br>
					課程編號:<input type="text" name="cid"><br>
					系所名稱:<input type="text" name="dName"><br>
					年級:<input type="text" name="yName"><br>
					課程名稱:<input type="text" name="cName"><br>
					<input <input type="submit" value="Submit"><br>
				</form>	
			</div>

			<div id="div3"> 
				<form action="csmDelete.php" method="POST">
					<h2>Delete</h2><br>
					選課編號:<input type="text" name="clistId"><br>
					<input type="submit" value="Submit"><br>
				</form>

				<form action="csmQuery.php" method="Post">
					<h2>Query</h2><br>
					輸入選課編號:<input type="text" name="clistId"><br>
					<input <input type="submit" value="Submit"><br>
	 			</form>
			</div>
		</div>
	</body>
</html>




