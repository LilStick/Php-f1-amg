<?php ob_start(); ?>
<h2>Your Cart</h2>
<ul>
    <?php foreach ($cartItems as $item): ?>
        <li>
            <img src="/assets/images/<?= $item['image'] ?>" alt="<?= $item['name'] ?>" width="150">
            <?= $item['name'] ?> - Quantity: <?= $item['quantity'] ?> - Price: $<?= $item['price'] ?>
            <form action="/cart/remove" method="post" style="display:inline;">
                <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                <button type="submit">Supprimer du panier</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<p>Total Price: $<?= $totalPrice ?></p>
<?php $content = ob_get_clean(); ?>
<?php require_once 'layout.php'; ?>