<?php
require_once __DIR__ . '/../config.php';

// ── Slug from URL ─────────────────────────────────────────────────────────────
$uri   = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$parts = explode('/', $uri);
$slug  = '';
foreach (array_reverse($parts) as $p) {
    if ($p !== '' && $p !== 'blog') {
        $slug = $p;
        break;
    }
}
if (empty($slug)) {
    header('Location: ' . url('/blog.php'));
    exit;
}

// ── WordPress REST API ────────────────────────────────────────────────────────
$wpApi = IS_LOCAL
    ? SITE_URL . '/blog/wp-json/wp/v2'
    : 'https://devsharma.site/blog/wp-json/wp/v2';

function wp_get(string $endpoint): ?array
{
    global $wpApi;
    $r = @file_get_contents($wpApi . $endpoint);
    return $r !== false ? json_decode($r, true) : null;
}

// Fetch the post
$posts = wp_get('/posts?slug=' . urlencode($slug) . '&_embed&status=publish');
$post  = $posts[0] ?? null;

if (!$post) {
    http_response_code(404);
    $title   = '404 – Post Not Found | Dev Sharma';
    $description = '';
    $keywords    = '';
    $content = '<div style="text-align:center;padding:100px 20px;">
        <h1 style="font-size:3rem;">404</h1>
        <p style="font-size:1.2rem;color:#666;">The blog post you\'re looking for doesn\'t exist.</p>
        <a href="' . url('/blog.php') . '" style="display:inline-block;margin-top:20px;padding:12px 28px;
           background:#0073ff;color:white;border-radius:8px;text-decoration:none;font-weight:600;">
           ← Back to Blog</a></div>';
    include __DIR__ . '/../../components/blog-layout.php';
    exit;
}

// ── Extract post data ─────────────────────────────────────────────────────────
$postId      = $post['id'];
$title       = strip_tags($post['title']['rendered']) . ' | Dev Sharma';
$description = substr(trim(strip_tags($post['excerpt']['rendered'] ?? '')), 0, 160);
$keywords    = '';

$thumb    = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;
$date     = isset($post['date']) ? date('F d, Y', strtotime($post['date'])) : '';
$modified = isset($post['modified']) ? date('F d, Y', strtotime($post['modified'])) : '';
$author   = $post['_embedded']['author'][0] ?? [];
$authorName   = $author['name'] ?? 'Dev Sharma';
$authorDesc   = $author['description'] ?? 'SEO Expert & Digital Marketing Specialist based in Jaipur, India.';
$authorAvatar = $author['avatar_urls']['96'] ?? null;
$authorUrl    = $author['link'] ?? '#';

// Categories & tags
$cats = $post['_embedded']['wp:term'][0] ?? [];
$tags = $post['_embedded']['wp:term'][1] ?? [];

// Reading time (avg 200 wpm)
$wordCount   = str_word_count(strip_tags($post['content']['rendered']));
$readingTime = max(1, ceil($wordCount / 200));

// Post content
$postContent = $post['content']['rendered'];

// Related posts (same first category)
$relatedPosts = [];
if (!empty($cats)) {
    $catId = $cats[0]['id'];
    $related = wp_get('/posts?categories=' . $catId . '&exclude=' . $postId . '&per_page=3&_embed');
    $relatedPosts = $related ?? [];
}

// Comments
$comments    = wp_get('/comments?post=' . $postId . '&per_page=20&order=asc') ?? [];
$commentCount = $post['comment_count'] ?? count($comments);

// Current page URL for sharing
$pageUrl = (IS_LOCAL ? 'http://localhost' : 'https://devsharma.site')
    . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

ob_start();
?>

<!-- ═══════════════════════════════════════════════════════════════════════════
     BLOG DETAIL PAGE
═══════════════════════════════════════════════════════════════════════════ -->

<style>
    /* ── Reset & base ── */
    .bd-wrap * {
        box-sizing: border-box;
    }

    .bd-wrap {
        font-family: 'Inter', 'Roboto', sans-serif;
        color: #1a1a2e;
        background: #fff;
    }

    /* ── Hero ── */
    .bd-hero {
        position: relative;
        width: 100%;
        min-height: 480px;
        overflow: hidden;
        background: #0d1117;
        margin-top: 0;
    }

    .bd-hero img.bd-hero-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: .55;
        display: block;
    }

    .bd-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, .15) 0%, rgba(0, 0, 0, .80) 100%);
    }

    .bd-hero-content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 60px 24px 48px;
        max-width: 900px;
        margin: 0 auto;
        min-height: 480px;
    }

    .bd-hero-cats {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 16px;
    }

    .bd-hero-cat {
        background: #0073ff;
        color: #fff;
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .5px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .bd-hero-title {
        font-size: clamp(1.7rem, 4vw, 2.8rem);
        font-weight: 800;
        color: #fff;
        line-height: 1.25;
        margin: 0 0 20px;
    }

    .bd-hero-meta {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 16px;
    }

    .bd-hero-author {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .bd-hero-avatar {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, .8);
        object-fit: cover;
        flex-shrink: 0;
        background: linear-gradient(135deg, #0073ff, #7c3aed);
    }

    .bd-hero-avatar-placeholder {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, .8);
        background: linear-gradient(135deg, #0073ff, #7c3aed);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        font-size: 1rem;
        flex-shrink: 0;
    }

    .bd-hero-meta-text {
        color: rgba(255, 255, 255, .9);
        font-size: 13px;
        line-height: 1.4;
    }

    .bd-hero-meta-text strong {
        color: #fff;
        display: block;
        font-size: 14px;
    }

    .bd-hero-badges {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        align-items: center;
    }

    .bd-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        background: rgba(255, 255, 255, .15);
        backdrop-filter: blur(4px);
        border: 1px solid rgba(255, 255, 255, .25);
        color: #fff;
        padding: 5px 13px;
        border-radius: 20px;
        font-size: 12.5px;
        font-weight: 500;
        white-space: nowrap;
    }

    /* ── Breadcrumb ── */
    .bd-breadcrumb {
        background: #f8f9fc;
        border-bottom: 1px solid #eee;
        padding: 12px 0;
    }

    .bd-breadcrumb-inner {
        max-width: 1100px;
        margin: auto;
        padding: 0 24px;
        font-size: 13px;
        color: #888;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 6px;
    }

    .bd-breadcrumb a {
        color: #0073ff;
        text-decoration: none;
    }

    .bd-breadcrumb a:hover {
        text-decoration: underline;
    }

    .bd-sep {
        color: #ccc;
    }

    /* ── Layout ── */
    .bd-layout {
        max-width: 1100px;
        margin: 48px auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 48px;
    }

    @media(max-width:900px) {
        .bd-layout {
            grid-template-columns: 1fr;
        }
    }

    /* ── Social Share ── */
    .bd-share {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 36px;
        padding-bottom: 28px;
        border-bottom: 1px solid #eee;
    }

    .bd-share-label {
        font-size: 13px;
        font-weight: 600;
        color: #666;
        margin-right: 4px;
    }

    .bd-share-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 16px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        transition: .15s;
    }

    .bd-share-btn:hover {
        opacity: .85;
        transform: translateY(-1px);
    }

    .bd-share-fb {
        background: #1877f2;
        color: #fff;
    }

    .bd-share-tw {
        background: #1da1f2;
        color: #fff;
    }

    .bd-share-wa {
        background: #25d366;
        color: #fff;
    }

    .bd-share-li {
        background: #0a66c2;
        color: #fff;
    }

    .bd-share-copy {
        background: #f0f0f0;
        color: #333;
        border: none;
        cursor: pointer;
    }

    /* ── Table of Contents ── */
    .bd-toc {
        background: #f8f9ff;
        border: 1px solid #dde8ff;
        border-radius: 12px;
        padding: 22px 24px;
        margin-bottom: 36px;
    }

    .bd-toc-title {
        font-size: 14px;
        font-weight: 700;
        color: #0073ff;
        margin-bottom: 14px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .bd-toc ol {
        padding-left: 18px;
        margin: 0;
    }

    .bd-toc li {
        font-size: 14px;
        color: #444;
        line-height: 1.8;
    }

    .bd-toc a {
        color: #333;
        text-decoration: none;
    }

    .bd-toc a:hover {
        color: #0073ff;
    }

    /* ── Article content ── */
    .bd-article h2 {
        font-size: 1.55rem;
        font-weight: 700;
        margin: 2.2rem 0 .9rem;
        color: #111;
        padding-bottom: 8px;
        border-bottom: 2px solid #f0f0f0;
    }

    .bd-article h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 1.8rem 0 .7rem;
        color: #1a1a2e;
    }

    .bd-article h4 {
        font-size: 1.05rem;
        font-weight: 700;
        margin: 1.4rem 0 .5rem;
        color: #333;
    }

    .bd-article p {
        font-size: 1.05rem;
        line-height: 1.85;
        color: #444;
        margin-bottom: 1.3rem;
    }

    .bd-article ul,
    .bd-article ol {
        padding-left: 1.6rem;
        margin-bottom: 1.3rem;
    }

    .bd-article li {
        font-size: 1.02rem;
        line-height: 1.75;
        color: #444;
        margin-bottom: .45rem;
    }

    .bd-article img {
        max-width: 100%;
        border-radius: 10px;
        margin: 1.2rem 0;
        display: block;
    }

    .bd-article a {
        color: #0073ff;
        font-weight: 500;
    }

    .bd-article blockquote {
        border-left: 4px solid #0073ff;
        background: #f0f7ff;
        padding: 16px 22px;
        margin: 1.8rem 0;
        border-radius: 0 10px 10px 0;
        color: #3a3a5c;
        font-style: italic;
        font-size: 1.05rem;
    }

    .bd-article pre {
        background: #1e1e2e;
        color: #abb2bf;
        padding: 20px;
        border-radius: 10px;
        overflow-x: auto;
        margin: 1.5rem 0;
        font-size: .9rem;
        line-height: 1.65;
    }

    .bd-article code {
        background: #f4f0ff;
        color: #7c3aed;
        padding: 2px 7px;
        border-radius: 4px;
        font-size: .88em;
    }

    .bd-article pre code {
        background: none;
        color: inherit;
        padding: 0;
        font-size: inherit;
    }

    .bd-article table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5rem 0;
        font-size: .95rem;
    }

    .bd-article th {
        background: #f0f7ff;
        color: #0073ff;
        padding: 10px 14px;
        text-align: left;
        border: 1px solid #dde8ff;
        font-weight: 700;
    }

    .bd-article td {
        padding: 10px 14px;
        border: 1px solid #eee;
        color: #444;
    }

    .bd-article tr:nth-child(even) td {
        background: #fafbff;
    }

    .bd-article figure {
        margin: 1.5rem 0;
    }

    .bd-article figcaption {
        text-align: center;
        font-size: .85rem;
        color: #888;
        margin-top: 6px;
    }

    .bd-article hr {
        border: none;
        border-top: 2px solid #f0f0f0;
        margin: 2.5rem 0;
    }

    /* ── Tags ── */
    .bd-tags {
        margin: 36px 0;
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        align-items: center;
    }

    .bd-tags-label {
        font-size: 13px;
        font-weight: 700;
        color: #666;
    }

    .bd-tag {
        background: #f0f4ff;
        color: #0073ff;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
        border: 1px solid #dde8ff;
    }

    .bd-tag:hover {
        background: #0073ff;
        color: #fff;
    }

    /* ── Author box ── */
    .bd-author {
        background: linear-gradient(135deg, #f0f7ff 0%, #f8f0ff 100%);
        border: 1px solid #dde8ff;
        border-radius: 16px;
        padding: 28px;
        display: flex;
        gap: 22px;
        margin: 40px 0;
        align-items: flex-start;
    }

    .bd-author-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 4px 14px rgba(0, 115, 255, .2);
        flex-shrink: 0;
    }

    .bd-author-avatar-placeholder {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, #0073ff, #7c3aed);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        flex-shrink: 0;
    }

    .bd-author-name {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .bd-author-role {
        color: #0073ff;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .bd-author-bio {
        color: #666;
        font-size: .93rem;
        line-height: 1.65;
    }

    @media(max-width:500px) {
        .bd-author {
            flex-direction: column;
        }
    }

    /* ── Related posts ── */
    .bd-related {
        margin: 48px 0 0;
    }

    .bd-related-title {
        font-size: 1.3rem;
        font-weight: 800;
        margin-bottom: 24px;
        color: #111;
        border-left: 4px solid #0073ff;
        padding-left: 14px;
    }

    .bd-related-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 22px;
    }

    .bd-related-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        overflow: hidden;
        transition: .2s;
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .bd-related-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
    }

    .bd-related-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        display: block;
    }

    .bd-related-card-body {
        padding: 16px;
    }

    .bd-related-card-title {
        font-size: .95rem;
        font-weight: 700;
        line-height: 1.4;
        color: #111;
        margin-bottom: 6px;
    }

    .bd-related-card-date {
        font-size: 12px;
        color: #999;
    }

    /* ── Comments ── */
    .bd-comments {
        margin: 48px 0;
    }

    .bd-comments-title {
        font-size: 1.3rem;
        font-weight: 800;
        margin-bottom: 24px;
        color: #111;
        border-left: 4px solid #0073ff;
        padding-left: 14px;
    }

    .bd-comment {
        display: flex;
        gap: 14px;
        margin-bottom: 28px;
    }

    .bd-comment-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: linear-gradient(135deg, #0073ff, #7c3aed);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    .bd-comment-body {
        background: #f8f9fc;
        border-radius: 0 12px 12px 12px;
        padding: 14px 18px;
        flex: 1;
    }

    .bd-comment-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 6px;
    }

    .bd-comment-name {
        font-weight: 700;
        font-size: .9rem;
    }

    .bd-comment-date {
        font-size: 11.5px;
        color: #aaa;
    }

    .bd-comment-text {
        font-size: .92rem;
        color: #444;
        line-height: 1.65;
    }

    .bd-comment-text p {
        margin: 0;
    }

    /* ── CTA ── */
    .bd-cta {
        background: linear-gradient(135deg, #0073ff 0%, #7c3aed 100%);
        border-radius: 16px;
        padding: 40px 32px;
        text-align: center;
        margin: 48px 0;
    }

    .bd-cta h3 {
        color: #fff;
        font-size: 1.5rem;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .bd-cta p {
        color: rgba(255, 255, 255, .85);
        margin-bottom: 24px;
        font-size: 1rem;
    }

    .bd-cta a {
        background: #fff;
        color: #0073ff;
        padding: 14px 32px;
        border-radius: 8px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 4px 16px rgba(0, 0, 0, .15);
        transition: .2s;
    }

    .bd-cta a:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, .2);
    }

    /* ── Sidebar ── */
    .bd-sidebar {}

    .bd-sidebar-box {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 14px;
        padding: 24px;
        margin-bottom: 28px;
    }

    .bd-sidebar-title {
        font-size: .88rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .6px;
        color: #0073ff;
        margin-bottom: 16px;
    }

    .bd-sidebar-author {
        text-align: center;
    }

    .bd-sidebar-author img {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 12px;
    }

    .bd-sidebar-author-name {
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 3px;
    }

    .bd-sidebar-author-role {
        font-size: 12px;
        color: #0073ff;
        margin-bottom: 10px;
    }

    .bd-sidebar-author-bio {
        font-size: 12.5px;
        color: #666;
        line-height: 1.6;
    }

    .bd-sidebar-recent a {
        display: flex;
        gap: 12px;
        text-decoration: none;
        color: inherit;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .bd-sidebar-recent a:last-child {
        border: none;
    }

    .bd-sidebar-recent img {
        width: 60px;
        height: 50px;
        object-fit: cover;
        border-radius: 6px;
        flex-shrink: 0;
    }

    .bd-sidebar-recent-title {
        font-size: .85rem;
        font-weight: 600;
        color: #1a1a2e;
        line-height: 1.4;
    }

    .bd-sidebar-recent-date {
        font-size: 11px;
        color: #aaa;
        margin-top: 3px;
    }

    .bd-progress-bar {
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: linear-gradient(to right, #0073ff, #7c3aed);
        z-index: 9999;
        width: 0%;
        transition: width .1s;
    }
</style>

<!-- Reading progress bar -->
<div class="bd-progress-bar" id="bdProgress"></div>

<div class="bd-wrap">
    <!-- Hero -->
    <div class="bd-hero">
        <?php if ($thumb): ?>
            <img src="<?= htmlspecialchars($thumb) ?>"
                alt="<?= htmlspecialchars(strip_tags($post['title']['rendered'])) ?>"
                class="bd-hero-bg">
        <?php else: ?>
            <div style="position:absolute;inset:0;background:linear-gradient(135deg,#0d1117,#1a1a2e);"></div>
        <?php endif; ?>
        <div class="bd-hero-overlay"></div>
        <div class="bd-hero-content">

            <?php if (!empty($cats)): ?>
                <div class="bd-hero-cats">
                    <?php foreach ($cats as $cat): ?>
                        <a href="<?= url('/blog.php') ?>" class="bd-hero-cat"><?= htmlspecialchars($cat['name']) ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <h1 class="bd-hero-title"><?= strip_tags($post['title']['rendered']) ?></h1>

            <div class="bd-hero-meta">
                <div class="bd-hero-author">
                    <?php $initials = mb_strtoupper(mb_substr($authorName, 0, 1)); ?>
                    <?php if ($authorAvatar): ?>
                        <img src="<?= htmlspecialchars($authorAvatar) ?>"
                            alt="<?= htmlspecialchars($authorName) ?>"
                            class="bd-hero-avatar"
                            onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <span class="bd-hero-avatar-placeholder" style="display:none;"><?= $initials ?></span>
                    <?php else: ?>
                        <span class="bd-hero-avatar-placeholder"><?= $initials ?></span>
                    <?php endif; ?>
                    <div class="bd-hero-meta-text">
                        <strong><?= htmlspecialchars($authorName) ?></strong>
                        <?php if ($date): ?><?= $date ?><?php endif; ?>
                        <?php if ($modified && $modified !== $date): ?>&nbsp;· Updated <?= $modified ?><?php endif; ?>
                    </div>
                </div>
                <div class="bd-hero-badges">
                    <span class="bd-hero-badge">📖 <?= $readingTime ?> min read</span>
                    <?php if ($commentCount > 0): ?>
                        <span class="bd-hero-badge">💬 <?= $commentCount ?> comments</span>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="bd-breadcrumb">
        <div class="bd-breadcrumb-inner">
            <a href="<?= url('/') ?>">Home</a>
            <span class="bd-sep">›</span>
            <a href="<?= url('/blog.php') ?>">Blog</a>
            <?php if (!empty($cats)): ?>
                <span class="bd-sep">›</span>
                <a href="<?= url('/blog.php') ?>"><?= htmlspecialchars($cats[0]['name']) ?></a>
            <?php endif; ?>
            <span class="bd-sep">›</span>
            <span><?= htmlspecialchars(strip_tags($post['title']['rendered'])) ?></span>
        </div>
    </div>

    <!-- Main layout -->
    <div class="bd-layout">

        <!-- ── Article Column ── -->
        <main>

            <!-- Social Share -->
            <div class="bd-share">
                <span class="bd-share-label">Share:</span>
                <a class="bd-share-btn bd-share-fb" target="_blank"
                    href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($pageUrl) ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                    </svg>
                    Facebook</a>
                <a class="bd-share-btn bd-share-tw" target="_blank"
                    href="https://twitter.com/intent/tweet?url=<?= urlencode($pageUrl) ?>&text=<?= urlencode(strip_tags($post['title']['rendered'])) ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                    </svg>
                    Twitter</a>
                <a class="bd-share-btn bd-share-wa" target="_blank"
                    href="https://api.whatsapp.com/send?text=<?= urlencode(strip_tags($post['title']['rendered']) . ' ' . $pageUrl) ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z" />
                    </svg>
                    WhatsApp</a>
                <a class="bd-share-btn bd-share-li" target="_blank"
                    href="https://www.linkedin.com/shareArticle?url=<?= urlencode($pageUrl) ?>&title=<?= urlencode(strip_tags($post['title']['rendered'])) ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                    LinkedIn</a>
                <button class="bd-share-btn bd-share-copy" onclick="copyLink()" id="copyBtn">
                    📋 Copy Link</button>
            </div>

            <!-- Article Content -->
            <article class="bd-article" id="bdArticle">
                <?= $postContent ?>
            </article>

            <!-- Tags -->
            <?php if (!empty($tags)): ?>
                <div class="bd-tags">
                    <span class="bd-tags-label">🏷 Tags:</span>
                    <?php foreach ($tags as $tag): ?>
                        <a href="<?= url('/blog.php') ?>" class="bd-tag"><?= htmlspecialchars($tag['name']) ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Author Box -->
            <div class="bd-author">
                <?php if ($authorAvatar): ?>
                    <img src="<?= htmlspecialchars($authorAvatar) ?>" alt="<?= htmlspecialchars($authorName) ?>" class="bd-author-avatar">
                <?php else: ?>
                    <div class="bd-author-avatar-placeholder">👤</div>
                <?php endif; ?>
                <div>
                    <div class="bd-author-name"><?= htmlspecialchars($authorName) ?></div>
                    <div class="bd-author-role">SEO Expert & Digital Marketing Specialist</div>
                    <div class="bd-author-bio"><?= htmlspecialchars($authorDesc ?: 'Dev Sharma is a trusted SEO expert and digital marketing consultant based in Jaipur, India, with 5+ years of experience helping businesses grow online.') ?></div>
                </div>
            </div>

            <!-- CTA -->
            <div class="bd-cta">
                <h3>🚀 Ready to Grow Your Business?</h3>
                <p>Get a free SEO audit and discover opportunities to rank higher on Google.</p>
                <a href="<?= url('/#contact') ?>">Get Free SEO Consultation →</a>
            </div>

            <!-- Related Posts -->
            <?php if (!empty($relatedPosts)): ?>
                <div class="bd-related">
                    <h3 class="bd-related-title">You May Also Like</h3>
                    <div class="bd-related-grid">
                        <?php foreach ($relatedPosts as $rp):
                            $rpThumb = $rp['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;
                            $rpSlug  = $rp['slug'];
                            $rpTitle = strip_tags($rp['title']['rendered']);
                            $rpDate  = date('M d, Y', strtotime($rp['date']));
                        ?>
                            <a href="<?= url('/blog/' . $rpSlug . '/') ?>" class="bd-related-card">
                                <?php if ($rpThumb): ?>
                                    <img src="<?= htmlspecialchars($rpThumb) ?>" alt="<?= htmlspecialchars($rpTitle) ?>">
                                <?php else: ?>
                                    <div style="height:150px;background:linear-gradient(135deg,#0073ff,#7c3aed);
                                display:flex;align-items:center;justify-content:center;font-size:2rem;">📝</div>
                                <?php endif; ?>
                                <div class="bd-related-card-body">
                                    <div class="bd-related-card-title"><?= htmlspecialchars($rpTitle) ?></div>
                                    <div class="bd-related-card-date"><?= $rpDate ?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Comments -->
            <?php if (!empty($comments)): ?>
                <div class="bd-comments">
                    <h3 class="bd-comments-title">💬 <?= count($comments) ?> Comment<?= count($comments) !== 1 ? 's' : '' ?></h3>
                    <?php foreach ($comments as $c):
                        $cName   = htmlspecialchars(strip_tags($c['author_name']));
                        $cDate   = date('M d, Y', strtotime($c['date']));
                        $cText   = $c['content']['rendered'];
                        $cLetter = mb_strtoupper(mb_substr($c['author_name'], 0, 1));
                    ?>
                        <div class="bd-comment">
                            <div class="bd-comment-avatar"><?= $cLetter ?></div>
                            <div class="bd-comment-body">
                                <div class="bd-comment-meta">
                                    <span class="bd-comment-name"><?= $cName ?></span>
                                    <span class="bd-comment-date"><?= $cDate ?></span>
                                </div>
                                <div class="bd-comment-text"><?= $cText ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </main>

        <!-- ── Sidebar ── -->
        <aside class="bd-sidebar">

            <!-- Author Card -->
            <div class="bd-sidebar-box bd-sidebar-author">
                <div class="bd-sidebar-title">About the Author</div>
                <?php if ($authorAvatar): ?>
                    <img src="<?= htmlspecialchars($authorAvatar) ?>" alt="<?= htmlspecialchars($authorName) ?>">
                <?php endif; ?>
                <div class="bd-sidebar-author-name"><?= htmlspecialchars($authorName) ?></div>
                <div class="bd-sidebar-author-role">SEO Expert · Jaipur</div>
                <div class="bd-sidebar-author-bio"><?= htmlspecialchars(substr($authorDesc ?: 'SEO Expert & Digital Marketing Specialist with 5+ years of experience.', 0, 120)) ?>...</div>
            </div>

            <!-- Table of Contents (sidebar) -->
            <div class="bd-sidebar-box" id="tocBox" style="display:none;">
                <div class="bd-sidebar-title">Table of Contents</div>
                <div id="tocContent"></div>
            </div>

            <!-- Recent Posts -->
            <?php
            $recentPosts = wp_get('/posts?per_page=5&_embed&exclude=' . $postId) ?? [];
            if (!empty($recentPosts)): ?>
                <div class="bd-sidebar-box">
                    <div class="bd-sidebar-title">Recent Posts</div>
                    <div class="bd-sidebar-recent">
                        <?php foreach ($recentPosts as $rp):
                            $rpThumb = $rp['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;
                        ?>
                            <a href="<?= url('/blog/' . $rp['slug'] . '/') ?>">
                                <?php if ($rpThumb): ?>
                                    <img src="<?= htmlspecialchars($rpThumb) ?>" alt="">
                                <?php else: ?>
                                    <div style="width:60px;height:50px;background:linear-gradient(135deg,#0073ff,#7c3aed);
                                border-radius:6px;display:flex;align-items:center;
                                justify-content:center;font-size:1.2rem;flex-shrink:0;">📝</div>
                                <?php endif; ?>
                                <div>
                                    <div class="bd-sidebar-recent-title">
                                        <?= htmlspecialchars(strip_tags($rp['title']['rendered'])) ?>
                                    </div>
                                    <div class="bd-sidebar-recent-date"><?= date('M d, Y', strtotime($rp['date'])) ?></div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- CTA Widget -->
            <div class="bd-sidebar-box" style="background:linear-gradient(135deg,#f0f7ff,#f5f0ff);
             border-color:#dde8ff;text-align:center;">
                <div style="font-size:2.5rem;margin-bottom:10px;">🎯</div>
                <div class="bd-sidebar-title" style="font-size:1rem;text-transform:none;color:#111;">
                    Need SEO Help?</div>
                <p style="font-size:13px;color:#666;line-height:1.6;margin-bottom:16px;">
                    Get a free website audit and discover what's holding you back from page 1.
                </p>
                <a href="<?= url('/#contact') ?>" style="display:block;background:#0073ff;color:#fff;
               padding:12px;border-radius:8px;text-decoration:none;font-weight:700;font-size:14px;">
                    Get Free Audit →</a>
            </div>

        </aside>
    </div><!-- /bd-layout -->

</div><!-- /bd-wrap -->

<script>
    // Reading progress bar
    window.addEventListener('scroll', function() {
        var doc = document.documentElement;
        var body = document.body;
        var top = doc.scrollTop || body.scrollTop;
        var h = (doc.scrollHeight || body.scrollHeight) - doc.clientHeight;
        document.getElementById('bdProgress').style.width = (top / h * 100) + '%';
    });

    // Auto Table of Contents from article headings
    (function() {
        var article = document.getElementById('bdArticle');
        if (!article) return;
        var headings = article.querySelectorAll('h2, h3');
        if (headings.length < 2) return;

        var ol = document.createElement('ol');
        ol.style.cssText = 'padding-left:18px;margin:0;';
        headings.forEach(function(h, i) {
            var id = 'bd-h-' + i;
            h.id = id;
            var li = document.createElement('li');
            li.style.cssText = 'font-size:13.5px;line-height:1.9;' + (h.tagName === 'H3' ? 'padding-left:14px;' : '');
            var a = document.createElement('a');
            a.href = '#' + id;
            a.textContent = h.textContent;
            a.style.cssText = 'color:#333;text-decoration:none;';
            a.addEventListener('mouseover', function() {
                this.style.color = '#0073ff';
            });
            a.addEventListener('mouseout', function() {
                this.style.color = '#333';
            });
            li.appendChild(a);
            ol.appendChild(li);
        });

        document.getElementById('tocContent').appendChild(ol);
        document.getElementById('tocBox').style.display = 'block';
    })();

    // Copy link button
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(function() {
            var btn = document.getElementById('copyBtn');
            btn.textContent = '✅ Copied!';
            setTimeout(function() {
                btn.textContent = '📋 Copy Link';
            }, 2000);
        });
    }
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../components/blog-layout.php';
?>
