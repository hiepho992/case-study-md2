
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php if (isset($_SESSION['success'])) : ?>
            <p id="success"><?= $_SESSION['success'] ?></p>
        <?php endif;
        unset($_SESSION['success']); ?>
    </div>
    <div class="chitiet">
        <?php foreach ($detailproducts as $detailproduct) : ?>

            <div class="image">
                <h3><?= $detailproduct["book_name"] ?></h3>
                <img src="<?= "../" . $detailproduct["book_image"] ?>" alt="image">
            </div>
            <div class="content">
                <p>Tác giả: <?= $detailproduct["book_author"]; ?></p>
                <p>Số trang: <?= $detailproduct["book_page"]; ?></p>
                <p>NXB: <?= $detailproduct["book_product"]; ?></p>
                <p>Năm xuất bản: <?= $detailproduct["book_year"]; ?></p>
                <p>Giá bán: <?= number_format($detailproduct["book_price"]);  ?> VNĐ</p>
                <p id="info">Số lượng tồn: <?= $detailproduct["book_quantity"]; ?></p>
                <p id="info">Giới thiệu: <?= $detailproduct["book_info"]; ?></p>
                <button><a href="./index.php?controller=Cart&action=cart&id=<?= $detailproduct["idbooks"] ?>">Thêm vào giỏ hàng</a></button>
            </div>


        <?php endforeach; ?>
    </div>
    <div class="sameproduct">
        <!-- <h4>SẢN PHẨM LIÊN QUAN</h4> -->
        <!-- <div class="products">
            <?php foreach ($sameProducts as $product) : ?>

                <div class="product-pro">
                    <a href="index.php?controller=product&action=detail&id=<?= $product["idbooks"] ?>"><img src="<?= "../" . $product["book_image"]; ?>" title="Kick ảnh xem chi tiết"></a>
                    <p><?= $product["book_name"] ?></p>
                    <p><?= number_format($product["book_price"]); ?> VND</p>
                    <p class="idproduct"><?= $product["idbooks"] ?></p>
                </div>


            <?php endforeach; ?>
        </div> -->
    </div>
</body>

</html>