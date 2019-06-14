<div class="main__contact">
    <div class="main__contact-container">
        <form action="index.php?page=register" method="POST">
            <input type="hidden" name="action" value="register"/>

            <div class="form-group">
                <label for="username">Username *</label>
                <?php if(!empty($errors["firstname"])): ?>
                    <span class="form-errors"><?php echo $errors["firstname"]; ?></span>
                <?php endif; ?>
                <input type="text" name="username" id="username" />
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <?php if(!empty($errors["email"])): ?>
                    <span class="form-errors"><?php echo $errors["email"]; ?></span>
                <?php endif; ?>
                <input type="text" name="email" id="email"/>
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
                <label for="password">Password *</label>
                <?php if(!empty($errors["password"])): ?>
                    <span class="form-errors"><?php echo $errors["password"]; ?></span>
                <?php endif; ?>
                <input type="password" name="password" id="password"/>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm password *</label>
                <?php if(!empty($errors["confirm-password"])): ?>
                    <span class="form-errors"><?php echo $errors["confirm-password"]; ?></span>
                <?php endif; ?>
                <input type="password" name="confirm-password" id="confirm-password" />
            </div>

            <div class="form-group">
                <button class="store-button centerbtn" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>

