<?php
    require_once "./lib/Session.php";
    $session = new Session();
    $session->isValidSession();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include("lib/header.php");?> 
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
    <title>Aoi & Miho | カタログ一覧</title>
</head>
<body class="container">
    <?php include("./lib/globalNav.php"); ?>
    <h1 class="text-center middle-heading">Catalog</h1>
    <p class="text-center">
        以下の 8つの商品の中からお選びください
        <br>
        画像を押すとその商品の注文画面へ遷移します
    </p>
    <!-- Catalog List -->
    <div id="catalog-list" class="tab-content d-flex justify-concent-around flex-wrap">
    </div>
    <script type="text/javascript" src="./js/cardButton.js"></script>
    <?php include("./lib/footer.php") ?>
</body>
</html>