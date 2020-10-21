<!doctype html>
<html lang="en">
<?php $title = "Contact" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<br>

<div class="main-content">
    <div class="container">
        <div class="content-wrap">
            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
                ============================================= -->
                <div class="postcontent col-lg-9">

                    <h3>Send us an Email</h3>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="mb-0" id="contactform" action="/contact" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="name">Name <small>*</small></label>
                                    <input type="text" id="name" name="name" value="" class="sm-form-control required">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="email">Email <small>*</small></label>
                                    <input type="email" id="email" name="email" value="" class="required email sm-form-control valid">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" value="" class="sm-form-control">
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-12 form-group">
                                    <label for="onderwerp">Subject <small>*</small></label>
                                    <input type="text" id="onderwerp" name="subject" value="" class="required sm-form-control">
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" id="submit" name="submit" value="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col-lg-3">
                    <address>
                        <strong>Flevosap bv</strong><br>
                        Prof. Zuurlaan 22<br>
                        8256 PE Biddinghuizen, Nederland<br>
                    </address>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> +31 (0)321 – 33 25 25<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@flevosap.nl<br>
                    <abbr title="KvK"><strong>KvK:</strong></abbr> 58224483<br>
                    <abbr title="BTW"><strong>BTW:</strong></abbr> NL8529.322.73.B.01

                </div><!-- .sidebar end -->
            </div>
        </div>
    </div>


    <!--
    <h3 style="text-align: left;" class="col-md-6">Neem contact op met FlevoSap:</h3>
    <section class="body">
        <div class="col-md-6">
            <div class="inner" id="inner-form">
                <form action="sendmail.php" method="POST">
                    <br>
                    <div class="form-group name-group">
                        <input name="naam" type="text" class="form-control form-control-sm" id="loremipsum"
                               placeholder="naam">
                    </div>
                    <div class="form-group email-group">
                        <input type="text" name="onderwerp" class="form-control form-control-sm" id="loremipsum"
                               placeholder="onderwerp">
                    </div>
                    <div class="form-group achternaam-group">
                        <input type="text" class="form-control form-control-sm" id="loremipsum" name="email"
                               placeholder="email">
                    </div>
                    <div class="form-group">
                        <textarea name="bericht" class="form-control" id="loremipsum" rows="3"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" placeholder="lorem ipsum">Submit
                    </button>
                    <p>
                        <br>
                    </p>
                </form>
            </div>
        </div>
        <p style="text-align: left" ; class="col-md-6" ;>
            Flevosap bv<br>
            Prof. Zuurlaan 22<br>
            8256 PE Biddinghuizen, Nederland<br>
            Tel: +31 (0)321 – 33 25 25<br>
            info@flevosap.nl<br>
        </p>
    </section>
    -->
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>