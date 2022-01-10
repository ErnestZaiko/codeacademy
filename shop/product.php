<?php

include 'helper.php';

$id = $_GET['id'];
$product = getProductByID($id);
?>

<div class="product-wrap">
        <div class="name">
            <?php echo $product['name'] ?>
        </div>
        <div class="price">
            <?php echo $product['price'] . '€' ?>
        </div>
            <?php if ($product['qty'] > 0) : ?>
                <a href="<?php echo getProctUrl($product['id']) ?>">I krepeseli</a>
            <?php endif; ?>

        </div>
</div>