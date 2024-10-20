<?php ob_start(); ?>
<h2>Products</h2>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <a href="/product?id=<?= $product['id'] ?>">
                <img src="/assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" width="150">
                <?= $product['name'] ?> - Price: $<?= $product['price'] ?>
            </a>
            <form action="/cart/add" method="post">
                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php require_once 'layout.php'; ?>