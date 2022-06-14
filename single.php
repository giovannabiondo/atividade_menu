<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title();?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #cdcdcd">

<?php get_header () ?>

 <?php
        if (have_posts() ){
            while (have_posts() ) {
                the_post();
        ?>

        <div class="col">
            <h2><?php the_title(); ?><h2>
        </div>

        <br>

        <div class="img">
            <?php the_post_thumbnail();?>
        </div>

        &nbsp;

        <div class="texto">
            <?php the_content(); ?>
        </div>
        
        <?php

            }
        }

?>

<?php get_footer () ?>
</body>
</html>