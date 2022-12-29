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
        <a href="index.html" class="title">
            <h3 id="title-title">
                Frontend Developer
            </h3>
            <h1 id="title-name">
                Ryoma<br> Nishitsuji
            </h1>
        </a>
        <nav id="navi">
            <ul class="nav-menu">
                <li>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
                </li>
            </ul>
        </nav>
    </header>