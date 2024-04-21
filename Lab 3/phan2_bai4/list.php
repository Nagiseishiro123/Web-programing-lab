<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
      .nav-link.fw-bold{ 
         color: #ffffff; 
      }
      .card {
         transition: transform 0.2s;
      }
      .card:hover {
         transform: scale(1.1);
      }
      .Logo{
        filter: brightness(200%);
      }
      .Logo img{
         width: 6rem;
      }
       a {
        text-decoration: none; 
        color: inherit; 
      }
       h1{
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }
      .btn3{
       margin-left: 35px;
      }
    </style>
    <title>The Vit@l</title>
  </head>
  <body>

    <nav class="navbar bg-dark navbar-expand-lg">
      <div class="container-lg gap-5">
        <a href="#" class="navbar-brand"
          ><img src="./img/logo.png" alt="" class="Logo" style="width: 6rem"
        /></a>

        <button class="navbar-toggler px-3 py-2 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#searchbar"  style="background-color: white; color: black;">
          <span class="bi bi-search" style="width: 16px; height: 16px; display: inline-block; fill: currentColor;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </span>
        </button>        

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" style="background-color: white; color: black;">
          <span class="bi bi-list"></span>
        </button>

        <div class="collapse navbar-collapse gap-5" id="navmenu">
          <ul class="navbar-nav ms-auto gap-3">
            <li>
              <a href="#contact" class="nav-link fw-bold">CATEGORY</a>
            </li>
            <li>
              <a href="#follow" class="nav-link fw-bold">CONTACT US</a>
            </li>
            <li class="">
              <a href="#login" class="nav-link fw-bold">FOLLOW US</a>
            </li>
          </ul>
        </div>

        <div
          class="collapse navbar-collapse col-lg-1 position-relative"
          id="searchbar"
        >
          <input
            type="text"
            class="form-control rounded-5 px-5 fst-italic"
            placeholder="Searching..."
          /><i
            class="fa-sharp fa-solid fa-magnifying-glass position-absolute text-secondary"
            style="margin-left: 20px"
          ></i>
        </div>
      </div>
    </nav>

    <section class="mt-4">
      <div class="container bg-body">
        <div class="row">
          <div class="col-lg-2 container" >
            <div class="fw-bold mb-2">CATEGORY</div>
            <ul class="navbar-nav">
              <li><a href="" class="text-capitalize nav-link">Resistors</a></li>
              <li><a href="" class="text-capitalize nav-link">Capacitors</a></li>
              <li><a href="" class="text-capitalize nav-link">Inductors</a></li>
              <li><a href="" class="text-capitalize nav-link">Diodes</a></li>
              <li><a href="" class="text-capitalize nav-link">Transistors</a></li>
            </ul>
            <div class="fw-bold mt-4 mb-2">BEST SELLER</div>
            <ul class="navbar-nav">
              <li><a href="" class="text-capitalize nav-link">Arduino Uno</a></li>
              <li><a href="" class="text-capitalize nav-link">Raspberry Pi</a></li>
              <li><a href="" class="text-capitalize nav-link">555 Timer IC</a></li>
              <li><a href="" class="text-capitalize nav-link">LM386 Audio Amplifier</a></li>
              <li><a href="" class="text-capitalize nav-link">Arduino Nano</a></li>
            </ul>
          </div>


          <div class="col-lg px-5" >
            
            <h1 class="fw-bold mb-4">
              TOP ELECTRONICS COMPONENTS
            </h1>
            <div class="row row-cols-1 row-cols-md-3 g-4" id="products">
           
             </div>
            <nav class="mt-5">
              <ul class="pagination justify-content-end">
                <li class="page-item">
                  <a class="page-link text-dark">Previous</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item">
                  <a class="page-link text-dark">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link text-dark">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link text-dark">Next</a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="col-lg-2">
            <img src="./img/banner.jpg" alt="jjk" class="mb-4" style="width: 100%; height:100%;">
          </div>
        </div>
      </div>
    </section>


    <footer class="mt-4 bg-dark text-white p-4">
      <div class="container-lg">
        <div class="d-flex justify-content-between align-items-start">
          <div class="d-flex flex-column">
            <span class="text-uppercase fw-bold mb-2">Support</span>
            <a href="" class="nav-link">Help</a>
            <a href="" class="nav-link">Order </a>
            <a href="" class="nav-link">Copyright</a>
          </div>
          <div class="d-flex flex-column">
            <span class="text-uppercase fw-bold mb-2">Information</span>
            <a href="" class="nav-link">Email</a>
            <a href="" class="nav-link">Address</a>
 
          </div>
          <div>
            <span class="text-uppercase fw-bold">Contact us</span>
            <div class="mt-3">
              <i class="fa-brands fa-facebook fs-1 mx-2"></i>
              <i class="fa-brands fa-instagram fs-1 mx-2"></i>
              <i class="fa-brands fa-tiktok fs-1 mx-2"></i>
            </div>
          </div>
        </div>
        <div class="text-secondary text-center">Copyright By Gojo Satoru</div>
      </div>
    </footer>
    <script>
    $(document).ready(function () {
      $.ajax({
        url: 'list_products.php',
        type: 'GET',
        success: function (response) {
          $('#products').append(response);
        }
      });
    });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>