<?php
require_once __DIR__ . '/config.php';

$title = 'SEO Expert in Jaipur | Result-Driven SEO Services - Dev Sharma';
$description = 'Dev Sharma is a trusted SEO expert in Jaipur offering local SEO, Google ranking & lead generation services for businesses.';
$keywords = 'Dev Sharma, digital marketing expert jaipur, SEO strategist, SEO expert jaipur India, social media marketing, performance marketing, online marketing consultant, Google Ads specialist, content marketing, digital marketing portfolio, SEO freelancer, SMO expert, marketing expert India, website SEO audit, marketing consultant Jaipur';

ob_start();
?>

<main class="main">
dev
    <!-- Hero Section -->
    <section id="hero" class="hero section" style="position: relative; overflow: hidden;">

        <!-- Background Image -->
        <img src="<?= asset('assets/img/hero_banner_image1.jpg') ?>" alt="dev sharma"
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;"
            data-aos="fade-in">

        <!-- Black Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
           background: linear-gradient(to bottom, rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.4)); z-index: 1;"></div>

        <!-- Text Content -->
        <div class="container text-center"
            style="position: relative; z-index: 2; padding-top: 120px; padding-bottom: 120px;" data-aos="zoom-out"
            data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-white display-2 fw-bold mb-4">Elevate Your Brand with <span class="text-accent">Dev Sharma</span></h2>
                    <p class="text-white lead mb-5 opacity-90 mx-auto" style="max-width: 800px; font-size: 1.25rem;">
                        A Results-Driven <strong>Digital Marketing Expert & SEO Strategist</strong>.
                        Turning clicks into customers with data-backed growth strategies.
                    </p>
                    <div class="d-flex justify-content-center gap-3 gap-md-4 mt-2">
                        <a href="<?= url('/about-dev-sharma') ?>" class="btn-get-started rounded-pill">Work With Me</a>
                        <a href="#services" class="btn btn-outline-light rounded-pill">Explore Services</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About The Expert</h2>
            <p class="lead">Strategic thinking. Data-driven execution. Real business growth.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5 align-items-center">
                <div class="col-lg-5">
                    <div class="position-relative">
                        <img src="<?= asset('assets/img/myimage.jpeg') ?>" class="img-fluid rounded-4 shadow-lg" alt="Dev Sharma - SEO Expert Jaipur">
                        <div class="experience-badge bg-primary text-white p-3 rounded-3 position-absolute bottom-0 end-0 m-3 shadow">
                            <span class="d-block h4 fw-bold mb-0">5+ Years</span>
                            <span class="small">Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 content ps-lg-5">
                    <h6 class="text-accent fw-bold text-uppercase mb-2">SEO Manager & Digital Marketing Expert</h6>
                    <h2 class="mb-4">Driving Business Growth Through Strategic Digital Marketing</h2>
                    <p class="mb-4 text-justify">
                        With over <strong>5+ years of hands-on experience</strong> in digital marketing, I offer a robust skillset and a proven track record of driving business growth. My expertise spans across SEO, Google Ads, social media marketing, and content strategy. As a trusted <strong>SEO expert in Jaipur</strong> and digital marketing strategist, I help businesses succeed online through data-driven strategies, result-oriented campaigns, and continuous performance optimization.
                    </p>

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <h5 class="fw-bold mb-3 border-start border-4 border-primary ps-3">Core Expertise</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i> SEO (On-page & Off-page)</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i> SEM & Search Marketing</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i> Content Branding & Strategy</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i> Google & Facebook Ads</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-accent me-2"></i> Website Performance Analysis</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="fw-bold mb-3 border-start border-4 border-primary ps-3">Key Achievements</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-trophy-fill text-accent me-2"></i> Increased Traffic & Conversions</li>
                                <li class="mb-2"><i class="bi bi-rocket-takeoff-fill text-accent me-2"></i> Scaled Local & eCommerce Brands</li>
                                <li class="mb-2"><i class="bi bi-bullseye text-accent me-2"></i> Top Keyword Ranking Specialist</li>
                                <li class="mb-2"><i class="bi bi-piggy-bank-fill text-accent me-2"></i> Reduced Spends, Max Conversions</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="#contact" class="btn btn-primary px-4 py-2 rounded-pill fw-bold">Let's Discuss Your Growth</a>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Areas of Expertise</h2>
            <p>Mastering the digital landscape with specialized skills across the marketing funnel.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="skill-card">
                        <div class="icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h5 class="fw-bold">Advanced SEO</h5>
                        <p class="small text-muted mb-3">100% Proficiency in Organic Ranking & Technical Audits.</p>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%; background-color: var(--accent-color);"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="skill-card">
                        <div class="icon"><i class="bi bi-google"></i></div>
                        <h5 class="fw-bold">Google & Meta Ads</h5>
                        <p class="small text-muted mb-3">95% Proficiency in High-ROI Paid Campaigns.</p>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 95%; background-color: var(--accent-color);"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="skill-card">
                        <div class="icon"><i class="bi bi-search-heart"></i></div>
                        <h5 class="fw-bold">Local SEO & GMB</h5>
                        <p class="small text-muted mb-3">90% Proficiency in Local Visibility & GMB Optimization.</p>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 90%; background-color: var(--accent-color);"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="skill-card">
                        <div class="icon"><i class="bi bi-megaphone"></i></div>
                        <h5 class="fw-bold">Content Marketing</h5>
                        <p class="small text-muted mb-3">85% Proficiency in Performance-led Content Branding.</p>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 85%; background-color: var(--accent-color);"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="skill-card">
                        <div class="icon"><i class="bi bi-code-square"></i></div>
                        <h5 class="fw-bold">Performance Analytics</h5>
                        <p class="small text-muted mb-3">80% Proficiency in GA4, Search Console & ROI Data.</p>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%; background-color: var(--accent-color);"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="skill-card">
                        <div class="icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5 class="fw-bold">Digital Strategy (SEM)</h5>
                        <p class="small text-muted mb-3">90% Proficiency in Scaling Multi-channel Growth.</p>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" role="progressbar" style="width: 90%; background-color: var(--accent-color);"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Skills Section -->

   <?php include 'components/stats-section.php'; ?>

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Helping businesses grow with modern digital strategies that deliver results.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon mb-4">
                            <i class="bi bi-graph-up text-accent fs-1"></i>
                        </div>
                        <a href="<?= url('/seo-services-in-jaipur') ?>" class="stretched-link">
                            <h3 class="fw-bold">SEO Optimization</h3>
                        </a>
                        <p class="text-muted">Dominate search rankings with data-driven on-page, off-page, and technical SEO strategies that drive sustainable organic traffic.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon mb-4">
                            <i class="bi bi-megaphone text-accent fs-1"></i>
                        </div>
                        <a href="<?= url('/social-media-marketing-agency-jaipur') ?>" class="stretched-link">
                            <h3 class="fw-bold">Social Media Marketing</h3>
                        </a>
                        <p class="text-muted">Build brand authority and engage your target audience across Instagram, LinkedIn, and Meta with ROI-focused content strategies.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon mb-4">
                            <i class="bi bi-lightning-charge text-accent fs-1"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3 class="fw-bold">PPC & Paid Ads</h3>
                        </a>
                        <p class="text-muted">Scale your business fast with precision-targeted Google & Meta Ad campaigns designed for maximum conversion and minimal ad spend.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon mb-4">
                            <i class="bi bi-pencil-square text-accent fs-1"></i>
                        </div>
                        <a href="<?= url('/content-writing-services-jaipur') ?>" class="stretched-link">
                            <h3 class="fw-bold">Content Strategy</h3>
                        </a>
                        <p class="text-muted">High-quality, SEO-optimized content that informs, engages, and converts your visitors into loyal brand advocates.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon mb-4">
                            <i class="bi bi-geo-alt text-accent fs-1"></i>
                        </div>
                        <a href="<?= url('/google-ads-agency-jaipur') ?>" class="stretched-link">
                            <h3 class="fw-bold">Local SEO & GMB</h3>
                        </a>
                        <p class="text-muted">Dominate your local market. We optimize your Google Business Profile to ensure you're the first choice for local customers.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon mb-4">
                            <i class="bi bi-window-sidebar text-accent fs-1"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3 class="fw-bold">Web Development</h3>
                        </a>
                        <p class="text-muted">Fast, responsive, and SEO-ready websites designed to provide an elite user experience and drive higher business conversions.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Packages -->
    <section id="digital-marketing-packages" class="section py-5 light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Digital Marketing Packages</h2>
            <p>Affordable and result-oriented SEO plans for every business stage.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center align-items-stretch">
                <!-- Small Business SEO -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="sero-card-header">
                            <div class="seo-icon">
                                <i class="bi bi-shop"></i>
                            </div>
                            <h4 class="fw-bold">Small Business SEO</h4>
                            <p class="mb-1 text-accent h4 fw-bold">10,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
                            <p class="small text-muted">Perfect for local shops & startups</p>
                        </div>
                        <ul class="card-features">
                            <li><i class="bi bi-check-circle-fill"></i> Up to 5 Target Keywords</li>
                            <li><i class="bi bi-check-circle-fill"></i> Google Map (GMB) Setup</li>
                            <li><i class="bi bi-check-circle-fill"></i> Local Directory Listings</li>
                            <li><i class="bi bi-check-circle-fill"></i> Monthly Progress Report</li>
                            <li><i class="bi bi-check-circle-fill"></i> On-Page SEO Optimization</li>
                        </ul>
                        <button class="seo-btn" onclick="openWhatsApp('Small Business SEO', '10,000 INR')">
                            <i class="bi bi-whatsapp"></i> Get Started
                        </button>
                    </div>
                </div>

                <!-- Midsize Business SEO -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <div class="sero-card-header">
                            <div class="seo-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h4 class="fw-bold">Midsize Business SEO</h4>
                            <p class="mb-1 text-accent h4 fw-bold">20,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
                            <p class="small text-muted">For growing businesses aiming higher</p>
                        </div>
                        <ul class="card-features">
                            <li><i class="bi bi-check-circle-fill"></i> Up to 15 Target Keywords</li>
                            <li><i class="bi bi-check-circle-fill"></i> Advanced Competitor Analysis</li>
                            <li><i class="bi bi-check-circle-fill"></i> High-Quality Backlink Building</li>
                            <li><i class="bi bi-check-circle-fill"></i> Weekly Performance Tracking</li>
                            <li><i class="bi bi-check-circle-fill"></i> Content Strategy Audit</li>
                        </ul>
                        <button class="seo-btn" onclick="openWhatsApp('Midsize Business SEO', '20,000 INR')">
                            <i class="bi bi-whatsapp"></i> Choose Advanced
                        </button>
                    </div>
                </div>

                <!-- Large Business SEO -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="sero-card-header">
                            <div class="seo-icon">
                                <i class="bi bi-cart"></i>
                            </div>
                            <h4 class="fw-bold">Large Business SEO</h4>
                            <p class="mb-1 text-accent h4 fw-bold">30,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
                            <p class="small text-muted">National & Ecommerce visibility</p>
                        </div>
                        <ul class="card-features">
                            <li><i class="bi bi-check-circle-fill"></i> 30+ Target Keywords</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ecommerce/National SEO</li>
                            <li><i class="bi bi-check-circle-fill"></i> Technical SEO Deep Audit</li>
                            <li><i class="bi bi-check-circle-fill"></i> Priority Support & Calls</li>
                            <li><i class="bi bi-check-circle-fill"></i> Advanced ROI Tracking</li>
                        </ul>
                        <button class="seo-btn" onclick="openWhatsApp('Large Business SEO', '30,000 INR')">
                            <i class="bi bi-whatsapp"></i> Go National
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container section-title" data-aos="fade-up">
            <h2>Specialized Marketing Packages</h2>
            <p>Focused strategies for Ads, Social Media, and Content growth.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 justify-content-center">
                <!-- PPC Ads -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="sero-card-header">
                            <div class="seo-icon">
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                            <h4 class="fw-bold">PPC (Google Ads)</h4>
                            <p class="mb-1 text-accent h4 fw-bold">10% - 20% <span class="text-muted small fw-normal">ad spend</span></p>
                            <p class="small text-muted">Maximize ROI with expert management</p>
                        </div>
                        <ul class="card-features">
                            <li><i class="bi bi-check-circle-fill"></i> Search & Display Campaigns</li>
                            <li><i class="bi bi-check-circle-fill"></i> ROI-Focused Keyword Targeting</li>
                            <li><i class="bi bi-check-circle-fill"></i> Professional Ad Copywriting</li>
                            <li><i class="bi bi-check-circle-fill"></i> Daily Performance Monitoring</li>
                            <li><i class="bi bi-check-circle-fill"></i> Remarketing & Lead Tracking</li>
                        </ul>
                        <button class="seo-btn"
                            onclick="openWhatsApp('PPC (Google Ads) Package', '10% - 20% of ad spend')">
                            <i class="bi bi-whatsapp"></i> Get Leads Now
                        </button>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="sero-card-header">
                            <div class="seo-icon">
                                <i class="bi bi-share"></i>
                            </div>
                            <h4 class="fw-bold">Social Media (SMM)</h4>
                            <p class="mb-1 text-accent h4 fw-bold">15,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
                            <p class="small text-muted">Boost engagement & brand awareness</p>
                        </div>
                        <ul class="card-features">
                            <li><i class="bi bi-check-circle-fill"></i> FB, Insta & LinkedIn Management</li>
                            <li><i class="bi bi-check-circle-fill"></i> Custom Creative Post Designs</li>
                            <li><i class="bi bi-check-circle-fill"></i> Reels & Short Video Strategy</li>
                            <li><i class="bi bi-check-circle-fill"></i> Community Management</li>
                            <li><i class="bi bi-check-circle-fill"></i> Follower Growth Tactics</li>
                        </ul>
                        <button class="seo-btn"
                            onclick="openWhatsApp('Social Media (SMM, SMO) Package', '15,000 INR')">
                            <i class="bi bi-whatsapp"></i> Grow Socially
                        </button>
                    </div>
                </div>

                <!-- Content Writing -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="sero-card-header">
                            <div class="seo-icon">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h4 class="fw-bold">Content Writing</h4>
                            <p class="mb-1 text-accent h4 fw-bold">10,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
                            <p class="small text-muted">Drive traffic with powerful content</p>
                        </div>
                        <ul class="card-features">
                            <li><i class="bi bi-check-circle-fill"></i> SEO-Optimized Blog Posts</li>
                            <li><i class="bi bi-check-circle-fill"></i> Website Copywriting</li>
                            <li><i class="bi bi-check-circle-fill"></i> Product & Landing Page Content</li>
                            <li><i class="bi bi-check-circle-fill"></i> Informative Guest Articles</li>
                            <li><i class="bi bi-check-circle-fill"></i> Keyword-Rich Content Strategy</li>
                        </ul>
                        <button class="seo-btn" onclick="openWhatsApp('Content Writing Package', '10,000 INR')">
                            <i class="bi bi-whatsapp"></i> Hire Expert
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'components/testimonials-section.php'; ?>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>A showcase of successful digital transformations and growth stories.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active">All Projects</li>
                    <li data-filter=".filter-seo">SEO Strategy</li>
                    <li data-filter=".filter-ppc">PPC & Ads</li>
                    <li data-filter=".filter-social">Social Media</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-seo">
                        <div class="portfolio-content h-100">
                            <img src="<?= asset('assets/img/portfolio/app-1.jpg') ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>E-commerce SEO Growth</h4>
                                <p>Increased organic traffic by 150% in 6 months for a luxury retail brand.</p>
                                <a href="assets/img/portfolio/app-1.jpg" title="SEO Growth" data-gallery="portfolio-gallery-seo" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ppc">
                        <div class="portfolio-content h-100">
                            <img src="<?= asset('assets/img/portfolio/product-1.jpg') ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Google Ads ROI Max</h4>
                                <p>Achieved 5x ROAS for a SaaS startup through hyper-targeted search ads.</p>
                                <a href="assets/img/portfolio/product-1.jpg" title="PPC ROI" data-gallery="portfolio-gallery-ppc" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-social">
                        <div class="portfolio-content h-100">
                            <img src="<?= asset('assets/img/portfolio/branding-1.jpg') ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Social Brand Authority</h4>
                                <p>Scaled Instagram from 0 to 20k followers with high-engagement Reels.</p>
                                <a href="assets/img/portfolio/branding-1.jpg" title="Social Branding" data-gallery="portfolio-gallery-social" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-seo">
                        <div class="portfolio-content h-100">
                            <img src="<?= asset('assets/img/portfolio/app-2.jpg') ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Local SEO Dominion</h4>
                                <p>Ranked #1 for 50+ local keywords for a multi-location service provider.</p>
                                <a href="assets/img/portfolio/app-2.jpg" title="Local SEO" data-gallery="portfolio-gallery-seo" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ppc">
                        <div class="portfolio-content h-100">
                            <img src="<?= asset('assets/img/portfolio/product-2.jpg') ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Facebook Lead Gen</h4>
                                <p>Generated 500+ qualified real estate leads at $2/lead.</p>
                                <a href="assets/img/portfolio/product-2.jpg" title="Lead Gen" data-gallery="portfolio-gallery-ppc" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-social">
                        <div class="portfolio-content h-100">
                            <img src="<?= asset('assets/img/portfolio/branding-2.jpg') ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>LinkedIn Networking</h4>
                                <p>Established executive thought leadership through strategic B2B content.</p>
                                <a href="assets/img/portfolio/branding-2.jpg" title="LinkedIn Growth" data-gallery="portfolio-gallery-social" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Let's Get Started</h2>
            <p>Ready to dominate your market? Let's discuss your growth strategy.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5">

                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Location</h3>
                                <p>Jhotwara, Jaipur, Rajasthan 302012</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call/WhatsApp</h3>
                                <p><a href="tel:+918690329616">+91 8690329616</a></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p><a href="mailto:dmexpert003@gmail.com">dmexpert003@gmail.com</a></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="mt-4 pt-4 border-top">
                            <h5 class="fw-bold mb-3">Follow Me</h5>
                            <div class="social-links d-flex">
                                <a href="https://x.com/princedev91" target="_blank" class="me-3 fs-4 text-accent"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://facebook.com/KSInfosoftOfficial" target="_blank" class="me-3 fs-4 text-accent"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/ksinfosoftofficial" target="_blank" class="me-3 fs-4 text-accent"><i class="bi bi-instagram"></i></a>
                                <a href="https://linkedin.com/company/ks-infosoft" target="_blank" class="me-3 fs-4 text-accent"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form method="POST" action="https://formsubmit.co/d89f91d230299d3b32c7806062c69149"
                        class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <input type="hidden" name="_next" value="https://devsharma.site/thank-you.html">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="name-field" class="pb-2 fw-bold">Full Name</label>
                                <input type="text" name="name" id="name-field" class="form-control" placeholder="John Doe" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2 fw-bold">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email-field" placeholder="john@example.com" required>
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2 fw-bold">I'm interested in...</label>
                                <select class="form-control" name="subject" id="subject-field" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="SEO Optimization">SEO Optimization</option>
                                    <option value="PPC & Google Ads">PPC & Google Ads</option>
                                    <option value="Social Media Strategy">Social Media Strategy</option>
                                    <option value="Content Marketing">Content Marketing</option>
                                    <option value="Free Website Audit">Free Website Audit</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2 fw-bold">Project Brief</label>
                                <textarea class="form-control" name="message" rows="6" id="message-field" placeholder="Tell me about your goals..." required></textarea>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check custom-checkbox mb-3">
                                    <input class="form-check-input" type="checkbox" id="freeAuditCheckbox" name="free_audit" value="yes">
                                    <label class="form-check-label fw-bold text-dark" for="freeAuditCheckbox">
                                        Yes, I want a free website audit!
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="w-100">Establish Growth Strategy</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section><!-- /Contact Section -->
</main>

<?php
$content = ob_get_clean();
include __DIR__ . '/components/layout.php';
?>
