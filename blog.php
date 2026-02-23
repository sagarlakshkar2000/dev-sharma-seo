<?php
require_once __DIR__ . '/config.php';

$title       = 'Digital Marketing & SEO Blog | Expert Tips by Dev Sharma';
$description = 'Explore expert insights on SEO, digital marketing, blogging, and online growth by Dev Sharma.';
$keywords    = 'SEO expert Jaipur, digital marketing blog, SEO tips, online marketing';

// ── WordPress REST API URL ────────────────────────────────────────────────────
// WordPress is installed at: /dev-sharma-seo/blog/
$wpApi = IS_LOCAL
    ? 'http://localhost/dev-sharma-seo/blog/wp-json/wp/v2'
    : 'https://devsharma.site/blog/wp-json/wp/v2';

// Fetch latest posts (with featured image embedded)
$response = @file_get_contents($wpApi . '/posts?_embed&per_page=12&status=publish');
$posts    = ($response !== false) ? json_decode($response, true) : [];

ob_start();
?>

<section style="padding: 60px 20px; background: #f5f7fb; min-height: 60vh;">
    <div style="max-width: 1100px; margin: auto;">

        <h1 style="text-align: center; margin-bottom: 10px; font-size: 2rem;">Dev Sharma Blog</h1>
        <p style="text-align: center; color: #666; margin-bottom: 40px;">
            Expert insights on SEO, digital marketing & online growth
        </p>

        <?php if (!empty($posts)): ?>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">

                <?php foreach ($posts as $post): ?>
                    <?php
                    $slug    = $post['slug'] ?? '';
                    $title_p = $post['title']['rendered'] ?? 'Untitled';
                    $excerpt = strip_tags($post['excerpt']['rendered'] ?? '');
                    $excerpt = substr(trim($excerpt), 0, 130);

                    // Featured image
                    $thumb = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;

                    // Post date
                    $date = isset($post['date'])
                        ? date('d M Y', strtotime($post['date']))
                        : '';
                    ?>
                    <a href="<?= url('/blog/' . $slug . '/') ?>"
                        style="text-decoration: none; color: inherit; display: block;">

                        <div style="background: white; border-radius: 14px;
                            box-shadow: 0 6px 24px rgba(0,0,0,0.07);
                            overflow: hidden; transition: transform 0.2s, box-shadow 0.2s;"
                            onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(0,0,0,0.12)'"
                            onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 6px 24px rgba(0,0,0,0.07)'">

                            <?php if ($thumb): ?>
                                <img src="<?= htmlspecialchars($thumb) ?>"
                                    alt="<?= htmlspecialchars(strip_tags($title_p)) ?>"
                                    style="width: 100%; height: 200px; object-fit: cover; display: block;">
                            <?php else: ?>
                                <div style="width:100%; height:160px; background: linear-gradient(135deg,#0073ff,#00c6ff);
                                display:flex; align-items:center; justify-content:center;">
                                    <span style="color:white; font-size:2.5rem;">📝</span>
                                </div>
                            <?php endif; ?>

                            <div style="padding: 22px;">
                                <?php if ($date): ?>
                                    <small style="color: #999; font-size: 13px;"><?= $date ?></small>
                                <?php endif; ?>
                                <h2 style="font-size: 1.15rem; margin: 8px 0 10px; color: #111; line-height: 1.4;">
                                    <?= htmlspecialchars(strip_tags($title_p)) ?>
                                </h2>
                                <?php if ($excerpt): ?>
                                    <p style="color: #666; font-size: 14px; line-height: 1.6; margin: 0;">
                                        <?= htmlspecialchars($excerpt) ?>...
                                    </p>
                                <?php endif; ?>
                                <span style="display: inline-block; margin-top: 14px; color: #0073ff;
                                     font-weight: 600; font-size: 14px;">
                                    Read more →
                                </span>
                            </div>

                        </div>
                    </a>
                <?php endforeach; ?>

            </div>

        <?php else: ?>
            <div style="text-align: center; padding: 60px 20px; color: #888;">
                <p style="font-size: 1.2rem;">No blog posts found.</p>
                <p style="font-size: 14px; margin-top: 10px;">
                    Make sure WordPress is running and you've published posts at:<br>
                    <code><?= $wpApi ?></code>
                </p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/components/blog-layout.php';
?>
