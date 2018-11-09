<!-- Contacts -->
<section id="contacts">
    <?php $contacts = get_post(47); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-description mb-5">
                <h2 class="section-description__title text-white">
                        <?= $contacts->post_title ?>
                    </h2>
                    <div class="section-description__text">
                        <?= $contacts->post_content ?>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="5" title="Форма заказа"]'); ?>
            </div>
        </div>
        <div class="header-item">
            <div class="row">
                <div class="col-12 d-flex flex-column flex-xl-row justify-content-between align-items-center">
                   <a href="<?php echo site_url(); ?>" class="logo d-flex justify-content-center justify-content-sm-start mb-4 mb-xl-0">
                        <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png') ?>" alt="logo">
                    </a>
                    <ul class="social-list list-unstyled d-flex mb-4 mb-xl-0">
                        <li class="social-list-item social-list-item--facebook mr-4">
                            <a href="<?php echo get_theme_mod('facebook') ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--instagram">
                            <a href="<?php echo get_theme_mod('instagram') ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="email-list list-unstyled mb-4 mb-xl-0">
                        <li class="email-list-item">
                            <a href="mailto:<?php echo get_theme_mod('email') ?>" class="d-flex align-items-center text-light">
                                <svg width="20" height="20" class="mr-2">
                                    <use xlink:href="#email-icon"></use>
                                </svg>
                                <?php echo get_theme_mod('email') ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="phone-list list-unstyled mb-4 mb-xl-0">
                        <li class="phone-list-item">
                            <a href="tel:<?php echo phone_filter(get_theme_mod('phone')) ?>" class="d-flex align-items-center text-light">
                                <svg width="20" height="20" class="mr-2">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?php echo get_theme_mod('phone') ?>
                            </a>
                        </li>
                    </ul>
                    <ul class="place-list list-unstyled">
                        <li class="place-list-item text-light text-center">
                            <svg width="20" height="20" class="mr-2">
                                <use xlink:href="#house-icon"></use>
                            </svg>
                            <?php echo get_theme_mod('address') ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>