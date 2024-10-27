<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';

import Spinner from '@/Components/Spinner.vue';

</script>

<template>
    <Head title="Homepage" />

    <GuestLayout>
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                <h1>Desarrollador Full Stack especializado en Laravel y soluciones de E-commerce</h1>
                <p>Creando aplicaciones robustas y soluciones personalizadas que impulsan el crecimiento y la eficiencia de tu negocio.</p>
                <div class="d-flex">
                  <a href="#about" class="btn-get-started">Contactar</a>
                  <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Portafolio</span></a>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="/media/hero-img.png" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>

        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Sobre mi</h2>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p>
                  Soy Ely Errico, desarrollador Full Stack especializado en crear soluciones personalizadas para negocios utilizando tecnologías como Laravel, Vue.js y sistemas de gestión de contenido. Con años de experiencia en el diseño, desarrollo e implementación de aplicaciones web, mi enfoque es construir plataformas eficientes y de alto rendimiento, tanto para e-commerce como para sistemas de gestión de datos y plataformas de aprendizaje en línea. Mi pasión por la tecnología y el detalle me permite transformar ideas en aplicaciones que ayudan a empresas a alcanzar sus metas de manera efectiva.
                </p>
                <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>Desarrollo Modular y Escalable: Experto en la creación de aplicaciones modulares y escalables, utilizando principios de arquitectura limpia y patrones de diseño para garantizar un código fácil de mantener y extender en el tiempo.</span></li>
                </ul>
              </div>

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p>Me dedico a ofrecer un servicio integral que abarca desde la planificación y arquitectura hasta el desarrollo y despliegue de proyectos. Esto incluye la creación de funcionalidades personalizadas, optimización de rendimiento y escalabilidad de las aplicaciones, así como la integración de API y módulos avanzados para asegurar una experiencia fluida y moderna.</p>
                <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>Integración de APIs y Terceros: Amplia experiencia en la integración de APIs y servicios de terceros, optimizando la interoperabilidad y la automatización en sistemas complejos para mejorar la eficiencia y usabilidad de cada proyecto.</span></li>
                </ul>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>

            </div>

          </div>

        </section><!-- /About Section -->

        
        <!-- Services Section -->
        <section id="services" class="services section light-background">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Servicios</h2>
            <p>Construyendo aplicaciones y soluciones personalizadas que impulsan el crecimiento y la eficiencia de tu negocio</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-file-earmark-code icon"></i></div>
                  <h4><a href="" class="stretched-link">Desarrollo Full Stack</a></h4>
                  <p>Diseño y desarrollo de aplicaciones web a medida con Laravel y API REST para optimizar procesos empresariales.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-cart4 icon"></i></div>
                  <h4><a href="" class="stretched-link">E-commerce y Tiendas Online</a></h4>
                  <p>Implementación y personalización de plataformas de comercio electrónico en Opencart y Prestashop. Configuración de métodos de pago y módulos de envío.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-server icon"></i></div>
                  <h4><a href="" class="stretched-link">Servidores y Hosting</a></h4>
                  <p>Montaje y configuración de servidores web y bases de datos en entornos Linux. Instalación de certificados SSL y optimización de rendimiento.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                  <div class="icon"><i class="bi bi-laptop icon"></i></div>
                  <h4><a href="" class="stretched-link">Desarrollo de LMS y E-learning</a></h4>
                  <p>Creación de plataformas de aprendizaje en línea con Moodle. Diseño de cursos interactivos y seguimiento de progreso de estudiantes.</p>
                </div>
              </div><!-- End Service Item -->

            </div>

          </div>
          
        </section><!-- /Services Section -->

       <!-- Skills Section -->
<section id="skills" class="skills section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-6 d-flex align-items-center">
        <img src="/media/skills.png" class="img-fluid" alt="Habilidades de desarrollo web">
      </div>

      <div class="col-lg-6 pt-4 pt-lg-0 content">
        <h3>Transformo tus ideas en aplicaciones de alto rendimiento</h3>
        <p class="fst-italic">
          Mi enfoque es construir soluciones digitales que impulsen a las empresas, combinando tecnología de vanguardia y una implementación personalizada.
        </p>

        <div class="skills-content skills-animation">

          <div class="progress">
            <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>CSS</span> <i class="val">95%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>JavaScript</span> <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>PHP</span> <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>Laravel</span> <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>Vue.js</span> <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

          <div class="progress">
            <span class="skill"><span>SQL/MySQL</span> <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div><!-- End Skills Item -->

        </div>

      </div>
    </div>
  </div>
</section><!-- /Skills Section -->


        <!-- Why Us Section -->
        <section id="why-us" class="section why-us light-background" data-builder="section">
          <div class="container-fluid">
            <div class="row gy-4">
              <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                  <h3><span>¿Por qué trabajar conmigo?</span></h3>
                  <p>
                    Con años de experiencia en desarrollo Full Stack, ofrezco un enfoque personalizado para cada proyecto. Mi misión es construir aplicaciones web a la medida, manteniendo altos estándares de calidad y rendimiento para satisfacer las necesidades específicas de cada cliente.
                  </p>
                </div>

                <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                  <div class="faq-item faq-active">
                    <h3><span>01</span> ¿Cómo garantizo la calidad en cada proyecto?</h3>
                    <div class="faq-content">
                      <p>
                        Mantengo una metodología basada en pruebas y revisiones constantes para asegurar que cada aspecto de la aplicación funcione de forma óptima y esté alineado con tus objetivos.
                      </p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item">
                    <h3><span>02</span> ¿Cuál es mi enfoque hacia el diseño y la funcionalidad?</h3>
                    <div class="faq-content">
                      <p>
                        Creo que el diseño debe ir de la mano con la funcionalidad. Trabajo para crear interfaces intuitivas y atractivas, que no solo destaquen visualmente, sino que también sean prácticas y eficientes.
                      </p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item">
                    <h3><span>03</span> ¿Qué tecnologías utilizo?</h3>
                    <div class="faq-content">
                      <p>
                        Uso tecnologías modernas como Laravel y Vue.js para construir aplicaciones robustas y escalables, ideales para adaptarse al crecimiento de tu negocio en el mundo digital.
                      </p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->
                </div>
              </div>

              <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                <img src="/media/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
              </div>
            </div>
          </div>
        </section><!-- /Why Us Section -->


        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

          <img src="/media/cta-bg.jpg" alt="">

          <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-xl-9 text-center text-xl-start">
                <h3>Construyamos el Futuro Digital de Tu Negocio</h3>
                <p>Transforma tus ideas en soluciones innovadoras y eficientes. Juntos, llevemos tu proyecto al siguiente nivel, creando herramientas que impulsen el éxito y crecimiento de tu empresa.</p>
              </div>
              <div class="col-xl-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Comienza Ahora</a>
              </div>
            </div>

          </div>

        </section><!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section d-none">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

              <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Card</li>
                <li data-filter=".filter-branding">Web</li>
              </ul><!-- End Portfolio Filters -->

              <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="/media/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="/media/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Product 1</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="/media/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 1</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="/media/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="/media/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Product 2</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="/media/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 2</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="/media/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="/media/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Product 3</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="/media/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Branding 3</h4>
                    <p>Lorem ipsum, dolor sit</p>
                    <a href="/media/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

              </div><!-- End Portfolio Container -->

            </div>

          </div>

        </section><!-- /Portfolio Section -->

        <!-- Team Section -->
        <section id="team" class="team section d-none">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                  <div class="pic"><img src="/media/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                  </div>
                </div>
              </div><!-- End Team Member -->

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member d-flex align-items-start">
                  <div class="pic"><img src="/media/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                  </div>
                </div>
              </div><!-- End Team Member -->

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member d-flex align-items-start">
                  <div class="pic"><img src="/media/team/team-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                  </div>
                </div>
              </div><!-- End Team Member -->

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member d-flex align-items-start">
                  <div class="pic"><img src="/media/team/team-4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""> <i class="bi bi-linkedin"></i> </a>
                    </div>
                  </div>
                </div>
              </div><!-- End Team Member -->

            </div>

          </div>

        </section><!-- /Team Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section light-background d-none">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Pricing</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

              <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item">
                  <h3>Free Plan</h3>
                  <h4><sup>$</sup>0<span> / month</span></h4>
                  <ul>
                    <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-item featured">
                  <h3>Business Plan</h3>
                  <h4><sup>$</sup>29<span> / month</span></h4>
                  <ul>
                    <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="pricing-item">
                  <h3>Developer Plan</h3>
                  <h4><sup>$</sup>49<span> / month</span></h4>
                  <ul>
                    <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
              </div><!-- End Pricing Item -->

            </div>

          </div>

        </section><!-- /Pricing Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section d-none">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div><!-- End Section Title -->

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="/media/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="/media/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="/media/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="/media/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="/media/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </section><!-- /Testimonials Section -->

        <!-- Faq 2 Section -->
        <section id="faq-2" class="faq-2 section light-background">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Preguntas Frecuentes</h2>
            <p>¿Tienes alguna duda? Aquí encontrarás las respuestas a las preguntas más frecuentes</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row justify-content-center">

              <div class="col-lg-10">

                <div class="faq-container">

                  <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>¿Cuál es el tiempo estimado de desarrollo de una aplicación web?</h3>
                    <div class="faq-content">
                      <p>El tiempo de desarrollo de una aplicación web depende de la complejidad del proyecto. En general, el tiempo estimado de desarrollo de una aplicación web es de 2 a 6 semanas.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>¿Ofreces soporte después de finalizar el proyecto?</h3>
                    <div class="faq-content">
                      <p>Sí, ofrezco soporte técnico y mantenimiento para asegurar el buen funcionamiento de las soluciones entregadas.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>¿Cuál es el costo de desarrollo de una aplicación web?</h3>
                    <div class="faq-content">
                      <p>El costo de desarrollo de una aplicación web depende de la complejidad del proyecto. Para obtener un presupuesto personalizado, por favor, ponte en contacto conmigo.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>¿Qué tecnologías utilizas para el desarrollo de aplicaciones web?</h3>
                    <div class="faq-content">
                      <p>
                        Utilizo tecnologías modernas y de última generación para el desarrollo de aplicaciones web, como HTML5, CSS3, JavaScript, PHP, MySQL, entre otras.
                      </p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>¿Cómo puedo solicitar un presupuesto para el desarrollo de una aplicación web?</h3>
                    <div class="faq-content">
                      <p>
                        Para solicitar un presupuesto para el desarrollo de una aplicación web, por favor, ponte en contacto conmigo a través del formulario de contacto o enviando un correo electrónico a elyerrico@gmail.com
                      </p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                </div>

              </div>

            </div>

          </div>

        </section><!-- /Faq 2 Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Contacto</h2>
            <p>¿Tienes alguna pregunta o deseas solicitar un presupuesto? Ponte en contacto conmigo</p>
          </div><!-- End Section Title -->

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

              <div class="col-lg-5">

                <div class="info-wrap">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                      <h3>Direccion</h3>
                      <p>Via Gioacchino Murat 126, 70123 Bari, Italia</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                      <h3>Teléfono</h3>
                      <p>+39 392 523 8575</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                      <h3>Correo</h3>
                      <p>elyerrico@gmail.com</p>  
                    </div>
                  </div><!-- End Info Item -->

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>

              <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                  <div class="row gy-4">

                    <div class="col-md-6">
                      <label for="name-field" class="pb-2">Your Name</label>
                      <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-6">
                      <label for="email-field" class="pb-2">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email-field" required="">
                    </div>

                    <div class="col-md-12">
                      <label for="subject-field" class="pb-2">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject-field" required="">
                    </div>

                    <div class="col-md-12">
                      <label for="message-field" class="pb-2">Message</label>
                      <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit">Send Message</button>
                    </div>

                  </div>
                </form>
              </div><!-- End Contact Form -->

            </div>

          </div>

        </section><!-- /Contact Section -->
    </GuestLayout>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <Spinner />
</template>
