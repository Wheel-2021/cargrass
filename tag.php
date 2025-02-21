<?php get_header(); ?>
  <main id="luxy" class="contentsArea">
    <article class="subPage" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="layout__common width__normal news">
        <span class="subTtl__normal mask__wrap">
          <span class="mask"></span>
          <span class="subTtl__normal--inner">
            <?php
              global $post;
              echo strtoupper($post->post_name);
            ?>
          </span>
        </span>
        <h1 class="ttl__normal mask__wrap">
          <span class="mask"></span>
          <span class="ttl__normal--inner">
            <?php single_cat_title(); ?>一覧
          </span>
        </h1>

        <div class="news__content">
          <?php
            $tag = get_the_tags();
            $tag_slug = $tag[0]->slug;
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
            'posts_per_page' => -1,
            'tag' => $tag_slug,
            'paged' => $paged );
            $wp_query = new WP_Query( $args );
          ?>
          <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <div class="news__item">
              <a href="<?php the_permalink(); ?>" class="img__wrap">
                <?php if ( has_post_thumbnail( $post->ID ) )
                    :
                      echo get_the_post_thumbnail( $post->ID, 'news-thumbnail' );
                    else:
                ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="NO IMAGE" width="410" height="200" />
                <?php endif; ?>
              </a>
              <div class="news__box--bottom">
                <?php the_category(); ?>
                <a href="<?php the_permalink(); ?>"><h3 class="news__ttl"><?php the_title(); ?></h3></a>
                <div class="news__attr">
                  <span class="news__date"><?php echo get_the_date('Y.m.d'); ?></span>
                  <a href="<?php the_permalink(); ?>" class="anchor">
                  <span class="arrow__normal"></span>
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
          <?php else : ?>
          <p class="cat__noResult">まだ記事はありません。</p>
          <?php endif; wp_reset_query(); ?>
        </div>
      </section>
      <?php include(get_template_directory() . '/content-footer.php'); ?>
    </article>
    <div class="subPage__bg"></div>
  </main>
<?php get_footer(); ?>
