<?php
include_once "./base.php";

$cart = ($_SESSION['cart']);
dd($cart);
$orders = [];

foreach ($cart as $item) {
    $date = $item['buydate'];
    if (!isset($orders[$date])) {
        $orders[$date] = [
            'user' => $item['user'],
            'buydate' => $item['buydate'],
            'shopnames' => [],
            'shopcount' => [],
            'total_price' => [],
            'allprice' => 0
        ];
    }
    $orders[$date]['shopnames'][] = $item['shopname'];
    $orders[$date]['shopcount'][]  = $item['count'];
    $orders[$date]['total_price'][] = $item['price'];
    $orders[$date]['allprice'] += $item['total'];
}
$orders[$date];

$a = join(",", $orders[$date]["shopnames"]);

dd($a);
