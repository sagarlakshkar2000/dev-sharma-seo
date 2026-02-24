<?php
// Determine current page for active nav highlighting
$currentUri = $_SERVER['REQUEST_URI'];
function isActive($path)
{
    global $currentUri;
    return (strpos($currentUri, $path) !== false) ? 'active' : '';
}
$isBlogPage = strpos($currentUri, '/blog') !== false;
$isAboutPage = strpos($currentUri, '/about') !== false;
$isHomePage = !$isBlogPage && !$isAboutPage && ($currentUri === '/' || strpos($currentUri, '/index') !== false || $currentUri === '/dev-sharma-seo/' || $currentUri === '/dev-sharma-seo/index.php');
?>
<div class="top-bar d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="contact-info d-flex align-items-center">
            <div class="info-item me-4">
                <i class="bi bi-envelope-fill text-accent me-2"></i>
                <a href="mailto:dmexpert003@gmail.com" class="text-white">dmexpert003@gmail.com</a>
            </div>
            <div class="info-item">
                <i class="bi bi-telephone-fill text-accent me-2"></i>
                <a href="tel:+918690329616" class="text-white">+91 8690329616</a>
            </div>
        </div>
        <div class="social-links d-flex align-items-center">
            <span class="me-3 text-white-50 small">Follow Us:</span>
            <a href="https://x.com/princedev91" target="_blank" class="ms-2"><i class="bi bi-twitter-x"></i></a>
            <a href="https://facebook.com/KSInfosoftOfficial" target="_blank" class="ms-2"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/ksinfosoftofficial" target="_blank" class="ms-2"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/company/ks-infosoft" target="_blank" class="ms-2"><i class="bi bi-linkedin"></i></a>
            <a href="https://youtube.com/@ksinfosoft" target="_blank" class="ms-2"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</div>

<header id="header" class="header sticky-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="<?= url('/') ?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename fw-extrabold mb-0">Dev Sharma</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= url('/') ?>" <?php echo $isHomePage ? 'class="active"' : ''; ?>>Home</a></li>
                <li><a href="<?= url('/about') ?>" <?php echo $isAboutPage ? 'class="active"' : ''; ?>>About</a></li>
                <li class="dropdown"><a href="<?= url('/#services') ?>"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= url('/seo-services-in-jaipur') ?>">SEO Services</a></li>
                        <li><a href="<?= url('/local-seo-services-jaipur') ?>">Local SEO</a></li>
                        <li><a href="<?= url('/google-ads-agency-jaipur') ?>">Google Ads (PPC)</a></li>
                        <li><a href="<?= url('/social-media-marketing-agency-jaipur') ?>">Social Media</a></li>
                        <li><a href="<?= url('/website-design-company-jaipur') ?>">Website Design</a></li>
                        <li><a href="<?= url('/content-writing-services-jaipur') ?>">Content Strategy</a></li>
                    </ul>
                </li>
                <li><a href="<?= url('/#digital-marketing-packages') ?>">Packages</a></li>
                <li><a href="<?= url('/#portfolio') ?>">Portfolio</a></li>
                <li><a href="<?= url('/blog') ?>" <?php echo $isBlogPage ? 'class="active"' : ''; ?>>Blog</a></li>
                <li><a href="<?= url('/#contact') ?>">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-action d-none d-xl-block">
            <a href="<?= url('/#contact') ?>" class="btn-get-quote">Get A Quote</a>
        </div>

    </div>
</header>
