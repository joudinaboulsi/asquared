<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="A squared, promotional materials , advertising materials , corporate gift , stationery , technology ,  below line , bags , note books , apparel , portfolio ,pen " />
    <meta name="description" content="A Squared - we offer the largest selection of Promotional Items and Corporate Gifts." />
    <meta name="author" content="Webneoo" />
{!! SEO::generate() !!}
    <!-- Title  -->
    <title>A Squared</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/added-images/a-squared-logo.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/added-designs.css" />
</head>

<body>
    @include("layouts.header")

    @yield("content")

    @if(Session::has('msg'))
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row p-4">
                        <p class="text-3 mb-0">Your message is well received. We will get back to you shortly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @include("layouts.footer")

    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- google captcha recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- popper.min -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- scrollIt -->
    <script src="js/scrollIt.min.js"></script>

    <!-- slick carousel -->
    <script src="js/slick.min.js"></script>

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- stellar js -->
    <script src="js/jquery.stellar.min.js"></script>

    <!-- jquery.matchHeight-min -->
    <script src="js/jquery.matchHeight-min.js"></script>

    <script src="js/jquery.validate.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>

    <!-- YouTubePopUp.jquery -->
    <script src="js/YouTubePopUp.jquery.js"></script>

    <!-- wow js -->
    <script src="js/wow.min.js"></script>

    <!-- validator js -->
    <script src="js/jquery.validate.min.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

    <script>
        new WOW().init();
    </script>
    <script type="text/javascript">
        $("#contact_form").validate({
            ignore: ".ignore",     
            // Rules for form validation
            rules: 
            {
                form_name: {
                    required: true
                },
                form_email: {
                    required: true
                },
                form_subject: {
                    required: true
                },
                form_message: {
                    required: true
                },
                hiddenRecaptcha: {
                    required: function () {
                        if (grecaptcha.getResponse() == '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },

            // Messages for form validation
            messages:
            {
                hiddenRecaptcha:
                {
                    required: "Please verify that you are a Human."
                }
            }
        });
    </script>

</body>
</html>