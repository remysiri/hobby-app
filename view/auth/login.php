<div class="main__contact">
    <div class="main__contact-container">
        <form action="index.php?page=login" method="POST">
            <input type="hidden" name="action" value="login"/>

            <div class="form-group">
                <label for="username">Username *</label>
                <input type="text" name="username" id="username"/>
                <span class="username_error"><?php if(!empty($errors["username"])) { echo $errors["username"];} ?></span>
            </div>

            <div class="form-group">
                <label for="password">Password *</label>
                <input type="password" name="password" id="password"/>
                <span class="password_error"><?php if(!empty($errors["password"])) { echo $errors["password"];} ?></span>
            </div>

            <div class="form-group">
                <button type="submit" class="form-submit">Login</button>
            </div>
        </form>
    </div>
</div>
