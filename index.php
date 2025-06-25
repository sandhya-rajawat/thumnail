  <?php
  include './Db.php';
  
  if(isset($_POST['submit'])){
    $image=$_FILES['image'];
  // print_r($image);
  $image_filename=$image['name'];
  $image_filetmpname=$image['tmp_name'];
  $image_upload='./upload/'.$image_filename;
  $image_file=move_uploaded_file($image_filetmpname,$image_upload);
if($image_file){
 $sql="INSERT INTO fileupload(image)VALUES('$image_filename')";
  $conn->query($sql);
  if(!$conn){
    echo "show me error!";
  }
  else{
    echo "done!!";
  }
}
  else{
    echo "image failed";

  }
}
  include './form.php';

  include './fetch.php';


  ?>