
<?php 

$conn = mysqli_connect('localhost','root','','smart reception');



if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $Cat= $_POST['Cat'];
    $Dept= $_POST['Dept'];
    $Slot= $_POST['Slot'];
    
    $username= $_POST['username'];
    $email= $_POST['email'];
    $number= $_POST['number'];

    $sql= "INSERT INTO `appoinment`( `Visitor Name`, `Visitor_Number`, `Faculty Name`, `Dept`, `Category`, `Slot`) VALUES('$username','$number','$name','$Dept','$Cat','$Slot')";
    if(mysqli_query($conn,$sql) == TRUE){
      move_uploaded_file($tmpname,$uploc);
     
      $_SESSION['status']=" Thanks for beig with us";
      header("Location: ../members.php");
  
    }
    else{
      $_SESSION['status']="Member Adding Failed";
      header("Location: ../add_member.php");
    }
}


?>