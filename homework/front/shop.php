<?php
include_once "./api/base.php";
$Store = new DB('ck_store');
?>
<div class="container">
    <?php
    if (!isset($_SESSION['type'])) {
    ?>
        <h3 class="text-center mt-5">
            <a href="?do=login"> 請先登入 </a>
        </h3>

    <?php
    } else {
    ?>
        <h1 class="text-center mt-5 mb-5">購買確認</h1>
        <form action="?do=tmp_shop" method="post" enctype="multipart/form-data">
            <!--  -->
            <table class="table text-center mt-5">
                <thead>
                    <tr>
                        <th>商品</th>
                        <th>商品介紹</th>
                        <th>價格</th>
                        <th class=" text-center">數量</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $look =  $Store->getOne($_GET['id']);
                    ?>
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <tr>
                        <td>
                            <img src="./images/store/<?= $look['img'] ?>" alt="" style="width: 100px; height: 100px;">
                        </td>
                        <td class="align-middle">
                            <input class="text-center" type="text" value="<?= $look['name'] ?>" name="name" readonly style="border: none;">
                        </td>
                        <td class="align-middle">
                            <input class="text-center" type="text" value="<?= $look['price'] ?>" name="price" readonly style="border: none;">
                        </td>
                        <td class="align-middle text-center">
                            <input type="number" name="quantity" class=" w-25">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-5">
                <button class="btn btn-primary" type="submit">加入購物車</button>
            </div>
        </form>
    <?php
    }
    ?>
</div>
<script>

</script>