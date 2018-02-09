<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body background="11.jpg">
<div id="d1">
<form action="loginc.php" method="post">
<h3>深蓝文学</h3><br><br>
<span>用户名:</span><input type="text" name="name" size="16"><br><br><br>
<span>密&nbsp;&nbsp;  码:</span><input type="password" name="password" size="17"><br><br><br>
<button type="submit">登录</button>
<?php 
  if(isset($_GET['error'])){
	  if($_GET['error']==1){
		  echo "用户名或密码错误";
	  }else if($_GET['error']==2){
		  echo "用户名或密码未输入";
		  }
  }
?>
</form>
</div>
<style>
#d1{
	width:300px;
	height:300px;
	margin-top:100px;
	border:2px dotted grey;
	margin-left:500px;
	background:rgba(200,200,200,0.5);
	box-shadow:0px 0px 10px #fff;
	border-radius:10px;
}

h3{
	font-family:"微软雅黑";
	font-size:30px;
	color:#111133;
	text-align:center;
}
span{
	font-family:"微软雅黑";
	color:#111133;
}
form{
	text-align:center;
}
button{
	background:transparent;
	border:1px dotted #111133;
	color:#111133;
	width:50px;
	height:25px;
	font-family:"微软雅黑";
	font-size:15px;
	transition:1s color;
}
button:hover{
	color:#fff;
}
	
</style>
</body>
</html>