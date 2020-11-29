<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>الملكة العقارية</title>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="">
    <meta property="og:type" content="website">
    <meta name="description" content="">
    <meta name="twitter:image" content="assets/img/logoo-maleka.png?h=2b4cbcbaa47bfa089182dbf6bf9788bc">
    <meta property="og:image" content="assets/img/logoo-maleka.png?h=2b4cbcbaa47bfa089182dbf6bf9788bc">
    <meta property="og:title" content="الملكة العقارية">
    <meta name="twitter:title" content="الملكة العقارية">
    <link rel="icon" type="image/png" sizes="252x170" href="assets/img/logoo-maleka.png?h=2b4cbcbaa47bfa089182dbf6bf9788bc">
    <link rel="icon" type="image/png" sizes="252x170" href="assets/img/logoo-maleka.png?h=2b4cbcbaa47bfa089182dbf6bf9788bc">
    <link rel="icon" type="image/png" sizes="252x170" href="assets/img/logoo-maleka.png?h=2b4cbcbaa47bfa089182dbf6bf9788bc">
    <link rel="icon" type="image/png" sizes="252x170" href="assets/img/logoo-maleka.png?h=2b4cbcbaa47bfa089182dbf6bf9788bc">
    <link rel="icon" type="image/png" sizes="252x170" href="assets/img/logoo-maleka.png?h=2b4cbcbaa47bfa089182dbf6bf9788bc">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=de3721cf7b383f81e1332ec7e5e3353a">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Changa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,900">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css?h=2c0fc24b3d3038317dc51c05339856d0">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css?h=2c0fc24b3d3038317dc51c05339856d0">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=2e36323bddd33724f993c8b99213a88d">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>

<body style="background-size: 0;background-color: #fff;">
<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>


    <header id="main-header" style="border-top: 6px var(--main-color) solid;">
        <div class="container" style="background-color: #fff;">
            <div class="row align-items-stretch justify-content-md-start rtl">
                <div class="col-3 col-md-5 d-flex d-md-block justify-content-end">
                    <nav class="navbar navbar-light navbar-expand-md ltr" id="mainNav" style="background-color: transparent;font-family: Changa, sans-serif;">
                        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler b-0" data-target="#navbarResponsive"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navbarResponsive"
                                style="margin-top: 0;">
                                <ul class="nav navbar-nav text-right p-0" id="parentNav">
                                    <li class="nav-item text-center <?= ($activePage == 'index') ? 'active':''; ?>" role="presentation"><a class="nav-link float-none main-button" href="index.php"><strong>الرئيسية</strong></a></li>
                                    <li class="nav-item text-center <?= ($activePage == 'projects') ? 'active':''; ?>" role="presentation"><a class="nav-link float-none main-button" href="projects.php"><strong>المشروعات</strong><br></a></li>
                                    <li class="nav-item text-center pl-0 <?= ($activePage == 'contact') ? 'active':''; ?>" role="presentation"><a class="nav-link main-button" href="contact.php"><strong>اتصل بنا</strong></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-6 col-md-2 text-center p-0" id="logo-wrapper" style="height: auto;"><a class="d-inline-block" id="logo-link" href="index.php"><img class="img-fluid" id="logo" src="assets/img/logoo-maleka-432w.png?h=794e9243b17bfa9515367069dd3df7ab" width="190px" style="margin-top: 3px;margin-bottom: 5px;"></a></div>
                <div class="col-3 col-md-1 d-flex d-md-none justify-content-center align-items-center no-padding">
                    <div class="btn-group d-none d-md-flex lang" role="group"><a class="btn btn-light disabled btn-sm border rounded-0" role="button" href="../<?php echo basename($_SERVER['PHP_SELF']);?>">AR</a><a class="btn btn-light btn-sm border rounded-0" role="button" href="en/<?php echo basename($_SERVER['PHP_SELF']);?>">EN</a></div>
                    <a
                        class="btn" role="button" href="tel:01202855556" style="box-shadow: none;"><i class="fa fa-phone" style="font-size: 2em;"></i></a>
                </div>
                <div class="col-3 col-md-5 d-flex flex-column justify-content-center align-items-stretch align-self-center align-self-md-stretch">
                    <div class="row d-none d-md-flex">
                        <div class="col text-left"><a class="btn d-flex justify-content-center" role="button" href="tel:01202855556" style="box-shadow: none;">01202855556&nbsp;<i class="fa fa-phone" style="font-size: 21px;margin: 0 5px;"></i></a></div>
                        <div class="col-md-5 align-self-center p-0"
                            style="padding-top: 10px;border-right: 1px black solid;">
                            <div class="btn-group d-inline-block social-icons" role="group" style="width: auto;margin-top: 0;"><a class="btn border rounded-circle d-flex float-left align-items-center justify-content-md-center b-0 s-0" role="button" style="margin-right: 10px;" href="https://www.facebook.com/%D8%B4%D8%B1%D9%83%D8%A9-%D8%A7%D9%84%D9%85%D9%84%D9%83%D8%A9-%D8%A7%D9%84%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9-108292030626522/"><i class="fa fa-facebook-f" style="background-color: #cc3e3d;"></i></a>
                                <a
                                    class="btn border rounded-circle d-flex float-left align-items-center justify-content-md-center b-0 s-0" role="button" href="mailto:elmalekaalaqarea@gmail.com"><i class="fa fa-envelope-o" style="background-color: #cc3e3d;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--end of header.php-->
