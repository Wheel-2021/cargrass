<?php get_header(); ?>
<main class="subPage contentsArea">
    <article class="subPage__wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="contents__base">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl">
              <?php
                if (is_category()) {
                    echo "Category";
                } elseif (is_tag()) {
                    echo "Tag";
                } elseif (is_tax()) {
                    echo "Category";
                } elseif (is_day()) {
                    echo "Day:" . get_the_time('Y年m月d日');
                } elseif (is_month()) {
                    echo "Month:" . get_the_time('Y年m月');
                } elseif (is_year()) {
                    echo "Year:" . get_the_time('Y年');
                } elseif (is_author()) {
                    echo "Author:" . esc_html(get_queried_object()->display_name);
                } else {
                    echo "News";
                }
              ?>
            </h2>
            <p class="subTtl__small">
              <?php
                if (is_category()) {
                    echo "カテゴリー";
                } elseif (is_tag()) {
                    echo "タグ";
                } elseif (is_tax()) {
                    echo "カテゴリー";
                } elseif (is_day()) {
                    echo "日別：" . get_the_time('Y年m月d日');
                } elseif (is_month()) {
                    echo "月別：" . get_the_time('Y年m月');
                } elseif (is_year()) {
                    echo "年別：" . get_the_time('Y年');
                } elseif (is_author()) {
                    echo "投稿者：" . esc_html(get_queried_object()->display_name);
                } else {
                    echo "ニュース";
                }
              ?>
            </p>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right">
                <h3 class="mainTtl">
                  <?php
                    if (is_category()) {
                        echo "カテゴリー";
                    } elseif (is_tag()) {
                        echo "タグ";
                    } elseif (is_tax()) {
                        echo "カテゴリー";
                    } elseif (is_day()) {
                        echo "日別：" . get_the_time('Y年m月d日');
                    } elseif (is_month()) {
                        echo "月別：" . get_the_time('Y年m月');
                    } elseif (is_year()) {
                        echo "年別：" . get_the_time('Y年');
                    } elseif (is_author()) {
                        echo "投稿者：" . esc_html(get_queried_object()->display_name);
                    } else {
                        echo "投稿";
                    }
                  ?>
                  一覧
                </h3>
                <div class="content">
                  <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                    'post_type'      => array('post'),
                    'paged' => $paged );
                    $wp_query = new WP_Query( $args );
                  ?>

                  <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                  <dl class="news__list">
                    <dt class="newsList__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></dt>
                    <dd class="newsList__ttl"><a href="<?php the_permalink(); ?>" class="normalLink"><?php the_title(); ?></a></dd>
                    <dd class="newsList__btn"><a href="<?php the_permalink(); ?>" class="btn__small black" aria-label="ニュース詳細へ">読む</a></dd>
                  </dl>

                  <?php endwhile; wp_reset_postdata(); ?>
                  <?php else : ?>
                  <p class="text">まだ記事はありません。</p>
                  <?php endif; wp_reset_query(); ?>


                  <?php the_posts_pagination(
                      array(
                          'mid_size'      => 2,
                          'prev_next'     => false,
                          'type'          => 'list',
                      )
                  ); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>

<?php get_footer(); ?>
