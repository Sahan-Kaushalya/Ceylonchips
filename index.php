<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resource/logo/ricon.ico" class="ico"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Ceylon Chips</title>

</head>

<body>
<div class="preloader">
    <img src="resource\logo\preloader.gif" alt="Loading..." class="preloader-img">
    <h1 class="text text-light fw-semibold text-center" style="font-family:Cookie;">Ceylon Chips</h1>
  </div>

<div class="overflow-x-hidden content">
<?php include "header.php"; ?>
<div class="mt-5">

<!-- carousel  Code-->
 <div id="carouselExampleCaptions" class="carousel slide carousel-fade carousel1 " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner carousel-inner1">
  
    <div class="carousel-item active carousel-item1" data-bs-interval="1500"> 
      <img src="resource\bg\ds1.png" class="d-block w-100 bg-dark bg-opacity-75 img1" alt="...">
      <div class="carousel-caption ">
      <img src="resource/product/2mini.svg"  width="350" height="470">
        <h1 class="carimg1">MR.Chili</h1>
        <p class="mb-2" style="font-family:Montserra">Spicy Bananna Chips by Ceylon Chips.</p>
        <button class="btn btn-danger mb-5"><a href="product.php" class="text text-decoration-none text-light">More Info</a></button>
      </div>

    </div>
    <div class="carousel-item carousel-item1">
      <img src="resource\bg\vv.png" class="d-block w-100 bg-dark bg-opacity-50 img1" alt="...">
      <div class="carousel-caption " data-bs-interval="1000">
      <img src="resource/product/1mini.svg"  width="350" height="470">
        <h1 class="carimg1">Mr.Banana</h1>
        <p class="mb-2" style="font-family:Montserra">Real Banana Flavor.150g - Rs.260.00</p>
        <button class="btn btn-warning mb-5"><a href="product.php" class="text text-decoration-none text-light">More Info</a></button>
      </div>
    </div>

    <div class="carousel-item carousel-item1">
      <img src="resource\bg\gb.jpg" class="d-block w-100 bg-dark bg-opacity-50 img1" alt="...">
      <div class="carousel-caption " data-bs-interval="1000">
      <img src="resource/product/3mini.svg"  width="350" height="470">
        <h1 class="carimg1"> Ceylon Classic</h1>
        <p class="mb-2" style="font-family:Montserra">Classic Banana Chips (Limited Edition)</p>
        <button class="btn btn-success mb-5"><a href="product.php" class="text text-decoration-none text-light">More Info</a></button>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- carousel -->

<!-- Sub brand -->
<div class="card border-0">
  <div class="card-body border-bottom">
    <h2 class="text text-center fw-bold text-uppercase" style="font-family:Montserra;"> Our Sub Brands</h2>
  <div class="row text-center">
    <ul class="list-unstyled list-inline ms-lg-4 ">
        <li class="list-inline-item ">
          <i class="subname" style="font-family: Cookie;" >MR.Chili</i> 
          <div class="ms-2 ms-md-3 ms-lg-4 vr text-black"></div>
          </li> 

        <li class="list-inline-item">
          <i class="subname" style="font-family: Cookie;">Mr.Banana</i>
          <div class="ms-2 ms-md-3 ms-lg-4 vr text-black"></div>
        </li>
                  
        <li class="list-inline-item">
         <i class="subname" style="font-family: Cookie;">Classic</i>
         <div class=" ms-2 ms-md-3 ms-lg-4 vr text-black"></div>
        </li>

         <li class="list-inline-item ">
          <i class="subname" style="font-family: Cookie;">Potato Chips</i>
          <div class="ms-2 ms-md-3 ms-lg-4 vr text-black"></div>
          </li>

         <li class="list-inline-item">
          <i class="subname" style="font-family: Cookie;">Spicy</i>
          <div class=" ms-2 ms-md-3 ms-lg-4 vr text-black"></div>
            </li>

        <li class="list-inline-item">
        <i class="subname" style="font-family: Cookie;">Cheesy Banana</i>
        
        </li>
     </ul>
</div>

  </div>
</div>
<!-- Sub brand -->

<!--Badu Badu -->
<div class="text-black pb-2 pt-1">
    <div class="row col-12 justify-content-center ">

    <h2 class="text text-center fw-bold text-uppercase mt-3 mb-3" style="font-family:Montserra;"> Our Products</h2>
<div class="card ms-4 ms-3 mt-3 mt-sm-0 mt-md-0 mt-lg-0 mt" style="width: 15rem;">
  <img src="resource/product/1mini.svg" class="card-img-top" alt="..." height="200px">
  <div class="card-body">
    <h5 class="card-title text-center fw-bold fo" style="font-family:Cookie;">Mr. Banana</h5>
    <p class="card-text text-center fw-semibold fo1" style="font-family:Open;"> Real Banana Flavor </p>
    <p class="btn btn-warning text-light align-content-center ms-5"><a href="product.php" class="text text-decoration-none text-light">See More</a></p>
   </div>
</div>
  
<div class="card ms-3 mt-3 mt-sm-0 mt-md-0 mt-lg-0" style="width: 15rem;">
  <img src="resource/product/2mini.svg" class="card-img-top" alt="..." height="200px">
  <div class="card-body">
    <h5 class="card-title text-center fw-bold fo2" style="font-family:Cookie;">MR. Chili </h5>
    <p class="card-text text-center fw-semibold fo1" style="font-family:Open;"> Spicy Bananna Chips </p>
    <p class="btn btn-danger align-content-center ms-5"><a href="product.php" class="text text-decoration-none text-light">See More</a></p>
   </div>
</div>

<div class="card ms-3 mt-3 mt-sm-0 mt-md-0 mt-lg-0 " style="width: 15rem;">
  <img src="resource/product/3mini.svg" class="card-img-top" alt="..." height="200px">
  <div class="card-body">
    <h5 class="card-title text-center fw-bold fo3" style="font-family:Cookie;">Classic</h5>
    <p class="card-text text-center fw-semibold fo1" style="font-family:Open;"> (Limited Edition) </p>
    <p class="btn btn-success align-content-center ms-5" ><a href="product.php" class="text text-decoration-none text-light">See More</a></p>
   </div>
</div>

<div class="card ms-3 mt-3 mt-sm-0 mt-md-0 mt-lg-0" style="width: 15rem;">
  <img src="resource/product/4mini.svg" class="card-img-top" alt="..." height="200px">
  <div class="card-body">
    <h5 class="card-title text-center fw-bold fo3" style="font-family:Cookie;">Potato Chips</h5>
    <p class="card-text text-center fw-semibold fo1" style="font-family:Open;"> Potato Flavor </p>
    <p class="btn btn-primary align-content-center ms-5"><a href="product.php" class="text text-decoration-none text-light">See More</a></p>
   </div>
</div>

<div class="card ms-3 d-none d-md-block d-lg-block d-xl-block" style="width: 15rem;">
  <img src="resource/product/5mini.svg" class="card-img-top" alt="..." height="200px">
  <div class="card-body">
    <h5 class="card-title text-center fw-bold fo3" style="font-family:Cookie;">Spicy Potato</h5>
    <p class="card-text text-center fw-semibold fo1" style="font-family:Open;"> Spicy Black Potato </p>
    <p class="btn btn-dark align-content-center ms-5"><a href="product.php" class="text text-decoration-none text-light">See More</a></p>
   </div>
</div>

   </div>



</div>

<!--Badu Badu -->


<!--Api Kauda -->
<div class="row col-12 ms-2 mt-5">
  <div class="col-12 col-xl-6 col-lg-6 col-md-6 ">
    <h1 class="text text-center fw-bold text-uppercase txtmy" style="font-family:Montserra;"> <span class="text text-success txtmy fw-bold text-uppercase">Who</span> are we</h1>
    <p class="text text-center ms-2 fw-semibold txtp" style="font-family:Open;">The Ceylon Banana Chips Factory is a  premier manufacturer of high-quality banana chips located in Sri Lanka. 
    Established with a passion for preserving traditional flavors, We specialize in crafting delicious, crispy banana chips using locally sourced bananas and authentic recipes. 
    With a commitment to excellence and customer satisfaction, We strive to deliver a delightful snacking experience to banana chip enthusiasts Worldwide.</p>
  </div>

  <div class="col-5 border-start">
    <img src="resource/img/a.svg" class="rounded viso1 rounded-2 mb-2 ms-sm-5 me-2" alt="...">
  </div>
  
</div>
<?php include "vision.php"; ?>
<!--Api Kauda -->

<!-- ======= Counts Section ======= -->

<?php include "count.php";?>
    <!-- End Counts Section -->







<!-- Meka ain karanna epa -->
<?php include "news.php";?>
<?php include "footer.php"; ?>
<?php include "chatbot.php";?>
</div></div>
<!-- -->

<script src="bootstrap.js"></script>
<script src="bootstrap.min.js"></script>
<script src="script.js"></script>


</body>
</html>