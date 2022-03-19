<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>Document</title>
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
  <header>

    <div class="header__inner">
      <h1 class="header__left">
        <a href="" class="header__logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo-1.png" alt=""></a>
      </h1>
      <div class="header__right">
        <ul class="header__nav">
          <li class="header__nav-item">
            <a href="" class="header__nav-link"><img src="<?php echo get_template_directory_uri() ?>/img/icon-01.png" alt=""><span>ホーム</span></a>
          </li>
          <li class="header__nav-item">
            <a href="" class="header__nav-link"><img src="<?php echo get_template_directory_uri() ?>/img/icon-02.png" alt=""><span>当院について</span></a>
          </li>
          <li class="header__nav-item">
            <a href="" class="header__nav-link"><img src="<?php echo get_template_directory_uri() ?>/img/icon-03.png" alt=""><span>診療案内</span></a>
          </li>
          <li class="header__nav-item">
            <a href="" class="header__nav-link"><img src="<?php echo get_template_directory_uri() ?>/img/icon-04.png" alt=""><span>スタッフ紹介</span></a>
          </li>
          <li class="header__nav-item">
            <a href="" class="header__nav-link"><img src="<?php echo get_template_directory_uri() ?>/img/icon-05.png" alt=""><span>スタッフブログ</span></a>
          </li>
          <li class="header__nav-item">
            <a href="" class="header__nav-link"><img src="<?php echo get_template_directory_uri() ?>/img/icon-07.png" alt=""><span>お問い合わせ</span></a>
          </li>
        </ul>
        <div class="header__tel">
          <p class="header__tel-text">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
          <a href="" class="header__tel-number">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon_tel-1.png" alt="">
            03-1234-5678
          </a>
        </div>
      </div>
    </div>
  </header>