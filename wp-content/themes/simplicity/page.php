<?php get_header(); ?>

  <?php get_template_part('breadcrumbs-page'); //固定ページパンくずリスト?>
  <?php
  if (have_posts()) : // WordPress ループ
    while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="article">

        <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
        <p class="post-meta">
          <?php get_template_part('datetime') //投稿日と更新日?>

          <?php get_template_part('edit-link') //編集リンク?>

          <?php wlw_edit_post_link('WLWで編集', '<span class="wlw-edit"><i class="fa fa-pencil-square-o fa-fw"></i>', '</span>'); ?>
        </p>

        <?php get_template_part('ad-top');//記事トップ広告 ?>

        <div id="the-content">
        <?php the_content(); //本文の呼び出し?>
        </div>

        <?php get_template_part('pager-page-links');//ページリンクのページャー?>

        <?php get_template_part('ad-article-footer');//本文下広告?>

        <?php if ( is_page() )://固定ページのときのみ表示 ?>
        <div id="sns-group">
        <?php get_template_part('sns-buttons'); //SNSシェアボタンの取得?>

        <?php get_template_part('sns-pages'); //SNSフォローボタンの取得?>
        </div>
        <?php endif;//is_page ?>

        <p class="footer-post-meta">

          <?php get_template_part('author-link') //投稿者リンク?>

          <?php get_template_part('edit-link') //編集リンク?>
        </p>
        </div><!-- .article -->
      </div><!-- .page -->
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