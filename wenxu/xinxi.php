<?php
	$username=$_POST['name'];
	$password=$_POST['password'];
	
       $conn = mysql_connect("localhost","root","root");
       if(!$conn){
           die("连接失败".mysql_error());
       }
        
       mysql_query("set names utf8",$conn) or die(mysql_error());
       mysql_select_db("wxwz",$conn) or die(mysql_error());
       $sql="select bookname,novellist.author,type,main,role,cover,introduce,area,sex,book from authorinfor,novellist,novelinfor,type where authorinfor.bid=novellist.bid and novellist.typeid=type.typeid and novelinfor.bid=novellist.bid;";
	   $res=mysql_query($sql,$conn);
	   
       //发送sql语句,验证
	  
	  while($row=mysql_fetch_assoc($res)){
		  
		  echo "<div class='d1'>
		  			<div id='d11'>
						<img src='".$row['cover']."' width='180px' height='240px'>
					</div>
					<div id='d12' title='".$row['introduce']."'>
						<span><center>{$row['bookname']}</center>
							<br>类型:{$row['type']}
							<br>主角:{$row['role']}
							<br>关键词:{$row['main']}
							<br>作者:{$row['author']}
							<br>籍贯:{$row['area']}
							<br>性别:{$row['sex']}
							<br>著作:{$row['book']}
						</span>
					</div>
				</div>";
		  
		  
		  
		  
	  }

		   
	
	
?>
<style>
*{
	SCROLLBAR-FACE-COLOR:#000;
SCROLLBAR-HIGHLIGHT-COLOR:#000;
SCROLLBAR-SHADOW-COLOR:#000;
SCROLLBAR-3DLIGHT-COLOR:#000;
SCROLLBAR-ARROW-COLOR:#000;
SCROLLBAR-TRACK-COLOR:#000;
SCROLLBAR-DARKSHADOW-COLOR:#000;
SCROLLBAR-BASE-COLOR:#000;
}
.d1{
	float:left;
	margin-left:80px;
	margin-top:10px;
	border-bottom:1px dotted #fff;
	width:400px;
	height:260px;
	color:#fff;
	font-family:"微软雅黑";
}
#d11{
	float:left;
	margin-top:10px;
	margin-left:10px;
	width:180px;
	height:240px;
	top:20px;
	left:10px;
}
#d12{
	width:180px;
	float:left;
	margin-top:10px;
	margin-left:200px;
	position:absolute;
}
center{
	font-size:20px;
}
</style>