<!-- Intro -->
<section id="intro">
    <?php $intro = get_post(8); ?>
    <div class="container h-100 d-flex">
        <div class="row w-100">
            <div class="col-sm-9 col-xl-6 px-3 px-sm-0 d-flex align-items-center">
                <div class="intro-item">
                    <div class="section-description text-white">
                        <h2 class="section-description__title">
                            <?= $intro->post_title ?>
                        </h2>
                        <div class="section-description__text">
                            <?= $intro->post_content ?>
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="#best" class="btn btn-primary scroll-link">Заказать</a>
                    </div>
                </div>
                <div class="scroll-down position-absolute">
                    <div class="scroll-down__text">скролл вниз</div>
                    <div class="icon mb-2 position-relative">
                        <div class="icon__line position-absolute"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>