<?php
	$search=$_POST['search'];
	
	$conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("wxwz",$conn) or die(mysql_error());
	
	
	
		switch($search){
		case '1' : 
			if($_POST['tj']==""){
				header("Location:fenlei1.php?error=1");
               exit();
			}
			$tj=$_POST['tj'];
			$sql="insert into type (type) values ('".$tj."')";
			$res=mysql_query($sql,$conn);
			echo "<span>添加成功</span>";
			break;
		case '2' : 
			if($_POST['gg1']=="" || $_POST['gg2']==""){
				header("Location:fenlei1.php?error=1");
               exit();
			}
			$gg1=$_POST['gg1'];
			$gg2=$_POST['gg2'];
			$sql="select typeid from type where type='".$gg1."'";
			$res=mysql_query($sql,$conn);
			$row=mysql_fetch_assoc($res);
			$id=$row['typeid'];
			$sql2="update type set type='".$gg2."' where typeid=$id";
			$res=mysql_query($sql2,$conn);
			echo "<span>修改成功</span>";
			break;	
		case '3' :
			if($_POST['sc']==""){
				header("Location:fenlei1.php?error=1");
               exit();
			} 
			$sc=$_POST['sc'];
			$sql="delete from type where type='".$sc."'";
			$res=mysql_query($sql,$conn);
			echo "<span>删除成功</span>";
			break;		
	}
	$sql="select * from type";
	$res=mysql_query($sql,$conn);
	echo "<table align='center'>";
	while($row=mysql_fetch_assoc($res)){
		echo "<tr><td>{$row['typeid']}</td><td>{$row['type']}</td></tr>";
	}
	echo "</table>"
		

?>
<style>
table{
	margin-top:10px;
	border:0;
	border-bottom:1px dotted #aaa;
	color:#fff;
	font-size:30px;
	font-family:"微软雅黑";
}
span{
	color:#fff;
	font-size:20px;
	font-family:"微软雅黑";
}
</style>
