<?php 
session_start();


$conn = mysqli_connect('localhost','root','','smart reception');


if(isset($_POST['submit'])){
    $Room_Name =$_POST['name'];
    
    $Room_Number  =$_POST['number'];
    $Direction =$_POST['direction'];
    
   $Map =  $_FILES['file']['name'];
   $Voice =  $_FILES['file1']['name'];
   
   $tmpname =  $_FILES['file']['tmp_name'];
   
   $uploc = '../imeges/'.$Map;
 
   $uploadOk=1;
   $imageFileType= strtolower(pathinfo($Map,PATHINFO_EXTENSION));
  //  if(file_exists($uploc)){
  //      $uploadOk=0;
  //      $_SESSION['status']="File allready  exist";
  //      header("Location: ../direction_read.php");

  //  }
   if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' ){
       $uploadOk=0;
       $_SESSION['status']="Only jpg,png and jpeg required";
       header("Location: ../direction_read.php");
   }
   if($uploadOk==1){
    $sql= "INSERT INTO direction(Room_Name,Room_Number,Direction,Map,Voice) VALUES('$Room_Name','$Room_Number','$Direction','$Map','$Voice')";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
     
      $_SESSION['status']="Direction Added Successfully";
      header("Location: ../direction_read.php");
  
    }
    else{
      $_SESSION['status']="Direction Adding Failed";
      header("Location: ../direction_read.php");
    }
   }
   
 }
   
  

if(isset($_POST['update'])){
    $id =$_POST['id'];
    $name =$_POST['name'];
    
    $price1 =$_POST['price1'];
    $price2 =$_POST['price2'];
    $type =$_POST['type'];
    
   $image =  $_FILES['file']['name'];
   $status =  $_POST['Stock_status'];
   $tmpname =  $_FILES['file']['tmp_name'];
   $uploc = 'imeges/'.$image;
  $sql= "UPDATE products set name='$name',price1='$price1',price2='$price2',type='$type',image='$image',status='$status' where id='$id'";
  if(mysqli_query($conn,$sql) == TRUE){
    move_uploaded_file($tmpname,$uploc);
    $_SESSION['status']="Product Updated Successfully";
    header("Location: ../product_read.php");

  }
  else{
    $_SESSION['status']="Product Adding Failed";
    header("Location: ../product_read.php");
  }
}

if(isset($_POST['delete'])){
  $id =$_POST['d_id'];
  $sql="DELETE from products where id=$id";
  if(mysqli_query($conn,$sql) == TRUE){
    unlink("imeges/".$image);
    $_SESSION['status']="Product Deleted Successfully";
    header("Location: ../product_read.php");

  }
  else{
    $_SESSION['status']="Product Deleting Failed";
    header("Location: ../product_read.php");
  }

}

?>