<div class="navigation">
<div id="prev-next" class="clearfix">
<?php
$prevpost = get_adjacent_post(false, '', true); //前の記事
$nextpost = get_adjacent_post(false, '', false); //次の記事
if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>
<?php
if ( $prevpost ) { //前の記事が存在しているとき
  echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" class="clearfix">
        <div id="prev-title"><i class="fa fa-arrow-left pull-left"></i></div>
        ' . get_the_post_thumbnail( $prevpost->ID, 'thumb100', array('alt' => get_the_title( $prevpost->ID )) ) . '
        <p>' . get_the_title($prevpost->ID) . '</p></a>';
} else { //前の記事が存在しないとき
echo  '<div id="prev-no"><a href="' .home_url('/'). '"><div id="prev-next-home"><i class="fa fa-home"></i>
  </div></a></div>';
}
if ( $nextpost ) { //次の記事が存在しているとき
  echo '<a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" id="next" class="clearfix">
        <div id="next-title"><i class="fa fa-arrow-right pull-left"></i></div>
        ' . get_the_post_thumbnail( $nextpost->ID, 'thumb100', array('alt' => get_the_title( $nextpost->ID )) ) . '
<p>'. get_the_title($nextpost->ID) . '</p></a>';
} else { //次の記事が存在しないとき
echo '<div id="next-no"><a href="' .home_url('/'). '"><div id="prev-next-home"><i class="fa fa-home"></i>
</div></a></div>';
}
?>
<?php } ?>
</div>
</div><!-- /.navigation -->