<?php get_header(); ?>
  <main class="subPage contentsArea">
    <article class="subPage__wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="contents__base">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl">News</h2>
            <p class="subTtl__small">ニュース</p>

            <div class="contents__wrap">
              <div class="contents__left">
                <div class="subBox">
                  <p class="date">
                    <time datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time('Y.m.d'); ?>
                    </time>
                  </p>

                  <?php $post_archive_url = get_post_type_archive_link('post'); ?>
                  <a href="<?php echo esc_url($post_archive_url); ?>" class="btn__small white" aria-label="ニュース一覧へ">
                    一覧
                  </a>
                  <!-- <?php echo the_category(); ?>

                  <?php the_tags( '<ul class="tag"><li class="tag__item">', ' </li><li class="tag__item">', '</li></ul>' ); ?> -->
                </div>
              </div>
              <div class="contents__right">
                <h3 class="mainTtl"><?php the_title(); ?></h3>
                <div class="content">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>
<?php get_footer(); ?>
