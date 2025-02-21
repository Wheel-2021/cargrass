<?php get_header(); ?>
  <main id="luxy" class="contentsArea">
    <article class="subPage" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="layout__common width__normal blog">
        <span class="subTtl__normal mask__wrap">
          <span class="mask"></span>
          <span class="subTtl__normal--inner">
            <?php
                $cat = get_the_category();
                $cat = $cat[0];
                echo strtoupper($cat->slug);
            ?>
          </span>
        </span>
        <h1 class="ttl__normal mask__wrap">
          <span class="mask"></span>
          <span class="ttl__normal--inner">
            <?php
              $cat = get_category($cat);
              $cat_name = $cat->name;
            ?>
            <?php echo $cat_name; ?>一覧
          </span>
        </h1>

        <div class="blog__content">
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
            <div class="blog__item">
              <a href="<?php the_permalink(); ?>" class="img__wrap">
                <?php if ( has_post_thumbnail( $post->ID ) )
                    :
                      echo get_the_post_thumbnail( $post->ID, 'blog-thumbnail' );
                    else:
                ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="NO IMAGE" width="300" height="168" />
                <?php endif; ?>
              </a>
              <div class="blog__box--bottom">
                <?php the_category(); ?>
                <a href="<?php the_permalink(); ?>"><h3 class="blog__ttl"><?php the_title(); ?></h3></a>
                <p class="blog__txt"><?php echo get_the_excerpt(); ?></p>
                <div class="blog__attr">
                  <span class="blog__date"><?php echo get_the_date('Y.m.d'); ?></span>
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
