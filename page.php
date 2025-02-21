<?php get_header(); ?>
  <main class="subPage contentsArea">
    <article class="subPage__wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <section class="contents__base">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl"></h2>
            <p class="subTtl__small"></p>

            <div class="contents__wrap">
              <div class="contents__left">

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
