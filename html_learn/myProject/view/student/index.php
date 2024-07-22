<?php
include_once "../../api/base.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>

<body>

    <div class="container mt-3">
        <h2>Students List</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>rank</th>
                    <th class="text-center">add</th>
                    <th class="text-center">edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tmp2 = $Student->setRank();
                // dd($tmp2);
                // $data = $Student->getAll();
                // $tmp = $data;
                // foreach ($data as $key2 => $value2) {
                //     $tmp[$key2]['rank'] = $value2['id'];
                // }
                // dd($tmp);
                foreach ($tmp2 as $key => $value) : ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['mobile'] ?></td>
                        <td><?= $value['rank'] ?></td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning">編輯</button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger">刪除</button>
                        </td>
                    </tr>
                <?php endforeach ?>
                <!-- <tr>
                    <td>2</td>
                    <td>bob</td>
                    <td>0922-222-222</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-warning">編輯</button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger">刪除</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>cat</td>
                    <td>0933-333-333</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-warning">編輯</button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger">刪除</button>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <div class="d-grid gap-3 mt-5">
            <!-- <button type="button" class="btn btn-lg btn-block btn-primary">新增</button> -->
            <a class="btn btn-lg btn-block btn-primary" href="./create.php">新增</a>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "url",
                data: "data",
                dataType: "json",
                success: function(response) {}
            });

        });
        // jquery end
    </script>
</body>

</html>