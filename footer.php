<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rentals
 */

?>

<section class="last-section">
      <div class="get-in-touch">
        <h3>Rental Cars</h3>
        <p>
          Lorem Ipsum has been the industry's standard dummy text ever since the
          1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book. It has survived not only five centuries.
        </p>
        <span>GET IN TOUCH</span>
        <div class="email-info">
          <input type="email" placeholder="ENTER YOUR EMAIL" />
          <button type="submit">Send</button>
        </div>
      </div>
      <div class="map-image">
        <img class="map-photo" src=".\logos\rectangles\Rectangle 42.png" />

        <div class="map-info">
          <p>Texas</p>
          <p>United States</p>
          <a href="">View Larger Maps</a>
        </div>
      </div>
    </section>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="./script.js"></script>
<?php wp_footer(); ?>

</body>
</html>
