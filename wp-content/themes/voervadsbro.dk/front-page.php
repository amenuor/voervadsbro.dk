<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* e.g., it puts together the home page when no home.php file exists.
*
* Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
*
* @package Voervadsbro.dk
*/

get_header(); ?>
<div id="fb-root"></div>
<!-- Facebook -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=207249829313515";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<header class="header">
  <div class="bg-img"><img src="<?php echo get_template_directory_uri();?>/img/mainbg.jpg" alt="Background Image" /></div>
  <div class="wrapper title">
    <div class="slide">
      <div class="row">
        <div class="12-small columns">
          <h3>Velkommen til</h3>
        </div>
      </div>
      <div class="row">
        <div class="12-small columns">
          <h1>Voervadsbro</h1>
        </div>
      </div>
      <p class="subline">
        Landsbyforening
      </p>
    </div>
  </div>
</header>
<div class="trigger flyAnimation" data-info="&#xf109;"><span></span></div>

<section class="divider ss-style-doublediagonal">
  <h2>Voervadsbro nu</h2>
  <div class="row">
    <div class="large-8 columns">
      <?php

      $args = array(
        'post_type' => 'tribe_events',
        'posts_per_page' => 3
      );
      $latest = new WP_Query( $args );
      //query_posts($args);
      while( $latest->have_posts() ) : $latest->the_post();

      ?>

      <div class="event row">
        <div class="large-4 columns">
          <time datetime="2014-09-20" class="icon">
            <em><?php echo tribe_get_start_date(null, true, 'H:i'); ?> - <?php echo tribe_get_end_date(null, true, 'H:i'); ?></em>
            <strong><?php echo tribe_get_start_date(null, true, 'F'); ?></strong>
            <span><?php echo tribe_get_start_date(null, true, 'j'); ?></span>
          </time>
        </div>
        <div class="large-8 columns">

          <div class="event-desc">
            <h4 class="event-desc-header"><a href="<?php echo esc_url( tribe_get_event_link() ); ?>"><?php the_title(); ?></a></h4>
            <p class="event-desc-detail"><span class="event-desc-time"></span><?php echo voervadsbro_excerpt(10); ?></p>
          </div>
        </div>
    </div>
    <hr class="eventdivider">
  <?php endwhile; ?>

</div>
<div class="large-4 columns">
  <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
</div>
</div>

<div class="row">
  <div class="small-12 columns">
    <a class="button text-transform" href="/events">Se hvad der ellers sker i Voervadsbro...</a>
  </div>
</div>


</section>

<svg id="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
  <path d="M0 100 C40 0 60 0 100 100 Z"/>
</svg>
<section class="divider color">
  <h2>Seneste Nyheder</h2>
  <div class="row">

    <?php
      $args = array(
      'posts_per_page' => 3,
      'cat' => 4
      );

      $latest = new WP_Query( $args );
      while( $latest->have_posts() ) : $latest->the_post();
    ?>

      <div class="large-4 medium-4 columns">
        <ul class="pricing-table active-tb shadow mrgn-20-top">
          <li class="title"><?php the_title(); ?></li>
          <?php if ( has_post_thumbnail() ) : ?>
            <li class="bullet-item"><?php the_post_thumbnail('small'); ?></li>
          <?php endif;?>
          <li class="bullet-item"><?php echo voervadsbro_excerpt(20); ?></li>
          <li class="cta-button"><a class="button text-transform" href="<?php the_permalink(); ?>">Læs mere</a></li>
        </ul>
      </div>

    <?php endwhile; ?>

  <div class="row">
    <div class="small-12 columns">
      <a class="button text-transform" href="/blog">Se flere nyheder ...</a>
    </div>
  </div>


</section>
<svg id="slit" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
  <path id="slitPath2" d="M50 100 C49 80 47 0 40 0 L47 0 Z" />
  <path id="slitPath3" d="M50 100 C51 80 53 0 60 0 L53 0 Z" />
  <path id="slitPath1" d="M47 0 L50 100 L53 0 Z" />
</svg>
<section id="socialCollage" class="divider ss-style-foldedcorner">
  <h2>Om #Voervadsbro</h2>
  <div class="row">
    <div class="large-12 columns">
      <?php
      echo do_shortcode('[tagregator hashtag="#Voervadsbro"]');
      ?>
    </div>
  </div>

</section>
<?php get_footer(); ?>
