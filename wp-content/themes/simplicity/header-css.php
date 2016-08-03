<?php
///////////////////////////////////////////
//ヘッダーのCSSに関連する記述をまとめて書く
///////////////////////////////////////////
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php //PCでサイドバーをレスポンシブ表示設定がオンの時（完全レスポンシブ機能がオンの時とモバイルの時は設定関係なくレスポンシブ表示する）
if ( is_responsive_responsive_pc_sidebar_enable() || is_responsive_enable() || is_mobile() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-pc.css">
<?php endif; ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/webfonts/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/webfonts/icomoon/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fluidity.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" type="text/css" media="print" />
<?php
if ( get_skin_file() ): //設定されたスキンがある場合?>
  <link rel="stylesheet" href="<?php echo get_skin_file(); ?>">
<?php endif; //設定されたスキン
?>
<?php if ( is_comment_type_thread() )://2chコメントタイプ ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/thread.css">
  <?php if ( is_mobile() && !is_responsive_enable() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/thread-mobile.css">
  <?php endif; //is_mobile && !is_responsive_enable()?>
  <?php if ( is_responsive_enable() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/thread-responsive.css">
  <?php endif; //is_responsive_enable?>
<?php elseif ( is_comment_type_thread_simple() )://シンプルなスレッドコメントタイプ ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/thread-simple.css">
<?php endif; //コメントタイプ終了?>