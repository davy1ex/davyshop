<?php
require_once("./methods.php");

$data = json_decode(file_get_contents('php://input'), true);


if ($data['query'] == "get_product") {
    // if ($data['id'] == "") {
        get_product();
    // }
}