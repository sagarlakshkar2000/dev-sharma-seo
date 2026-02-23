<?php
if (!defined('BASE')) require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L63Q3HB5D2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-L63Q3HB5D2');
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo isset($title) ? htmlspecialchars($title) : 'Blog | Dev Sharma'; ?></title>
    <meta name="description" content="<?php echo isset($description) ? htmlspecialchars($description) : ''; ?>">
    <meta name="keywords" content="<?php echo isset($keywords) ? htmlspecialchars($keywords) : ''; ?>">

    <!-- Favicons -->
    <link href="<?= asset('assets/img/Fav-icon.png') ?>" rel="icon">
    <link href="<?= asset('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="<?= asset('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= asset('assets/css/main.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script>
        function openWhatsApp(service, price = '') {
            const phoneNumber = "918690329616";
            const message = `Hi! I'm interested in your ${service} (${price}). Please share more details.`;
            const encodedMessage = encodeURIComponent(message);
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
            window.open(whatsappUrl, '_blank');
        }
    </script>
</head>

<body>
    <?php include __DIR__ . '/header.php'; ?>

    <?php echo $content; ?>

    <?php include __DIR__ . '/footer.php'; ?>
</body>

</html>
