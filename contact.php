<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kittene's Cafe -Contact </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("#contact").click(function(){
            var fname=$("#fname").val();
            var email=$("#email").val();
            var message=$("#message").val();

            $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: {fname: fname, email: email, message: message},
                success: function(html){
                    if(html === 'true'){
                        $("#add_err2").html('<div class="alert alert-success"><strong>Message Sent</strong></div>');
                    }else if(html === 'fname_long'){
                        $("#add_err2").html('<div class="alert alert-danger"><strong>First Name </strong>must cannot exceed 50 characters.</div>');
                    }else if(html === 'fname_short'){
                        $("#add_err2").html('<div class="alert alert-danger"><strong>First Name </strong>must cannot exceed 2 characters.</div>');
                    }else if (html === 'email_long'){
                        $("#add_err2").html('<div class="alert alert-danger"><strong>Email </strong>must cannot exceed 50 characters.</div>');
                    }else if (html === 'email_short'){
                        $("#add_err2").html('<div class="alert alert-danger"><strong>Email </strong>must cannot exceed 2 characters.</div>');
                    }else if (html === 'eformat'){
                        $("#add_err2").html('<div class="alert alert-danger"><strong>Email </strong>format incorrect.</div>');
                    }else if (html === 'message_long'){
                        $("#add_err2").html('<div class="alert alert-danger"><strong>Message </strong>must cannot exceed 50 characters.</div>');
                    }else if (html === 'message_short'){
                        $("#add_err2").html('<div class="alert alert-danger"><strong>Message </strong>must cannot exceed 5 characters.</div>');
                    }else{
                        $("#add_err2").html('<div class="alert alert-danger"><strong>Error </strong>processing request. Please try again </div>');
                    }
                },
                beforeSend:function(){
                    $("#add_err2").html("loading...");
                }
            });
            return false;
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
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Kittene's Cafe</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d25730.18253970262!2d123.73044485337228!3d13.127953647345045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDA4JzE4LjkiTiAxMjPCsDQ0JzIwLjkiRQ!5e0!3m2!1sen!2sph!4v1702971513607!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123-456-7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:chickenhotdog423@gmail.com">chickenhotdog423@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>Albay Legazpi</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p></p>
                    <div id="add_err2"></div>
                    <form role="form" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Matt 2023 For portfolio purposes </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
