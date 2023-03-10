<?php get_header(); ?>

<main>
<div class="main-visual wrapper">
        <div class="profile-top">
            <h1 id="profile-name">
                Ryoma.N
            </h1>
            <h5 id="profile-title">
                Frontend Developer
            </h5>
            <h4 class="profile-content">
                社内SEの経験を生かし、相手の立場に立ってWeb制作いたします
            </h4>
        </div>
        <div class="main-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main-image.jpg" alt="main-image">
        </div>
        <div class="profile-top-sp">
            <h1 id="profile-name">
                Ryoma.N
            </h1>
            <h5 id="profile-title">
                Frontend Developer
            </h5>
            <h4 class="profile-content">
                社内SEの経験を生かし、相手の立場に立ってWeb制作いたします
            </h4>
        </div>
    </div>
    <div id="about" class="wrapper">
        <div class="title-header">
            <h1 class="parts-title">
                About
            </h1>
            <h4 class="parts-subtitle">
                私について
            </h4>
        </div>
        <div class="about-main">
        <div class="about-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-img.jpg" alt="about-img">
            </div>
            <div class="about-chr">
                <p>
                    Web制作を中心に活動するフロントエンドエンジニア。<br>組み込み系エンジニアや社内SEも経験。
                <p>
                <p>
                    常にお客様の求めている機能を<br>追及するエンジニアになることを目指しています
                <p>
                <div class="view-more">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">
                            <p>View More</p>
                            <span></span>
                        </a>
                </div>
            </div>
        </div>
        <div class="about-skills">
            <div class="skills-title">
                <h1 class="parts-title">
                    Skills
                </h1>
                <h4 class="parts-subtitle">
                    できること
                </h4>
            </div>
            <div class="block-skills">
                <div class="skills-parts">
                    <div class="parts-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/skills1.png" alt="skills1">
                    </div>
                    <div class="parts-chr">
                        <h3>WEBサイトの制作</h3>
                        <h5>
                            復数ページからなるコーポレートサイトやランディングページなど、ご用意いただいたデザインに沿って正確なコーディングを行います。<br>また、様々なデバイスに対応できるレスポンシブデザインも実装可能です。
                        </h5>
                    </div>
                </div>
                <div class="skills-parts">
                    <div class="parts-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/skills2.png" alt="skills2">
                    </div>
                    <div class="parts-chr">
                        <h3>サイトに動きをつける</h3>
                        <h5>
                            ユーザーの視認性・操作性を向上させるため、エフェクトやアニメーションを用いて動きのあるサイトを作ることができます。<br>テキストのフェードインや、ナビゲーションをまとめるハンバーガーメニューなどが代表的です。
                        </h5>
                    </div>
                </div>
                <div class="skills-parts">
                    <div class="parts-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/skills3.png" alt="skills3">
                    </div>
                    <div class="parts-chr">
                        <h3>WordPressの実装</h3>
                        <h5>
                            オリジナルテーマの作成や、プラグインの導入により利便性を向上させます。<br>既存のWEBサイトをWordPressへ移行することも可能です。<br>ブログやお知らせなど、更新頻度の高いサイト運用にオススメです。
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="works">
        <div class="title-header">
            <h1 class="parts-title">
                Works
            </h1>
            <h4 class="parts-subtitle">
                制作したもの
            </h4>
        </div>
        <div class="works-view">
            <div class="slider">
            <?php
                $args = array(
                'posts_per_page' => 5
                );
            ?>
                <?php $posts = get_posts($args); ?>
                <?php foreach($posts as $post): ?>
                    <?php setup_postdata($post); ?>
                    <div class="slider-img"><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="view-more">
                <a href="<?php echo esc_url(home_url('/category/Works/')); ?>">
                    <p>View More</p>
                    <span></span>
                </a>
        </div>
    </div>
    <div id="contact" class="wrapper">
        <div class="title-header">
            <h1 class="parts-title">
                Contact
            </h1>
            <h4 class="parts-subtitle">
                お問い合わせ
            </h4>
        </div>
        <div class="contact-detail">
            <p>お仕事のご相談やご依頼など、お気軽にご連絡ください</p>
        </div>
        <div class="to-contact">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                <p>お問い合わせページへ</p>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
    