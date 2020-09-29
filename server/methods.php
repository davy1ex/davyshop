<?php
require_once("db.php");


function get_product($id=null) {
    if ($id == null) {
        global $pdo;
        $query = $pdo -> prepare('SELECT * FROM `product`');
        $query -> execute();
        $product_list = $query -> fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
    }

    header("Content-Type: application/json");

    echo json_encode([
        'success'   => 1,
        'product'     => $product_list
    ]);
}


function add_product($title, $photo, $description, $price, $currency) {
    global $pdo;
    // $query = $pdo -> prepare('SELECT * FROM `cards` WHERE card = ?');
    // $query -> execute([$numb_card]);
    // $cards = $query -> fetchAll(PDO::FETCH_ASSOC);

    // header("Content-Type: application/json");

    // if (count($cards) > 0) { // если карта уже есть в бд
    //     $query = $pdo -> prepare('UPDATE `cards` SET `operator_name` = ?, `block_type` = ?, `shord_code` = ?, `tz` = ?, `work_schedule`=? WHERE card = ?');
    //     $query -> execute([
    //         $operator_name,
    //         (int)$block_type,
    //         (int)$shord_code,
    //         (int)$tz,
    //         $work_schedule,
    //         $numb_card            
    //     ]);
    //     $pdo = null;
        
    //     echo json_encode([
    //         'success'   => '1',
    //     ]);
    // } 

    // else {
    $query = $pdo -> prepare('INSERT INTO product (title, photo, description, price, currency) VALUES (?, ?, ?, ?, ?)');
    $query -> execute([
        $title,
        $photo,
        $description,
        $price,
        $currency
    ]);  
    $pdo = null;
    
    echo json_encode([
        'success'   => '1',
    ]);
}
}