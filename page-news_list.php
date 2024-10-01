<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body>
  <main>
    <section id="news-list">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb">
          <li class="breadcrumb__item "><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li class="breadcrumb__item">お知らせ一覧</li>
        </ol>
      </nav>
      <div class="section-title">
        <h2>お知らせ一覧</h2>
      </div><!-- /.section-title -->

      <div class="news-list__tab">
        <p class="news-list__tab--button active" data-id="all">すべて</p>
        <p class="news-list__tab--button" data-id="category1">カテゴリー１</p>
        <p class="news-list__tab--button" data-id="category2">カテゴリー２</p>
        <p class="news-list__tab--button" data-id="category3">カテゴリー３</p>
        <p class="news-list__tab--button" data-id="category4">カテゴリー４</p>
        <p class="news-list__tab--button" data-id="category5">カテゴリー５</p>
        <p class="news-list__tab--button" data-id="category6">カテゴリー６</p>
        <p class="news-list__tab--button" data-id="category7">カテゴリー７</p>
        <p class="news-list__tab--button" data-id="category8">カテゴリー８</p>
        <p class="news-list__tab--button" data-id="category9">カテゴリー９</p>
      </div><!-- /.news-list__tab -->

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10 //表示させたい投稿の数
      );
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): ?>
          <?php $the_query->the_post(); ?>


        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

      <div class="card-list">
        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <a href="<?php echo home_url('/news_detail/'); ?>">
          <?php
          $page_category = get_field('page_category');
          if ($page_category) {
            $category_id = 'category-' . sanitize_title($page_category);
          } else {
            $category_id = 'category-default';
          }
          ?>
          <div id="<?php echo $category_id; ?>" class="card-detail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/farm_image/no-image.png" alt="イメージ画像なし">

            <div class="card-textarea">
              <p class="card-textarea__date"><?php echo get_the_date('Y.m.d'); ?>

                <?php
                // カスタムフィールドからカテゴリー名を取得
                $page_category = get_field('page_category'); // 'page_category' はフィールド名

                // カテゴリー名が存在する場合に表示
                if ($page_category) {
                  echo '<span class="page-category">' . esc_html($page_category) . '</span>';
                }
                ?>
              </p>

              <h3 class="card-textarea__title"><?php the_title(); ?></h3>
              <p class="card-textarea__text">
                <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
              </p>
            </div><!-- /.card-textarea -->
          </div><!-- /.card-detail -->
        </a>

        <div class="pagination">
          <ul class="pagination__list">
            <a href="">
              <li id="prev">
                <
                  </li>
            </a>
            <a href="">
              <li class="active">1</li>
            </a>
            <a href="">
              <li>2</li>
            </a>
            <a href="">
              <li id="next">></li>
            </a>
          </ul>
        </div><!-- /.pazing -->
      </div><!-- /.card-list -->
    </section><!-- /#news-list -->

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