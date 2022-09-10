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
    <title>Get an appointment</title>
</head>
<body>
<?php
                    if (isset($_GET['id'])){
                        
                        $id= $_GET['id'];
                        $sql= "SELECT * FROM `faculty/member` WHERE id='$id'";
                        $data = mysqli_query($conn, $sql);
                        $check_result= mysqli_num_rows($data)> 0;
                        if($check_result){
                          while( $rows = mysqli_fetch_array( $data ) ) 
                          {
                            
                    
                    ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
            <br><br><br>
                <img src="Admin/e-receptiobn_admin/imeges/faculty_members/<?php echo $rows ['image'] ?>" style="height:400px;" alt="">
                </div>
            
            <div class="col-md-6 col-12">
            <br><br><br><br>
            <form action="visitor.php" method="GET">
            <input type="hidden" name="name" value="<?php echo $rows ['Name'] ?>" >
                <h1>Name:<?php echo $rows ['Name'] ?></h1>
                <input type="hidden" name="Cat" value="<?php echo $rows ['Category'] ?>" >
                <h3><?php echo $rows ['Category'] ?></h3>

            <br>
            <input type="hidden" name="Dept" value="<?php echo $rows ['Dept'] ?>" >
                <h3>Department:<?php echo $rows ['Dept'] ?></h3>
                
            <br>
            <select class="form-select" name="slot" aria-label="Default select example">
                    <option selected>Please Choose A Slot</option>
                    <option value="<?php echo $rows ['Slot_1'] ?>"><?php echo $rows ['Slot_1'] ?></option>
                    <option value="<?php echo $rows ['Slot_2'] ?>"><?php echo $rows ['Slot_2'] ?></option>
                    <option value="<?php echo $rows ['Slot_3'] ?>"><?php echo $rows ['Slot_3'] ?></option>
            </select>
            <br><br>
            <center>
            <input type="submit" class=" btn rounded-pill btn-dark shadow fw-bold"  style="background-image: linear-gradient(to right ,#fc604f , #f08d20);width:200px;">
            </center>
            </form>
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
</body>
</html>