<?php include "header.php" ?>
<?php include "navber.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get an appoinment</title>
</head>
<body>
    <div class="row">    
            <div class="col-md-4" style="background-image: linear-gradient(to right ,#fc604f , #f08d20); height:920px;">
            <?php include "sidebar.php" ?>
            </div>
            <div class="col-md-8">
            <h1 class="container  "  style="color:#30D5C8;font-size:45px;">NovelTess Ratchets </h1>  
<h2 class="container "  style="color:white;font-size:35px;">our most popular and softest beloved ratchets.</h2> 
   <div class="container slider ">
   <?php 

$sql ="SELECT image,price1,price2 from products where type ='ratchets'";
$data = mysqli_query($conn, $sql);
$check_result= mysqli_num_rows($data)> 0;
if($check_result){
  while( $rows = mysqli_fetch_array( $data ) ) 
  {
      ?>

<div class="card" style="width:18rem;background-color:black; padding:10px; color:white; margin=50px;">

  <img src="Admin/novel-tees_admin/imeges/<?php echo $rows ['image']?>" class="card-img-top" style="height:300px;" alt="...">
  <div class="card-body">

    <span>$<?php echo $rows ['price1']?></span> - <span>$<?php echo $rows ['price2']?></span>
  </div>

</div>

<?php
    }
}
else{
  ?>	
<h2  style="color:white;font-size:35px;">Product currently not available.</h2> 
<?php
}
?>	
   </div>
            </div>
     </div>
          


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
          $('.slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
	
</script>
</body>
</html>