<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <center>
    	<table border="1px solid red" width="200px" height="100px">
			<tr>
				<td>ID</td>
				<td>姓名</td>
			</tr>
		<?php
			//连接数据库
		$link = mysqli_connect('localhost','root','') or exit('数据库链接失败');
		mysqli_select_db($link, 'lamp170');

		mysqli_set_charset($link,'utf8');

		$sql ="select * from user";

		$res = mysqli_query($link,$sql);
		if($res){
			while($data = mysqli_fetch_assoc($res)){
		?>
			<tr>
				<td><?php echo $data['id']?></td>
				<td><?php echo $data['username']?></td>
			</tr>
	    <?php
			}
		}
		
		mysqli_close($link);
		?>
		</table>
    </center>
</body>
</html>	