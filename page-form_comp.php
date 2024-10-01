<?php get_header(); ?>

<body>
  <main>
    <section id="comp">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb">
          <li class="breadcrumb__item "><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li class="breadcrumb__item">お問い合わせ</li>
        </ol>

        <div class="section-title">
          <h2>お問い合わせ</h2>
        </div><!-- /.section-title -->

        <div class="form-detail__wrapper">
          <div class="form-detail__wrapper--inner">
            <div class="comp-list">
              <h3 class="comp-list__title">お問い合わせ<br class="brsp">ありがとうございました。</h3>

              <p class="comp-list__text">
                担当者より<br class="brsp">5営業日以内に返信いたします。<br>
                お急ぎの場合は、<br class="brsp">お電話にてお問い合わせください。
              </p>

              <div class="otoiawase-pc">
                <p class="otoiawase-pc__title">問い合わせ電話：<span>123-4567-8910</span></p>
                <p class="otoiawase-pc__time">
                  【受付時間】10:00 ~ 18:00（土日祝を除く）
                </p>
              </div>

              <div class="otoiawase-sp">
                <p class="otoiawase-sp__title">問い合わせ電話</p>
                <p class="otoiawase-sp__tel">123-4567-8910</p>
                <p class="otoiawase-sp__time-title">
                  【受付時間】<br>
                  10:00 ~ 18:00（土日祝を除く）
                </p>
              </div>
            </div><!-- /.comp-list -->


            <a href="<?php echo home_url('/'); ?>">
              <p class="green-btn"> TOPに戻る</p>
            </a>
          </div><!-- /.otoiawase-detail__wrapper--inner-->
        </div><!-- /.otoiawase-detail__wrapper-->
    </section>
  </main>
  <?php get_footer(); ?>
</body>