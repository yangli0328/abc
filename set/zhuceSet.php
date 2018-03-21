<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
require_once('../DB/db.php');
$user['user']=$_POST['user']; 
$pass['pass']=$_POST['pass']; 
$user=trim($user['user']);
$pass=trim($pass['pass']);
$sql='select user from hh where user="{$user}"';
$s=DB::aa()->sql($sql);
if ($s) {
	echo "注册失败";
}else{
	$pass=md5($pass);
	$qj="insert into hh (user,pass)values('{$user}','{$pass}')";
	$s=DB::aa()->sql($qj);
	echo "注册成功";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button onClick="aa()">返回上一页</button>
</body>
<script type="text/javascript">
function aa(){ 
    window.location.href="../show/xuigai.php?act=logout";
} 
</script>
</html>