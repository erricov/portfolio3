<template>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="/media/cta-bg.jpg" alt="">

        <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3>{{ $t('homepage.ctaSection.title') }} </h3>
                    <p>{{ $t('homepage.ctaSection.description') }}</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">{{ $t('homepage.ctaSection.ctaButton') }}</a>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->
</template>