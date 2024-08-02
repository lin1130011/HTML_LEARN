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
                $data = $_SESSION['cart'];
                $money = 0;
                foreach ($data as $key => $value) : ?>
                    <tr>
                        <?php
                        echo $key;
                        $money += $value['total']
                        ?>
                        <td>

                            <?= $value['shopname'] ?>
                        </td>
                        <td>

                            <?= $value['price'] ?>
                        </td>
                        <td>
                            <!-- <input type="number" name="count" id="" value=" <?= $value['count'] ?>" placeholder=<?= $value['count'] ?>> -->
                            <?= $value['count'] ?>

                        </td>
                        <td>

                            <?= $value['total'] ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <hr>
        <div class="text-center mt-5">
            <h1>
                總金額為 <?= $money ?> 元
            </h1>
            <button type="button" class="btn btn-lg btn-success mt-5" onclick="buy()">結帳</button>
        </div>
    </div>
<?php } ?>
<script>
    let data = {

    }

    function buy() {
        $.post("./api/order.php", (res) => {
            if (res) {
                // alert("成功")
                console.log(res);

                // location.href = "?do=main#shop"
            }

        })
    }
</script>