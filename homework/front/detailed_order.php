<?php
$Order = new DB('ck_orders');

$data = $Order->getAll(" where `order_no` = '{$_GET['no']}'");

foreach ($data as $key => $value) {
    # code...
}
$datas = unserialize($value['carts']);
?>

<div class="container mt-5">
    <h1 class=" text-center">購買明細</h1>
    <table class="table text-center mt-5">
        <thead>
            <tr>
                <th>商品名稱</th>
                <th>商品單價</th>
                <th>購買數量</th>
                <th>小計</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sum_price = 0;
            foreach ($datas as $key => $value) : ?>
                <tr>
                    <?php
                    $sum_price += $value['total_price']
                    ?>
                    <td>

                        <?= $value['shopname'] ?>
                    </td>
                    <td>

                        <?= $value['price'] ?>
                    </td>
                    <td>
                        <!-- <input type="number" name="count" id="" value=" <?= $value['count'] ?>" placeholder=<?= $value['count'] ?>> -->
                        <?= $value['quantity'] ?>
                    </td>
                    <td>
                        <?= $value['total_price'] ?>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <hr>
    <div class="text-center mt-5">
        <h1>
            總金額為 <?= $sum_price ?> 元
        </h1>
        <button type="button" class="btn btn-lg btn-success mt-5" onclick="location.href='?do=order'">返回訂單列表</button>
    </div>
</div>