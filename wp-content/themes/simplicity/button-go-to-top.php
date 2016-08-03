<?php
//////////////////////////////////
// トップへ戻るボタンのテンプレート
//////////////////////////////////
if ( is_go_to_top_button_visible() ): //トップへ戻るボタンを表示するか?>
<div id="page-top">
  <a id="move-page-top"><i class="fa <?php echo get_go_to_top_button_icon_font(); //Font Awesomeアイコンフォントの取得 ?> fa-2x"></i></a>
</div>
<?php endif; ?>