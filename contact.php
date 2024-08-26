<?php include "header.php"; ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Contact</h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">Home</a></li>
                                <li class="active"><a href="#">Contact</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
               
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="row contact-method">
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-map-marker"></i>

                                        <p class="sub">COME TO</p>

                                        <div class="detail"><p>99 Barnard St - Suite 111</p>

                                            <p>United Kingdom</p></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-phone"></i>

                                        <p class="sub">CALL TO</p>

                                        <div class="detail"><p>Local: 1-800-123-hello</p>

                                            <p>Mobile: 1-800-123-hello</p></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-envelope"></i>

                                        <p class="sub">CONNECT TO</p>

                                        <div class="detail"><p>hello@edugate.com</p>

                                            <p>www.edugate.com</p></div>
                                    </div>
                                </div>
                            </div>
                            <form class="bg-w-form contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">NAME <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">EMAIL <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="")--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">PURPOSE</label><select class="form-control form-input selectbox">
                                            <option value="">Please Select</option>
                                            <option value="">example 1</option>
                                            <option value="">example 2</option>
                                            <option value="">example 3</option>
                                        </select><!--label.control-label.form-label.warning-label(for="", hidden)--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">SUBJECT</label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="", hidden)--></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-question form-group"><label class="control-label form-label">HOW CAN WE HELP? <span class="highlight">*</span></label><textarea class="form-control form-input"></textarea></div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green"><span>SUBMIT CONTACT</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map" class="section contact-map"></div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<?php include "footer.php"; ?>
<!-- THEME SETTING-->
<!-- LOADING--><!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
}</script>
<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
<script src="assets/js/pages/contact.js"></script>
</body>
</html>