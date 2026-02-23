<?php

/**
 * config.php — Central site configuration
 *
 * Include this at the top of every page.
 * All asset/link paths should use BASE or SITE_URL constants.
 *
 * LOCAL:      http://localhost/dev-sharma-seo/
 * PRODUCTION: https://devsharma.site/
 */

// ─── ENVIRONMENT DETECTION ───────────────────────────────────────────────────
$_host = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '';
define('IS_LOCAL', in_array($_host, ['localhost', '127.0.0.1', '::1']));

// ─── BASE PATH ────────────────────────────────────────────────────────────────
// Dynamic base path detection
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$baseDir = str_replace('\\', '/', dirname($scriptName));
if ($baseDir === '/') $baseDir = '';
define('BASE', IS_LOCAL ? $baseDir : '');

// ─── SITE URL ─────────────────────────────────────────────────────────────────
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['SERVER_PORT'] ?? 80) == 443 ? "https://" : "http://";
define(
    'SITE_URL',
    IS_LOCAL
        ? $protocol . $_host . BASE
        : 'https://devsharma.site'
);

// ─── HELPERS ──────────────────────────────────────────────────────────────────
// asset('/assets/img/foo.jpg') → correct URL in any environment
function asset(string $path): string
{
    return BASE . '/' . ltrim($path, '/');
}

// url('/#about') → BASE . '/#about' (correct anchor for homepage sections)
function url(string $path): string
{
    return BASE . '/' . ltrim($path, '/');
}
