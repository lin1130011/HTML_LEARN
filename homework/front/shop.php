<?php
include_once "./api/base.php";
$Store = new DB('store');
?>
<div class="container">
    <form action="?do=tmp_shop" method="post" enctype="multipart/form-data">
        <table class="table text-center mt-5">
            <thead>
                <tr>
                    <th>商品</th>
                    <th>商品介紹</th>
                    <th>價格</th>
                    <th>數量</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $look =  $Store->getOne($_GET['id']);
                ?>
                <tr>
                    <td>
                        <img src="./images/store/<?= $look['img'] ?>" alt="" style="width: 100px; height: 100px;">

                    </td>
                    <td class="align-middle">
                        <input type="text" value="<?= $look['text'] ?>" name="text">
                    </td>
                    <td class="align-middle">
                        <input type="text" value="<?= $look['price'] ?>" name="price">
                    </td>
                    <td class="align-middle">
                        <input type="number" name="total">
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-primary" type="submit">加入購物車</button>
                        <!-- <button class="btn btn-danger" type="submit">刪除</button> -->
                    </td>
                </tr>

            </tbody>
        </table>
    </form>
</div>
<script>

</script>