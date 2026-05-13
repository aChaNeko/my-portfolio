<?php get_header(); ?>

<div class="single-page-wrap">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <?php
    $terms = get_the_terms(get_the_ID(), 'genre');

    if ($terms && !is_wp_error($terms)) {
      $term_names = [];
      foreach ($terms as $term) {
        $term_names[] = strtoupper($term->name);
      }
    }

  ?>

  <div class="single-inner">
    <a href="<?php echo esc_url( home_url('/works/') ); ?>" class="single-prev-btn">すべての作品</a>
    <div class="single-title-wrap">
      <p class="single-tax"><?php echo implode(' / ', $term_names); ?></p>
      <h2 class="signle-title"><?php echo esc_html(get_the_title()); ?></h2>
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="single-date"><?php echo get_the_date('Y-m-d'); ?></time>
    </div>
    <div class="single-main-img"><img src="<?php echo esc_url(get_field('eye_catch')); ?>" alt=""></div>
    <div class="single-news-article">
      <?php the_content(); ?>
      <div class="single-news-tag-wrap">
        <p class="single-news-tag-title">Tags</p>
        <div class="single-news-tag-list">
          <?php
            $terms = get_the_terms(get_the_ID(), 'tags');

            if($terms && !is_wp_error($terms)) :
              foreach($terms as $term) :
          ?>
            <span class="single-news-tag"><?php echo esc_html($term->name); ?></span>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

  <nav class="single-news-connection-wrap">
    <p class="single-news-connection-title">関連記事</p>
    <ul class="single-news-connection-list">
      <?php
        $current_post_id = get_the_ID(); // 今表示してる投稿のIDを取得

        $args = array(
          'post_type' => 'news', 
          'posts_per_page' => 3,
          'post__not_in' => array($current_post_id), // 自分自身を除外！
          'orderby' => 'date',
          'order' => 'DESC'
        );

        $news_array = new WP_Query($args);
      
        if ($news_array->have_posts()) :
          while ($news_array->have_posts()) :
            $news_array->the_post();
            $news_img = get_field('eye_catch');

            $genre = '';
            $terms = get_the_terms(get_the_ID(), 'genre');

            if ($terms && !is_wp_error($terms)) {
              $genre = implode(' / ', wp_list_pluck($terms, 'name'));
            }
      ?>
        <li class="single-news-connection-item">
          <a href="<?php the_permalink(); ?>">
            <div class="single-news-connection-item-img"><img src="<?php echo esc_url($news_img); ?>" alt=""></div>
            <div class="single-news-connection-item-tax-wrap">
              <p class="single-news-connection-item-tax"><?php echo $genre ?></p>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="single-news-connection-item-date"><?php echo get_the_date('Y-m-d'); ?></time>
            </div>
            <p class="single-news-connection-item-title"><?php echo esc_html(get_the_title()); ?></p>
            <p class="single-news-connection-item-txt"><?php echo wp_strip_all_tags(get_the_content()); ?></p>
          </a>
        </li>
      <?php endwhile; endif; ?>
    </ul>
  </nav>
</div>

<?php get_footer(); ?>