<?php
$heading = "Shopping List";

$config = require('config.php');
$db = new Database($config['database']);

//Groceries
$query = "select * from boodschappen";
$groceries = $db->query($query)->findAll();
$totalPrice = array_reduce($groceries, "addTotals");

//Delete Button
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    
    $productId = $_POST['id'];
    $removal = 'DELETE FROM boodschappen WHERE id = :id';
    $db->query($removal, ['id' => $productId]);
                        
    header("Location: /");
    exit();
}

require "views/index.view.php";
