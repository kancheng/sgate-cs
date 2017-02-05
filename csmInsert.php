<html>
	<head>
		<meta content="text/html;charset=UTF-8"http-equiv="Content-Type">
		<title>
		Insert	
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
		<p>課程新增</p>
	</div>
		</br>
		<?php
			mysql_connect("localhost","root","hokkaidou");
			mysql_select_db("csdb");
			mysql_query("SET NAMES 'utf8'");
			
			$clistId = $_POST['clistId'];
			$uid = $_POST['uid'];
			$cid = $_POST["cid"];
			$dName = $_POST['dName'];
			$yName = $_POST['yName'];
			$cName = $_POST['cName'];
			
			mysql_query("insert into course_list(clistId,uid,cid,dName,yName,cName) values('$clistId','$uid','$cid','$dName','$yName','$cName')");

		?>
		<br>
		<div id="divcenter">
			<p>新增完成，回到選課系統管理<input type="button" value="Submit" onclick="location.href='csm.php'"></p>
		</div>
	</body>
</html>