<?php
//////////////////////////////////////////////////
//タイトルタグ<title>に関する設定を書くテンプレート
////////////////////////////////////////////////// ?>
<title><?php
global $page, $paged;
if(is_front_page()):
  echo trim( get_bloginfo('name') );
  if ( is_catch_phrase_to_frontpage_title() )://キャッチフレーズを追加する場合
    echo ' | ' . trim( get_bloginfo('description') );
  endif;
elseif(is_singular()):
  echo trim( wp_title('',false) );
  if ( is_site_name_to_singular_title() )://サイト名を追加する場合
    echo ' | ' . trim( get_bloginfo('name') );
  endif;
elseif(is_archive()):
  wp_title('|',true,'right');
  bloginfo('name');
elseif(is_search()):
  wp_title('|',true,'right');
  bloginfo('name');
elseif(is_404()):
  echo'404 - ';
  echo trim( get_bloginfo('name') );
else:
  echo trim( wp_title('',false) );
endif;
if($paged >= 2 || $page >= 2):
  echo'-'.sprintf('%sページ',
  max($paged,$page));
endif;
?></title>
