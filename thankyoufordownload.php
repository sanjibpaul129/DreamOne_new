<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WR4BL48');</script>
        <!-- End Google Tag Manager -->
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5RH52BGK');</script>
        <!-- End Google Tag Manager -->
        <title>Dream One | Jain Group</title>
        <meta charset="utf-8" />
		<link rel="shortcut icon" href="img/new_logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css" />
        <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="font/font.css" />
        <link rel="stylesheet" href="css/lightbox.css" />
        <link rel="stylesheet" href="css/sp-style-neww.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<style>
            .sp-overview h4 {
                color: #071c35;
            }@media screen and (max-width: 760px) and (min-width: 350px){
            .sp-footer {
                text-align: center;
                background: #071c35;
                color: #ffffff;
                padding: 20px 15px;
                margin-bottom: 18%;
            }
            }@media screen and (max-width: 350px){
            .sp-footer {
                text-align: center;
                background: #071c35;
                color: #ffffff;
                padding: 20px 15px;
                margin-bottom: 18%;
            }
            }.sp-footer{color:white}
            body{background:url(https://dreamone.co.in/overview2.jpg)}
            .social-bar {
                    position: fixed;
                    top: 50%;
                    right: 0%;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                    z-index: 2;
                    }

            .social-bar a {
            display: block;
            text-align: center;
            padding: 10px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
            }

            .social-bar a:hover {
            background-color: #000;
            }

            .facebook {
            background: #3B5998;
            color: white;
            }

            .twitter {
            background: #55ACEE;
            color: white;
            }

            .google {
            background: #dd4b39;
            color: white;
            }

            .linkedin {
            background: #0000007a;
            color: white;
            }

            .youtube {
            background: #bb0000;
            color: white;
            }

            .content {
            margin-left: 75px;
            font-size: 30px;
            }
		
            .overlay{
                opacity: 1;
                position: absolute;
                z-index: 1;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(0, 0, 0,.5);
            }
            .share, .overlay{
                display: none;
            }
            .show-share{
                display: block;
            }
            .share{
                position: absolute;
                left: 0;
                right: 0;
                top: 30%;
                margin: auto;
                width: 50%;
                z-index: 1;
                padding: 1em;
                background: white;
            }
        </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR4BL48"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RH52BGK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- <div class="social-bar">
        <a href="tel:9681711711" class="linkedin" id="calling_function"><i class="fa fa-phone"></i></a>
        <a href="https://wa.me/9330026066/?text=Interested in Dream One" class="linkedin"><i class="fa fa-whatsapp"></i></a>
        <button style="padding: 10px; border: none; background: #0000007a;" id="shareBtn"><i class="fa fa-share" style="color: #fff;font-size: 17px;"></i></button>
    </div> -->
    <script>
        const shareBtn = document.getElementById('shareBtn');
        shareBtn.addEventListener('click', event => {
            if (navigator.share){
                navigator.share({
                    url: 'https://rb.gy/d6jb1'
                }).then(() => {
                    console.log('Thanks for sharing');
                })
                .catch(console.error);
            }else{
                alert("current browser not supporing the share function.")
            }
        });
    </script>
    <div id="sp-header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/new_logo.png" class="img-responsive" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="index.php#overview">Overview</a></li>
                        <li><a href="index.php#location">Location</a></li>
                        <li><a href="index.php#flat-tour">Sample Flat Tour</a></li>
                        <li><a href="index.php#floor-plan">Floor Plans</a></li>
                        <li><a href="index.php#construction">Construction Updates</a></li>
                        <li><a href="index.php#views">Views from the Project</a></li>
                        <li><a href="index.php#why">Why Dream One?</a></li>
                        <li><a href="index.php#about">About us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid" style="text-align: center;padding: 95px 15px 0;">
        <center><img src="tick.png" class="img-responsive" style="width: 90px;margin: 0 0 28px;"></center>
        <div class="row">
            <p id="email_data" class="email_display"></p>
            <p id="mobile_data" class="mobile_display"></p>
        </div>
        <h1 style="color: white;text-transform: uppercase;font-weight: 900;font-size: 49px;margin: 15px 0 20px;">thank you !</h1>
        <p style="text-align: center; color: white; font-size: 22px;">
            Your submission is received and we will contact you soon. To download brochure <a style="color: white; font-weight: 700;" href="https://dreamone.co.in/download/Dream-One-Brochure.pdf">click here</a>
        </p>
        <a href="https://dreamone.co.in/" style="background: #071c35;color: white;text-transform: capitalize;padding: 13px 20px;font-size: 15px;margin: 20px auto;display: table;">back to home</a>
    </div>

    <!-- <div class="container-fluid sp-footer">
        <div class="container">
            <div class="col-sm-6">
                <p><i class="fa fa-phone"></i> +91 96817 11711 | <i class="fa fa-globe"></i> www.thejaingroup.com</p>
            </div>
            <div class="col-sm-6">
                <p>Jain Group &copy; 2020, All Rights Reserved.</p>
            </div>
        </div>
    </div> -->
    <!-- <a class="hidden-lg hidden-sm hidden-md" style="position: fixed; right: 5px; top: 62%; z-index: 9999; width: 37px;" href="tel:+919681711711" target="_blank">
    <img src="call.png" class="img-responsive">
    </a> -->
        <!--<a href="download/Dream-One-Brochure.pdf" target="_blank" class="sp-download">
			<img src="img/download.jpg">
		</a>-->


        <script src="js/lightbox.js"></script>
        <script src="js/youtube.js"></script>
        <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
        <script>
            function toggleIcon(e) {
                $(e.target).prev(".panel-heading").find(".more-less").toggleClass("glyphicon-plus glyphicon-minus");
            }
            $(".panel-group").on("hidden.bs.collapse", toggleIcon);
            $(".panel-group").on("shown.bs.collapse", toggleIcon);
        </script>
        <script>
            $(".autoplay").slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        </script>
        <script>
            window.onscroll = function () {
                myFunction();
            };

            var header = document.getElementById("sp-header");
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
        <script type="text/javascript">
            var emailvariable = "";
            var contactvariable = "";
            jQuery(document).ready(function($){
                function getParameterByName(name) {
                    name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
                    var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
                        results = regex.exec(location.search);
                    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
                }
                var emailvariable = '"'+getParameterByName('email').toString()+'"';
                var contactvariable = '+91'+'"'+getParameterByName('contact').toString()+'"';
                console.log(emailvariable);
                console.log(contactvariable);
                console.log("======================");
                document.getElementById("email_data").textContent = emailvariable;
                document.getElementById("mobile_data").textContent = contactvariable;
            });
        </script>
        <style>
            .email_display{
                color: #fff;
                display: none;
            }
            .mobile_display{
                color: #fff;
                display: none;
            }
        </style>
    </body>
</html>
