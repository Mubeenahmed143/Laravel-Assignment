<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Section - Laravel </title>
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

        <br>
        <h2 id="heading">Gallery</h2>
    <div class="container">
    <main class="main-gallery">
        <div class="gallery-image-container">
            <img class="gallery-image" src="photos/hair color gallery.jpg" alt="">
            <p>Hair Color</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/hair oils gallery.jpg" alt="">
            <p>Hair Oils</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/hair shampoo & conditioner gallery.jpg" alt="">
            <p>Hiar Shampoo & Conditioner</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/hair treatment gallery.jpg" alt="">
            <p>Hair Treatment</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/jewellery product  gallery.webp" alt="">
            <p>Jewellery Set</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/jewellery bracelate product  gallery.webp" alt="">
            <p>Jewellery Bracelete</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/jewellery ear ring product  gallery.jpg" alt="">
            <p>Jewellery Ear Ring</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/jewellery teka product  gallery.webp" alt="">
            <p>Jewellery Tikka</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/skin creams & lotion product .jpg" alt="">
            <p>Skin Creams & Lotion</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/skin Face-mists product.jpg" alt="">
            <p>Skin Face-mists</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/skin serum & oils product .jpg" alt="">
            <p>Skin Serums & Oils</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/skin treatment & mask product.jpg" alt="">
            <p>Skin Treatment & Mask</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/nail paint (black) product.jpg" alt="">
            <p>Nail Paint (black)</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/nail paint (maroon) product.jpg" alt="">
            <p>Nail Paint ( Maroon)</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/nail paint (grey) product.jpg" alt="">
            <p>Nail Paint (Grey)</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/nail paint (pink) product.jpg" alt="">
            <p>Nail Paint (Pink)</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/make up kits (eye) products .jpg" alt="">
            <p>Make-Up kits (eye)</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/make up kits (face) products .jpg" alt="">
            <p>Make-Up kits (face)</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/make up kits (makeup remover) products .jpg" alt="">
            <p>Make-Up kits (Make-up Remover)</p>
        </div>
        <div class="gallery-image-container">
            <img class="gallery-image" src="./photos/make up kits (tools & brushes) products .jpg" alt="">
            <p>Make-Up kits (Tools & Brushes)</p>
        </div>
    </main>
  </div>
  <br>