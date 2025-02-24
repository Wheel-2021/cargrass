
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

  <footer class="footer">
    <div class="footer__wrap">
      <div class="footerUpper">
        <div class="companyInfo">
          <p class="name"><?php echo $company_name["value"]; ?></p>
          <p class="address"><?php echo $company_address["value"]; ?></p>
          <div class="info">
            <dl class="info__item">
              <dt class="infoItem__ttl"><?php echo $company_phone["label"]; ?></dt>
              <dd class="infoItem__txt"><a href="tel:<?php echo $company_phone["value"]; ?>"><?php echo $company_phone["value"]; ?></a></dd>
            </dl>
            <dl class="info__item">
              <dt class="infoItem__ttl"><?php echo $company_fax["label"]; ?></dt>
              <dd class="infoItem__txt"><?php echo $company_fax["value"]; ?></dd>
            </dl>
            <dl class="info__item">
              <dt class="infoItem__ttl"><?php echo $company_holiday["label"]; ?></dt>
              <dd class="infoItem__txt"><?php echo $company_holiday["value"]; ?></dd>
            </dl>
            <dl class="info__item">
              <dt class="infoItem__ttl"><?php echo $company_hour["label"]; ?></dt>
              <dd class="infoItem__txt"><?php echo $company_hour["value"]; ?></dd>
            </dl>
          </div>
        </div>
        <div class="pc">
        <?php wp_nav_menu(array(
          'theme_location'  => 'footer',
          'container'       => 'ul',
          'menu_class' => 'footerNavi__wrap',
          'fallback_cb' => false,
        )); ?>
        </div>
        <div class="sp">
        <?php wp_nav_menu(array(
          'theme_location'  => 'headerSP',
          'container'       => 'ul',
          'menu_class' => 'footerNavi__wrap',
          'fallback_cb' => false,
        )); ?>
        </div>
      </div>
      <div class="footerLower">
        <p class="copyright">© 2025 GRASS.Inc</p>
        <div class="subMenu pc">
        <?php wp_nav_menu(array(
          'theme_location'  => 'footerSub',
          'container'       => 'ul',
          'menu_class' => 'footerSubNavi__wrap',
          'fallback_cb' => false,

        )); ?>

        </div>
        <?php if ($insta_url["value"] ): ?>
          <a href="<?php echo $insta_url["value"]; ?>" target="_blank" aria-label="Instagramページへ" class="instagram white">
            <svg version="1.1" viewBox="0 0 31 31" class="instagram__icon">
              <path d="M9.4,1.1c-1.6,0-2.7.3-3.6.7-1,.4-1.8.9-2.7,1.7-.8.8-1.3,1.7-1.7,2.7-.4,1-.6,2-.7,3.6,0,1.6,0,2.1,0,6.2,0,4.1,0,4.6.1,6.2,0,1.6.3,2.7.7,3.6.4,1,.9,1.8,1.7,2.6.8.8,1.7,1.3,2.7,1.7.9.4,2.1.6,3.6.7,1.6,0,2.1,0,6.2,0,4.1,0,4.6,0,6.2-.1,1.6,0,2.7-.3,3.6-.7,1-.4,1.8-.9,2.6-1.7.8-.8,1.3-1.7,1.7-2.7.4-1,.6-2,.7-3.6,0-1.6,0-2.1,0-6.2,0-4.1,0-4.6-.1-6.2,0-1.6-.3-2.7-.7-3.6-.4-1-.9-1.8-1.7-2.7s-1.7-1.3-2.7-1.7c-1-.4-2-.6-3.6-.7-1.6,0-2.1,0-6.2,0-4.1,0-4.6,0-6.2,0M9.6,28.2c-1.5,0-2.3-.3-2.8-.5-.7-.3-1.2-.6-1.7-1.1s-.8-1-1.1-1.7c-.2-.5-.5-1.3-.5-2.8,0-1.6,0-2.1,0-6.1,0-4,0-4.5,0-6.1,0-1.5.3-2.3.5-2.8.3-.7.6-1.2,1.1-1.7s1-.8,1.7-1.1c.5-.2,1.3-.5,2.8-.5,1.6,0,2.1,0,6.1,0,4,0,4.5,0,6.1,0,1.5,0,2.3.3,2.8.5.7.3,1.2.6,1.7,1.1.5.5.9,1,1.1,1.7.2.5.5,1.3.5,2.8,0,1.6,0,2.1.1,6.1,0,4,0,4.5,0,6.1,0,1.5-.3,2.3-.5,2.8-.3.7-.6,1.2-1.1,1.7-.5.5-1,.9-1.7,1.1-.5.2-1.3.5-2.8.5-1.6,0-2.1,0-6.1.1-4,0-4.5,0-6.1,0M21.8,8c0,1,.8,1.8,1.8,1.8s1.8-.8,1.8-1.8-.8-1.8-1.8-1.8-1.8.8-1.8,1.8M7.9,16c0,4.2,3.5,7.7,7.7,7.7s7.7-3.5,7.7-7.7c0-4.2-3.5-7.7-7.7-7.7-4.2,0-7.7,3.5-7.7,7.7M10.6,16c0-2.8,2.2-5,5-5,2.8,0,5,2.2,5,5,0,2.8-2.2,5-5,5-2.8,0-5-2.2-5-5"/>
            </svg>
          </a>
          <?php endif ?>
      </div>
    </div>

  </footer>

  <a href="#" aria-label="ページ上部へ" class="goTop">
    <div class="goTop__wrap">

    </div>
  </a>

  <div class="banner pc">
    <p class="ttl"><?php echo $sales_ttl["value"]; ?></p>
    <ul class="salesWebsite__wrap">
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
            <img src="<?php echo $sales_image_2["value"]; ?>" alt="<?php echo $sales_alt_2["value"]; ?>" width="137" height="21" class="website__icon" />
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
</body>

<?php wp_footer(); ?>
</html>
