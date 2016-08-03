<?php //SNSシェアボタン用テンプレート、シェアボタンが表示されるときは全てこのテンプレートが呼び出されます ?>
<?php if ( is_all_sns_share_btns_visible() ):
  global $g_is_small; ?>
<div class="sns-buttons sns-buttons-pc">
  <?php if ( get_share_msg() ): //シェアボタン用のメッセージを取得?>
  <p class="sns-share-msg"><?php echo esc_html( get_share_msg() ) ?></p>
  <?php endif; ?>
  <ul class="snsb snsb-balloon clearfix">
    <?php if ( is_twitter_btn_visible() )://Twitterボタンを表示するか ?>
    <li class="balloon-btn twitter-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://twitter.com/search?q=<?php echo urlencode(get_permalink()); ?>" target="blank" class="arrow-box-link twitter-arrow-box-link" rel="nofollow">
            <span class="social-count twitter-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="http://twitter.com/share?text=<?php echo urlencode( get_the_title() ); ?>&amp;url=<?php the_permalink() ?><?php echo get_twitter_via_param(); //ツイートにTwitter ID ?>" target="blank" class="balloon-btn-link twitter-balloon-btn-link" rel="nofollow">
          <i class="icon-twitter"></i>
        </a>
      </span>
    </li>
    <?php endif; ?>
    <?php if ( is_facebook_btn_visible() )://Facebookボタンを表示するか ?>
    <li class="balloon-btn facebook-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&amp;t=<?php the_title() ?>" target="blank" class="arrow-box-link facebook-arrow-box-link" rel="nofollow">
            <span class="social-count facebook-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&amp;t=<?php echo urlencode( get_the_title() ); ?>" target="blank" class="balloon-btn-link facebook-balloon-btn-link" rel="nofollow">
          <i class="icon-facebook"></i>
        </a>
      </span>
    </li>
    <?php endif;?>
    <?php if ( is_google_plus_btn_visible() )://Google＋ボタンを表示するか ?>
    <li class="balloon-btn googleplus-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://plus.google.com/share?url=<?php echo rawurlencode(get_permalink($post->ID)) ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="blank" class="arrow-box-link googleplus-arrow-box-link" rel="nofollow">
            <span class="social-count googleplus-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://plus.google.com/share?url=<?php echo rawurlencode(get_permalink($post->ID)) ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="blank" class="balloon-btn-link googleplus-balloon-btn-link" rel="nofollow">
          <i class="icon-googleplus"></i>
        </a>
      </span>
    </li>
    <?php endif;?>
    <?php if ( is_hatena_btn_visible() )://はてなボタンを表示するか ?>
    <li class="balloon-btn hatena-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="<?php echo get_hatebu_url(get_permalink()); ?>" target="blank" class="arrow-box-link hatena-arrow-box-link" rel="nofollow">
            <span class="social-count hatebu-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="http://b.hatena.ne.jp/add?mode=confirm&amp;url=<?php the_permalink() ?>&amp;title=<?php echo get_encoded_title(trim(wp_title( '', false))) ?>" target="blank" class="balloon-btn-link hatena-balloon-btn-link" rel="nofollow">
          <i class="icon-hatena"></i>
        </a>
      </span>
    </li>
    <?php endif; ?>
    <?php if ( is_pocket_btn_visible() )://pocketボタンを表示するか ?>
    <li class="balloon-btn pocket-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://getpocket.com/edit?url=<?php the_permalink() ?>" target="blank" class="arrow-box-link pocket-arrow-box-link" rel="nofollow">
            <span class="social-count pocket-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://getpocket.com/edit?url=<?php the_permalink() ?>" target="blank" class="balloon-btn-link pocket-balloon-btn-link" rel="nofollow">
          <i class="icon-pocket"></i>
        </a>
      </span>
    </li>
    <?php endif; ?>
    <?php if ( is_line_btn_visible() && is_mobile())://LINEボタンを表示するか ?>
    <li class="balloon-btn line-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>" target="blank" class="arrow-box-link line-arrow-box-link" rel="nofollow">
            LINE!
          </a>
        </span>
        <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>" target="blank" class="balloon-btn-link line-balloon-btn-link" rel="nofollow">
          <i class="icon-line"></i>
        </a>
      </span>
    </li>
    <?php endif; ?>
    <?php if ( is_evernote_btn_visible() )://Evernoteボタンを表示するか ?>
    <li class="balloon-btn evernote-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="#" onclick="Evernote.doClip({url:'<?php the_permalink();?>',
    providerName:'<?php bloginfo('name'); ?>',
    title:'<?php the_title();?>',
    contentId:'the-content',
    }); return false;" target="blank" class="arrow-box-link evernote-arrow-box-link" rel="nofollow">
            CLIP!
          </a>
        </span>
        <a href="#" onclick="Evernote.doClip({url:'<?php the_permalink();?>',
    providerName:'<?php bloginfo('name'); ?>',
    title:'<?php the_title();?>',
    contentId:'the-content',
    }); return false;" target="blank" class="balloon-btn-link evernote-balloon-btn-link" rel="nofollow">
          <i class="icon-evernote"></i>
        </a>
      </span>
    </li>
    <?php endif; ?>
    <?php if ( is_feedly_btn_visible() )://feedlyボタンを表示するか ?>
    <li class="balloon-btn feedly-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="http://feedly.com/index.html#subscription%2Ffeed%2F<?php urlencode(bloginfo('rss2_url')); ?>" target="blank" class="arrow-box-link feedly-arrow-box-link" rel="nofollow">
            <span class="social-count feedly-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="http://feedly.com/index.html#subscription%2Ffeed%2F<?php urlencode(bloginfo('rss2_url')); ?>" target="blank" class="balloon-btn-link feedly-balloon-btn-link" rel="nofollow">
          <i class="icon-feedly"></i>
        </a>
      </span>
    </li>
    <?php endif; //is_feedly_btn_visible?>
    <?php get_template_part('sns-button-comments'); ?>
  </ul>
</div>
<?php endif; ?>