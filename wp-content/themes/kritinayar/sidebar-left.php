<?php
//Sidebar
$uri_segment = explode('/', $_SERVER['REQUEST_URI']);
$currentUrl;
if (!empty($uri_segment) && !empty($uri_segment[1])) {
 $currentUrl=$uri_segment[1] ;

}
?>
<div class="col-md-3">
    <div class="sideabar">
        <div class="widget widget-sidebar widget-list-link">
            <h4 class="title-widget-sidebar">
                Services
            </h4>
            <ul class="wd-list-link">

                <li class="<?php echo ($currentUrl=='service-1')?'active':'' ?>"><a href="/service-1">Business
                        Incorporation</a></li>
                <li class="<?php echo ($currentUrl=='service-2')?'active':'' ?>"><a href="/service-2">Registrations</a>
                </li>
                <li class="<?php echo ($currentUrl=='service-3')?'active':'' ?>"><a href="/service-3">Accounting & Book
                        Keeping</a></li>
                <li class="<?php echo ($currentUrl=='service-4')?'active':'' ?>"><a href="/service-4">Direct & indirect
                        Tax Compliance</a></li>
                <li class="<?php echo ($currentUrl=='service-8')?'active':'' ?>"><a href="/service-8">RoC Matters</a>
                </li>
                <li class="<?php echo ($currentUrl=='service-5')?'active':'' ?>"><a href="/service-5">Virtual CFO </a>
                </li>
                <li class="<?php echo ($currentUrl=='service-6')?'active':'' ?>"><a href="/service-6">Audit
                        Assistance</a></li>
                <li class="<?php echo ($currentUrl=='service-7')?'active':'' ?>"><a href="/service-7">Business
                        Planning</a></li>

            </ul>
        </div>
        <div class="widget widget-sidebar widget-text-block">
            <h4 class="title-widget-sidebar">
                Book a Free consultation
            </h4>
            <div class="container1 mt-20">
                <div class="row">

                    <div class="callback-warp cb-h1">
                        <div class="col-md-12">
                            <div class="form-cb-warp">
                                <form class="cb-form" id="ajax-consultation"  role="form" action="" method="post">
                                <div class="form-group">
                                <input type="text" class="form-control" id="Name" name="name" placeholder="Your Name*">
                                <div id="errmessagename" class="alert dg-alert01 border-danger color-danger fade in">Name is Required.</div>
                            </div>

                            <div class="form-group">
                                <input type="email" id="Email" name="email" class="form-control" placeholder="Your Email*">
                                <div id="errmessageemail" class="alert dg-alert01 border-danger color-danger fade in">Email is Required and must be valid.</div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  id="phone" name="phone" placeholder="Your Phone Number">
                            
                               
                            </div>

                            <div class="form-group">
                                 <input type="date" id="consultDate" class="form-control" name="consultDate"  placeholder="Your Appointment Date">
                                 <div id="errmessagesubject" class="alert dg-alert01 border-danger color-danger fade in">Date is Required.</div>
                            </div>

                            <!-- <div class="fancy-select"><select class="cb" id="Subject" name="subject">
                                    <option value="">I would like to discuss</option>
                                    <option value="Business Incorporation">Business Incorporation</option>
                                    <option value="Registrations">Registrations</option>
                                    <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                    <option value="Direct & indirect Tax Compliance">Direct & indirect Tax Compliance
                                    </option>
                                    <option value="RoC Matters">RoC Matters</option>
                                    <option value="Virtual CFO">Virtual CFO</option>
                                    <option value="Audit Assistance">Audit Assistance</option>
                                    <option value="Business Planning">Business Planning</option>


                                </select>
                                <div id="errmessagesubject" class="alert dg-alert01 border-danger color-danger fade in">Subject is Required.</div>
                            </div> -->

                                    <button type="submit" name="submit" value="Submit" id="submitbutton"  class="btn-main-color"><i class="fa fa-paper-plane"
                                            aria-hidden="true"></i> Submit</button>
                                            <div id="emailsend" class="text-center  fade in"> Your message has been sent successfully.
                            </div>
                                </form>

                            </div>
                            <div class="cb-info-h1">
                                <div><span class="icon icon-clock"></span> Mon-Sat 10.00am - 6.00p.m</div>

                                <div class="mt-20"><a href="tel:919990148248" style="color:#222"><span
                                            class="icon icon-phone"></span> (+91)9990148248</a>
                                </div>
                                <div class="mt-20"><span class="icon icon-envelop"></span> admin@urbancfo.in</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="widget-sidebar widget widget-html">
                        <div class="wd-html-block">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Content/hiring.jpg"
                                    class="img-responsive" alt="Image">
                            </a>
                            <div class="content-wd-html-inner">
                                <span>HIRING</span>
                                <p>
                                    COME TO JOIN OUR TEAM !
                                </p>
                            </div>
                            <a href="#" class="ot-btn btn-sub-color">
                                Join Now
                            </a>
                        </div>
                    </div> -->
    </div>
</div>