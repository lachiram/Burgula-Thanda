<!DOCTYPE html>
<html lang="en">
<head>
  <title>Burugula Thanda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="">
  
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 6px;
  
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  box-shadow: 0px 2px 6px #999999;
}
.column img: hover{
   box-shadow: none;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}



</style>
</head>

<body>
  <!-- header -->
 <?php include 'header.php';?>



<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="gallary/fig-3.jpg" style="width:100%">
    <img src="gallary/fig-4.jpg" style="width:100%">
    <img src="gallary/fig-5.jpg" style="width:100%">
    <img src="gallary/fig-6.jpg" style="width:100%">
  </div>
  <div class="column">
     <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="gallary/fig-9.jpg" style="width:100%">
    <img src="gallary/fig-10.jpg" style="width:100%">
    <img src="gallary/fig-11.jpg" style="width:100%">
    <img src="gallary/fig-12.jpg" style="width:100%">
  </div>  
  <div class="column">
      <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="gallary/fig-9.jpg" style="width:100%">
    <img src="gallary/fig-15.jpg" style="width:100%">
    <img src="gallary/fig-16.jpg" style="width:100%">
    <img src="gallary/fig-17.jpg" style="width:100%">
    <img src="gallary/fig-1.jpg" style="width:100%">
  </div>
  <div class="column">
     <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="//www.markuptag.com/images/image-two.jpg" style="width:100%">
    <img src="gallary/fig-9.jpg" style="width:100%">
    <img src="gallary/fig-1.jpg" style="width:100%">
    <img src="gallary/fig-1.jpg" style="width:100%">
    <img src="gallary/fig-1.jpg" style="width:100%">
    <img src="gallary/fig-1.jpg" style="width:100%">
  </div>
</div>







<!-- footer -->
<?php include 'footer.php';?>
</body>
</html>