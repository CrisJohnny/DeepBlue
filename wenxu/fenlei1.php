<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<style>
*{
	font-family:"微软雅黑";
	font-size:20px;
	color:#fff;
	padding-top:3px;
}
input{
	color:#000;
}
b{
	color:red;
}
</style>
<body>
<div align="center">
<form action="fenleic.php" method="post">
<h3>添加分类</h3>
输入分类：<input type="text" name="tj">
<input type="hidden" name="search" value='1'><button>添加</button>
</form>
<form action="fenleic.php" method="post">
<h3>更改分类</h3>
更改前分类名：<input type="text" name="gg1">
更改后分类名：<input type="text" name="gg2">
<input type="hidden" name="search" value='2'><button>更改</button>
</form>
<form action="fenleic.php" method="post">
<h3>删除分类</h3>
删除分类：<input type="text" name="sc">
<input type="hidden" name="search" value='3'><button>删除</button>
</form>
<?php 
  if(isset($_GET['error'])){
	  if($_GET['error']==1){
		  echo "<b>请输入类别</b>";
		  }
  }
?>
</div>
</body>
</html>
