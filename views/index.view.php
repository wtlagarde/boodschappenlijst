<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>

<main>
    <div class="table-container">
        <table>
            <thead>
                <tr class="fixedHeader">
                    <th class='product'>Product</th>
                    <th class='price'>Price</th>
                    <th class='amount'>Amount</th>
                    <th class='subtotal'>Subtotal</th> 
                    <th class='remove'>Remove</th>         
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groceries as $product) : ?>
                <tr>
                    <td class="product"><?= wordwrap(htmlspecialchars($product['product']), 35, " ", true); ?></td>    
                    <td class="price"><?= $product['price']; ?></td>
                    <td class="amount"><?= $product['amount']; ?></td>
                    <td class="subtotal"><?= number_format((float)$product['amount'] * $product['price'], 2, '.', ''); ?></td>
                    <td class="remove">
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>                
                </tr>
                <?php endforeach; ?> 
                <tr>
                    <td colspan="3"><b>Total</b></td>
                    <td id="totalCost"><?= number_format((float)$totalPrice, 2, '.',''); ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>    
    </div>
</main>

<?php require 'partials/footer.php' ?>



