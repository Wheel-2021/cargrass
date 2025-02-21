<?php get_header(); ?>
<!-- hero area -->
<?php
  $hero_catchcopy_1 = get_field_object('hero_catchcopy_1');
  $hero_image_1 = get_field_object('hero_image_1');
  $hero_catchcopy_2 = get_field_object('hero_catchcopy_2');
  $hero_image_2 = get_field_object('hero_image_2');
  $hero_catchcopy_3 = get_field_object('hero_catchcopy_3');
  $hero_image_3 = get_field_object('hero_image_3');
;?>

<!-- news area -->
<?php
  $news_subtitle = get_field_object('news_subtitle');
;?>

<!-- greeting area -->
<?php
  $greeting_subtitle = get_field_object('greeting_subtitle');
  $greeting_president_image = get_field_object('greeting_president_image');
  $greeting_title = get_field_object('greeting_title');
  $greeting_text_1 = get_field_object('greeting_text_1');
  $greeting_text_2 = get_field_object('greeting_text_2');
  $greeting_text_3 = get_field_object('greeting_text_3');
  $greeting_text_4 = get_field_object('greeting_text_4');
  $greeting_text_5 = get_field_object('greeting_text_5');
  $greeting_text_6 = get_field_object('greeting_text_6');
;?>


<!-- company area -->
<?php
  $company_subtitle = get_field_object('company_subtitle');
  $company_image_1 = get_field_object('company_image_1');
  $company_image_2 = get_field_object('company_image_2');
  $company_title_1 = get_field_object('company_title_1');
  $company_name = get_field_object('company_name');
  $company_established = get_field_object('company_established');
  $company_capital = get_field_object('company_capital');
  $company_president = get_field_object('company_president');
  $company_business = get_field_object('company_business');
  $company_license = get_field_object('company_license');
  $company_bank = get_field_object('company_bank');
  $company_client = get_field_object('company_client');
  $company_group = get_field_object('company_group');
  $company_hour = get_field_object('company_hour');
  $company_holiday = get_field_object('company_holiday');
  $company_address = get_field_object('company_address');
  $company_phone = get_field_object('company_phone');
  $company_fax = get_field_object('company_fax');
  $company_title_2 = get_field_object('company_title_2');
  $company_map = get_field_object('company_map');
;?>

<!-- inquiry area -->
<?php
  $inquiry_subtitle = get_field_object('inquiry_subtitle');
  $inquiry_title = get_field_object('inquiry_title');
  $inquiry_text = get_field_object('inquiry_text');
;?>


<!-- garage area -->
<?php
  $garage_subtitle = get_field_object('garage_subtitle');
  $garage_image_1 = get_field_object('garage_image_1');
  $garage_image_2 = get_field_object('garage_image_2');
  $garage_title = get_field_object('garage_title');
  $garage_text = get_field_object('garage_text');
  $garage_maintenance_title = get_field_object('garage_maintenance_title');
  $garage_maintenance_contents = get_field_object('garage_maintenance_contents');
  $garage_inspection_title = get_field_object('garage_inspection_title');
  $garage_inspection_contents = get_field_object('garage_inspection_contents');
  $garage_plate_title = get_field_object('garage_plate_title');
  $garage_plate_contents = get_field_object('garage_plate_contents');
  $garage_photo_1 = get_field_object('garage_photo_1');
  $garage_photo_2 = get_field_object('garage_photo_2');
  $garage_photo_3 = get_field_object('garage_photo_3');
  $garage_photo_4 = get_field_object('garage_photo_4');
  $garage_photo_5 = get_field_object('garage_photo_5');
  $garage_photo_6 = get_field_object('garage_photo_6');
  $garage_photo_7 = get_field_object('garage_photo_7');
  $garage_photo_8 = get_field_object('garage_photo_8');
  $garage_photo_9 = get_field_object('garage_photo_9');
  $garage_photo_10 = get_field_object('garage_photo_10');
;?>


  <main class="topPage contentsArea">
    <article class="topPage__wrap">
      <section id="hero" class="hero">

        <div class="heroImage">
          <div id="swiper-image-container" class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <?php if($hero_image_1["value"] && $hero_catchcopy_1["value"]): ?>
                  <figure class="heroImage__wrap">
                    <img src="<?php echo $hero_image_1["value"]; ?>" alt="<?php echo $hero_catchcopy_1["value"]; ?>" class="heroImage__image" width="612" height="462" />
                  </figure>
                <?php endif; ?>
              </div>
              <div class="swiper-slide">
                <?php if($hero_image_2["value"] && $hero_catchcopy_2["value"]): ?>
                  <figure class="heroImage__wrap">
                    <img src="<?php echo $hero_image_2["value"]; ?>" alt="<?php echo $hero_catchcopy_2["value"]; ?>" class="heroImage__image" width="612" height="462" />
                  </figure>
                <?php endif; ?>
              </div>
              <div class="swiper-slide">
                <?php if($hero_image_3["value"] && $hero_catchcopy_3["value"]): ?>
                  <figure class="heroImage__wrap">
                    <img src="<?php echo $hero_image_3["value"]; ?>" alt="<?php echo $hero_catchcopy_3["value"]; ?>" class="heroImage__image" width="612" height="462" />
                  </figure>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="heroslogan">
          <h1 class="heroslogan__ttl">
            <div id="swiper-slogan-container" class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">

                    <?php if($hero_image_1["value"] && $hero_catchcopy_1["value"]): ?>

                        <?php echo $hero_catchcopy_1["value"]; ?>

                    <?php endif; ?>
                  </div>
                  <div class="swiper-slide">
                    <?php if($hero_image_2["value"] && $hero_catchcopy_2["value"]): ?>

                        <?php echo $hero_catchcopy_2["value"]; ?>

                    <?php endif; ?>
                  </div>
                  <div class="swiper-slide">
                    <?php if($hero_image_3["value"] && $hero_catchcopy_3["value"]): ?>

                        <?php echo $hero_catchcopy_3["value"]; ?>

                    <?php endif; ?>
                  </div>
                </div>

            </div>
          </h1>
        </div>

      </section>

      <section id="news" class="contents__base news">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl"><?php echo $news_subtitle["value"]; ?></h2>
            <p class="subTtl__small"><?php echo $news_subtitle["label"]; ?></p>

            <div class="contents__wrap">
              <div class="contents__left">
                <?php $post_archive_url = get_post_type_archive_link('post'); ?>
                <a href="<?php echo esc_url($post_archive_url); ?>" class="btn__small white" aria-label="ニュース一覧へ">
                  一覧
                </a>
              </div>
            <div class="contents__right">
              <?php
                $args = array(
                  'posts_per_page' => 3 // 表示件数の指定
                );
                $posts = get_posts( $args ); ?>

                <?php if ( empty( $posts ) ): // 記事がない場合の処理 ?>
                  <p>ニュースがまだありません。</p>;
                <?php else: ?>

                <?php foreach ( $posts as $post ): // ループの開始
                    setup_postdata( $post ); // 記事データの取得
                ?>
                  <dl class="news__list">
                    <dt class="newsList__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></dt>
                    <dd class="newsList__ttl"><a href="<?php the_permalink(); ?>" class="normalLink"><?php the_title(); ?></a></dd>
                    <dd class="newsList__btn"><a href="<?php the_permalink(); ?>" class="btn__small black" aria-label="ニュース詳細へ">読む</a></dd>
                  </dl>
                <?php endforeach;?>

              <?php endif; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="greeting" class="contents__base greeting">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl"><?php echo $greeting_subtitle["value"]; ?></h2>
            <p class="subTtl__small"><?php echo $greeting_subtitle["label"]; ?></p>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right">
                <h3 class="mainTtl"><?php echo $greeting_title["value"]; ?></h3>
                <div class="greeting__box">
                  <div class="greetingBox__left">

                    <?php if ($greeting_text_1["value"]) : ?>
                    <p class="greeting__text">
                      <?php echo $greeting_text_1["value"]; ?>
                    </p>
                    <?php endif ?>

                    <?php if ($greeting_text_2["value"]) : ?>
                    <p class="greeting__text">
                      <?php echo $greeting_text_2["value"]; ?>
                    </p>
                    <?php endif ?>

                    <?php if ($greeting_text_3["value"]) : ?>
                    <p class="greeting__text">
                      <?php echo $greeting_text_3["value"]; ?>
                    </p>
                    <?php endif ?>

                    <?php if ($greeting_text_4["value"]) : ?>
                    <p class="greeting__text">
                      <?php echo $greeting_text_4["value"]; ?>
                    </p>
                    <?php endif ?>

                    <?php if ($greeting_text_5["value"]) : ?>
                    <p class="greeting__text">
                      <?php echo $greeting_text_5["value"]; ?>
                    </p>
                    <?php endif ?>

                    <?php if ($greeting_text_6["value"]) : ?>
                    <p class="greeting__text">
                      <?php echo $greeting_text_6["value"]; ?>
                    </p>
                    <?php endif ?>

                    <?php if ($company_president["value"]) : ?>
                    <p class="greeting__text">
                      <?php echo $company_president["value"]; ?>
                    </p>
                    <?php endif ?>

                    <a href="#" class="btn__big normal pc" aria-label="車両問い合わせページへ">
                      車両問い合わせ
                    </a>
                  </div>
                  <div class="greetingBox__right">
                    <?php if ($greeting_president_image["value"]) : ?>
                    <figure class="greetingImage__wrap">
                      <img src="<?php echo $greeting_president_image["value"]; ?>" alt="<?php echo $company_president["value"]; ?>" class="greetingImage" width="232" height="348" loading="lazy" />
                    </figure>
                    <?php endif ?>

                    <a href="#" class="btn__big normal sp" aria-label="車両問い合わせページへ">
                      車両問い合わせ
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="garage" class="contents__base garage">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl"><?php echo $garage_subtitle["value"]; ?></h2>
            <p class="subTtl__small"><?php echo $garage_subtitle["label"]; ?></p>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right">
                <h3 class="mainTtl"><?php echo $garage_title["value"]; ?></h3>
                <div class="photo__box">
                  <figure class="photo__box--left">
                      <img src="<?php echo $garage_image_1["value"]; ?>" alt="<?php echo $garage_title["value"]; ?>" class="photo" width="380" height="252" loading="lazy" />
                  </figure>
                  <figure class="photo__box--right">
                      <img src="<?php echo $garage_image_2["value"]; ?>" alt="<?php echo $garage_title["value"]; ?>" class="photo" width="380" height="252" loading="lazy" />
                  </figure>
                </div>
                <p class="text"><?php echo $garage_text["value"]; ?></p>
              </div>
            </div>

            <div class="photosBox">
              <ul class="garagePhotos loop__list">
                <?php if ($garage_photo_1["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_1["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_2["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_2["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_3["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_3["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_4["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_4["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_5["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_5["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_6["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_6["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_7["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_7["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_8["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_8["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_9["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_9["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_10["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_10["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
              </ul>
              <ul class="garagePhotos loop__list">
                <?php if ($garage_photo_1["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_1["value"]; ?>" alt="工場内機械・機材" class="garagePhoto"  width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_2["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_2["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_3["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_3["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_4["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_4["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>

                <?php if ($garage_photo_5["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_5["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_6["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_6["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_7["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_7["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_8["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_8["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_9["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_9["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
                <?php if ($garage_photo_10["value"]) : ?>
                  <li class="garagePhotos__item">
                    <figure class="garagePhotoItem__wrap">
                      <img src="<?php echo $garage_photo_10["value"]; ?>" alt="工場内機械・機材" class="garagePhoto" width="226" height="150" loading="lazy" />
                    </figure>
                  </li>
                <?php endif ?>
              </ul>
            </div>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right garage__menu">
                <?php if ($garage_maintenance_contents["value"]) : ?>
                <section class="garage__menu--item maintenance">
                  <h4 class="garageMenu__ttl"><?php echo $garage_maintenance_title["value"]; ?></h4>
                  <p class="garageMenu__txt"><?php echo $garage_maintenance_contents["value"]; ?></p>
                </section>
                <?php endif ?>
                <?php if ($garage_inspection_contents["value"]) : ?>
                <section class="garage__menu--item inspection">
                  <h4 class="garageMenu__ttl"><?php echo $garage_inspection_title["value"]; ?></h4>
                  <p class="garageMenu__txt"><?php echo $garage_inspection_contents["value"]; ?></p>
                </section>
                <?php endif ?>
                <?php if ($garage_plate_contents["value"]) : ?>
                <section class="garage__menu--item plate">
                  <h4 class="garageMenu__ttl"><?php echo $garage_plate_title["value"]; ?></h4>
                  <p class="garageMenu__txt"><?php echo $garage_plate_contents["value"]; ?></p>
                </section>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="company" class="contents__base company">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl"><?php echo $company_subtitle["value"]; ?></h2>
            <p class="subTtl__small"><?php echo $company_subtitle["label"]; ?></p>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right">
                <h3 class="mainTtl"><?php echo $company_title_1["value"]; ?></h3>
                <div class="photo__box">
                  <figure class="photo__box--left">
                      <img src="<?php echo $company_image_1["value"]; ?>" alt="<?php echo $company_title["value"]; ?>" class="photo" width="380" height="252" loading="lazy" />
                  </figure>
                  <figure class="photo__box--right">
                      <img src="<?php echo $company_image_2["value"]; ?>" alt="<?php echo $company_title["value"]; ?>" class="photo" width="380" height="252" loading="lazy" />
                  </figure>
                </div>

                <dl class="comapnyData">
                  <?php if ($company_name["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_name["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_name["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_established["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_established["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_established["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_capital["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_capital["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_capital["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_president["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_president["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_president["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_business["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_business["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_business["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_license["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_license["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_license["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_bank["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_bank["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_bank["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_client["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_client["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_client["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_group["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_group["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_group["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_hour["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_hour["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_hour["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_holiday["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_holiday["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_holiday["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_address["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_address["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_address["value"]; ?></dd>
                  <?php endif ?>
                  <?php if ($company_phone["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_phone["label"]; ?></dt>
                  <dd class="comapnyData__txt"><a href="tel:<?php echo $company_phone["value"]; ?>"><?php echo $company_phone["value"]; ?></a></dd>
                  <?php endif ?>
                  <?php if ($company_fax["value"]) : ?>
                  <dt class="comapnyData__ttl"><?php echo $company_fax["label"]; ?></dt>
                  <dd class="comapnyData__txt"><?php echo $company_fax["value"]; ?></dd>
                  <?php endif ?>
                </dl>
                <h3 class="mainTtl"><?php echo $company_title_2["value"]; ?></h3>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d728.6710315960813!2d141.43421036650963!3d43.06911057113587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f150.1!3m3!1m2!1s0x5f0b2d2b7ceb5977%3A0x6f68d7c9ae03fe82!2z5pyJ6ZmQ5Lya56S-44Kw44Op44K5!5e0!3m2!1sja!2sjp!4v1740014746497!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="inquiry-public" class="contents__base inquiry">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl"><?php echo $inquiry_subtitle["value"]; ?></h2>
            <p class="subTtl__small"><?php echo $inquiry_subtitle["label"]; ?></p>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right">
                <h3 class="mainTtl inquiryTtl"><?php echo $inquiry_title["value"]; ?></h3>

                <p class="text inquiryTxt"><?php echo $inquiry_text["value"]; ?></p>
                <div class="content">
                  <ul class="flow">
                    <li class="flow__item is__active">記入画面</li>
                    <li class="flow__item">確認画面</li>
                    <li class="flow__item">送信完了</li>
                  </ul>

                  <div class="form">
                    <div class="form__item input__box">
                      <dl class="form__wrap">
                        <dt class="form__ttl">
                          <span class="form__label form__requirement">必須</span>
                          <label for="name" class="form__txt">名前</label>
                        </dt>
                        <dd class="form__input">
                          <input type="text" name="name" id="name" autocomplete="name" placeholder="例) XX 太郎" class="form__input--item requirement__item" />
                        </dd>
                        <dt class="form__ttl">
                          <span class="form__label form__requirement">必須</span>
                          <label for="email" class="form__txt">メールアドレス(半角)</label>
                        </dt>
                        <dd class="form__input">
                          <input type="text" name="email" id="email" placeholder="例) XX@XX.XX.XX (半角)" autocomplete="email" class="form__input--item requirement__item form__email" />
                        </dd>
                        <dt class="form__ttl">
                          <span class="form__label form__option">任意</span>
                          <label for="item" class="form__txt">問い合わせ項目</label>
                        </dt>
                        <dd class="form__input">
                          <select id="item" class="form__input--item form__option--select form__item">
                            <option value="">該当項目を選択してください</option>
                            <option value="中古車販売について">中古車販売について</option>
                            <option value="当社への営業">当社への営業</option>
                            <option value="採用について">採用について</option>
                            <option value="その他">その他</option>
                          </select>
                        </dd>
                        <dt class="form__ttl">
                          <span class="form__label form__requirement">必須</span>
                          <label for="content" class="form__txt">問い合わせ内容</label>
                        </dt>
                        <dd class="form__input">
                          <textarea name="content" id="content" rows="10" class="form__textarea--item requirement__item"></textarea>
                        </dd>
                      </dl>
                      <ul class="btns">
                        <li class="btns__btn">
                          <button type="button" class="btn btn__confirm">入力内容の確認</button>
                        </li>
                      </ul>
                    </div>
                    <div class="form__item confirm__box">
                      <dl class="form__wrap">
                        <dt class="form__ttl">
                          <span class="form__label form__requirement">必須</span>
                          <span class="form__txt">名前</span>
                        </dt>
                        <dd class="form__input">
                          <p type="text" class="form__input--item form__input--txt"></p>
                        </dd>
                        <dt class="form__ttl">
                          <span class="form__label form__requirement">必須</span>
                          <span class="form__txt">メールアドレス(半角)</span>
                        </dt>
                        <dd class="form__input">
                          <p class="form__input--item form__email form__input--txt"></p>
                        </dd>
                        <dt class="form__ttl">
                          <span class="form__label form__option">任意</span>
                          <span class="form__txt">問い合わせ項目</span>
                        </dt>
                        <dd class="form__input">
                          <p class="form__input--item form__genre form__select--OutputTxt"></p>
                        </dd>
                        <dt class="form__ttl">
                          <span class="form__label form__requirement">必須</span>
                          <span class="form__txt">問い合わせ内容</span>
                        </dt>
                        <dd class="form__input">
                          <p class="form__textarea--item form__input--txt"></p>
                        </dd>
                      </dl>
                      <ul class="btns">
                        <li class="btns__btn">
                          <button type="button" class="btn btn__correct"> 内容の修正 </button>
                        </li>
                        <li class="btns__btn">
                          <button type="button" class="btn btn__send bgChange"> 送信 </button>
                        </li>
                      </ul>
                    </div>
                    <div class="form__item thanks__box">
                      <dl>
                        <dt>お問い合わせ、ありがとうございました</dt>
                        <dd>自動返信メールをお送りしておりますのでご確認ください。</dd>
                      </dl>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>
<?php get_footer(); ?>
