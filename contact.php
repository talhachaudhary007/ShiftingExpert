
    <?php
        include "header.php";
    ?>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Contact</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact Us</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <div class="bg-primary text-dark text-center p-4">
                        <h5 class="m-0 text-white"><i class="fa fa-map-marker-alt text-white mr-2"></i>10B Al-Muteena, Deira Dubai, UAE</h5>
                    </div>
                
                        <iframe style="width: 100%; height: 470px;" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3607.8826283697003!2d55.31712967538441!3d25.274533477661258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDE2JzI4LjMiTiA1NcKwMTknMTAuOSJF!5e0!3m2!1sen!2s!4v1706128588809!5m2!1sen!2s"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Contact Us</h6>
                    <h1 class="mb-4">Contact For Any Queries</h1>
                    <div class="contact-form bg-secondary" style="padding: 30px;">

<!-- Ajax code start                     -->
<script>
jQuery(document).ready(function($){
$("#ContactForm").submit(function(e) {
	$("#ContactForm button").text('Sending Request....');
	e.preventDefault();
		$.ajax( {
			url: "contactmail.php",
			method: "post",
			data: $("#ContactForm").serialize(),
			dataType: "html",
			success: function(respond) {
                $("#Mail-Success").html(respond);
                $("#ContactForm button").text('Send Message');
                $("#ContactForm")[0].reset();
            }
        });
    });
});
 </script>
<!-- Ajax code end  -->

                        <div id="Mail-Success"></div>
                        <form name="" id="ContactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" name="username" class="form-control border-0 p-4" id="name" placeholder="Your Name"
                                    required="required"  data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" name="useremail" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" name="usersubject" class="form-control border-0 p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" name="userbody" rows="3" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                            <button class="btn btn-primary py-3 px-4" name="contact_submit" type="submit" id="">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php
    include "footer.php";
    ?>