<div class="container">
    <h1 class="text-center mt-5 mb-5">上架商品</h1>
    <form action="./api/store_edit.php" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品圖片</th>
                    <th>商品介紹</th>
                    <th>顯示</th>
                    <th class="text-center">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $Store = new DB('store');

                $datas = $Store->getAll();

                foreach ($datas as $key => $data) : ?>
                    <tr>
                        <td class="align-middle"><?= $data['id'] ?></td>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <td>
                            <img src="./images/<?= $data['img'] ?>" alt="" style="width: 100px; height: 100px;">
                        </td>
                        <td class="align-middle">
                            <input type="text" value="<?= $data['text'] ?>" name="text" readonly style="border: none;">
                        </td>
                        <td class="align-middle">
                            <input type="text" value="<?= ($data['sh'] == 1) ? '顯示' : '不顯示' ?>" name="sh" readonly style="border: none;">
                        </td>
                        <td class=" text-center align-middle">
                            <button class="btn btn-warning" type="button" onclick="location.href='?do=store_edit&id=<?= $data['id'] ?>'">編輯</button>
                            <button class="btn btn-danger" type="submit">刪除</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </form>
    <div class="text-center mt-5">
        <button class="btn btn-primary" onclick="location.href='?do=store_add'">新增</button>
    </div>
</div>
<script>

</script>