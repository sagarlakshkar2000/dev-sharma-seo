<?php
require_once __DIR__ . '/config.php';

$title = 'SEO Expert in Jaipur | Result-Driven SEO Services - Dev Sharma';
$description = 'Dev Sharma is a trusted SEO expert in Jaipur offering local SEO, Google ranking & lead generation services for businesses.';
$keywords = 'Dev Sharma, digital marketing expert jaipur, SEO strategist, SEO expert jaipur India, social media marketing, performance marketing, online marketing consultant, Google Ads specialist, content marketing, digital marketing portfolio, SEO freelancer, SMO expert, marketing expert India, website SEO audit, marketing consultant Jaipur';

ob_start();
?>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" style="position: relative; overflow: hidden;">

        <!-- Background Image -->
        <img src="<?= asset('assets/img/hero_banner_image1.jpg') ?>" alt="dev sharma"
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;"
            data-aos="fade-in">

        <!-- Black Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
           background: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

        <!-- Text Content -->
        <div class="container text-center"
            style="position: relative; z-index: 2; padding-top: 100px; padding-bottom: 100px;" data-aos="zoom-out"
            data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white display-3 fw-bold mb-4">Dev Sharma</h2>
                    <p class="text-white lead mb-5 opacity-90">
                        Passionate <strong>Digital Marketing Expert in Jaipur</strong> helping brands grow through data-driven SEO,
                        social media, and high-converting paid campaigns.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="<?= url('/about-dev-sharma') ?>" class="btn-get-started rounded-pill px-5 py-3">About Me</a>
                        <a href="#services" class="btn btn-outline-light rounded-pill px-5 py-3 fw-bold">My Services</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Helping businesses succeed online through data-driven strategies by a trusted <strong>SEO expert in
                    Jaipur</strong> and <strong>digital marketing expert in Jaipur</strong>..</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="<?= asset('assets/img/WhatsApp Image 2025-06-09 at 3.02.15 PM.jpeg') ?>" class="img-fluid" alt="Dev Sharma - SEO Expert Jaipur">
                </div>
                <div class="col-lg-8 content">
                    <h2>SEO Manager &amp; Digital Marketing Expert</h2>
                    <p class="py-3">
                        With over 5+ years of hands-on experience in digital marketing, I offer a robust skillset
                        and a proven track record of driving business growth.
                        My expertise spans across SEO, Google Ads, social media marketing, and content strategy.

                        As a trusted <strong>SEO expert in Jaipur</strong> and <strong>digital marketing expert in
                            Jaipur</strong>, I help businesses succeed online through data-driven strategies,
                        result-oriented campaigns, and continuous performance optimization.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="fw-bold">Core Digital Marketing Skills:</h6>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i>SEO (on-page & off-page optimization)</li>
                                <li><i class="bi bi-chevron-right"></i>SEM (Search Engine Marketing)</li>
                                <li><i class="bi bi-chevron-right"></i>Content strategy and marketing</li>
                                <li><i class="bi bi-chevron-right"></i>Google Ads and Facebook Ads management</li>
                                <li><i class="bi bi-chevron-right"></i>Website performance analysis</li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <h6 class="fw-bold">Key Achievements & Specializations:</h6>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i>Developed data-driven campaigns that increase
                                    traffic, improve
                                    conversion rates, and boost brand visibility.</li>
                                <li><i class="bi bi-chevron-right"></i>Helped startups, local businesses, and
                                    eCommerce brands grow
                                    their online presence using a mix of organic and paid channels.</li>
                                <li><i class="bi bi-chevron-right"></i>Expert in keyword strategy and optimizing
                                    Google rankings.</li>
                                <li><i class="bi bi-chevron-right"></i>Skilled in reducing ad spend while maximizing
                                    conversions.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Skills</h2>
            <p>Skilled in modern digital marketing strategies including SEO, SEM, social media, and analytics.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row skills-content skills-animation">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill"><span>SEO</span> <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100" style="background-color: var(--accent-color);">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>Social Media Marketing</span> <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>Google Ads</span> <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill"><span>Facebook Ads</span> <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>SMO</span> <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                    <div class="progress">
                        <span class="skill"><span>Google Business Profile</span> <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div><!-- End Skills Item -->

                </div>

            </div>

        </div>

    </section><!-- /Skills Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section py-5 light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white rounded shadow-sm">
                        <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-primary"></span>
                        <p class="mb-0 text-muted">Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white rounded shadow-sm">
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-primary"></span>
                        <p class="mb-0 text-muted">Successful Campaigns</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white rounded shadow-sm">
                        <span data-purecounter-start="0" data-purecounter-end="100000" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-primary"></span>
                        <p class="mb-0 text-muted">Organic Reach</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white rounded shadow-sm">
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-primary"></span>
                        <p class="mb-0 text-muted">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Stats Section -->

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
                    <div class="service-item item-cyan position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="<?= url('/seo-services-in-jaipur') ?>" class="stretched-link">
                            <h3>SEO Optimization</h3>
                        </a>
                        <p>Boost your website's visibility with on-page & off-page SEO strategies that bring organic
                            traffic and higher search rankings.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item item-orange position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                </path>
                            </svg>
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="<?= url('/social-media-marketing-agency-jaipur') ?>" class="stretched-link">
                            <h3>Social Media Marketing</h3>
                        </a>
                        <p>From Instagram to LinkedIn — we build your brand presence, engage your audience, and
                            drive conversions with content that works</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item item-teal position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                </path>
                            </svg>
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Google & Facebook Ads</h3>
                        </a>
                        <p>Get measurable ROI with highly targeted ad campaigns. We manage your budgets smartly for
                            maximum reach and conversions.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item item-red position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                </path>
                            </svg>
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href="<?= url('/content-writing-services-jaipur') ?>" class="stretched-link">
                            <h3>Content Marketing</h3>
                        </a>
                        <p>Attract, inform, and convert with blog articles, ad copy, social media content, and
                            landing page optimization tailored to your brand.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-indigo position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                </path>
                            </svg>
                            <i class="bi bi-calendar4-week icon"></i>
                        </div>
                        <a href="<?= url('/google-ads-agency-jaipur') ?>" class="stretched-link">
                            <h3>Local Marketing</h3>
                        </a>
                        <p>Power up your product sales with strategic campaigns, conversion-focused pages, and
                            remarketing tactics on all major platforms.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-pink position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                </path>
                            </svg>
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Website Design & Development</h3>
                        </a>
                        <p>From one-page portfolios to full eCommerce websites — we build fast, SEO-friendly,
                            mobile-responsive designs that convert.</p>
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
                            <p class="mb-1 text-primary h4 fw-bold">10,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
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
                            <p class="mb-1 text-primary h4 fw-bold">20,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
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
                            <p class="mb-1 text-primary h4 fw-bold">30,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
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
                            <p class="mb-1 text-primary h4 fw-bold">10% - 20% <span class="text-muted small fw-normal">ad spend</span></p>
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
                            <p class="mb-1 text-primary h4 fw-bold">15,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
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
                            <p class="mb-1 text-primary h4 fw-bold">10,000 INR <span class="text-muted small fw-normal">/ mo</span></p>
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

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>What our clients say about working with us in digital marketing and growth campaigns</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= asset('assets/img/testimonials/testimonials-1.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Dev transformed our brand visibility with SEO and Facebook Ads. In just 2
                                    months, we saw a 3x jump in traffic and 50% more sales.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= asset('assets/img/testimonials/testimonials-2.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>His digital marketing strategies helped us generate consistent leads.
                                    Professional, on-time, and result-oriented.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= asset('assets/img/testimonials/testimonials-3.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>From Social Media marketing to landing pages, Dev handled it all. My webinar
                                    signups grew by 200% in a month!.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= asset('assets/img/testimonials/testimonials-4.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Great experience! Google Ads optimization helped reduce CPC by 40% and improve
                                    quality leads.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= asset('assets/img/testimonials/testimonials-5.jpg') ?>" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Dev managed our Instagram and influencer strategy — we hit 25K followers in
                                    under 3 months with high engagement.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Explore a showcase of my recent digital marketing projects – from SEO campaigns and social media
                strategies to website audits and content marketing that delivered real results.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <div class="portfolio-contact">
                    <p>Portfolio available upon request—just send me a message!</p>
                    <a href="mailto:dmexpert003@gmail.com" class="contact-button">Contact Me</a>
                </div>

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Have a project in mind or need help growing your business online? Let's connect and make it happen!</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>Niwaru Road, Jhotwara, Jaipur, 302012</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p><a href="tel:+918690329616">+91 8690329616</a></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p><a href="mailto:dmexpert003@gmail.com">dmexpert003@gmail.com</a></p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>

                <div class="col-lg-7">
                    <form method="POST" action="https://formsubmit.co/d89f91d230299d3b32c7806062c69149"
                        class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <input type="hidden" name="_next" value="https://devsharma.site/thank-you.html">
                        <input type="hidden" name="_error" value="https://devsharma.site/error.html">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Your Name</label>
                                <input type="text" name="name" id="name-field" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required>
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject-field" required>
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field"
                                    required></textarea>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="freeAuditCheckbox"
                                        name="free_audit" value="yes">
                                    <label class="form-check-label" for="freeAuditCheckbox">
                                        <strong>Yes, I want a free website audit!</strong>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
</main>

<?php
$content = ob_get_clean();
include __DIR__ . '/components/layout.php';
?>
