<!--A personal site to freshn up my html/css schkillzzz-->

<!doctype html>
<html<?php language_attributes(); ?>>
	<head>

		<meta charrset="<?php bloginfo( 'charset' ); ?>" />
		<title>Susse Sønderby</title>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" /> 
	        <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

	        <!--Adding script-->
            <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
      	<header>
	    	<!--Top navigation Bar-->
		      <div class="navBar">
		         <section class="color-1">
		          <ul class="cl-effect-1">

		                <li id="about">
		                   <a href="<?php bloginfo('template_directory'); ?>/html/portfolio.html">portfolio</a>   
		                </li>

	            		<li id="about">
	            			 <a href="http://sussesonderby.com/site/about.html">about</a>   
	           		  	</li>

	             		<li id="Blog">
	            			 <a href="http://sussesonderby.tumblr.com/">blog</a> 
	            		</li>

	             		<li id="thesis">
	            			 <a href="<?php bloginfo('template_directory'); ?>/html/thesis.html">thesis</a>
	            		</li>
		          </ul>
		        </section>
		       </div>
  		</header>
		