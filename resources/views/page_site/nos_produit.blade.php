@include('secsions/header')
<body>
    @include('secsions/menu')
    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Nos différent <em>PRODUITS</em></h2>
                        <p>Nous avons des produits qui sont opérationnel que nous méttons a la disposition de nos utilisateur pour leur bien etre.</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="images/testimonial-author-1.png" alt="Author One"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>School Monitoring</h4>
                                <p>“cette application vous permettra de géré tous établissement qu'il soit segondaire, primaire,ou universitaire.”</p>
                                <span>V 1.0</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="images/testimonial-author-1.png" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Docta</h4>
                                <p>“Cette application vous permet de géré une hopital (les patien, les resource humaine, finance, prévision).”</p>
                                <span>V 1.0</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>LV House</h4>
                                <p>“cette application facilite la location et la vente immobilière de la recherche a l'achat ou la location.”</p>
                                <span>V 1.0</span>
                            </div>
                        </div>
                        @foreach ($produits as $produit)
                            <div class="item service-item">
                                <div class="author">
                                    <i><img src="/storage/images/{{ $produit->image }}" alt="Fourth Author" style="width: 150px; height: 120px; border-radius: 90px;"></i>
                                </div>
                                <div class="testimonial-content">
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h4>{{ $produit->nom }}</h4>
                                    <p>"{{ $produit->detail }}"</p>
                                    <span>{{ $produit->version }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    @include('secsions/footer')

</body>
@include('secsions/js')
