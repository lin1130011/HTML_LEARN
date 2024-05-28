<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
};

$data = [
    [
        'id' => 1,
        'name' => '珍珠奶茶',
        'pic' => 'cake.jpg',
        'price' => '100'
    ],
    [
        'id' => 2,
        'name' => '咖啡',
        'pic' => 'cake2.jpg',
        'price' => '150'
    ],
    [
        'id' => 3,
        'name' => '花茶',
        'pic' => 'cake3.jpg',
        'price' => '200'
    ]
];

// dd($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- css -->
    <style>
        table {
            width: 100%;
            margin: auto;
            text-align: center;
        }

        table,
        td,
        tr,
        th {
            border-collapse: collapse;
            border: 1px solid black;
        }

        td>img {
            width: 200px;
            border-radius: 10px;
            box-shadow: 10px 10px black;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th width="8%">ID</th>
            <th width="15%">NAME</th>
            <th width="15%">PHOTO</th>
            <th>PRICE</th>
        </tr>
        <?php foreach ($data as $key => $value) : ?>
            <tr>
                <td>
                    <?= $value['id']; ?>
                </td>
                <td>
                    <?= $value['name']; ?>
                </td>
                <td>
                    <?php
                    $tmpUrl = "../images/{$value['pic']}";
                    ?>
                    <img src="<?= $tmpUrl; ?>" alt="" srcset="">
                </td>
                <td>
                    <?= $value['price']; ?>
                </td>
            </tr>
        <?php endforeach; ?>


    </table>

    <!-- js or jqery -->
    <script>
        // 方法一
        $(document).ready(function() {
            let uurl = "./getdata.php";
            $.ajax({
                type: "get",
                url: uurl,
                // data:
                datatype: "json",
                success: function(res) {
                    console.log('look', res);
                }
            })
        });
        // jquery end
    </script>
</body>

</html>