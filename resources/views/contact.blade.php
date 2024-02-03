<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact  - Laravel</title>
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

        <br><br>
        <!----------------- Contact us form start ----------------------->

        <div class="container">
            <span id="red">
                <a href="./index.html">Home</a> <i class="fa-sharp fa-solid fa-chevron-right" style="font-size: 10px;"></i> Contact Us
            </span>
            <br><br>
            <h3>Contact Us</h3>
            <p>Have a question or comment? <br> Use the form below to send us a message or contact us by mail at: <br> simplonsbeautycarepk@gmail.com</p>

            <div class="row">
                
                <div class="col">
                    <form action="/action_page.php">
                        <div class="mb-3 mt-3">
                          <label for="email" class="form-label">Name</label>
                          <input type="name" class="form-control contact-inpt" id="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Number</label>
                          <input type="number" class="form-control contact-inpt" id="number" placeholder="Enter Your Number" required>
                        </div>

                        <label for="comment">Comments</label>
                        <textarea class="form-control contact-input" rows="5" id="comment" name="text"></textarea>
                        <br>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                              <input class="form-check-input" placeholder="Write a message" type="checkbox" name="remember" required> Remember me
                            </label>
                          </div>
                          <button type="submit" class="btn btn-outline-light">Submit Contact</button>
                    </form>                      
                </div>

                
                <div class="col check-2">
                  <br>
                  <h5>Get In Touch!</h5>
                    <p>We'd love to hear from you - please use the form to 
                      <br> send us your message or ideas. Or simply pop in for a 
                      <br> cup of fresh tea and a cookie:
                    </p>
                    <br>
                    <i class="fa-solid fa-message" style="font-size: 20px;"></i> <span> TEXT: +92300 0325336</span>
                    <br>
                    <i class="fa-sharp fa-solid fa-envelope" style="font-size: 20px;"></i>  <span> customersupport@simplonsbeautycare.pk</span>
                    <br><br>
                    SD-1, Block A <br> North Nazimabad Town <br> Karachi, 74700
                    <hr>
                    <p>Opening Hours:</p>
                    <p>MON to SAT: 9:00AM - 10:00PM <br> SUN: 10:00AM - 6:00PM</p>
                </div>

                
            
            </div>
        </div>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.1378547755935!2d67.03045847523765!3d24.927373277885646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1689072769324!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  


