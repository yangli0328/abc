
<?php
require_once('../DB/db.php');
$id=$_POST['id'];
$user=$_POST['user'];
$pass=$_POST['pass'];
// echo $id;
// echo $user;
// echo $pass;
$sql="update hh set user='{$user}',pass='{$pass}' where id=$id";
$s=DB::aa()->sql($sql);
// var_dump($s);
if ($s) {
    echo ('修改成功');
}else{
	echo ('修改失败');
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