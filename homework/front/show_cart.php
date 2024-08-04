<?php
if (empty($_SESSION['cart'])) {
?>
    <div class="container mt-5">
        <h3 class="text-center">目前購車為空</h3>
    </div>
<?php
} else {
?>
    <div class="container mt-5">
        <h1 class=" text-center">購物車清單</h1>
        <table class="table text-center mt-5">
            <thead>
                <tr>
                    <th>商品名稱</th>
                    <th>商品單價</th>
                    <th>購買數量</th>
                    <th>小計</th>
                    <th>刪除</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = $_SESSION['cart'];
                $sum_price = 0;
                foreach ($data as $key => $value) : ?>
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
                        <td>
                            <button class="btn btn-danger" type="button" onclick="del(<?= $key ?>)">取消購買</button>
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
            <button type="button" class="btn btn-lg btn-success mt-5" onclick="buy()">結帳</button>
        </div>
    </div>
<?php } ?>
<script>
    function del(id) {
        $.post("./api/cart_del.php", {
            id
        }, (res) => {

            location.href = "?do=show_cart"
        })
    }

    function buy() {
        $.post("./api/chk_order.php", () => {
            alert("訂單已送出")
            location.href = "?do=main";
        })
    }
</script>