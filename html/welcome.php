<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
 
<?php
session_start();
 
if( isset($_SESSION['bane']) ){
	echo session_id(); 
	$name = $_SESSION['name'];

	echo 'helo, ' . '<br/>';
	echo 'hello you name is：' . $name;
 
}else{
	echo session_id(); 
	$_SESSION['name'] = "dilei";
	echo '未登录！';
}
?>

</body>
</html>
