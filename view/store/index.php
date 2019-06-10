<form action="index.php?page=store" method="POST">
    <input type="hidden" name="action" value="purchase" />
    <input type="hidden" name="user_id" value="<?php echo $_SESSION["id"]; ?>" />
    <input type="hidden" name="product_id" value="<?php echo $yearlyEvent["id"]; ?>" />
    <input type="hidden" name="expire" value="<?php echo $yearlyEvent["end_date"]; ?>" />

    <div class="package__container">
        <button type="submit" name="package" value="1">Get package</button>
    </div>

    <div class="package__container">
        <button type="submit" name="package" value="2">Get package</button>
    </div>

    <div class="package__container">
        <button type="submit" name="package" value="3">Get package</button>
    </div>
</form>

<?php echo $yearlyEvent["name"]; ?>