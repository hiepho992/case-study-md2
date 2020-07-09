<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3 class="pro">Sản phẩm Hot</h3>
<div class="products">
    <?php foreach ($productHots as $productHot) : ?>

        <div class="product-pro">
            <a href="index.php?controller=product&action=detail&id=<?=$productHot["idbooks"]?>"><img src="<?= "../".$productHot["book_image"]; ?>" title="Kick ảnh xem chi tiết"></a>
            <p><?= $productHot["book_name"]?></p>
            <p><?= number_format($productHot["book_price"]); ?> VND</p>
            <p class="idproduct"><?= $productHot["idbooks"]?></p>
        </div>        


    <?php endforeach; ?>
</div>
<h3 class="pro">Sản phẩm mới</h3>
<div class="products">
    <?php foreach ($productNews as $productNew) : ?>

        <div class="product-pro">
            <a href="index.php?controller=product&action=detail&id=<?=$productNew["idbooks"]?>"><img src="<?= "../".$productNew["book_image"]; ?>" title="Kick ảnh xem chi tiết"></a>
            <p><?= $productNew["book_name"]?></p>
            <p><?= number_format($productNew["book_price"]); ?> VND</p>
            <p class="idproduct"><?= $productNew["idbooks"]?></p>
        </div>        


    <?php endforeach; ?>
</div>
<h3 class="pro">Danh sách sản phẩm</h3>
<div class="products">
        <?php foreach ($products as $product) : ?>

            <div class="product-pro">
                <a href="index.php?controller=product&action=detail&id=<?=$product["idbooks"]?>"><img src="<?= "../".$product["book_image"]; ?>" title="Kick ảnh xem chi tiết"></a>
                <p><?= $product["book_name"]?></p>
                <p><?= number_format($product["book_price"]); ?> VND</p>
                <p class="idproduct"><?= $product["idbooks"]?></p>
            </div>        
           

        <?php endforeach; ?>
</div>
</body>
</html>

