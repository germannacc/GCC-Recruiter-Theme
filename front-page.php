<?php
/**
* The template for displaying the home page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gcc-starterkit
*/
get_header();
?>
<section id="about" class="content-section bg-primary">
  
  <div class="container bg-white">
    
    <div class="row">

      <div class="col-sm-11 col-md-12">

        <div class="p-3 p-lg-4">

          <h1 class="w-100 mb-4 display-5"><?php bloginfo( 'name' ); ?></h1>

          <div class="row">

              <div class="col-sm-12 col-lg-8 column">

                <?php the_field( 'recruiter_information' ); ?>

              </div>
          
              <div class="col-sm-12 col-lg-4">
    <?php
    while ( have_posts() ) :
      the_post();

      the_content();

    endwhile; // End of the loop.
    ?>
              
              </div>

          </div>

          
        </div>

    </div>
         
  </div>
 </div>
</section>
<?php
get_footer();