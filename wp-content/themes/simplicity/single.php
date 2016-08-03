<?php get_header(); ?>

  <?php get_template_part('breadcrumbs'); //カテゴリパンくずリスト?>
  <?php
  if (have_posts()) : // WordPress ループ
    while (have_posts()) : the_post(); // 繰り返し処理開始
      get_template_part('entry-body'); //本文記事の呼び出し?>

      <section id="under-entry-body">

      <?php if ( is_related_entry_visible() ): //関連記事を表示するか?>
      <div id="related-entries">
        <h3><?php echo get_theme_text_related_entry();//関連記事タイトルの取得 ?></h3>
        <?php if (is_related_entry_type_default()) {
          get_template_part('related-entries');
        } else{
          get_template_part('related-entries-thumbnail');
        }  ?>
      </div><!-- #related-entries -->
      <?php endif; //is_related_entry_visible?>



      <?php if ( is_ads_under_relations_enable() ){//関連記事下広告が有効のとき
        get_template_part('ad');
      }?>

      <?php
        if ( is_post_navi_visible() ) {//「前の記事」「次の記事」を表示するか
          if ( is_post_navi_type_default() ) {//「前の記事」「次の記事」ナビタイプはデフォルトか
            get_template_part('pager-post-navi'); //デフォルトナビのテンプレート
          } else {//「前の記事」「次の記事」ナビタイプはサムネイルか
            get_template_part('pager-post-navi-thumbnail'); //サムネイルナビのテンプレート
          }
        }
      ?>

      <?php
        if ( is_comments_visible() ) {//コメント・コメント欄を表示するか
          comments_template(); //コメントテンプレート
        }
      ?>
      </section>
    <?php
    endwhile; // 繰り返し処理終了
  else : // ここから記事が見つからなかった場合の処理 ?>
      <div class="post">
        <h2>NOT FOUND</h2>
        <p><?php echo get_theme_text_not_found_message();//記事は見つかりませんでした ?></p>
      </div>
  <?php
  endif;
  ?>

<?php get_footer(); ?>