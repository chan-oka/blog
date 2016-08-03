<!-- post navigation -->
<div class="navigation">
  <?php
  $prev_post = get_previous_post();
  if( $prev_post ): ?>
    <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-arrow-left fa-2x pull-left"></i>'.$prev_post->post_title); ?></div>
  <?php
  endif;

  $next_post = get_next_post();
  if( $next_post ): ?>
    <div class="next"><?php next_post_link('%link', '<i class="fa fa-arrow-right fa-2x pull-left"></i>'.$next_post->post_title); ?></div>
  <?php
  endif;
  ?>
</div>
<!-- /post navigation -->