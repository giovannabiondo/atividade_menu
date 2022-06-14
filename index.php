<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title();?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #B1C8F0">
<php get_header();?>

        <div class ="row">
            <div class ="col-md-12">
               
                <?php 
                 $args = array(
                     'theme_location' => 'header_menu', 
                     'menu' => 'Menu 1'
                );
                wp_nav_menu($args);
                ?>

            </div>
        </div>

   <div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
			
            <center>
              <img src="<?php echo get_template_directory_uri()?>/assets/images/pig.png" width="220" height="220">
              <br><br>
              <h2>Veja sobre porquinhos fofuxos!</h2>
            </center>  

			</div>
	   </div>
  </div>

        <?php
        if (have_posts() ){
            while (have_posts() ) {
                the_post();
        ?>

        <br>

        <h2>"<?php the_title(); ?>"</h2>

        <div class="img">
            <?php the_post_thumbnail();?>
        </div>

        <div>
            <div class = "row">
                <div class="col-lg-6">
                <h6><?php the_excerpt(); ?></h6>
                </div>
            </div>
        </div>

        <a href="<?php the_permalink(); ?>">
            Continue lendo sobre
        </a>
        <br>
        
        <?php

            }
        }

        ?>

    <style>
           h2{
           color: #000080;
           font-size: 25px;
           font-family: 'Montserrat', sans-serif;
           margin: 20px;
           }
           h6{
           color: #000080;
           font-size: 15px;
           font-family: 'Montserrat', sans-serif;
           margin: 20px;
           }
           a{
           text-decoration: underline; 
           text-decoration-style: wavy; 
           text-decoration-color: #000080;
           color: #000080;
           margin: 20px;
           font-size: 15px;
           font-family: 'Montserrat', sans-serif;
           }
           img{
           margin: 20px;
           }
       </style>

<?php get_footer();?>
</body>
</html>
