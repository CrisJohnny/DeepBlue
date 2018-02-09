<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<style>
*{
	margin-top:20px;
	font-family:"微软雅黑";
	color:#fff;
}
</style>
<body>
<div align="center">
<form action="passwordc.php?name=<?php echo $_GET['name']  ?>" method="post">
<h3>修改密码</h3>
新密码:&nbsp;:&nbsp;<input type="password" name="password" style="color:#111133;">
<button style="color:#111133;" type="submit">更改</button>
</form>
<?php 
  if(isset($_GET['error'])){
	  if($_GET['error']==1){
		  echo "请输入新密码";
	  }
  }
?>
</div>
</body>
</html>