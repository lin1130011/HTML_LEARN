<?php
$Banner = new DB('banner');
dd($_GET['id']);

?>
<div class="container">
    <form action="./api/edit.php" method="post" enctype="multipart/form-data">
        <table class="table text-center">

            <tbody>
                <?php

                $look = $Banner->getOne($_GET['id']);
                dd($look);
                ?>
                <tr>
                    <td><?= $look['id'] ?></td>
                    <input type="hidden" name="id" value="<?= $look['id'] ?>">
                    <td>
                        <img src="./images/<?= $look['img'] ?>" alt="" style="width: 100px; height: 100px;">

                    </td>
                    <td>
                        <input type="text" value="<?= $look['text'] ?>" name="text">
                    </td>
                    <td>
                        <input type="checkbox" value="<?= $look['sh'] ?>" <?= ($look['sh'] == 1) ? 'checked' : '' ?> name="sh">
                    </td>
                    <td>
                        <label for="">更換圖片</label>
                        <input type="file" name="img" id="">
                    </td>
                    <td>
                        <button class="btn btn-warning" type="submit">編輯確認</button>
                        <!-- <button class="btn btn-danger" type="submit">刪除</button> -->
                    </td>
                </tr>

            </tbody>
        </table>
    </form>
</div>