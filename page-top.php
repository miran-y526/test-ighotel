<?php
/*
   * Template Name: トップページ
   * トップページ
   */
get_header();
?>

<script type=" application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "株式会社マルタマルタ",
    "founder": "岩田 雅史",
    "foundingDate": "2003-05-25",
    "url": "https://maltamalta.com",
    "logo": "https://maltamalta.com/assets/img/common/logo_03.png",
    "telephone": "050-3704-3355",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "横浜市中区",
      "addressRegion": "神奈川県",
      "postalCode": "220-0012",
      "streetAddress": "3-7-1 OCEAN GATE MINATO MIRAI 8F",
      "addressCountry": "JP"
    },
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "050-3704-3355"
    }]
  },
  "sameAs": [
    "https://twitter.com/maltamaltacom",
    "https://www.instagram.com/maltamaltacom/",
    "https://www.facebook.com/maltamaltacom/",
    "https://www.youtube.com/channel/UCJ9Hb-G2T0kBV_x0r4WsmPg"
  ]
  }
</script>


<article id="page-top">
  <!-- スライダーのコンテナ -->
  <div class="swiper mySwiper">
    <!-- 必要に応じたwrapper -->
    <div class="swiper-wrapper">
      <!-- スライド -->
      <a href="<?php echo get_home_url('/'); ?>/plaza" class="swiper-slide pc-tb-visibility" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/top/top_slide01_pc.jpg') no-repeat;background-size:cover;background-position:center center;"></a>
      <a href="<?php echo get_home_url('/'); ?>/school/tagmenu/#tagmenu" class="swiper-slide pc-tb-visibility" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/top/top_slide02_pc.jpg') no-repeat;background-size:cover;background-position:center center;"></a>
      <a href="<?php echo get_home_url('/'); ?>/price" class="swiper-slide pc-tb-visibility" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/top/top_slide03_pc.jpg') no-repeat;background-size:cover;background-position:center center;"></a>
      <a href="<?php echo get_home_url('/'); ?>/plaza" class="swiper-slide sp-visibility" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/top/top_slide01_sp.jpg') no-repeat;background-size:cover;background-position:center center;"></a>
      <a href="<?php echo get_home_url('/'); ?>/school/tagmenu/#tagmenu" class="swiper-slide sp-visibility" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/top/top_slide02_sp.jpg') no-repeat;background-size:cover;background-position:center center;"></a>
      <a href="<?php echo get_home_url('/'); ?>/price" class="swiper-slide sp-visibility" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/top/top_slide03_sp.jpg') no-repeat;background-size:cover;background-position:center center;"></a>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <?php get_template_part('include/select-menu'); ?>

  <!-- マルタ留学情報広場 -->
  <section class="experience-view-main" id="media">
    <div class="community-main-page" alt="マルタ留学情報広場">
      <div class="category-main-title community">Community<br>
        <h2>マルタ留学情報広場</h2>
      </div>
      <img class="community-title-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/community-title.jpg" alt="マルタ留学情報広場">
      <img class="community-title-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/community-title-sp.png" alt="マルタ留学情報広場">
    </div>
    <p class="community-title-detail">
      マルタに行きたくなる情報を発信中！<br>
      マルタ留学の準備や生活方法、滞在中のおすすめスポットなどをご紹介。
    </p>
    <div class="community-information-area">
      <div class="information-area">
        <ul class="community-box">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'post_status' => 'publish',
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
              $the_query->the_post();
              $post_id = get_the_ID();
              if (has_post_thumbnail($post_id)) {
                $post_thumbnail_id = get_post_thumbnail_id($post_id);
                $post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'large')[0];
              } else {
                $post_thumbnail_url = get_template_directory_uri() . '/assets/img/common/blank-image.png';
              }
              $categories = get_the_terms($post_id, 'category');
          ?>
              <li>
                <div class="img-box">
                  <a href="<?php echo get_home_url('/') . '/plaza/blog/' . $post_id; ?>">
                    <div class="bg-img" style="background-image: url('<?php echo $post_thumbnail_url; ?>'); "></div>
                  </a>
                </div>
                <div class="txt-box">
                  <div class="tag-area time-option">
                    <div class="tag-time">
                      <time datetime="<?php the_time("Y.m.d"); ?>"><?php the_time("Y.m.d"); ?></time>
                    </div>
                    <div class="tag-list-box">
                      <?php foreach ($categories as $category) : ?>
                        <span class="tag"><?php echo $category->name; ?></span>
                      <?php endforeach; ?>
                    </div>
                  </div>
                  <h3 class="list-title">
                    <a href="<?php echo get_home_url('/') . '/plaza/blog/' . $post_id; ?>"><?php the_title(); ?></a>
                  </h3>
                  <div class="desc"><?php the_excerpt(); ?></div>
                  <a href="<?php echo get_home_url('/') . '/plaza/blog/' . $post_id; ?>">> 続きを読む</a>
                </div>
              </li>
          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
    <div class="prev-btn-white">
      <a href="<?php echo get_home_url('/'); ?>/plaza">
        <p>マルタ留学情報広場</p>
        <img class="btn-txt" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/maltamalta_web_button_white.png" alt="マルタ留学情報広場に戻る">
      </a>
    </div>
  </section>

  <!-- 留学シミュレーション -->
  <section class="simulation-main-area">
    <div class="simulation-title-area">
      <div class="category-main-title simulation">Simulation<br>
        <h2>留学シミュレーション</h2>
      </div>
      <p class="simulation-title-detail">
        マルタにある語学学校の「レッスン費用」と「宿泊費用」が<br>
        すぐにわかる留学費用オンライン見積もりはこちら！！
      </p>
    </div>
    <div class="simulation-bg-main-box">
      <div class="title-bg-img">
        <div class="bg-callout">
          <div class="title-bg-callout">
            <ul>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_callout.png" alt="貴方に合ったプランを算出します　画像">
              </li>
            </ul>
          </div>
        </div>
        <div class="title-bg-callout-sp">
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bg-comment.png" alt="貴方に合ったプランを算出します　画像">
            </li>
          </ul>
        </div>
        <div class="bg-phone">
          <div class="title-bg-phone">
            <ul>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_phone.png" alt="電話　貝殻　画像">
              </li>
            </ul>
          </div>
        </div>
        <div class="simulation-main-box">
          <div class="simulation-box-title">
            <div class="inner-box">
              <div class="box-title">
                <ul>
                  <li>
                    <img class="box-title-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_title1.png" alt="留学シミュレーション">
                  </li>
                  <li>
                    <img class="box-title-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_title2.png" alt="留学シミュレーション">
                  </li>
                </ul>
              </div>
              <ul class="select-list">
                <li class="list-week">
                  <span> 週数 </span>
                  <ul class="option-list">
                    <?php for ($i = 0; $i < 48; $i++) : ?>
                      <li data-category="week" data-week-index="<?php echo $i + 1; ?>" data-value="<?php echo $i + 1; ?> 週間"><?php echo $i + 1; ?> 週間
                      </li>
                    <?php endfor; ?>
                  </ul>
                </li>
                <li class="list-school">
                  <span> 学校 </span>
                  <ul class="option-list one-column">
                    <?php
                    $args = array(
                      'post_type' => 'school',
                      'post_status' => 'publish',
                      'order'   => 'DESC',
                      'orderby' => 'meta_value_num',
                      'meta_key' => 'order_index',
                      'posts_per_page' => -1
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                      while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = get_the_ID();
                        $school_name = get_field('school_name', $post_id);
                    ?>
                        <li data-category="school" data-post-id="<?php echo $post_id; ?>" data-value="<?php echo $school_name; ?>" value=""><?php echo $school_name; ?></li>
                    <?php endwhile;
                    endif; ?>
                  </ul>
                </li>
              </ul>
              <a target="_blank" href="<?php echo get_home_url('/'); ?>" class="btn-view-simulation">
                <img class="btn-txt simulation" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_btn.png" alt="シミュレーションを見る　ボタン　テキスト　画像">
                <img class="btn-fish" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_btn_fish.png" alt="シミュレーションを見る　ボタン　魚　画像">
              </a>
            </div>
          </div>
        </div>
        <div class="simulation-bg-area">
          <div class="bg-rock-box">
            <div class="bg-rock">
              <ul>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_rock.png" alt="シミュレーション　背景　岩　画像">
                </li>
              </ul>
            </div>
          </div>
          <div class="bg-man-box">
            <div class="bg-man">
              <ul>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_man.jpg" alt="シミュレーション 背景　男性　画像">
                </li>
              </ul>
            </div>
          </div>
          <div class="bg-wave">
            <ul>
              <li>
                <?php for ($i = 0; $i < 16; $i++) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_bg_wave.png" alt="シミュレーション 背景　波　画像">
                <?php endfor; ?>
              </li>
            </ul>
          </div>
          <div class="bg-wave-sp">
            <ul>
              <li>
                <?php for ($i = 0; $i < 9; $i++) : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/simulation_bg_wave_sp.png" alt="シミュレーション 背景　波　画像">
                <?php endfor; ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 学校紹介 -->
  <div class="school-main-title" id="school">
    <div class="category-main-title top-school">School<br>
      <h2>学校紹介</h2>
    </div>
    <ul>
      <li>
        <img class="school-title-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/school_title.png" alt="学校紹介">
      </li>
      <li>
        <img class="school-title-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/school_title_sp.png" alt="学校紹介">
      </li>
    </ul>
  </div>
  <p class="school-title-detail">
    マルタの特徴的で人気の語学学校をカテゴリー別でご紹介。<br>
    ご希望に合わせて学校チェックしてみましょう！<br>
    「留学オンライン見積もり」でその場で価格もわかります。
  </p>
  <section class="keyword_main_area">
    <div class="select_keyword_area">
      <div class="select_keyword">
        <?php
        $school_categories = get_terms(
          array(
            'taxonomy' => 'school_tag',
            'hide_empty' => false,
            'orderby' => 'slug',
          )
        );
        $term_id = (isset($wp_query->query["cat"])) ? $wp_query->query["cat"] : "";
        ?>
        <ul>
          <li class="select_white<?php if ($term_id == "") echo ' clicked'; ?>">
            <a target="_blank" href="<?php echo get_home_url('/') . '/school/tagmenu/'; ?>">すベて</a>
          </li>
          <?php foreach ($school_categories as $school_category) : ?>
            <li class="select_white<?php if ($term_id == $school_category->term_id) echo ' clicked'; ?>">
              <a target="_blank" href="<?php echo get_home_url('/') . '/school/tagmenu?cat=' . $school_category->term_id; ?>"><?php echo $school_category->name; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="select-tag-area">
      <ul class="select-box">
        <?php
        if ($term_id != "") {
          // カテゴリー絞り込みがある場合
          $args = array(
            'post_type' => 'school',
            'post_status' => 'publish',
            'order'   => 'DESC',
            'orderby' => 'meta_value_num',
            'meta_key' => 'order_index',
            'posts_per_page' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'school_tag',
                'field'    => 'term_taxonomy_id',
                'terms'    => $term_id,
              ),
            ),
          );
        } else {
          $args = array(
            'post_type' => 'school',
            'post_status' => 'publish',
            'order'   => 'DESC',
            'orderby' => 'meta_value_num',
            'meta_key' => 'order_index',
            'posts_per_page' => -1
          );
        }
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) :
            $the_query->the_post();
            $post_id = get_the_ID();
            if (has_post_thumbnail($post_id)) {
              $post_thumbnail_id = get_post_thumbnail_id($post_id);
              $post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'large')[0];
            }
            $categories = wp_get_post_terms($post_id, 'school_tag', array('orderby' => 'slug', 'order' => 'ASC'));
        ?>
            <li class="select-area">
              <a target="_blank" href="<?php the_permalink(); ?>#menu-select">
                <div class="img-box" style="background-image: url('<?php echo $post_thumbnail_url; ?>')"></div>
              </a>
              <h2 class="list-title"><?php the_title(); ?></h2>
              <ul class="tag-list">
                <?php foreach ($categories as $category) : ?>
                  <li><?php echo $category->name; ?></li>
                <?php endforeach; ?>
              </ul>
              <div class="font_blue">
                <ul class="point-list">
                  <?php
                  $points = get_field('four_points');
                  foreach ($points as $point) :
                  ?>
                    <li>・<?php echo $point['desc']; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="font_blue">
                <a target="_blank" href="<?php the_permalink(); ?>#menu-select">> もっと詳しく</a>
              </div>
            </li>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>

  <!-- 体験談バナー -->
  <div class="experience-search-banner">
    <a href="<?php echo get_home_url('/'); ?>/list-of-testimonials" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/experience-banner.jpg" alt="体験談バナー">
    </a>
  </div>

  <!-- マルタ留学の流れ -->
  <section class="flow-main-area" id="flow">
    <div class="flow-main-bg">
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_bg.png" alt="マルタ留学の流れ">
        </li>
      </ul>
    </div>
    <div class="flow-main-bg-sp">
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_bg_sp.png" alt="マルタ留学の流れ">
        </li>
      </ul>
    </div>
    <div class="flow-bg-blue">
      <div class="category-main-title flow">Flow<br>
        <h2>マルタ留学の流れ</h2>
      </div>
      <p class="flow-title-detail">
        マルタ留学の流れとマルタを思いっきり楽しむためのサポートをご紹介。<br>
        20年間のマルタとの繋がりで他とはひと味違ったマルタ留学体験をマルタマルタドットコムはお約束します。
      </p>
      <ul class="flow-img-main-box">
        <li class="flow-img-box">
          <a href="<?php echo get_home_url('/'); ?>/flow#flow_1">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_img1.png" alt="FLOW 留学前　画像">
            </div>
            <h3 class="txt-box">留学前</h3>
            <div class="txt-main">
              お洒落なオフィスで<br>カウンセリング
            </div>
          </a>
        </li>
        <li class="flow-img-box">
          <a href="<?php echo get_home_url('/'); ?>/flow#flow_2">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_img2.0.png" alt="FLOW 留学中　画像">
            </div>
            <h3 class="txt-box">留学中</h3>
            <div class="txt-main">
              マルタを思いっきり<br>楽しめるサポート
            </div>
          </a>
        </li>
        <li class="flow-img-box">
          <a href="<?php echo get_home_url('/'); ?>/flow#flow_3">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/flow_img3.png" alt="FLOW 帰国後　画像">
            </div>
            <h3 class="txt-box">帰国後</h3>
            <div class="txt-main">
              マルタマルタナイト<br>ご招待
            </div>
          </a>
        </li>
      </ul>
      <div class="prev-btn-white">
        <a href="<?php echo get_home_url('/'); ?>/flow">
          <p>マルタ留学の流れ</p>
          <img class="btn-txt" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/maltamalta_web_button_white.png" alt="マルタ留学情報広場に戻る">
        </a>
      </div>
    </div>
  </section>

  <!-- よくある質問 -->
  <section class="faq-list-area" id="faq">
    <div class="faq-list-border">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/border-vertical.png" alt="背景　ボーダー　縦　画像">
    </div>
    <div class="faq-list-border-sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/border-vertical-sp.png" alt="背景　ボーダー　縦　画像">
    </div>
    <ul class="faq-main-box">
      <div class="category-main-title faq">Faq<br>
        <h2>よくある質問</h2>
      </div>
      <dl class="faq-qa-area">
        <dt>
          <div class="q-text-wrap">
            <p class="q-text">
              授業のレベルにはついて行けるのか、不安です
            </p>
            <div class="q-icon"></div>
          </div>
        </dt>
        <dd class="faq-a" style="display: none;">
          <div class="a-box">
            <div class="a-text">
              初心者向けから上級者向けまで、それぞれのレベルによってクラス分けされるのでご安心ください。<br>
              どうしても授業について行けない場合は、学校に相談の上、クラスの変更も可能です。
            </div>
          </div>
        </dd>
        <dt>
          <div class="q-text-wrap">
            <p class="q-text">
              日本人比率はどれくらいですか
            </p>
            <div class="q-icon"></div>
          </div>
        </dt>
        <dd class="faq-a" style="display: none;">
          <div class="a-box">
            <div class="a-text">
              学校にもよりますが、5~10％程度のことが多いです。<br>
              繁忙期によっては日本人が多くなると15%~20%程度になる学校もあります。
            </div>
          </div>
        </dd>
        <dt>
          <div class="q-text-wrap">
            <p class="q-text">
              現地で留学期間やレッスン内容の変更は可能ですか
            </p>
            <div class="q-icon"></div>
          </div>
        </dt>
        <dd class="faq-a" style="display: none;">
          <div class="a-box">
            <div class="a-text">
              可能です。<br>
              まずはマルタマルタへ<a href="https://maltamalta.com/inquiry">お問い合わせ</a>ください。
            </div>
          </div>
        </dd>
      </dl>
      <div class="prev-btn-white top-faq">
        <a href="<?php echo get_home_url('/'); ?>/faq">
          <p>よくある質問</p>
          <img class="btn-txt" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/maltamalta_web_button_white.png" alt="よくある質問">
        </a>
      </div>
    </ul>
  </section>

  <!-- Instagram 埋め込み -->
  <section class="instagram-main-area">
    <div class="embedsocial-hashtag" data-ref="e24b5b7dee6e0b1becd537cd536e88fb3e03bca3">
      <a class="feed-powered-by-es feed-powered-by-es-slider-img" href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Instagram widget">
        <img src="https://embedsocial.com/cdn/images/embedsocial-icon.png" alt="EmbedSocial">
        Instagram widget
      </a>
    </div>
    <script>
      (function(d, s, id) {
        var js;
        if (d.getElementById(id)) {
          return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://embedsocial.com/cdn/ht.js";
        d.getElementsByTagName("head")[0].appendChild(js);
      }(document, "script", "EmbedSocialHashtagScript"));
    </script>
  </section>

  <!-- お問い合わせ -->
  <section class="contact-main-page">
    <div class="contact-bg-blue" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/top/contact-bg-blue.png');">
      <div class="category-main-title contact">Contact<br>
        <h2>お問い合わせ</h2>
      </div>
      <p class="main-txt">
        マルタマルタでは【無料相談、無料サポート】を<br class="sp-visibility">行っています！<br>
        ホームページに記載されてない語学学校にも<br class="sp-visibility">対応しております。<br>
        まずはカウンセリングのご予約を電話または<br class="sp-visibility">メールフォームよりお願いします。<br>
        まずはお気軽にご相談ください！
      </p>
      <div class="contact-txt-area">
        <div class="img-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/contact_man1.png" alt="contact 人　画像">
        </div>
        <div class="text-center">
          <a href="tel:05037043355" class="contact-txt">050-3704-3355</a>
          <div class="contact-time">
            <dl>
              <dt>受付時間</dt>
              <dd>メール対応　365日 24時間対応</dd>
            </dl>
            <dl>
              <dt>担当</dt>
              <dd>岩田、小谷</dd>
            </dl>
          </div>
        </div>
        <div class="img-right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/contact_man2.png" alt="contact 人　画像">
        </div>
      </div>
      <div class="prev-btn-white contact">
        <a href="<?php echo get_home_url('/'); ?>/contact">
          <p>お問い合わせ</p>
          <img class="btn-txt" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/maltamalta_web_button_white.png" alt="マルタ留学情報広場に戻る">
        </a>
      </div>
    </div>

  </section>

</article>
<?php get_footer(); ?>