<?php get_header(); ?>

<main class="wrapper">
    <div id="page-mainvisual">
        <div class="title-header">
            <h1 class="parts-title">
                Works
            </h1>
        </div>
        <div class="wroks-images">
            <img src="<?php the_field('pic-pc'); ?>" alt="" id="img-PC">
            <img src="<?php the_field('pic-sp'); ?>" alt="" id="img-SP">
        </div>
    </div>
    <div class="sec-site">
        <div class="site-title">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="site-url">
            <h4>サイトURL</h4>
            <a href="<?php the_field('SiteUrl'); ?>">
                <h5><?php the_field('SiteUrl'); ?></h5>
            </a>
        </div>
        <div class="site-lang">
            <h4>使用言語</h4>
            <h5><?php the_field('lang'); ?></h5>
        </div>
        <div class="site-purpose">
            <h4>制作の目的</h4>
            <h5><?php the_field('purpose'); ?></h5>
        </div>
        <div class="site-about">
            <h4>概要</h4>
            <h5><?php the_field('about'); ?></h5>
        </div>
    </div>
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>