<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-material-design.min.css">

    <link rel="stylesheet" href="../../dist/css/icon.css">
    <link rel="stylesheet" href="../../dist/css/style.css">

    <!-- Material Design for Bootstrap CSS
    <link rel="stylesheet" href="../../dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous"> -->

    <title>Hello, Teacher !</title>
  </head>
  <body>

        <div class="row">
            <div class="col-md-6" style="padding-top:3%; padding-left:3%;">
                <div class="col-md-9 right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">SIGN IN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SIGN UP</a>
                            </li>
                        </ul>
                </div>

                 <div class="tab-content" id="myTabContent">


                                                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <form action="register" method="post">
                                                      <div class="row register-form">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input name="NAMA_DOSEN"type="text" class="form-control" placeholder="Nama *" value="" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="ALAMAT_DOSEN" type="text" class="form-control" placeholder="Alamat *" value="" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="EMAIL_DOSEN" type="email" maxlength="20" minlength="10" class="form-control" placeholder="E-mail *" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="form-group">
                                                                <input name="USERNAME_DOSEN" type="text" class="form-control" placeholder="Username *" value="" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="PASSWORD1"type="password" minlength="8" class="form-control" placeholder="Password *" value="" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="PASSWORD2" type="password" minlength="8" class="form-control" placeholder="Confirm Password *" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 right">
                                                            <input type="submit" class="btn bg-info btn-md"  style="color:white" value="REGISTER"/>
                                                        </div>
                                                    </div>
                                                  </form>
                                                </div>

                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="profile-tab">
                                                    <form action="cari_user_dosen" method="post">
                                                            <div class="col-md-8">
                                                            <div class="form-group">
                                                                <input name="USERNAME" type="text" class="form-control" placeholder="Username" value="" />
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="PASSWORD" type="password" class="form-control" placeholder="Password" value="" />
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6 right">
                                                                <input type="submit" class="btn bg-info btn-md"  style="color:white" value="LOGIN"/>
                                                            </div>
                                                    </form>



                                                </div>



                </div>

            </div>

            <div class="col-md-6" class="center" style="padding-top:50px;">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="../../assets/login1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../../assets/login2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="../../assets/login3.png" alt="Third slide">
                </div>
            </div>
            </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="../../dist/js/popper.js"></script>
        <script src="../../dist/js/bootstrap-material-design.js"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    </body>
</html>
