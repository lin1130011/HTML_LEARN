<?php
$Banner = new DB('banner');
$banner = $Banner->getOne(['sh' => 1]);
?>


<div class="container mt-5">
    <img class="banner" src="./images/banner/<?= $banner['img'] ?>" alt="">
</div>

<div class="container mt-5">
    <h1 class="text-center">熱門銷售</h1>
    <?php
    $Store = new DB('store');
    $store = $Store->q("select * from `store` ORDER BY good DESC LIMIT 3");
    ?>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <?php foreach ($store as $key => $value) : ?>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : '' ?>"></button>
            <?php endforeach; ?>
        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <?php foreach ($store as $key => $value) : ?>
                <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                    <img class="carouse" src="./images/store/<?= $value['img'] ?>" alt="<?= $value['text'] ?>" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3 class=" text-body"><?= $value['name'] ?></h3>
                        <p class=" text-white"><?= $value['text'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<div class="container mt-5">
    <h1 class="text-center">商品展示區(卡片)</h1>
    <div class="row w-100 m-auto mt-5">
        <?php
        $shop = $Store->getAll();
        foreach ($shop as $key => $value) : ?>
            <div class="col-12 col-lg-4 mt-5 mb-5">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="./images/store/<?= $value['img'] ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><?= $value['name'] ?></h4>
                        <p class="card-text"><?= $value['text'] ?></p>
                        <a class="btn btn-primary order-btn ms-auto" onclick="buy(<?= $value['id'] ?>)">訂購</a>
                    </div>
                </div>
            </div>
        <?php endforeach
        ?>
    </div>
</div>
<?php
if (isset($_SESSION['type'])) {
    # code...
?>
    <div class="position-fixed bottom-0 end-0 p-3">
        <a href="?do=shop" class="btn btn-lg btn-success">
            <i class="bi bi-cart"></i>
            <span id="cart" class="badge-notification">0</span>
        </a>
    </div>
<?php
}
?>

<footer class="footer">
    <div class="container p-5 bg-">
        <div class="top w-100 h-50 bg- d-flex">
            <div class="col-6 bg- d-flex flex-column justify-content-center">
                <div class="t text-white">
                    FOLLOW　US
                </div>
                <div>
                    <button type="button" class=" btn btn-success mt-3">前往</button>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
                <div class="t text-white">公司資訊</div>
                <div class="t text-white">✦供應商資訊：廖憨憨股份有限公司</div>
                <div class="t text-white">✦供應商地址：新北市三重區重新路</div>
                <div class="t text-white">✦供應商電話：02-35012035 (一)~(五) 10:00-18:00</div>
                <div class="t text-white">✦食品業者登錄者字號：F-129146530-00001-4</div>
            </div>
        </div>
        <hr>
        <div class="bottom w-100 h-50 bg- d-flex">
            <div class="col-6">
                <div class="t text-white">
                    網頁提供：
                    繁體中文
                    English
                </div>

            </div>
            <div class="col-6 text-end">
                <div class="t text-white">
                    條款及條件
                    隱私權政策
                    技術支援：
                    Oddle.me
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
</script>