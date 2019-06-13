<div class="big__container">
    <p class="member">Already bought your ticket? Click here to login and view it.</p>
    <div class="store__container">
        <?php if(empty($_POST)): ?>
            <form class="storethreecolumn" action="index.php?page=store" method="POST">
                <input type="hidden" name="action" value="selectPackage" />

                <div class="package__container">
                    <h1>Tourist Pass</h1>
                    <ul>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                    </ul>
                    <button type="submit" name="package" value="1">Get package</button>
                </div>

                <div class="package__container">
                    <h1>Invader Pass</h1>
                    <ul>
                        <li>2 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                    </ul>
                    <button type="submit" name="package" value="2">Get package</button>
                </div>

                <div class="package__container">
                    <h1>Habitant Pass</h1>
                    <ul>
                        <li>FULL WEEKEND STAY</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                        <li>1 DAY ACCESS</li>
                    </ul>
                    <button type="submit" name="package" value="3">Get package</button>
                </div>
            </form>
        <?php else: ?>
            <form class="onecolumn" action="index.php?page=store" method="POST">
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

                <div class="cart">
                    <div class="cart-table">
                        <div class="table-header">Product Name</div>
                        <div class="table-header">Quantity</div>
                        <div class="table-header">Total</div>

                        <div class="cart-table-row">
                            <div class="table-row cell"><?php echo $_SESSION["package_name"]; ?></div>
                            <div class="table-row cell"><input type="number" min="1" value="1" name="quantity"/></div>
                            <div class="table-row cell">50</div>
                        </div>
                    </div>
                </div>
            </form>
        <?php endif; ?>
    </div>
</div>
