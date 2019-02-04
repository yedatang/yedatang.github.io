<?php /* Template Name: samplestory */ ?>

<?php get_header(); ?>

<body>
<?php
	 if ( have_posts() ) : while ( have_posts() ) : the_post();
           if ( has_post_thumbnail() ) {
    $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	    echo '<div id="blogwrap" style="background:url('.$feat_image_url.') no-repeat center top;">';
           }
           endwhile;
         endif;
         ?>

  <div id="blogwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
		<?php if (have_posts()):
		while (have_posts()):
		the_post(); ?>
          <h1> <?php the_title();?></h1>
		<?php endwhile;
		endif;?>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt3">

    <div class="row">
      <div class="col-lg-4 col-md-4 centered presentation">
		<?php if (have_posts()):
		while (have_posts()):
		the_post(); ?>
        <img class="img-circle" src="<?php bloginfo('template_url'); ?>/img/team/1.jpg" height="90px" width="90px" alt="">
        <h4><?php the_author();?></h4>
        <p class="sp">
          <gr><?php the_date();?></gr>
        </p>
	    <?php endwhile;
		endif;?>
      </div>

      <div class="col-lg-7 col-md-7 blog-post" style="text-align:left;">
	 	<?php if (have_posts()):
		while (have_posts()):
		the_post(); ?>
        <h5><a href="blog.html">BACK TO BLOG</a></h5>
        <h2><?php the_title();?></h2>
        <p class="lead sep"><?php the_content();?></p>
        <h3 class="sep2">2 Comments</h3>
        <hr>
	  	<?php endwhile;
		endif;?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-7 col-md-7 col-lg-offset-4">

        <div class="comments">
          <img class="img-circle" src="<?php bloginfo('template_url'); ?>/img/team/2.jpg" height="60px" width="60px">
          <h4>Mark Jacobson - August 13, 2014</h4>
          <p><a href="#">REPLY</a></p>
          <p>Proteids or Albuminoids are frequently termed flesh-formers. They are composed of nitrogen, carbon, hydrogen, oxygen, and a small quantity of sulphur, and are extremely complex bodies.</p>
        </div>

        <div class="comments">
          <img class="img-circle" src="<?php bloginfo('template_url'); ?>/img/team/4.jpg" height="60px" width="60px">
          <h4>Maggie Shaw - August 13, 2014</h4>
          <p><a href="#">REPLY</a></p>
          <p>Their chief function is to form flesh in the body; but without previously forming it, they may be transformed into fat or merely give rise to heat. They form the essential part of every living cell.</p>
        </div>

      </div>
    </div>

  </div>




<br><br><br>

<?php get_footer(); ?>
