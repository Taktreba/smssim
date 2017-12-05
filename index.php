<?php

$lang = 'en';
if ($_POST['lang'] === 'ru' || $_GET['lang'] === 'ru') {
    $lang = 'ru';
}

if ($_POST['lang'] === 'en' || $_GET['lang'] === 'en') {
    $lang = 'en';
}

if (!$_POST['lang'] && !$_GET['lang']) {
    if ($_COOKIE['lang'] === 'ru') {
        $lang = 'ru';
    }

    if ($_COOKIE['lang'] === 'en') {
        $lang = 'en';
    }

}

include("lang/" . $lang . ".php");
setcookie('lang', $lang);
setcookie('user_lang', '');


$paymentpost = $_POST['paymentpost'];
$paymentpost = base64_decode($paymentpost);


$result = parse_url($paymentpost);

parse_str($result['query'], $params);


//$_POST data
//$payment = $_POST['payment'];
//$amount = $_POST['amount'];
//$desk = $_POST['desk'];


$payment = 'payeer';
$amount = 111;
$desk = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';


$status = false;
foreach ($pay_system as $k => $v) {
    if ($v['payment type'] === $payment) {
        $status = true;
        $img = $v['url'];
        $description = $v['description'];
        break;
    }
}


//switch ($payment) {
//    case "webmoney":
//        $status = true;
//        $img = $pay_system[4]['url'];
//        $description = $pay_system[4]['description'];
//        break;
//    default:
//        $status = false;
//}

if ($paymentpost && $amount && $desk && $payment) {
    setcookie('user_lang', $_POST['lang']);
}

if ($lang === 'ru') {
    $title_message = 'English version';
    $host_path = '/?lang=en';
    $img_path = 'images/UK.png';
} else {
    $title_message = 'Русская версия';
    $host_path = '/?lang=ru';
    $img_path = 'images/RU.png';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADWORD SEO</title>
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet'
          type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic'
          rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Pixeden Icon Font -->
    <link rel="stylesheet" href="css/Pe-icon-7-stroke.css">

    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <!-- PrettyPhoto -->
    <link href="css/prettyPhoto.css" rel="stylesheet">


    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<!-- PRELOADER -->
<div class="spn_hol">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- END PRELOADER -->

<!-- =========================
    START ABOUT US SECTION
============================== -->
<section class="header parallax home-parallax page" id="HOME">
    <div class="section_overlay">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">
                        <!--                        <img src="images/logo.png" style="height: 35px" alt="Logo">-->
                        <h3 style="margin-top: 12px">ADWORD SEO</h3>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- NAV -->
                        <li title="<?php echo $title_message ?>"><a style="font-size: 30px"
                                                                    href="<?php echo $host_path ?>"><img
                                        src="<?php echo $img_path ?>"></a>
                        </li>
                        <li><a style="font-size: 30px" href="#HOME"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                        <li title="<?php echo ABOUT_AS ?>"><a style="font-size: 30px" href="#ABOUT">&nbsp;<i
                                        class="fa fa-info" aria-hidden="true"></i>&nbsp;</a>
                        </li>
                        <li title="<?php echo PAY_SYSTEM ?>"><a style="font-size: 30px" href="#pay_system"><i
                                        class="fa fa-credit-card"
                                        aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container- -->
        </nav>

        <div class="container home-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo text-center">
                        <!-- LOGO -->
                        <img width="200px" src="images/logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="home_text">
                        <!-- TITLE AND DESC -->
                        <h1><?PHP echo HEADER_TITLE_1 ?></h1>
                        <p><?PHP echo HEADER_TITLE_2 ?></p>

                        <div class="download-btn wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".8s">
                            <!-- BUTTON -->
                            <!--                            <a class="btn home-btn" name="pay_agree" data-toggle="modal"-->
                            <!--                               data-target="#myModal">-->
                            <?PHP //echo AUTHORIZATION ?><!--</a>-->
                            <a class="btn home-btn" name="pay_agree"
                               onclick="document.getElementById('bg_popup2').style.display='block'; return false;"><?PHP echo AUTHORIZATION ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-4 wow fadeInRight" data-wow-duration="1.2s"
                     data-wow-delay="1.2s">
                    <div class="home-iphone" sty>
                        <img style=" width: 150%;"
                             src="images/diagrama.png" alt="" width="150%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HEADER SECTION -->


<!-- =========================
    START ABOUT US SECTION
============================== -->
<section class="about page" id="ABOUT">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- ABOUT US SECTION TITLE-->
                <div class="inner_about_title fadeInUp wow" data-wow-duration="3.6s" data-wow-delay="0.3s"
                     style="margin-top: 75px">
                    <h2><?PHP echo ABOUT_AS_1 ?></h2>
                    <p><?PHP echo ABOUT_AS_2 ?></p>
                </div>
            </div>

        </div>
    </div>


    <div class="inner_about_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s"
                         style="margin-top: 75px">
                        <!-- PHONE -->
                        <img src="images/1_icon-icons.com_68887.png" alt="">
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <!-- TITLE -->
                    <div class="inner_about_title">
                        <h1><?PHP echo DESCRIPTION_1 ?></h1>
                    </div>
                    <div class="inner_about_desc">

                        <!-- SINGLE DESC -->
                        <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="0.5s">
                            <!-- ICON -->
                            <div><i class="pe-7s-timer"></i></div>
                            <!-- HEADING DESCRIPTION -->
                            <h3><?PHP echo DESCRIPTION_1_1 ?></h3>
                            <p><?PHP echo DESCRIPTION_1_2 ?></p>
                        </div>
                        <!-- END SINGLE DESC -->


                        <!-- SINGLE DESC -->
                        <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1s">
                            <!-- ICON -->
                            <div><i class="pe-7s-target"></i></div>
                            <!-- HEADING DESCRIPTION -->
                            <h3 style="margin-bottom: 30px"><?PHP echo DESCRIPTION_2_1 ?></h3>
                            <p><?PHP echo DESCRIPTION_2_2 ?></p>
                        </div>
                        <!-- END SINGLE DESC -->


                        <!-- SINGLE DESC -->
                        <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1.5s"
                             style="margin-bottom: 50px">
                            <!-- ICON -->
                            <div><i class="pe-7s-stopwatch"></i></div>
                            <!-- HEADING DESCRIPTION -->
                            <h3><?PHP echo DESCRIPTION_3_1 ?></h3>
                            <p><?PHP echo DESCRIPTION_3_2 ?></p>
                        </div>
                        <!-- END SINGLE DESC -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->

<!-- =========================
     START CONTCT FORM AREA
============================== -->
<section class="contact page" id="pay_system">
    <div class="section_overlay">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 wow bounceIn">
                <!-- Start Contact Section Title-->
                <div class="inner_about_title" style="margin-top: 75px">
                    <h2><?PHP echo PAY_SYSTEM ?></h2>
                </div>
            </div>
        </div>

        <div class="container img_pay_system">
            <div class="row">
                <div class="col-md-12 wow bounceInLeft">
                    <div class="social_icons">
                        <ul>
                            <?php
                            $count = 1;
                            foreach ($pay_system as $k => $v) { ?>
                                <li onclick="showElement('menu<?php echo $count++ ?>')"><img
                                            src="<?php echo $v['url'] ?>"></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT -->

<!-- PAY INFO-->
<div style="margin-bottom: 50px; margin-top: 40px">
    <div id="menu0" class="pay_info" style="display: block">
        <?php echo PAY_SYSTEM_DESC ?>
    </div>

    <?php $count1 = 1;
    foreach ($pay_system as $k => $v) { ?>
        <div id="menu<?php echo $count1++ ?>" class="pay_info">
            <strong><?php echo $v['name'] ?></strong> - <?php echo $v['description'] ?>
            <br><br>

            <div style="font-size: 18px; font-weight: 600;text-align: center">
                <?php echo PAY_SYSTEM_SUM ?>&nbsp;<?php echo BEFORE_AMOUNT ?><input style="width: 80px;font-weight: 800"
                                                                                    type="number" min="1" max="5000"
                                                                                    title="<?php echo PAY_SYSTEM_RUBLES ?>">&nbsp;<?php echo AFTER_AMOUNT ?>
                <br><br>
            </div>

            <center>
                <a class="btn home-btn" name="pay_agree"
                   onclick="document.getElementById('bg_popup2').style.display='block'; return false;"><?php echo PAY_SYSTEM_DEPOSIT ?></a>
            </center>
        </div>
    <?php } ?>

</div>

<!-- PAY MODAL-->
<!--<div style="display: none" id="--><?php //echo ($status) ? "bg_popup" : "test"; ?><!--">-->
<!--    <div id="popup">-->
<!--        <a class="close2" href="#" title="--><?php //echo FORM_CLOSE ?><!--"-->
<!--           onclick="document.getElementById('bg_popup').style.display='none'; return false;">X</a>-->
<!--        <div class="social_icons"><img style="width: 50%" src="--><?php //echo $img ?><!--"></div>-->
<!--        <p>--><?php //echo $description ?><!--</p>-->
<!--        <hr>-->
<!--        <div class="postdata">-->
<!---->
<!--            --><?php //echo FORM_SUM_VAL ?><!--: <span-->
<!--                    style="font-size: 25px; font-weight: 700">--><?php //echo BEFORE_AMOUNT ?><!---->
<?php //echo $amount ?><!--</span>--><?php //echo AFTER_AMOUNT ?>
<!--            <br><br>-->
<!--            --><?php //echo FORM_COMMEND ?><!--: <span-->
<!--                    style="font-style: italic; font-weight: 700">--><?php //echo $desk ?><!--</span><br><br>-->
<!---->
<!--            <form method="POST" action="-->
<?php //echo $result['scheme'] . '://' . $result['host'] . $result['path'] ?><!--"-->
<!--                  accept-charset="windows-1251">-->
<!---->
<!--                --><?php
//                //                setcookie('userlang', $lang);
//                foreach ($params as $key => $value) { ?>
<!--                    <input name="--><?php //echo $key ?><!--" value="-->
<?php //echo $value ?><!--" type="hidden">-->
<!--                --><?php //} ?>
<!---->
<!--                <input type="submit" style="margin-left: 30%" class="button24" value="-->
<?php //echo FORM_GO_PAY ?><!--">-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- END PAY MODAL-->


<div style="display: none" id="<?php echo ($status) ? "bg_popup" : "test"; ?>">
    <div id="cash_modal">
        <a class="close2" href="#" title="<?php echo FORM_CLOSE ?>"
           onclick="document.getElementById('bg_popup').style.display='none'; return false;">x</a>
        <div class="row">
            <div class="col-md-4 col-xs-12" style="margin-top: 35px">
                <div class="social_icons"><img src="<?php echo $img ?>"></div>
            </div>
            <div class="col-md-7 col-xs-12" style="margin-top: 30px">
                <p><?php echo $description ?></p>
            </div>
        </div>
        <hr>
        <div>
            <center>

                <p class="info_pay">
                    &nbsp;<?php echo FORM_SUM_VAL ?>: <span style="font-weight: 800; font-size: 26px">
                    <?php echo BEFORE_AMOUNT ?><?php echo $amount ?>&nbsp;<?php echo AFTER_AMOUNT ?>
                </span>
                </p>

                <p class="info_pay">
                    &nbsp;<?php echo FORM_COMMEND ?>:
                    <span style="font-weight: 600; font-size: 24px">
                    <?php echo $desk ?>
                </span>
                </p>
            </center>
            <hr>
            <center>
                <form method="POST" action="<?php echo $result['scheme'] . '://' . $result['host'] . $result['path'] ?>"
                      accept-charset="windows-1251">

                    <?php
                    foreach ($params as $key => $value) { ?>
                        <input name="<?php echo $key ?>" value="<?php echo $value ?>" type="hidden">
                    <?php } ?>

                    <br><input type="submit" class="button24" value="<?php echo FORM_GO_PAY ?>"><br>
                    <br>
                </form>
            </center>
        </div>
    </div>
</div>


<!-- AUTHORISATION MODAL   -->
<div style="display: none" id="bg_popup2">
    <div id="popup">
        <a class="close2" href="#" title="<?php echo FORM_CLOSE ?>"
           onclick="document.getElementById('bg_popup2').style.display='none'; return false;">X</a>
        <h3 class="modal-title" style="text-align: center"><?php echo AUTHORIZATION ?></h3>
        <hr>
        <div id="error_auth"></div>
        <form class="form-signin" id="first_form" method="post">
            <div id="error_auth" style="margin-bottom: 20px; margin-top: -15px"></div>
            <input type="email" class="form-control" id="email" name="email"
                   placeholder="<?php echo AUTH_EMAIL_ADDRESS ?>"
                   autofocus="" required/>
            <input type="password" class="form-control" id="password" name="password"
                   placeholder="<?php echo PASSWORD ?>"
                   required/>
            <div style="width: 100%; text-align: center">
                <input style="width: 200px;" type="button" name="submit" class="button24"
                       onclick="send()" value="<?php echo COME_IN ?>"><br>
            </div>

            <p style="margin-top: 15px; font-size: 14px">✱<?php echo FORM_INFO ?></p>
        </form>

    </div>
</div>
<!-- END AUTHORISATION MODAL-->


<!-- =========================
     FOOTER
============================== -->
<section class="copyright">
    <h2></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copy_right_text">
                    <!-- COPYRIGHT TEXT -->
                    <p><?php echo CONTACT_ADDRESS ?></p>
                    <p><?php echo CONTACT_PHONE ?></p>
                    <p><?php echo CONTACT_EMAIL ?></p>
                    <p><?php echo CONTACT_WORK_TIME ?></p>
                </div>

            </div>

            <div class="col-md-6">
                <div class="scroll_top">
                    <a href="#HOME"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="lang_id" style="display: none"><?php echo $lang ?></div>
<!-- END FOOTER -->

<!-- =========================
     SCRIPTS
============================== -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.ajaxchimp.langs.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/script.js"></script>
<script src="js/md5.js"></script>


</body>
</html>