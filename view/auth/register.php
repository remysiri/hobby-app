<form action="index.php?page=register" method="POST">
    <input type="hidden" name="action" value="register"/> 

    <div class="form-group">
        <input type="text" name="username" id="username" placeholder="Username" />
        <span class="username_error"><?php if(!empty($errors["username"])) { echo $errors["username"];} ?></span>
    </div>

    <div class="form-group">
        <input type="text" name="email" id="email" placeholder="Email" />
        <span class="email_error"><?php if(!empty($errors["email"])) { echo $errors["email"]; } ?></span>
    </div>

    <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Password" />
        <span class="password_error"><?php if(!empty($errors["password"])) { echo $errors["password"]; } ?></span>
    </div>

    <div class="form-group">
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" />
        <span class="password_error"><?php if(!empty($errors["confirm-password"])) { echo $errors["confirm-password"]; } ?></span>
    </div>

    <div class="form-group">
        <button class="btn auth-btn" type="submit">Register</button>
    </div>
</form>

