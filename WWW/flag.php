<?PHP 
// mysql_connect("数据库地址","数据库账号","数据库密码","连接数据库");
$con = mysql_connect("localhost","root","5934252","root");
//测试是否连接数据库
if($con){
  echo "sucess";
}else{
  echo "fail ";
}
?>