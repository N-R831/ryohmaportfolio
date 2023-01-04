<?php get_header(); ?>

<main class="wrapper">
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
      ?>
    <div id="page-mainvisual">
        <div class="title-header">
            <h1 class="parts-title">
                Works
            </h1>
        </div>
        <div class="wroks-images">
            <img src="img/MacBook Pro 17.png" alt="" id="img-PC">
            <img src="img/Sp.png" alt="" id="img-SP">
        </div>
    </div>
    <div class="sec-site">
        <div class="site-title">
            <h4><?php the_title(); ?></h4>
        </div>
        <div class="site-url">
            <h4>サイトURL</h4>
            <a href="https://n-r831.github.io/practice_StoreSite">https://n-r831.github.io/practice_StoreSite</a>
        </div>
        <div class="site-lang">
            <h4>使用言語</h4>
            <h5>HTML / CSS / Sass / JavaScript</h5>
        </div>
        <div class="site-purpose">
            <h4>制作の目的</h4>
            <h5>Web制作の学習として、サンプルサイトを作成</h5>
        </div>
        <div class="site-about">
            <h4>概要</h4>
            <h5>- レスポンシブ対応<br>- メニュー移動など、ページ内にアニメーションを使用<br>- グーグルマップの埋め込み</h5>
        </div>
    </div>
</main>

<?php get_footer(); ?>