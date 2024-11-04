<template>


    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $t('homepage.services.title') }}</h2>
            <p>{{ $t('homepage.services.subtitle') }}</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-file-earmark-code icon"></i></div>
                        <h4><a href="" class="stretched-link">{{ $t('homepage.services.items[0].title') }}</a></h4>
                        <p>{{ $t('homepage.services.items[0].description')  }}</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-cart4 icon"></i></div>
                        <h4><a href="" class="stretched-link"> {{ $t('homepage.services.items[1].title') }}</a></h4>
                        <p>{{ $t('homepage.services.items[1].description') }}</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-server icon"></i></div>
                        <h4><a href="" class="stretched-link"> {{ $t('homepage.services.items[2].title') }}</a></h4>
                        <p>{{ $t('homepage.services.items[2].description') }}</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-laptop icon"></i></div>
                        <h4><a href="" class="stretched-link"> {{ $t('homepage.services.items[3].title') }}</a></h4>
                        <p>{{ $t('homepage.services.items[3].description') }} </p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

</template>