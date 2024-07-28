<?php
include_once "./api/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蛋糕店</title>
    <style>
        .banner {
            width: 100%;
            height: 60vh;
        }

        .carouse {
            width: 100%;
            height: 50vh;
        }

        .footer {
            margin-top: 50px;
            /* width: 100%; */
            height: 40vh;
            background-color: #003060;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav w-100 d-flex">
                    <li class="nav-item">
                        <a class="nav-link active" href="?do=main">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>

                    <?php
                    if (isset($_SESSION['type'])) {
                        if ($_SESSION['type'] == 1) {
                    ?>
                            <li class="nav-item ms-auto">
                                <button type="button" class="btn btn-warning" onclick="location.href='./admin.php'">返回管理</button>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item ms-auto">
                                <button type="button" class="btn btn-danger" onclick="logout()">登出</button>

                            </li>
                        <?php
                        }
                        ?>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item ms-auto">
                            <button type="button" class="btn btn-primary" onclick="location.href='?do=login'">登入</button>
                        </li>
                    <?php
                    }
                    ?>


                </ul>
            </div>
        </nav>
    </div>

    <?php
    $do = $_GET['do'] ?? 'main';
    $file = "./front/{$do}.php";

    if (file_exists($file)) {
        include_once $file;
    } else {
        include_once "./front/main.php";
    }
    ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function logout() {
            $.post("./api/logout.php", (res) => {
                alert("已登出")
                location.reload()
            })
        }
    </script>
</body>

</html>