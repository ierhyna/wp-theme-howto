<html <?php language_attributes(); ?>>
<html>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'> -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/main.css'>
  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <div class="container">
  <header class="row">
    <div class="col-md-12 clearfix">
      <img class="alignleft logo img-circle" src="http://placehold.it/80x80">
      <h1 class="site-title">Site Title</h1>
    </div>
    <nav class="navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
      </ul>
    </nav>
  </header>
  <div class="row">
  