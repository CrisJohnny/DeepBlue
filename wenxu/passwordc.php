<?php
	$username=$_GET['name'];
	$password=$_POST['password'];
	
	if($password==""){
		header("Location:password.php?error=1");
               exit();
	}
	
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("wxwz",$conn) or die(mysql_error());
       
       //发送sql语句,验证
       $sql="update user set password='".$password."' where name='".$username."'";
       $res=mysql_query($sql,$conn);

		 echo "<b>修改成功</b>";

		   
	
	
?>
<style>
b{
	color:#fff;
	font-size:20px;
}
</style>