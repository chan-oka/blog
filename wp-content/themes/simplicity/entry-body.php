<?php //投稿本文 ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="article<?php if ( !is_single() ) echo ' article-list'; ?>">
  <?php  if ( is_single() ) get_template_part('sns-buttons-sharebar'); //スクロール追従シェアバー ?>

  <h1 class="entry-title">
    <?php if ( !is_single() ) echo '<a href="'.get_permalink().'">'; //投稿ページ以外ではタイトルにリンクを貼る?>
    <?php the_title(); //投稿のタイトル?>
    <?php if ( !is_single() ) echo '</a>'; //投稿ページ以外ではタイトルにリンクを貼る?>
  </h1>
  <p class="post-meta">
    <?php get_template_part('datetime') //投稿日と更新日?>
    <?php if ( is_category_visible() && //カテゴリを表示する場合
               get_the_category() ): //投稿ページの場合?>
    <span class="category"><i class="fa fa-folder fa-fw"></i><?php the_category(', ') ?></span>
    <?php endif; ?>

    <?php get_template_part('edit-link'); //編集リンク?>

    <?php wlw_edit_post_link('WLWで編集', '<span class="wlw-edit"><i class="fa fa-pencil-square-o fa-fw"></i>', '</span>'); ?>
  </p>

  <?php if ( is_single() ) get_template_part('ad-top');//記事トップ広告 ?>

  <?php if ( is_single() ) get_template_part('sns-buttons-top');//タイトル下の小さなシェアボタン?>

  <?php if ( is_single() && is_active_sidebar( 'widget-over-article' ) ):
    //投稿本文上ウイジェット
    dynamic_sidebar( 'widget-over-article' );
  endif; ?>


  <?php if ( has_post_thumbnail() && is_eye_catch_visible() ): // サムネイルを持っているときの処理 ?>
  <div class="eye-catch"><?php the_post_thumbnail('large'); ?></div>
  <?php endif; ?>

  <div id="the-content">
  <?php //記事本文の表示
    the_content( get_theme_text_read_more() ); //デフォルト：続きを読む?>
  </div>

  <?php if ( is_single() ) get_template_part('pager-page-links');//ページリンクのページャー?>

  <?php if ( is_single() && is_active_sidebar( 'widget-under-article' ) ):
    //投稿本文下ウイジェット
    dynamic_sidebar( 'widget-under-article' );
  endif; ?>

  <?php if ( is_single() ) get_template_part('ad-article-footer');?>


  <?php if ( is_single() && is_active_sidebar( 'widget-over-sns-buttons' ) ) :
    //投稿SNSボタン上ウイジェット
    dynamic_sidebar( 'widget-over-sns-buttons' );
  endif;?>


  <div id="sns-group" class="sns-group sns-group-bottom">
  <?php if ( is_single() ) get_template_part('sns-buttons'); //SNSシェアボタンの取得?>

  <?php if ( is_single() &&
             is_body_bottom_follows_visible() ) //記事下フォローボタン表示のとき
               get_template_part('sns-pages'); //SNSフォーローボタンの取得?>
  </div>

  <?php if ( is_single() && is_active_sidebar( 'widget-under-sns-buttons' ) ) :
    //投稿SNSボタン下ウイジェット
    dynamic_sidebar( 'widget-under-sns-buttons' );
  endif;?>

  <p class="footer-post-meta">

    <?php if (is_tag_visible()): ?>
    <span class="post-tag"><?php the_tags('<i class="fa fa-tag fa-fw"></i>',', '); ?></span>
    <?php endif; ?>

    <?php get_template_part('author-link') //投稿者リンク?>

    <?php get_template_part('edit-link') //編集リンク?>

    <?php wlw_edit_post_link('WLWで編集', '<span class="wlw-edit"><i class="fa fa-pencil-square-o fa-fw"></i>', '</span>'); ?>
  </p>

  </div><!-- .article -->
  <?php if ( is_list_style_bodies() ): //本文リストスタイルの時?>
  <hr class="sep" />
  <?php endif; ?>
</div><!-- .post -->