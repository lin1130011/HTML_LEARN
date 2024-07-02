<?php
header('Content-Type: application/json');
$jsonString = '[
    {
        "name": "amy",
        "chinese": 80,
        "english": 81,
        "math": 82
    },
    {
        "name": "bob",
        "chinese": 70,
        "english": 71,
        "math": 72
    },
    {
        "name": "cat",
        "chinese": 90,
        "english": 91,
        "math": 92
    }
]';

echo $jsonString;
