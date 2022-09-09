<?php 
session_start();


$conn = mysqli_connect('localhost','root','','smart reception');


if(isset($_POST['submit'])){
   
    echo $image =  $_FILES['file']['name'];
  
   
    $tmpname =  $_FILES['file']['tmp_name'];
    $Name =$_POST['name'];
    $Dept =$_POST['Dept'];
    
    $Room_Number  =$_POST['number'];
     $Phone_Number  =$_POST['p_number'];
     $Category =$_POST['cat'];
     $Slot_1 =$_POST['s1'];
     $Slot_2 =$_POST['s2'];
    $Slot_3 =$_POST['s3'];
    $username =$_POST['username'];
    $Password =$_POST['password'];
    

   
   $uploc = '../imeges/faculty_members/'.$image;
 
   $uploadOk=1;
   $imageFileType= strtolower(pathinfo($image,PATHINFO_EXTENSION));
  //  if(file_exists($uploc)){
  //      $uploadOk=0;
  //      $_SESSION['status']="File allready  exist";
  //      header("Location: ../direction_read.php");

  //  }
   if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' ){
       $uploadOk=0;
       $_SESSION['status']="Only jpg,png and jpeg required";
       header("Location: ../member_read.php");
   }
   if($uploadOk==1){
    $sql= "INSERT INTO `faculty/member`( `image`, `Name`, `Dept`, `Room_Number`, `Phone_Number`, `Category`, `Slot_1`, `Slot_2`, `Slot_3`, `User_Name`, `Password`)  VALUES('$image','$Name','$Dept','$Room_Number','$Phone_Number','$Category','$Slot_1','$Slot_2','$Slot_3','$username','$Password')";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
     
      $_SESSION['status']="Member Added Successfully";
      header("Location: ../add_member.php");
  
    }
    else{
      $_SESSION['status']="Member Adding Failed";
      header("Location: ../add_member.php");
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