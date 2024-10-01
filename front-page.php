<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>

  <main>
    <section id="mainvisual">
      <div class="mainvisual-center">
        <h2><img class="mainvisual-center__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/logo-2.svg" alt="メインロゴ"></h2>
        <h3 class="mainvisual-center__title">自然の恵みを感じ、<br class="brsp">豊かな未来を。</h3>
      </div><!-- /.mainvisual__center -->

      <?php
      // 最新の投稿を1件取得
      $args = array(
        'post_type'      => 'post',  // 投稿タイプ
        'posts_per_page' => 1,       // 取得する投稿数
        'orderby'        => 'date',  // 日付順に並び替え
        'order'          => 'DESC'   // 降順
      );

      $latest_post = new WP_Query($args);

      if ($latest_post->have_posts()) :
        while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
          <a href="<?php echo home_url('/news_detail/'); ?>">
            <div class="mainvisual-news">
              <div class="main-news">
                <h3 class="main-news__title">News</h3>
                <p class="main-news__data"><?php echo get_the_date('Y.m.d'); ?></p>
              </div><!-- /.main-news -->

              <p class="mainvisual-news__text">
                <!-- タイトルを10単語で切り詰め、長い場合は ... を付加します。タイトルを10単語で切り詰め、長い場合は ... を付加します。 -->
                <?php echo wp_trim_words(get_the_title(), 10, '...'); ?>
              </p>
            </div><!-- /.mainvisual-news -->
          </a>
      <?php endwhile;
        wp_reset_postdata(); // クエリをリセット
      endif;
      ?>
    </section><!-- /#mainvisual -->



    <section id="about">
      <div class="about__inner">
        <img class="about__image1 js-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/about-image01.png"></img>

        <img class="about__image2 js-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/about-image02.png"></img>

        <div class="about__textarea">
          <img class="about__title" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/logo.svg" alt="メインロゴ"></img><!-- /.about__title -->

          <p class="about__text">自然の恵み農園は、<br>
            自然の恵みと動物の尊さが調和する<br class="brsp">特別な場所です。<br>
            新鮮で美味しい農産物を栽培し、<br class="brsp">心温まる動物たちと触れ合える場所<br class="brsp">でもあります。
          </p>

          <p class="about__text bottom">
            自然の恵みを受け、<br class="brsp">動物たちとの特別なひとときを<br class="brsp">楽しんでいただける場所として、<br>
            私たちは誇りを持って活動をしています。<br>
            一緒に自然と動物の美しさを共有しましょう。
          </p>
        </div><!-- /.about__textarea -->
        <img class="about__image3 js-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/about-image03.png"></img>
        <img class="about__image4 js-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/about-image04.png"></img>
      </div><!-- /.about__inner -->
    </section><!-- /#about -->


    <section id="work">
      <div class="work-box">
        <div class="work__inner">
          <div class="section-title">
            <h2>活動紹介</h2>
          </div><!-- /.section-title -->

          <div class="work__inner--tabs">
            <p class="tab-button" data-id="farm">農園</p>
            <p class="tab-button" data-id="ranch">牧場</p>
            <p class="tab-button  font active" data-id="online">オンライン販売</p>
          </div>

          <div class="work__inner--text">
            <p id="farm-text" class="tab-text">私たちは、「持続可能な農業」を掲げて、自然の恵みに感謝しながら、農作物を育てています。<br>
              無農薬で、体にも環境にも優しく、季節ごとに異なる品種を育て、提供しています。<br>
              ぜひ一度、農園にお越し頂き、自分の手で収穫した新鮮な野菜、果物をお召し上がりください。
            </p>

            <p id="ranch-text" class="tab-text">
              私たちの牧場は、自然と動物との共存を尊重し、持続可能な農業の原則に基づいて運営されています。<br>
              広々とした環境で、動物たちとのふれ合いを通じて、自然の恵みと動物の尊さを感じ、<br>
              心温まるひとときを過ごしていただけます。
            </p>

            <p id="online-text" class="tab-text active">
              自然の恵み農園から直接お届けする、新鮮で美味しい農産物と<br>
              手作りのジャムやバターなどの加工品を提供しています。<br>
              自然の恩恵をご自宅でお楽しみいただけます。
            </p>
          </div>

        </div><!-- /.work__inner -->

        <div id="farm" class="swiper-container">
          <!-- 必要に応じたwrapper -->
          <div class="swiper-wrapper">
            <!-- スライド -->
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-nouen01.png" alt="農園1">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-nouen02.png" alt="農園2">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-nouen03.png" alt="農園3">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-nouen04.png" alt="農園4">
            </div>
          </div>
        </div>

        <div id="ranch" class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-bokujo01.png" alt="牧場1">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-bokujo02.png" alt="牧場2">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-bokujo03.png" alt="牧場3">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-bokujo04.png" alt="牧場4">
            </div>
          </div>
        </div>

        <div id="online" class="swiper-container active">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-ec01.png" alt="オンライン販売1">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-ec02.png" alt="オンライン販売2">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-ec03.png" alt="オンライン販売3">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/work-ec04.png" alt="オンライン販売4">
            </div>
          </div>
        </div>
      </div>


      </div><!-- /.work-box -->
    </section><!-- /#work -->


    <section id="FAQ">
      <div class="section-title">
        <h2>よくあるご質問</h2>
      </div><!-- /.section-title -->

      <div class="FAQ-inner">
        <div class="FAQ-pull">
          <div class="FAQ-pull__title">
            <h3 class="FAQ-title">
              <span class="QA">Q</span>農園の野菜や果物は有機栽培ですか？
            </h3><!-- /.FAQ-title -->

            <div class="toggle__group">
              <div class="tate"></div><!-- /.togl -->
              <div class="yoko"></div><!-- /.togl -->
            </div><!-- /.togl -->
          </div><!-- /.FAQ__pull--title -->

          <p class="FAQ-pull__text">
            <span class="QA">A</span>はい、私たちの農園では有機栽培の原則に従って野菜と果物を栽培しています。<br>
            化学肥料や農薬を極力使用せず、土壌と作物の健康を第一に考えております。
          </p><!-- /.FAQ__pull--text -->
        </div><!-- /.FAQ__pull -->

        <div class="FAQ-pull">
          <div class="FAQ-pull__title">
            <h3 class="FAQ-title">
              <span class="QA">Q</span>
              農園での見学や体験ツアーは行っていますか？
            </h3><!-- /.FAQ-title -->

            <div class="toggle__group">
              <div class="tate"></div><!-- /.togl -->
              <div class="yoko"></div><!-- /.togl -->
            </div><!-- /.togl -->
          </div><!-- /.FAQ__pull--title -->

          <p class="FAQ-pull__text">
            <span class="QA">A</span> はい、農園での見学や体験ツアーを随時開催しています。<br>
            農場の日常や農作業を親しみやすく説明し、実際に農園での体験を楽しむことができます。
          </p><!-- /.FAQ__pull--text -->
        </div><!-- /.FAQ__pull -->

        <div class="FAQ-pull">
          <div class="FAQ-pull__title">
            <h3 class="FAQ-title">
              <span class="QA">Q</span>
              オンラインで注文した農産物はどのように配送されますか？
            </h3><!-- /.FAQ-title -->

            <div class="toggle__group">
              <div class="tate"></div><!-- /.togl -->
              <div class="yoko"></div><!-- /.togl -->
            </div><!-- /.togl -->
          </div><!-- /.FAQ__pull--title -->

          <p class="FAQ-pull__text">
            <span class="QA">A</span>オンラインで注文いただいた農産物は、専用の梱包で新鮮さを保ったまま、<br>
            指定された配送先にお届けします。
          </p><!-- /.FAQ__pull--text -->
        </div><!-- /.FAQ__pull -->

        <div class="FAQ-pull">
          <div class="FAQ-pull__title">
            <h3 class="FAQ-title">
              <span class="QA">Q</span>
              農園で提供される季節ごとの野菜や果物の品種は何ですか？
            </h3><!-- /.FAQ-title -->

            <div class="toggle__group">
              <div class="tate"></div><!-- /.togl -->
              <div class="yoko"></div><!-- /.togl -->
            </div><!-- /.togl -->
          </div><!-- /.FAQ__pull--title -->

          <p class="FAQ-pull__text">
            <span class="QA">A</span>春にはイチゴ、夏にはトマトや茄子、秋にはカボチャやリンゴ、冬にはブロッコリーやみかん <br>
            など、季節に応じた野菜、果物を提供、収穫体験することができます。
          </p><!-- /.FAQ__pull--text -->
        </div><!-- /.FAQ__pull -->
      </div><!-- /.FAQ__inner -->
    </section><!-- /#FAQ -->


    <section id="news">
      <div class="news-flex">
        <div class="news-flex__textarea">
          <div class="section-title">
            <h2>お知らせ</h2>
          </div><!-- /.section-title -->


          <p class="news-flex__textarea--text">
            季節の農作物のお知らせ、見学ツアーのご案内、<br class="brpc">
            オンライン販売セールのお知らせなど、自然の恵み農園<br class="brpc">
            の最新情報をお届けします。
          </p>

        </div><!-- /.news-flex__textarea -->

        <div class="news-flex__newslist">
          <ul>
            <ul>
              <?php
              $args = array(
                'post_type' => 'post', // 投稿タイプを指定
                'posts_per_page' => 3, // 表示する投稿数
                'orderby' => 'date', // 日付で並び替え
                'order' => 'DESC', // 降順 // 最後以外は「,（カンマ）」が必要
                'category' => 1 // 最後は不要
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <a href="<?php home_url('/news_detail/'); ?>">
                    <li>
                      <p class="news-flex__newslist--date"><?php echo get_the_date('Y.m.d'); ?>
                        <?php categories_label('') ?>
                      </p>
                      <h3 class="news-flex__newslist--text"><?php the_title(); ?></h3>
                    </li>
                  </a>
                <?php endwhile;
                wp_reset_postdata(); // クエリをリセット
              else : ?>
                <p>お知らせがありません。</p>
              <?php endif; ?>

              <!-- <a href="">
              <li>
                <p class="news-flex__newslist--date">YYYY.MM.DD<span>カテゴリ</span></p>
                <h3 class="news-flex__newslist--text">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
              </li>
            </a>

            <a href="">
              <li>
                <p class="news-flex__newslist--date">YYYY.MM.DD<span>カテゴリ</span></p>
                <h3 class="news-flex__newslist--text">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
              </li>
            </a>

            <a href="">
              <li>
                <p class="news-flex__newslist--date">YYYY.MM.DD<span>カテゴリ</span></p>
                <h3 class="news-flex__newslist--text">タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
              </li>
            </a> -->
            </ul>
        </div><!-- /.news-flex__newslist -->

        <a href="<?php echo home_url('/news_list/'); ?>">
          <p class="green-btn">View More</p>
        </a>
      </div><!-- /.news__flex -->
    </section><!-- /#news -->

    <section id="access">
      <div class="section-title">
        <h2>アクセス</h2>
      </div><!-- /.section-title -->

      <div class="access__wrap">
        <ul class="access__wrap--title">
          <li>会社名</li>
          <li>所在地</li>
          <li>電話番号</li>
          <li>営業時間</li>
          <li class="map-li">
            <p>Googleマップ</p>
            <a rel="noopener" target="_blank"
              href="https://www.google.com/maps/place/%E3%81%B5%E3%81%AA%E3%81%B0%E3%81%97%E3%82%A2%E3%83%B3%E3%83%87%E3%83%AB%E3%82%BB%E3%83%B3%E5%85%AC%E5%9C%92/@35.760458,140.061538,14z/data=!4m6!3m5!1s0x60227e5329d23245:0xd4cde63c28d3f984!8m2!3d35.760458!4d140.0615382!16s%2Fg%2F1211jl3g?hl=ja&amp;entry=ttu"
              class="access__map">拡大地図を表示
            </a>
          </li>
        </ul>

        <ul class="access__wrap--detail">
          <li>株式会社自然の恵み農園</li>
          <li>〒123-4567 <br class="brsp">千葉県〇〇市××町<br class="brsp">1丁目23-45</li>
          <li>012-3456-7890</li>
          <li>10:00〜18:00<br class="brsp">（土日祝を除く）</li>
        </ul>

        <iframe class="access__map"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25900.85767313944!2d140.061538!3d35.760458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60227e5329d23245%3A0xd4cde63c28d3f984!2z44G144Gq44Gw44GX44Ki44Oz44OH44Or44K744Oz5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1718479232472!5m2!1sja!2sjp"
          width="600" height="450" style="border:0;
          " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div><!-- /.access__wrap -->
    </section><!-- /#access -->


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

        <div class="info__inner--text2">
          <p class="info__inner--text2--tel">問い合わせ電話：<br class="brsp"><span>123-4567-8910</span></p><br>
          <p class="info__inner--text2--time">【受付時間】<br class="brsp">10:00 ~ 18:00（土日祝を除く）</p>
        </div>
      </div><!-- /.info__inner -->
    </section>
  </main>
  <?php get_footer(); ?>
</body>