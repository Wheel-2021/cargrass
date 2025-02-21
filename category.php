<?php get_header(); ?>
<main class="subPage contentsArea">
    <article class="subPage__wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="contents__base">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl">
              Category
            </h2>
            <p class="subTtl__small">
              カテゴリー
            </p>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right">
                <h3 class="mainTtl">
                  <?php
                    $cat = get_category($cat);
                    $cat_name = $cat->name;
                  ?>
                  <?php echo $cat_name; ?>一覧
                </h3>
                <div class="content">
                  <?php
                    $cat_id = $cat->cat_ID ;
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                    'posts_per_page' => -1,
                    'cat' => $cat_id,
                    'paged' => $paged );
                    $wp_query = new WP_Query( $args );
                  ?>

                  <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                  <dl class="news__list">
                    <dt class="newsList__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></dt>
                    <dd class="newsList__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    <dd class="newsList__btn"><a href="<?php the_permalink(); ?>" class="btn__small black" aria-label="ニュース詳細へ">読む</a></dd>
                  </dl>

                  <?php endwhile; wp_reset_postdata(); ?>
                  <?php else : ?>
                  <p class="text">まだ記事はありません。</p>
                  <?php endif; wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>

<?php get_footer(); ?>
