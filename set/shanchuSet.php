<?php
require_once('../DB/db.php');
$id=$_GET['id'];
$sql="delete from hh where id=$id";
$s=DB::aa()->sql($sql);
// var_dump($s);
if(isset($_GET['id'])){
    echo ('删除成功');
}else{
	echo ('删除失败');
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