<?php ob_start(); ?>
<h2><?= $product['name'] ?></h2>
<img src="/assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" width="400">
<p><?= $product['description'] ?></p>
<p>Price: $<?= $product['price'] ?></p>
<?php $content = ob_get_clean(); ?>
<?php require_once 'layout.php'; ?>