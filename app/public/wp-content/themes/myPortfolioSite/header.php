<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header id="header" >
        <a href="<?php echo esc_url(home_url()); ?>" class="title">
            <h3 id="title-title">
                Frontend Developer
            </h3>
            <h1 id="title-name">
                Ryoma Nishitsuji
            </h1>
        </a>
        <nav id="navi">
            <ul class="nav-menu">
                <li>
                    <?php if (is_home()): ?>
                        <a href="#about">About</a>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if (is_home()): ?>
                        <a href="#works">Works</a>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/category/Works/')); ?>">Works</a>
                    <?php endif; ?>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="disp-sp">
            <nav id="humberger-button">
                <span></span>
                <span></span>
            </nav>
            <nav id="hamburger-navigation">
                <ul class="sections">
                    <li>
                        <?php if (is_home()): ?>
                            <a href="#about">About</a>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if (is_home()): ?>
                            <a href="#works">Works</a>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/category/Works/')); ?>">Works</a>
                        <?php endif; ?>
                    </li>
                    <li>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>