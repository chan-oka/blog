<!-- OGP -->
<meta property="og:type" content="<?php echo (is_singular() ? 'article' : 'website'); ?>">
<?php
if (is_singular()){//単一記事ページの場合
if(have_posts()): while(have_posts()): the_post();
  echo '<meta property="og:description" content="'.get_the_description().'">';echo "\n";//抜粋を表示
endwhile; endif;
  echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//単一記事タイトルを表示
  echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//単一記事URLを表示
} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
  echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログの説明文を表示
  echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのタイトルを表示
  echo '<meta property="og:url" content="'; echo home_url(); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのURLを表示取る
}
$content = '';
if ( isset( $post->post_content ) ){
  $content = $post->post_content;
}
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿にイメージがあるか調べる
if (is_singular()){//単一記事ページの場合
  if (has_post_thumbnail()){//投稿にサムネイルがある場合の処理
    $image_id = get_post_thumbnail_id();
    $image = wp_get_attachment_image_src( $image_id, 'full');
    echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
  } else if ( preg_match( $searchPattern, $content, $imgurl ) && !is_archive()) {//投稿にサムネイルは無いが画像がある場合の処理
    echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
  } else {//投稿にサムネイルも画像も無い場合の処理
    $ogp_image = get_stylesheet_directory_uri().'/images/og-image.jpg';
    echo '<meta property="og:image" content="'.$ogp_image.'">';echo "\n";
  }
} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
  if ( get_ogp_home_image() ) {
    $ogp_image = get_ogp_home_image();
  } else {
    if (get_header_image()){//ヘッダーイメージがある場合は、ヘッダーイメージを
      $ogp_image = get_header_image();
    } else {//ヘッダーイメージがない場合は、テーマのスクリーンショット
      $ogp_image = get_stylesheet_directory_uri().'/screenshot.png';
    }
  }
  echo '<meta property="og:image" content="'.$ogp_image.'">';echo "\n";
}
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" content="ja_JP" />
<?php if ( get_fb_admins() ): //fb:adminsの取得?>
<meta property="fb:admins" content="<?php echo get_fb_admins(); ?>">
<?php endif; ?>
<?php if ( get_fb_app_id() ): //fb:app_idの取得?>
<meta property="fb:app_id" content="<?php echo get_fb_app_id(); ?>">
<?php endif; ?>
<!-- /OGP -->
