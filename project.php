<!DOCTYPE html>
<html lang="zxx" style="overflow-x:hidden !important;">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author">
    <meta name="description">
    <!-- ======== Page title ============ -->
    <title>AVCONEXPO | Projects</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Splitting.css >>-->
    <link rel="stylesheet" href="assets/css/splitting.css">
    <!--<< Magnific popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< NiceSelect.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Header Section Start -->
    <?php
        include('header.php');
    ?>

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Projects</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="https://auctest.rf.gd/avconexpo_test/">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-regular fa-slash-forward"></i>
                    </li>
                    <li>
                        Projects
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- Service Section S T A R T -->
    <section class="service-section section-padding section-bg fix" id="service">
        <div class="service-container-wrapper style1 mb-5">
            <div class="shape"><img src="assets/img/shape/serviceShape1_1.png" alt="shape"></div>
            <div class="container">
                <div class="section-title maxw-470 text-center mx-auto">
                    <span class="subtitle wow fadeInUp">
                        <img src="assets/img/icon/subTitleIcon.svg" alt="icon" />Projects
                    </span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Our Latest Projects
                    </h2>
                </div>
                <div class="service-wrapper style1">
                    <div class="row g-4">
                        <?php
                            include('db_con.php');
                            $result = $con->query("SELECT paragraph, heading, images FROM add_project");
                             while ($row = $result->fetch_assoc()):
                        ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-tilt data-tilt-max="15"
                                data-wow-delay="0.2s">
                                <div class="thumb"><img src="admin/uploads/<?php echo htmlspecialchars($row['images']); ?>" alt="thumb">
                                </div>
                                <div class="content">
                                    <h4><?php echo $row['heading']; ?></h4>
                                    <p class="text"><?php echo $row['paragraph']; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Section    S T A R T -->
    <?php
        include('footer.php');
    ?>

    <!--<< All JS Plugins >>-->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--<< Waypoints Js >>-->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!--<< Counterup Js >>-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Tilt Js >>-->
    <script src="assets/js/tilt.min.js"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< MeanMenu Js >>-->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!--<< Magnific popup Js >>-->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!--<< Wow Animation Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Splitting Animation Js >>-->
    <script src="assets/js/splitting.js"></script>
    <!--<< NIce Select Js >>-->
    <script src="assets/js/nice-select.min.js"></script>

    <!--<< Main.js >>-->
    <script src="assets/js/main.js"></script>
    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'91772cb4fb9fe16a',t:'MTc0MDQ4MTA0Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/b0e4a89976ce/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
    </script>
</body>

</html>