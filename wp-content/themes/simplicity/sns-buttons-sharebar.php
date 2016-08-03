<?php //スクロール追従のサイドバーSNSシェアボタン ?>
<?php if (!is_mobile() && //PC表示のときかつ
  is_all_sns_share_btns_visible() &&//SNSボタンが表示のときかつ
  is_obsequence_sns_btns_visible() ): //サイドに追従SNSボタンが表示のとき?>
  <!-- 追従SNSボタン -->
  <div id="sharebar">
    <?php get_template_part('sns-buttons'); ?>
  </div>
<?php endif; ?>