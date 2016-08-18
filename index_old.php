<?php function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RU"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="Resource-type" content="Document"/>

    <title>Name web site</title>

    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Medoapark" />

    <!--link rel="image_src" href="../img/share-stilltattoo.png">
    <link href="../img/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-57x57.png" sizes="57x57" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-60x60.png" sizes="60x60" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-72x72.png" sizes="72x72" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-76x76.png" sizes="76x76" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-114x114.png" sizes="114x114" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-120x120.png" sizes="120x120" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-144x144.png" sizes="144x144" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-152x152.png" sizes="152x152" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon-180x180.png" sizes="180x180" />
    <link rel="icon" type="image/png" href="../img/android-chrome-192x192.png" sizes="192x192" />
    <link rel="icon" type="image/png" href="../img/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../img/favicon-16x16.png" sizes="16x16" /-->

    <link rel="stylesheet" type="text/css" href="../css/reset.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../css/fonts.css"/>
    <!-- пока не переносим-->
    <?php if (isMobile()  || $_GET["m"]) : ?>
        <link rel="stylesheet" type="text/css" href="../css/mobile.css"/>
        <link rel="stylesheet" type="text/css" href="../css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="../css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css"
              href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
    <?php else : ?>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <?php endif; ?>
    <!-- пока не переносим-->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<!-- Pc & Mobile page's -->
<?php if (isMobile()  || $_GET["m"]) : ?>
    <div class="mobile_version">
        <?php include 'mobile.php'; ?>
    </div>
<?php else : ?>
    <div class="pc_version">
        <?php include 'pc.php'; ?>
    </div>
<?php endif; ?>

<!-- All Java Scripts -->
<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
<?php if (isMobile()  || $_GET["m"]) : ?>
    <!-- Slider js -->
    <script src="../js/owl.carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function ($) {
            $("#home-owl-carousel").owlCarousel();
        });
        $("body").data("page", "frontpage");
    </script>

    <!-- Loked somvol's -->
    <script type="text/javascript">
        function proverka(input) {
            var value = input.value;
            var rep = /[-\.;":'a-zA-Zа-яА-Я]/;
            if (rep.test(value)) {
                value = value.replace(rep, '');
                input.value = value;
            }
        }
    </script>
<?php else : ?>
    <script src="../js/jquery.transit.min.js" type="text/javascript"></script>
    <script src="../js/index.js" type="text/javascript"></script>
<?php endif; ?>

<script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../js/script.js" type="text/javascript"></script>

<!-- Loader js -->
<script type="text/javascript">
    $(window).bind('load', function () {
        var $preloader = $('#loader'),
            $spinner = $preloader.find('.watch_blok');
        $spinner.fadeOut();
        $preloader.delay(500).fadeOut('slow');
    });
</script>

</body>
</html>
<!-- by Sid Sazonov 2016 -->