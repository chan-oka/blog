<?php
////////////////////////////
//パンくずリスト
////////////////////////////
  if (is_category()) {
    get_template_part('breadcrumbs');
  }
?>

<?php
////////////////////////////
//アーカイブのタイトル
////////////////////////////
if (!is_home() && !is_search()) { ?>
  <h1 id="archive-title"><q>
    <?php if( is_category() ) { ?>
    <?php single_cat_title(); ?>
    <?php } elseif( is_tag() ) { ?>
    <?php single_tag_title(); ?>
    <?php } elseif( is_tax() ) { ?>
    <?php single_term_title(); ?>
    <?php } elseif (is_day()) { ?>
    <?php echo get_the_time( get_theme_text_ymd_format() );//年月日のフォーマットを取得 ?>
    <?php } elseif (is_month()) { ?>
    <?php echo get_the_time( get_theme_text_ym_format() );//年と月のフォーマットを取得 ?>
    <?php } elseif (is_year()) { ?>
    <?php echo get_the_time( get_theme_text_y_format() );//年のフォーマットを取得 ?>
    <?php } elseif (is_author()) { ?>
    <?php echo esc_html(get_queried_object()->display_name); ?>
    <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    Archives
    <?php } else { ?>
    Archives
    <?php } ?>
  </q><?php echo get_theme_text_list();//「一覧」部分の取得 ?>
  </h1>
<?php } ?>


<?php
////////////////////////////
//トップの広告
////////////////////////////
if (!is_home() || is_ads_top_page_visible())//メインページ以外は広告を出す
  get_template_part('ad-top');//記事トップ広告 ?>

<?php
////////////////////////////
//カテゴリ説明文の挿入
////////////////////////////
if (is_category() && //カテゴリページの時
          !is_paged() &&   //カテゴリページのトップの時
          category_description()) : //カテゴリの説明文が空でない時 ?>
<!-- カテゴリの説明文 -->
<div class="category-description"><?php echo category_description(); ?></div>
<?php endif; ?>

<div id="list">
<!-- 記事一覧 -->
<?php
////////////////////////////
//一覧の繰り返し処理
////////////////////////////
if (have_posts()) : // WordPress ループ
  $count = 0;
  while (have_posts()) : the_post(); // 繰り返し処理開始
    $count += 1;
    if ( is_list_style_bodies() ) {//一覧表示スタイルが本文表示
      get_template_part('entry-body');//一覧表示スタイルが本文表示の場合
    } else {//サムネイルカードか、大きなサムネイルカードの場合
      //一覧表示スタイルがカードor大きなサムネイルカード表示の場合
      get_template_part('entry-card');
    }

    //トップページ中間に広告をできるかどうか（表示するかどうか）
    if ( is_ads_list_in_middle_on_top_page_enable($count) ) {
      get_template_part('ad');
    }

  endwhile; // 繰り返し処理終了 ?>
  <div class="clear"></div>
<?php else : // ここから記事が見つからなかった場合の処理  ?>
    <div class="post">
      <h2>NOT FOUND</h2>
      <p>お探しの記事は見つかりませんでした。</p>
    </div>
<?php
endif;
?>
</div><!-- /#list -->

<?php if (!is_home() || is_ads_top_page_visible()) ://メインページ以外は広告を出す
  get_template_part('ad-article-footer' );
endif; ?>

<?php get_template_part('pager-paginate-links');//エントリーのページャー?>