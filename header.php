<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php if ( is_home() || is_front_page() ) : ?>
  <head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">
<?php else: ?>
  <head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# website:http://ogp.me/ns/article#">
<?php endif; ?>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q1FXCFDXYY"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q1FXCFDXYY');
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?php
      global $page, $paged;
      if(is_front_page()) :
          bloginfo('name');
      elseif(is_404()):
          echo '404 |';
          bloginfo('name');
      elseif(is_single()):
          single_post_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_page()):
          single_post_title('');
          echo ' | ';
          bloginfo('name');
      elseif(is_category()):
          single_cat_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_tag()):
          single_tag_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_author()):
          printf('Author: %s | ', get_the_author());
          bloginfo('name');
      elseif(is_year()):
          printf('Yearly Archives: %s | ', get_the_date('Y'));
          bloginfo('name');
      elseif(is_month()):
          printf('Monthly Archives: %s | ', get_the_date('F Y'));
          bloginfo('name');
      elseif(is_day()):
          printf('Daily Archives: %s | ', get_the_date());
          bloginfo('name');
      elseif(is_search()):
          printf('Search Results for: %s | ', get_search_query());
          bloginfo('name');
      elseif(is_post_type_archive()):
          post_type_archive_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_tax()):
          single_term_title();
          echo ' | ';
          bloginfo('name');
      else:
          wp_title('|', true, 'right');
          bloginfo('name');
      endif;

      if($paged >= 2 || $page >= 2) :
          echo ' - ' . sprintf('%sページ目', max($paged, $page));
      endif;
      ?>
  </title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#171819">
  <?php if(is_front_page() ): ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <?php elseif( is_singular() || is_home() ): ?>
  <meta name="description" content="<?php echo mb_substr(get_the_excerpt(), 0, 100) ?>">
  <meta property="og:description" content="<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>">
  <?php endif; ?>
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://cargrass.jp">
  <meta property="og:title" content="
  <?php
      global $page, $paged;
      if(is_front_page()) :
          bloginfo('name');
      elseif(is_404()):
          echo '404 |';
          bloginfo('name');
      elseif(is_single()):
          single_post_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_page()):
          single_post_title('');
          echo ' | ';
          bloginfo('name');
      elseif(is_category()):
          single_cat_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_tag()):
          single_tag_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_author()):
          printf('Author: %s | ', get_the_author());
          bloginfo('name');
      elseif(is_year()):
          printf('Yearly Archives: %s | ', get_the_date('Y'));
          bloginfo('name');
      elseif(is_month()):
          printf('Monthly Archives: %s | ', get_the_date('F Y'));
          bloginfo('name');
      elseif(is_day()):
          printf('Daily Archives: %s | ', get_the_date());
          bloginfo('name');
      elseif(is_search()):
          printf('Search Results for: %s | ', get_search_query());
          bloginfo('name');
      elseif(is_post_type_archive()):
          post_type_archive_title();
          echo ' | ';
          bloginfo('name');
      elseif(is_tax()):
          single_term_title();
          echo ' | ';
          bloginfo('name');
      else:
          wp_title('|', true, 'right');
          bloginfo('name');
      endif;

      if($paged >= 2 || $page >= 2) :
          echo ' - ' . sprintf('%sページ目', max($paged, $page));
      endif;
      ?>
  ">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/images/ogp-image.png">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-touch-icon-180.png">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/manifest.webmanifest">
  <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@100;400;700&&display=swap" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preload" as="style" fetchpriority="high" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@100;400;700&&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Roboto:wght@100;400;700&&display=swap" media="print" onload='this.media="all"' />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <?php
  if (strpos($_SERVER['HTTP_HOST'], 'local') !== false) {
      $page_id = 78;
  } elseif (strpos($_SERVER['HTTP_HOST'], 'cargrass') !== false) {
      $page_id = 218;
  } else {
      $page_id = 218;
  }

    $company_name = get_field_object('company_name', $page_id);
    $company_hour = get_field_object('company_hour', $page_id);
    $company_phone = get_field_object('company_phone', $page_id);
    $company_address = get_field_object('company_address', $page_id);
    $company_holiday = get_field_object('company_holiday', $page_id);
    $company_fax = get_field_object('company_fax', $page_id);
    $insta_url = get_field_object('insta_url', $page_id);
    $sales_ttl = get_field_object('sales_ttl', $page_id);
    $sales_url_1 = get_field_object('sales_url_1', $page_id);
    $sales_image_1 = get_field_object('sales_image_1', $page_id);
    $sales_alt_1 = get_field_object('sales_alt_1', $page_id);
    $sales_url_2 = get_field_object('sales_url_2', $page_id);
    $sales_image_2 = get_field_object('sales_image_2', $page_id);
    $sales_alt_2 = get_field_object('sales_alt_2', $page_id);
    $sales_url_3 = get_field_object('sales_url_3', $page_id);
    $sales_image_3 = get_field_object('sales_image_3', $page_id);
    $sales_alt_3 = get_field_object('sales_alt_3', $page_id);
    $sales_url_4 = get_field_object('sales_url_4', $page_id);
    $sales_image_4 = get_field_object('sales_image_4', $page_id);
    $sales_alt_4 = get_field_object('sales_alt_4', $page_id);
    $sales_url_5 = get_field_object('sales_url_5', $page_id);
    $sales_image_5 = get_field_object('sales_image_5', $page_id);
    $sales_alt_5 = get_field_object('sales_alt_5', $page_id);
    $sales_url_6 = get_field_object('sales_url_6', $page_id);
    $sales_image_6 = get_field_object('sales_image_6', $page_id);
    $sales_alt_6 = get_field_object('sales_alt_6', $page_id);
    $sales_url_7 = get_field_object('sales_url_7', $page_id);
    $sales_image_7 = get_field_object('sales_image_7', $page_id);
    $sales_alt_7 = get_field_object('sales_alt_7', $page_id);
  ?>

  <header class="header">
    <div class="headerUpper pc">

      <dl class="headerUpperLabel">
        <dt><?php echo $company_hour["label"]; ?></dt>
        <dd><?php echo $company_hour["value"]; ?></dd>
      </dl>
      <dl class="headerUpperLabel">
        <dt><?php echo $company_phone["label"]; ?></dt>
        <dd><?php echo $company_phone["value"]; ?></dd>
      </dl>

      <?php if ($insta_url["value"] ): ?>
      <a href="<?php echo $insta_url["value"]; ?>" target="_blank" aria-label="Instagramページへ" class="instagram black">
        <svg version="1.1" viewBox="0 0 31 31" class="instagram__icon">
          <path d="M9.4,1.1c-1.6,0-2.7.3-3.6.7-1,.4-1.8.9-2.7,1.7-.8.8-1.3,1.7-1.7,2.7-.4,1-.6,2-.7,3.6,0,1.6,0,2.1,0,6.2,0,4.1,0,4.6.1,6.2,0,1.6.3,2.7.7,3.6.4,1,.9,1.8,1.7,2.6.8.8,1.7,1.3,2.7,1.7.9.4,2.1.6,3.6.7,1.6,0,2.1,0,6.2,0,4.1,0,4.6,0,6.2-.1,1.6,0,2.7-.3,3.6-.7,1-.4,1.8-.9,2.6-1.7.8-.8,1.3-1.7,1.7-2.7.4-1,.6-2,.7-3.6,0-1.6,0-2.1,0-6.2,0-4.1,0-4.6-.1-6.2,0-1.6-.3-2.7-.7-3.6-.4-1-.9-1.8-1.7-2.7s-1.7-1.3-2.7-1.7c-1-.4-2-.6-3.6-.7-1.6,0-2.1,0-6.2,0-4.1,0-4.6,0-6.2,0M9.6,28.2c-1.5,0-2.3-.3-2.8-.5-.7-.3-1.2-.6-1.7-1.1s-.8-1-1.1-1.7c-.2-.5-.5-1.3-.5-2.8,0-1.6,0-2.1,0-6.1,0-4,0-4.5,0-6.1,0-1.5.3-2.3.5-2.8.3-.7.6-1.2,1.1-1.7s1-.8,1.7-1.1c.5-.2,1.3-.5,2.8-.5,1.6,0,2.1,0,6.1,0,4,0,4.5,0,6.1,0,1.5,0,2.3.3,2.8.5.7.3,1.2.6,1.7,1.1.5.5.9,1,1.1,1.7.2.5.5,1.3.5,2.8,0,1.6,0,2.1.1,6.1,0,4,0,4.5,0,6.1,0,1.5-.3,2.3-.5,2.8-.3.7-.6,1.2-1.1,1.7-.5.5-1,.9-1.7,1.1-.5.2-1.3.5-2.8.5-1.6,0-2.1,0-6.1.1-4,0-4.5,0-6.1,0M21.8,8c0,1,.8,1.8,1.8,1.8s1.8-.8,1.8-1.8-.8-1.8-1.8-1.8-1.8.8-1.8,1.8M7.9,16c0,4.2,3.5,7.7,7.7,7.7s7.7-3.5,7.7-7.7c0-4.2-3.5-7.7-7.7-7.7-4.2,0-7.7,3.5-7.7,7.7M10.6,16c0-2.8,2.2-5,5-5,2.8,0,5,2.2,5,5,0,2.8-2.2,5-5,5-2.8,0-5-2.2-5-5"/>
        </svg>
      </a>
      <?php endif ?>

    </div>
    <div class="headerLower">
      <div class="headerLogo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="headerLogo__link" aria-label="ホームへ">
          <figure class="headerLogo__img">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.svg" width="200" height="33" alt="<?php bloginfo('name'); ?>" />
          </figure>
        </a>
      </div>

      <div class="headearNavi pc">
        <?php wp_nav_menu(array(
        'theme_location'  => 'headerPC',
        'container'       => 'ul',
        'menu_class' => 'headearNavi__wrap',
        'fallback_cb' => false,
        'link_before' => '',
        'link_after' => '',
        'walker' => new custom_header
        )); ?>
      </div>

        <button aria-label="メインメニュー" class="gNaviBtn sp">
          <div class="gNaviBtn__wrap">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>

        <nav aria-expanded="false" class="gNaviMenu sp">
          <div class="gNaviMenu__wrap">
            <?php wp_nav_menu(array(
            'theme_location'  => 'headerSP',
            'container'       => 'ul',
            'menu_class' => 'gMenu',
            'fallback_cb' => false,
            )); ?>

            <ul class="sns">
              <?php if ($insta_url["value"] ): ?>
              <li class="sns__item">
                <a href="<?php echo $insta_url["value"]; ?>" target="_blank" aria-label="Instagramページへ" class="instagram black">
                  <svg version="1.1" viewBox="0 0 31 31" class="instagram__icon">
                    <path d="M9.4,1.1c-1.6,0-2.7.3-3.6.7-1,.4-1.8.9-2.7,1.7-.8.8-1.3,1.7-1.7,2.7-.4,1-.6,2-.7,3.6,0,1.6,0,2.1,0,6.2,0,4.1,0,4.6.1,6.2,0,1.6.3,2.7.7,3.6.4,1,.9,1.8,1.7,2.6.8.8,1.7,1.3,2.7,1.7.9.4,2.1.6,3.6.7,1.6,0,2.1,0,6.2,0,4.1,0,4.6,0,6.2-.1,1.6,0,2.7-.3,3.6-.7,1-.4,1.8-.9,2.6-1.7.8-.8,1.3-1.7,1.7-2.7.4-1,.6-2,.7-3.6,0-1.6,0-2.1,0-6.2,0-4.1,0-4.6-.1-6.2,0-1.6-.3-2.7-.7-3.6-.4-1-.9-1.8-1.7-2.7s-1.7-1.3-2.7-1.7c-1-.4-2-.6-3.6-.7-1.6,0-2.1,0-6.2,0-4.1,0-4.6,0-6.2,0M9.6,28.2c-1.5,0-2.3-.3-2.8-.5-.7-.3-1.2-.6-1.7-1.1s-.8-1-1.1-1.7c-.2-.5-.5-1.3-.5-2.8,0-1.6,0-2.1,0-6.1,0-4,0-4.5,0-6.1,0-1.5.3-2.3.5-2.8.3-.7.6-1.2,1.1-1.7s1-.8,1.7-1.1c.5-.2,1.3-.5,2.8-.5,1.6,0,2.1,0,6.1,0,4,0,4.5,0,6.1,0,1.5,0,2.3.3,2.8.5.7.3,1.2.6,1.7,1.1.5.5.9,1,1.1,1.7.2.5.5,1.3.5,2.8,0,1.6,0,2.1.1,6.1,0,4,0,4.5,0,6.1,0,1.5-.3,2.3-.5,2.8-.3.7-.6,1.2-1.1,1.7-.5.5-1,.9-1.7,1.1-.5.2-1.3.5-2.8.5-1.6,0-2.1,0-6.1.1-4,0-4.5,0-6.1,0M21.8,8c0,1,.8,1.8,1.8,1.8s1.8-.8,1.8-1.8-.8-1.8-1.8-1.8-1.8.8-1.8,1.8M7.9,16c0,4.2,3.5,7.7,7.7,7.7s7.7-3.5,7.7-7.7c0-4.2-3.5-7.7-7.7-7.7-4.2,0-7.7,3.5-7.7,7.7M10.6,16c0-2.8,2.2-5,5-5,2.8,0,5,2.2,5,5,0,2.8-2.2,5-5,5-2.8,0-5-2.2-5-5"/>
                  </svg>
                </a>
              </li>
            <?php endif ?>
            </ul>

            <div class="info">
              <p class="name"><?php echo $company_name["value"]; ?></p>
              <p class="address"><?php echo $company_address["value"]; ?></p>
              <ul class="info__grid">
                <li class="infoGrid__item">
                  <dl class="infoProperty">
                    <dt class="infoProperty__ttl"><?php echo $company_holiday["label"]; ?></dt>
                    <dd class="infoProperty__txt"><?php echo $company_holiday["value"]; ?></dd>
                  </dl>
                </li>
                <li class="infoGrid__item">
                  <dl class="infoProperty">
                    <dt class="infoProperty__ttl"><?php echo $company_hour["label"]; ?></dt>
                    <dd class="infoProperty__txt"><?php echo $company_hour["value"]; ?></dd>
                  </dl>
                </li>
                <li class="infoGrid__item">
                  <dl class="infoProperty">
                    <dt class="infoProperty__ttl"><?php echo $company_phone["label"]; ?></dt>
                    <dd class="infoProperty__txt"><a href="tel:<?php echo $company_phone["value"]; ?>"><?php echo $company_phone["value"]; ?></a></dd>
                  </dl>
                </li>
                <li class="infoGrid__item">
                  <dl class="infoProperty">
                    <dt class="infoProperty__ttl"><?php echo $company_fax["label"]; ?></dt>
                    <dd class="infoProperty__txt"><?php echo $company_fax["value"]; ?></dd>
                  </dl>
                </li>
              </ul>
            </div>

            <ul class="salesWebsite">
              <?php if($sales_url_1["value"] && $sales_alt_1["value"]): ?>
              <li class="salesWebsite__item">
                <a href="<?php echo $sales_url_1["value"]; ?>" target="_blank" aria-label="<?php echo $sales_alt_1["value"]; ?>ページへ">
                  <?php if($sales_image_1): ?>
                  <figure class="website">
                    <img src="<?php echo $sales_image_1["value"]; ?>" alt="<?php echo $sales_alt_1["value"]; ?>" width="124" height="46" class="website__icon" />
                  </figure>
                  <?php else: ?>
                    <?php echo $sales_alt_1["value"]; ?>
                  <?php endif; ?>
                </a>
              </li>
              <?php endif; ?>

              <?php if($sales_url_2["value"] && $sales_alt_2["value"]): ?>
              <li class="salesWebsite__item">
                <a href="<?php echo $sales_url_2["value"]; ?>" target="_blank" aria-label="<?php echo $sales_alt_2["value"]; ?>ページへ">
                  <?php if($sales_image_2): ?>
                  <figure class="website">
                    <img src="<?php echo $sales_image_2["value"]; ?>" alt="<?php echo $sales_alt_2["value"]; ?>" width="124" height="19" class="website__icon" />
                  </figure>
                  <?php else: ?>
                    <?php echo $sales_alt_2["value"]; ?>
                  <?php endif; ?>
                </a>
              </li>
              <?php endif; ?>

              <?php if($sales_url_3["value"] && $sales_alt_3["value"]): ?>
              <li class="salesWebsite__item">
                <a href="<?php echo $sales_url_3["value"]; ?>" target="_blank" aria-label="<?php echo $sales_alt_3["value"]; ?>ページへ">
                  <?php if($sales_image_3): ?>
                  <figure class="website">
                    <img src="<?php echo $sales_image_3["value"]; ?>" alt="<?php echo $sales_alt_3["value"]; ?>" width="124" height="26" class="website__icon" />
                  </figure>
                  <?php else: ?>
                    <?php echo $sales_alt_3["value"]; ?>
                  <?php endif; ?>
                </a>
              </li>
              <?php endif; ?>

              <?php if($sales_url_4["value"] && $sales_alt_4["value"]): ?>
              <li class="salesWebsite__item">
                <a href="<?php echo $sales_url_4["value"]; ?>" target="_blank" aria-label="<?php echo $sales_alt_4["value"]; ?>ページへ">
                  <?php if($sales_image_4): ?>
                  <figure class="website">
                    <img src="<?php echo $sales_image_4["value"]; ?>" alt="<?php echo $sales_alt_4["value"]; ?>" class="website__icon" />
                  </figure>
                  <?php else: ?>
                    <?php echo $sales_alt_4["value"]; ?>
                  <?php endif; ?>
                </a>
              </li>
              <?php endif; ?>

              <?php if($sales_url_5["value"] && $sales_alt_5["value"]): ?>
              <li class="salesWebsite__item">
                <a href="<?php echo $sales_url_5["value"]; ?>" target="_blank" aria-label="<?php echo $sales_alt_5["value"]; ?>ページへ">
                  <?php if($sales_image_5): ?>
                  <figure class="website">
                    <img src="<?php echo $sales_image_5["value"]; ?>" alt="<?php echo $sales_alt_5["value"]; ?>" class="website__icon" />
                  </figure>
                  <?php else: ?>
                    <?php echo $sales_alt_5["value"]; ?>
                  <?php endif; ?>
                </a>
              </li>
              <?php endif; ?>

              <?php if($sales_url_6["value"] && $sales_alt_6["value"]): ?>
              <li class="salesWebsite__item">
                <a href="<?php echo $sales_url_6["value"]; ?>" target="_blank" aria-label="<?php echo $sales_alt_6["value"]; ?>ページへ">
                  <?php if($sales_image_6): ?>
                  <figure class="website">
                    <img src="<?php echo $sales_image_6["value"]; ?>" alt="<?php echo $sales_alt_6["value"]; ?>" class="website__icon" />
                  </figure>
                  <?php else: ?>
                    <?php echo $sales_alt_6["value"]; ?>
                  <?php endif; ?>
                </a>
              </li>
              <?php endif; ?>

              <?php if($sales_url_7["value"] && $sales_alt_7["value"]): ?>
              <li class="salesWebsite__item">
                <a href="<?php echo $sales_url_7["value"]; ?>" target="_blank" aria-label="<?php echo $sales_alt_7["value"]; ?>ページへ">
                  <?php if($sales_image_7): ?>
                  <figure class="website">
                    <img src="<?php echo $sales_image_7["value"]; ?>" alt="<?php echo $sales_alt_7["value"]; ?>" class="website__icon" />
                  </figure>
                  <?php else: ?>
                    <?php echo $sales_alt_7["value"]; ?>
                  <?php endif; ?>
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </nav>
    </div>
  </header>
