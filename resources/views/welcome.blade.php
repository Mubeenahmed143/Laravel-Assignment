<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home  - Laravel</title>
    <link rel="shortcut icon" href="./photos/pngtree-beauty-care-logo-png-image_5773807.png" type="image/x-icon">
    <link rel="shortcut icon" href="./pngtree-beauty-care-logo-png-image_5773807.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <!--------------------------------- navbar start ------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html"><img style="height: 60px;"
                    src="./photos/pngtree-beauty-care-logo-png-image_5773807.png" alt="SIMPLON logo"> SIMPLON'S</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                      </li>
                      
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex ms-auto" >
                      <div class="container-fluid mt-3">
                        <button class="btn">
                         <a href="../Login Page/login.html"><i class="fa-solid fa-user" style="color: whitesmoke;"></i></a>
                        </button>
                        <button class="btn" type="favourite">
                            <i class="fa-regular fa-heart"style="color: whitesmoke;"></i>
                        </button>
                        
                          <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                            <i class="fa-sharp fa-solid fa-cart-shopping"style="color: whitesmoke;"></i>
                          </button>
                      </div>
                    </div>
                    
                </div>
            </div>
        </nav>
    
        <div class="offcanvas offcanvas-end text-bg-dark" id="demo">
          <div class="offcanvas-header">
            <h1 class="offcanvas-title">Shopping Card</h1>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <div class="container card" style="height: 510px;">
              <img height="300" src="./photos/nail paint (black) product.jpg" alt="">
              <br>
              <div class="container text-center">
                <h2>Nail Paint (Black)</h2>
              </div>
              <br>
              <div class="container row row-cols-2 text-center">
                <h5>Subtiltle</h5>
                <h5>PKR 600</h5>
              </div>
              <br>
              <div class="container text-center">
                <a href="./checkout.html"><button class="btn btn-outline-dark" type="button">Checkout</button></a>
                <a href="#"><button class="btn btn-secondary" type="button">View Card</button></a>
              </div>

            </div>

            

          </div>
        </div>
       
        
        <!------------------------------- navbar end ------------------------------------>

         <!------------------------------  slider start------------------------------------>
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="515" src="./photos/slider 1.webp" class="d-block w-100" alt="slider pic 1">
          </div>
          <div class="carousel-item">
            <img height="515" src="./photos/slider 2.jpg" class="d-block w-100" alt="slider pic 2">
          </div>
          <div class="carousel-item">
            <img height="515" src="./photos/slider 4.jpg" class="d-block w-100" alt="slider pic 2">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!------------------------------  slider end-------------------------------------->
    <br>
    <!-------------------------- Deals of the day start -------------------------->
    <h1 id="heading"> Deal Of The Day </h1>

    <div class="container">
      <div class="row">
          <div class="col-md-4 col-sm-6 mb-4">
              <div class="box">
                  <img src="./photos/nail paint product 1.webp">
                  <div class="box-content">
                      <h3 class="title">Bron-Pretty (Paint)</h3>
                      <span class="post">Light Purple-Pink</span>
                  </div>
                  <ul class="icon">
                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                  </ul>
              </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4">
              <div class="box">
                  <img src="photos/skin care product 1.jpg">
                  <div class="box-content">
                      <h3 class="title">Asoke Skin Care</h3>
                      <span class="post">White Cream</span>
                  </div>
                  <ul class="icon">
                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                  </ul>
              </div>
          </div>

          <div class="col-md-4 col-sm-6 mb-4">
            <div class="box">
                <img style="height: 350px;" src="photos/make up kits.jpg">
                <div class="box-content">
                    <h3 class="title">Make Up kits</h3>
                    <span class="post">50% off</span>
                </div>
                <ul class="icon">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="box">
                  <img src="./photos/jewellery product 6.jpg">
                  <div class="box-content">
                      <h3 class="title">Gold Ear Ring set</h3>
                      <span class="post">Branded Jwellery</span>
                  </div>
                  <ul class="icon">
                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                  </ul>
              </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4">
              <div class="box">
                  <img src="photos/shampo product2.jpg">
                  <div class="box-content">
                      <h3 class="title">SUN SILK</h3>
                      <span class="post">Fig & Mint Refresh</span>
                  </div>
                  <ul class="icon">
                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                  </ul>
              </div>
          </div>
          
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="box">
                <img src="photos/shampo product3.jpg">
                <div class="box-content">
                    <h3 class="title">Clear Anti-Dandruff</h3>
                    <span class="post">Shampoo 170ml</span>
                </div>
                <ul class="icon">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </div>
      </div>
          </div>
        </div>

      </div>
      
      <br>
      <div class="smore">
      <a href=""><button class="btn btn-outline-light bg-dark">Show More</button></a>
    </div>
  
    <!-------------------------- Deals of the day start -------------------------->
    <br>
    <!-------------------------- hair background pic start -------------------------->
    <div class="bg-hair">
      <div class="container-fluid">
        <div class="home-hair">
          <h1 id="">
            All Hair Care Product
          </h1>
        </div>
        <br>
        <div class="but">
        <a href=""><button class="btn btn-outline-light bg-dark">Shop Now</button></a>
        </div>
      </div>
    </div>
    <!-------------------------- hair background pic end ---------------------------->
    <br>
    <!-------------------------- Hair Some Products start --------------------------->
    <h1 id="heading"> Some Hair Care Products </h1>

    <div class="container">
      <div class="row">
          <div class="col-md-4 col-sm-6">
              <div class="box">
                  <img src="./photos/shampo product1.jpg">
                  <div class="box-content">
                      <h3 class="title">Palmolive</h3>
                      <span class="post">Smooth Ultra Shampoo</span>
                  </div>
                  <ul class="icon">
                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                  </ul>
              </div>
          </div>
          <div class="col-md-4 col-sm-6">
              <div class="box">
                  <img src="photos/shampo product2.jpg">
                  <div class="box-content">
                      <h3 class="title">SUN SILK</h3>
                      <span class="post">Fig & Mint Refresh</span>
                  </div>
                  <ul class="icon">
                      <li><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                  </ul>
              </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="box">
                <img src="photos/shampo product3.jpg">
                <div class="box-content">
                    <h3 class="title">Clear Anti-Dandruff</h3>
                    <span class="post">Shampoo 170ml</span>
                </div>
                <ul class="icon">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </div>
      </div>
      <br>
      <div class="smore">
      <a href=""><button class="btn btn-outline-light bg-dark ">Show More</button></a>
      </div>
  </div>
    <!-------------------------- Hair Some Products end --------------------------->

    <!---------------------------- offers start ----------------------------->
    <br>
    <h1 id="heading">Simplon's All Categories Offers</h1>
    <div class="div5">
    <div class="container gif-main  div4">
      <div class=" row row-cols-md-2 row-cols-1">
          
        <div class="col card h-100 div3 mb-3">
          <img id="gif1" width="" height="250rem" src="./photos/hair gif.gif" alt="">
        </div>
                  
        <div class="col gif2 card h-100 div3 mb-3">
          <img width="" height="250rem" src="./photos/jewellery gif.gif" alt="">
        </div>
          
        <div class="col card h-100 div3 mb-3">
          <img height="250rem" width="" src="./photos/nails gif.gif" alt="">
        </div>
                  
        <div class="col gif2 card h-100 div3 mb-3">
          <img width="" height="250rem" src="./photos/makeup gif.gif" alt="">
        </div>
      </div>
    </div>
  </div>
    <!----------------------------------- offers end ---------------------------->
    <br>
    <!------------------------------------- Up Comming Products start ------------------------------>
    <h1 id="heading">UpComing Products</h1>
        <div class="container z-cards w-100">
          <div class="row div6 w-100">
    
            <div class="col mb-3 c-left">
              <div class="container customcontainer">
                <a href=""><img class="pics" src="./photos/skin care.jpg" alt="Avatar" class="skin care image"></a>
                <div class="overlay">
                 <a href=""><div class="text">Skin Care (Face Mask)</div></a>
                </div>
              </div>
            </div> 
    
            <div class="col mb-3">
              <div class="container customcontainer">
                <img class=" pics" src="./photos/jewellry.jpg" alt="Avatar" class="image">
                <div class="overlay">
                 <a href=""><div class="text">Braclate (Pure Gold)</div></a>
                </div>
              </div>
            </div>     
    
            <div class="col mb-3 c-right">
              <div class="container customcontainer">
                <img class="pics" src="./photos/hair1.jpg" alt="Avatar" class="image">
                <div class="overlay">
                 <a href=""><div class="text">Hair (Vig)</div></a>
                </div>
              </div>
            </div>
    
          </div>
        </div>
    <!-------------------------------- Upcoming Products cards end ------------------------------->






    <br>