<html lang="ja">
<?php get_header(); ?>

<body>
  <main>
    <section id="news-detail">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb">
          <li class="breadcrumb__item "><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li class="breadcrumb__item"><a href="<?php echo home_url('/news_list/'); ?>">お知らせ一覧</a></li>
          <li class="breadcrumb__item"><?php categories_label('') ?></li>
          <li class="breadcrumb__item"><?php the_title(); ?></li>
        </ol>
      </nav>

      <h2 class="news-detail__h2"><?php the_title(); ?></h2>

        <p class="news-detail__date">
            <?php echo get_the_date('Y.m.d'); ?>
            
            <?php
            // カスタムフィールドからカテゴリー名を取得
            $page_category = get_field('page_category'); // 'page_category' はフィールド名

            // カテゴリー名が存在する場合に表示
            if ($page_category) {
                echo '<span class="page-category">' . esc_html($page_category) . '</span>';
            }
            ?>
        </p>

      <div class="news-detail__wrapper">
        <div class="news-detail__wrapper--inner">
          <img class="detail__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

          <div class="detail-list">
            <h2>目次</h2>

            <a href="#textarea__title-1h2">
              <p class="title-h2"><span>1.</span>H2タイトルが入ります。</p>
            </a>
            <a href="#textarea__title-1h3">
              <p class="title-h3"><span>•</span>H3タイトルが入ります。H3タイトルが入ります。</p>
            </a>

            <a href="#textarea__title-2h2">
              <p class="title-h2"><span>2.</span>H2タイトルが入ります。</p>
            </a>
            <a href="#textarea__title-2h3">
              <p class="title-h3"><span>•</span>H3タイトルが入ります。H3タイトルが入ります。</p>
            </a>

          </div><!-- /.detail-list -->

          <div class="textarea">
            <h2 class="textarea__title-h2" id="textarea__title-1h2">H2タイトルが入ります。</h2>
            <p class="textarea__text">
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。
            </p>


            <h3 class="textarea__title-h3" id="textarea__title-1h3">H3タイトルが入ります。H3タイトルが入ります。</h3>
            <ul class="textarea__li">
              <li>・リスト項目 </li>
              <li>・リスト項目 </li>
              <li>・リスト項目 </li>
              <li>・リスト項目 </li>
              <li>・リスト項目 </li>
            </ul>

            <p class="textarea__text">
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。
            </p>

            <h2 class="textarea__title-h2" id="textarea__title-2h2">H2タイトルが入ります。</h2>

            <div class="textarea-flex">
              <p class="textarea-flex__text">
                本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                本文が入ります。本文が入ります。本文が入ります。本文が入ります。
                本文が入ります。
              </p>

              <img class="textarea-flex__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-ec02.png" alt="農園画像">
            </div><!-- /.textarea-flex -->


            <h3 class="textarea__title-h3" id="textarea__title-2h3">H3タイトルが入ります。H3タイトルが入ります。</h3>
            <p class="textarea__text2">
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。
              本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。
            </p>
          </div><!-- /.textarea -->


          <div class="btn">
            <a href="<?php echo home_url('/news_list/'); ?>">
              <p class="green-btn">一覧に戻る</p>
            </a>
          </div><!-- /.btn -->
        </div><!-- /.news-detail__wrapper--inner -->
      </div><!--news-detail__wrapper-->
    </section>

    <section id="info">
      <div class="info__inner">
        <h2>お問い合わせ</h2>

        <p class="info__inner--text">
          お仕事のご相談、農園体験、牧場の見学、その他ご質問 <br>
          お気軽にお問い合わせください。
        </p>

        <a href="<?php echo home_url('/form/'); ?>">
          <p class="green-btn">お問い合わせ</p>
        </a>

        <p class="info__inner--text2">
          問い合わせ電話：<br class="brsp"><span>123-4567-8910</span><br>
          【受付時間】<br class="brsp">10:00 ~ 18:00（土日祝を除く）
        </p>
      </div><!-- /.info__inner -->
    </section>
  </main>


  <footer id="footer">
    <div class="footer__inner">
      <div class="footer__inner--address">
        <a href="<?php echo home_url('/'); ?>">
          <h1>
            <img class="header__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/logo.svg" alt="ヘッダーロゴ">
          </h1>
        </a>

        <p>〒123-4567<br>
          千葉県〇〇市××町1丁目23-45
        </p>
      </div>

      <p class="footer__inner--tel">
        TEL:123-4567-8910 <br>
        FAX:12-345-6789
      </p>

      <ul class="footer__inner--nav">
        <a href="<?php echo home_url('/'); ?>">
          <li>ホーム</li>
        </a>
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
      </ul>

      <div class="footer__inner--sns">
        <ul>
          <a href="">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/x-icon.svg" alt="Xアイコン">
            </li>
          </a>
          <a href="">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/insta-icon.svg" alt="instaアイコン">
            </li>
          </a>
          <a href="">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/youtube-icon.svg" alt="youtubeアイコン">
            </li>
          </a>
        </ul>
      </div><!-- /.footer__sns -->
    </div><!-- /.footer__inner -->

    <p class="footer__text">©︎ shizen-no-megumi-nouen Inc .2023</p>
  </footer>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>./assets/js/main.js"></script>
</body>