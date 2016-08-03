<?php //投稿をのリスト表示のループ内で呼び出されるサムネイルカード ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('entry'.(is_list_style_large_thumb_cards() ? ' entry-large-thumbnail' : '').(is_list_style_thumb_cards() ? ' entry-card' : '')) ?>>
  <div class="entry-thumb">
    <?php if ( is_list_style_thumb_cards() ): //デフォルトのサムネイルカード表示の場合?>
      <?php if ( has_post_thumbnail() ): // サムネイルを持っているとき ?>
        <a href="<?php the_permalink(); ?>" class="entry-image entry-image-link" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'thumb150', array('class' => 'entry-thumnail', 'alt' => get_the_title()) ); ?></a>
      <?php else: // サムネイルを持っていない ?>
        <a href="<?php the_permalink(); ?>" class="entry-image entry-image-link" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="NO IMAGE" class="entry-thumnail no-image list-no-image" /></a>
      <?php endif; ?>
    <?php else: //大きなサムネイルカードの場合?>
      <?php if ( has_post_thumbnail() ): // サムネイルを持っているとき
        //サムネイル画像の縦横比を保存するかどうかで取得するサムネイルを変化
        $thumb = ( is_list_style_tile_thumb_cards_raw() ? 'thumb320_raw' : 'thumb320') ?>
        <a href="<?php the_permalink(); ?>" class="entry-image entry-image-link" title="<?php the_title(); ?>"><?php the_post_thumbnail($thumb , array('class' => 'entry-thumnail', 'alt' => get_the_title()) ); ?></a>
      <?php else: // サムネイルを持っていないとき ?>
        <a href="<?php the_permalink(); ?>" class="entry-image entry-image-link" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image-320.png" alt="NO IMAGE" class="entry-thumnail no-image list-no-image" /></a>
      <?php endif; ?>
    <?php endif; ?>
  </div><!-- /.entry-thumb -->
  <div class="entry-content">

    <h2><a href="<?php the_permalink(); ?>" class="entry-title entry-title-link" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <p class="post-meta">
      <?php if ( is_create_date_visible() ): //投稿日を表示する場合?>
      <span class="post-date"><i class="fa fa-clock-o fa-fw"></i><?php the_time( get_theme_text_date_format() ) ;?></span>
      <?php endif; //is_create_date_visible?>

      <?php if ( is_category_visible() && //カテゴリを表示する場合
                 get_the_category() ): //投稿ページの場合?>
      <span class="category"><i class="fa fa-folder fa-fw"></i><?php the_category(', ') ?></span>
      <?php endif; //is_category_visible?>
    </p><!-- /.post-meta -->
    <p class="entry-snippet"><?php echo get_the_custom_excerpt( get_the_content(''), get_excerpt_length() ); //カスタマイズで指定した文字の長さだけ本文抜粋?></p>

    <?php if ( get_theme_text_read_entry() ): //「記事を読む」のようなテキストが設定されている時 ?>
<p class="entry-read"><a href="<?php the_permalink(); ?>" class="entry-read-link"><?php echo get_theme_text_read_entry(); //記事を読む ?></a></p>
    <?php endif; ?>

  </div><!-- /.entry-content -->
</div>