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
    <img class="img-fluid" src="./cake/banner.png" alt="">
    <form action="/action_page.php">
        <h2 class="text-center">會員登入</h2>
        <div class="col-12 mb-5 mt-5">
            <label for="acc">帳號:</label>
            <input type="text" class="form-control" id="acc" placeholder="Enter email" name="acc">
        </div>
        <div class="col-12 mb-5 mt-5">
            <label for="pwd">密碼:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="col-12 mb-5 mt-5">
            <button type="button" class="btn btn-primary" onclick="login()">登入</button>
            <button type="button" class="btn btn-warning float-end" onclick="location.href='?do=reg'">註冊</button>
        </div>
    </form>
</div>

<script>
    function login() {
        let data = {
            acc: $('#acc').val(),
            pwd: $("#pwd").val()
        }
        $.post("./api/chk_login.php", data, (res) => {
            if (res) {
                if (res == 1) {
                    alert("管理登入成功")
                    location.href = "./admin.php"
                } else {
                    alert("登入成功")
                    location.href = "./index.php"
                }
            } else {
                alert("登入失敗 請確認帳號密碼")
                location.reload()
            }
        })
    }
</script>