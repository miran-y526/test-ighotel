<div id="free-consultation">
  <a href="<?php echo get_home_url('/'); ?>/contact/inquiry">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/free-consultation_sp.png" alt="無料相談はこちら　画像">
  </a>
</div>

<footer id="footer">
  <div class="flow-main-bg">
    <ul>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_bg.png" alt="マルタ留学の流れ">
      </li>
    </ul>
  </div>
  <div class="form-bg-img">
    <div class="footer-contact-news-area">
      <ul class="contact-area">
        <div class="tel">
          <h2>お問い合わせはこちら</h2>
          <a href="tel:05037043355">050-3704-3355</a>
          <p>平日 12:00~22:00<br>メール対応 365日 24時間</p>
        </div>
        <div class="link_area">
          <div class="prev-btn-white footer-area">
            <a href="<?php echo get_home_url('/'); ?>/inquiry">
              <p>お問い合わせ</p>
              <img class="btn-txt" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/maltamalta_web_button_white.png" alt="マルタ留学情報広場に戻る">
            </a>
          </div>
          <div class="prev-btn-white footer-area">
            <a href="<?php echo get_home_url('/'); ?>/application">
              <p>お申し込み</p>
              <img class=" btn-txt" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/maltamalta_web_button_white.png" alt="マルタ留学情報広場に戻る">
            </a>
          </div>
        </div>
      </ul>
      <ul class="footer-news">
        <div class="footer-news-title">News<br>
          <h2>お知らせ</h2>
        </div>
        <div class="news-box">
          <ul class="news-list">
            <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 3,
              'post_status' => 'publish',
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) :
                $the_query->the_post();
                $post_id = get_the_ID();
            ?>
                <li>
                  <a href="<?php echo get_the_permalink(); ?>">
                    <time datetime="<?php the_time("Y.m.d"); ?>"><?php the_time("Y.m.d"); ?></time>
                    <span class="message"><?php the_title(); ?></span>
                  </a>
                </li>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
          </ul>
        </div>
      </ul>
    </div>
    <div class="form-main-area">
      <ul class="form-area">
        <li class="form-list">
          <div class="office-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header-title.png" alt="株式会社マルタマルタ ロゴ">
          </div>
          <p class="office-address">
            〒220-0012<br>
            神奈川県横浜市西区みなとみらい3-7-1<br>
            OCEAN GATE MINATO MIRAI 8F
          </p>
          <ul class="footer-list-area sns-icon">
            <li><a href="https://twitter.com/maltamaltacom" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/twitter.png" alt="マルタマルタ Twitter"></a></li>
            <li><a href="https://www.instagram.com/maltamaltacom/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/instagram.png" alt="マルタマルタ Instagram"></a></li>
            <li><a href="https://www.facebook.com/maltamaltacom/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/facebook.png" alt="マルタマルタ Facebook"></a></li>
            <li><a href="https://www.youtube.com/channel/UCJ9Hb-G2T0kBV_x0r4WsmPg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/youtube.png" alt="マルタマルタ YouTube"></a></li>
            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/line.png" alt="マルタマルタ LINE"></a></li>
            <li style="display: none;"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/tiktok.png" alt="マルタマルタ TikTok"></a></li>
          </ul>
        </li>
        <li class="form-list">
          <div class="footer-title-area">
            マルタ留学情報
          </div>
          <ul class="footer-list-area">
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/1518">マルタコロナ最新情報</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/preparation_maltainfo/">マルタ基礎情報</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/blog/4305/">マルタの天気と天候</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/blog/5941">マルタ留学のメリット</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/blog/535/">お金の持って行き方</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/life_wifi/">携帯の繋ぎ方</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/preparation_belongings/">マルタ留学の荷物</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/preparation_visa/">マルタ留学ビザ情報</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/plaza/blog/3955/">病気とケガになったら</a></li>
          </ul>
        </li>
        <li class="form-list">
          <div class="footer-title-area">
            学校紹介
          </div>
          <ul class="footer-list-area">
            <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/">すべての学校</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/?cat=31">費用の安い学校</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/?cat=20">短期留学におすすめ</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/?cat=25">長期留学におすすめ</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/list-of-testimonials/">マルタ留学体験談</a></li>
          </ul>
        </li>
        <li class="form-list">
          <div class="footer-title-area">
            運営者情報
          </div>
          <ul class="footer-list-area">
            <li><a href="<?php echo get_home_url('/'); ?>/about/#merit">マルタマルタのメリット</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/about/">マルタマルタについて</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/about/#about_1">会社情報</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/privacy/">プライバシーポリシー</a></li>
            <li><a href="<?php echo get_home_url('/'); ?>/termsofservice/">留学手続きに関する規約</a></li>
          </ul>
        </li>
      </ul>
      <div class="twenty-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/20th_anniversary_logo_1.png" alt="マルタマルタ 20周年ロゴ">
      </div>
    </div>
    <div class="footer-txt">
      <p>Copyright&#169;maltamalta.com All rights reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>
</body>

</html>