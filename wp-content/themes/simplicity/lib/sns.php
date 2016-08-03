<?php //SNS関係の関数

//はてブするときに使用するエンコードしたURL
function get_encoded_url($url){
  return urlencode(mb_convert_encoding($url, "UTF-8"));
}

//はてブするときに使用するエンコードしたタイトル
function get_encoded_title($title){
  return urlencode(mb_convert_encoding($title, "UTF-8"));
}

//はてブURL
function get_hatebu_url($url){
  $u = preg_replace('/https?:\/\//', '', $url);
  return 'http://b.hatena.ne.jp/entry/'.$u;
}

//Twitter IDを含めるURLパラメータを取得
function get_twitter_via_param(){
  return (is_twitter_id_include() ? '&via='.get_twitter_follow_id() : '');
}
