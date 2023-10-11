<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if ($GLOBALS['title']) {
        $title = $GLOBALS['title'];
    } else {
        $GLOBALS['title'] = "";
    }
    if ($GLOBALS['desc']) {

        $desc = $GLOBALS['desc'];
    } else {
        $desc = "";
    }
    if ($GLOBALS['keywords']) {
        $keywords = $GLOBALS['keywords'];
    } else {
        $keywords = "";
    }
    // Get the current domain URL
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $domain = $_SERVER['HTTP_HOST'];
    $current_url = $protocol . "://" . $domain;

    // Combine the domain URL and website name
    $full_url = $current_url . '/' . "cancervax-inhouse/";
    ?>
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo  $full_url; ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo  $full_url; ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo  $full_url; ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo  $full_url; ?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo  $full_url; ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>/assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>/assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo  $full_url; ?>/assets/css/modal.style.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7D9TX20JND"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-7D9TX20JND');
    </script>


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '657876116145620');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=657876116145620&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->


    <?php
    $currentURL = $_SERVER['HTTP_HOST'];
    $desiredURL = 'cancervax.com';

    if ($currentURL === $desiredURL) {
        echo '<meta name="facebook-domain-verification" content="z24tdbhlb62wzvjdkr3vdp344a8mqt" />';
    }
    ?>

</head>

<body>

    <?php
    function active($currect_page)
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if ($currect_page == $url) {
            echo 'active'; //class name in css 
        }
    }
    ?>

    <div class="invest-bar">
        <div class="container-fluid">
            <div class="invest-bar-content">
                <div class="invest-bar-text">
                    <p>Help us beat cancer!</p>
                    <a href="https://www.startengine.com/offering/cancervax" target="_blank">Invest Now</a>
                </div>
                <div class="tSocial d-none d-lg-block">
                    <a href="https://www.facebook.com/people/Cancervax/100090179828482/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/cancervaxbiotech/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/cancervax/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/@cancervax" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="socialHeader d-none d-lg-block">
        <div class="container-fluid">

        </div>
    </div>
    <!-- Hedaer -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="<?php echo  $full_url; ?>/assets/img/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php active('about'); ?>" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('pipeline'); ?>" href="/pipeline">Pipeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('immunotherapy'); ?>" href="/immunotherapy">Immunotherapy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('market'); ?>" href="/market">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('news'); ?>" href="/news">Newsroom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('videos'); ?>" href="/videos">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('investors'); ?>" href="/investors">Investors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('contact'); ?>" href="/contact">Contact</a>
                    </li>

                </ul>
                <div class="socialHeader d-lg-none">
                    <div class="container-fluid">
                        <div class="tSocial">
                            <a href="https://www.facebook.com/people/Cancervax/100090179828482/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/cancervaxbiotech/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/cancervax/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/@cancervax" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>