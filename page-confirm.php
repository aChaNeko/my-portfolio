<?php get_header(); ?>

<!-- 共通コンテンツ -->
<?php get_template_part('template-parts/top-content'); ?>

<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="section-inner">
    <div class="section-title-wrap">
      <div class="section-subtitle-wrap">
        <div class="section-subtitle-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_title.png" alt="タイトルロゴ"></div>
        <p class="section-subtitle">CONTACT</p>
      </div>
      <h2 class="section-title">お問い合わせ</h2>
      <p class="section-txt">Web制作のご依頼やお見積りなど<br class="sp-only">お気軽にご相談ください。</p>
    </div>
    <div class="contact-form">
      <div class="form-field">
        <p class="form-label">貴社名</p>
        <p class="form-text" id="company" name="company"></p>
      </div>

      <div class="form-field">
        <p class="form-label">お名前 <span>*</span></p>
        <p class="form-text" id="name" name="name" ></p>
      </div>

      <div class="form-field">
        <p class="form-label">メールアドレス <span>*</span></p>
        <p class="form-text" id="email" name="email"></p>
      </div>

      <div class="form-field">
        <p class="form-label">ご依頼内容 / ご希望内容 <span>*</span></p>
        <p class="form-textarea" id="message" name="message"></p>
      </div>
      <?php the_content(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>