<?php get_header(); ?>

<body>
  <main>
    <section id="otoiawase">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb">
          <li class="breadcrumb__item "><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li class="breadcrumb__item">お問い合わせ</li>
        </ol>

        <div class="section-title">
          <h2>お問い合わせ</h2>
        </div><!-- /.section-title -->
        <p class="section-text">お仕事のご相談、農園体験、牧場の見学、<br class="brsp">その他ご質問など、お気軽にお問い合わせください。</p>

        <div class="form-detail__wrapper">
          <div class="form-detail__wrapper--inner">

            <!-- <form>
              <dl class="form-list">
                <dt class="otoiawase_dt"><label for="name">お問い合わせ種別<span>必須</span></label></dt>
                <dd class="pulldown">
                  <div class="select-selected">選択してください</div>
                  <div class="select-items select-hide">
                    <div data-value="1">農園見学・体験について</div>
                    <div class="items__2" data-value="2">オンライン販売について</div>
                    <div data-value="3">その他</div>
                  </div>
                </dd>
                <div class="error__msg--pulldown"></div>

                <dt class="name_dt"><label for="name">お名前<span>必須</span></label></dt>
                <dd><input type="text" id="name" name="name" maxlength="100" size="70"></dd>
                <div class="error__msg--name"></div>

                <dt class="email_dt"><label for="email">メールアドレス<span>必須</span></label></dt>
                <dd><input type="email" id="address" size="70"></dd>
                <div class="error__msg--email"></div>

                <dt class="tel_dt"><label for="tel">電話番号</label></dt>
                <dd class="tel_dd"><input type="tel" id="tel" size="70"></dd>

                <dt class="message_dt"><label for="message">お問い合わせ内容<span>必須</span></label></dt>
                <dd class="message_dd"><textarea id="message" name="message"></textarea></dd>
                <div class="error__msg--message"></div>
              </dl>


              <input type="submit" class="green-btn" value="確認する"></input>
            </form> -->
            <?php echo do_shortcode('[contact-form-7 id="376a404" title="form"]'); ?>
          </div><!-- /.otoiawase-detail__wrapper--inner-->
        </div><!-- /.otoiawase-detail__wrapper-->
    </section>


  </main>
  <?php get_footer(); ?>
</body>