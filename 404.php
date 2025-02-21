<?php get_header(); ?>
  <main class="subPage contentsArea">
    <article class="subPage__wrap" <?php post_class(); ?>>
      <section class="contents__base">
        <div class="contents__base--inner">
          <div class="contentsBase__wrap">
            <h2 class="subTtl">404</h2>
            <p class="subTtl__small">NOT FOUND</p>

            <div class="contents__wrap">
              <div class="contents__left">

              </div>
              <div class="contents__right">
                <h3 class="mainTtl">お探しのページが見つかりません</h3>
                <p class="text">申し訳ございません。お探しのページがみつかりませんでした。<br />ページが無いか、URLが変更された可能性があります。<br /><a href="<?php echo esc_url( home_url() ); ?>/sitemap">サイトマップ</a>から目的のページをお探しください。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>
<?php get_footer(); ?>
