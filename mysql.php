<html>
<head>
<meta charset="utf-8"> 
<title>Connecting MySQL Server</title>
</head>
<body>
	<?php
	$dbhost = 'localhost:3306';  //mysql服务器主机地址
	$dbuser = 'root';      //mysql用户名
	//$dbpass = 'a123456';//mysql用户名密码
	$conn = mysql_connect($dbhost, $dbuser);
	if(! $conn ){
		die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully<br>';

	function create_database($sql,$connect){
		// $sql = 'CREATE DATABASE test_php';
		$retval=mysql_query($sql,$connect);
		if(!$retval){
			die('failed to create database'.mysql_error());
		}
		echo 'create database success<br>';
	}
	//创建名为test_php的数据库
	//create_database('CREATE DATABASE test_php',$conn);
	function drop_database($sql,$connect){
		$retval=mysql_query($sql, $connect);
		if(!$retval){
			die('failed to drop database'.mysql_error());
		}
		echo 'drop database success<br>';
	}
	// 删除名为test的数据库
	// drop_database('DROP DATABASE test',$conn);
	
	function select_db($dbname,$connect){
		$retval=mysql_select_db($dbname,$connect);
		if(!$retval){
			die('failed to select database'.mysql_error());
		}
		echo 'select database success<br>';
	}
	//选择名为test_php的数据库
	select_db('test_php',$conn);
	//drop_database('USE test_php',$conn);//或者用mysql_query()来完成数据库切换。
	function create_tb($sql,$connect){
		$retval=mysql_query($sql,$connect);
		if(!$retval){
			die('failed to create table'.mysql_error());
		}
		echo 'create table success<br>'.func_num_args();
	}
	//在 test_php 数据库中创建名为customers的表
	//create_tb('create table customers ( customerid int unsigned not null auto_increment primary key, name char(50) not null, address char(100) not null, city char(30) not null );',$conn);
	function insert_data($sql,$connect){
		$retval=mysql_query($sql,$connect);
		if(!$retval){
			die('failed to insert data into table'.mysql_error());
		}
		echo 'insert data into table success<br>';
	};
	//insert_data('insert into customers values (3, "Julie Smith", "25 Oak Street", "Airport West"), (4, "Alan Wong", "1/47 Haines Avenue", "Box Hill"), (5, "Michelle Arthur", "357 North Road", "Yarraville")',$conn);
	function select_data($sql,$connect){
		$retval=mysql_query($sql,$connect);
		if(!$retval){
			die('failed to select data from table'.mysql_error());
		}
		else{
			echo "select data from table success";
			//获取数据的多种形式1：mysql_fetch_array()
			/*while($row=mysql_fetch_array($retval,MYSQL_ASSOC)){
				echo "<div style='border:1px solid #ccc;padding:20px;margin-bottom:10px;'>"."customerid:{$row['customerid']}<br>".
					"name:{$row['name']}<br>".
					"address:{$row['address']}<br>".
					"city:{$row['city']}<br>"."</div>";
			};*/

			//获取数据的多种形式2：mysql_fetch_array()
			/*while($row=mysql_fetch_assoc($retval)){
				echo "<div style='border:1px solid #ccc;padding:20px;margin-bottom:10px;'>"."customerid:{$row['customerid']}<br>".
					"name:{$row['name']}<br>".
					"address:{$row['address']}<br>".
					"city:{$row['city']}<br>"."</div>";
			};*/

			//获取数据的多种形式3：mysql_fetch_array()
			while($row=mysql_fetch_array($retval,MYSQL_NUM)){
				echo "<div style='border:1px solid #ccc;padding:20px;margin-bottom:10px;'>"."customerid:{$row[0]}<br>".
					"name:{$row[1]}<br>".
					"address:{$row[2]}<br>".
					"city:{$row[3]}<br>"."</div>";
			};


		}
		//释放内存（好习惯）
		mysql_free_result($retval);
	}
	//从数据库中获取数据
	select_data("select * from customers",$conn);

	mysql_close($conn);
	?>

</body>
</html>