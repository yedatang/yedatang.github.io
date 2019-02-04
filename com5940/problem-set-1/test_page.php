<?php /* Template Name: test */ ?>

<?php get_header(); ?>

<body>
<style>
li{list-style-type:none;}
</style>

  <div class="container">
    <div class="row mt3 presentation">
      <div class="centered">
        <i class="icon ion-ios7-chatbubble-outline large-icon"></i>
        <h1>書店故事</h1>
        <hr>
      </div>
    </div>
    <!-- /row -->
  </div>

<div class="container">
<div class="row">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type' => array('story'),
  'post_status' => 'publish',
  'order' => 'DESC',
  'orderby' => 'date',
  'posts_per_page' => 8,
  'paged' => $paged,
);

// WP_Query
$eq_query = new WP_Query( $args );
if ($eq_query->have_posts()) : // The Loop
?>

<div class="wp-easy-query">

<div class="wp-easy-query-posts">

<?php
while ($eq_query->have_posts()): $eq_query->the_post();
?>
<div class="col-lg-3 col-md-3 blog-list">

<li <?php if (!has_post_thumbnail()) { ?> class="no-img"<?php } ?>>
   <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail('medium',array('class' => 'img-circle aligncenter'));
   }?>
        <p class="centered"><a class="btitle" href="<?php the_permalink();?>"><?php the_title();?></a></p>
        <h5 class="centered"><?php the_author();?></h5>
        <p><?php the_excerpt();?></p>
        <p class="entry-meta"><i class="icon ion-ios7-briefcase-outline"></i><?php the_time("F d, Y"); ?></p>
</li>
</div>
<?php endwhile; wp_reset_query(); ?>

</div>

<?php include(EQ_PAGING); ?>
</div>

<?php endif; ?>
</div>
</div>
<br>
<br>
<br>
<br>
<br>

<?php get_footer(); ?>
