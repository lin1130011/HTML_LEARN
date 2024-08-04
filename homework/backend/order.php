<?php
$Order = new DB('ck_orders');
$data = $Order->getAll(" where `order_status` = 0");
?>
<div class="container">
    <h1 class="text-center mt-5 mb-5">訂單</h1>
    <table class="table text-center">
        <thead>
            <tr>

                <th>訂單編號</th>
                <th>客戶</th>
                <th>總金額</th>
                <th>下單時間</th>
                <th class="text-center">狀態</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $key => $value) : ?>
                <tr>

                    <td>
                        <a href="?do=detailed_order&no=<?= $value['order_no'] ?>"><?= $value['order_no'] ?></a>
                    </td>
                    <td><?= $value['cilent'] ?></td>
                    <td><?= $value['sum_price'] ?></td>
                    <td><?= $value['order_date'] ?></td>
                    <td><?= $value['order_status'] == 0 ? '未結單' : '已結單' ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="ok(<?= $value['id'] ?>)">完成訂單</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>

<script>
    function ok(id) {
        $.post("./api/order_edit.php", {
            id
        }, (res) => {
            alert("完成該訂單")
            location.reload()

        })
    }
</script>