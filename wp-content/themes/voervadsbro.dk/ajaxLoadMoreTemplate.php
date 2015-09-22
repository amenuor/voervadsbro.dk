<div class="post">
  <div class="row">
    <div class="small-12 columns text-center">
      <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
    </div>
  </div>
  <div class="row metainfo">
    <div class="small-6 columns text-left">
      <i class="fi-torso"></i><?php the_author(); ?>
    </div>
    <div class="small-6 columns text-right">
      <i class="fi-clock"></i><?php the_time("F d, Y"); ?>
    </div>
  </div>
  <div class="row">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="large-4 columns text-center">
        <?php the_post_thumbnail('medium'); ?>
      </div>
      <div class="large-8 columns text-left excerpt">
        <?php the_excerpt(); ?>
      </div>
    <?php else:?>
      <div class="large-12 columns text-left excerpt">
        <?php the_excerpt(); ?>
      </div>
    <?php endif;?>
  </div>
</div>
