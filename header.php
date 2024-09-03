<?php
$title = "マルタ留学なら手数料無料のマルタマルタドットコム";
$keyword = "マルタ留学,マルタ,留学,留学エージェント,手数料無料,マルタマルタドットコム,maltamalta.com";
$description = "【最低価格保証】マルタ留学ならエージェント22年目のマルタマルタドットコムにおまかせ！マルタの留学情報と学校価格もその場ですぐわかり、手数料無料でお申し込みが可能。あなただけのマルタ留学をアレンジさせていただきます。";
$og_image_url = get_bloginfo("template_url") . "/assets/img/common/og-image.jpg";
$home_url = ((empty($_SERVER["HTTPS"])) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
// シングルページの処理
if (is_single()) {
  $id = get_the_ID();
  $title = get_the_title() . " | " . $title;
  $acf_keyword = get_field('meta_keyword', $id);
  if ($acf_keyword != "") $keyword = $acf_keyword;
  $acf_description = get_field('meta_description', $id);
  if ($acf_description != "") $description = $acf_description;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <title><?php echo $title; ?></title>

  <meta charset="UTF-8">
  <meta name="keywords" content="<?php echo $keyword; ?>">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $home_url; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:image" content="<?php echo $og_image_url; ?>" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php echo $title; ?>" />
  <meta name="twitter:url" content="<?php echo $home_url; ?>" />
  <meta name="twitter:description" content="<?php echo $description; ?>" />
  <meta name="twitter:image" content="<?php echo $og_image_url; ?>" />

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <?php wp_head(); ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5P7HXQ9');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5P7HXQ9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header id="header">
    <div class="header-wrapper">
      <div class="header-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/common/header-bg.jpg');">
        <a href="<?php echo get_home_url('/'); ?>/">
          <img class="header-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_03.png" alt="マルタマルタドットコム">
        </a>
      </div>
      <div class="header-title"><?php echo (get_field('meta_h1') ? get_field('meta_h1') : get_the_title()); ?></div>

      <div class="pc-header-menu">
        <ul class="pc-header-list">
          <li>
            <a href="<?php echo get_home_url('/'); ?>/plaza">
              マルタ留学情報広場
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url('/'); ?>/school/tagmenu">
              学校紹介
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url('/'); ?>/list-of-testimonials">
              体験談
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url('/'); ?>/flow">
              マルタ留学の流れ
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url('/'); ?>/faq">
              よくある質問
            </a>
          </li>
          <li>
            <a href="<?php echo get_home_url('/'); ?>/application" target="_blank">
              お問い合わせ
            </a>
          </li>
        </ul>
      </div>
      <div class="btn-nav">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="header-form-main-area">
        <div class="form-container">
          <ul class="header-form-area">
            <li>
              <a href="<?php echo get_home_url('/'); ?>">トップページ</a>
            </li>
            <li>
              <div class="menu-oc">
                <span>マルタ留学情報広場</span>
              </div>
              <ul class="menu-oc-list">
                <li><a href="/<?php echo $post_data[0]->ID; ?>">最新ブログ</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/plaza">ブログ一覧</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/plaza/preparation_maltainfo">マルタ留学準備</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/plaza/life_money">マルタ生活</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/list-of-testimonials">体験談一覧</a></li>
              </ul>
            </li>
            <li>
              <div class="menu-oc">
                <span>学校紹介</span>
              </div>
              <ul class="menu-oc-list">
                <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu">全ての学校</li>
                <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/?cat=31">費用安い</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/?cat=20">短期留学</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/?cat=25">長期留学</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/school/tagmenu/?cat=10">おすすめ</a></li>
              </ul>
            </li>
            <li>
              <div class="menu-oc">
                <span>マルタ留学の流れ</span>
              </div>
              <ul class="menu-oc-list">
                <li><a href="<?php echo get_home_url('/'); ?>/flow/#flow_1">留学前</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/flow/#flow_2">留学中</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/flow/#flow_3">留学後</a></li>
              </ul>
            </li>
            <li>
              <div class="menu-oc">
                <span>マルタマルタについて</span>
              </div>
              <ul class="menu-oc-list">
                <li><a href="<?php echo get_home_url('/'); ?>/about">代表メッセージ</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/about/#about_1">会社プロフィール</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo get_home_url('/'); ?>/about/#merit">マルタマルタを選ぶメリット</a>
            </li>
            <li>
              <a href="<?php echo get_home_url('/'); ?>/price">最低価格保証</a>
            </li>
            <li>
              <a href="<?php echo get_home_url('/'); ?>/price/#simulation">料金シミュレーション</a>
            </li>
            <li>
              <div class="menu-oc">
                <span>お問い合わせ</span>
              </div>
              <ul class="menu-oc-list">
                <li><a href="<?php echo get_home_url('/'); ?>/inquiry">問い合わせフォーム</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/application">申し込みフォーム</a></li>
                <li><a href="<?php echo get_home_url('/'); ?>/faq">よくある質問</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo get_home_url('/'); ?>/privacy">プライバシーポリシー</a>
            </li>
            <li>
              <a href="<?php echo get_home_url('/'); ?>/termsofservice">留学手続きに関する規約</a>
            </li>
            <li>
              <ul class="menu-sns-list">
                <li>
                  <a href="https://twitter.com/maltamaltacom" target="_blank">
                    <div class="sns-icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/twitter.png" alt="マルタマルタ Twitter"></div>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/maltamaltacom/" target="_blank">
                    <div class="sns-icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/instagram.png" alt="マルタマルタ Instagram"></div>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/maltamaltacom/" target="_blank">
                    <div class="sns-icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/facebook.png" alt="マルタマルタ Facebook"></div>
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCJ9Hb-G2T0kBV_x0r4WsmPg" target="_blank">
                    <div class="sns-icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/youtube.png" alt="マルタマルタ YouTube"></div>
                  </a>
                </li>
                <li style="display: none;">
                  <a href="" target="_blank">
                    <div class="sns-icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/line.png" alt="マルタマルタ LINE"></div>
                  </a>
                </li>
                <li style="display: none;">
                  <a href="" target="_blank">
                    <div class="sns-icon-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/tiktok.png" alt="マルタマルタ TikTok"></div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="consultation-img">
      <a href="<?php echo get_home_url('/'); ?>/inquiry">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_star.png" alt="無料相談はこちら　背景　星　画像">
      </a>
    </div>
  </header>