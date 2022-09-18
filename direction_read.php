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
<body style="background: linear-gradient(to left, white 80%, #f08e1f 20%  )" >
<?php
                    if (isset($_GET['Room_Name'])){
                        
                        $Room_Name= $_GET['Room_Name'];
                        $sql= "SELECT * FROM direction WHERE Room_Name='$Room_Name'";
                        $data = mysqli_query($conn, $sql);
                        $check_result= mysqli_num_rows($data)> 0;
                        if($check_result){
                          while( $rows = mysqli_fetch_array( $data ) ) 
                          {
                            
                    
                    ?>
    <br><br>
   
        <div class="container">
            <br><br><br><br>
            <div class="row" >
                <div class="col-md-6 col-12">
                <!-- <br><br><br><br> -->
                <img src="imeges/<?php echo $rows ['Map'] ?>" style="width:100%;" alt="">
                </div>
                <div class="col-md-6 col-12" style=" border-top-style: solid ; border-right-style: solid ; border-bottom-style: solid ; border-color:orange; align-items:center;">
                <!-- <br><br><br><br><br><br> -->
                <div style=" display:flex; flex-direction:column; align-items: center;"
                      >
                     <br><br>
                     <h2>Which place are you looking for?</h2>
            <hr>
            
            
            <center>
            
            <div class="input-group" style="margin-left:20px;" >
           
            <form action="direction_search.php" method="POST">
                <input type="text" placeholder="Search" name="RN" class="rounded-pill w-5" style="width:250px;" required>
                <button  type="submit" style="" name="submit"class="btn btn-dark rounded-pill" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                 
            </form>
                    
                    </div>
                    
            </center>

            <br>
                <h1><?php echo $rows ['Room_Name'] ?></h1>

            <br>
                <h3><?php echo $rows ['Direction'] ?></h3>
            <br>
        
            <br><br><br><br>
            <a href="direction.php"><button class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">Back</button></a>
                    </div>
               
                </div>
            </div>
       
        <?php
                          }
                          }
                  
                    }
        else{
        die("Can not execute query");
        }
?>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
       <script src="https://kit.fontawesome.com/fb3db3fea9.js" crossorigin="anonymous"></script> 
</body>
</html>