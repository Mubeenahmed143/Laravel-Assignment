<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Laravel</title>
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

        <main>

            <!--First container-->
            <div class="container">
        
              <!--Section: About-->
              <section id="about" class="about mt-4 mb-3">
        
                <!--Secion heading-->
                <h1  class="text-center mb-5 my-5 py-4 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="font-size: 50px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> About Us</h1>
        
                <!--First row-->
                <div class="row">
        
                  <!--First column-->
                  <div class="col-lg-5 col-md-12 mb-5 wow fadeIn" data-wow-delay="0.4s">
        
                    <!--Image-->
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Relax/4-col/img%20%287%29.jpg"
                      class="img-fluid z-depth-1 rounded" alt="My photo">
        
                  </div>
                  <!--/First column-->
        
                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">
        
                    <!--Title-->
                    <h2 class="grey-text-2 mb-4">Introduction</h2>
        
                    <!--Description-->
                    <p class="grey-text-2" align="justify" >SIMPLON’s Beauty care centre is very big shop of cosmetics and accessories in the city. With the success of the shop, owner had opened few more shops in the different cities also. Simplon product is known for our quality of the service which ưe are providing since 1985.
                      Beauty care is basically the science of beauty treatment that involves skin care, hair care, manicure, pedicure, Anti- aging treatments, facials, styling and so on. It aims at giving you a well groomed look that makes you more attractive.
                    </p>
        
                    
                  </div>
                  <!--/Second column-->
        
                </div>
                <!--/First row-->
        
              </section>
              <!--/Section: About-->
        
              <hr>
        
              <!--Projects section v.3-->
              <section id="services" class="mt-4 mb-4">
        
                
                <div class="row">
        
                  
                    <!--Tab panels-->
                    <div class="tab-content">
        
                      <!--Panel 1-->
                      <div class="tab-pane fade show in active" id="panel31" role="tabpanel">
                        <br>
        
                        <!--First row-->
                        <div class="row">
        
                          <!--First column-->
                          <div class="col-lg-5 col-md-12 mb-5">
        
                            <!--Featured image-->
                            <div class="view overlay z-depth-1 rounded">
                           
                            </div>
                          </div>
                          <!--/First column-->
        
                          <!--Second column-->
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
        
                            <!--Title-->
                           
                          </div>
                          <!--/Second column-->
                        </div>
                        <!--/First row-->
        
                      </div>
                      <!--/.Panel 1-->
        
                      <!--Panel 2-->
                      <!-- <div class="tab-pane fade" id="panel32" role="tabpanel"> -->
                        <br>
        
                        <!--First row-->
                        <!-- <div class="row"> -->
        
                          <!--First column-->
                          <!-- <div class="col-lg-5 col-md-12 mb-5"> -->
        
                            <!--Featured image-->
                           
                          <!--/First column-->
        
                          <!--Second column-->
                         <!--/First column-->
        
                          <!--Second column-->
                          <center>
                          <div class="col-lg-6 ml-xl-auto col-md-12 text-left">
        
                            <!--Title-->
                            <h2 class="mb-3">Our Services</h2>
        
                            <!--Description-->
                            <p class="grey-text-2" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              Nemo animi soluta ratione
                              quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                              eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                              perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                              possimus in hic molestias repellendus illo ullam odit quia velit.</p>
        
                          </div>
                        </center>
                          <!--/Second column-->
                        </div>
                        <!--/First row-->
                </div>
            </div>