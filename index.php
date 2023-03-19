<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_rentals
 */

get_header();
?>
    <section class="first-section">
      <div class="get-started">
        <h2><span>We Help you</span> to Ride to your dreams!!</h2>
        <br />
        <p>
          Lorem Ipsum has been the industry's standard dummy text ever since the
          1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
        </p>

        <!-- <input type="text" id="city" /> -->
        <button class="get-started button" id="city-search" type="button">
          <a href="rentals.html" target="_blank" class="button-rentals"
            >Rent your First Drive</a
          >
        </button>
      </div>
      <div class="first-section-image">
        <div>
          <img class="img1" src=".\logos\rectangles\cycling.jpg" />
        </div>
      </div>
    </section>
    <section class="second-section">
      <div class="overlay"></div>
      <div class="what-we-do">
        <p><span>What We Have</span> For Your Rides</p>
      </div>
      <div class="card-carousel">
        <div class="second-sec-card">
          <div class="image-icon color-1">
            <img class="icon" src=".\logos\rectangles\website-4943 1.png" />
          </div>
          <div>
            <h6>Exclusive Designs</h6>
            <p>
              Lorem Ipsum has been the industry's standard dummy text ever since
              the 1500s.
            </p>
          </div>
        </div>
        <div class="second-sec-card">
          <div class="image-icon color-2">
            <img class="icon" src=".\logos\rectangles\computer-6823 1.png" />
          </div>
          <div>
            <h6>Ease to Access</h6>
            <p>
              Lorem Ipsum has been the industry's standard dummy text ever since
              the 1500s.
            </p>
          </div>
        </div>
        <div class="second-sec-card">
          <div class="image-icon color-3">
            <img
              class="icon"
              src=".\logos\rectangles\mobile-phone-1164 1.png"
            />
          </div>
          <div>
            <h6>Ease of Payment</h6>
            <p>
              Lorem Ipsum has been the industry's standard dummy text ever since
              the 1500s.
            </p>
          </div>
        </div>
        <div class="second-sec-card">
          <div class="image-icon color-4">
            <img class="icon" src=".\logos\rectangles\rocket-3429 1.png" />
          </div>
          <div>
            <h6>Best in the Market</h6>
            <p>
              Lorem Ipsum has been the industry's standard dummy text ever since
              the 1500s.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="third-section">
      <div class="third-section-image">
        <div class="circle"></div>
        <!-- <img class="yellow-color" src=".\logos\rectangles\Vector 9.png" /> -->
        <img class="mask-group" src=".\logos\rectangles\cycling2.jpg" />
      </div>
      <div class="about-us">
        <h1>Ride or Die</h1>
        <h2>Remember!!</h2>
        <p>
          Lorem Ipsum has been the industry's standard dummy text ever since the
          1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
        </p>
        <br />

        <p>
          Lorem Ipsum has been the industry's standard dummy text ever since the
          1500s, when an unknown printer took a galley of type and scrambled it
          to make a type specimen book.
        </p>
        <button class="explore-button" type="button">Explore More</button>
      </div>
    </section>
    <section class="fourth-section">
      <div class="overlay-right"></div>
      <div class="fourth-section-wrapper">
        <div class="fourth-section-header">
          <h4>On Our Services</h4>
        </div>
        <div class="fourth-section-paragraph">
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
          </p>
        </div>
      </div>
      <div class="company-carousel">
        <div class="company-card">
          <div class="ui-images">
            <div class="ui-one-container">
              <img
                src="./logos/rectangles/cycling3.jpg"
                alt=""
                class="ui-one"
              />
            </div>
            <!-- <div class="ui-two-container">
              <img
                src="./logos/rectangles/cycling3.jpg"
                alt=""
                class="ui-two"
              />
            </div> -->
          </div>
          <div class="caption">
            <h2>John Andrew</h2>
            <div class="btn">View more</div>
          </div>
        </div>
        <div class="company-card">
          <div class="ui-images">
            <div class="ui-one-container">
              <img
                src="./logos/rectangles/cycling4.jpg"
                alt=""
                class="ui-one"
              />
            </div>
            <!-- <div class="ui-two-container">
              <img src="./logos/ui/Mask Group (5).png" alt="" class="ui-two" />
            </div> -->
          </div>
          <div class="caption">
            <h2>Samantha</h2>
            <div class="btn">View more</div>
          </div>
        </div>
        <div class="company-card">
          <div class="ui-images">
            <div class="ui-one-container">
              <img
                src="./logos/rectangles/cycling5.jpg"
                alt=""
                class="ui-one"
              />
            </div>
            <!-- <div class="ui-two-container">
              <img src="./logos/ui/Mask Group (3).png" alt="" class="ui-two" />
            </div> -->
          </div>
          <div class="caption">
            <h2>Cloe</h2>
            <div class="btn">View more</div>
          </div>
        </div>
        <div class="company-card">
          <div class="ui-images">
            <div class="ui-one-container">
              <img
                src="./logos/rectangles/cycling2.jpg"
                alt=""
                class="ui-one"
              />
            </div>
            <!-- <div class="ui-two-container">
              <img src="./logos/ui/Mask Group (5).png" alt="" class="ui-two" />
            </div> -->
          </div>
          <!-- <div class="ui-images">
            <div class="ui-one-container">
              <img src="./logos/ui/Mask Group (6).png" alt="" class="ui-one" />
            </div>
            <div class="ui-two-container">
              <img src="./logos/ui/Mask Group (5).png" alt="" class="ui-two" />
            </div>
          </div> -->
          <div class="caption">
            <h2>Abrahm</h2>
            <div class="btn">View more</div>
          </div>
        </div>
      </div>
    </section>
    <section class="fifth-section">
      <div class="testimonials">
        <p><span>Our Testimonials</span><br />What Our Clients Are Saying</p>
      </div>
      <div class="info-Card">
        <div class="card">
          <img src=".\logos\rectangles\19399522241579780463 1.png" />
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only
            five centuries.
          </p>
          <p>- UI Soup</p>
        </div>
        <div class="card">
          <img src=".\logos\rectangles\19399522241579780463 1.png" />
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only
            five centuries.
          </p>
          <p>- UI Soup</p>
        </div>
      </div>
    </section>
    








<?php
get_sidebar();
get_footer();
