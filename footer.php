  <footer class="footer">
    <div class="footer-inner">
      <h2 class="footer-message">I'LL DO MY BEST TO BRING YOU JOY</h2>
      <div class="footer-content-wrap">
        <div class="footer-site-wrap">
          <p class="footer-site-title">Portfolio | Kohei Mitsuya</p>
          <p class="footer-site-message">わかりやすく、心地よいWebサービスを創造します。</p>
        </div>
        <div class="footer-connect-wrap">
          <p class="footer-connect-title">Connect</p>
          <ul class="footer-connect-list">
            <li><a href="" class="footer-connect-item github"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_github.png" alt="Github"></a></li>
            <li><a href="" class="footer-connect-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_instagram.png" alt="Instagram"></a></li>
            <li><a href="" class="footer-connect-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_mail.png" alt="Mail"></a></li>
          </ul>
        </div>
        <div class="footer-links-wrap">
          <p class="footer-links-title">Quick Links</p>
          <ul class="footer-links-list">
            <li><a href="<?php echo esc_url( home_url('/#top') ); ?>" class="footer-links-item">Top</a></li>
            <li><a href="<?php echo esc_url( home_url('/#about') ); ?>" class="footer-links-item">About</a></li>
            <li><a href="<?php echo esc_url( home_url('/#works') ); ?>" class="footer-links-item">Works</a></li>
            <li><a href="<?php echo esc_url( home_url('/#blog') ); ?>" class="footer-links-item">Blog</a></li>
            <li><a href="<?php echo esc_url( home_url('/#contact') ); ?>" class="footer-links-item">Contact</a></li>
          </ul>
        </div>
      </div>
      <small class="footer-copyright">© 2026 Portfolio. All rights reserved.</small>
    </div>
  </footer>
  
  <?php wp_footer(); ?>
</body>
</html>