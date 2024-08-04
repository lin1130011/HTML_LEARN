<div class="container">
    <?php
    if (!isset($_SESSION['user'])) {

    ?>
        <h3 class="text-center mt-5">
            <a href="?do=login"> 請先登入 </a>
        </h3>
    <?php
    } else {
        $Order = new DB('ck_orders');
        $data = $Order->getAll(" where `cilent` = '{$_SESSION['user']}'");

    ?>
        <h1 class="text-center mt-5 mb-5">訂單</h1>
        <table class="table text-center">
            <thead>
                <tr>

                    <th>訂單編號</th>
                    <th>總金額</th>
                    <th>下單時間</th>
                    <th class="text-center">狀態</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key => $value) : ?>
                    <tr>
                        <td>
                            <a href="?do=detailed_order&no=<?= $value['order_no'] ?>"><?= $value['order_no'] ?></a>
                        </td>
                        <td><?= $value['sum_price'] ?></td>
                        <td><?= $value['order_date'] ?></td>
                        <td><?= $value['order_status'] == 0 ? '未結單' : '已結單' ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</div>

<script>
</script>