<?php include "header.php" ?>
<?php include "navber.php" ?>
<?php 

$conn = mysqli_connect('localhost','root','','smart reception');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Get a smart direction</title>
</head>
<body style="background-image: linear-gradient(to right ,#fc604f , #f08d20);">
<!-- <?php
                    // if (isset($_GET['Room_Name'])){
                    //     $Room_Name= $_GET['Room_Name'];
                    //     $sql= "SELECT * FROM direction WHERE Room_Name=$Room_Name";
                    //     $data = mysqli_query($conn, $sql);
                    //     $check_result= mysqli_num_rows($data)> 0;
                    //     if($check_result){
                    //       while( $rows = mysqli_fetch_array( $data ) ) 
                    //       {
                            
                    
                    ?> -->
    <br><br>
    <div  style="display:flex; flex-direction:row; height:800px; width:1800px; padding-left:80px; ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                <br><br><br><br><br><br>
                <img src="imeges/Admission office.png" style="width:100%;" alt="">
                </div>
                <div class="col-md-6 col-12">
                <br><br><br><br><br><br><br><br>
                <div style=" display:flex; flex-direction:column; align-items: center; h3background-color:white
                    "  >
                     <h2>Which place are you looking for?</h2>
            <hr>
            
            <input type="text" class="rounded-pill" style="width:300px;" placeholder="Search">
            <br>
                <h1>Admission Office</h1>

            <br>
<h3>Go few steps forward from the entrance and turn left You'll find the admission
 office</h3>
            <br>
        
            <br><br><br><br>
            <a href="direction.php"><button class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">Back</button></a>
                    </div>
               
                </div>
            </div>
        </div>
        <?php
//                           }}}
//         else{
//         die("Can not execute query");
//         }
// ?>     
       
    
</body>
</html>