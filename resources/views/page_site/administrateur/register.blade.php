@include('secsions/header')
<body>
    <div class="welcome-area">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="">
                            <form class="" role="form" action="{{ route('create_root') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 style="color:rgb(132, 0, 255);">Register</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <div class="userdiv">

                                            <div class="">
                                                <i class="fa fa-user" style="height: 40px;"></i>
                                                <input type="text" class="formulaire" id="nom" name="nom" placeholder="User name">
                                            </div>

                                        </div>
                                        <div class="userdiv">

                                            <div class="">
                                                <i class="fa fa-user" style="height: 40px;"></i>
                                                <input type="email" class="formulaire" id="email" name="email" placeholder="Email">
                                            </div>

                                        </div>
                                        <div class="passdiv">

                                            <div class="">
                                                <i class="fa fa-lock" style="height: 40px;"></i>
                                                <input type="password" class="formulaire" id="password" name="password" placeholder="Password">
                                            </div>

                                        </div>
                                        <div class="passdiv">

                                            <div class="">
                                                <i class="fa fa-lock" style="height: 40px;"></i>
                                                <input type="password" class="formulaire" id="password" name="confirm_password" placeholder="Confirm Password">
                                            </div>

                                        </div>
                                        <div class="">
                                          <div class="log_in">
                                            <input type="submit" value="LOG IN" class="button">
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
</body>
@include('secsions/js')
