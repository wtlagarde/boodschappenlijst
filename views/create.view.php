<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
    <div>
        <form class=newEntry method="POST">
            <ul>
                Product: <input class='input' type="text" name="product" required 
                value="<?= $productValue ?>"><br>
                Amount: <input class='input' type="number" name="amount" step="1" required
                value=<?= $amountValue ?>><br>
                Price: <input class='input' type="number" name="price" step="0.01" required
                value=<?= $priceValue ?>><br>
            </ul>
            <input id='submit' type="submit" value="Add to list">
        </form>
        
        <?php if (isset($errors['product'])) : ?>
            <p class='product-error'><?= $errors['product'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['amount'])) : ?>
            <p class='amount-error'><?= $errors['amount'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['price'])) : ?>
            <p class='price-error'><?= $errors['price'] ?></p>
        <?php endif; ?>
         <?php if($productAdded===true) : ?>
            <p class='product-added'><?= $_POST['product'].' '. 'was succesfully added' ?></p>
        <?php endif; ?>
    </div>
</main>

<?php require 'partials/footer.php' ?>
