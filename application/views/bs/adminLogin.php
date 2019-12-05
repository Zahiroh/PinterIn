<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-material-design.min.css">

    <link rel="stylesheet" href="../../dist/css/icon.css">
    <link rel="stylesheet" href="../../dist/css/style.css">

    <!-- Material Design for Bootstrap CSS
    <link rel="stylesheet" href="dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">-->

    <title>Hello, Admin !</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Default form login -->
                <br>
                <br>
                <br>
                <br>
                <h5 style="color:#42b6f4;font-size:30px">
                    <strong>Sign In Admin</strong>
                </h5>
                <br>
                <form action="cari_admin" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="bmd-label-floating">Username</label>
                        <input name="USERNAME" type="text" class="form-control" id="exampleInputEmail1">
                        <span class="bmd-info" style="color:grey;">We'll never share your username with anyone else.</span>
                    </div>
                    <div class="form-group">
                        <label  for="exampleInputPassword1" class="bmd-label-floating">Password</label>
                        <input name="PASSWORD" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <br>
                    <br>
                    <div class="text-center">
                    <button class="btn btn-default" style="color:grey">Cancel</button>
                    <button type="submit" class="btn btn-info btn-raised">Submit</button>
                    </div>
                </form>
                <!-- Default form login -->
            </div>
            <div class="col-md-8">
                <div class="text-center">
                    <img src="../../assets/login.png" alt="" style="width:700px;padding-left:10px">
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="../../dist/js/popper.js" ></script>
    <script src="../../dist/js/bootstrap-material-design.js"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>
