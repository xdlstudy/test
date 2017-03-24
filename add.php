<?php 
$username = $_POST['username'];
$password = $_POST['password'];
 $link = mysqli_connect('localhost','root','');

 if(mysqli_connect_errno()){
 	exit('数据库连接失败，原因：'.mysqli_connect_error());
 }
 //3.选择数据库
 mysql_select_db($link,'lamp170');

 mysqli_set_charset($link,'utf8');

$username = 'aaaa';
$password = 'sssss';

$sql = "insert into user(username,password) values('{$username}','{$password}')";
$res = mysqli_query($link,$sql);
if($res){
	echo '插入成公'；
}else{
	echo '插入失败';
}

mysqli_close($link);
