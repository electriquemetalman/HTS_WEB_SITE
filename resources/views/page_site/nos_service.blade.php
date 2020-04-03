@include('secsions/header')
<body>
    @include('secsions/menu')
    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="images/application_web.png" alt="" style="width: 100px; height: 100px;">
                            <div class="text">
                                <h4>Conception et Réalisation</h4>
                                <p>Nous consevons des applications  et des sites web professionnel respectant les normes des nouvelle technologie et nous les déployon pour nos client.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="images/application_mobile.png" alt="" sizes="10px" style="width: 100px; height: 100px;">
                            <div class="text">
                                <h4>Conception et Réalisation</h4>
                                <p>Nous consevons des applications mobile professionnel respectant les normes des technologie mobile.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="images/infographie1.png" alt="" style="width: 100px; height: 100px;">
                            <div class="text">
                                <h4>Service Infographique</h4>
                                <p>Nous proposons au grand publique un service infographique telaque la réalisation des flayers,carte de visite,billet d'invitation pour des événements et bien d'autre.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="images/Maintenance.jpg" alt="" style="width: 100px; height: 100px;">
                            <div class="text">
                                <h4>Service de Maintenance</h4>
                                <p>Nous proposons au grand publique un service de maintenance sur votre materiel informatique a la foi préventive et curative.</p>
                            </div>
                        </li>
                        @foreach ($services as $service)
                            <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                                <img src="/storage/images/{{ $service->image }}" alt="" style="width: 100px; height: 100px;">
                                <div class="text">
                                    <h4>{{ $service->titre }}</h4>
                                    <p>{{ $service->detail }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    @include('secsions/footer')

</body>
@include('secsions/js')
