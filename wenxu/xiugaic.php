<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<style>
*{
	font-size:20px;
	color:#fff;
	font-family:"微软雅黑";
}
</style>
<body>
<form action="xiugaic.php?bid=<?php echo $_GET['bid']?>" method="post">
<h3>修改类别</h3>
5：军事&nbsp;
6：竞技&nbsp;
7：同人&nbsp;
8：幻想&nbsp;<br>
输入相应的号码<input type="text" name="typeid" style="color:#000" id="a">
<button onclick="a()" type="submit">提交</button>
</form>
</body>
</html>
<script>
</script>
<?php
	
	if(isset($_POST['typeid'])){
		if($_POST['typeid']==""){
			header("Location:xiugaic.php?error=1");
            exit();
		}
		$typeid=$_POST['typeid'];
		$bid=$_GET['bid'];
		$conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("wxwz",$conn) or die(mysql_error());
	   
	   $sql="update novellist set typeid=$typeid where bid=$bid";
	   $res=mysql_query($sql,$conn);
		echo "更改成功";
	}
	if(isset($_GET['error'])){
		if($_GET['error']==1){
		  echo "请输入要修改的类别";
	  }
	}
?>