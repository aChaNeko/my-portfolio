<?php get_header(); ?>

<!-- TOP -->
<section class="top" id="top">
  <div class="top-wrap">
    <div class="top-content-wrap">
      <h2 class="top-subtitle">Portfolio | Web Creator</h2>
      <h1 class="top-title">Kohei Mitsuya</h1>
      <p class="top-text">わかりやすく、心地よいWebサービスを<br class="sp-only">創造します。</p>
    </div>
    <nav class="top-nav">
      <a href="#" class="top-nav-btn primary">お問い合わせ</a>
      <a href="#" class="top-nav-btn secondary">作品を見る</a>
    </nav>
  </div>
  <div class="top-scroll-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll.png" alt="スクロール"></div>
</section>

<!-- ABOUT -->
<section class="about" id="about">
  <div class="section-inner inner-about">
    <div class="section-content-wrap">
      <div class="section-title-wrap">
        <div class="section-subtitle-wrap">
          <div class="section-subtitle-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_title.png" alt="タイトルロゴ"></div>
          <p class="section-subtitle">ABOUT</p>
        </div>
        <h2 class="section-title">私について</h2>
      </div>
      <div class="about-img-wrap sp-only">
        <div class="about-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_image.jpg" alt="三ツ矢昂平"></div>
        <div class="about-profile-wrap">
          <div class="about-profile email">
            <p class="about-profile-title">Email</p>
            <p class="about-profile-txt">chaneko914@icloud.com</p>
          </div>
          <div class="about-profile location">
            <p class="about-profile-title">Location</p>
            <p class="about-profile-txt">Aichi, Japan</p>
          </div>
          <div class="about-profile birthday">
            <p class="about-profile-title">Birthday</p>
            <p class="about-profile-txt">September 1999</p>
          </div>
        </div>
      </div>
      <div class="about-name-wrap">
        <h3 class="about-name">三ツ矢 昂平</h3>
        <p class="about-name-eng">Kohei Mitsuya</p>
      </div>
      <p class="about-sentence">普段は自動車部品メーカーでアプリ開発を担当しています。<br>現場で培った課題解決の視点と開発経験を活かし、使う人にとって<br><span>”わかりやすく、心地よい” </span>Webサービスづくりを心がけています。<br>制作を通して、皆さまの喜びにつながる瞬間を生み出していきます。</p>
      <ul class="about-point-list">
        <li class="about-point-item">
          <div class="about-point-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_skill.png" alt="技術"></div>
          <div class="about-point-content-wrap">
            <p class="about-point-title">技術</p>
            <p class="about-point-txt">最新の技術スタックを活用し、パフォーマンスとメンテナンス性を両立したコードを提供します。</p>
          </div>
        </li>
        <li class="about-point-item">
          <div class="about-point-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_design.png" alt="デザイン"></div>
          <div class="about-point-content-wrap">
            <p class="about-point-title">デザイン</p>
            <p class="about-point-txt">ユーザー体験を第一に考え、美しさと使いやすさを兼ね備えたデザインを制作します。</p>
          </div>
        </li>
        <li class="about-point-item">
          <div class="about-point-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_speed.png" alt="スピード"></div>
          <div class="about-point-content-wrap">
            <p class="about-point-title">スピード</p>
            <p class="about-point-txt">効率的なワークフローにより、品質を保ちながら迅速な納品を実現します。</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="about-img-wrap pc-only">
      <div class="about-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_image.jpg" alt="三ツ矢昂平"></div>
      <div class="about-profile-wrap">
        <div class="about-profile email">
          <p class="about-profile-title">Email</p>
          <p class="about-profile-txt">chaneko914@icloud.com</p>
        </div>
        <span></span>
        <div class="about-profile location">
          <p class="about-profile-title">Location</p>
          <p class="about-profile-txt">Aichi, Japan</p>
        </div>
        <span></span>
        <div class="about-profile birthday">
          <p class="about-profile-title">Birthday</p>
          <p class="about-profile-txt">September 1999</p>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>