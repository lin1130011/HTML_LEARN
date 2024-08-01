<?php

$data = $_SESSION['shop'];
$money = 0;
// dd($data);
?>
<div class="container mt-5">
    <h1 class=" text-center">購買明細</h1>
    <table class="table text-center mt-5">
        <thead>
            <tr>
                <th>商品名稱</th>
                <th>商品單價</th>
                <th>購買數量</th>
                <th>總金額</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $key => $value) : ?>
                <tr>
                    <?php

                    $money += $value['total']
                    ?>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td><?= $value['count'] ?></td>
                    <td><?= $value['total'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <hr>
    總金額為 <?= $money ?>

</div>