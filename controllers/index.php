<?php


$heading = "Shopping List";

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $productId = $_POST['id'];
    $removal = 'DELETE FROM boodschappen WHERE id = :id';
    $db->query($removal, ['id' => $productId]);
        
    header("Location: /");
    exit();
}

$query = "select * from boodschappen";
$groceries = $db->query($query)->findAll();


function addTotals($carry, $item)
{
    return $carry += $item["price"] * $item["amount"];
};

$totalPrice = array_reduce($groceries, "addTotals");

require "views/index.view.php";
