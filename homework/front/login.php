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
        <div class="mb-5 mt-5">
            <label for="email">帳號:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-5 mt-5">
            <label for="pwd">密碼:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="mb-5 mt-5">
            <button type="submit" class="btn btn-primary">登入</button>
            <button type="button" class="btn btn-warning float-end" onclick="location.href='?do=reg'">註冊</button>
        </div>
    </form>
</div>

<script>

</script>