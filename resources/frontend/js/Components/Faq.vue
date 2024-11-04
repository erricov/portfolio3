<template>
    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section light-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $t('homepage.faq.title') }} </h2>
            <p>
                {{ $t('homepage.faq.description') }}
            </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-container">
                        <div
                            class="faq-item faq-active"
                            data-aos="fade-up"
                            data-aos-delay="200"
                        >
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ $t('homepage.faq.questions[0].question') }}
                            </h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.faq.questions[0].answer') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div
                            class="faq-item"
                            data-aos="fade-up"
                            data-aos-delay="300"
                        >
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ $t('homepage.faq.questions[1].question') }}
                            </h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.faq.questions[1].answer') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div
                            class="faq-item"
                            data-aos="fade-up"
                            data-aos-delay="400"
                        >
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ $t('homepage.faq.questions[2].question') }}
                            </h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.faq.questions[2].answer') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div
                            class="faq-item"
                            data-aos="fade-up"
                            data-aos-delay="500"
                        >
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ $t('homepage.faq.questions[3].question') }}
                            </h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.faq.questions[3].answer') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->

                        <div
                            class="faq-item"
                            data-aos="fade-up"
                            data-aos-delay="600"
                        >
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ $t('homepage.faq.questions[4].question') }}
                            </h3>
                            <div class="faq-content">
                                <p>
                                    {{ $t('homepage.faq.questions[4].answer') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                        <!-- End Faq item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Faq 2 Section -->
</template>
