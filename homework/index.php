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
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    if (isset($_SESSION['type'])) {
        echo "<div>" . $_SESSION['type'] . "</div>";
    }
    ?>
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
                    <li class="nav-item ms-auto">
                        <button type="button" class="btn btn-primary" onclick="location.href='?do=login'">login</button>
                    </li>
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

    </script>
</body>

</html>