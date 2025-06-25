<?php
include './Db.php';
$data=[];
$sql="SELECT * FROM fileupload ORDER BY id DESC";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
  //   echo "<pre>";
  //  print_r($row);
  //  echo "</pre>";
   $data[]=$row;
  //     echo "<pre>";
  //  print_r($data);
  //  echo "</pre>";
  }
}





?>