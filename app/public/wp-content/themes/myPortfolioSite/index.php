<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="style.css">
    <title>Ryohmaorama</title>
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
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="#works">Works</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main-visual wrapper">
            <div class="profile-col1-row1">
                <h1 id="profile-name">
                    Ryoma.N
                </h1>
                <h5 id="profile-title">
                    Frontend Developer
                </h5>
            </div>
            <div class="profile-col1-row2">
                <h4 class="profile-content">
                    社内SEの経験を生かし、相手の立場に立ってWeb制作いたします
                </h4>
            </div>
            <div class="main-image">
                <img src="img/main-image.jpg" alt="mainn-image">
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
                <div class="about-chr">
                    <p>
                        Web制作を中心に活動するフロントエンドエンジニア。<br>組み込み系エンジニアや社内SEも経験。
                    <p>
                    <p>
                        常にお客様の求めている機能を<br>追及するエンジニアになることを目指しています
                    <p>
                    <div class="view-more">
                        <a href="about.html"><img src="img/ViewMore.png" alt="View More"></a>
                    </div>
                </div>
                <div class="about-img">
                    <img src="img/about-img.jpg" alt="about-img">
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
                            <img src="img/skills1.png" alt="skills1">
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
                            <img src="img/skills2.png" alt="skills2">
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
                            <img src="img/skills3.png" alt="skills3">
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
                    <div class="slider-img"><img src="img/works1.png" alt="works1"></div>
                    <div class="slider-img"><img src="img/works2.png" alt="works2"></div>
                    <div class="slider-img"><img src="img/works3.png" alt="works3"></div>
                </div>
            </div>
            <div class="view-more">
                <a href="works.html"><img src="img/ViewMore_white.png" alt="View More"></a>
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
                <a href="contact.html">
                    <p>お問い合わせページへ</p>
                </a>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div class="footer">© Ryoma Nishitsuji</div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>