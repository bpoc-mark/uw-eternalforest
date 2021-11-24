<?php $ua = $_SERVER['HTTP_USER_AGENT'];
if ((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPod') !== false) || (strpos($ua, 'Android') !== false)) : ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php else : ?>
  <meta name="viewport" content="width=1200">
<?php endif; ?>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:image" content="[サイトのOGP画像]" /><!-- 絶対パス、1MG以下 -->
<meta property="og:image:alt" content="画像の説明文">
<meta property="og:locale" content="ja_JP">
<meta name="twitter:card" content="summary" /><!-- summary_large_imageだと画像を大きく表示 -->
<meta content="#fff" name="theme-color"><!-- Androidでアドレスバーの色指定 -->
<meta name="format-detection" content="telephone=no"><!-- Edgeでのリンク定義回避 -->

<link href="/css/layout.css" media="all" rel="stylesheet">
<link href="/css/style.css" media="print" rel="stylesheet">
<link href="/css/style.css" media="only screen and (min-width: 900px)" rel="stylesheet">
<link href="/css/style_sp.css" media="only screen and (max-width: 899px)" rel="stylesheet">
<!-- HTML：CDNリンクを貼り付け -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanmp.min.css">
<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">