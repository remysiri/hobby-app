<p>Purchase history</p>
<?php foreach($history as $item): ?>
<p><?php echo $item["name"]; ?></p>
<p><?php echo $item["purchase_start"]; ?></p>
<p><?php echo $item["purchase_end"]; ?></p>
<?php endforeach; ?>
