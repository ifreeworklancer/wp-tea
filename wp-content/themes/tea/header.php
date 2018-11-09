<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tea</title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

  <?php get_template_part('includes/partials/svgs'); ?>
    
    <header id="app-header">
        <div class="container">
            <div class="header-item">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-2">
                        <a href="<?php echo site_url(); ?>" class="logo d-flex justify-content-center justify-content-sm-start">
                            <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png') ?>" alt="logo">
                        </a>
                    </div>
                    <div class="col-xl-7">
                        <div class="d-none d-sm-flex flex-column flex-sm-row justify-content-between align-items-center">
                            <ul class="social-list list-unstyled d-flex">
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
                            <ul class="email-list list-unstyled">
                                <li class="email-list-item">
                                    <a href="mailto:<?php echo get_theme_mod('email') ?>" class="d-flex align-items-center text-light">
                                        <svg width="20" height="20" class="mr-2">
                                            <use xlink:href="#email-icon"></use>
                                        </svg>
                                       <?php echo get_theme_mod('email') ?>
                                    </a>
                                </li>
                            </ul>
                            <ul class="phone-list list-unstyled">
                                <li class="phone-list-item">
                                    <a href="tel:<?php echo phone_filter(get_theme_mod('phone')) ?>" class="d-flex align-items-center text-light">
                                        <svg width="20" height="20" class="mr-2">
                                            <use xlink:href="#phone-icon"></use>
                                        </svg>
                                       <?php echo get_theme_mod('phone') ?>
                                    </a>
                                </li>
                            </ul>
                            <a href="#best" class="btn btn-outline-secondary scroll-link">
                                Заказать
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="row justify-content-end">
                    <div class="col-sm-9 col-xl-7 d-flex justify-content-between align-items-start align-items-sm-end">
                        <nav class="menu">
                            <div class="w-100 d-flex flex-column flex-sm-row justify-content-center align-items-center">
                                <ul class="menu-list list-unstyled w-100 d-flex flex-column flex-sm-row justify-content-between align-items-center">
                                    <li class="menu-list-item">
                                        <a href="#intro" class="scroll-link">
                                            Главная
                                        </a>
                                    </li>
                                    <li class="menu-list-item">
                                        <a href="#best" class="scroll-link">
                                            Лучшие
                                        </a>
                                    </li>
                                    <li class="menu-list-item">
                                        <a href="#exclusive" class="scroll-link">
                                            Эксклюзив
                                        </a>
                                    </li>
                                    <li class="menu-list-item">
                                        <a href="#about" class="scroll-link">
                                            О нас
                                        </a>
                                    </li>
                                    <li class="menu-list-item">
                                        <a href="#contacts" class="scroll-link">
                                            Контакты
                                        </a>
                                    </li>
                                </ul>
                                <div class="d-felx d-sm-none flex-column justify-content-between align-items-center">
                                    <ul class="social-list list-unstyled d-flex justify-content-center align-items-center mt-3">
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
                                    <ul class="email-list list-unstyled d-flex justify-content-center align-items-center mt-3">
                                        <li class="email-list-item">
                                            <a href="mailto:<?php echo get_theme_mod('email') ?>" class="d-flex align-items-center text-light">
                                                <svg width="20" height="20" class="mr-2">
                                                    <use xlink:href="#email-icon"></use>
                                                </svg>
                                                <?php echo get_theme_mod('email') ?>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="phone-list list-unstyled d-flex justify-content-center align-items-center my-3">
                                        <li class="phone-list-item">
                                            <a href="tel:+380991231212" class="d-flex align-items-center text-light">
                                                <svg width="20" height="20" class="mr-2">
                                                    <use xlink:href="#phone-icon"></use>
                                                </svg>
                                                <?php echo get_theme_mod('phone') ?>
                                            </a>
                                        </li>
                                    </ul>
                                    <a href="#best" class="btn btn-outline-secondary scroll-link">
                                        Заказать
                                    </a>
                                </div>
                            </div>
                        </nav>
                        <div class="burger-menu d-flex flex-column justify-content-end ml-sm-5">
                            <div class="line line--top"></div>
                            <div class="line line--midlle"></div>
                            <div class="line line--bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>