<?php
	$username=$_POST['name'];
	$password=$_POST['password'];
	if($username=="" || $password==""){
		header("Location:index.php?error=2");//重定向
	}
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("wxwz",$conn) or die(mysql_error());//连接数据库 WXWZ=文学网站
       
       //发送sql语句,验证
       $sql="select password from user where name='".$username."'";
       $res=mysql_query($sql,$conn);

       if($row=mysql_fetch_assoc($res)){
           //2.取出数据库密码
           if($row['password']==$password){
               //说明合法
              header("Location:index.php?name=$username");
               exit();
          }
		  else{
			  header("Location:login.php?error=1");
              exit();
			  }
	   }
		  else{
			  header("Location:login.php?error=1");
              exit();
		  }
		  //关闭资源
           mysql_free_result($res);
           mysql_close($conn);

		   
	
	
?>