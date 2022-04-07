<?php
/**
 * Template Name: CONTACT Page
 * The CONTACT page template file
 */
get_header();
?>

<section class="no-padding sh-contact">
    <div class="sub-header ">
        <span>CONNECT WITH US</span>
        <h3>GET IN TOUCH</h3>
        <ol class="breadcrumb">
            <li>
                <a href="/"><i class="fa fa-home"></i> HOME </a>
            </li>

            <li class="active">CONTACT US</li>
        </ol>
    </div>
</section>
<!-- /Sub HEader -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="iconbox-inline">
                    <span class="icon icon-location2"></span>
                    <h4>Head Office</h4>
                    <p> A-45, East Of Kailash, Delhi-110065
                        <br>
                        Mon-Sat 10.00am - 6.00p.m
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iconbox-inline">
                    <span class="icon icon-phone"></span>
                    <h4>Phone Numbers</h4>
                    <p><a href="tel:919990148248" style="color:#727272"> +91 9990148248</a><br /><br /></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="iconbox-inline">
                    <span class="icon icon-envelop"></span>
                    <h4>E-mail Address</h4>
                    <p> <a href="mailto:a admin@urbancfo.in" style="color:#727272">
                            admin@urbancfo.in</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="map-canvas" class="map-warp" style="height: 360px;">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7008.828627502929!2d77.250867!3d28.557319000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c818e6779b%3A0x8a95c032de5920d1!2sEast%20of%20Kailash%2C%20New%20Delhi%2C%20Delhi%20110065!5e0!3m2!1sen!2sin!4v1643444606381!5m2!1sen!2sin"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-block title-contact">
                    <h3>Send an Message</h3>
                    <span class="bottom-title"></span>
                </div>
            </div>
            <div class="form-contact-warp">
                <form name="contactform" id="ajax-contact" role="form" action="" method="post">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="Name" name="name" placeholder="Your Name*">
                        <div id="errmessagename" class="alert dg-alert01 border-danger color-danger fade in">Name is
                            Required.</div>

                    </div>


                    <div class="col-md-4">
                        <input type="text" class="form-control" id="Email" name="email" placeholder="Your Email*">
                        <div id="errmessageemail" class="alert dg-alert01 border-danger color-danger fade in">Email is
                            Required and must be valid.</div>
                    </div>
                    <div class="col-md-4">

                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number">

                    </div>
                    <div class="col-md-4">
                        <!-- <input type="text" class="form-control" id="Subject" name="subject" placeholder="Subject">
                        <div id="errmessagesubject" class="alert dg-alert01 border-danger color-danger fade in">Subject
                            is Required.</div> -->

                         
                                 <input type="date" id="consultDate" class="form-control" name="consultDate"  placeholder="Your Appointment Date">
                                 <div id="errmessagesubject" class="alert dg-alert01 border-danger color-danger fade in">Date is Required.</div>
                           
                            
                    </div>
                    <div class="col-md-8">

                        <div class="form-group">
                            <textarea name="comments" class="form-control" rows="5" id="Message" name="message"
                                placeholder="Your message*"></textarea>
                            <div id="errmessagemessage" class="alert dg-alert01 border-danger color-danger fade in">
                                Message is Required.</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                   
                        <button type="submit" name="submit" value="Submit" id="submitbutton" class="btn-main-color"><i
                                class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                        <div id="showloader" class="loadingbar">
                            <div class="text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/spinning-loading.gif"
                                    class="img-responsive" alt="Image" style="width:200px">
                            </div>

                        </div>

                        <div id="emailsend" class="text-center  fade in"> Your message has been sent successfully.</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>