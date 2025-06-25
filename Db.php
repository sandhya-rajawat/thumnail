<?php
// Db connection...............

$conn=new mysqli('localhost','root','s@ndhya1133','file_upload','33066');
if($conn->connect_errno){
  die("this conncetion is failed".$conn->connect_errno);
}else{
  // echo 'connetion successful'; 
}



?>