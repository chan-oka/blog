<?php //ウイジェット用の関数

///////////////////////////////////////////////////
//Simplicityウイジェットの追加
//参考：WordPressのウィジェットを自作するためのTips - かちびと.net
//http://kachibito.net/wordpress/custom/how-to-add-your-widget.html
///////////////////////////////////////////////////
class SimplicityWidgetItem extends WP_Widget {
	function SimplicityWidgetItem() {
    	parent::WP_Widget(false, $name = 'Simplicity新着・人気記事（要Popular Postsプラグイン）');
    }
    function widget($args, $instance) {
        extract( $args );
        $title_new = apply_filters( 'widget_title_new', $instance['title_new'] );
        $title_popular = apply_filters( 'widget_title_popular', $instance['title_popular'] );
        //表示数を取得
        $entry_count = apply_filters( 'widget_entry_count', $instance['entry_count'] );
        //表示タイプ
        $entry_type = apply_filters( 'widget_entry_type', $instance['entry_type'] );
        //固定ページを含める
        $is_pages_include = apply_filters( 'widget_is_pages_include', $instance['is_pages_include'] );
        $is_views_visible = apply_filters( 'widget_is_views_visible', $instance['is_views_visible'] );
        $range = apply_filters( 'range', $instance['range'] );
        $range_visible = apply_filters( 'range_visible', $instance['range_visible'] );
        $is_ranking_visible = apply_filters( 'is_ranking_visible', $instance['is_ranking_visible'] );
        //表示数をグローバル変数に格納
        //後で使用するテンプレートファイルへの受け渡し
        //表示数が設定されていない時は5にする
        global $g_entry_count;
        if ( !$entry_count ) $entry_count = 5;
        $g_entry_count = $entry_count;
        //表示タイプのデフォルト設定
        global $g_entry_type;
        if ( !$entry_type ) $entry_type ='default';
        $g_entry_type = $entry_type;
        //固定ページを含めるかのデフォルト設定
        global $g_is_pages_include;
        $g_is_pages_include = $is_pages_include;
        //ページビュー表示に格納
        global $g_is_views_visible;
        $g_is_views_visible = $is_views_visible;
        global $g_range;
        $g_range = ($range ? $range : 'all');
        global $g_widget_item;
        $g_widget_item = 'SimplicityWidgetItem';
    	?>
          <?php if ( is_home() ) { //トップリストの場合?>
            <div id="popular-entries" class="widget widget_new_popular">
              <h4><?php if ($title_popular) {
                echo $title_popular;
              } else {
                echo '人気記事';
              }
                ?></h4>
            <?php if ( $is_ranking_visible ) {//ランキングの表示
              echo get_popular_posts_ranking_style('.widget_new_popular');
            }  ?>
            <?php if (function_exists('wpp_get_mostpopular') && //Wordpress Popular Postsがインストールされているかどうか
                      is_wpp_enable()) { //Wordpress Popular Postsを?>
              <?php //PV順
              if ( $entry_type == 'default' ) {
                get_template_part('popular-posts-entries');//デフォルト
              } else {
                get_template_part('popular-posts-entries-large');//大きなサムネイル
              }?>
              <?php if ($range_visible) {
                echo get_range_tag($range);
              } ?>
            <?php } else { //Wordpress Popular Postsがインストールされていない?>
              <?php //コメント順
              if ( $entry_type == 'default' ) {
                get_template_part('popular-entries');//デフォルト
              } else {
                get_template_part('popular-entries-large');//大きなサムネイル
              } ?>
            <?php } ?>
            </div>
          <?php } else { //メインページ以外?>
            <div id="new-entries" class="widget widget_new_popular">
              <h4><?php if ($title_new) {
                echo $title_new;
              } else {
                echo '新着記事';
              }
                ?></h4>
              <?php //新着記事
              if ( $entry_type == 'default' ) {
                get_template_part('new-entries');//デフォルト
              } else {
                get_template_part('new-entries-large');//大きなサムネイル
              } ?>
            </div><!-- /#new-entries -->
          <?php } ?>
        <?php
    }
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      $instance['title_new'] = strip_tags($new_instance['title_new']);
      $instance['title_popular'] = trim($new_instance['title_popular']);
      $instance['entry_count'] = strip_tags($new_instance['entry_count']);
      $instance['entry_type'] = strip_tags($new_instance['entry_type']);
      $instance['is_pages_include'] = strip_tags($new_instance['is_pages_include']);
      $instance['is_views_visible'] = strip_tags($new_instance['is_views_visible']);
      $instance['range'] = strip_tags($new_instance['range']);
      $instance['range_visible'] = $new_instance['range_visible'];
      $instance['is_ranking_visible'] = strip_tags($new_instance['is_ranking_visible']);
        return $instance;
    }
    function form($instance) {
        if(empty($instance)){
          $instance = array(
            'title_new' => null,
            'title_popular' => null,
            'entry_count' => null,
            'entry_type' => null,
            'is_pages_include' => null,
            'is_views_visible' => null,
            'range' => null,
            'range_visible' => null,
            'is_ranking_visible' => null,
          );
        }
        $title_new = esc_attr($instance['title_new']);
        $title_popular = esc_attr($instance['title_popular']);
        $entry_count = esc_attr($instance['entry_count']);
        $entry_type = esc_attr($instance['entry_type']);
        $is_pages_include = esc_attr($instance['is_pages_include']);
        $is_views_visible = esc_attr($instance['is_views_visible']);
        $range = esc_attr($instance['range']);
        $range_visible = esc_attr($instance['range_visible']);
        $is_ranking_visible = esc_attr($instance['is_ranking_visible']);
        ?>
        <p>
          <label for="<?php echo $this->get_field_id('title_new'); ?>">
          <?php echo('新着記事のタイトル'); ?>
          </label>
          <input class="widefat" id="<?php echo $this->get_field_id('title_new'); ?>" name="<?php echo $this->get_field_name('title_new'); ?>" type="text" value="<?php echo $title_new; ?>" />
        </p>

        <p>
           <label for="<?php echo $this->get_field_id('title_popular'); ?>">
           <?php echo('人気記事のタイトル'); ?>
           </label>
           <input class="widefat" id="<?php echo $this->get_field_id('title_popular'); ?>" name="<?php echo $this->get_field_name('title_popular'); ?>" type="text" value="<?php echo $title_popular; ?>" />
        </p>
        <?php //表示数入力フォーム ?>
        <p>
          <label for="<?php echo $this->get_field_id('entry_count'); ?>">
          <?php echo('表示数（半角数字、デフォルト：5）'); ?>
          </label>
          <input class="widefat" id="<?php echo $this->get_field_id('entry_count'); ?>" name="<?php echo $this->get_field_name('entry_count'); ?>" type="text" value="<?php echo $entry_count; ?>" />
        </p>
        <?php //表示タイプフォーム ?>
        <p>
          <label for="<?php echo $this->get_field_id('entry_type'); ?>">
          <?php echo('表示タイプ'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="default" <?php echo ( ($entry_type == 'default' || !$entry_type ) ? ' checked="checked"' : ""); ?> />デフォルト<br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="large_thumb"<?php echo ($entry_type == 'large_thumb' ? ' checked="checked"' : ""); ?> />大きなサムネイル<br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="large_thumb_on"<?php echo ($entry_type == 'large_thumb_on' ? ' checked="checked"' : ""); ?> />タイトルを重ねた大きなサムネイル<br />
        </p>
        <?php //固定ページの表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('is_pages_include'); ?>">
          <?php echo('固定ページの表示（Popular Posts）'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('is_pages_include'); ?>" name="<?php echo $this->get_field_name('is_pages_include'); ?>" type="checkbox" value="on"<?php echo ($is_pages_include ? ' checked="checked"' : ''); ?> />ランキングに固定ページを含める
        </p>
        <?php //集計単位の指定 ?>
        <p>
          <label for="<?php echo $this->get_field_id('range'); ?>">
          <?php echo('集計単位（Popular Posts）'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="daily"<?php echo ($range == 'daily' ? ' checked="checked"' : ''); ?> />1日<br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="weekly"<?php echo ($range == 'weekly' ? ' checked="checked"' : ''); ?> />1週間<br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="monthly"<?php echo ($range == 'monthly' ? ' checked="checked"' : ''); ?> />1ヶ月<br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="all"<?php echo ($range == null || $range == 'all' ? ' checked="checked"' : ''); ?> />全期間<br />
        </p>
        <?php //集計単位の表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('range_visible'); ?>">
          <?php echo('集計期間の表示（Popular Posts）'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('range_visible'); ?>" name="<?php echo $this->get_field_name('range_visible'); ?>" type="checkbox" value="on"<?php echo ($range_visible ? ' checked="checked"' : ''); ?> />集計単位の表示
        </p>
        <?php //閲覧数の表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('is_views_visible'); ?>">
          <?php echo('閲覧数の表示（Popular Posts）'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('is_views_visible'); ?>" name="<?php echo $this->get_field_name('is_views_visible'); ?>" type="checkbox" value="on"<?php echo ($is_views_visible ? ' checked="checked"' : ''); ?> />閲覧数の表示
        </p>
        <?php //ランキング順位の表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('is_ranking_visible'); ?>">
          <?php echo('ランキング順位の表示'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('is_ranking_visible'); ?>" name="<?php echo $this->get_field_name('is_ranking_visible'); ?>" type="checkbox" value="on"<?php echo ($is_ranking_visible ? ' checked="checked"' : ''); ?> />ランキング順位の表示
        </p>
        <?php
    }
}
add_action('widgets_init', create_function('', 'return register_widget("SimplicityWidgetItem");'));

///////////////////////////////////////////////////
//新着エントリーウイジェットの追加
///////////////////////////////////////////////////
class SimplicityNewEntryWidgetItem extends WP_Widget {
     function SimplicityNewEntryWidgetItem() {
         parent::WP_Widget(false, $name = 'Simplicity新着記事');//ウイジェット名
    }
    function widget($args, $instance) {
        extract( $args );
        //タイトル名を取得
        $title_new = apply_filters( 'widget_title_new', $instance['title_new'] );
        //表示数を取得
        $entry_count = apply_filters( 'widget_entry_count', $instance['entry_count'] );
        $is_top_visible = apply_filters( 'widget_is_top_visible', $instance['is_top_visible'] );
        $entry_type = apply_filters( 'widget_is_top_visible', $instance['entry_type'] );
        //表示数をグローバル変数に格納
        //後で使用するテンプレートファイルへの受け渡し
        global $g_entry_count;
        //表示タイプをグローバル変数に格納
        global $g_entry_type;
        //表示数が設定されていない時は5にする
        if ( !$entry_count ) $entry_count = 5;
        $g_entry_count = $entry_count;
        //表示タイプのデフォルト設定
        if ( !$entry_type ) $entry_type ='default';
        $g_entry_type = $entry_type;
         ?>
        <?php //classにwidgetと一意となるクラス名を追加する ?>
        <?php if ( $is_top_visible || !is_home() ): ?>
        <div id="new-entries" class="widget widget_new_popular">
          <h4><?php if ($title_new) {
            echo $title_new;//タイトルが設定されている場合は使用する
          } else {
            echo '新着記事';
          }
            ?></h4>
          <?php
            //新着記事表示用の処理を書くところだけど
            //コード量も多く、インデントが深くなり読みづらくなるので
            //テンプレートファイル側に書く
            if ( $entry_type == 'default' ) {
              get_template_part('new-entries');
            }else{
              get_template_part('new-entries-large');
            }
             ?>
        </div><!-- /#new-entries -->
        <?php endif; ?>
      <?php
    }
    function update($new_instance, $old_instance) {
     $instance = $old_instance;
     $instance['title_new'] = strip_tags($new_instance['title_new']);
     $instance['entry_count'] = strip_tags($new_instance['entry_count']);
     $instance['is_top_visible'] = strip_tags($new_instance['is_top_visible']);
     $instance['entry_type'] = strip_tags($new_instance['entry_type']);
        return $instance;
    }
    function form($instance) {
        if(empty($instance)){
          $instance = array(
            'title_new' => null,
            'entry_count' => null,
            'is_top_visible' => null,
            'entry_type' => null,
          );
        }
        $title_new = esc_attr($instance['title_new']);
        $entry_count = esc_attr($instance['entry_count']);
        $is_top_visible = esc_attr($instance['is_top_visible']);
        $entry_type = esc_attr($instance['entry_type']);
        ?>
        <?php //タイトル入力フォーム ?>
        <p>
          <label for="<?php echo $this->get_field_id('title_new'); ?>">
          <?php echo('新着記事のタイトル'); ?>
          </label>
          <input class="widefat" id="<?php echo $this->get_field_id('title_new'); ?>" name="<?php echo $this->get_field_name('title_new'); ?>" type="text" value="<?php echo $title_new; ?>" />
        </p>
        <?php //表示数入力フォーム ?>
        <p>
          <label for="<?php echo $this->get_field_id('entry_count'); ?>">
          <?php echo('表示数（半角数字、デフォルト：5）'); ?>
          </label>
          <input class="widefat" id="<?php echo $this->get_field_id('entry_count'); ?>" name="<?php echo $this->get_field_name('entry_count'); ?>" type="text" value="<?php echo $entry_count; ?>" />
        </p>
        <?php //表示タイプフォーム ?>
        <p>
          <label for="<?php echo $this->get_field_id('entry_type'); ?>">
          <?php echo('表示タイプ'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="default" <?php echo ( ($entry_type == 'default' || !$entry_type ) ? ' checked="checked"' : ""); ?> />デフォルト<br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="large_thumb"<?php echo ($entry_type == 'large_thumb' ? ' checked="checked"' : ""); ?> />大きなサムネイル<br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="large_thumb_on"<?php echo ($entry_type == 'large_thumb_on' ? ' checked="checked"' : ""); ?> />タイトルを重ねた大きなサムネイル<br />
        </p>
        <?php //TOPページ表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('is_top_visible'); ?>">
          <?php echo('トップページの表示'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('is_top_visible'); ?>" name="<?php echo $this->get_field_name('is_top_visible'); ?>" type="checkbox" value="on"<?php echo ($is_top_visible ? ' checked="checked"' : ''); ?> />表示（新着リストが表示されるトップで表示したくないときはチェックを外す）
        </p>
        <?php
    }
}
add_action('widgets_init', create_function('', 'return register_widget("SimplicityNewEntryWidgetItem");'));

///////////////////////////////////////////////////
//人気記事（Popular Posts）ウイジェットの追加
///////////////////////////////////////////////////
class SimplicityPopularPostsCategoryWidgetItem extends WP_Widget {
	function SimplicityPopularPostsCategoryWidgetItem() {
    	parent::WP_Widget(false, $name = 'Simplicity人気記事（要Popular Postsプラグイン）');
    }
    function widget($args, $instance) {
        extract( $args );
        //ウィジェットモード（全ての人気記事を表示するか、カテゴリ別に表示するか）
        $widget_mode = apply_filters( 'widget_mode', $instance['widget_mode'] );
        $title_popular = apply_filters( 'widget_title_popular', $instance['title_popular'] );
        //表示数を取得
        $entry_count = apply_filters( 'widget_entry_count', $instance['entry_count'] );
        //表示タイプを取得
        $entry_type = apply_filters( 'widget_entry_count', $instance['entry_type'] );
        //固定ページを含める
        $is_pages_include = apply_filters( 'widget_is_pages_include', $instance['is_pages_include'] );
        //閲覧数の表示
        $is_views_visible = apply_filters( 'widget_is_views_visible', $instance['is_views_visible'] );
        //集計期間
        $range = apply_filters( 'range', $instance['range'] );
        //集計期間の表示
        $range_visible = apply_filters( 'range_visible', $instance['range_visible'] );
        //ランキング順位の表示
        $is_ranking_visible = apply_filters( 'is_ranking_visible', $instance['is_ranking_visible'] );
        //後で使用するテンプレートファイルへの受け渡し
        //ウィジェットモード
        global $g_widget_mode;
        //表示数をグローバル変数に格納
        global $g_entry_count;
        //表示タイプをグローバル変数に格納
        global $g_entry_type;
        //ウィジェットモードが設定されてない場合はall（全て表示）にする
        if ( !$widget_mode ) $widget_mode = 'all';
        $g_widget_mode = $widget_mode;
        //表示数が設定されていない時は5にする
        if ( !$entry_count ) $entry_count = 5;
        $g_entry_count = $entry_count;
        //表示タイプのデフォルト設定
        if ( !$entry_type ) $entry_type ='default';
        $g_entry_type = $entry_type;
        //固定ページを含めるかのデフォルト設定
        global $g_is_pages_include;
        $g_is_pages_include = $is_pages_include;
        //ページビュー表示に格納
        global $g_is_views_visible;
        $g_is_views_visible = $is_views_visible;
        global $g_range;
        $g_range = ($range ? $range : 'all');
        global $g_widget_item;
        $g_widget_item = 'SimplicityPopularPostsCategoryWidgetItem';
    	?>
        <?php if ( $widget_mode == 'all' || //モードがウィジェットモードが「すべての人気記事表示」の時
                   is_single() || is_category() )://投稿ページとカテゴリーページのとき ?>
          <div id="popular-entries" class="widget widget_category_popular widget_popular_ranking">
            <h4><?php if ($title_popular) {
              echo $title_popular;
            } else {
              if ( $widget_mode == 'all' ) {//全ての表示モードの時は
                echo '人気記事';
              } else {
                echo 'カテゴリー別人気記事';
              }
            }
              ?></h4>
            <?php if ( $is_ranking_visible ) {//ランキングの表示
              echo get_popular_posts_ranking_style('.widget_popular_ranking');//問題なければいずれ消す[TODO]
            }  ?>
            <?php //PV順
            if ( $entry_type == 'default' ) {
              get_template_part('popular-posts-entries');
            } else {
              get_template_part('popular-posts-entries-large');
            } ?>
            <?php if ($range_visible) {
              echo get_range_tag($range);
            } ?>
          </div>
        <?php endif; ?>
    <?php
    }
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      $instance['widget_mode'] = trim(strip_tags($new_instance['widget_mode']));
      $instance['title_popular'] = trim(strip_tags($new_instance['title_popular']));
      $instance['entry_count'] = strip_tags($new_instance['entry_count']);
      $instance['entry_type'] = strip_tags($new_instance['entry_type']);
      $instance['is_pages_include'] = strip_tags($new_instance['is_pages_include']);
      $instance['is_views_visible'] = $new_instance['is_views_visible'];
      $instance['range'] = $new_instance['range'];
      $instance['range_visible'] = $new_instance['range_visible'];
      $instance['is_ranking_visible'] = strip_tags($new_instance['is_ranking_visible']);
        return $instance;
    }
    function form($instance) {
        if(empty($instance)){
          $instance = array(
            'widget_mode' => null,
            'title_popular' => null,
            'entry_count' => null,
            'entry_type' => null,
            'is_pages_include' => null,
            'is_views_visible' => null,
            'range' => null,
            'range_visible' => null,
            'is_ranking_visible' => null,
          );
        }
        $widget_mode = esc_attr($instance['widget_mode']);
        $title_popular = esc_attr($instance['title_popular']);
        $entry_count = esc_attr($instance['entry_count']);
        $entry_type = esc_attr($instance['entry_type']);
        $is_pages_include = esc_attr($instance['is_pages_include']);
        $is_views_visible = esc_attr($instance['is_views_visible']);
        $range = esc_attr($instance['range']);
        $range_visible = esc_attr($instance['range_visible']);
        $is_ranking_visible = esc_attr($instance['is_ranking_visible']);
        ?>

        <?php //ウィジェットモード（全てか、カテゴリ別か） ?>
        <p>
          <label for="<?php echo $this->get_field_id('widget_mode'); ?>">
          <?php echo('表示モード'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('widget_mode'); ?>" name="<?php echo $this->get_field_name('widget_mode'); ?>"  type="radio" value="all" <?php echo ( ($widget_mode == 'all' || !$widget_mode ) ? ' checked="checked"' : ""); ?> />全ての人気記事（全ページで表示）<br />
          <input class="widefat" id="<?php echo $this->get_field_id('widget_mode'); ?>" name="<?php echo $this->get_field_name('widget_mode'); ?>"  type="radio" value="category"<?php echo ($widget_mode == 'category' ? ' checked="checked"' : ""); ?> />カテゴリ別人気記事（投稿・カテゴリで表示）<br />
        </p>
        <p>
           <label for="<?php echo $this->get_field_id('title_popular'); ?>">
           <?php echo('人気記事のタイトル'); ?>
           </label>
           <input class="widefat" id="<?php echo $this->get_field_id('title_popular'); ?>" name="<?php echo $this->get_field_name('title_popular'); ?>" type="text" value="<?php echo $title_popular; ?>" />
        </p>
        <?php //表示数入力フォーム ?>
        <p>
          <label for="<?php echo $this->get_field_id('entry_count'); ?>">
          <?php echo('表示数（半角数字、デフォルト：5）'); ?>
          </label>
          <input class="widefat" id="<?php echo $this->get_field_id('entry_count'); ?>" name="<?php echo $this->get_field_name('entry_count'); ?>" type="text" value="<?php echo $entry_count; ?>" />
        </p>
        <?php //表示タイプフォーム ?>
        <p>
          <label for="<?php echo $this->get_field_id('entry_type'); ?>">
          <?php echo('表示タイプ'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="default" <?php echo ( ($entry_type == 'default' || !$entry_type ) ? ' checked="checked"' : ""); ?> />デフォルト<br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="large_thumb"<?php echo ($entry_type == 'large_thumb' ? ' checked="checked"' : ""); ?> />大きなサムネイル<br />
          <input class="widefat" id="<?php echo $this->get_field_id('entry_type'); ?>" name="<?php echo $this->get_field_name('entry_type'); ?>"  type="radio" value="large_thumb_on"<?php echo ($entry_type == 'large_thumb_on' ? ' checked="checked"' : ""); ?> />タイトルを重ねた大きなサムネイル<br />
        </p>
        <?php //固定ページの表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('is_pages_include'); ?>">
          <?php echo('固定ページの表示'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('is_pages_include'); ?>" name="<?php echo $this->get_field_name('is_pages_include'); ?>" type="checkbox" value="on"<?php echo ($is_pages_include ? ' checked="checked"' : ''); ?> />ランキングに固定ページを含める
        </p>
        <?php //集計単位の指定 ?>
        <p>
          <label for="<?php echo $this->get_field_id('range'); ?>">
          <?php echo('集計単位'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="daily"<?php echo ($range == 'daily' ? ' checked="checked"' : ''); ?> />1日<br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="weekly"<?php echo ($range == 'weekly' ? ' checked="checked"' : ''); ?> />1週間<br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="monthly"<?php echo ($range == 'monthly' ? ' checked="checked"' : ''); ?> />1ヶ月<br />
          <input class="widefat" id="<?php echo $this->get_field_id('range'); ?>" name="<?php echo $this->get_field_name('range'); ?>" type="radio" value="all"<?php echo ($range == null || $range == 'all' ? ' checked="checked"' : ''); ?> />全期間<br />
        </p>
        <?php //集計単位の表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('range_visible'); ?>">
          <?php echo('集計期間の表示'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('range_visible'); ?>" name="<?php echo $this->get_field_name('range_visible'); ?>" type="checkbox" value="on"<?php echo ($range_visible ? ' checked="checked"' : ''); ?> />集計単位の表示
        </p>
        <?php //閲覧数の表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('is_not_top_visible'); ?>">
          <?php echo('閲覧数の表示'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('is_views_visible'); ?>" name="<?php echo $this->get_field_name('is_views_visible'); ?>" type="checkbox" value="on"<?php echo ($is_views_visible ? ' checked="checked"' : ''); ?> />閲覧数の表示
        </p>
        <?php //ランキング順位の表示 ?>
        <p>
          <label for="<?php echo $this->get_field_id('is_ranking_visible'); ?>">
          <?php echo('ランキング順位の表示'); ?>
          </label><br />
          <input class="widefat" id="<?php echo $this->get_field_id('is_ranking_visible'); ?>" name="<?php echo $this->get_field_name('is_ranking_visible'); ?>" type="checkbox" value="on"<?php echo ($is_ranking_visible ? ' checked="checked"' : ''); ?> />ランキング順位の表示
        </p>
        <?php
    }
}
//Wordpress Popular Postsがインストールされていない場合を表示しない
if ( function_exists('wpp_get_mostpopular') ):
  add_action('widgets_init', create_function('', 'return register_widget("SimplicityPopularPostsCategoryWidgetItem");'));
endif;

//集計単位の文字列取得
function get_range_tag($range){
  switch ($range) {
    case 'daily':
      return '<div class="wpp-range">（集計単位：1日）</div>';
      break;
    case 'weekly':
      return '<div class="wpp-range">（集計単位：1週間）</div>';
      break;
    case 'monthly':
      return '<div class="wpp-range">（集計単位：1ヶ月）</div>';
      break;
    default:
       return '<div class="wpp-range">（集計単位：全期間）</div>';
  }
}

///////////////////////////////////////////////////
//SNSフォローボタン
///////////////////////////////////////////////////
class SimplicitySocialFollowWidgetItem extends WP_Widget {
	function SimplicitySocialFollowWidgetItem() {
    	parent::WP_Widget(false, $name = 'Simplicity SNSフォローボタン');
    }
    function widget($args, $instance) {
      extract( $args );
      $title_popular = apply_filters( 'widget_title_social_follow', $instance['title_social_follow'] );
      ?>
        <div id="sns-follow-buttons" class="widget widget_category_sns_follow_buttons">
          <h4><?php if ($title_popular) {
            echo $title_popular;
          } else {
            echo 'SNSフォローボタン';
          }
            ?></h4>
          <?php get_template_part('sns-pages'); //SNSフォローボタン?>
        </div>

    <?php
    }
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      $instance['title_social_follow'] = trim(strip_tags($new_instance['title_social_follow']));
        return $instance;
    }
    function form($instance) {
        if(empty($instance)){
          $instance = array(
            'title_social_follow' => null,
          );
        }
        $title_social_follow = esc_attr($instance['title_social_follow']);
        ?>
        <p>
           <label for="<?php echo $this->get_field_id('title_social_follow'); ?>">
           <?php echo('SNSフォローボタンのタイトル'); ?>
           </label>
           <input class="widefat" id="<?php echo $this->get_field_id('title_social_follow'); ?>" name="<?php echo $this->get_field_name('title_social_follow'); ?>" type="text" value="<?php echo $title_social_follow; ?>" />
        </p>
        <?php
    }
}
add_action('widgets_init', create_function('', 'return register_widget("SimplicitySocialFollowWidgetItem");'));

function get_popular_posts_ranking_style($slelctor){
  return '<style>
'.$slelctor.' {
  counter-reset: wpp-ranking;
}

'.$slelctor.' ul li{
  position: relative;
}

'.$slelctor.' ul li:before {
  background: none repeat scroll 0 0 #666;
  color: #fff;
  content: counter(wpp-ranking, decimal);
  counter-increment: wpp-ranking;
  font-size: 75%;
  left: 0;
  top: 3px;
  line-height: 1;
  padding: 4px 7px;
  position: absolute;
  z-index: 1;
  opacity: 0.9;
  border-radius: 2px;
  font-family: Arial;
}
</style>';
}