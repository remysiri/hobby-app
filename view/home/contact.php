<main>
    <div class="main__contact">
        <div class="main__contact-container">
            <h1>Contact Us</h1>

            <form action="index.php?page=contact" method="POST">
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

                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <?php if(!empty($errors["phone"])): ?>
                        <span class="form-errors"><?php echo $errors["phone"]; ?></span>
                    <?php endif; ?>
                    <input type="tel" name="phone" id="phone" required/>
                    <p class="form-info">Include country code</p>
                </div>

                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <?php if(!empty($errors["subject"])): ?>
                        <span class="form-errors"><?php echo $errors["subject"]; ?></span>
                    <?php endif; ?>
                    <select name="subject" id="subject" required>
                        <option selected disabled>Choose a subject</option>
                        <option value="join">Join Association</option>
                        <option value="information">Information</option>
                        <option value="complaint">Complaints</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="body">Message *</label>
                    <?php if(!empty($errors["body"])): ?>
                        <span class="form-errors"><?php echo $errors["body"]; ?></span>
                    <?php endif; ?>
                    <textarea name="body" id="body" required></textarea>
                </div>

                <button type="submit" class="form-submit" name="submit" value="submitform">Send</button>
            </form>
        </div>
    </div>
</main>