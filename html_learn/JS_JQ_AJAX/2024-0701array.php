<?php
$storearr = [
    [
        'id' => 1,
        'name' => '台北店',
        'mobile' => '0911-111-111',
        'price' => '10000'
    ],
    [
        'id' => 2,
        'name' => '台中店',
        'mobile' => '0922-222-222',
        'price' => '20000'
    ],
    [
        'id' => 3,
        'name' => '高雄店',
        'mobile' => '0933-333-333',
        'price' => '30000'
    ],
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>mobile</th>
            <th>price</th>
        </tr>
        <?php foreach ($storearr as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['mobile'] ?></td>
                <td><?= $value['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>