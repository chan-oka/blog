<?php //テーマカスタマイザーに関係する関数

//色を定数にする
define("LINK_COLOR", "#2098a8");
define("LINK_HOVER_COLOR", "#cc0033");
define("HEADER_OUTER_BACKGROUND_COLOR", "#ffffff");
define("HEADER_INNER_BACKGROUND_COLOR", "#ffffff");
define("SITE_TITLE_COLOR", "#222222");
define("SITE_DESCRIPTION_COLOR", "#777777");
define("MOBILE_BACKGROUND_COLOR", "#ffffff");
define("NAVI_COLOR", "#f7f7f7");
define("NAVI_LINK_COLOR", "#111111");
define("NAVI_LINK_HOVER_COLOR", "#dddddd");
define("MENU_BUTTON_COLOR", "#333333");
define("MENU_BUTTON_BACKGROUND_COLOR", "#ffffff");
define("GO_TO_TOP_BUTTON_COLOR", "#ffffff");
define("GO_TO_TOP_BUTTON_BACKGROUND_COLOR", "#aaaaaa");
define("FOOTER_COLOR", "#555555");

//文字サイズ
define("ARTICLE_FONT_SIZE", "16");

add_action( 'customize_register', 'theme_customize_register' );
function theme_customize_register($wp_customize) {

  /////////////////////////////
  //色設定項目の書き換え
  /////////////////////////////
  $wp_customize->add_section( 'colors', array(
    'title' =>'色',
    'description' => is_tips_visible() ? 'テーマで使用している色を変更します。' : '',
    'priority' => 20,
  ));

  //リンク色
  $wp_customize->add_setting( 'link_color', array( 'default' => LINK_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'label' => __( 'リンク色', 'colors' ),
    'description' => is_tips_visible() ? '通常のリンク色です。' : '',
    'section' => 'colors',
    'settings' => 'link_color',
    'priority' => 15,
  ) ) );

  //リンク色ホバー
  $wp_customize->add_setting( 'link_hover_color', array( 'default' => LINK_HOVER_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
    'label' => __( 'リンクホバー色', 'colors' ),
    'description' => is_tips_visible() ? 'マウスカーソルが乗ったときのリンク色です。' : '',
    'section' => 'colors',
    'settings' => 'link_hover_color',
    'priority' => 20,
  ) ) );

  //ヘッダー外側色
  $wp_customize->add_setting( 'header_outer_background_color', array( 'default' => HEADER_OUTER_BACKGROUND_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_outer_background_color', array(
    'label' => __( 'ヘッダー外側背景色', 'colors' ),
    'description' => is_tips_visible() ? '画面幅いっぱいに広がるヘッダーの背景色です。' : '',
    'section' => 'colors',
    'settings' => 'header_outer_background_color',
    'priority' => 25,
  ) ) );

  //ヘッダー内側色
  $wp_customize->add_setting( 'header_inner_background_color', array( 'default' => HEADER_INNER_BACKGROUND_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_inner_background_color', array(
    'label' => __( 'ヘッダー内側背景色', 'colors' ),
    'description' => is_tips_visible() ? 'ヘッダー内側の背景色です。' : '',
    'section' => 'colors',
    'settings' => 'header_inner_background_color',
    'priority' => 26,
  ) ) );

  //サイトタイトル色
  $wp_customize->add_setting( 'site_title_color', array( 'default' => SITE_TITLE_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color', array(
    'label' => __( 'サイトタイトル色', 'colors' ),
    'description' => is_tips_visible() ? 'サイトタイトルの文字色です。' : '',
    'section' => 'colors',
    'settings' => 'site_title_color',
    'priority' => 30,
  ) ) );

  //サイト概要色
  $wp_customize->add_setting( 'site_description_color', array( 'default' => SITE_DESCRIPTION_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_description_color', array(
    'label' => __( 'サイト概要色', 'colors' ),
    'description' => is_tips_visible() ? 'サイトキャッチフレーズの文字色です。' : '',
    'section' => 'colors',
    'settings' => 'site_description_color',
    'priority' => 40,
  ) ) );

  //モバイル時ヘッダー色
  $wp_customize->add_setting( 'mobile_background_color', array( 'default' => MOBILE_BACKGROUND_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_background_color', array(
    'label' => __( 'モバイル時ヘッダー背景色', 'colors' ),
    'description' => is_tips_visible() ? '画面幅いっぱいに広がるモバイルヘッダーの背景色です。' : '',
    'section' => 'colors',
    'settings' => 'mobile_background_color',
    'priority' => 50,
  ) ) );

  //モバイルサイトタイトル色
  $wp_customize->add_setting( 'mobile_site_title_color', array( 'default' => SITE_TITLE_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_site_title_color', array(
    'label' => __( 'モバイルサイトタイトル色', 'colors' ),
    'description' => is_tips_visible() ? 'モバイル時のサイトタイトルの文字色です。' : '',
    'section' => 'colors',
    'settings' => 'mobile_site_title_color',
    'priority' => 60,
  ) ) );

  //サイト概要色
  $wp_customize->add_setting( 'mobile_site_description_color', array( 'default' => SITE_DESCRIPTION_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_site_description_color', array(
    'label' => __( 'モバイルサイト概要色', 'colors' ),
    'description' => is_tips_visible() ? 'モバイル時のサイトキャッチフレーズの文字色です。' : '',
    'section' => 'colors',
    'settings' => 'mobile_site_description_color',
    'priority' => 70,
  ) ) );

  //グローバルナビ色
  $wp_customize->add_setting( 'navi_color', array( 'default' => NAVI_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navi_color', array(
    'label' => __( 'グローバルナビ色', 'colors' ),
    'description' => is_tips_visible() ? 'グローバルナビ（メインメニュー）の背景色です。' : '',
    'section' => 'colors',
    'settings' => 'navi_color',
    'priority' => 80,
  ) ) );

  //グローバルナビ横幅いっぱいにする
  $wp_customize->add_setting('layout_option_navi_wide', array());
  $wp_customize->add_control( 'layout_option_navi_wide', array(
    'settings' => 'layout_option_navi_wide',
    'label' =>'グローバルナビを横幅いっぱいにする',
    'description' => is_tips_visible() ? 'グローバルナビを画面幅いっぱいに広げるか。（※要グローバルナビ色設定）' : '',
    'section' => 'colors',
    'type' => 'checkbox',
    'priority' => 81,
  ));

  //グローバルナビリンク色
  $wp_customize->add_setting( 'navi_link_color', array( 'default' => NAVI_LINK_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navi_link_color', array(
    'label' => __( 'グローバルナビリンク色', 'colors' ),
    'description' => is_tips_visible() ? 'グローバルナビリンクの文字色です。' : '',
    'section' => 'colors',
    'settings' => 'navi_link_color',
    'priority' => 90,
  ) ) );

  //グローバルナビリンク色ホバー
  $wp_customize->add_setting( 'navi_link_hover_color', array( 'default' => NAVI_LINK_HOVER_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navi_link_hover_color', array(
    'label' => __( 'グローバルナビリンクホバー色', 'colors' ),
    'description' => is_tips_visible() ? 'マウスカーソルが乗ったときのメニュー項目の背景色です。' : '',
    'section' => 'colors',
    'settings' => 'navi_link_hover_color',
    'priority' => 100,
  ) ) );

  //メニューボタン色
  $wp_customize->add_setting( 'menu_button_color', array( 'default' => MENU_BUTTON_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_button_color', array(
    'label' => __( 'メニューボタン色', 'colors' ),
    'description' => is_tips_visible() ? 'モバイル用メニュー表示ボタンのアイコン色です。' : '',
    'section' => 'colors',
    'settings' => 'menu_button_color',
    'priority' => 102,
  ) ) );

  //メニューボタン背景色
  $wp_customize->add_setting( 'menu_button_background_color', array( 'default' => MENU_BUTTON_BACKGROUND_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_button_background_color', array(
    'label' => __( 'メニューボタン背景色', 'colors' ),
    'description' => is_tips_visible() ? 'モバイル用メニュー表示ボタンの背景色です。' : '',
    'section' => 'colors',
    'settings' => 'menu_button_background_color',
    'priority' => 104,
  ) ) );

  //トップへ戻るボタン色
  $wp_customize->add_setting( 'go_to_top_button_color', array( 'default' => GO_TO_TOP_BUTTON_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'go_to_top_button_color', array(
    'label' => __( 'トップへ戻るボタン色', 'colors' ),
    'description' => is_tips_visible() ? 'トップに戻るボタンのアイコン色です。' : '',
    'section' => 'colors',
    'settings' => 'go_to_top_button_color',
    'priority' => 110,
  ) ) );

  //トップへ戻るボタン背景色
  $wp_customize->add_setting( 'go_to_top_button_background_color', array( 'default' => GO_TO_TOP_BUTTON_BACKGROUND_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'go_to_top_button_background_color', array(
    'label' => __( 'トップへ戻るボタン背景色', 'colors' ),
    'description' => is_tips_visible() ? 'トップに戻るボタンの背景色です。' : '',
    'section' => 'colors',
    'settings' => 'go_to_top_button_background_color',
    'priority' => 112,
  ) ) );

  //フッター色
  $wp_customize->add_setting( 'footer_color', array( 'default' => FOOTER_COLOR, ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
    'label' => __( 'フッター色', 'colors' ),
    'description' => is_tips_visible() ? 'フッター部分の背景色です。' : '',
    'section' => 'colors',
    'settings' => 'footer_color',
    'priority' => 120,
  ) ) );


  /////////////////////////////
  //ヘッダー画像設定項目の書き換え
  /////////////////////////////
  $wp_customize->add_section( 'header_image', array(
    'title' =>'ヘッダー画像',
    'description' => is_tips_visible() ? 'ヘッダーで使用する画像に関する設定です。' : '',
    'priority' => 30,
  ));

  //ヘッダーの高さ
  $wp_customize->add_setting('layout_options[header_height]', array(
     'default' => '100',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'header_height_textfield', array(
    'settings' => 'layout_options[header_height]',
    'label' => 'ヘッダーの高さpx（デフォルト：100）',
    'description' => is_tips_visible() ? '画面トップからグローバルメニューまでの高さです。（※ヘッダー画像の設定をする前に高さの設定推奨）' : '',
    'section' => 'header_image',
    'type' => 'text',
    'priority' => 20,
  ));

  //ロゴを画像にする
  $wp_customize->add_setting('layout_option_header_logo_enable', array(
  ));
  $wp_customize->add_control( 'layout_option_header_logo_enable', array(
    'settings' => 'layout_option_header_logo_enable',
    'label' =>'ロゴを画像にする',
    'description' => is_tips_visible() ? 'タイトルロゴを画像にするか。' : '',
    'section' => 'header_image',
    'type' => 'checkbox',
    'priority' => 30,
  ));

  //ロゴ画像
  $wp_customize->add_setting( 'layout_option_header_logo_url' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'layout_option_header_logo_url', array(
    'settings' => 'layout_option_header_logo_url',
    'label' =>'ロゴ画像',
    'description' => is_tips_visible() ? 'タイトルテキストの代わりとなるロゴ設定します。' : '',
    'section' => 'header_image',
    'priority' => 40,
  ) ) );

  // //ロゴ画像をURLで指定
  // $wp_customize->add_setting('layout_options[header_logo_url]', array(
  //    'type'    => 'option',
  // ));
  // $wp_customize->add_control( 'header_logo_url_textfield', array(
  //   'settings' => 'layout_options[header_logo_url]',
  //   'label' =>'ロゴ画像をURLで指定',
  //   'section' => 'header_image',
  //   'type' => 'text',
  //   'priority' => 40,
  // ));

  //ヘッダー外側背景画像
  $wp_customize->add_setting( 'header_outer_background_image' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_outer_background_image', array(
    'settings' => 'header_outer_background_image',
    'label' =>'ヘッダー外側背景画像',
    'description' => is_tips_visible() ? '画面幅いっぱいに広がるヘッダー画像を設定します。（※画像の高さは高めに設定しておいてください）' : '',
    'section' => 'header_image',
    'priority' => 50,
  ) ) );

  // //ヘッダー外側背景画像をURLで指定
  // $wp_customize->add_setting('header_outer_background_image', array(
  // ));
  // $wp_customize->add_control( 'header_outer_background_image', array(
  //   'settings' => 'header_outer_background_image',
  //   'label' =>'ヘッダー外側背景画像をURLで指定',
  //   'section' => 'header_image',
  //   'type' => 'text',
  //   'priority' => 50,
  // ));

  //ヘッダー外側背景画像
  $wp_customize->add_setting( 'mobile_header_background_image' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mobile_header_background_image', array(
    'settings' => 'mobile_header_background_image',
    'label' =>'モバイルヘッダー背景画像',
    'description' => is_tips_visible() ? '画面幅いっぱいに広がるモバイルヘッダー画像を設定します。（※画像の高さは高めに設定しておいてください）' : '',
    'section' => 'header_image',
    'priority' => 60,
  ) ) );

  // //モバイルヘッダー背景画像をURLで指定
  // $wp_customize->add_setting('mobile_header_background_image', array(
  // ));
  // $wp_customize->add_control( 'mobile_header_background_image', array(
  //   'settings' => 'mobile_header_background_image',
  //   'label' =>'モバイルヘッダー背景画像をURLで指定',
  //   'section' => 'header_image',
  //   'type' => 'text',
  //   'priority' => 60,
  // ));


  /////////////////////////////
  //スキン設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'skin_section', array(
    'title'          =>'スキン',
    'description' => is_tips_visible() ? 'Simplicityの外観を手軽に変更します。' : '',
    'priority'       => 88,
  ));

  //スキンの種類
  $wp_customize->add_setting('skin_options[skin_file]', array(
     'default' => '',//デフォルト値
     'type'    => 'option',
  ));
  $skins = get_skin_files();//スキンファイル情報の取得
  $radio_items = array(
    '' => '選択しない（デフォルト）' ,//デフォルト値
  );
  foreach ($skins as $skin) {
    $radio_items += array($skin['path'] => $skin['name']);
  }
  $wp_customize->add_control( 'skin_file_radio', array(
    'settings' => 'skin_options[skin_file]',
    'label' =>'スキン選択',
    'description' => is_tips_visible() ? '手軽にデザインを変更することができます。※スキンで設定されたスタイルは親テーマ・子テーマで設定されたものより優先されます。' : '',
    'section' => 'skin_section',
    'type' => 'radio',
    'choices'    => $radio_items,
    'priority' => 10, //優先度（並び順）
  ));

  /////////////////////////////
  //レイアウト（全体）設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'layout_section', array(
    'title'          =>'レイアウト（全体・リスト）',
    'description' => is_tips_visible() ? 'サイト全体や一覧リストページのレイアウトに関する設定です。' : '',
    'priority'       => 89,
  ));

  //完全レスポンシブデザインにする
  $wp_customize->add_setting('layout_option_responsive_enable', array(
  ));
  $wp_customize->add_control( 'layout_option_responsive_enable', array(
    'settings' => 'layout_option_responsive_enable',
    'label' =>'完全レスポンシブデザインにする',
    'description' => is_tips_visible() ? 'パソコンとモバイルでシームレスな完全なレスポンシブデザイン表示になります。' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 1,
  ));

  if ( !is_responsive_enable() ):
  //PCでサイドバーをレスポンシブ表示（※完全レスポンシブがオフの時のみに有効な設定）
  $wp_customize->add_setting('layout_option_responsive_pc_sidebar_enable', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_responsive_pc_sidebar_enable', array(
    'settings' => 'layout_option_responsive_pc_sidebar_enable',
    'label' =>'PCでサイドバーをレスポンシブ表示',
    'description' => is_tips_visible() ? 'PC表示時にサイドバーをレスポンシブ表示するか。オフにするとレスポンシブ表示されません。（※完全レスポンシブ機能がオフの時のみ有効な設定）' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 5,
  ));
  endif;

  //タブレットはモバイル表示
  $wp_customize->add_setting('layout_option_tablet_mobile', array(
    'default' => false,
  ));
  $wp_customize->add_control( 'layout_option_tablet_mobile', array(
    'settings' => 'layout_option_tablet_mobile',
    'label' =>'タブレットはモバイル表示',
    'description' => is_tips_visible() ? 'タブレット端末をモバイルとして表示するか。' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 7,
  ));

  //タイトルの中央寄せ
  $wp_customize->add_setting('layout_option_title_center', array(
  ));
  $wp_customize->add_control( 'layout_option_title_center', array(
    'settings' => 'layout_option_title_center',
    'label' =>'サイトタイトルの中央寄せ',
    'description' => is_tips_visible() ? 'サイトのタイトルをヘッダーの中央にするか。（※トップのフォローボタンは表示されなくなります）' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 10
  ));

  //グローバルナビを表示
  $wp_customize->add_setting('layout_option_navi_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_navi_visible', array(
    'settings' => 'layout_option_navi_visible',
    'label' =>'グローバルナビを表示',
    'description' => is_tips_visible() ? 'グローバルナビ（メインメニュー）を表示させたくないときはオフにしてください。' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 20
  ));

  //モバイルメニュータイプ
  $radio_items = array();
  $radio_items += array(
    'accordion' => 'アコーディオン（デフォルト）',
    'accordion_tree' => 'アコーディオンツリー',
    'modal' => 'モーダルメニュー'
  );
  if ( !is_responsive_enable() ) $radio_items += array(
    'slide_in_light' => 'スライドイン（ライト）',
    'slide_in_dark' => 'スライドイン（ダーク）',
  );
  $wp_customize->add_setting('layout_option_mobile_menu_type', array(
    'default' => 'accordion',
  ));
  $wp_customize->add_control( 'layout_option_mobile_menu_type', array(
    'settings' => 'layout_option_mobile_menu_type',
    'label' =>'モバイルメニュータイプ',
    'description' => is_tips_visible() ? 'モバイル時、メニューボタンを押したときのスタイルです。（※スライドイン機能は「完全レスポンシブ」機能がオンの時は利用できません）' : '',
    'section' => 'layout_section',
    'type' => 'radio',
    'choices'    => $radio_items,
    'priority' => 24,
  ));

  // //グローバルナビをモーダル表示（モバイル）
  // $wp_customize->add_setting('layout_option_navi_modal_with_mobile', array(
  //   'default' => false,
  // ));
  // $wp_customize->add_control( 'layout_option_navi_modal_with_mobile', array(
  //   'settings' => 'layout_option_navi_modal_with_mobile',
  //   'label' =>'メニューをモーダル表示（モバイル）',
  //   'section' => 'layout_section',
  //   'type' => 'checkbox',
  //   'priority' => 25
  // ));

  //リストスタイル
  $wp_customize->add_setting('layout_options[list_style]', array(
    'default' => 'cards',
    'type'    => 'option',
  ));
  $wp_customize->add_control( 'list_style_radio', array(
    'settings' => 'layout_options[list_style]',
    'label' =>'一覧リストのスタイル',
    'description' => is_tips_visible() ? '一覧（インデックス）ページの表示スタイル設定。' : '',
    'section' => 'layout_section',
    'type' => 'radio',
    'choices'    => array(
      'cards' => 'サムネイルカード（デフォルト）',
      'bodies' => '本文表示',
      'large_thumb' => 'サムネイル大',
      'tile_thumb_2columns' => 'タイル2列',
      'tile_thumb_3columns' => 'タイル3列',
      'tile_thumb_2columns_raw' => 'タイル2列 画像縦横比保存（要再生成）',
      'tile_thumb_3columns_raw' => 'タイル3列 画像縦横比保存（要再生成）',
    ),
    'priority' => 40,
  ));

  //固定ページを一覧に含める
  $wp_customize->add_setting('layout_option_page_include_in_list', array(
  ));
  $wp_customize->add_control( 'layout_option_page_include_in_list', array(
    'settings' => 'layout_option_page_include_in_list',
    'label' =>'固定ページも一覧リストに含める',
    'description' => is_tips_visible() ? '固定ページを一覧リスト（インデックス）に含めるか。' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 50,
  ));

  //サムネイル表示
  $wp_customize->add_setting('layout_option_thumbnail_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_thumbnail_visible', array(
    'settings' => 'layout_option_thumbnail_visible',
    'label' =>'サムネイル表示',
    'description' => is_tips_visible() ? 'サムネイルを表示するか。（※テキスト主体ページなどではオフ）' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 60,
  ));

  //サムネイルの丸め
  $wp_customize->add_setting('layout_options[thumbnail_radius]', array(
    'default' => 'default',
    'type'    => 'option',
  ));
  $wp_customize->add_control( 'thumbnail_radius_radio', array(
    'settings' => 'layout_options[thumbnail_radius]',
    'label' =>'サムネイルの角の丸め具合',
    'description' => is_tips_visible() ? 'サムネイル角のスタイル。' : '',
    'section' => 'layout_section',
    'type' => 'radio',
    'choices'    => array(
      'default' => '丸めない（デフォルト）',
      'radius_10px' => '角を丸める',
      'circle' => '円形にする',
    ),
    'priority' => 70,
  ));

  //抜粋文字数
  $wp_customize->add_setting('layout_options[excerpt_length]', array(
     'default' => '70',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'excerpt_length_textfield', array(
    'settings' => 'layout_options[excerpt_length]',
    'label' =>'抜粋文字数（デフォルト：70）',
    'description' => is_tips_visible() ? 'インデックスリストや関連記事、ブログカードで表示される抜粋文字の文字数を設定します。' : '',
    'section' => 'layout_section',
    'type' => 'text',
    'priority' => 80,
  ));

  //抜粋の末尾文字
  $wp_customize->add_setting('layout_excerpt_more', array(
     'default' => '...',
  ));
  $wp_customize->add_control( 'layout_excerpt_more', array(
    'settings' => 'layout_excerpt_more',
    'label' =>'抜粋の末尾文字（デフォルト：...）',
    'description' => is_tips_visible() ? '抜粋文の末尾に付属する文字列を設定します。' : '',
    'section' => 'layout_section',
    'type' => 'text',
    'priority' => 90,
  ));

  //Wordpress固有の抜粋文を使用する
  $wp_customize->add_setting('layout_wordpress_excerpt', array(
  ));
  $wp_customize->add_control( 'layout_wordpress_excerpt', array(
    'settings' => 'layout_wordpress_excerpt',
    'label' =>'投稿画面の「抜粋」項目を利用',
    'description' => is_tips_visible() ? '記事一覧・ブログカードのスニペットに投稿管理画面で設定した「抜粋」テキストを使用します。（※未入力の場合は記事冒頭の抜粋文）' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 100,
  ));

  //サイドバーの幅を336pxに
  $wp_customize->add_setting('layout_options[sidebar_width_336]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'sidebar_width_336_checkbox', array(
    'settings' => 'layout_options[sidebar_width_336]',
    'label' =>'サイドバーの幅を336pxに（デフォルト300px）',
    'description' => is_tips_visible() ? 'サイドバーを「レクタングル（大）」幅に設定します。（※ヘッダー画像を既に設定している場合は要再設定）' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 110,
  ));

  //サイドバーの背景を白色に
  $wp_customize->add_setting('layout_option_sidebar_background_white', array(
  ));
  $wp_customize->add_control( 'layout_option_sidebar_background_white', array(
    'settings' => 'layout_option_sidebar_background_white',
    'label' =>'サイドバーの背景を白色に',
    'description' => is_tips_visible() ? 'サイドバーの背景色を白色に設定します。（※背景画像などを設定して、サイドバーが見づらくなったときなどに）' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 115,
  ));

  //サイドバーを左側に表示
  $wp_customize->add_setting('layout_options[sidebar_left]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'sidebar_left_checkbox', array(
    'settings' => 'layout_options[sidebar_left]',
    'label' =>'サイドバーを左側に表示',
    'description' => is_tips_visible() ? 'サイドバーを左側に表示するようにレイアウトを変更します。' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 120,
  ));

  //検索ボックスのスタイル
  $wp_customize->add_setting('layout_options[search_style]', array(
     'default' => 'white_rect',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'search_style_radio', array(
    'settings' => 'layout_options[search_style]',
    'label' =>'検索ボックスのスタイル',
    'description' => is_tips_visible() ? '検索ボックスのデザイン設定。' : '',
    'section' => 'layout_section',
    'type' => 'radio',
    'choices'    => array(
      'white_rect' => 'ホワイト四角（デフォルト）',
      'white_circle' => 'ホワイト丸型',
      'gray_rect' => 'グレー四角',
      'gray_circle' => 'グレー丸型',
    ),
    'priority' => 130,
  ));

  //フッターを背景色と同じにする
  $wp_customize->add_setting('layout_options[footer_transparent]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'footer_transparent_checkbox', array(
    'settings' => 'layout_options[footer_transparent]',
    'label' =>'フッターを背景色と同じにする',
    'description' => is_tips_visible() ? 'フッターを透過色にして背景を表示します。' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 140,
  ));

  //メニューボタンアイコン
  $wp_customize->add_setting('layout_options[menu_button_icon_font]', array(
     'default' => 'fa-bars',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'menu_button_icon_font_textfield', array(
    'settings' => 'layout_options[menu_button_icon_font]',
    'label' =>'メニューボタンのアイコン（デフォルト：fa-bars）',
    'description' => is_tips_visible() ? 'メニュー表示ボタンのアイコンフォントを設定します。（※設定用のコードはFont Awesomeから取得します）' : '',
    'section' => 'layout_section',
    'type' => 'text',
    'priority' => 140,
  ));

  //トップへ戻るボタンの表示
  $wp_customize->add_setting('layout_option_go_to_top_button_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_go_to_top_button_visible', array(
    'settings' => 'layout_option_go_to_top_button_visible',
    'label' =>'トップへ戻るボタンの表示',
    'description' => is_tips_visible() ? 'トップへ戻るボタンを表示するか。' : '',
    'section' => 'layout_section',
    'type' => 'checkbox',
    'priority' => 150,
  ));

  //トップへ戻るボタンアイコン
  $wp_customize->add_setting('layout_options[go_to_top_button_icon_font]', array(
     'default' => 'fa-chevron-circle-up',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'go_to_top_button_icon_font_textfield', array(
    'settings' => 'layout_options[go_to_top_button_icon_font]',
    'label' =>'トップへ戻るボタンのアイコン（デフォルト：fa-chevron-circle-up）',
    'description' => is_tips_visible() ? 'トップへ戻るボタンのアイコンフォントを設定します。（※設定用のコードはFont Awesomeから取得します）' : '',
    'section' => 'layout_section',
    'type' => 'text',
    'priority' => 160,
  ));

  /////////////////////////////
  //レイアウト（ページ）設定項目の追加
   /////////////////////////////
  $wp_customize->add_section( 'layout_singular_section', array(
    'title'          =>'レイアウト（投稿・固定ページ）',
    'description' => is_tips_visible() ? '投稿・固定ページのレイアウトに関する設定です。' : '',
    'priority'       => 89.5,
  ));

  //本文文字サイズ
  $wp_customize->add_setting('layout_option_article_font_size', array(
    'default' => ARTICLE_FONT_SIZE,
  ));
  $wp_customize->add_control( 'layout_option_article_font_size', array(
    'settings' => 'layout_option_article_font_size',
    'label' =>'本文文字サイズ（全角文字数）',
    'description' => is_tips_visible() ? 'パソコン表示時の本文文字サイズを設定します。' : '',
    'section' => 'layout_singular_section',
    'type' => 'radio',
    'choices'    => array(
      '14' => '14px（1行48文字くらい）',
      '15' => '15px（1行45文字くらい）',
      '16' => '16px（1行42文字くらい：デフォルト）',
      '17' => '17px（1行40文字くらい）',
      '18' => '18px（1行37文字くらい）',
      '19' => '19px（1行35文字くらい）',
    ),
    'priority' => 3,
  ));

//モバイル本文文字サイズ
  $wp_customize->add_setting('layout_option_article_mobile_font_size', array(
    'default' => ARTICLE_FONT_SIZE,
  ));
  $wp_customize->add_control( 'layout_option_article_mobile_font_size', array(
    'settings' => 'layout_option_article_mobile_font_size',
    'label' =>'モバイル本文文字サイズ',
    'description' => is_tips_visible() ? '主にスマホ表示時の本文文字サイズを設定します。' : '',
    'section' => 'layout_singular_section',
    'type' => 'radio',
    'choices'    => array(
      '14' => '14px',
      '15' => '15px',
      '16' => '16px（デフォルト）',
      '17' => '17px',
      '18' => '18px',
      '19' => '19px',
    ),
    'priority' => 4,
  ));
  //投稿日の表示
  $wp_customize->add_setting('layout_option_create_date_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_create_date_visible', array(
    'settings' => 'layout_option_create_date_visible',
    'label' =>'投稿日の表示',
    'description' => is_tips_visible() ? '投稿日を表示するか。（※一覧リストにも表示されます）' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 7,
  ));

  //現在との時間差の表示
  $wp_customize->add_setting('layout_option_human_time_diff_visible', array(
    'default' => false,
  ));
  $wp_customize->add_control( 'layout_option_human_time_diff_visible', array(
    'settings' => 'layout_option_human_time_diff_visible',
    'label' =>'投稿日と現在との時間差を表示',
    'description' => is_tips_visible() ? '現在から投稿日を差し引いた人間の感覚的な時間差を表示します。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 7.1,
  ));

  //更新日の表示
  $wp_customize->add_setting('layout_option_update_date_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_update_date_visible', array(
    'settings' => 'layout_option_update_date_visible',
    'label' =>'更新日の表示',
    'description' => is_tips_visible() ? '更新日を表示するか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 8,
  ));

  //カテゴリ情報の表示
  $wp_customize->add_setting('layout_option_category_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_category_visible', array(
    'settings' => 'layout_option_category_visible',
    'label' =>'カテゴリ情報の表示',
    'description' => is_tips_visible() ? 'カテゴリ情報を表示するか。（※一覧リストにも表示されます）' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 9,
  ));

  //タグ情報の表示
  $wp_customize->add_setting('layout_option_tag_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_tag_visible', array(
    'settings' => 'layout_option_tag_visible',
    'label' =>'タグ情報の表示',
    'description' => is_tips_visible() ? '本文フッター部分にあるタグ情報を表示するか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 10,
  ));

  //投稿者情報の表示
  $wp_customize->add_setting('layout_option_author_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_author_visible', array(
    'settings' => 'layout_option_author_visible',
    'label' =>'投稿者情報の表示',
    'description' => is_tips_visible() ? '本文フッター部分にある投稿者情報を表示するか。（※構造化データに必要な情報が含まれているのでオフにすると、ウェブマスターツールの構造化データエラーが出ます。）' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 20,
  ));

  //投稿者情報にTwitterIDを表示
  $wp_customize->add_setting('layout_option_twitter_follow_id_author_visible', array(
    'default' => false,
  ));
  $wp_customize->add_control( 'layout_option_twitter_follow_id_author_visible', array(
    'settings' => 'layout_option_twitter_follow_id_author_visible',
    'label' =>'投稿者情報をTwitter IDに',
    'description' => is_tips_visible() ? '投稿者にTwitterのIDリンクを表示します。（※SNS設定でTwitter ID設定がされている必要があります。）' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 21,
  ));

  //編集リンクの表示
  $wp_customize->add_setting('layout_option_edit_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_edit_visible', array(
    'settings' => 'layout_option_edit_visible',
    'label' =>'編集リンクの表示',
    'description' => is_tips_visible() ? '投稿・固定ページの管理画面に直接アクセスするための編集リンクを表示するか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 30,
  ));

  //本文先頭にアイキャッチを表示
  $wp_customize->add_setting('layout_option_eye_catch_visible', array(
  ));
  $wp_customize->add_control( 'layout_option_eye_catch_visible', array(
    'settings' => 'layout_option_eye_catch_visible',
    'label' =>'本文先頭にアイキャッチ画像を表示',
    'description' => is_tips_visible() ? '投稿・固定ページ管理画面で設定したアイキャッチを自動で本文トップに挿入するか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 32,
  ));

  //引用部分の幅を広げる
  $wp_customize->add_setting('layout_options[blockquote_wide]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'blockquote_wide_checkbox', array(
    'settings' => 'layout_options[blockquote_wide]',
    'label' =>'引用部分の幅を広げる',
    'description' => is_tips_visible() ? '引用部分の横幅を広げ表示エリアを増やします。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 35,
  ));

  //関連記事の表示
  $wp_customize->add_setting('layout_option_related_entry_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_related_entry_visible', array(
    'settings' => 'layout_option_related_entry_visible',
    'label' =>'関連記事の表示',
    'description' => is_tips_visible() ? '本文下の関連記事を表示するか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 36,
  ));

  //関連記事タイプ
  $wp_customize->add_setting('layout_options[related_entry_type]', array(
     'default' => 'default',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'related_entry_type_radio', array(
    'settings' => 'layout_options[related_entry_type]',
    'label' =>'関連記事表示タイプ',
    'description' => is_tips_visible() ? '関連記事の表示スタイルの設定です。' : '',
    'section' => 'layout_singular_section',
    'type' => 'radio',
    'choices'    => array(
      'default' => 'デフォルト（推奨表示数3-10）',
      'thumbnail' => 'サムネイル3列（推奨表示数3, 6, 9）',
      'thumbnail4' => 'サムネイル4列（推奨表示数4, 8, 12）',
    ),
    'priority' => 40,
  ));

  //関連記事の関連付け
  $wp_customize->add_setting('layout_options[related_entry_association]', array(
     'default' => 'category',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'related_entry_association_radio', array(
    'settings' => 'layout_options[related_entry_association]',
    'label' =>'関連記事の関連付け',
    'description' => is_tips_visible() ? '関連記事をカテゴリに関連付けるか、タグに関連付けるか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'radio',
    'choices'    => array(
      'category' => 'カテゴリに関連付け（デフォルト）',
      'tag' => 'タグに関連付け',
    ),
    'priority' => 45,
  ));

  //関連記事数
  $wp_customize->add_setting('layout_options[related_entry_count]', array(
     'default' => '10',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'related_entry_count_textfield', array(
    'settings' => 'layout_options[related_entry_count]',
    'label' =>'関連記事表示数（デフォルト：10）',
    'description' => is_tips_visible() ? '関連記事の表示数を設定します。' : '',
    'section' => 'layout_singular_section',
    'type' => 'text',
    'priority' => 50,
  ));

  //[前ページ][次ページ]ナビの表示
  $wp_customize->add_setting('layout_option_post_navi_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_post_navi_visible', array(
    'settings' => 'layout_option_post_navi_visible',
    'label' =>'[前ページ] [次ページ] ナビの表示',
    'description' => is_tips_visible() ? 'ページ送りナビを表示するか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 52,
  ));

  //[前ページ] [次ページ] ナビタイプ
  $wp_customize->add_setting('layout_option_post_navi_type', array(
     'default' => 'default',
  ));
  $wp_customize->add_control( 'layout_option_post_navi_type', array(
    'settings' => 'layout_option_post_navi_type',
    'label' =>'[前ページ] [次ページ] ナビタイプ',
    'description' => is_tips_visible() ? 'ページ送りナビの表示スタイルの設定です。' : '',
    'section' => 'layout_singular_section',
    'type' => 'radio',
    'choices'    => array(
      'default' => 'デフォルト',
      'thumbnail' => 'サムネイル付き',
    ),
    'priority' => 53,
  ));

  //固定ページにパンくずリストを表示
  $wp_customize->add_setting('layout_option_page_breadcrumb_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'layout_option_page_breadcrumb_visible', array(
    'settings' => 'layout_option_page_breadcrumb_visible',
    'label' =>'固定ページにパンくずリストを表示',
    'description' => is_tips_visible() ? '固定ページにページの親子関係を利用したパンくずリストを表示するか。' : '',
    'section' => 'layout_singular_section',
    'type' => 'checkbox',
    'priority' => 62,
  ));

  /////////////////////////////
  //画像設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'image_section', array(
    'title'          =>'画像',
    'description' => is_tips_visible() ? '投稿・固定ページの本文で使用されている画像に関する設定です。' : '',
    'priority'       => 89.7,
  ));

  //アイキャッチを自動設定
  $wp_customize->add_setting('image_option_auto_post_thumbnail_enable', array(
    'default' => false,
  ));
  $wp_customize->add_control( 'image_option_auto_post_thumbnail_enable', array(
    'settings' => 'image_option_auto_post_thumbnail_enable',
    'label' =>'アイキャッチを自動設定',
    'description' => is_tips_visible() ? '本文に最初に出てくる画像を利用してアイキャッチを自動設定するか。（※サーバーののphp.iniのallow_url_fopenがOffの時は外部サーバーから画像を取得できません。）' : '',
    'section' => 'image_section',
    'type' => 'checkbox',
    'priority' => 5,
  ));

  //画像の遅延読み込みを有効
  $wp_customize->add_setting('image_option_lazy_load_enable', array());
  $wp_customize->add_control( 'image_option_lazy_load_enable', array(
    'settings' => 'image_option_lazy_load_enable',
    'label' =>'本文画像の遅延読み込み',
    'description' => is_tips_visible() ? 'Lazy Loadを利用して本文にある画像を、表示するタイミングで読み込みます。（※サーバーの負荷対策）' : '',
    'section' => 'image_section',
    'type' => 'checkbox',
    'priority' => 10,
  ));

  //Lazy Loadのエフェクトを有効
  $wp_customize->add_setting('image_option_lazy_load_effect_enable', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'image_option_lazy_load_effect_enable', array(
    'settings' => 'image_option_lazy_load_effect_enable',
    'label' =>'Lazy Loadのエフェクトを有効',
    'description' => is_tips_visible() ? 'フェイドインエフェクトを有効にするか。' : '',
    'section' => 'image_section',
    'type' => 'checkbox',
    'priority' => 20,
  ));

  //Lazy Loadで画像を読み込むタイミング
  $wp_customize->add_setting('image_option_lazy_load_threshold', array(
     'default' => '0',
  ));
  $wp_customize->add_control( 'image_option_lazy_load_threshold', array(
    'settings' => 'image_option_lazy_load_threshold',
    'label' =>'Lazy Loadで読み込むタイミング',
    'description' => is_tips_visible() ? 'ページスクロールのどのタイミングで画像を読み込むかを設定します。' : '',
    'section' => 'image_section',
    'type' => 'radio',
    'choices'    => array(
      '0' => 'スクロール表示と同時',
      '200' => '200px手前',
      '400' => '400px手前',
      '600' => '600px手前',
      '800' => '800px手前',
    ),
    'priority' => 30,
  ));

  //Lightboxを有効
  $wp_customize->add_setting('image_option_lightbox_enable', array(
     'default' => false,
  ));
  $wp_customize->add_control( 'image_option_lightbox_enable', array(
    'settings' => 'image_option_lightbox_enable',
    'label' =>'画像リンクをギャラリー表示',
    'description' => is_tips_visible() ? 'jQueryプラグインのLightboxを利用して本文画像ギャラリー表示するか。' : '',
    'section' => 'image_section',
    'type' => 'checkbox',
    'priority' => 50,
  ));

  //画像効果
  $wp_customize->add_setting('image_option_image_effect', array(
     'default' => 'none',
  ));
  $wp_customize->add_control( 'image_option_image_effect', array(
    'settings' => 'image_option_image_effect',
    'label' =>'画像効果',
    'description' => is_tips_visible() ? '本文画像の枠線の設定です。' : '',
    'section' => 'image_section',
    'type' => 'radio',
    'choices'    => array(
      'none' => 'なし（デフォルト）',
      'border1px' => 'ボーダー（枠線）',
      'shadow' => 'シャドー（影）',
    ),
    'priority' => 60,
  ));


  /////////////////////////////
  //SEO設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'seo_section', array(
    'title'          =>'SEO',
    'description' => is_tips_visible() ? 'SEOに関する設定です。（※既にプラグインを使用している場合は設定をオフにしてください）' : '',
    'priority'       => 90,
  ));

  //フロントページのタイトルのあとにキャッチフレーズを付加する
  $wp_customize->add_setting('seo_option_add_catch_phrase_to_frontpage_title', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'seo_option_add_catch_phrase_to_frontpage_title', array(
    'settings' => 'seo_option_add_catch_phrase_to_frontpage_title',
    'label' =>'フロントページタイトル後にキャッチフレーズを付加',
    'description' => is_tips_visible() ? '「サイト名｜キャッチフレーズ」のようなタイトルになります。' : '',
    'section' => 'seo_section',
    'type' => 'checkbox',
    'priority' => 50,
  ));

  //投稿・固定ページのタイトルのあとサイト名を付加
  $wp_customize->add_setting('seo_option_add_site_name_to_singular_title', array(
     'default' => false,
  ));
  $wp_customize->add_control( 'seo_option_add_site_name_to_singular_title', array(
    'settings' => 'seo_option_add_site_name_to_singular_title',
    'label' =>'投稿・固定ページタイトル後にサイト名を付加',
    'description' => is_tips_visible() ? '「投稿・固定ページタイトル｜サイト名」のようなタイトルになります。' : '',
    'section' => 'seo_section',
    'type' => 'checkbox',
    'priority' => 75,
  ));

  //検索エンジンに伝える日付
  $wp_customize->add_setting('seo_options[seo_date]', array(
     'default' => 'create',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'seo_date_radio', array(
    'settings' => 'seo_options[seo_date]',
    'label' =>'検索エンジンに伝える日付（推奨：公開日）',
    'description' => is_tips_visible() ? '検索エンジンに伝える日時を「公開日」にするか「更新日」にするか。' : '',
    'section' => 'seo_section',
    'type' => 'radio',
    'choices'    => array(
      'create' => '公開日',
      'update' => '更新日',
    ),
    'priority' => 100,
  ));

  //投稿ページの抜粋を使ってMeta Descriptionをヘッダーに挿入
  $wp_customize->add_setting('seo_meta_description_insert', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'seo_meta_description_insert', array(
    'settings' => 'seo_meta_description_insert',
    'label' =>'投稿ページにメタディスクリプションを挿入',
    'description' => is_tips_visible() ? '投稿ページのメタタグに説明文を挿入するか。（※抜粋があるときはそれを使用、ない場合は冒頭の抽出文）' : '',
    'section' => 'seo_section',
    'type' => 'checkbox',
    'priority' => 200,
  ));

  //投稿ページのカテゴリを使ってMetaキーワードをヘッダーに挿入
  $wp_customize->add_setting('seo_meta_keywords_insert', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'seo_meta_keywords_insert', array(
    'settings' => 'seo_meta_keywords_insert',
    'label' =>'投稿ページにメタキーワードを挿入',
    'description' => is_tips_visible() ? '投稿ページのメタタグにキーワードを挿入するか。（※投稿のカテゴリ情報を使用）' : '',
    'section' => 'seo_section',
    'type' => 'checkbox',
    'priority' => 300,
  ));

  //カテゴリ設定の説明を使ってMeta Descriptionをヘッダーに挿入
  $wp_customize->add_setting('seo_meta_description_insert_to_category', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'seo_meta_description_insert_to_category', array(
    'settings' => 'seo_meta_description_insert_to_category',
    'label' =>'カテゴリページにメタディスクリプションを挿入',
    'description' => is_tips_visible() ? 'カテゴリーページのメタタグに説明文を挿入するか。（※カテゴリ設定の説明文を使用、ない場合は自動設定）' : '',
    'section' => 'seo_section',
    'type' => 'checkbox',
    'priority' => 400,
  ));

  //カテゴリページにMetaキーワードをヘッダーに挿入
  $wp_customize->add_setting('seo_meta_keywords_insert_to_category', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'seo_meta_keywords_insert_to_category', array(
    'settings' => 'seo_meta_keywords_insert_to_category',
    'label' =>'カテゴリページにメタキーワードを挿入',
    'description' => is_tips_visible() ? 'カテゴリーページのメタタグにキーワードを挿入するか。（※カテゴリ情報から挿入）' : '',
    'section' => 'seo_section',
    'type' => 'checkbox',
    'priority' => 500,
  ));

  /////////////////////////////
  //SNS設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'sns_section', array(
    'title'          =>'SNS',
    'description' => is_tips_visible() ? 'ソーシャルサービスのシェアボタンやフォローボタンに関する設定です。' : '',
    'priority'       => 91,
  ));

  //全シェアボタンの表示
  $wp_customize->add_setting('sns_option_all_sns_share_btns_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'sns_option_all_sns_share_btns_visible', array(
    'settings' => 'sns_option_all_sns_share_btns_visible',
    'label' =>'全シェアボタンの表示',
    'description' => is_tips_visible() ? '全てのシェアボタンの表示を切り替えます。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 0,
  ));

  //シェアボタンのタイプ
  $wp_customize->add_setting('sns_option_share_button_type', array(
     'default' => 'default',
  ));
  $wp_customize->add_control( 'sns_option_share_button_type', array(
    'settings' => 'sns_option_share_button_type',
    'label' =>'シェアボタンのタイプ（PC）',
    'description' => is_tips_visible() ? 'パソコンで表示したときのシェアボタンスタイル。' : '',
    'section' => 'sns_section',
    'type' => 'radio',
    'choices'    => array(
      'default' => 'デフォルト（サービス固有のボタン）',
      'theme_color_type' => 'テーマカラータイプ（高速）',
      'twitter_type' => 'Twitterタイプ（高速）',
      'viral_type' => 'バイラルタイプ（高速）',
    ),
    'priority' => 1,
  ));

  //シェアボタンのタイプ（モバイル）
  $wp_customize->add_setting('sns_option_share_button_type_mobile', array(
     'default' => 'default',
  ));
  $wp_customize->add_control( 'sns_option_share_button_type_mobile', array(
    'settings' => 'sns_option_share_button_type_mobile',
    'label' =>'シェアボタンのタイプ（モバイル）',
    'description' => is_tips_visible() ? 'モバイルで表示したときのシェアボタンスタイル。' : '',
    'section' => 'sns_section',
    'type' => 'radio',
    'choices'    => array(
      'default' => 'デフォルト（アイコン）',
      'viral_type' => 'バイラルタイプ',
    ),
    'priority' => 2,
  ));

  //タイトル下にシェアボタンを表示
  $wp_customize->add_setting('sns_options[top_btns_visible]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'top_btns_visible_checkbox', array(
    'settings' => 'sns_options[top_btns_visible]',
    'label' =>'タイトル下にシェアボタンを表示',
    'description' => is_tips_visible() ? '投稿ページでタイトル下にシェアボタンを表示するか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 3,
  ));

  //追従シェアボタンを表示
  $wp_customize->add_setting('sns_options[obsequence_sns_btns_visible]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'obsequence_sns_btns_visible_checkbox', array(
    'settings' => 'sns_options[obsequence_sns_btns_visible]',
    'label' =>'サイドに追従シェアボタンを表示',
    'description' => is_tips_visible() ? '投稿ページでサイドに追従するにシェアボタンを表示するか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 5,
  ));

  //本文下シェアボタンを表示
  $wp_customize->add_setting('sns_option_bottom_sns_btns_visible', array(
     'default'  => 'true',
  ));
  $wp_customize->add_control( 'sns_option_bottom_sns_btns_visible', array(
    'settings' => 'sns_option_bottom_sns_btns_visible',
    'label' =>'本文下シェアボタンを表示',
    'description' => is_tips_visible() ? '投稿ページ本文下にあるシェアボタンを表示するか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 6,
  ));

  //シェアメッセージ
  $wp_customize->add_setting('sns_options[share_msg]', array(
    'default' => 'シェアする',
    'type'  => 'option',
  ));
  $wp_customize->add_control( 'share_msg_textfield', array(
    'settings' => 'sns_options[share_msg]',
    'label' =>'シェアメッセージ',
    'description' => is_tips_visible() ? 'シェアボタン用のラベルを設定します。（※無記入で非表示）' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 10,
  ));

  //Twitter拡散ボタン表示
  $wp_customize->add_setting('sns_option_twitter_btn_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_twitter_btn_visible', array(
    'settings' => 'sns_option_twitter_btn_visible',
    'label' =>'Twitter「ツイート」ボタンの表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 20,
  ));
  //Facebook拡散ボタン表示
  $wp_customize->add_setting('sns_option_facebook_btn_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_facebook_btn_visible', array(
    'settings' => 'sns_option_facebook_btn_visible',
    'label' =>'Facebook「いいね！」ボタンの表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 30,
  ));

  //Google＋拡散ボタン表示
  $wp_customize->add_setting('sns_option_google_plus_btn_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_google_plus_btn_visible', array(
    'settings' => 'sns_option_google_plus_btn_visible',
    'label' =>'Google＋「+1」ボタンの表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 40,
  ));

  //はてな拡散ボタン表示
  $wp_customize->add_setting('sns_option_hatena_btn_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_hatena_btn_visible', array(
    'settings' => 'sns_option_hatena_btn_visible',
    'label' =>'はてな「はてブ」ボタンの表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 50,
  ));

  //ポケットボタン表示
  $wp_customize->add_setting('sns_option_pocket_btn_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_pocket_btn_visible', array(
    'settings' => 'sns_option_pocket_btn_visible',
    'label' =>'pocket「あとで読む」ボタンの表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 60,
  ));

  //LINEボタン表示（モバイル時）
  $wp_customize->add_setting('sns_option_line_btn_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_line_btn_visible', array(
    'settings' => 'sns_option_line_btn_visible',
    'label' =>'LINEボタンの表示（モバイル時）',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 70,
  ));

  //Evernoteボタン表示
  $wp_customize->add_setting('sns_option_evernote_btn_visible', array(
  ));
  $wp_customize->add_control( 'sns_option_evernote_btn_visible', array(
    'settings' => 'sns_option_evernote_btn_visible',
    'label' =>'Evernoteボタンの表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 71,
  ));

  //feedlyボタン表示
  $wp_customize->add_setting('sns_option_feedly_btn_visible', array(
  ));
  $wp_customize->add_control( 'sns_option_feedly_btn_visible', array(
    'settings' => 'sns_option_feedly_btn_visible',
    'label' =>'feedlyボタンの表示（PCのみ吹出付）',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 72,
  ));

  //コメント数の表示
  $wp_customize->add_setting('sns_option_comments_btn_visible', array(
  ));
  $wp_customize->add_control( 'sns_option_comments_btn_visible', array(
    'settings' => 'sns_option_comments_btn_visible',
    'label' =>'コメント数の表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 72.5,
  ));

  //画像にPinterestピンを表示
  $wp_customize->add_setting('sns_option_pinterest_btn_visible', array(
  ));
  $wp_customize->add_control( 'sns_option_pinterest_btn_visible', array(
    'settings' => 'sns_option_pinterest_btn_visible',
    'label' =>'画像にPinterestピンを表示',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 73,
  ));

  //ツイートにユーザー名を含める
  $wp_customize->add_setting('sns_option_twitter_id_include', array(
  ));
  $wp_customize->add_control( 'sns_option_twitter_id_include', array(
    'settings' => 'sns_option_twitter_id_include',
    'label' =>'ツイートにTwitterIDを含める',
    'description' => is_tips_visible() ? 'ツイートに「@Twitter_idより」をツイートに含めるか。（※要フォローID登録）' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 74,
  ));


  //全フォローボタンの表示
  $wp_customize->add_setting('sns_option_all_sns_follow_btns_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_all_sns_follow_btns_visible', array(
    'settings' => 'sns_option_all_sns_follow_btns_visible',
    'label' =>'全フォローボタンの表示',
    'description' => is_tips_visible() ? '全てのフォローボタンの表示を切り替えます。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 75,
  ));

  //ページトップのフォローボタン表示
  $wp_customize->add_setting('sns_option_top_follows_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_top_follows_visible', array(
    'settings' => 'sns_option_top_follows_visible',
    'label' =>'ページトップフォローボタンの表示',
    'description' => is_tips_visible() ? 'サイトヘッダー部分のフォローボタンを表示するか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 76,
  ));

  //本文下のフォローボタン表示
  $wp_customize->add_setting('sns_option_body_bottom_follows_visible', array(
    'default'  => true,
  ));
  $wp_customize->add_control( 'sns_option_body_bottom_follows_visible', array(
    'settings' => 'sns_option_body_bottom_follows_visible',
    'label' =>'本文下フォローボタンの表示',
    'description' => is_tips_visible() ? '投稿・固定ページ本文下のフォローボタンを表示するか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 77,
  ));

  //フォローメッセージ
  $wp_customize->add_setting('sns_options[follow_msg]', array(
     'default' => 'フォローする',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'follow_msg_textfield', array(
    'settings' => 'sns_options[follow_msg]',
    'label' =>'フォローメッセージ',
    'description' => is_tips_visible() ? 'フォローボタンのラベルを設定します。（※無記入で非表示）' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 80,
  ));

  //TwitterフォローID
  $wp_customize->add_setting('sns_options[twitter]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'twitter_textfield', array(
    'settings' => 'sns_options[twitter]',
    'label' =>'twitter.com/XXXXXXX',
    'description' => is_tips_visible() ? 'TwitterページURLのXXXXXXX部分を入力してください。＠は不要です。' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 90,
  ));

  //FacebookフォローID
  $wp_customize->add_setting('sns_options[facebook]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'facebook_textfield', array(
    'settings' => 'sns_options[facebook]',
    'label' =>'facebook.com/XXXXXXX',
    'description' => is_tips_visible() ? 'FacebookページURLのXXXXXXX部分を入力してください。' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 100,
  ));

  //Google＋フォローID
  $wp_customize->add_setting('sns_options[google_plus]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'google_plus_textfield', array(
    'settings' => 'sns_options[google_plus]',
    'label' =>'plus.google.com/XXXXXXX',
    'description' => is_tips_visible() ? 'Google+ページURLのXXXXXXX部分を入力してください。' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 110,
  ));

  //はてブフォローID
  $wp_customize->add_setting('sns_option_hatebu_id', array(
  ));
  $wp_customize->add_control( 'sns_option_hatebu_id', array(
    'settings' => 'sns_option_hatebu_id',
    'label' =>'b.hatena.ne.jp/XXXXXXX',
    'description' => is_tips_visible() ? 'はてブページURLのXXXXXXX部分を入力してください。' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 113,
  ));

  //InstagramフォローID
  $wp_customize->add_setting('sns_options[instagram]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'instagram_textfield', array(
    'settings' => 'sns_options[instagram]',
    'label' =>'instagram.com/XXXXXXX',
    'description' => is_tips_visible() ? 'InstagramページURLのXXXXXXX部分を入力してください。' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 115,
  ));

  //PinterestフォローID
  $wp_customize->add_setting('sns_options[pinterest]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'pinterest_textfield', array(
    'settings' => 'sns_options[pinterest]',
    'label' =>'pinterest.com/XXXXXXX',
    'description' => is_tips_visible() ? 'PinterestページURLのXXXXXXX部分を入力してください。' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 116,
  ));

  //YouTubeフォローID
  $wp_customize->add_setting('sns_options[youtube]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'youtube_textfield', array(
    'settings' => 'sns_options[youtube]',
    'label' =>'youtube.com/user/XXXXXXX',
    'description' => is_tips_visible() ? 'YouTubeユーザーページURLのXXXXXXX部分を入力してください。' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 117,
  ));

  //YouTubeチャンネルID
  $wp_customize->add_setting('sns_options[youtube_channel]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'youtube_channel_textfield', array(
    'settings' => 'sns_options[youtube_channel]',
    'label' =>'youtube.com/channel/XXXXXXXXXX',
    'description' => is_tips_visible() ? 'YouTubeチャンネルページURLのXXXXXXX部分を入力してください。（※ユーザーページと同時登録した場合はチャンネルページが優先）' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 117.1,
  ));

  //LINE@ID
  $wp_customize->add_setting('sns_option_line_at_id', array(
  ));
  $wp_customize->add_control( 'sns_option_line_at_id', array(
    'settings' => 'sns_option_line_at_id',
    'label' =>'line.me/ti/p/@XXXXXXXXXX',
    'description' => is_tips_visible() ? 'LINE@ページURLのXXXXXXX部分を入力してください。@は不要です。（※モバイル時のみ表示されます。）' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 117.5,
  ));

  //feedlyフォローボタン
  $wp_customize->add_setting('sns_option_feedly_follow_btn_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'sns_option_feedly_follow_btn_visible', array(
    'settings' => 'sns_option_feedly_follow_btn_visible',
    'label' =>'feedlyの表示',
    'description' => is_tips_visible() ? 'feedlyフォローアイコンを表示するか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 120,
  ));

  //RSSフォローボタン
  $wp_customize->add_setting('sns_option_rss_follow_btn_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'sns_option_rss_follow_btn_visible', array(
    'settings' => 'sns_option_rss_follow_btn_visible',
    'label' =>'RSSの表示',
    'description' => is_tips_visible() ? 'RSSフォローアイコンを表示するか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 130,
  ));

  //Twitterカードタグを挿入
  $wp_customize->add_setting('sns_option_twitter_cards_enable', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'sns_option_twitter_cards_enable', array(
    'settings' => 'sns_option_twitter_cards_enable',
    'label' =>'Twitterカードタグを挿入',
    'description' => is_tips_visible() ? 'Twitterカード用のタグをHTMLに埋め込むか。（※プラグインで設定している場合はオフ）' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 133,
  ));

  //Twitterカードタイプ
  $wp_customize->add_setting('sns_option_twitter_card_type', array(
     'default' => 'summary',
  ));
  $wp_customize->add_control( 'sns_option_twitter_card_type', array(
    'settings' => 'sns_option_twitter_card_type',
    'label' =>'Twitterカードタイプ',
    'description' => is_tips_visible() ? 'Twitterカードの表示タイプの設定。' : '',
    'section' => 'sns_section',
    'type' => 'radio',
    'choices'    => array(
      'summary' => 'サマリー（summary）',
      'summary_large_image' => 'サマリー（summary_large_image）',
      'photo' => '写真（photo）',
    ),
    'priority' => 134,
  ));

  //FacebookOGPタグを挿入
  $wp_customize->add_setting('sns_option_facebook_ogp_enable', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'sns_option_facebook_ogp_enable', array(
    'settings' => 'sns_option_facebook_ogp_enable',
    'label' =>'FacebookOGPタグを挿入',
    'description' => is_tips_visible() ? 'Facebook OGP用のタグをHTMLに埋め込むか。（※プラグインで設定している場合はオフ）' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 135,
  ));

  //fb:admins
  $wp_customize->add_setting('sns_options[fb_admins]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'fb_admins_textfield', array(
    'settings' => 'sns_options[fb_admins]',
    'label' =>'FacebookOGP管理者ID（fb:admins）' ,
    'description' => is_tips_visible() ? 'Facebookの管理者IDを入力してください。（※要Facebookユーザー登録）' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 140,
  ));

  //fb:app_id
  $wp_customize->add_setting('sns_options[fb_app_id]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'fb_app_id_textfield', array(
    'settings' => 'sns_options[fb_app_id]',
    'label' =>'FacebookOGPアプリID（fb:app_id）',
    'description' => is_tips_visible() ? 'FacebookのアプリIDを入力してください。（※要Facebookユーザー登録）' : '',
    'section' => 'sns_section',
    'type' => 'text',
    'priority' => 150,
  ));

  //OGPやTwitterカードのホームイメージ
  $wp_customize->add_setting( 'sns_option_ogp_home_image' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sns_option_ogp_home_image', array(
    'settings' => 'sns_option_ogp_home_image',
    'label' =>'OGPやTwitterカードのホームイメージ',
    'description' => is_tips_visible() ? 'SNSカード用のデフォルトのイメージを設定します。（※最低600 × 315px以上推奨）' : '',
    'section' => 'sns_section',
    'priority' => 155,
  ) ) );

  // //OGPやTwitterカードのホームイメージ
  // $wp_customize->add_setting('sns_option_ogp_home_image', array(
  //    'default'  => '',
  // ));
  // $wp_customize->add_control( 'sns_option_ogp_home_image', array(
  //   'settings' => 'sns_option_ogp_home_image',
  //   'label' =>'OGPやTwitterカードのホームイメージ（サイトイメージ画像をURLで指定）',
  //   'section' => 'sns_section',
  //   'type' => 'text',
  //   'priority' => 155,
  // ));

  // //OGPやTwitterカードのサイト概要
  // $wp_customize->add_setting('sns_options[ogp_description]', array(
  //    'default' => 'excerpt',
  //    'type'    => 'option',
  // ));
  // $wp_customize->add_control( 'ogp_description_radio', array(
  //   'settings' => 'sns_options[ogp_description]',
  //   'label' =>'OGP、Twitterカードのdescription',
  //   'section' => 'sns_section',
  //   'type' => 'radio',
  //   'choices'    => array(
  //     'excerpt' => '記事の抜粋（リード文100文字）',
  //     'meta' => 'メタdescription（要All in One SEO Pack）',
  //   ),
  //   'priority' => 160,
  // ));

  //フォローボタンに色をつける
  $wp_customize->add_setting('sns_options[colored_follow_btns]', array(
     'type'  => 'option',
  ));
  $wp_customize->add_control( 'colored_follow_btns_checkbox', array(
    'settings' => 'sns_options[colored_follow_btns]',
    'label' =>'フォローボタンに色をつける',
    'description' => is_tips_visible() ? 'フォローボタンを各種ソーシャルサービスのテーマカラーにするか。' : '',
    'section' => 'sns_section',
    'type' => 'checkbox',
    'priority' => 170,
  ));



  /////////////////////////////
  //広告設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'ads_section', array(
    'title'          =>'広告',
    'description' => is_tips_visible() ? '広告の表示や配置に関する設定です。' : '',
    'priority'       => 97,
  ));

  //全ての広告を表示
  $wp_customize->add_setting('ads_option_ads_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'ads_option_ads_visible', array(
    'settings' => 'ads_option_ads_visible',
    'label' =>'全ての広告を表示',
    'description' => is_tips_visible() ? '全ての広告表示を切り替えます。 （※チェックを外すと全ての広告が非表示に）' : '',
    'section' => 'ads_section',
    'type' => 'checkbox',
    'priority'=> 10,
  ));

  //広告位置の設定
  $wp_customize->add_setting('ads_options[ads_position]', array(
    'default'    => 'under_relations',
    'type'    => 'option',
  ));
  $radio_items = array();
  if ( !is_responsive_enable() ) $radio_items += array('under_relations' => '関連記事下（デフォルト）');
  $radio_items += array('sidebar_top' => 'サイドバートップ',
      'in_content' => '本文記事中（H2見出し手前）');
  if ( is_ads_performance_visible() && !is_responsive_enable() ) $radio_items += array('content_top'=>'コンテンツ上部にバナー表示');
  $label = ( is_responsive_enable() ? 'レスポンシブ広告位置の設定' :  '記事下以外の広告位置');
  $wp_customize->add_control( 'ads_position_radio', array(
    'settings' => 'ads_options[ads_position]',
    'label' => $label,
    'description' => is_tips_visible() ? '広告の配置を設定します。（※「完全レスポンシブ機能」がオンのときは、配置が変わります）' : '',
    'section' => 'ads_section',
    'type' => 'radio',
    'choices'    => $radio_items,
    'priority'=> 20,
  ));

  //広告のラベル
  $wp_customize->add_setting('ads_options[label]', array(
     'default' => 'スポンサーリンク',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'label_textfield', array(
    'settings' => 'ads_options[label]',
    'label' =>'広告のラベル',
    'description' => is_tips_visible() ? '広告のラベルを設定します。アドセンス推奨は「スポンサーリンク」か「広告」。' : '',
    'section' => 'ads_section',
    'type' => 'text',
    'priority'=> 30,
  ));

  //トップページに広告を表示する
  $wp_customize->add_setting('ads_options[ads_top_page_visible]', array(
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'ads_top_page_visible_checkbox', array(
    'settings' => 'ads_options[ads_top_page_visible]',
    'label' =>'トップページに広告を表示する',
    'description' => is_tips_visible() ? 'サイトトップページに広告を表示するか。' : '',
    'section' => 'ads_section',
    'type' => 'checkbox',
    'priority'=> 30,
  ));

  //広告を中央表示
  $wp_customize->add_setting('ads_options[ads_center]', array(
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'ads_center_checkbox', array(
    'settings' => 'ads_options[ads_center]',
    'label' =>'広告を中央表示',
    'description' => is_tips_visible() ? '広告を親要素の中心に表示するか。' : '',
    'section' => 'ads_section',
    'type' => 'checkbox',
    'priority'=> 40,
  ));

  //ダブルレクタングルを縦型にする
  $wp_customize->add_setting('ads_option_vatical_rectangle', array(
  ));
  $wp_customize->add_control( 'ads_option_vatical_rectangle', array(
    'settings' => 'ads_option_vatical_rectangle',
    'label' =>'PC表示のダブルレクタングルを縦型に',
    'description' => is_tips_visible() ? '横並びのダブルレクタングルを縦並びにするか。' : '',
    'section' => 'ads_section',
    'type' => 'checkbox',
    'priority'=> 500,
  ));

  //パフォーマンス追求広告の表示
  $wp_customize->add_setting('ads_options[ads_performance_visible]', array(
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'ads_performance_visible_checkbox', array(
    'settings' => 'ads_options[ads_performance_visible]',
    'label' =>'パフォーマンス追求広告の表示',
    'description' => is_tips_visible() ? '広告が3つ表示されていないページにできる限り表示するか。ウィジェットページに設定用のウィジェットが表示されます。【重要】グローバルナビでサブメニュー表示している人は、メニューがかぶるとアドセンスポリシー違反になるので非推奨' : '',
    'section' => 'ads_section',
    'type' => 'checkbox',
    'priority'=> 600,
  ));

  //PCトップをカスタムサイズ広告に
  $wp_customize->add_setting('ads_option_custum_ad_space', array(
  ));
  $wp_customize->add_control( 'ads_option_custum_ad_space', array(
    'settings' => '',
    'label' =>'PCトップ広告をカスタムサイズ広告に',
    'description' => is_tips_visible() ? '一覧リストのトップ広告にビックバナー（728px）以外の広告を入れるときはオン。' : '',
    'section' => 'ads_section',
    'type' => 'checkbox',
    'priority'=> 700,
  ));

  //アクセス解析設定項目の追加
  $wp_customize->add_section( 'ana_section', array(
    'title'          =>'アクセス解析（Analyticsなど）',
    'description' => is_tips_visible() ? 'Google Analyticsや、ウェブマスターツールに関する設定です。' : '',
    'priority'       => 96,
  ));

  //Google AnalyticsトラッキングID
  $wp_customize->add_setting('ana_options[tracking_id]', array(
     'default' => '',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'tracking_id_textfield', array(
    'settings' => 'ana_options[tracking_id]',
    'label' =>'Google AnalyticsトラッキングID（UA-xxxxxxxx-x）',
    'description' => is_tips_visible() ? 'Google AnalyticsからIDを取得して入力してください。（※プラグインとの二重登録注意）' : '',
    'section' => 'ana_section',
    'type' => 'text',
    'priority'=> 10,
  ));

  //ユーザー属性とインタレストカテゴリに関するレポートに対応する
  $wp_customize->add_setting('ana_options[analytics_interest]', array(
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'analytics_interest_checkbox', array(
    'settings' => 'ana_options[analytics_interest]',
    'label' =>'ユーザー属性とインタレストカテゴリレポートに対応',
    'description' => is_tips_visible() ? 'Googleアナリティクスでユーザーの年齢や興味に関するデータを収集します。（※要Analyticsで設定の有効化）' : '',
    'section' => 'ana_section',
    'type' => 'checkbox',
    'priority'=> 20,
  ));

  //ウェブマスターツールID
  $wp_customize->add_setting('ana_options[webmaster_tool_id]', array(
     'default' => '',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'webmaster_tool_id_textfield', array(
    'settings' => 'ana_options[webmaster_tool_id]',
    'label' =>'ウェブマスターツールID',
    'description' => is_tips_visible() ? 'ウェブマスターツールのサイト認証IDを入力してください。' : '',
    'section' => 'ana_section',
    'section' => 'ana_section',
    'type' => 'text',
    'priority'=> 30,
  ));

  /////////////////////////////
  //ブログカード設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'blog_card_section', array(
    'title'          =>'ブログカード',
    'description' => is_tips_visible() ? '内部リンクブログカード、外部リンクブログカードに関する設定です。' : '',
    'priority'       => 98,
  ));

  //ブログカードの有効化
  $wp_customize->add_setting('blog_card_enable', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'blog_card_enable', array(
    'settings' => 'blog_card_enable',
    'label' =>'ブログカード有効',
    'description' => is_tips_visible() ? 'サイト内のURLを入力するとブログカードとして表示します。' : '',
    'section' => 'blog_card_section',
    'type' => 'checkbox',
    'priority' => 100,
  ));

  //ブログカードのサムネイルを右側にする
  $wp_customize->add_setting('blog_card_thumbnail_right', array(
  ));
  $wp_customize->add_control( 'blog_card_thumbnail_right', array(
    'settings' => 'blog_card_thumbnail_right',
    'label' =>'サムネイルを右側にする',
    'description' => is_tips_visible() ? 'ブログカードのサムネイルを右側に表示するか。' : '',
    'section' => 'blog_card_section',
    'type' => 'checkbox',
    'priority' => 150,
  ));

  //ブログカードのリンクを新しいタブで開く
  $wp_customize->add_setting('blog_card_target_blank', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'blog_card_target_blank', array(
    'settings' => 'blog_card_target_blank',
    'label' =>'新しいタブで開く',
    'description' => is_tips_visible() ? 'ブログカードのリンクをクリックした時に新しいタブで開くか。' : '',
    'section' => 'blog_card_section',
    'type' => 'checkbox',
    'priority' => 200,
  ));

  //はてブ数を表示
  $wp_customize->add_setting('blog_card_hatena_visible', array(
  ));
  $wp_customize->add_control( 'blog_card_hatena_visible', array(
    'settings' => 'blog_card_hatena_visible',
    'label' =>'はてブ数を表示',
    'description' => is_tips_visible() ? 'はてなブックマーク数を表示するか。' : '',
    'section' => 'blog_card_section',
    'type' => 'checkbox',
    'priority' => 300,
  ));

  //サイトロゴ表示
  $wp_customize->add_setting('blog_card_site_logo_visible', array(
  ));
  $wp_customize->add_control( 'blog_card_site_logo_visible', array(
    'settings' => 'blog_card_site_logo_visible',
    'label' =>'サイトロゴを表示',
    'description' => is_tips_visible() ? 'サイトのファビコンとタイトルを表示するか。（※IEではファビコンは表示されません）' : '',
    'section' => 'blog_card_section',
    'type' => 'checkbox',
    'priority' => 400,
  ));

  //カード幅を広げる
  $wp_customize->add_setting('blog_card_width_auto', array(
  ));
  $wp_customize->add_control( 'blog_card_width_auto', array(
    'settings' => 'blog_card_width_auto',
    'label' =>'カード幅を広げる',
    'description' => is_tips_visible() ? 'カード幅はデフォルトで500pxですが、横幅をさらに広げます。（※外部リンクカードも広がります）' : '',
    'section' => 'blog_card_section',
    'type' => 'checkbox',
    'priority' => 500,
  ));

  //外部リンクもブログカードにする
  $wp_customize->add_setting('blog_card_external_enable', array(
     'default' => false,
  ));
  $wp_customize->add_control( 'blog_card_external_enable', array(
    'settings' => 'blog_card_external_enable',
    'label' =>'外部リンクのブログカード有効',
    'description' => is_tips_visible() ? '投稿時に外部リンクのみを記入するとブログカードを表示します。（※はてなサービスに依存するので注意）' : '',
    'section' => 'blog_card_section',
    'type' => 'checkbox',
    'priority' => 600,
  ));

  /////////////////////////////
  //コメント項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'comment_section', array(
    'title'          =>'コメント',
    'description' => is_tips_visible() ? 'コメント表示欄・入力欄に関する設定です。' : '',
    'priority'       => 98.3,
  ));

  //コメントの表示
  $wp_customize->add_setting('comments_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'comments_visible', array(
    'settings' => 'comments_visible',
    'label' =>'コメントの表示',
    'description' => is_tips_visible() ? 'コメントを表示するか。' : '',
    'section' => 'comment_section',
    'type' => 'checkbox',
    'priority' => 10,
  ));

  //コメントスタイル
  $wp_customize->add_setting('comment_type', array(
     'default' => 'default',
  ));
  $wp_customize->add_control( 'comment_type', array(
    'settings' => 'comment_type',
    'label' =>'コメントタイプ',
    'description' => is_tips_visible() ? 'コメントの表示スタイルを設定します。' : '',
    'section' => 'comment_section',
    'type' => 'radio',
    'choices'    => array(
      'default' => 'デフォルト',
      'thread_simple' => 'シンプルスレッド表示',
      'thread' => '某スレッド掲示板風',
    ),
    'priority' => 100,
  ));

  //コメント欄の伸縮
  $wp_customize->add_setting('comment_textarea_expand', array(
     'default' => false,
  ));
  $wp_customize->add_control( 'comment_textarea_expand', array(
    'settings' => 'comment_textarea_expand',
    'label' =>'コメント欄を文章量に応じて伸縮',
    'description' => is_tips_visible() ? 'コメント入力フォームを文章量に応じて伸縮させるか。' : '',
    'section' => 'comment_section',
    'type' => 'checkbox',
    'priority' => 200,
  ));


  /////////////////////////////
  //テーマテキスト設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'theme_text_section', array(
    'title'          =>'テーマ内テキスト',
    'description' => is_tips_visible() ? 'テーマ内で使用されている定型文を変更することができます。' : '',
    'priority'       => 98.5,
  ));

  //関連記事のタイトルを変更
  $wp_customize->add_setting('theme_text_related_entry', array(
     'default' => '関連記事',
  ));
  $wp_customize->add_control( 'theme_text_related_entry', array(
    'settings' => 'theme_text_related_entry',
    'label' =>'関連記事タイトルを変更',
    'description' => is_tips_visible() ? '関連記事のH3見出しを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 100,
  ));

  //コメントタイトルを変更
  $wp_customize->add_setting('theme_text_comments', array(
     'default' => 'コメント',
  ));
  $wp_customize->add_control( 'theme_text_comments', array(
    'settings' => 'theme_text_comments',
    'label' =>'コメントタイトルを変更',
    'description' => is_tips_visible() ? 'コメント欄ののH3見出しを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 200,
  ));

  //返信コメントタイトルを変更
  $wp_customize->add_setting('theme_text_comment_reply_title', array(
     'default' => 'コメントをどうぞ',
  ));
  $wp_customize->add_control( 'theme_text_comment_reply_title', array(
    'settings' => 'theme_text_comment_reply_title',
    'label' =>'返信コメントタイトルを変更',
    'description' => is_tips_visible() ? 'コメントを促すテキスト変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 300,
  ));

  //サブミットラベルを変更
  $wp_customize->add_setting('theme_text_comment_submit_label', array(
     'default' => 'コメントを送信',
  ));
  $wp_customize->add_control( 'theme_text_comment_submit_label', array(
    'settings' => 'theme_text_comment_submit_label',
    'label' =>'コメントサブミットラベルを変更',
    'description' => is_tips_visible() ? 'コメント送信ボタンテキスト変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 400,
  ));

  //匿名のユーザー名を変更
  $wp_customize->add_setting('theme_text_comment_anonymous_name', array(
     'default' => '匿名',
  ));
  $wp_customize->add_control( 'theme_text_comment_anonymous_name', array(
    'settings' => 'theme_text_comment_anonymous_name',
    'label' =>'匿名のユーザー名を変更',
    'description' => is_tips_visible() ? '匿名でコメント投稿するユーザーのデフォルト名を変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 450,
  ));

  //「記事を読む」の変更
  $wp_customize->add_setting('theme_text_read_entry', array(
     'default' => '記事を読む',
  ));
  $wp_customize->add_control( 'theme_text_read_entry', array(
    'settings' => 'theme_text_read_entry',
    'label' =>'「記事を読む」の変更',
    'description' => is_tips_visible() ? '一覧リストの「記事を読む」リンクのテキストを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 500,
  ));

  //「続きを読む」の変更
  $wp_customize->add_setting('theme_text_read_more', array(
     'default' => '続きを読む',
  ));
  $wp_customize->add_control( 'theme_text_read_more', array(
    'settings' => 'theme_text_read_more',
    'label' =>'「続きを読む」の変更',
    'description' => is_tips_visible() ? 'moreタグ以降の「続きを読む」リンクのテキストを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 600,
  ));

  //リストタイトルの「一覧」を変更
  $wp_customize->add_setting('theme_text_list', array(
     'default' => '一覧',
  ));
  $wp_customize->add_control( 'theme_text_list', array(
    'settings' => 'theme_text_list',
    'label' =>'リストタイトルの「一覧」を変更',
    'description' => is_tips_visible() ? 'インデックスリストのタイトルに含まれる「一覧」部分を変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 700,
  ));

  //日付のフォーマット
  $wp_customize->add_setting('theme_text_date_format', array(
     'default' => 'Y/n/j',
  ));
  $wp_customize->add_control( 'theme_text_date_format', array(
    'settings' => 'theme_text_date_format',
    'label' =>'日付表示のフォーマット',
    'description' => is_tips_visible() ? '投稿日や更新日の日付表示フォーマットを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 750,
  ));

  //年月日のフォーマット
  $wp_customize->add_setting('theme_text_ymd_format', array(
     'default' => 'Y年m月d日',
  ));
  $wp_customize->add_control( 'theme_text_ymd_format', array(
    'settings' => 'theme_text_ymd_format',
    'label' =>'一覧：年月日のフォーマット',
    'description' => is_tips_visible() ? 'インデクスリストの年月日表示フォーマットを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 800,
  ));

  //年と月のフォーマット
  $wp_customize->add_setting('theme_text_ym_format', array(
     'default' => 'Y年m月',
  ));
  $wp_customize->add_control( 'theme_text_ym_format', array(
    'settings' => 'theme_text_ym_format',
    'label' =>'一覧：年月のフォーマット',
    'description' => is_tips_visible() ? 'インデクスリストの年月表示フォーマットを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 900,
  ));

  //年のフォーマット
  $wp_customize->add_setting('theme_text_y_format', array(
     'default' => 'Y年',
  ));
  $wp_customize->add_control( 'theme_text_y_format', array(
    'settings' => 'theme_text_y_format',
    'label' =>'一覧：年のフォーマット',
    'description' => is_tips_visible() ? 'インデクスリストの年表示フォーマットを変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 1000,
  ));

  //検索ボックスのプレースホルダ
  $wp_customize->add_setting('theme_text_search_placeholder', array(
     'default' => 'ブログ内を検索',
  ));
  $wp_customize->add_control( 'theme_text_search_placeholder', array(
    'settings' => 'theme_text_search_placeholder',
    'label' =>'検索ボックスのプレースホルダー',
    'description' => is_tips_visible() ? '検索ボックスに表示されるテキスト変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 1100,
  ));

  //記事が見つからなかった時のメッセージ
  $wp_customize->add_setting('theme_text_not_found_message', array(
     'default' => '記事は見つかりませんでした。',
  ));
  $wp_customize->add_control( 'theme_text_not_found_message', array(
    'settings' => 'theme_text_not_found_message',
    'label' =>'見つからなかった時のメッセージ',
    'description' => is_tips_visible() ? '404ページで表示されるテキスト変更します。' : '',
    'section' => 'theme_text_section',
    'type' => 'text',
    'priority'=> 1200,
  ));


  /////////////////////////////
  //管理画面設定項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'admin_section', array(
    'title'          =>'管理画面',
    'description' => is_tips_visible() ? '管理画面やアドミンバー（管理バー）に独自機能を追加する設定です。' : '',
    'priority'       => 98.7,
  ));

  //アドミンバーに独自管理メニュー表示
  $wp_customize->add_setting('admin_bar_menu_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'admin_bar_menu_visible', array(
    'settings' => 'admin_bar_menu_visible',
    'label' =>'アドミンバーに独自管理メニューを表示',
    'description' => is_tips_visible() ? '管理バーにSimplicity独自のメニューを表示するか。' : '',
    'section' => 'admin_section',
    'type' => 'checkbox',
    'priority' => 100,
  ));

  //ログイン画面のロゴをカスタマイズで設定したロゴにする
  $wp_customize->add_setting('admin_original_login_logo_enable', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'admin_original_login_logo_enable', array(
    'settings' => 'admin_original_login_logo_enable',
    'label' =>'ログイン画面のロゴをカスタマイズで設定したロゴにする',
    'description' => is_tips_visible() ? 'テーマカスタマイザーで設定したロゴをログイン画面で表示するか。' : '',
    'section' => 'admin_section',
    'type' => 'checkbox',
    'priority' => 200,
  ));

  //メディアを挿入の初期表示を「この投稿へのアップロード」にする
  $wp_customize->add_setting('admin_initial_media_disp_type_in_entry', array(
  ));
  $wp_customize->add_control( 'admin_initial_media_disp_type_in_entry', array(
    'settings' => 'admin_initial_media_disp_type_in_entry',
    'label' =>'メディアを挿入の初期表示を「この投稿へのアップロード」にする',
    'description' => is_tips_visible() ? '投稿管理画面からメディアを表示したときに、その投稿に含まれている画像のみを表示します。' : '',
    'section' => 'admin_section',
    'type' => 'checkbox',
    'priority' => 300,
  ));


  /////////////////////////////
  //その他項目の追加
  /////////////////////////////
  $wp_customize->add_section( 'other_section', array(
    'title'          =>'その他',
    'description' => is_tips_visible() ? 'ファビコンや、アップルタッチアイコン、その他の設定がまとめてあります。' : '',
    'priority'       => 99,
  ));

  //カスタマイザー項目説明の表示
  $wp_customize->add_setting('tips_visible', array(
    'default' => true,
  ));
  $wp_customize->add_control( 'tips_visible', array(
    'settings' => 'tips_visible',
    'label' =>'Tips（項目の説明）の表示',
    'description' => is_tips_visible() ? 'テーマカスタマイザーのそれぞれの項目に関する詳細な説明を表示するか。' : '',
    'section' => 'other_section',
    'type' => 'checkbox',
    'priority' => 5,
  ));

  //テーマ側でファビコンを設定
  $wp_customize->add_setting('other_options[favicon]', array(
    'priority' => 10,
    'type'     => 'option',
  ));
  $wp_customize->add_control( 'favicon_checkbox', array(
    'settings' => 'other_options[favicon]',
    'label' =>'テーマ側でファビコンを設定',
    'section' => 'other_section',
    'type' => 'checkbox',
    'priority'=> 10,
  ));

  //ファビコン
  $wp_customize->add_setting( 'favicon_url' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon_url', array(
    'settings' => 'favicon_url',
    'label' =>'ファビコン',
    'description' => is_tips_visible() ? 'メディアからファビコンを設定できます。（※.ico推奨）' : '',
    'section' => 'other_section',
    'priority' => 20,
  ) ) );

  // //ファビコンのURL
  // $wp_customize->add_setting('other_options[favicon_url]', array(
  //    'default' => '',
  //    'type'    => 'option',
  // ));
  // $wp_customize->add_control( 'favicon_url_textfield', array(
  //   'settings' => 'other_options[favicon_url]',
  //   'label' =>'ファビコンのURL（未入力時はテーマにあるものを使用）',
  //   'section' => 'other_section',
  //   'type' => 'text',
  //   'placeholder' => 'アップロードしたURLを入力',
  //   'priority'=> 20,

  // ));

  //テーマ側でアップルタッチアイコンを設定
  $wp_customize->add_setting('other_options[apple_touch_icon]', array(
    'type'     => 'option',
  ));
  $wp_customize->add_control( 'apple_touch_icon_checkbox', array(
    'settings' => 'other_options[apple_touch_icon]',
    'label' =>'テーマ側でアップルタッチアイコンを設定',
    'section' => 'other_section',
    'type' => 'checkbox',
    'priority'=> 30,
  ));

  //アップルタッチアイコン
  $wp_customize->add_setting( 'apple_touch_icon_url' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'apple_touch_icon_url', array(
    'settings' => 'apple_touch_icon_url',
    'label' =>'アップルタッチアイコン',
    'description' => is_tips_visible() ? 'メディアからアップルタッチアイコンを設定できます。（※.png推奨）' : '',
    'section' => 'other_section',
    'priority' => 40,
  ) ) );

  // //アップルタッチアイコンのURL
  // $wp_customize->add_setting('other_options[apple_touch_icon_url]', array(
  //    'default' => '',
  //    'type'    => 'option',
  // ));
  // $wp_customize->add_control( 'apple_touch_icon_url_textfield', array(
  //   'settings' => 'other_options[apple_touch_icon_url]',
  //   'label' =>'アップルタッチアイコンのURL（未入力時はテーマにあるものを使用）',
  //   'section' => 'other_section',
  //   'type' => 'text',
  //   'placeholder' => 'アップロードしたURLを入力',
  //   'priority'=> 40,
  // ));

  //Windows Live Writerで編集を表示
  $wp_customize->add_setting('other_options[wlw]', array(
    'type'     => 'option',
  ));
  $wp_customize->add_control( 'wlw_checkbox', array(
    'settings' => 'other_options[wlw]',
    'label' =>'「WLWで編集」リンクを出す',
    'description' => is_tips_visible() ? 'ログインユーザーにWindows Live Writer用の編集リンクを表示します。（※Windows Live Writerユーザーで、「WLW Post Downloader Plugin」のインストールが必須）' : '',
    'section' => 'other_section',
    'type' => 'checkbox',
    'priority'=> 50,
  ));

  //サイドバートップの人気記事にWordpress Popular Postsを使う
  $wp_customize->add_setting('other_options[wpp]', array(
    'type'    => 'option',
  ));
  $wp_customize->add_control( 'wpp_checkbox', array(
    'settings' => 'other_options[wpp]',
    'label' =>'「人気エントリー」ウイジェットにWordpress Popular Postsを使う',
    'description' => is_tips_visible() ? '人気ウィジェットの人気度を判断するのにWordpress Popular PostsプラグインからPV数を取得します。（※プラグインのインストールが必須）' : '',
    'section' => 'other_section',
    'type' => 'checkbox',
    'priority' => 60,
  ));

  //日本語のスラッグを有効にする
  $wp_customize->add_setting('other_options[japanese_slug_enable]', array(
    'type'    => 'option',
  ));
  $wp_customize->add_control( 'japanese_slug_enable_checkbox', array(
    'settings' => 'other_options[japanese_slug_enable]',
    'label' =>'日本語のスラッグを有効にする',
    'description' => is_tips_visible() ? '投稿・固定ページのパーマリンクに日本語を使用するか。' : '',
    'section' => 'other_section',
    'type' => 'checkbox',
    'priority' => 80,
  ));

  //著作権表記
  $wp_customize->add_setting('other_options[site_license]', array(
     'default' => 'copyright',
     'type'    => 'option',
  ));
  $wp_customize->add_control( 'site_license_radio', array(
    'settings' => 'other_options[site_license]',
    'label' =>'ライセンス',
    'description' => is_tips_visible() ? 'サイトのライセンスを設定します。' : '',
    'section' => 'other_section',
    'type' => 'radio',
    'choices'    => array(
      'copyright' => 'Copyright©（デフォルト）',
      'cc_by' => 'CC-表示',
      'cc_by_sa' => 'CC-表示-継承',
      'cc_by_nd' => 'CC-表示-改変禁止',
      'cc_by_nc' => 'CC-表示-非営利',
      'cc_by_nc_sa' => 'CC-表示-非営利-継承',
      'cc_by_nc_nd' => 'CC-表示-非営利-改変禁止',
      'cc0' => 'CC0',
      'pd' => 'パブリックドメイン',
    ),
    'priority' => 1000,
  ));

  //ローカルでのレスポンシブテストを表示
  $wp_customize->add_setting('other_responsive_test_visible', array(
     'default' => true,
  ));
  $wp_customize->add_control( 'other_responsive_test_visible', array(
    'settings' => 'other_responsive_test_visible',
    'label' =>'ローカルでのレスポンシブテストを表示',
    'description' => is_tips_visible() ? 'ローカル環境でテスト時のみサイトフッター部分にレスポンシブテスト用のリンクを表示します。' : '',
    'section' => 'other_section',
    'type' => 'checkbox',
    'priority' => 2000,
  ));

}

//カスタムスキン設定の値を取得
function get_skin_options(){
  return get_option('skin_options');
}

//スキンファイルを取得
//スキンファイルを設定している場合はスタイルシート名（パス/style.css）を返す
//設定していない場合は偽（空文字）を返す
function get_skin_file(){
  $o = get_skin_options();
  return $o['skin_file'];
}

//カスタムレイアウト設定の値を取得
function get_layout_options(){
  return get_option('layout_options');
}

//ヘッダーの高さを取得
function get_header_height(){
  $o = get_layout_options();
  if ($o['header_height']) {
    return $o['header_height'];
  }
  return 100;
}

//ロゴを画像にするかどうか
function is_header_logo_enable(){
  return get_theme_mod( 'layout_option_header_logo_enable', false);
}

//ヘッダーロゴ画像のURL
function get_header_logo_url(){
  $header_logo_url = null;
  if ( is_header_logo_enable() ) {
  //ロゴをURLで指定していたとき
    $o = get_layout_options();
    // return $o['header_logo_url'];
    $header_logo_url = get_theme_mod( 'layout_option_header_logo_url', null);
    $header_logo_url = $header_logo_url ? $header_logo_url : $o['header_logo_url'];
  }
  return $header_logo_url;
}

//ヘッダー外側の背景画像URLの取得
function get_header_outer_background_image(){
  return get_theme_mod( 'header_outer_background_image', '');
}

//モバイルヘッダーの背景画像URLの取得
function get_mobile_header_background_image(){
  return get_theme_mod( 'mobile_header_background_image', '');
}

//完全レスポンシブかどうか
function is_responsive_enable(){
  return get_theme_mod( 'layout_option_responsive_enable', false);
}

//PCでサイドバーをレスポンシブにするか（完全レスポンシブがオフの時のみ）
function is_responsive_responsive_pc_sidebar_enable(){
  return get_theme_mod( 'layout_option_responsive_pc_sidebar_enable', true);
}

//タブレットをモバイル表示するか
function is_tablet_mobile(){
  return get_theme_mod( 'layout_option_tablet_mobile', false);
}

//タイトルを中央寄せにするか
function is_title_center(){
  return get_theme_mod( 'layout_option_title_center', false);
}

//本文文字サイズ
function get_article_font_size(){
  return get_theme_mod( 'layout_option_article_font_size', ARTICLE_FONT_SIZE);
}

//モバイル本文文字サイズ
function get_article_mobile_font_size(){
  return get_theme_mod( 'layout_option_article_mobile_font_size', ARTICLE_FONT_SIZE);
}

//投稿日表示がオンかどうか
function is_create_date_visible(){
  return get_theme_mod( 'layout_option_create_date_visible', true);
}

//時間差表示がオンかどうか
function is_human_time_diff_visible(){
  return get_theme_mod( 'layout_option_human_time_diff_visible', false);
}

//更新日表示がオンかどうか
function is_update_date_visible(){
  return get_theme_mod( 'layout_option_update_date_visible', true);
}

//カテゴリー情報表示がオンかどうか
function is_category_visible(){
  return get_theme_mod( 'layout_option_category_visible', true);
}

//タグ情報表示がオンかどうか
function is_tag_visible(){
  return get_theme_mod( 'layout_option_tag_visible', true);
}

//投稿者情報表示がオンかどうか
function is_author_visible(){
  return get_theme_mod( 'layout_option_author_visible', true);
}

//投稿者情報にTwitter IDを表示するか
function is_twitter_follow_id_author_visible(){
  return get_theme_mod( 'layout_option_twitter_follow_id_author_visible', false);
}

//編集リンク表示がオンかどうか
function is_edit_visible(){
  return get_theme_mod( 'layout_option_edit_visible', true);
}

//編集リンク表示がオンかどうか
function is_eye_catch_visible(){
  return get_theme_mod( 'layout_option_eye_catch_visible', false);
}

//抜粋文字数の取得
function get_excerpt_length(){
  $o = get_layout_options();
  return ($o['excerpt_length'] ? $o['excerpt_length'] : 70);
}

//抜粋の末尾文字
function get_excerpt_more(){
  return strip_tags( get_theme_mod( 'layout_excerpt_more', '...') );
}

//Wordpress固有の抜粋文を使用するか
function is_wordpress_excerpt(){
  return strip_tags( get_theme_mod( 'layout_wordpress_excerpt', false) );
}

//関連記事を表示するか
function is_related_entry_visible(){
  return strip_tags( get_theme_mod( 'layout_option_related_entry_visible', true) );
}

//関連記事表示タイプはデフォルトか
function is_related_entry_type_default(){
  $o = get_layout_options();
  if ($o['related_entry_type'] == 'default' || $o['related_entry_type'] == null) {
    return true;
  } else {
    return false;
  }
}

//関連記事表示タイプはサムネイル3列表示が
function is_related_entry_type_thumbnail3(){
  $o = get_layout_options();
  return ( $o['related_entry_type'] == 'thumbnail' );
}

//関連記事表示タイプはサムネイル4列表示が
function is_related_entry_type_thumbnail4(){
  $o = get_layout_options();
  return ( $o['related_entry_type'] == 'thumbnail4' );
}

//関連記事の関連付けはカテゴリか
function is_related_entry_association_category(){
  $o = get_layout_options();
  if ($o['related_entry_association'] == 'category' || $o['related_entry_association'] == null) {
    return true;
  } else {
    return false;
  }
}

//関連記事数の取得
function get_related_entry_count(){
  $o = get_layout_options();
  return $o['related_entry_count'];
}

//グローバルナビを表示するかどうか
function is_navi_visible(){
  return get_theme_mod( 'layout_option_navi_visible', true);
}

//グローバルナビをアコーディオンにするか
function is_mobile_menu_type_accordion(){
  return (get_theme_mod( 'layout_option_mobile_menu_type', 'accordion') == 'accordion');
}

//グローバルナビをアコーディオンツリーにするか（SlickNav）
function is_mobile_menu_type_accordion_tree(){
  return (get_theme_mod( 'layout_option_mobile_menu_type', 'accordion') == 'accordion_tree');
}

//グローバルナビをモーダル表示するかどうか
function is_mobile_menu_type_modal(){
  return (get_theme_mod( 'layout_option_mobile_menu_type', 'accordion') == 'modal');
}

//グローバルナビをフッターMobileボタン表示するかどうか
function is_mobile_menu_type_slide_in(){
  return is_mobile_menu_type_slide_in_light() || is_mobile_menu_type_slide_in_dark();
}
//グローバルナビを「スライドイン（ライト）」で表示するかどうか
function is_mobile_menu_type_slide_in_light(){
  return (get_theme_mod( 'layout_option_mobile_menu_type', 'accordion') == 'slide_in_light' && is_mobile() && !is_responsive_enable());
}

//グローバルナビを「スライドイン（ダーク）」で表示するかどうか
function is_mobile_menu_type_slide_in_dark(){
  return (get_theme_mod( 'layout_option_mobile_menu_type', 'accordion') == 'slide_in_dark' && is_mobile() && !is_responsive_enable());
}

//グローバルナビを横幅いっぱいにするかどうか
function is_navi_wide(){
  return get_theme_mod( 'layout_option_navi_wide', false);
}

//[前ページ] [次ページ] ナビを表示するか
function is_post_navi_visible(){
  return get_theme_mod( 'layout_option_post_navi_visible', true);
}

//[前ページ] [次ページ] ナビタイプはデフォルトか
function is_post_navi_type_default(){
  return (get_theme_mod( 'layout_option_post_navi_type', 'default' ) == 'default');
}

//[前ページ] [次ページ] ナビタイプはサムネイルか
function is_post_navi_type_thumbnail(){
  return (get_theme_mod( 'layout_option_post_navi_type', 'default' ) == 'thumbnail');
}

//固定ページにパンくずリストを表示するかどうか
function is_page_breadcrumb_visible(){
  return get_theme_mod( 'layout_option_page_breadcrumb_visible', true);
}

//一覧リストのスタイル取得
function get_list_style(){
  $o = get_layout_options();
  return ($o['list_style'] ? $o['list_style'] : 'cards');
}

//固定ページを一覧リストに含めるか
function is_page_include_in_list(){
  return get_theme_mod( 'layout_option_page_include_in_list', false);
}

//サムネイルを表示するかどうか
function is_thumbnail_visible(){
  return get_theme_mod( 'layout_option_thumbnail_visible', true);
}

//サムネイルの角を10pxで丸めるか
function is_thumbnail_radius_10px(){
  $o = get_layout_options();
  return $o['thumbnail_radius'] == 'radius_10px';
}

//サムネイルを円形にするか
function is_thumbnail_circle(){
  $o = get_layout_options();
  return $o['thumbnail_radius'] == 'circle';
}

//一覧リストのスタイルが大きなサムネイル表示かどうか
function is_list_style_thumb_cards(){
  return ( get_list_style() == 'cards' );
}

//一覧リストのスタイルが本文表示かどうか
function is_list_style_bodies(){
  return ( get_list_style() == 'bodies' );
}

//一覧リストのスタイルが大きなサムネイル表示かどうか
function is_list_style_large_thumb_cards(){
  return ( get_list_style() == 'large_thumb' );
}

//一覧リストのスタイルがタイル表示かどうか
function is_list_style_tile_thumb_cards(){
  return ( is_list_style_tile_thumb_2columns() || is_list_style_tile_thumb_3columns() ||
           is_list_style_tile_thumb_2columns_raw() || is_list_style_tile_thumb_3columns_raw() );
}

//一覧リストのスタイルがタイル2列表示かどうか
function is_list_style_tile_thumb_2columns(){
  return ( get_list_style() == 'tile_thumb_2columns' );
}

//一覧リストのスタイルがタイル3列表示かどうか
function is_list_style_tile_thumb_3columns(){
  return ( get_list_style() == 'tile_thumb_3columns' );
}

//一覧リストのスタイルがタイル（画像縦横比保存）表示かどうか
function is_list_style_tile_thumb_cards_raw(){
  return ( is_list_style_tile_thumb_2columns_raw() || is_list_style_tile_thumb_3columns_raw() );
}

//一覧リストのスタイルがタイル2列（画像縦横比保存）表示かどうか
function is_list_style_tile_thumb_2columns_raw(){
  return ( get_list_style() == 'tile_thumb_2columns_raw' );
}

//一覧リストのスタイルがタイル3列（画像縦横比保存）表示かどうか
function is_list_style_tile_thumb_3columns_raw(){
  return ( get_list_style() == 'tile_thumb_3columns_raw' );
}


//一覧リストのスタイルがタイル2列表示かどうか
function is_list_style_tile_thumb_2columns_style(){
  return ( is_list_style_tile_thumb_2columns() || is_list_style_tile_thumb_2columns_raw() );
}

//一覧リストのスタイルがタイル3列表示かどうか
function is_list_style_tile_thumb_3columns_style(){
  return ( is_list_style_tile_thumb_3columns() || is_list_style_tile_thumb_3columns_raw() );
}

//検索ボックスのスタイル取得
function get_search_style(){
  $o = get_layout_options();
  return ($o['search_style'] ? $o['search_style'] : 'default_circle');
}

//引用部分が幅を広げる
function is_blockquote_wide(){
  $o = get_layout_options();
  return $o['blockquote_wide'];
}

//サイドバーの幅を336pxにするかどうか
function is_sidebar_width_336(){
  $o = get_layout_options();
  return $o['sidebar_width_336'];
}

//サイドバーの背景を白色にするか
function is_sidebar_background_white(){
  return get_theme_mod( 'layout_option_sidebar_background_white', false);
}

//サイドバーは左側にするかどうか
function is_sidebar_left(){
  $o = get_layout_options();
  return $o['sidebar_left'];
}

//フッター透過にするかどうか
function is_footer_transparent(){
  $o = get_layout_options();
  return $o['footer_transparent'];
}

//メニューボタンアイコンフォントの取得
function get_menu_button_icon_font(){
  $o = get_layout_options();
  return strip_tags($o['menu_button_icon_font'] ? $o['menu_button_icon_font'] : 'fa-bars');
}

//トップへ戻るボタンを表示するか
function is_go_to_top_button_visible(){
  return get_theme_mod( 'layout_option_go_to_top_button_visible', true);
}

//TOPへ戻るボタンアイコンフォントの取得
function get_go_to_top_button_icon_font(){
  $o = get_layout_options();
  return strip_tags($o['go_to_top_button_icon_font'] ? $o['go_to_top_button_icon_font'] : 'fa-chevron-circle-up');
}

//アイキャッチの自動設定をするか
function is_auto_post_thumbnail_enable(){
  return get_theme_mod( 'image_option_auto_post_thumbnail_enable', false);
}

//Lazy Loadを有効にするか
function is_lazy_load_enable(){
  return get_theme_mod( 'image_option_lazy_load_enable', false);
}

//Lazy Loadのエフェクトを有効にするか
function is_lazy_load_effect_enable(){
  return get_theme_mod( 'image_option_lazy_load_effect_enable', true);
}

//Lazy Loadの読み込み開始位置の取得
function get_lazy_load_threshold(){
  return get_theme_mod( 'image_option_lazy_load_threshold', '0');
}

//Lightboxを有効にするか
function is_lightbox_enable(){
  return get_theme_mod( 'image_option_lightbox_enable', false);
}

//画像効果はボーダーか
function is_image_effect_border1px(){
  return ( get_theme_mod( 'image_option_image_effect', 'none') == 'border1px' );
}

//画像効果はシャドウか
function is_image_effect_shadow(){
  return ( get_theme_mod( 'image_option_image_effect', 'none') == 'shadow' );
}

//カスタムSEO設定の値を取得
function get_seo_options(){
  return get_option('seo_options');
}

//フロントページのタイトルのあとにキャッチフレーズを付加
function is_catch_phrase_to_frontpage_title(){
  return get_theme_mod( 'seo_option_add_catch_phrase_to_frontpage_title', true);
}

//投稿・固定ページタイトルなどにサイト名を付加
function is_site_name_to_singular_title(){
  return get_theme_mod( 'seo_option_add_site_name_to_singular_title', false);
}

//投稿日を検索エンジンに伝えるか
function is_seo_date_create(){
  $options = get_seo_options();
  return ($options['seo_date'] == 'create');
}

//更新日を検索エンジンに伝えるか
function is_seo_date_update(){
  $options = get_seo_options();
  return ($options['seo_date'] == 'update');
}

//抜粋を投稿ページのMeta Descriptionタグに挿入するか
function is_meta_description_insert(){
  return strip_tags( get_theme_mod('seo_meta_description_insert', true) );
}

//カテゴリを投稿ページのMetaキーワードタグに挿入するか
function is_meta_keywords_insert(){
  return strip_tags( get_theme_mod('seo_meta_keywords_insert', true) );
}

//カテゴリーをカテゴリページのMeta Descriptionタグに挿入するか
function is_meta_description_insert_to_category(){
  return strip_tags( get_theme_mod('seo_meta_description_insert_to_category', true) );
}

//カテゴリをカテゴリーページのMetaキーワードタグに挿入するか
function is_meta_keywords_insert_to_category(){
  return strip_tags( get_theme_mod('seo_meta_keywords_insert_to_category', true) );
}

//カスタムSNS設定の値を取得
function get_sns_options(){
  return get_option('sns_options');//外観→カスタム→SNSの設定の取得
}

//シェアメッセージの取得
function get_share_msg(){
  $o = get_sns_options();
  return $o['share_msg'];
}

//全シェアボタン表示がオンかどうか
function is_all_sns_share_btns_visible(){
  return get_theme_mod( 'sns_option_all_sns_share_btns_visible', true);
}

//デフォルトのシェアボタンタイプか
function is_share_button_type_default(){
  return get_theme_mod( 'sns_option_share_button_type', 'default') == 'default';
}

//テーマカラータイプか
function is_share_button_type_theme_color(){
  return get_theme_mod( 'sns_option_share_button_type', 'default') == 'theme_color_type';
}

//Twitterタイプボタンか
function is_share_button_type_twitter(){
  return get_theme_mod( 'sns_option_share_button_type', 'default') == 'twitter_type';
}

//バイラルタイプか
function is_share_button_type_viral(){
  return get_theme_mod( 'sns_option_share_button_type', 'default') == 'viral_type';
}

//独自シェアボタンかどうか
function is_simplicity_share_button(){
  return is_share_button_type_theme_color() || is_share_button_type_twitter() || is_share_button_type_viral();
}

//モバイルのシェアボタンタイプはデフォルトアイコンか
function is_share_button_type_mobile_default(){
  return get_theme_mod( 'sns_option_share_button_type_mobile', 'default') == 'default';
}

//モバイルのシェアボタンタイプはデフォルトバイラルタイプか
function is_share_button_type_mobile_viral(){
  return get_theme_mod( 'sns_option_share_button_type_mobile', 'default') == 'viral_type';
}

//Twitterボタンを表示するかどうか
function is_twitter_btn_visible(){
  return get_theme_mod( 'sns_option_twitter_btn_visible', true);
}

//Facebookボタンを表示するかどうか
function is_facebook_btn_visible(){
  return get_theme_mod( 'sns_option_facebook_btn_visible', true);
}

//Google＋ボタンを表示するかどうか
function is_google_plus_btn_visible(){
  return get_theme_mod( 'sns_option_google_plus_btn_visible', true);
}

//はてなボタンを表示するかどうか
function is_hatena_btn_visible(){
  return get_theme_mod( 'sns_option_hatena_btn_visible', true);
}

//ポケットボタンを表示するかどうか
function is_pocket_btn_visible(){
  return get_theme_mod( 'sns_option_pocket_btn_visible', true);
}

//LINEボタンを表示するかどうか
function is_line_btn_visible(){
  return get_theme_mod( 'sns_option_line_btn_visible', true);
}

//Evernoteボタンを表示するかどうか
function is_evernote_btn_visible(){
  return get_theme_mod( 'sns_option_evernote_btn_visible', false);
}

//feedlyボタンを表示するかどうか
function is_feedly_btn_visible(){
  return get_theme_mod( 'sns_option_feedly_btn_visible', false);
}

//コメント数ボタンを表示するかどうか
function is_comments_btn_visible(){
  return get_theme_mod( 'sns_option_comments_btn_visible', false);
}

//画像にPinterestボタンを表示するかどうか
function is_pinterest_btn_visible(){
  return get_theme_mod( 'sns_option_pinterest_btn_visible', false);
}
//ツイートにユーザーIDを含めるか
function is_twitter_id_include(){
  return get_theme_mod( 'sns_option_twitter_id_include', false);
}

//全フォローボタン表示がオンかどうか
function is_all_sns_follow_btns_visible(){
  return get_theme_mod( 'sns_option_all_sns_follow_btns_visible', true);
}

//ページトップのフォローボタンを表示するか
function is_top_follows_visible(){
  return get_theme_mod( 'sns_option_top_follows_visible', true);
}

//本文下フォローボタンを表示するか
function is_body_bottom_follows_visible(){
  return get_theme_mod( 'sns_option_body_bottom_follows_visible', true);
}

//シェアメッセージの取得
function get_follow_msg(){
  $o = get_sns_options();
  return $o['follow_msg'];
}

//TwitterフォローボタンのIDを取得
function get_twitter_follow_id(){
  $o = get_sns_options();
  return $o['twitter'];
}

//FacebookフォローボタンのIDを取得
function get_facebook_follow_id(){
  $o = get_sns_options();
  return $o['facebook'];
}

//Google＋フォローボタンのIDを取得
function get_google_plus_follow_id(){
  $o = get_sns_options();
  return $o['google_plus'];
}

//はてブフォローボタンのIDを取得
function get_hatebu_id(){
  return get_theme_mod( 'sns_option_hatebu_id', null);
}

//InstagramフォローボタンのIDを取得
function get_instagram_follow_id(){
  $o = get_sns_options();
  return $o['instagram'];
}

//PinterestフォローボタンのIDを取得
function get_pinterest_follow_id(){
  $o = get_sns_options();
  return $o['pinterest'];
}

//YouTubeフォローボタンのIDを取得
function get_youtube_follow_id(){
  $o = get_sns_options();
  return trim(strip_tags($o['youtube']));
}

//YouTubeフォローボタンのチャンネルIDを取得
function get_youtube_channel_id(){
  $o = get_sns_options();
  return trim(strip_tags($o['youtube_channel']));
}

//YouTubeのフォローURLを取得
function get_youtube_follow_url(){
  $url = 'https://www.youtube.com/';
  if ( get_youtube_channel_id() ) {
    $url = $url . 'channel/' . get_youtube_channel_id();
  } elseif ( get_youtube_follow_id() ) {
    $url = $url . 'user/' . get_youtube_follow_id();
  } else {
    $url = false;
  }

  return $url;
}

//LINE@フォローボタンのIDを取得
function get_line_at_id(){
  return get_theme_mod( 'sns_option_line_at_id', null);
}

//feedlyフォローボタンを表示するかどうか
function is_feedly_follow_btn_visible(){
  return get_theme_mod( 'sns_option_feedly_follow_btn_visible', true);
}

//RSSフォローボタンを表示するかどうか
function is_rss_follow_btn_visible(){
  return get_theme_mod( 'sns_option_rss_follow_btn_visible', true);
}

//Twitterカードタグを挿入するか
function is_twitter_cards_enable(){
  return get_theme_mod( 'sns_option_twitter_cards_enable', true);
}


//Twitterカードタイプを取得
function get_twitter_card_type(){
  return strip_tags( get_theme_mod( 'sns_option_twitter_card_type', 'summary') );
}

//FacebookOGPタグを挿入するか
function is_facebook_ogp_enable(){
  return get_theme_mod( 'sns_option_facebook_ogp_enable', true);
}

//fb:adminsを取得
function get_fb_admins(){
  $o = get_sns_options();
  return $o['fb_admins'];
}

//fb:app_idを取得
function get_fb_app_id(){
  $o = get_sns_options();
  return $o['fb_app_id'];
}

//OGPやTwitterカードのホームイメージのURLを取得
function get_ogp_home_image(){
  return get_theme_mod( 'sns_option_ogp_home_image', '');
}

//フォローボタンに色をつけるかどうか
function is_colored_follow_btns(){
  $o = get_option('sns_options');
  return $o['colored_follow_btns'];
}

//タイトル下に小さなシェアボタンを表示するかどうか
function is_top_btns_visible(){
  $o = get_option('sns_options');
  return $o['top_btns_visible'];
}

//追従シェアボタンを表示するかどうか
function is_obsequence_sns_btns_visible(){
  $o = get_option('sns_options');
  return $o['obsequence_sns_btns_visible'];
}

//広告表示がオンかどうか
function is_bottom_sns_btns_visible(){
  return get_theme_mod( 'sns_option_bottom_sns_btns_visible', true);
}

//カスタム広告設定の値を取得
function get_ads_options(){
  return get_option('ads_options');
}

//広告表示がオンかどうか
function is_ads_visible(){
  return get_theme_mod( 'ads_option_ads_visible', true);
}

//ダブルレクタングルが縦型か
function is_ads_vatical_rectangle(){
  return get_theme_mod( 'ads_option_vatical_rectangle', false);
}

//パフォーマンス追求広告を表示するかどうか
function is_ads_performance_visible(){
  $o = get_option('ads_options');
  return $o['ads_performance_visible'];
}

//PCトップをカスタムサイズ広告にするか
function is_ads_custum_ad_space(){
  return get_theme_mod( 'ads_option_custum_ad_space', false);
}

//広告を本文中に掲載するか
function is_ads_in_content(){
  $o = get_option('ads_options');
  return $o['ads_position'] == 'in_content';
}

//広告をコンテンツトップに掲載するか
function is_ads_content_top(){
  $o = get_option('ads_options');
  return $o['ads_position'] == 'content_top' && is_ads_performance_visible();
}

//広告をサイドバートップに掲載するか
function is_ads_sidebar_top(){
  $o = get_option('ads_options');
  return $o['ads_position'] == 'sidebar_top';
}

//関連記事下に掲載するか
function is_ads_under_relations(){
  $o = get_option('ads_options');
  return $o['ads_position'] == 'under_relations';
}

//広告ラベルの取得（文字が入力されていない場合は偽を返す）
function get_ads_label(){
  $o = get_option('ads_options');
  return ($o['label'] ? $o['label'] : 'スポンサーリンク');
}

//広告をサイドバートップに掲載するか
function is_ads_top_page_visible(){
  $o = get_option('ads_options');
  return $o['ads_top_page_visible'];
}

//広告を中央表示
function is_ads_center(){
  $o = get_option('ads_options');
  return $o['ads_center'];
}

//ブログカードを有効にするか
function is_blog_card_enable(){
  return get_theme_mod( 'blog_card_enable', true);
}

//ブログカードのサムネイルを右側にするか
function is_blog_card_thumbnail_right(){
  return get_theme_mod( 'blog_card_thumbnail_right', false);
}

//ブログカードリンクを新しいタブで開くか
function is_blog_card_target_blank(){
  return get_theme_mod( 'blog_card_target_blank', true);
}

//はてブ数を表示するか
function is_blog_card_hatena_visible(){
  return get_theme_mod( 'blog_card_hatena_visible', false);
}

//サイトロゴを表示するか
function is_blog_card_site_logo_visible(){
  return get_theme_mod( 'blog_card_site_logo_visible', false);
}

//ブログカードをカラム幅いっぱいにするか
function is_blog_card_width_auto(){
  return get_theme_mod( 'blog_card_width_auto', false);
}

//外部リンクをブログカードにするか
function is_blog_card_external_enable(){
  return get_theme_mod( 'blog_card_external_enable', false);
}

//関連記事タイトルの取得
function get_theme_text_related_entry(){
  return get_theme_mod( 'theme_text_related_entry', '関連記事');
}

//コメントを表示するか
function is_comments_visible(){
  return get_theme_mod( 'comments_visible', true );
}

//コメントタイプがデフォルトか
function is_comment_type_default(){
  return get_theme_mod( 'comment_type', 'default' ) == 'default';
}

//コメントタイプが2chタイプか
function is_comment_type_thread(){
  return get_theme_mod( 'comment_type', 'default' ) == 'thread';
}

//コメントタイプがシンプルスレッド表示タイプか
function is_comment_type_thread_simple(){
  return get_theme_mod( 'comment_type', 'default' ) == 'thread_simple';
}

//コメント欄を伸縮するか
function is_comment_textarea_expand(){
  return get_theme_mod( 'comment_textarea_expand', false);
}

//コメントタイトルの取得
function get_theme_text_comments(){
  return get_theme_mod( 'theme_text_comments', 'コメント');
}

//返信コメントタイトルの取得
function get_theme_text_comment_reply_title(){
  return get_theme_mod( 'theme_text_comment_reply_title', 'コメントをどうぞ');
}

//コメントサブミットラベルの取得
function get_theme_text_comment_submit_label(){
  return get_theme_mod( 'theme_text_comment_submit_label', 'コメントを送信');
}

//匿名ユーザー名の取得
function get_theme_text_comment_anonymous_name(){
  $name = get_theme_mod( 'theme_text_comment_anonymous_name', '匿名');
  return ( $name ? $name : '匿名' );
}

//記事を読むテキストの取得
function get_theme_text_read_entry(){
  return get_theme_mod( 'theme_text_read_entry', '記事を読む');
}

//続きを読むテキストの取得
function get_theme_text_read_more(){
  return get_theme_mod( 'theme_text_read_more', '続きを読む');
}

//リストタイトルの「一覧」部分のテキストを取得
function get_theme_text_list(){
  return get_theme_mod( 'theme_text_list', '一覧');
}

//日付表示のフォーマットを取得
function get_theme_text_date_format(){
  return get_theme_mod( 'theme_text_date_format', 'Y/n/j');
}

//年月日のフォーマットを取得
function get_theme_text_ymd_format(){
  return get_theme_mod( 'theme_text_ymd_format', 'Y年m月d日');
}

//年月のフォーマットを取得
function get_theme_text_ym_format(){
  return get_theme_mod( 'theme_text_ym_format', 'Y年m月');
}

//年のフォーマットを取得
function get_theme_text_y_format(){
  return get_theme_mod( 'theme_text_y_format', 'Y年');
}

//検索ボックスのプレースホルダテキストを取得
function get_theme_text_search_placeholder(){
  return get_theme_mod( 'theme_text_search_placeholder', 'ブログ内を検索');
}

//記事が見つからなかった時のメッセージテキストを取得
function get_theme_text_not_found_message(){
  return get_theme_mod( 'theme_text_not_found_message', '記事は見つかりませんでした。');
}

//アドミンバーに独自メニューを表示するか
function is_admin_bar_menu_visible(){
  return get_theme_mod( 'admin_bar_menu_visible', true);
}

//ログイン画面でカスタマイズで設定したロゴを表示するか
function is_original_login_logo_enable(){
  return get_theme_mod( 'admin_original_login_logo_enable', true);
}

//initial_media_disp_type_in_entryか
function is_initial_media_disp_type_in_entry(){
  return get_theme_mod( 'admin_initial_media_disp_type_in_entry', false);
}

//テーマでファビコンを設定するかどうか
function is_favicon_enable(){
  $o = get_option('other_options');
  return $o['favicon'];
}

//カスタムアクセス解析設定の値を取得
function get_ana_options(){
  return get_option('ana_options');
}

//トラッキングIDの取得
function get_tracking_id(){
  $o = get_ana_options();
  return $o['tracking_id'];
}

//ユーザー属性とインタレストカテゴリに関するレポートに対応しているか
function is_analytics_interest(){
  $o = get_ana_options();
  return $o['analytics_interest'];
}

//トラッキングIDの取得
function get_webmaster_tool_id(){
  $o = get_ana_options();
  return $o['webmaster_tool_id'];
}

//ファビコンのURLを取得
function get_favicon_url(){
  $o = get_option('other_options');//旧バージョンのファビコン設定
  $favicon_url = get_theme_mod( 'favicon_url', null );
  return $favicon_url ? $favicon_url : $o['favicon_url'];
}

//ファビコンのURLを取得
function get_the_favicon_url(){
  if (is_favicon_enable()) {
    if ( get_favicon_url() ) {
      return get_favicon_url();
    } else {
      return get_stylesheet_directory_uri().'/images/favicon.ico';
    }
  }
}

//テーマでアップルタッチアイコンを設定するかどうか
function is_apple_touch_icon_enable(){
  $o = get_option('other_options');
  return $o['apple_touch_icon'];
}

//アップルタッチアイコンのURLを取得
function get_apple_touch_icon_url(){
  $o = get_option('other_options');//旧バージョンのアップルタッチアイコン設定
  $apple_touch_icon_url = get_theme_mod( 'apple_touch_icon_url', null );
  return $apple_touch_icon_url ? $apple_touch_icon_url : $o['apple_touch_icon_url'];
}

//「WLWで編集」を出すかどうか
function is_wlw_enable(){
  $o = get_option('other_options');
  return $o['wlw'];
}

//テーマカスタマイザー項目の説明を表示するか
function is_tips_visible(){
  return get_theme_mod( 'tips_visible', true );
}

//Simplicity新着・人気エントリーウイジェットにWordpress Popular Postsを使うかどうか
function is_wpp_enable(){
  $o = get_option('other_options');
  return $o['wpp'];
}

//日本語のスラッグを有効にするかどうか
function is_japanese_slug_enable(){
  $o = get_option('other_options');
  return $o['japanese_slug_enable'];
}

//ライセンス表記の取得
function get_site_license(){
  $o = get_option('other_options');
  $site_link = ' <a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
  $cc_desc = ' Some Rights Reserved.';
  switch ( $o['site_license'] ) {
    case "cc_by":
      return '<a href="http://creativecommons.org/licenses/by/2.1/jp/" rel="nofollow license">CC BY</a>'.$site_link.$cc_desc;
      break;
    case "cc_by_sa":
      return '<a href="http://creativecommons.org/licenses/by-sa/2.1/jp/" rel="nofollow license">CC BY-SA</a>'.$site_link.$cc_desc;
      break;
    case "cc_by_nd":
      return '<a href="http://creativecommons.org/licenses/by-nd/2.1/jp/" rel="nofollow license">CC BY-ND</a>'.$site_link.$cc_desc;
      break;
    case "cc_by_nc":
      return '<a href="http://creativecommons.org/licenses/by-nc/2.1/jp/" rel="nofollow license">CC BY-NC</a>'.$site_link.$cc_desc;
      break;
    case "cc_by_nc_sa":
      return '<a href="http://creativecommons.org/licenses/by-nc-sa/2.1/jp/" rel="nofollow license">CC BY-NC-SA</a>'.$site_link.$cc_desc;
      break;
    case "cc_by_nc_nd":
      return '<a href="http://creativecommons.org/licenses/by-nc-nd/2.1/jp/" rel="nofollow license">CC BY-NC-ND</a>'.$site_link.$cc_desc;
      break;
    case "cc0":
      return '<a href="http://creativecommons.org/publicdomain/zero/1.0/" rel="nofollow license">CC0</a>'.$site_link.' No Rights Reserved.';
      break;
    case "pd":
      return '<a href="http://creativecommons.org/publicdomain/zero/1.0/" rel="nofollow license">Public Domain</a>'.$site_link.' No Rights Reserved.';
      break;
    default:
      return 'Copyright&copy; '.$site_link.' All Rights Reserved.';
  }
}

//ローカルでレスポンシブテストのリンクを表示するか
function is_responsive_test_visible(){
  return get_theme_mod( 'other_responsive_test_visible', true);
}

//Windows Live Writerで編集するためのリンクを作成する
function wlw_edit_post_link($link, $before, $after){
  if (is_wlw_enable()) {
    if ( is_user_logged_in() ):
      $query = ( is_single() ? 'postid' : 'pageid' );
      echo $before.'<a href="wlw://'.get_this_site_domain().'/?'.$query.'=';
      echo the_ID();
      echo '">'.$link.'</a>'.$after;
    endif;
  }
}

//カテゴリーメタディスクリプション用の説明文を取得
function get_meta_description_from_category(){
  $cate_desc = trim( strip_tags( category_description() ) );
  if ( $cate_desc ) {//カテゴリ設定に説明がある場合はそれを返す
    return $cate_desc;
  }
  $cate_desc = '「' . single_cat_title('', false) . '」の記事一覧です。' . get_bloginfo('description');
  return $cate_desc;
}

//カテゴリメタキーワード用のキーワードを取得
function get_meta_keyword_from_category(){
  return single_cat_title('', false) . ',ブログ,記事一覧';
}









