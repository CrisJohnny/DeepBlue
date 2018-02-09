<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<div align="center">
<form action="sousuo1.php" method="post">
请输入关键字:<input type="text" name="key">
<button type="submit">查找</button>
</form>
</div>
<style>
body{
}
div{
	margin-top:10px;
	font-size:20px;
	font-family:"微软雅黑";
	color:#fff;
}
</style>
</body>
</html>
<style>
table{
	margin-top:50px;
	color:#fff;
	font-size:20px;
	font-family:"微软雅黑";
	border:0;
	text-align:center;
	
}
td{
	text-align:center;border-bottom:1px dotted #fff;
}
</style>
<?php


	if(isset($_POST['key'])){
		$key=$_POST['key'];
		$conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("wxwz",$conn) or die(mysql_error());
	   $key1="'%".$key."%'";
$sql="select * from novellist where author like $key1 or bookname like $key1 or main like $key1 order by click asc";
	   $res=mysql_query($sql,$conn);
	   echo "<table align='center' cellpadding='0' cellspacing='0'>";
	   echo"<tr><td>作者</td><td>书名</td><td>关键词</td><td>点击率</td><td style='width:100px;'>修改类别</td></tr>";
		while($row=mysql_fetch_assoc($res)){
			$bid=$row['bid'];
		echo "<tr>
		<td>{$row['author']}</td>
		<td>{$row['bookname']}</td>
		<td>{$row['main']}</td>
		<td>{$row['click']}</td>
		<td onclick=\"javascript:window.location.href='xiugaic.php?bid=$bid'\" style='cursor:pointer;'><a onClick=''>修改类别</td>
		</tr>";
		}
		echo "</table>";
		
	}






?>