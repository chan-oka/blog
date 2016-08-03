
          </div><!-- /#main -->
        <?php get_sidebar(); ?>

        </div><!-- /#body-in -->
      </div><!-- /#body -->

      <!-- footer -->
      <div id="footer">
        <div id="footer-in">

        <div id="footer-widget">
           <div class="footer-left">
           <?php if ( dynamic_sidebar('footer-left') ) : else : ?>
           <?php endif; ?>
           </div>
           <div class="footer-center">
           <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-center') ) : else : ?>
           <?php endif; ?>
           </div>
           <div class="footer-right">
           <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-right') ) : else : ?>
           <?php endif; ?>
           </div>
        </div>
        <div class="clear"></div>
          <div id="copyright" class="wrapper">
            WordPress Theme <a href="http://wp-simplicity.com/" rel="nofollow">Simplicity</a><br />

            <?php echo get_site_license(); //サイトのライセンス表記の取得 ?>

            <?php if ( is_local_test() && is_responsive_test_visible() ): //ローカルかつ設定で表示になっている場合のみ?>
              <br /><a href="<?php echo get_template_directory_uri().'/responsive-test/?'.get_this_page_url(); ?>" target="_blank" rel="nofollow">レスポンシブテスト</a>
            <?php endif; ?>
          </div>
      </div><!-- /#footer-in -->
      </div><!-- /#footer -->
      <?php get_template_part('button-go-to-top'); //トップへ戻るボタンテンプレート?>
      <?php get_template_part('buttons-footer-mobile'); //フッターモバイルボタンのテンプレート?>
    </div><!-- /#container -->
    <?php get_template_part('footer-custom-field');//カスタムフィールドの挿入（カスタムフィールド名：footer_custom）?>
    <?php get_template_part('analytics'); //アクセス解析用テンプレート?>
    <?php get_template_part('footer-slicknav'); //SlickNav用のテンプレート（ツリー式モバイル用メニュー）?>
    <?php get_template_part('footer-javascript'); //フッターで呼び出すJavaScript用のテンプレート?>
    <?php get_template_part('footer-insert'); //</body>手前のフッターにタグを挿入したいとき用のテンプレート?>
    <?php wp_footer(); ?>
  </body>
</html>