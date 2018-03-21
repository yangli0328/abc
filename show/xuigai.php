<?php
require_once('../DB/db.php');
$sql='select id,user,pass from hh';
$s=DB::aa()->bb($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
    body{
    	background-color: #D6C9C9;
    }
	table{
		background-color: #9BDAA5;
		margin: 50px auto;
		text-align: center;
	}
	a{
		text-decoration: none;
	}
	a:hover{
		color: rgb(236,111,111);
	} 
</style>
<body>
<?php
	// foreach ($s as $key => $value) {
		// $a=$value['id'];
		// $b=$value['user'];
		// $c=$value['pass'];
	// }         
?>

<table border="1" cellspacing='0' cellpadding='10' width="500px">
<caption align="center"><b>用户密码表</b></caption>
	<tr>
		<th>id</th>
		<th>用户名</th>
		<th>密码</th>
		<th colspan="3">操作/<?php echo "<a href='zhuce.php'>注册</a>"; ?></th>
	</tr>
  
    <?php
	foreach ($s as $key => $value) {
		echo "<tr>";
		echo "<td>{$value['id']}</td>";
		echo "<td>{$value['user']}</td>";
		echo "<td>{$value['pass']}</td>";
		echo "<td><a href='xuigai1.php?id={$value["id"]}'>修改</a></td>";
		echo "<td><a href='../set/shanchuSet.php?id={$value["id"]}'>删除</a></td>";		
		echo "</tr>";
	}         
?>
</table>
</body>
</html>

