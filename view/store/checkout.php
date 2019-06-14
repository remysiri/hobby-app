<div class="big__container">
    <div class="store__container">
        <?php if(empty($_POST)): ?>
            <form class="onecolumn" action="index.php?page=checkout" method="POST">
                <input type="hidden" name="action" value="purchase" />

                <input type="hidden" name="user_id" value="<?php echo $_SESSION["auth"]["id"]; ?>" />
                <input type="hidden" name="product_id" value="<?php echo $yearlyEvent["id"]; ?>" />
                <input type="hidden" name="expire" value="<?php echo $yearlyEvent["end_date"]; ?>" />
                <input type="hidden" name="quantity" value="<?php echo $_SESSION["package_quantity"]; ?>"/>
                <input type="hidden" name="package" value="<?php echo $_SESSION["package_id"]; ?>"/>

                <div class="cart">
                    <h2>Personal Information</h2>
                    <p><?php echo $_SESSION["package_firstname"]; ?></p>
                    <p><?php echo $_SESSION["package_lastname"]; ?></p>
                    <p><?php echo $_SESSION["package_email"]; ?></p>
                    <div class="cart-table">
                        <div class="table-header">Product Name</div>
                        <div class="table-header center">Quantity</div>
                        <div class="table-header last">Total</div>

                        <div class="cart-table-row">
                            <div class="table-row cell"><?php echo $_SESSION["package_name"]; ?></div>
                            <div class="table-row cell center"><?php echo $_SESSION["package_quantity"]; ?></div>
                            <?php $totalPrice = $_SESSION["package_quantity"] * $_SESSION["package_price"]; ?>
                            <div class="table-row cell last">€ <?php echo number_format((float)$totalPrice, 2, '.', ''); ?></div>
                        </div>
                    </div>
                </div>

                <div class="button-container">
                    <button class="store-button" type="submit">Checkout</button>
                </div>
            </form>
        <?php else: ?>
            <h1>Purchase completed.</h1>
        <?php endif; ?>
    </div>
</div>