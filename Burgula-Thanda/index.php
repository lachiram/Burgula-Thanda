<!DOCTYPE html>
<html lang="en">
<head>
  <title>Burgula-Thanda|Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  
/* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 85vh;
  }
   .carousel-caption h3 {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes slideInDown {
  0% {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  }
  @keyframes slideInDown {
  0% {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  } 
  @media (max-width: 800px){
  .carousel-inner img {
    width: 100%;
    height: 50vh;
  }
}
<!-- cards -->
.card-thumbnail {
    max-height: 250px;
    overflow: hidden;
}
.card{
  box-shadow: 0px 5px 6px red;
}

  </style>
</head>
<body>
<!-- header -->
<?php include 'header.php';?>

<!-- slider -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.markuptag.com/images/image-two.jpg"  alt="Los Angeles" width="1100" height="200">
      <div class="carousel-caption">
        <h3>xxxxx</h3>
        <p>xxxx</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.markuptag.com/images/image-three.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>xxxx</h3>
        <p>xxxx</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.markuptag.com/images/image-two.jpg" alt="New York" width="100" height="200">
      <div class="carousel-caption">
        <h3>xxxx</h3>
        <p>xxxx</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.markuptag.com/images/image-three.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>xxxx</h3>
        <p>xxxx</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.markuptag.com/images/image-three.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>xxxx</h3>
        <p>xxxx</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




    <!-- cards -->
    <section class="bg-light ">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="https://www.markuptag.com/images/image-two.jpg" class="img-fluid " alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">What is Lorem Ipsum?</a></h3>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="https://www.markuptag.com/images/image-two.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">Why do we use it?</a></h3>
                        <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="https://www.markuptag.com/images/image-three.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">Where does it come from?</a></h3>
                        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>



    <!-- Start Categories of The Month -->
    <section class="container py-1">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">details</h1>
                <p>
                    ............................
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 p-5 mt-3 text-center">
                <a href="#"><img src="//www.markuptag.com/images/image-two.jpg" width="300" height="300"
                        class="rounded-circle justify-content-center"></a>
                <h2 class="h5 text-center mt-3 mb-3">secretary</h2>
                
            </div>
            <div class="col-12 col-md-6 p-5 mt-3 text-center">
                <a href="#"><img src="//www.markuptag.com/images/image-two.jpg" width="300" height="300"
                        class="rounded-circle justify-content-center" ></a>
                        
                        
                <h5 class="text-center mt-3 mb-3">surpench</h5>
                
            </div>
            

        </div>
    </section>




<!-- footer -->
<?php include 'footer.php';?>
</body>
</html>
