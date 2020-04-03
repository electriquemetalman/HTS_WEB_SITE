@include('secsions/header')
<body>
    @include('secsions/menu')
    <div class="welcome-area">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><em>L'INFORMATIQUE</em> au service du bien etre</h1>
                        <a href="/login" class="main-button-slider">Connexion Admin</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
        </div>
        <!-- ***** Welcome Area End ***** -->
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="{{ route('mail_root') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="text" id="name" placeholder="Full Name" required="required" name="nom" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input type="text" id="email" placeholder="E-Mail Address" required="required" name="email" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea rows="6" id="message" placeholder="Your Message" required="required" name="message" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Envoyer
                                                </button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2><em>Suivez Nous sure</em></h2>
                        <p> <br><a rel="nofollow" href="https://templatemo.com/contact" target="_parent">suivez</a> nos différentes pages.</p>
                        <ul class="social">
                            <li><a href="#"><img src="images/icons8-facebook-64.png" class="fa fa-facebook" alt="Fourth Author" style="float:left" ></a></li>
                            <li><a href="#"><img src="images/icons8-instagram-64(1).png" class="fa fa-twitter" alt="Fourth Author" style="float:left"></a></li>
                            <li><a href="#"><img src="images/icons8-twitter-64.png" class="fa fa-linkedin" alt="Fourth Author" style="float:left"></a></li>
                            <!--<li><a href="#"><img src="images/icons8-twitter-64.png" class="fa fa-linkedin" alt="Fourth Author"></a></li>
                            <li><a href="#"><img src="images/icons8-twitter-64.png" class="fa fa-linkedin" alt="Fourth Author"></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            @include('secsions/footer')
        </div>

</body>
@include('secsions/js')
