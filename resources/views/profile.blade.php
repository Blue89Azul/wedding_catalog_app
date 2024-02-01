<?php
    require_once "./lib/Session.php";
    require_once "./lib/Image.php";
    $session = new Session();
    $session->isValidSession();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include("./lib/header.php");?> 
    <title>Aoi & Miho | わたしたちについて</title>
</head>
<body class="container w-100">
    <?php include("./lib/globalNav.php"); ?>
    
    <!-- 新郎新婦自己紹介 -->
    <h1 class="text-center middle-heading">Profiles</h1>
    <div>
        <div class="d-md-flex justify-content-md-between bg-light">
        <div class="col-sm-6 col-12">
            <div class="h-100 w-100">
                <img class="h-100 w-100" src="<?php Image::show("IMG_20190302_105109.jpg"); ?>" alt="">
            </div>
        </div>
            <div class="col-12 col-md-6 p-5">
                <div>
                    <h3>金田 青: Kaneda Aoi</h3>
                    <p>年齢: 29才</p>
                    <p>出身: 神奈川県</p>
                    <span>■ 好きなこと</span>
                    <ul>
                        <li>・ぼーっとすること</li>
                        <li>・Youtube鑑賞</li>
                        <li>・お酒を飲むこと (日本酒/焼酎/泡盛/ビール/ワイン...とにかくなんでも！)</li>
                    </ul>
                    <span>■ 経歴</span>
                    <ul>
                        <li>2008 ~ 2011 私立鎌倉学園高等学校</li>
                        <li>2012 ~ 2016 国立信州大学</li>
                        <li>2016 ~ 2018 株式会社デンソーウェーブ</li>
                        <li>2018 ~ 2020 青年海外協力隊 (野球/ペルー)</li>
                        <li>2020 ~ 現在 カイロスマーケティング株式会社</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-md-flex justify-content-md-between bg-light">
        <div class="col-sm-6 mobile-image col-12">
            <div class="h-100 w-100">
                <img class="h-100 w-100" src="<?php Image::show("IMG-20200209-WA0005.jpg"); ?>" alt="">
            </div>
        </div>
            <div class="col-12 col-md-6 p-5">
                <div>
                    <h3>金田 (丸田) 美穂: Kaneda (Maruta) Miho</h3>
                    <p>年齢: 30才</p>
                    <p>出身: ホンジュラス(中米)</p>
                    <span>■ 好きなこと</span>
                    <ul>
                        <li>・刺繍</li>
                        <li>・映画鑑賞</li>
                        <li>・スペイン語 (話す時のひびきが好き！）</li>
                        <li>・歌うこと</li>
                    </ul>
                    <span>■ 経歴</span>
                    <ul>
                        <li>2007 ~ 2010 福岡県立柏陵高等学校</li>
                        <li>2010 ~ 2014 国立千葉大学</li>
                        <li>2014 ~ 2017 国立国際医療研究センター病院</li>
                        <li>2017 ~ 2018 友愛会 訪問看護ステーションゆうあい</li>
                        <li>2018 ~ 2020 青年海外協力隊 (パラグアイ / 看護師)</li>
                        <li>2020 ~ 現在 友愛会 訪問看護ステーションゆうあい、上智大学 看護学科 研究助手 etc..</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 pc-image col-12">
            <div class="h-100 w-100">
                <img class="h-100 w-100" src="<?php Image::show("IMG-20200209-WA0005.jpg"); ?>" alt="">
            </div>
        </div>
        </div>
    </div>

    <!-- Q & A -->
    <h1 class="middle-heading text-center">Q & A</h1>
    <div class="d-flex justify-content-center">
        <div id="faq" class="col-md-12 bg-light p-3">
            <?php include("./lib/chat.php") ?>
        </div>
    </div>
    <!-- 時間があれば -->
    <script src="./js/chat.js"></script>
    <?php include("./lib/footer.php") ?>
</body>
</html>