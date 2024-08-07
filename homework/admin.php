<?php
include_once "./api/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯</title>
    <style>
        .banner {
            width: 100%;
            height: 60vh;
        }

        .carouse {
            width: 100%;
            height: 50vh;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    if ($_SESSION['type'] != 1) {
        header("location:./index.php");
    }
    ?>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav w-100 d-flex">
                    <li class="nav-item">
                        <a class="nav-link active" href="./index.php">預覽前台</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=banner">編輯banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=store">上架商品</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=order">處理訂單</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <button type="button" class="btn btn-danger" onclick="logout()">登出</button>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <?php
    $do = $_GET['do'] ?? 'main';
    $file = "./backend/{$do}.php";

    if (file_exists($file)) {
        include_once $file;
    } else {
        include_once "./backend/main.php";
    }
    ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function logout() {
            $.post("./api/logout.php", (res) => {
                alert("已登出")
                location.href = "./index.php"
            })
        }
    </script>
</body>

</html>