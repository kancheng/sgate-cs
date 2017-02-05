<html>
	<head>
		<meta content="text/html;charset=UTF-8"http-equiv="Content-Type">
		<title>
			Query
		</title>

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

			<?
				$clistId=$_POST["clistId"];
			?>
	</head>
	<body>

	<div id="header">
		<h1>選課系統管理</h1>
		<p>課程查詢</p>
	</div>
		</br>
		<table width="100%" align="center">
			<?php

				$dbhost = 'localhost';   
				$dbuser = 'root';   
				$dbpass = 'hokkaidou';   
				$dbname = 'csdb';   
				$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
	  
				mysql_query("SET NAMES 'utf8'");
				mysql_select_db($dbname);   
				$sql = "select * from course_list where clistId = ".$clistId;
				$result = mysql_query($sql) or die('MySQL query error');
	  
				while($row = mysql_fetch_array($result))
	  			{			
					echo "<tr><td align=\"center\"><p>選課編號:</p></td><td align=\"center\"><p>".$row['clistId']."</p></td></tr>";
					echo "<tr><td align=\"center\"><p>使用者編號:</p></td><td align=\"center\"><p>".$row['uid']."</p></td></tr>";
					echo "<tr><td align=\"center\"><p>課程編號:</p></td><td align=\"center\"><p>".$row['cid']."</p></td></tr>";
					echo "<tr><td align=\"center\"><p>系所名稱:</p></td><td align=\"center\"><p>".$row['dName']."</p></td></tr>";
					echo "<tr><td align=\"center\"><p>年級:</p></td><td align=\"center\"><p>".$row['yName']."</p></td></tr>";
					echo "<tr><td align=\"center\"><p>課程名稱:</p></td><td align=\"center\"><p>".$row['cName']."</p></td></tr>";
				}
			?>
		</table>
		<br>
		<div id="divcenter">
			<p>查詢完成，回到選課系統管理 <input type="button" value="Submit" onclick="location.href='csm.php'"></p>
		</div>
	</body>
</html>