<?php /* Template Name: storylist */ ?>

<?php get_header(); ?>

<body>

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
  	<?php if (have_posts()):
          while (have_posts()):
              the_post(); ?>
    <div class="col-lg-3 col-md-3 blog-list">
	<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium',array('class' => 'img-circle aligncenter'));?></a>
        <p class="centered"><a class="btitle" href="<?php the_permalink();?>"><?php the_title();?></a></p>
        <h5 class="centered"><?php the_author();?></h5>
        <p><?php the_excerpt();?></p>
        <h5><i class="icon ion-ios7-briefcase-outline"></i><?php the_date();?></h5>
      </div>
	<?php endwhile;
		endif;?>

    </div>
  </div>
<br>
<br>
<br>

<?php get_footer(); ?>
