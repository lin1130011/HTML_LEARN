<div class="container">
    <h1 class="text-center mt-5 mb-5">編輯BANNER圖</h1>
    <form action="./api/edit.php" method="post">
        <table class="table text-center">
            <thead>
                <th>ID</th>
                <th>圖片</th>
                <th>文字</th>
                <th>顯示</th>
                <th>操作</th>
            </thead>
            <tbody>
                <?php
                $Banner = new DB('banner');

                $datas = $Banner->getAll();

                foreach ($datas as $key => $data) : ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <td>
                            <img src="./images/<?= $data['img'] ?>" alt="" style="width: 100px; height: 100px;">
                        </td>
                        <td>
                            <input type="text" value="<?= $data['text'] ?>" name="text">
                        </td>
                        <td>
                            <input type="radio" value="<?= $data['sh'] ?>" <?= ($data['sh'] == 1) ? 'checked' : '' ?> name="sh">
                        </td>
                        <td>
                            <button class="btn btn-warning" type="button" onclick="location.href='?do=edit&id=<?= $data['id'] ?>'">編輯</button>
                            <button class="btn btn-danger" type="submit">刪除</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </form>
    <div class="text-center mt-5">
        <button class="btn btn-primary" onclick="location.href='?do=add'">新增</button>
    </div>
</div>
<script>

</script>