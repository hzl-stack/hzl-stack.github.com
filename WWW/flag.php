<?PHP 
// mysql_connect("���ݿ��ַ","���ݿ��˺�","���ݿ�����","�������ݿ�");
$con = mysql_connect("localhost","root","5934252","root");
//�����Ƿ��������ݿ�
if($con){
  echo "sucess";
}else{
  echo "fail ";
}
?>