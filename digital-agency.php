<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Digital Agency
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-agency
 */

get_header();
?>


	<div class="container-fluid bg-danger" style="padding:10vw;">
<div class="welcome">
<h1 class="text-center">Welcome to digency</h1>
<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatum eius molestiae amet, itaque harum.</p>
<div class="container text-center">
<section>
   <div class="row">
       <?php $serviceArgs = array(
           'post_type' => 'services',
           'posts_per_page' => 4,
           'order' => 'ASC'
       );
       $services = new WP_Query($serviceArgs);
           ?>

       <?php if($services -> have_posts()):while($services -> have_posts()):$services -> the_post() ?>
    
        <div class="col-md-4">
            <h2>
            <?php the_title();?>
            </h2>

            <div class="img-box">
            <?php the_post_thumbnail();?>
                </div>

                <p>
                <?php the_content();?>
               </p>
       </div>
       <?php endwhile; endif; ?>
   </div>
</section>
</div>
</div>
</div>






<div class="container-fluid bg-success" style="padding: 10vh 15vw;">
<div class="stats">
<div class="container">
  <div class="row">
  <div class="col-sm bg-light" style="border-right:solid 2px grey;">
  <p style="font-size:35px; margin:0;">XX 233</p>
  <p style="font-size:15px;">Sed ut perspiciatis...</p>
    </div>
    <div class="col-sm bg-success"  style="border-right:solid 2px grey;">
	<p style="font-size:35px; margin:0;">XX 789</p>
  <p style="font-size:15px;">Sed ut perspiciatis...</p>
    </div>
    <div class="col-sm bg-warning" style="border-right:solid 2px grey;">
	<p style="font-size:35px; margin:0;">XX 580</p>
  <p style="font-size:15px;">Sed ut perspiciatis...</p>
    </div>
	<div class="col-sm bg-light">
	<p style="font-size:35px; margin:0;">XX 129</p>
  <p style="font-size:15px;">Sed ut perspiciatis...</p>
    </div>
  </div>
</div>
</div>
</div>



<div class="reviews bg-danger" style="padding: 10vh 15vw;">

<div class="container">
  <div class="row">
  <div class="col-sm-8 bg-light">
  <h1 class="text-left">Our Clients Say</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nam magni quisquam consequuntur quasi perspiciatis praesentium eaque molestias veritatis ad ratione iusto, sequi quis in ducimus accusantium cupiditate repudiandae. Ipsam laboriosam ad illo ab, molestias rem odio atque itaque minima neque porro nesciunt nulla quaerat consectetur, deleniti nam doloremque repellendus laudantium assumenda! Dolore, consectetur. Cumque eos esse exercitationem molestiae qui!</p>
	  <p>Julia Robertson</p>
	  <p>Happy Client</p>
    </div>
    
	<div class="col-sm-4 bg-danger">
      <p>Sed ut perspiciatis...</p>
    </div>
  </div>
</div>

</div>




<div class="contact bg-success" style="padding:10vw;">
<div class="container">
  <div class="row">
  <div class="col-sm-8 bg-light">
  
      <p>[wpforms id="76"]</p>
    </div>
    
	<div class="col-sm-4 bg-danger">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, animi.</p>
	  <p>Lorem ipsum </p>
	  <p>Lorem ipsum.</p>
    </div>
  </div>
</div></div>



<div class="container-fluid bg-danger">
<div class="map">
yo
</div>
</div>


<div class="container-fluid bg-success">
<div class="footer">
<h1 class="text-center">Subscribe to newsletter</h1>
</div>
</div>