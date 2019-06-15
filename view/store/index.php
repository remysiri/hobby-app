<div class="big__container">
    <?php if(!empty($_SESSION["logged"]) == false): ?>
    <p class="member">Already have an account or bought a ticket? Click <a href="index.php?page=login">here</a> to login.</p>
    <?php endif; ?>
    <div class="store__container">
        <?php if(empty($_POST)): ?>
            <form class="storethreecolumn" action="index.php?page=store" method="POST">
                <input type="hidden" name="action" value="selectPackage" />

                <div class="package__container">
                    <h1>Tourist Pass</h1>
                    <ul>
                        <li>1 Day access to village</li>
                        <li>Guide around village</li>
                    </ul>
                    <button class="store-button centerbtn" type="submit" name="package" value="1">Get package</button>
                </div>

                <div class="package__container">
                    <h1>Invader Pass</h1>
                    <ul>
                        <li>2 Day access to village</li>
                        <li>Guide around village</li>
                        <li>Sleep place included</li>
                        <li>Weapons included</li>
                    </ul>
                    <button class="store-button centerbtn" type="submit" name="package" value="2">Get package</button>
                </div>

                <div class="package__container">
                    <h1>Habitant Pass</h1>
                    <ul>
                        <li>4 Day access to village</li>
                        <li>Guide around village</li>
                        <li>Sleep place included</li>
                        <li>Weapons included</li>
                        <li>All-in meals & drinks</li>
                        <li>Participation in various events</li>
                        <li>One local outfit to choice</li>
                    </ul>
                    <button class="store-button centerbtn" type="submit" name="package" value="3">Get package</button>
                </div>
            </form>
        <?php elseif(empty($_POST["action"] == "checkout")): ?>
            <form class="onecolumn" action="index.php?page=store" method="POST">
                <input type="hidden" name="action" value="checkout" />

                <?php if(!empty($_SESSION["logged"]) == false): ?>
                    <div class="form-group">
                        <label for="username">Username *</label>
                        <?php if(!empty($errors["username"])): ?>
                            <span class="form-errors"><?php echo $errors["username"]; ?></span>
                        <?php endif; ?>
                        <input type="text" name="username" id="username" required/>
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <?php if(!empty($errors["password"])): ?>
                            <span class="form-errors"><?php echo $errors["password"]; ?></span>
                        <?php endif; ?>
                        <input type="password" name="password" id="password" required/>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password *</label>
                        <?php if(!empty($errors["confirm-password"])): ?>
                            <span class="form-errors"><?php echo $errors["confirm-password"]; ?></span>
                        <?php endif; ?>
                        <input type="password" name="confirm-password" id="confirm-password" required/>
                    </div>

                    <div class="form-group">
                        <label for="firstname">Firstname *</label>
                        <?php if(!empty($errors["firstname"])): ?>
                            <span class="form-errors"><?php echo $errors["firstname"]; ?></span>
                        <?php endif; ?>
                        <input type="text" name="firstname" id="firstname" required/>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Lastname *</label>
                        <?php if(!empty($errors["lastname"])): ?>
                            <span class="form-errors"><?php echo $errors["lastname"]; ?></span>
                        <?php endif; ?>
                        <input type="text" name="lastname" id="lastname" required/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <?php if(!empty($errors["email"])): ?>
                            <span class="form-errors"><?php echo $errors["email"]; ?></span>
                        <?php endif; ?>
                        <input type="email" name="email" id="email" required/>
                    </div>
                <?php elseif($_SESSION["logged"] == true): ?>
                    <input type="hidden" name="firstname" value="<?php echo $_SESSION["auth"]["firstname"]; ?>"/>
                    <input type="hidden" name="lastname" value="<?php echo $_SESSION["auth"]["lastname"]; ?>"/>
                    <input type="hidden" name="email" value="<?php echo $_SESSION["auth"]["email"]; ?>"/>
                <?php endif; ?>

                <div class="cart">
                    <div class="cart-table">
                        <div class="table-header">Product Name</div>
                        <div class="table-header">Quantity</div>
                        <div class="table-header last">Total</div>

                        <div class="cart-table-row">
                            <div class="table-row cell"><?php echo $_SESSION["package_name"]; ?></div>
                            <div class="table-row cell"><input type="number" min="1" value="1" name="quantity"/></div>
                            <div class="table-row cell last">€ <?php echo number_format((float)$_SESSION["package_price"], 2, '.', ''); ?></div>
                        </div>
                    </div>
                </div>

                <div class="button-container">
                    <button class="store-button" type="submit">Confirm</button>
                </div>
            </form>
        <?php endif; ?>


        <?php if(!empty($_SESSION["logged"]) == true): ?>
        <div class="purchase-history">
            <h1>Purchase History</h1>
            <div class="history--table">
                <div class="table-header">Event Name</div>
                <div class="table-header">Type</div>
                <div class="table-header center">Quantity</div>
                <div class="table-header last">Purchase Date</div>

                <?php foreach($history as $product): ?>
                <div class="history-table-row">
                    <div class="table-row cell"><?php echo $product["name"]; ?></div>
                    <div class="table-row cell">
                        <?php switch ($product["package_type"]) {
                            case "1":
                                $package_type = "Tourist Pass";
                                break;
                            case "2":
                                $package_type = "Invader Pass";
                                break;
                            case "3":
                                $package_type = "Habitant Pass";
                                break;
                        }?>
                        <?php echo $package_type; ?>
                    </div>
                    <div class="table-row cell center"><?php echo $product["quantity"]; ?></div>
                    <div class="table-row cell last"><?php echo $product["purchase_date"]; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
