<?php if(isset($_SESSION['iduser'])):?>
<div action="index.php?redirect=thanhtoan" method="post" class="container pb-5 mb-2 mt-4">
    <!-- Cart Item-->
    <?php
        $giohang = donHangCuaToi();
        foreach($giohang as $row):
            extract($row);
    ?>       
    <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i
                class="fa fa-times"></i></span>
        <div class="px-3 my-3">
            <a class="cart-item-product" href="#">
                <div class="cart-item-product-info">
                    <h4 class="cart-item-product-title">Bill Number:<?=$idbill?>
                </div>
                <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Thông tin:
                <div>SĐT: <?=$receive_tel ?></div>
                <div>SĐT: <?=$receive_address ?></div>
            </div>
            
        </div>
            </a>
            
        </div>
       
        <div class="px-3 my-3 text-center">
            <div class="cart-item-label">Tổng Tiền</div><span class="text-xl font-weight-medium"><?=$total?>
                vnđ</span>
        </div>
        <div class="px-3 my-3 text-center">Trạng thái:
            <a href="index.php?redirect=xoagiohang&id=<?=$idcart?>" class="text-xl font-weight-medium">
                <?php if($bill_status==0){
                    echo 'Chờ xác nhận';   
                }else if($bill_status == 1){
                    echo 'đang lấy hàng';
                }else if($bill_status == 2){
                    echo 'đang giao hàng';
                }else if($bill_status == 3){
                    echo "giao hàng thành công";
                }
                ?>
            </a>
        </div>
        <div class="px-3 my-3 text-center">
            <div class="text-xl font-weight-medium">
                <?php if($bill_status==0 || $bill_status == 1){?>
                    <a href="index.php?redirect=huydonhang&id=<?=$idbill?>"><button class="btn btn-danger">Hủy đơn hàng</button>  </a>
                <?php }else{?>
                   <button class="btn btn-secondary" disabled>Hủy đơn hàng</button> 
                <?php }
                ?>
            </div>
        </div>
    </div>
    <?php endforeach?>
</div>
<?php endif?>