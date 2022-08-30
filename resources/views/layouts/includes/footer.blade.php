<!--Call To Action-->
<aside class="dark-bg">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h3 class="margin-0">
                    Want to Get in Touch with us
                    <a href="#" class="konnect-button-3">
                        Submit Your Query
                    </a>
                </h3>
            </div>
        </div>
    </div>
</aside>
<!--Contact Us-->
<section class="footer-contact">
    <div class="container">
        <div class="row">
            <!-- About Us-->
            <div class="col-md-3 col-sm-6 footer-box">
                <img src="{{ asset('assets/img/icons/building.png') }}" alt="icon" class="konnect-contact-icon">
                <h3>About <span class="color-default">Us</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- Address-->
            <div class="col-md-3 col-sm-6 footer-box">
                <img src="{{ asset('assets/img/icons/location.png') }}" alt="icon" class="konnect-contact-icon">
                <h3>Our <span class="color-default">Location</span></h3>
                <p>#Koramangala, Banglore<br>
                    Karnataka, INDIA</p>
            </div>

            <!--     Phone Numbers-->
            <div class="col-md-3 col-sm-6 footer-box">
                <img src="{{ asset('assets/img/icons/phone.png') }}" alt="icon" class="konnect-contact-icon">
                <h3>Phone <span class="color-default">Contact</span></h3>
                <p>+91 123-456789<br>
                    +91 123-456780</p>
            </div>

            <!-- Email Details -->
            <div class="col-md-3 col-sm-6 footer-box">
                <img src="{{ asset('assets/img/icons/email.png') }}" alt="icon" class="konnect-contact-icon">
                <h3>Email <span class="color-default">Us</span></h3>
                <p>info@konnectplugins.com<br>
                    sales@konnectplugins.com</p>
            </div>
        </div>
    </div>
</section>

<footer class="konnect-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-left">

                <!--Footer Social Icons-->
                <div class="contact-social">
                    <p><a href="#"> <i class="fa fa-twitter"></i> </a> <a href="#"> <i
                                class="fa fa-facebook"></i> </a> <a href="#"> <i class="fa fa-google-plus"></i>
                        </a> <a href="#"> <i class="fa fa-rss"></i>
                        </a> <a href="#"> <i class="fa fa-instagram"></i> </a></p>
                </div>
            </div>

            <!-- Footer Copy rights-->
            <div class="col-sm-6 text-right">
                <p> &copy; Copyright 2016 Konnect plugins </p>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Theme JavaScript -->
<script src="{{ asset('assets/js/default.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
</script>
@yield('script')
</body>

</html>
