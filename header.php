<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title();?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>"/>
</head>
<body>
    <?php wp_head(); ?>
    <div class="container geral">

		<div class="col-md-9 titulo">
			<h1><?php bloginfo('name')?></h1>
			<p><?php bloginfo('description')?></p>
		</div>	

	</div>
</body>
</html>