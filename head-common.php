<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title><?php echo $pageTitle; ?></title>
<meta content="max-image-preview:large" name="robots"/>
<link href="//webfonts.xserver.jp" rel="dns-prefetch"/>
<link href="<?php echo $basePath; ?>css/lib.min.css" id="lib-css" media="all" rel="stylesheet" type="text/css"/>
<script id="lib-js" src="<?php echo $basePath; ?>js/lib.min.js" type="text/javascript"></script>
<script id="typesquare_std-js" src="//webfonts.xserver.jp/js/xserverv3.js?fadein=0&amp;ver=2.0.9" type="text/javascript"></script>
<link href="<?php echo $canonicalUrl; ?>" rel="canonical"/>
<?php if (!empty($pageCSS)): ?>
<?php foreach ($pageCSS as $css): ?>
<link href="<?php echo $basePath . $css; ?>" media="all" rel="stylesheet" type="text/css"/>
<?php endforeach; ?>
<?php endif; ?>
<link href="<?php echo $basePath; ?>css/style.css" id="style-css" media="all" rel="stylesheet" type="text/css"/>
<script id="script-js" src="<?php echo $basePath; ?>js/script.js" type="text/javascript"></script>
<link href="<?php echo $basePath; ?>assets/favicon-32x32.png" rel="icon" sizes="32x32"/>
<link href="<?php echo $basePath; ?>assets/favicon-192x192.png" rel="icon" sizes="192x192"/>
<link href="<?php echo $basePath; ?>assets/favicon-180x180.png" rel="apple-touch-icon"/>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'page wp-theme-lightning fa_v7_css bootstrap4 device-pc'; ?>">
<a class="skip-link screen-reader-text" href="#main">コンテンツへスキップ</a>
<a class="skip-link screen-reader-text" href="#vk-mobile-nav">ナビゲーションに移動</a>
