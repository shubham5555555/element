<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | Making Interior</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <meta name="description" content="Interior designers work closely with architects and builders to ensure that the final result meets the functional and aesthetic needs of the client. With the use of color, lighting, textures, and furniture, an interior designer can transform a dull and lifeless space into a beautiful and functional one. Whether it's a residential or commercial project, an interior designer can help make the most of any space, big or small." />
    <!--detailed robots meta https://developers.google.com/search/reference/robots_meta_tag -->
    <meta name="robots" content="index, follow, max-snippet: -1, max-image-preview:large, max-video-preview: -1" />
    <link rel="canonical" href="https://makinginterior.com/contact.php" />
    <!--open graph meta tags for social sites and search engines-->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Making Interior" />
    <meta property="og:description" content="Interior designers work closely with architects and builders to ensure that the final result meets the functional and aesthetic needs of the client. With the use of color, lighting, textures, and furniture, an interior designer can transform a dull and lifeless space into a beautiful and functional one. Whether it's a residential or commercial project, an interior designer can help make the most of any space, big or small." />
    <meta property="og:url" content="https://makinginterior.com" />
    <meta property="og:site_name" content="makinginterior.com" />
    <meta property="og:image" content="https://makinginterior.com/assets/img/logo1.jpeg" />
    <meta property="og:image:secure_url" content="https://makinginterior.com/assets/img/logo1.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="660" />
    <!--twitter description-->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Interior designers work closely with architects and builders to ensure that the final result meets the functional and aesthetic needs of the client. With the use of color, lighting, textures, and furniture, an interior designer can transform a dull and lifeless space into a beautiful and functional one. Whether it's a residential or commercial project, an interior designer can help make the most of any space, big or small." />
    <meta name="twitter:title" content="Making Interior" />
    <meta name="twitter:site" content="@makinginterior" />
    <meta name="twitter:image" content="https://makinginterior.com/assets/img/logo1.jpeg" />
    <meta name="twitter:creator" content="@makinginterior" />
    <!--opengraph tags for location or address for information panel in google-->
    <meta name="og:latitude" content="12.877460436891152" />
    <meta name="og:longitude" content="77.61725705978651" />
    <meta name="og:street-address" content="No 22, 2ND Cross Sugamma Nagar, nayanapanahalli" />
    <meta name="og:locality" content="Near DLF Town, Bengaluru-68" />
    <meta name="og:region" content="Bengaluru" />
    <meta name="og:postal-code" content="560002" />
    <meta name="og:country-name" content="INDIA" />
    <!--search engine verification-->
    <meta name="google-site-verification" content="f895vzMfIhORppR3NdElC0Ep2WUk_UPpLO52gE_5sHw" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "makinginterior.com",
            "url": "https://makinginterior.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://makinginterior.com/search?q=interior{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body s>

    <?php include 'layouts/header.php'; ?>
    <section >

        <div style="background:black" class="content">
            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                    <div class="col-md-8">
                        <div class="form h-100">
                            <h3>Send us a message</h3>
                            <form class="mb-5" method="post" action="mail/email.php" id="contactForm" name="contactForm">
                                <div class="row" style="background-color:white">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" maxlength="70" placeholder="Enter Your name">
                                    </div>
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Email *</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your email">
                                    </div>
                                </div>
                                <div class="row" style="background-color:white">
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Phone</label>
                                        <input type="text" class="form-control" name="contact" maxlength="10" minlength="10" id="phone" placeholder="Enter Your Contact number">
                                    </div>
                                    <div class="col-md-6 form-group mb-5">
                                        <label for="" class="col-form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="company" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="row" style="background-color:white">
                                    <div class="col-md-12 form-group mb-5">
                                        <label for="message" class="col-form-label">Message *</label>
                                        <textarea class="form-control" name="msg" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="background-color:white">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>
                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                Your message was sent, thank you!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info h-100">
                            <h3>Contact Information</h3>
                            <p class="mb-5 text-white text-muted1">Customer satisfaction is our top priority, contact us to experience it</p>
                            <ul class="list-unstyled">
                                <li class="d-flex">
                                    <span class="text-white icon-room mr-3"><iconify-icon icon="material-symbols:location-on-outline-rounded" width="30"></iconify-icon></span>
                                    <span class="textcon">No. 16/1 Bingipura Koppa Begur Main Road, Jigani Banglore-560105.</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text-white icon-phone mr-3"><iconify-icon icon="material-symbols:call" width="30"></iconify-icon></span>
                                    <span class="textcon">+91 9880142136</span>
                                </li>
                                <li class="d-flex">
                                    <span class="text-white icon-envelope mr-3"><iconify-icon icon="ic:round-mail-outline" width="30"></iconify-icon></span>
                                    <span class="textcon"><a href="#" class="text-white" data-cfemail="#">makinginteriors@gmail.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'layouts/footer.php'; ?>

    <script src="assets/js/jquerymin.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>