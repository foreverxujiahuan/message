<?php
header("content-type:text/html;charset=utf-8");
?>
<?php
  $conn = mysqli_connect("localhost","root","root","login");
  if($conn){
      //echo "数据库链接成功";
  }
$sql = "SELECT*FROM lo_user";  
$result = mysqli_query($conn,$sql);
$name =array();
$phone =array();
$i = 0 ;
while($row = mysqli_fetch_array($result))
{
  $name[$i]=$row['user_realname'];
  $phone[$i]=$row['user_phone'];
  $i=$i+1;
  /*echo "<br>";
  echo $row['user_realname'];
  echo $row['user_phone'];*/
}
for($j=0;$j<$i;$j++){
  //echo $name[$j];
  //echo $phone[$j];
}
?>