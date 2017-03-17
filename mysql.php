<html>
<head>
<meta charset="utf-8"> 
<title>Connecting MySQL Server</title>
</head>
<body>
   <?php
      $dbhost = 'localhost:3306';  //mysql服务器主机地址
      $dbuser = 'root';      //mysql用户名
      $dbpass = 'a123456';//mysql用户名密码
      $conn = mysql_connect($dbhost, $dbuser);
      if(! $conn )
      {
        die('Could not connect: ' . mysql_error());
      }
      echo 'Connected successfully';
      mysql_close($conn);
   ?>
</body>
</html>