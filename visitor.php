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
    <title>Please give your info</title>
</head>
<body>
    <div class="container">
    <?php
                    if (isset($_GET['name'])){
                        
                        
                        
                        $name= $_GET['name'];
                        $Cat= $_GET['Cat'];
                        $Dept= $_GET['Dept'];
                        $Slot= $_GET['slot'];
                            
                    
                    ?>
        <div class="row">
            <div class="col-md-6">
            <br><br><br>
                <img src="Admin/e-receptiobn_admin/imeges/banner_vistor.jpg" style="height:400px;" alt="">
            </div>
            <div class="col-md-6">
                <br><br><br><br>
                <h1>Please give your info</h1>
                <br>
                <form action="config/code_appoinment.php" method="post">
                        <input name="name" type="hidden" value="<?php echo $name?>">
                        <input name= "Cat" type="hidden"value="<?php echo $Cat?>">
                        <input name="Dept" type="hidden" value="<?php echo $Dept?>">
                        <input name="Slot" type="hidden" value="<?php echo $Slot ?>">
            <div class="form-floating mb-3">
               
                        
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Jhon">
                        <label for="floatingInput" required>Your Name</label>

                        </div>
                        <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        </div>
                        <br>
                        <div class="form-floating">
                        <input type="text" name="number" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Phone Number</label>
                        </div>
                        <br><br>
                        <select class="form-select" name="type" aria-label="Default select example" required>
                    <option selected>Who are you ?</option>
                    <option value="Student">Student</option>
                    <option value="Gardian">Gardian</option>
                    <option value="Outsider">Outsider</option>
            </select>
                       <center>
                           <br><br>
                       <input type="submit" name="submit" class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">
                       </center>
                       </form>
            </div>
        </div>
    </div>
    <?php
                         
                  
                    }
        else{
        die("Can not execute query");
        }
?>
</body>
</html>