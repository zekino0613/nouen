<head>
  <meta charset="UTF-8">
  <title>自然の恵みの農園</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="自然の恵みの農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂けると取り組みを行なっています。">
  <link rel="canonical" href="【正規化するURL】" />
  <meta property="og:url" content="" />
  <meta property="og:title" content="お知らせ一覧｜自然の恵み農園" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="自然の恵みの農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂けると取り組みを行っています。" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta property="fb:app_id" content="【appID】" />
  <meta property="og:locale" content="ja_JP" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
  <link rel="stylesheet" href="https://kit.fontawesome.com/d4a0aa4940.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  <!--swiper--CDN-->

</head>

<body>
  <header id="header">
    <div class="header__inner--pc">
      <a href="<?php echo home_url('/'); ?>">
        <h1>
          <img class="header__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/logo.svg" alt="ヘッダーロゴ">
        </h1>
      </a>

      <ul class="header__nav">
        <a href="<?php echo home_url('/'); ?>#about">
          <li>私たちについて</li>
        </a>
        <a href="<?php echo home_url('/'); ?>#work">
          <li>活動紹介</li>
        </a>
        <a href="<?php echo home_url('/'); ?>#FAQ">
          <li>よくあるご質問</li>
        </a>
        <a href="<?php echo home_url('/'); ?>#news">
          <li>お知らせ</li>
        </a>
        <a href="<?php echo home_url('/'); ?>#access">
          <li>アクセス</li>
        </a>
        <a href="<?php echo home_url('/form/'); ?>">
          <li>
            <p class="otoiawase">お問い合わせ</p>
          </li>
        </a>
      </ul><!-- /.header__nav -->
    </div><!-- /.header__inner--pc -->

    <div class="header__inner--sp">
      <a href="<?php echo home_url('/'); ?>">
        <img class="header__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/logo.svg" alt="ヘッダーロゴ">
      </a>

      <a href="<?php echo home_url('/'); ?>">
        <div class="hamburger">
          <div class="hamburger__block">
            <div class="hamburger__block--bar"></div>
            <div class="hamburger__block--bar"></div>
          </div>

          <p class="hamburger__text">MENU</p>
          <p class="hamburger__close">CLOSE</p>
        </div>
      </a>
    </div>

    <div class="menuvisual" id="menuContent">
      <ul class="header__nav--sp">
        <a href="<?php echo home_url('/'); ?>">
          <li>トップ<span>TOP</span></li>
        </a>
        <a href="<?php echo home_url('/'); ?>#about">
          <li>私たちについて<span>ABOUT</span></li>
        </a>
        <a href="<?php echo home_url('/'); ?>#FAQ">
          <li>よくあるご質問<span>FAQ</span></li>
        </a>
        <a href="<?php echo home_url('/'); ?>#work">
          <li>活動紹介<span>WORKS</span></li>
        </a>
        <a href="<?php echo home_url('/'); ?>#news">
          <li>お知らせ<span>NEWS</span></li>
        </a>
        <a href="<?php echo home_url('/'); ?>#access">
          <li>アクセス<span>ACCESS</span></li>
        </a>

        <div class="otoiawase__sp">
          <p class="otoiawase__sp--title">お問い合わせ</p>
          <p class="otoiawase__sp--tel">123-4567-8910</p>
          <p class="otoiawase__sp--time-title">
            【受付時間】<br>
            10:00 ~ 18:00（土日祝を除く）
          </p>

          <a href="<?php echo home_url('/form/'); ?>">
            <p class="otoiawase">お問い合わせ</p>
          </a>
        </div><!-- /.otoiawase -->
    </div>
    <?php wp_head(); ?>
  </header>