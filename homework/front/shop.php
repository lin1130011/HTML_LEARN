<?php
include_once "./api/base.php";
$Store = new DB('store');

dd($_POST);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購物車</title>
    <!-- 你可以根據需要添加 CSS 樣式 -->
</head>

<body>
    <h1>購物車</h1>
    <?php if (!empty($cartItems)) : ?>
        <ul>
            <?php foreach ($cartItems as $item) : ?>
                <li><?= $item['name'] ?> - <?= $item['text'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>購物車內沒有商品。</p>
    <?php endif; ?>
</body>

</html>