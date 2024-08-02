<?php
$Order = new DB('orders');
$data = $Order->getAll(" where `user` = '{$_SESSION['user']}'");
?>
<div class="container">
    <h1 class="text-center mt-5 mb-5">訂單</h1>
    <form action="./api/banner_edit.php" method="post">
        <table class="table text-center">
            <thead>
                <tr>

                    <th>購買品項</th>
                    <th>購買數量</th>
                    <th>金額</th>
                    <th>下單時間</th>
                    <th class="text-center">狀態</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key => $value) : ?>
                    <?php
                    $status = "";
                    if ($value['chk'] == 1) {
                        $status = "已完成";
                    } else {
                        $status = "尚未完成";
                    }
                    ?>
                    <tr>
                        <td><?= $value['shopname'] ?></td>
                        <td><?= $value['count'] ?></td>
                        <td><?= $value['total'] ?></td>
                        <td><?= $value['buydate'] ?></td>
                        <td><?= $status ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </form>
    <div class="text-center mt-5">
        <button class="btn btn-primary" onclick="location.href='?do=banner_add'">新增</button>
    </div>
</div>
<script>
    function del(id) {

        $.post("./api/banner_del.php", {
            id
        }, (res) => {
            if (res == 1) {
                alert("刪除成功")
                location.reload()
            }
        })
    }
</script>