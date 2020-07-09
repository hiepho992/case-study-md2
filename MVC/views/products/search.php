<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="products">
    <?php  foreach ($searchs as $search) : ?>
        
        <div class="product-pro">
            <a href="./index.php?controller=Product&action=search&id=<?= $search["idbooks"] ?>"><img src="<?= '../'.$search["book_image"]; ?>"></a>
            <p><?= $search["book_name"] ?></p>          
            <p><?= $search["book_price"] ?>VND</p>
            <p class="idproduct"><?= $search["idbooks"] ?></p>
        </div>


    <?php endforeach; ?>
</div>
</body>
</html>