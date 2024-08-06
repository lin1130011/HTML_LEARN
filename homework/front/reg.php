<style>
    form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        width: 30%;
        height: auto;
    }
</style>


<div class="container position-relative mt-5">
    <?php
    $Banner = new DB('ck_banner');
    $banner = $Banner->getOne(['sh' => 1]);
    ?>
    <img class="img-fluid" src="./cakes/<?= $banner['img'] ?>" alt="">
    <form action="./api/reg.php" method="post">
        <h2 class="text-center">會員註冊</h2>
        <div class="mb-3 mt-3">
            <label for="email">註冊帳號:</label>
            <input type="text" class="form-control" id="acc" placeholder="Enter acc" name="acc">
        </div>
        <div class="mb-3 mt-3">
            <label for="pwd">註冊密碼:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="mb-3 mt-3">
            <label for="pwd">確認密碼:</label>
            <input type="password" class="form-control" id="pwd2" placeholder="Check password" name="pwd2">
        </div>
        <div class="mb-3 mt-5 text-center">
            <button type="button" class="btn btn-primary" onclick="reg()">註冊</button>
        </div>
    </form>
</div>

<script>
    function reg() {
        let data = {
            acc: $('#acc').val(),
            pwd: $('#pwd').val(),
            pwd2: $('#pwd2').val(),
        }
        if (data.acc == '' || data.pwd == '' || data.pwd2 == '') {
            alert("不可以提交空資料")
        } else if (data.pwd !== data.pwd2) {
            alert("請確認密碼")
        } else {
            $.post("./api/reg.php", {
                acc: data.acc,
                pwd: data.pwd
            }, (res) => {
                if (res == 1) {
                    alert("註冊成功")
                    location.href = "./index.php"
                } else {
                    alert("該帳號已被註冊")
                    location.reload()
                }
            })
        }

    }
</script>