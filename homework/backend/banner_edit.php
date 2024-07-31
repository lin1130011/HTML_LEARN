<?php
$Banner = new DB('banner');
?>
<div class="container">
    <form action="./api/banner_edit.php" method="post" enctype="multipart/form-data">
        <table class="table text-center mt-5">
            <thead>
                <tr>

                    <th>圖片</th>
                    <th>修改文字</th>
                    <th>更換顯示</th>
                    <th class="text-center">更換圖片(可選)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $look = $Banner->getOne($_GET['id']);
                ?>
                <tr>

                    <input type="hidden" name="id" value="<?= $look['id'] ?>">
                    <td>
                        <img src="./images/banner/<?= $look['img'] ?>" alt="" style="width: 100px; height: 100px;">

                    </td>
                    <td class="align-middle">
                        <input type="text" value="<?= $look['text'] ?>" name="text">
                    </td>
                    <td class="align-middle">
                        <select name="sh" id="">
                            <?php
                            if ($look['sh'] == 1) {

                            ?>
                                <option value="<?= $look['sh'] ?>">顯示</option>
                                <option value="0">不顯示</option>
                            <?php
                            } else {
                            ?>
                                <option value="<?= $look['sh'] ?>">不顯示</option>
                                <option value="1">顯示</option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td class="align-middle">
                        <input type="file" name="img" id="">
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-warning" type="submit">編輯確認</button>
                        <!-- <button class="btn btn-danger" type="submit">刪除</button> -->
                    </td>
                </tr>

            </tbody>
        </table>
    </form>
</div>