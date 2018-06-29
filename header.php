<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet"> 
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<?php 
	if( is_front_page() ){ 
		$portfolio_classes = array('portfolio-class', 'my-class');
	}else{
		$portfolio_classes = array('no-portfolio-class');
		}
 ?>

<body <?php body_class($portfolio_classes);?> >


<div class="navbar-fixed">
  <nav>
    <div class="container">
      <div class="nav-wrapper">
        <a href="<?php echo home_url(); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>

    <?php wp_nav_menu(array(
        'theme_location'=>'primary', 
        'container'   => false,
        'menu_class'  => 'right hide-on-med-and-down'
        
        
        )); 
    ?>

      </div>
    </div>
  </nav>
</div>

<?php wp_nav_menu(array(
        'theme_location'=>'primary', 
        'container'   => false,
        'menu_class'  => 'sidenav',
        'menu_id'     => 'mobile-nav'
        
        
        )); 
    ?>

<div class="col-xs-12 body_content">