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
<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- <img src="/assets/img/logo.png" alt="Dev Sharma"> -->
            <h3 class="sitename fw-bold display-6">Dev Sharma</h3>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= url('/') ?>" <?php echo $isHomePage ? 'class="active"' : ''; ?>>Home</a></li>
                <li><a href="<?= url('/about') ?>" <?php echo $isAboutPage ? 'class="active"' : ''; ?>>About</a></li>
                <li class="dropdown"><a href="<?= url('/#services') ?>"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= url('/seo-services-in-jaipur') ?>">SEO Services in Jaipur</a></li>
                        <li><a href="<?= url('/local-seo-services-jaipur') ?>">Local SEO Services</a></li>
                        <li><a href="<?= url('/google-ads-agency-jaipur') ?>">Google Ads (PPC)</a></li>
                        <li><a href="<?= url('/social-media-marketing-agency-jaipur') ?>">Social Media Marketing</a></li>
                        <li><a href="<?= url('/website-design-company-jaipur') ?>">Website Design</a></li>
                        <li><a href="<?= url('/content-writing-services-jaipur') ?>">Content Writing Services</a></li>
                    </ul>
                </li>
                <li><a href="<?= url('/#digital-marketing-packages') ?>">Packages</a></li>
                <li><a href="<?= url('/#portfolio') ?>">Portfolio</a></li>
                <li><a href="<?= url('/blog') ?>" <?php echo $isBlogPage ? 'class="active"' : ''; ?>>Blog</a></li>
                <li><a href="<?= url('/#contact') ?>">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="https://x.com/princedev91" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/KSInfosoftOfficial"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/ksinfosoftofficial"><i class="bi bi-instagram"></i></a>
            <a href="https://in.linkedin.com/company/ks-infosoft"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.youtube.com/@ksinfosoft"><i class="bi bi-youtube"></i></a>
        </div>

    </div>
</header>
