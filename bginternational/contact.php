<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Aivons HTML Template For Business Consulting" />
    <title>Contact Us | Bahri Group International LLC</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/nouislider.min.css" />
    <link rel="stylesheet" href="assets/css/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/css/external.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />

</head>

<body>

    <?php require('./inc/mobile-nav.php') ?>

    <div class="page-wrapper">

        <?php require('./inc/header.php') ?>

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('./assets/images/backgrounds/page-header-bg.jpg');"></div>
            <div class="page-header-shape-1"></div>
            <div class="page-header-shape-2"></div>
            <div class="page-header-shape-3"></div>

            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>

        <section class="message-box">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="message-box__left">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">get in touch with our team</h2>
                                <span class="section-title__tagline">Trusted by more than 100+ customers</span>
                            </div>
                            <ul class="message-box_list">
                                <li><span class="section-title__tagline"><i class="fas fa-phone-square-alt"></i> +971 55 496 1433</span></li>
                                <li><span class="section-title__tagline"><i class="fas fa-envelope"></i> needhelp@gmail.com</span></li>
                                <li><span class="section-title__tagline"><i class="fas fa-map-marker-alt"></i> Dubai, United Arab Emirates</span></li>
                            </ul>
                            <div class="message-box__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="message-box__right">
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                            <div class="comment-form__icon">
                                                <i class="far fa-user-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                            <div class="comment-form__icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write Message"></textarea>
                                            <div class="comment-form__icon contact-expert__icon-comment">
                                                <i class="far fa-comment"></i>
                                            </div>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63525.53393552566!2d55.07483524048478!3d25.12695365178738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f1529c2653b15%3A0x3dcabcae764a3e16!2sPalm%20Jumeirah!5e0!3m2!1sen!2sae!4v1764416525444!5m2!1sen!2sae"
                class="google-map__one" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <?php require('./inc/footer.php') ?>

    </div>

    <?php require('./inc/footer-script.php') ?>

</body>

</html>