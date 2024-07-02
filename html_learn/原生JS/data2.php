<?php
header('Content-Type: application/json');
$data = [
    [
        'name' => 'amy',
        'chinese' => 80,
        'english' => 81,
        'math' => 82

    ],
    [
        'name' => 'bob',
        'chinese' => 70,
        'english' => 71,
        'math' => 72

    ],
    [
        'name' => 'cat',
        'chinese' => 90,
        'english' => 91,
        'math' => 92

    ]
];


$tmpdata = $data;

foreach ($tmpdata as $key => $newdata) {
    $sum = $newdata['chinese'] + $newdata['english'] + $newdata['math'];
    $avg = $sum / 3;


    $tmpdata[$key]['sum'] = $sum;
    $tmpdata[$key]['avg'] = $avg;
}


// echo $tmpdata
echo json_encode($tmpdata);
