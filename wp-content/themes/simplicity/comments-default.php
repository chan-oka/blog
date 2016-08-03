<!-- comment area -->
<div id="comment-area">
	<?php
	if(have_comments()): // コメントがあったら
	?>

		<h3 id="comments"><?php echo get_theme_text_comments(); //コメントタイトル ?></h3>

		<ol class="commets-list">
		<?php wp_list_comments('avatar_size=55'); //コメント一覧を表示 ?>
		</ol>

		<div class="comment-page-link">
				<?php paginate_comments_links(); //コメントが多い場合、ページャーを表示 ?>
		</div>
	<?php
	endif;

	// ここからコメントフォーム
	$args = array(
		'title_reply' => get_theme_text_comment_reply_title(),//コメントをどうぞ
		'label_submit' => get_theme_text_comment_submit_label(),//コメントを送信
	);
	comment_form($args);
	?>
</div>
<!-- /comment area -->