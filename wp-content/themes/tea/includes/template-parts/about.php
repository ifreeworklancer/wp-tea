<!-- About -->
<section id="about">
    <?php $about = get_post(36); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="section-description">
                    <h2 class="section-description__title">
                        <?= $about->post_title ?>
                    </h2>
                    <div class="section-description__text">
                        <?= $about->post_content ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-sm-7 p-sm-0">
                    <?php 
                        $about_video_fields = get_field('about-video', $about->ID);
                        $about_fields = get_field('about__text', $about->ID);
                    ?>

                <?php foreach($about_video_fields as $about_video_field) : ?>
                    <div class="about-video" style="background-image: url(<?php echo $about_video_field['about-video__image']['url']  ?>);">
                        <div class="play-video" data-src="<?php echo $about_video_field['about-video__src'] ?>">
                            <div class="play-video__text">
                                Смотреть видео
                            </div>
                            <div class="play-video__icon">
                                <svg width="50" height="50">
                                    <use xlink:href="#play-icon"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="col-sm-5 col-lg-4 mt-4 mr-sm-0">
                <div class="about-item">
                    <?php echo $about_fields ?>
                    <div class="text-center">
                        <a href="#best" class="btn btn-primary scroll-link">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>