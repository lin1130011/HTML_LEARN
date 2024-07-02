<?php
$data = [
    [
        'id' => 1,
        'name' => 'amy',
        'chinese' => 80,
        'english' => 81,
        'math' => 82
    ],
    [
        'id' => 2,
        'name' => 'bob',
        'chinese' => 70,
        'english' => 71,
        'math' => 72

    ],
    [
        'id' => 3,
        'name' => 'cat',
        'chinese' => 90,
        'english' => 91,
        'math' => 92

    ]
];




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <table class="table table-bordered text-center w-75 m-auto">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>chinese</th>
            <th>english</th>
            <th>math</th>
            <th>avg</th>
            <th>total</th>
        </tr>

        <?php foreach ($data as $key => $value) : ?>
            <?php
            $totoal = $value['chinese'] + $value['english'] + $value['math'];
            $avg = round(($totoal / 3), 2);
            ?>

            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['chinese'] ?></td>
                <td><?= $value['english'] ?></td>
                <td><?= $value['math'] ?></td>
                <td><?= $avg ?></td>
                <td><?= $totoal ?></td>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>