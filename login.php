<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kittene's Cafe - Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script type="text/javaScript">$(document).ready(function(){
    $("#login").click(function(e){
        e.preventDefault(); // Prevent the form from submitting normally

        var email = $("#email").val();
        var password = $("#password").val();

        $.ajax({
            type: "POST",
            url: "pcheck.php",
            data: { email: email, password: password },
            success: function(html){
                if(html === 'true'){
                    $("#add_err2").html('<div class="alert alert-success"><strong>Authenticated</strong></div>');
                    window.location.href ="blog.php";
                } else if(html === 'false'){
                    $("#add_err2").html('<div class="alert alert-danger"><strong>Authentication failure.</strong></div>');
                } else {
                    $("#add_err2").html('<div class="alert alert-danger"><strong>Error</strong> Processing request. Please try Again.</div>');
                }
            },
            beforeSend: function(){
                $("#add_err2").html("Loading...");
            }
        });
    });
});

    
</script>

</head>

<body>

    <div class="brand">Kittene's Cafe</div>
    <div class="address-bar">Albay Legazpi</div>

    <!-- Navigation -->
    <?php require_once("nav.php");?>

    <div class="container">
    <div class="row">
        <div class="box col-lg-6 col-lg-offset-3">

            <div class="alert alert-danger"><strong>You must be logged in to view the Blog.</strong></div>
            <hr>
            <h2 class="intro-text text-center">
                <strong>Login</strong>
            </h2>
            <div id="add_err2"></div>
            <hr>
            <form role="form">
                <div class="row">
                    <div class="form-group col-lg-12 text-center">
                        <label>Email Address</label>
                        <input type="email" id="email" name="email" maxlength="25" class="form-control">
                    </div>
                    <div class="form-group col-lg-12 text-center">
                        <label>Password </label>
                        <input type="password" id="password" name="password" maxlength="250" class="form-control">
                    </div>
                    <div class="form-group col-lg-12 text-center">
                        <button type="submit" id="login" class="btn btn-default">login</button>
                    </div>
                </div>
            </form>
            <div class="form-group col-lg-12 text-center">
                <a href="register.php"> <button type="submit" class="btn btn-default">Not a Member ?Register here</button></a>
            </div>
        </div>
    </div>
</div>

    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Matt 2023 For portfolio purposes</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
