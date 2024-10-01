
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
        <a href="<?php echo home_url('/'); ?>#access">
          <li>アクセス</li>
        </a>
        <a href="<?php echo home_url('/'); ?>#news">
          <li>お知らせ</li>
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
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>