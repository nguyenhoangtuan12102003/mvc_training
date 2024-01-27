<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo _WEB_ROOT; ?>/public/assets/clients/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo _WEB_ROOT; ?>/public/assets/clients/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo _WEB_ROOT; ?>/public/assets/clients/css/clients.css" rel="stylesheet">
</head>

<body>

    <?php
        $this->render('blocks/clients/header', $sub_content);
        $this->render($content, $sub_content);
        $this->render('blocks/clients/footer');
    ?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/assets/clients/lib/easing/easing.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/assets/clients/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo _WEB_ROOT; ?>/public/assets/clients/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/assets/clients/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo _WEB_ROOT; ?>/public/assets/clients/js/main.js"></script>
</body>
</html>