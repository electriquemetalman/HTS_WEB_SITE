@include('secsions/header')
<body>
    @include('secsions/menuAdmin')
    <section class="section" id="testimonials">
        <div class="container">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="center-heading">
                            <h2><em>AJOUTER UN NOUVEAU SERVICE</em></h2>
                        </div>
                    </div>
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="{{ route('service_root') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <div class="upload-btn-wrapper">
                                                <button class="btn">telecharger une image</button>
                                                <input name="logo" type="file" id="image_uploads" accept="image/*" required="required">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="titre" rows="2" id="message" placeholder="titre service" required="required"  style="background-color: rgba(250,250,250,0.3); height:60px"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="detaille" rows="5" id="message" placeholder="Detaille service" required="required" style="background-color: rgba(250,250,250,0.3); height:95px"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Envoyer</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->

        </div>
    </section>
        <!-- ***** Header Text End ***** -->
</body>
@include('secsions/js')
