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
    <div class="contact-thanks">
      <div class="contact-thanks-wrap">
        <p class="contact-thanks-message">お問い合わせ<br class="sp-only">ありがとうございます。</p>
        <p class="contact-thanks-remarks">内容を確認して返信いたしますので、<br>しばらくお待ちください。</p>
      </div>
      <a class="contact-thanks-btn" href="<?php echo home_url(); ?>">TOPに戻る</a>
    </div>
  </div>
</section>


<?php get_footer(); ?>