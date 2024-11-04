<template>

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3><span>{{ $t('homepage.whyWorkWithMe.title') }}</span></h3>
                        <p>
                            {{ $t('homepage.whyWorkWithMe.description') }}
                        </p>
                    </div>

                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-item faq-active">
                            <h3><span>01</span> {{ $t('homepage.whyWorkWithMe.questions[0].question') }}</h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.whyWorkWithMe.questions[0].answer') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span>02</span> {{ $t('homepage.whyWorkWithMe.questions[1].question') }}</h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.whyWorkWithMe.questions[1].answer') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span>03</span> {{ $t('homepage.whyWorkWithMe.questions[2].question') }}</h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.whyWorkWithMe.questions[2].answer') }}
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
</template>