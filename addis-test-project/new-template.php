<?php
/*
 * Template Name: New Custom Post Template
 * Template Post Type: post, page, properties
 */
  
  ?>
 
 <section id="primary" class="content-area col-sm-12 col-lg-8">
		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol>
          <li data-target="#carousel-example-generic" data-slide-to="0"></li>
          
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
		  <?php echo get_post_meta($post->ID, 'header_image', true);?>
          </div>
                    
        </div>
        
      </div>
    </div>
    <div class="col-md-3">
      <h4>Heading</h4>
      <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words: 'Yes, we went to school in the sea, though you mayn't believe it—' 'I never said I didn't!' interrupted Alice. 'You did,' said the Mock Turtle..</p>
      
    </div>
  </div>
  <div class="dropdown-divider"></div>
  <div class="row">
        <div class="col-md-6">
      <h4>Facts</h4>
	  <?php echo get_post_meta($post->ID, 'facts', true);?>
           
		<?php 
			
		while ( have_posts() ) : the_post();

			//get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();
								
				echo get_post_meta($post->ID, 'facts', true);
			
		endwhile; // End of the loop.
		?>
        
      </div>
      <div class="col-md-6">
      <h4>Payment plan</h4>
	  <p>Price:$<?php	echo get_post_meta($post->ID, 'price', true);?> </p>
      <?php	echo get_post_meta($post->ID, 'payment_plan', true);?>
           
      </div>
    </div>
  </div>
  <div class="dropdown-divider"></div>
</div>

		
		<div id="main" class="site-main" role="main">
		
			

		</div><!-- #main -->
	</section><!-- #primary -->

