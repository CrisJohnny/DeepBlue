<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body background="11.jpg">
<table align="center" id="t1" cellpadding="10" cellspacing="0">
	<tr>
    <td onclick="xs1('password.php?name=<?php echo $_GET['name']  ?>')" style="cursor:pointer;">修改密码</td>
    <td onclick="xs1('fenlei1.php')" style="cursor:pointer;">分类</td>
    <td onclick="xs1('sousuo1.php')" style="cursor:pointer;">搜索</td>
    <td onclick="xs1('xinxi.php')" style="cursor:pointer;">信息</td>
    <td onclick="javascript:window.location.href='login.php'" style="cursor:pointer;">退出</td>
    </tr>
    </table>
    

<iframe align="middle" frameborder="0" id="i1">
</iframe>
<style>
#t1{
}
#t1 td{
	width:100px;
	text-align:center;
	color:#aaa;
	font-size:20px;
	font-family:"微软雅黑";
}
iframe{
	text-align:center;
	width:1100px;
	height:530px;
	margin-left:120px;
	margin-top:50px;
	background-color:rgba(55,55,55,0.5);
}
</style>
<script>
function xs1(j){
	document.getElementById('i1').src=j;
}

</script>
</body>
</html>