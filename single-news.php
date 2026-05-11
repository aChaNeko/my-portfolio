<?php get_header(); ?>

<div class="single-page-wrap">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <div class="single-inner">
    <a href="<?php echo esc_url( home_url('/works/') ); ?>" class="single-prev-btn">すべての作品</a>
    <div class="single-title-wrap">
      <p class="single-tax">WEB DESIGN / DEVELOPMENT</p>
      <h2 class="signle-title">和菓子屋HP制作</h2>
      <time datetime="2024-08-16" class="single-date">2024-08-16</time>
    </div>
    <div class="single-main-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
    <div class="single-news-article">
      <?php the_content(); ?>
      <div class="single-news-tag-wrap">
        <p class="single-news-tag-title">Tags</p>
        <div class="single-news-tag-list">
          <span class="single-news-tag">Web Design</span>
          <span class="single-news-tag">Trends</span>
          <span class="single-news-tag">UI/UX</span>
          <span class="single-news-tag">2026</span>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

  <nav class="single-news-connection-wrap">
    <p class="single-news-connection-title">関連記事</p>
    <ul class="single-news-connection-list">
      <li class="single-news-connection-item">
        <a href="">
          <div class="single-news-connection-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="single-news-connection-item-tax-wrap">
            <p class="single-news-connection-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="single-news-connection-item-date">2026-02-14</time>
          </div>
          <p class="single-news-connection-item-title">丸富庵清月</p>
          <p class="single-news-connection-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
      <li class="single-news-connection-item">
        <a href="">
          <div class="single-news-connection-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="single-news-connection-item-tax-wrap">
            <p class="single-news-connection-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="single-news-connection-item-date">2026-02-14</time>
          </div>
          <p class="single-news-connection-item-title">丸富庵清月</p>
          <p class="single-news-connection-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
      <li class="single-news-connection-item">
        <a href="">
          <div class="single-news-connection-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="single-news-connection-item-tax-wrap">
            <p class="single-news-connection-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="single-news-connection-item-date">2026-02-14</time>
          </div>
          <p class="single-news-connection-item-title">丸富庵清月</p>
          <p class="single-news-connection-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
    </ul>
  </nav>
</div>

<?php get_footer(); ?>