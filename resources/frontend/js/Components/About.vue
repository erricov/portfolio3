<template>
    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2> {{ $t('homepage.about.title') }} </h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        {{ $t('homepage.about.description') }}
                    </p>
                    <!-- <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Desarrollo Modular y Escalable: Experto en la
                                creación de aplicaciones modulares y escalables, utilizando principios de arquitectura
                                limpia y patrones de diseño para garantizar un código fácil de mantener y extender en el
                                tiempo.</span></li>
                    </ul> -->
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        {{ $t('homepage.about.description2') }}
                    </p>
                    <!-- <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Integración de APIs y Terceros: Amplia experiencia
                                en la integración de APIs y servicios de terceros, optimizando la interoperabilidad y la
                                automatización en sistemas complejos para mejorar la eficiencia y usabilidad de cada
                                proyecto.</span></li>
                    </ul> -->
                </div>
                
                <div class="col-lg-12 text-center">
                    <a href="#" class="read-more"><span>{{ $t('homepage.about.readMore') }}</span><i class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->
</template>