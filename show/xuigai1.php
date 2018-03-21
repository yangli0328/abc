<?php
require_once('../DB/db.php');
$id=$_GET['id'];
$sql="select id ,user,pass from hh where id={$id} ";
$array=DB::aa()->cc($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="../set/xuigaiSet.php" method="post">
<input type="hidden" name="id" value="<?php echo $id?>">
用户名：<input type="text" name="user" maxlength="8" value="<?php echo $array['user']?>"><br/>
密 &nbsp;码：<input type="password" name="pass" maxlength="60" value="<?php echo $array['pass']?>"><br/>
<input type="reset" value="清空">
<input type="submit" value="修改"><br/>
</form>
</body>
</html>