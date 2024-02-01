<?php
    require_once "./lib/Session.php";
    $session = new Session();
    $session->isValidSession();
    $session->isOrderedUser();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include("./lib/header.php");?> 
    <title>Aoi & Miho | 注文完了</title>
</head>
<body class="container">
    <?php include("./lib/globalNav.php"); ?>
    <h1 class="middle-heading text-center mb-3">Muchas Gracias!</h1>
    <p class="text-center">注文を受け付けました！!</p>
    <p class="text-center">
        結婚式に列席された方々の注文を一括でパラグアイから発送するため、10月中旬ごろにお届け予定です！<br>
        国際便の遅延等ありましたら、別途新郎・新婦よりご連絡いたします。
    </p>
    <?php include("./lib/footer.php"); ?>
</body>
</html>