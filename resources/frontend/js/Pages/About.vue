<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';

import Spinner from '@/Components/Spinner.vue';
import Hero from '@/Components/Hero.vue';

</script>

<template>

  <Head title="About" />

  <GuestLayout>
    <Hero>
      <div class="row justify-content-center">
        <div class="col-lg-10 order-2 order-lg-1 d-flex flex-column justify-content-center text-aling-center">
          <h1 class="text-center">SOBRE MI</h1>
          <p class="text-center text-center fs-5"> Bienvenido a esta sección, donde podrás descubrir más sobre mi
            trayectoria en desarrollo web, mis habilidades técnicas y la experiencia que respaldo en cada proyecto. </p>
        </div>
      </div>
    </Hero>

    <section>
      <div class="container">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, accusamus? Ut voluptates delectus
        reprehenderit. Quam, earum. Totam ab accusantium aliquid omnis inventore saepe mollitia molestiae maiores cumque
        soluta, dolores maxime!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, accusamus? Ut voluptates delectus
        reprehenderit. Quam, earum. Totam ab accusantium aliquid omnis inventore saepe mollitia molestiae maiores cumque
        soluta, dolores maxime!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, accusamus? Ut voluptates delectus
        reprehenderit. Quam, earum. Totam ab accusantium aliquid omnis inventore saepe mollitia molestiae maiores cumque
        soluta, dolores maxime!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, accusamus? Ut voluptates delectus
        reprehenderit. Quam, earum. Totam ab accusantium aliquid omnis inventore saepe mollitia molestiae maiores cumque
        soluta, dolores maxime!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, accusamus? Ut voluptates delectus
        reprehenderit. Quam, earum. Totam ab accusantium aliquid omnis inventore saepe mollitia molestiae maiores cumque
        soluta, dolores maxime!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, accusamus? Ut voluptates delectus
        reprehenderit. Quam, earum. Totam ab accusantium aliquid omnis inventore saepe mollitia molestiae maiores cumque
        soluta, dolores maxime!
      </div>
    </section>
  </GuestLayout>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe">
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Arsha</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- <Spinner /> -->
</template>
