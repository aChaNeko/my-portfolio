<?php get_header(); ?>

<div class="archive-title">
  <div class="archive-inner">
    <div class="archive-title-wrap">
      <div class="archive-subtitle-wrap">
        <div class="archive-subtitle-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_title.png" alt="タイトルロゴ"></div>
        <p class="archive-subtitle">NEWS</p>
      </div>
      <h2 class="archive-title">お知らせ</h2>
      <p class="archive-txt">Web制作に関する情報や日々の些細な出来事まで日々発信中です。<br>定期的に更新していますので、ぜひチェックしてください。</p>
    </div>
  </div>
</div>

<!-- フィルター -->
<nav class="filter-nav">
  <div class="filter-inner">
    <div class="filter-title-wrap">
      <div class="filter-img"></div>
      <p class="filter-txt sp-only">フィルター</p>
    </div>
    <ul class="filter-list">
      <li class="filter-item"><a href="<?php echo home_url('/works'); ?>" class="is-selected">All</a></li>
      <li class="filter-item"><a href="<?php echo esc_url( home_url('/works/?works_part=web-design') ); ?>">Web Design</a></li>
      <li class="filter-item"><a href="<?php echo esc_url( home_url('/works/?works_part=branding') ); ?>">Branding</a></li>
      <li class="filter-item"><a href="<?php echo esc_url( home_url('/works/?works_part=development') ); ?>">Development</a></li>
    </ul>
  </div>
</nav>

<!-- 一覧 -->
<div class="archive-list-wrap">
  <div class="archive-list-inner">
    <ul class="archive-list">
      <li class="archive-item">
        <a href="">
          <div class="archive-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="archive-item-tax-wrap">
            <p class="archive-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="archive-item-date">2026-02-14</time>
          </div>
          <p class="archive-item-title">丸富庵清月</p>
          <p class="archive-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
      <li class="archive-item">
        <a href="">
          <div class="archive-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="archive-item-tax-wrap">
            <p class="archive-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="archive-item-date">2026-02-14</time>
          </div>
          <p class="archive-item-title">丸富庵清月</p>
          <p class="archive-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
      <li class="archive-item">
        <a href="">
          <div class="archive-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="archive-item-tax-wrap">
            <p class="archive-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="archive-item-date">2026-02-14</time>
          </div>
          <p class="archive-item-title">丸富庵清月</p>
          <p class="archive-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
      <li class="archive-item">
        <a href="">
          <div class="archive-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="archive-item-tax-wrap">
            <p class="archive-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="archive-item-date">2026-02-14</time>
          </div>
          <p class="archive-item-title">丸富庵清月</p>
          <p class="archive-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
      <li class="archive-item">
        <a href="">
          <div class="archive-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="archive-item-tax-wrap">
            <p class="archive-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="archive-item-date">2026-02-14</time>
          </div>
          <p class="archive-item-title">丸富庵清月</p>
          <p class="archive-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
      <li class="archive-item">
        <a href="">
          <div class="archive-item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/device_mockup.png" alt=""></div>
          <div class="archive-item-tax-wrap">
            <p class="archive-item-tax">Web Design</p>
            <time datetime="2026-02-14" class="archive-item-date">2026-02-14</time>
          </div>
          <p class="archive-item-title">丸富庵清月</p>
          <p class="archive-item-txt">モダンなECサイトのデザインと開発</p>
        </a>
      </li>
    </ul>
  </div>
</div>


<?php get_footer(); ?>