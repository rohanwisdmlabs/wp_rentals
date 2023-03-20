<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rentals
 */

?>
	<?php wp_head(); ?>
	<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./styles.css" type="text/css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Space+Mono&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <title>Html/Css Assignment</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <ul>
          <a href=""><li>Home</li></a>
          <a href=""><li>About Us</li></a>
          <a href=""><li>Services</li></a>
          <a href=""><li>Contact Us</li></a>
        </ul>

        <h2>Rental Cars</h2>

        <div class="header-logos">
          <a href="https://www.instagram.com/"
            ><img
              class="logo-img"
              src="<?php echo (get_template_directory_uri().'/assets/images/12967496761553233092 (1) 2.png')?>"
              width="15px"
              height="15px"
          /></a>
          <a href="https://www.linkedin.com/login"
            ><img
              class="logo-img"
              src="<?php echo (get_template_directory_uri().'/assets/images/14459920111530103316 2.png')?>"
              width="15px"
              height="15px"
          /></a>
          <a href="https://www.facebook.com/"
            ><img
              class="logo-img"
              src="<?php echo (get_template_directory_uri().'/assets/images/16304616191553750378 2.png')?>"
              width="15px"
              height="15px"
          /></a>
        </div>
      </nav>
    </header>
