<?php //SNSページのフォローボタン ?>
<?php if ( is_all_sns_follow_btns_visible() ): //全てのフォローボタンを表示するかどうか?>
<!-- SNSページ -->
<div class="sns-pages">
<?php if ( get_follow_msg() ): //フォローメッセージがあるか?>
<p class="sns-follow-msg"><?php echo esc_html( get_follow_msg() ); //フォローメッセージの取得?></p>
<?php endif; ?>
<ul class="snsp">
<?php if ( get_twitter_follow_id() )://Twitterフォローボタンを表示するか ?><li class="twitter-page"><a href="https://twitter.com/<?php echo esc_html( get_twitter_follow_id() ); //TwitterフォローIDの取得?>" target="_blank" title="Twitterをフォロー" rel="nofollow"><i class="fa fa-twitter-square"></i></a></li><?php endif; ?>
<?php if ( get_facebook_follow_id() )://Facebookフォローボタンを表示するか ?><li class="facebook-page"><a href="https://www.facebook.com/<?php echo esc_html( get_facebook_follow_id() ); //FacebookフォローIDの取得?>" target="_blank" title="Facebookをフォロー" rel="nofollow"><i class="fa fa-facebook-square"></i></a></li><?php endif; ?>
<?php if ( get_google_plus_follow_id() )://Google＋フォローボタンを表示するか ?><li class="google-plus-page"><a href="https://plus.google.com/<?php echo esc_html( get_google_plus_follow_id() ); //Google＋フォローIDの取得 ?>" target="_blank" title="Google＋をフォロー" rel="nofollow publisher"><i class="fa fa-google-plus-square"></i></a></li><?php endif; ?>
<?php if ( get_hatebu_id() )://はてブフォローボタンを表示するか ?><li class="hatebu-page"><a href="http://b.hatena.ne.jp/<?php echo esc_html( get_hatebu_id() ); //はてブフォローIDの取得 ?>" target="_blank" title="はてブをフォロー" rel="nofollow"><i class="icon-hatebu-square"></i></a></li><?php endif; ?>
<?php if ( get_instagram_follow_id() )://Instagramフォローボタンを表示するか ?><li class="instagram-page"><a href="http://instagram.com/<?php echo esc_html( get_instagram_follow_id() ); //InstagramフォローIDの取得 ?>" target="_blank" title="Instagramをフォロー" rel="nofollow"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
<?php if ( get_pinterest_follow_id() )://Pinterestフォローボタンを表示するか ?><li class="pinterest-page"><a href="https://www.pinterest.com/<?php echo esc_html( get_pinterest_follow_id() ); //PinterestフォローIDの取得 ?>" target="_blank" title="Pinterestをフォロー" rel="nofollow"><i class="fa fa-pinterest-square"></i></a></li><?php endif; ?>
<?php if (  get_youtube_follow_url() )://YouTubeフォローボタンを表示するか ?><li class="youtube-page"><a href="<?php echo esc_html(  get_youtube_follow_url() ); //YouTubeフォローURLの取得 ?>" target="_blank" title="YouTubeをフォロー" rel="nofollow"><i class="fa fa-youtube-square"></i></a></li><?php endif; ?>
<?php if ( get_line_at_id() && is_mobile() )://LINE@フォローボタンを表示するか ?><li class="line-page"><a href="http://line.me/ti/p/%40<?php echo esc_html(  get_line_at_id() ); //YouTubeフォローURLの取得 ?>" target="_blank" title="LINE@をフォロー" rel="nofollow"><i class="icon-line-square"></i></a></li><?php endif; ?>
<?php if ( is_feedly_follow_btn_visible() )://feedlyフォローボタンを表示するか ?><li class="feedly-page"><a href='http://feedly.com/index.html#subscription%2Ffeed%2F<?php echo rawurlencode(get_bloginfo("rss2_url")); ?>' target='blank' title="feedlyで更新情報をフォロー" rel="nofollow"><i class="icon-feedly-square"></i></a></li><?php endif; ?>
<?php if ( is_rss_follow_btn_visible() )://RSSフォローボタンを表示するか ?><li class="rss-page"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="RSSで更新情報をフォロー" rel="nofollow"><i class="fa fa-rss-square fa-2x"></i></a></li><?php endif; ?>
  </ul>
</div>
<?php endif; ?>