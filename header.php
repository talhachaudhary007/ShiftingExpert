<!--
******************************************************
******************************************************

          ╔═══╗╔═══╗╔════╗╔═══╗╔════╗╔═══╗
          ║ ╔═╝║ ╔═╗ ║ ║ ╔═╗ ║ ╔═══╝ ║ ╔═╝
          ║ ╚═╗║ ╚═╝ ║ ║ ╚═╝ ║ ╚══╗  ║ ╚═╗
          ║ ╔═╝║ ╔═══╝ ║ ╔═══╝ ╔══╝  ║ ╔═╝
          ║ ║  ║ ╚═══╗ ║ ║   ║ ║     ║ ╚═╗
          ╚═╝  ╚═════╝ ╚═╝  ╚════╝   ╚═══╝

***********  Developed & Designed By    **************
***********       Talha Javed             ************
***********  talhajaved.info@gmail.com    ************
***********   WhatsApp / Call: +92 3246761804   ******
***********   http://www.cybrilltech.com     *********

           www.freelancer.com/hireme/cybrilltech007

******************************************************
******************************************************
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SHIFTING EXPERT | Best Movers and Packers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="home movers dubai, best movers and packers in dubai international movers and packers dubai, home movers and packers in dubai, professional movers and packers in dubai, movers and packers in abu dhabi, movers packers abu dhabi packers and movers, professional movers in dubai" >
    <meta name="description" content="Shifting Expert is a top best home movers and packers company in Dubai, UAE. We provide professional shifting and packing services. Request a quote or contact us today." >

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark x-topbar">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                    <small class="xfont"><i class="fa fa-phone-alt mr-2"></i><a href="tel:+971554139978" class="text-decoration-none">+971 55 413 9978</a></small>
                    <small class="px-3">|</small>
                    <small class="xfont"><i class="fab fa-whatsapp mr-2" style="font-size: 15px;"></i><a href="https://wa.me/+971554139978" class="text-decoration-none">Chat on Whatsapp</a></small>
                    <small class="px-3">|</small>
                    <small class="xfont"><i class="fa fa-envelope mr-2"></i><a href="mailto:info@shiftingexpert.ae" class="text-decoration-none">info@shiftingexpert.ae</a></small>

                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https://www.facebook.com/shiftingexpert.ae">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/shiftingexpert.uae/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <div class="logo x-logo"><img src="img/logo.png" width="150px" alt="Shifting Expert"></div>
            </a>
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">

          <!-- clicked page will be active using php -->
            <?php 
                $ScriptName = $_SERVER['REQUEST_URI'];
                $ScriptName = explode('/', $ScriptName);
                $PageName = end($ScriptName);
                $PageName = explode('?', $PageName);
                $PageName = current($PageName);
            ?>


                    <a href="index.php" class="<?php if($PageName == 'index.php'){echo 'active';}?> nav-item nav-link">Home</a>
                    <a href="about.php" class="<?php if($PageName == 'about.php'){echo 'active';}?> nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <!-- <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a> -->
                        <a href="#" class="<?php if(($PageName == 'packingservices.php') OR ($PageName == 'storageservices.php') OR ($PageName == 'housemoving.php') OR ($PageName == 'villamoving.php') OR ($PageName == 'residentialmoving.php') OR ($PageName == 'commercialmoving.php') OR ($PageName == 'officerelocation.php') OR ($PageName == 'corporaterelocation.php') OR ($PageName == 'apartmentmoving.php') OR ($PageName == 'furnituremoving.php') OR ($PageName == 'equipmentmoving.php') OR ($PageName == 'cheapmovers.php')){echo 'active';}?> nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="packingservices.php" class="dropdown-item">Packing Services</a>
                            <a href="storageservices.php" class="dropdown-item">Storage Services</a>
                            <a href="housemoving.php" class="dropdown-item">House Moving</a>
                            <a href="villamoving.php" class="dropdown-item">Villa Moving</a>
                            <a href="residentialmoving.php" class="dropdown-item">Residential  Moving</a>
                            <a href="commercialmoving.php" class="dropdown-item">Commercial Moving</a>
                            <a href="officerelocation.php" class="dropdown-item">Office Relocation</a>
                            <a href="corporaterelocation.php" class="dropdown-item">Corporate Relocation</a>
                            <a href="apartmentmoving.php" class="dropdown-item">Appartmet Moving</a>
                            <a href="furnituremoving.php" class="dropdown-item">Furniture Moving</a>
                            <a href="equipmentmoving.php" class="dropdown-item">IT Equipment Moving</a>
                            <a href="cheapmovers.php" class="dropdown-item">Cheap Movers</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="<?php if(($PageName == 'dubai.php') OR ($PageName == 'abudhabi.php') OR ($PageName == 'sharjah.php') OR ($PageName == 'ajman.php') OR ($PageName == 'rasalkhaimah.php') OR ($PageName == 'fujairah.php') OR ($PageName == 'alain.php') OR ($PageName == 'khorfakkan.php') OR ($PageName == 'ummalquwain.php')){echo 'active';}?> nav-link dropdown-toggle" data-toggle="dropdown">Areas</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="dubai.php" class="dropdown-item">Dubai</a>
                            <a href="abudhabi.php" class="dropdown-item">Abu Dhabi</a>
                            <a href="sharjah.php" class="dropdown-item">Sharjah</a>
                            <a href="ajman.php" class="dropdown-item">Ajman</a>
                            <a href="rasalkhaimah.php" class="dropdown-item">Ras Al Khaimah</a>
                            <a href="fujairah.php" class="dropdown-item">Fujairah</a>
                            <a href="alain.php" class="dropdown-item">Al Ain</a>
                            <a href="khorfakkan.php" class="dropdown-item">Khorfakkan</a>
                            <a href="ummalquwain.php" class="dropdown-item">Umm Al Quwain</a>
                        </div>
                    </div>
                    <a href="blog1.php" class="<?php if($PageName == 'blog1.php'){echo 'active';}?> nav-item nav-link">Blog</a>
                    <a href="faq.php" class="<?php if($PageName == 'faq.php'){echo 'active';}?> nav-item nav-link">FAQs</a>
                    <a href="contact.php" class="<?php if($PageName == 'contact.php'){echo 'active';}?> nav-item nav-link">Contact</a>
                </div>
                <a href="#getquote-modal" data-toggle="modal" class="btn btn-primary py-2 px-4 d-none d-lg-block">Get A Quote</a>
            </div>
        </nav>
    </div>


      <!-- Modal -->
  <div class="modal fade" id="getquote-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 60%;">
      <div class="modal-content p-5">
        <div class=" modal-header" style="border-bottom: 0px;">
          <div class="pl-4 pb-3">
            <h5 class="text-primary text-uppercase font-weight-bold m-0">Shifting Services</h5>
            <h2 class="pb-2 text-dark">Request Free Quote</h2>
            </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body px-5" style="padding: 0px;">

    <!-- Ajax Code Start -->

            <script>
                jQuery(document).ready(function($){
                $("#HeaderQuote").submit(function(e) {
                    $("#HeaderQuote button").text('Sending Request....');
                    e.preventDefault();
                        $.ajax( {
                            url: "quote.php",
                            method: "post",
                            data: $("#HeaderQuote").serialize(),
                            dataType: "html",
                            success: function(respond) {
                                $("#success").html(respond);
                                $("#HeaderQuote button").text('Send Message');
                                $("#HeaderQuote")[0].reset();
                            }
                        });
                    });
                });
            </script>

    <!-- Ajax Code end -->


            <div id="success"></div>
            <form id="HeaderQuote">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" required class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="movefrom" required class="form-control" placeholder="Moving From">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="date" name="date" required class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                        <input type="tel" name="phone" required class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" name="moveto" required class="form-control" placeholder="Moving To">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" >
                            <textarea class="form-control" name="message" required placeholder="Enter complete details..." id="" rows="5"></textarea>
                        </div>
                    </div>
                    <button style="margin: auto;" name="index_form" class="btn btn-primary quote-btn mt-3 mb-2">Get free Quote</button>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>


