<h3></h3>
<div class="cart">

    <table class="orderdetail">
        <?php if (isset($_SESSION['cart'])) : ?>
            <tr>
                <th colspan="8">Thông tin giỏ hàng</th>
            </tr>

            <tr>
                <th>STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá bán</th>
                <th>Hình ảnh</th>
                <th>Thành tiền</th>
                <th>Thay đổi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($_SESSION['cart'] as $key => $val) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $key; ?></td>
                    <td><?= $val['name']; ?></td>
                    <td>
                        <input type="number" name="quantity" value="<?=$val['quantity']?>" id="">
                    </td>
                    <td><?= number_format($val['price']); ?></td>
                    <td><img src="<?= $val['image']; ?>" alt="" srcset="" id="orderdetailimg"></td>
                    <td><?= number_format( $sum [] = $val['quantity'] * $val['price']); ?></td>
                    <td>
                        <a href="./index.php?controller=Cart&action=delete&id=<?= $key; ?>" class="delete">Xóa</a> |
                        <a href="./index.php?controller=Cart&action=upDate&id=<?= $key; ?>" class="delete">Cập Nhật</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="6">Tổng tiền</td>
                <td><?= number_format(array_sum($sum))  ;?></td>
                <td><a href="#" class="delete">Thanh toán</a></td>
            </tr>




        <?php else : ?>
            <p>Không tồn tại giỏ hàng</p>
        <?php endif; ?>
    </table>
</div>