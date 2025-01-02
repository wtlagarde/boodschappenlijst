<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
    <div>
        <div id='errors'>
            <p> <?php if (isset($errors['product'])) : ?>
                    <?= $errors['product'] ?>
                <?php endif; ?>&nbsp; </p>
            <p> <?php if (isset($errors['amount'])) : ?>
                    <?= $errors['amount'] ?>
                <?php endif; ?>&nbsp;</p>
            <p> <?php if (isset($errors['price'])) : ?>
                    <?= $errors['price'] ?>
                <?php endif; ?>&nbsp;</p>
        </div>
        <form id='newEntry' method="POST">
            <ul>
                Product: <input class='inputBoxes' type="text" name="product" required 
                value="<?= $productValue ?>"><br>
                Amount: <input class='inputBoxes' type="number" name="amount" step="1" required
                value=<?= $amountValue ?>><br>
                Price: <input class='inputBoxes' type="number" name="price" step="0.01" required
                value=<?= $priceValue ?>><br>
            </ul>
            <input id='submitButton' type="submit" value="Add to list">
        </form>
        <div>
            <?php if(isset($productAdded)) : ?>
                <p id='product-added'><?= $productAdded ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php require 'partials/footer.php' ?>
