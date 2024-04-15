<?php
        include "header.php";
    ?>

<!-- Header Start -->
<div class="x-header jumbotron jumbotron-fluid">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 pb-2">Shifting Expert</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Best Movers and Packers In UAE</a></p>
        </div>
    </div>
</div>
<!-- Header ends -->

<!-- carousel start -->

<div id="carouselExampleIndicators" class="carousel slide x-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/carousel/carousel3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h1 class="text-light text-center carousel-xh">UAE Residential Moving</h1>
                <p class="text-light carousel-xp font-weight-bold mt-3 mb-4">No matter the size or distance of your
                    move, We ensure your belongings reach their destination safely..</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel/carousel6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h1 class="text-light text-center carousel-xh">Flexible & Affordable Services</h1>
                <p class="text-light mt-3 mb-4 carousel-xp font-weight-bold">Is there an emergency that will speed up
                    or delay your move date? No problem, We're here.. </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel/carousel11.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h1 class="text-light text-center carousel-xh">Commercial Moving UAE</h1>
                <p class="text-light mt-3 mb-4 carousel-xp font-weight-bold">Expert Team to move your office
                    equipment and furniture with extra care from one place to another..</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- carousel end -->


<!-- Request Quote Start -->

<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5 py-lg-0">
                <div class="jumbotron-fluid mb-5" style="background-color: #f2f2f4;">
                    <div class="container  py-5">
                        <h5 class=" text-primary text-uppercase font-weight-bold mt-4">Shifting Services</h5>
                        <h1 class=" text-dark pb-5">Request A Quote</h1>
                        <div class="mx-auto" style="width: 100%; ">

<!-- Ajax Code Start -->

 <script>
jQuery(document).ready(function($){
$("#IndexForm").submit(function(e) {
	$("#IndexForm button").text('Sending Request....');
	e.preventDefault();
		$.ajax( {
			url: "quote.php",
			method: "post",
			data: $("#IndexForm").serialize(),
			dataType: "html",
			success: function(respond) {
                $("#IndexSuccess").html(respond);
                $("#IndexForm button").text('Send Message');
                $("#IndexForm")[0].reset();
            }
        });
    });
});
 </script>

    <!-- Ajax Code end -->
                        <div id="IndexSuccess"></div>
                            <form id="IndexForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" required class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" required class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="movefrom" class="form-control" placeholder="Moving From">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="date" name="date" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone" required class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="moveto" class="form-control" placeholder="Moving To">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Enter complete details..." id=""
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <button style="margin: auto;" name="index_form" class="btn btn-primary mt-3 mb-3">Get Free
                                        Quote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/quote3.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Request Quote end -->


<!-- Services Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
            <h1 class="mb-4">Plan Your Moving With Us</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-phone-alt text-light pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Contact Us</h6>
                </div>
                <p>Reach out to Shifting Expert for all your relocation needs. We're ready to assist you.</p>
                <a class="border-bottom blog-text-decoration-none" href="contact.php">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-box-open text-light pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Packing</h6>
                </div>
                <p>Get professional packing services with us. We ensures the safety of your items.</p>
                <a class="border-bottom blog-text-decoration-none" href="packingservices.php">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <!-- <i class="fa fa-2x fa-warehouse text-light pr-3"></i> -->
                    <i class="fa fa-2x fa-store text-light pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Storage solutions</h6>
                </div>
                <p>Explore secure, reliable storage options with us, and get unlimited time flexibility .</p>
                <a class="border-bottom blog-text-decoration-none" href="storageservices.php">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-truck text-light pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">On the Move</h6>
                </div>
                <p>Trust our expertise to make your journey to a new location smooth and efficient.</p>
                <a class="border-bottom blog-text-decoration-none" href="about.php">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Features Start -->

<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/kashti.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Why Choose Us</h6>
                <h1 class="mb-4">Faster, Safe and Trusted</h1>
                <p>At Shifting Expert, we stand out as the preferred choice for your relocation needs in the United Arab
                    Emirates. We offer a seamless experience marked by professionalism, reliability, and affordability.
                </p>
                <p class="mb-4"> From secure packing and storage solutions to efficient house and office moving
                    services, we guarantee a perfect relocation experience. Choose Shifting Expert for a trusted partner
                    committed to making your move stress-free and cost-effective.</p>
                <ul class="list-inline">
                    <li>
                        <h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                    <li>
                        <h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6>
                    </li>
                    <li>
                        <h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6>
                    </li>
                </ul>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
            <h1 class="mb-4">Our Clients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-1">
                    <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Talha Chaudhary</h6>
                        <small>- February 15, 2024</small>
                    </div>
                </div>
                <div class="text-left py-1" style="font-size: 13px; dispaly: flex; color: gold;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p class="m-0">Exceptional service from Shifting Expert! Their team made my move in Dubai seamless, and
                    their cost-effective approach exceeded my expectations. Highly recommend.</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Arslan Johnson</h6>
                        <small>- March 5, 2024</small>
                    </div>
                </div>
                <div class="text-left py-1" style="font-size: 13px; dispaly: flex; color: gold;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star" style="color:lightgrey;"></i>
                </div>
                <p class="m-0">Moved with Shifting Expert and couldn't be happier. Professional packing, timely
                    delivery, and friendly staff. A stress-free relocation experience indeed.</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Ali Mathew</h6>
                        <small>- April 20, 2024</small>
                    </div>
                </div>
                <div class="text-left py-1" style="font-size: 13px; dispaly: flex; color: gold;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star" style="color:lightgrey;"></i>
                </div>
                <p class="m-0">I choose Shifting Expert for my office relocation in Abu Dhabi, and they delivered beyond
                    my expectations. Efficient, reliable, and budget-friendly. Top-notch service</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;"
                        alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Sohaib Rodriguez</h6>
                        <small>- May 10, 2024</small>
                    </div>
                </div>
                <div class="text-left py-1" style="font-size: 13px; dispaly: flex; color: gold;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                    <i class="fa fa-star" style="color:lightgrey;"></i>
                    <i class="fa fa-star" style="color:lightgrey;"></i>
                </div>
                <p class="m-0">Shifting Expert made my villa move in Sharjah effortless. Their attention to detail in
                    packing and careful handling of items was impressive.</p>
            </div>
        </div>
        <div class="text-center pb-2">
            <p class="mt-3 mb-2">Read over 15000 verified reviews. So, get ready to experience the best moving services
                with Shifting Experts in United Arab Emirates (UAE), Share your experience with Shifting Expert by
                leaving a review.</p>
            <a href="https://g.page/r/CVAuhnqxkmeoEBM/review" target="-blank"
                class="btn btn-primary my-3 py-2 px-4">Review us on <i class="fab fa-google-plus-g"></i></a>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!--  Quote Request Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="container py-5 ">
        <div class="row align-items-center">
            <div class="col-lg-12 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Vision</h6>
                <h1 class="mb-4">Company Vision</h1>
                <p class="mb-4">Our vision is to provide best relocation services and build solid relationship with
                    client. We are committed to give delivery of your goods safe and on time. Our vehicles run on GPS
                    system. Through this technology we deliver your goods 100% on time. <br> Our services are completely
                    specifically for our clients and we are right here to provide good as possible.</p>
                <div class="row">
                    <div class="col-sm-3">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">50</h1>
                        <h6 class="font-weight-bold mb-4">Services</h6>
                    </div>
                    <div class="col-sm-3">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                        <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                    </div>
                    <div class="col-sm-3">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                        <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                    </div>
                    <div class="col-sm-3">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                        <h6 class="font-weight-bold mb-4">Complete Moves</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Company</h6>
                <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
                <p class="mb-4">Shifting experts are professional Movers and Packers company working for the last 17+
                    years. Our trained and experienced team provides our customers with efficient services. We remain
                    your trustworthy services partner by providing quality relocation services. <br>We are committed to
                    give delivery of your goods safe and on time. We provide relocation services all major cities of the
                    United Arab Emirates (UAE). </p>
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Dubai</li>
                            <li>Sharjah</li>
                            <li>Abu Dhabi</li>
                            <li>Fujairah</li>
                            <li>Rasalkhaimah</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Ajman</li>
                            <li>Alain</li>
                            <li>Ummalquwain</li>
                            <li>Khorfakkan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid w-100" src="img/about.jpg" alt="">
                <div class="bg-primary text-dark text-center p-4">
                    <h3 class="m-0">25+ Years Experience</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Pricing Plan Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class=" pb-2">
            <h6 class="ml-4 text-primary text-uppercase font-weight-bold">Pricing Plan</h6>
            <h1 class="mb-5">Affordable Pricing Packages</h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="text-center p-4">
                        <h1 class="display-4 mb-0">
                            <small class="align-top text-muted font-weight-medium"
                                style="font-size: 22px !important; line-height: 45px;">AED</small>500<small
                                class="align-bottom text-muted font-weight-medium"
                                style="font-size: 16px !important; line-height: 40px;">/Mo</small>
                        </h1>

                    </div>
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Standard</h3>
                    </div>

                    <div class="d-flex flex-column align-items-center py-4">
                        <ul>
                            <li>Basic Packing</li>
                            <li>Standard Transport</li>
                            <li>Limited Storage</li>
                            <li>Affordable Price</li>
                        </ul>
                        <a href="contact.php" class="btn btn-primary py-2 px-4 my-2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="text-center p-4">
                        <h1 class="display-4 mb-0">
                            <small class="align-top text-muted font-weight-medium"
                                style="font-size: 22px !important; line-height: 45px;">AED</small>2999<small
                                class="align-bottom text-muted font-weight-medium"
                                style="font-size: 16px !important; line-height: 40px;">/Mo</small>
                        </h1>
                    </div>
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Premium</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <ul>
                            <li>Professional Packing</li>
                            <li>Express Transport</li>
                            <li>Extended Storage</li>
                            <li>Full Insurance</li>
                        </ul>
                        <a href="contact.php" class="btn btn-primary py-2 px-4 my-2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="text-center p-4">
                        <h1 class="display-4 mb-0">
                            <small class="align-top text-muted font-weight-medium"
                                style="font-size: 22px !important; line-height: 45px;">AED</small>4000<small
                                class="align-bottom text-muted font-weight-medium"
                                style="font-size: 16px !important; line-height: 40px;">/Mo</small>
                        </h1>
                    </div>
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Business</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <ul>
                            <li>VIP Packing Services</li>
                            <li>Priority Transport</li>
                            <li>Unlimited Storage</li>
                            <li>Premium Concierge</li>
                        </ul>
                        <a href="conatct.php" class="btn btn-primary py-2 px-4 my-2">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">Why choose us</h6>
                <h1 class="mb-4">Residential Buisness Corporate Movers</h1>
                <p class="mb-4">
                    Our mission is simple. We want to make it easy for our clients to make big moves with confidence and
                    ease. Your relocation can open up new opportunities for your family or business, whether moving into
                    your dream home, expanding your business, or exploring the market in a new country. </p>
                <p> Our movers and packers have decades of experience to make your fresh start a seamless and joyful
                    experience. We are committed to competitive rates while delivering excellence with every move.
                    Contact us today for a quote.
                </p>
                <a href="contact.php" class="btn btn-primary py-2 px-4 my-2">Contact us </a>

                <!-- <div class="d-flex align-items-center pt-2">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                </div> -->

            </div>

            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid w-100" src="img/chacha.jpg" alt="">
                <div class="bg-primary text-center p-4">
                    <h3 class="m-0 text-white">25+ Years Experience</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Blog Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Our Blog</h6>
            <h1 class="mb-4">Latest From Blog</h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="">Sohaib</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Mover Exp</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">Are you looking for a MOVERS</h4>
                    <p>So, here is the complete information about your search. The MOVERS and PAKERS service in Dubai makes the movement process easy and stress-free. Moving can be daunting and troublesome</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" style="color: #ff4800 !important;" href="sharjah.php">Read More
                        <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="img/chachy.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">17</h4>
                        <small class="text-white text-uppercase">April</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="">Muneeb </a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Packaging Sup</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">Using the service of packers reliable</h4>
                    <p>Yes, using the service of movers and packers in SHARJAH is reliable. This method can save your possible damage. This is a cost-effective method that depends upon the volume of your belongings</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" style="color: #ff4800 !important;" href="packingservices.php">Read More
                        <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">21</h4>
                        <small class="text-white text-uppercase">June</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="">Haseeb</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Truck Driver</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">What are the functions of movers?</h4>
                    <p>A mover can transfer furniture and belongings from one point to another. The duty of movers is to ensure that all the items are placed safely without any damage. Movers are physically fit</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" style="color: #ff4800 !important;" href="dubai.php">Read More
                        <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<?php
        include "footer.php";
    ?>