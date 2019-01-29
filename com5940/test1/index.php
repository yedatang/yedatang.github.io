<?php get_header(); ?>

  <body>

<?php get_sidebar(); ?>


    <!-- Page Content -->
    <br>
    <div class="container">
  <h1 class="my-4"> <?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

      <!-- Portfolio Section -->
      <hr><br><br>
      <h2>Portfolio Heading</h2><br>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <?php if (have_posts()):
          while (have_posts()):
              the_post(); ?>
          <div class="card h-100">
            <a href="<?php the_permalink();?>">	<a href="<?php the_post_thumbnail();?>"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php the_permalink();?>">Project One</a>
              </h4>
              <p class="card-text"><?php the_excerpt();?></p>
            </div>
          <?php endwhile;
            endif;?>
          </div>
        </div>

      </div>
      <!-- /.row -->
            </div>
<br> <br>

<?php get_footer(); ?>
