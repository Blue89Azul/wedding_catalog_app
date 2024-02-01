<?php
    require_once "./lib/Session.php";
    require_once "./lib/Image.php";
    $session = new Session();
    $session->isValidSession();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include("lib/header.php");?> 
    <title>Aoi & Miho | MIDORIとは</title>
</head>
<body class="container">
<?php include("lib/globalNav.php"); ?>

    <div class="d-flex justify-content-center align-items-center mb-5 py-sm-0 py-5">
        <div id="logo">
            <img id="logo-wood" src="<?php Image::showMidori("stump.png"); ?>" alt="">
            <img id="logo-design" src="<?php Image::showMidori("logo.png"); ?>" alt="">
        </div>
    </div>

    <section id="presentation" class="desc-card row mb-5">
        <div class="col-sm-6 col-12 p-3">
            <div>
                <h1 class="title-under-line text-center mb-5">パロサント専門ブランド</h1>
                <div class="card-text">
                    <p>
                        MIDORIは、2017年に設立された、パロサントの商品開発や生産、そしてその取引を全て自社で行っている、パラグアイで唯一のパロサント専門店です。立ち上げ当初のメンバーは日本人のみでしたが、現在は現地スタッフも加わり、少しずつ商品数や卸先店舗を増やし、その魅力を届けています。
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12">
            <div class="h-100 w-100">
                <img class="card-image" src="<?php Image::showMidori("section_presentation.jpg"); ?>" alt="">
            </div>
        </div>
    </section>

    <section id="parosant" class="desc-card row mb-5">
        <div class="col-sm-6 pc-image col-12">
            <div class="h-100 w-100">
                <img class="card-image" src="<?php Image::showMidori("section_palosanto.jpg"); ?>" alt="">
            </div>
        </div>
        <div class="col-sm-6 col-12 p-3">
            <div>
                <h1 class="title-under-line text-center mb-5">パロサントとは？</h1>
                <div class="card-text">
                    <p>
                        南米大陸中央部 (パラグライ、 アルゼンチン、 ボリビア、ブラジル) に広がる大平原グランチャコ地方にのみ自生する香木です。古くから悪い気を祓い、幸せをよぶといわれ、現地では 神聖な木 として親しまれています。
                    </p>
                    <p>
                        木の断面は太陽光に当たると鮮やかな深緑色に変化し、耐久性が強く、香りがいいため高級家具や調度品利用されています。
                    </p>
                    <p>
                        また、幹や枝には沢山の油が含まれ、その油には抗酸化作用や抗菌作用があることから、エッシェンシャルオイルやガイアックオイルとして、近年では EU や 北米 を中心に高い人気を集めています。
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mobile-image col-12">
            <div class="h-100 w-100">
                <img class="card-image" src="<?php Image::showMidori("section_palosanto.jpg"); ?>" alt="">
            </div>
        </div>
    </section>

    <section id="commitment" class="desc-card row mb-5">
        <div class="col-sm-6 col-12 p-3">
            <div>
                <h1 class="title-under-line text-center">MIDORIのこだわり</h1>
                <div class="card-text">
                    <p>
                        ほとんどの商品は現地の工場から出た廃材を再利用しています。仕上げの磨きは細かいヤスリを使用し、全て手作業で行っています。また、ニスなどの化学製品を使わず、国産の天然ミツロウでコーティングしています。
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12 change-mobile-image">
            <div class="h-100 w-100 biggest-image">
                <img class="card-image" src="<?php Image::showMidori("section_3.jpg"); ?>" alt="">
            </div>
        </div>
    </section>


    <div class="d-flex justify-content-center">
        <div class="speech-bubble p-3">
            <span>他の商品も気になりませんか？</span>
        </div>
    </div>

    <div class="d-flex justify-content-center w-100">
        <a href="https://www.instagram.com/palosanto_midori" class="instagram-button" target="_blank" rel="noreferrer noopener">
            <span class="instagram-icon">
                <i class="fab fa-instagram"></i>
            </span> 
            MIDORI インスタグラム
        </a>
    </div>

    <?php include("./lib/footer.php"); ?>
</body>
</html>