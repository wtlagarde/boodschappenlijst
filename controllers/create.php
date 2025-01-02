<?php
require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "New Entry";

$productValue = '';
$amountValue = '';
$priceValue = '';

                    //Validate submitted info
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $productAdded=null;

    if (! Validator::string($_POST['product'], 1, 100)) {
        $errors['product'] = 'Please provide a product name between 1 and 100 characters';
    }
    if (! Validator::numbers($_POST['amount'], 0, 1, 100)) {
        $errors['amount'] = 'Please provide a whole number between 1 and 100';
    }
    if (! Validator::numbers($_POST['price'], 2, 1, 10000)) {
        $errors['price'] = 'Please enter a price between 0.01 and 100';
    }

                    //Create new entry
    $query = 'INSERT INTO boodschappen(product, amount, price) VALUES(:product, :amount, :price)';

    if(empty($errors)) {
        $db->query($query, [
            'product' => $_POST['product'],
            'amount' => $_POST['amount'],
            'price' => $_POST['price']
        ]);

                    //After submission
        $productAdded = $_POST['product'].' '. 'was succesfully added';     //(uncomment to show message after succesfull submission) 
        //header("Location:/");     //(uncomment to redirect to list after succesfull submission)                            
        //exit();
    } else {
        $productValue = isset($_POST['product']) ? htmlspecialchars($_POST['product']) : '';
        $amountValue = $_POST['amount'] ?? '';
        $priceValue = $_POST['price'] ?? '';
    }
}

require "views/create.view.php";