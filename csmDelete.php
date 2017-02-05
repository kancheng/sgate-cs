<html>
	<head>
		<meta content="text/html;charset=UTF-8"http-equiv="Content-Type">
		<title>
			Delete
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

	</head>
	<body>

	<div id="header">
		<h1>選課系統管理</h1>
		<p>課程刪除</p>
	</div>
		</br>

		<?php
			mysql_connect("localhost","root","hokkaidou");
			mysql_select_db("csdb");
			mysql_query("SET NAMES 'utf8'"); 

			$clistId = $_POST['clistId'];
			$name = $_POST['uid'];
			$date = $_POST["cid"];
			$schedule = $_POST['dName'];
			$attend = $_POST['yName'];
			$attend = $_POST['yName'];

			mysql_query("delete from course_list where clistId='$clistId'");
		?>
		<br>
		<div id="divcenter">
			<p>刪除完成，回到選課系統管理<input type="button" value="Submit" onclick="location.href='csm.php'"></p>
		</div>
		
	</body>
</html>