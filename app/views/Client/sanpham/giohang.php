<?php if(isset($_SESSION['iduser'])):?>
            <form action="index.php?redirect=thanhtoan" method="post" class="container pb-5 mb-2 mt-4">
                <!-- Cart Item-->
                <?php
                 $giohang = gioHang();
                    foreach($giohang as $row):
                        extract($row);
                ?>       
                <?php if(isset($_SESSION['iduser'])):?>
                    <input type="hidden" name="iduser" value="<?=$_SESSION['iduser']?>">
                <?php endif?>
                    <input type="hidden" name="soluong" value="<?=$soluong?>">
                    <input type="hidden" name="ngaydathang" value="<?php echo date("YMDHIS") ?>">
                    <input type="hidden" name="bill_status" value="0">


                    <input type="hidden" name="receive_name" value="<?=$user?>">
                    <input type="hidden" name="receive_address" value="<?=$address?>">
                    <input type="hidden" name="receive_tel" value="<?=$tel?>">


                <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i
                            class="fa fa-times"></i></span>
                    <div class="px-3 my-3">
                        <a class="cart-item-product" href="#">
                            <div class="cart-item-product-thumb"><img
                                    src="public/img/<?=$imgsp?>" alt="Product"></div>
                            <div class="cart-item-product-info">
                                <h4 class="cart-item-product-title"><?=$namesp?></h4><span><strong>Hãng:</strong>
                                    <?=$namedm?></span><span><strong>Size:</strong> <?=$size?></span>
                            </div>
                        </a>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Số Lượng</div>
                        <div class="count-input">
                            <select class="form-control">
                                <option value="<?=$soluong?>"><?=$soluong?></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <div class="cart-item-label">Tổng Tiền</div><span class="text-xl font-weight-medium"><?=$thanhtien?>
                            vnđ</span>
                    </div>
                    <div class="px-3 my-3 text-center">
                        <a href="index.php?redirect=xoagiohang&id=<?=$idcart?>" class="text-xl font-weight-medium">
                        xóa
                        </a>
                    </div>
                </div>
                <?php endforeach?>
                <!-- Coupon + Tổng Tiền-->
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="py-2 d-flex flex-row-reverse"><span
                            class="fw-bold align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">
                            Thành Tiền:<?php $sum = sumThanhTien();extract($sum);?>
                            <input type="hidden" name="tongtien" value="<?=$tongtien?>">
                            <input type="text" name="thanhtien" value="<?=$tongtien?>" disabled> 
                        </span></div>
                    </div>
                </div>
                <!-- Buttons-->
                <hr class="my-2">
                <div class="row pt-3 pb-5 mb-2">
                    <div class="col-lg-6">
                        <!-- <button type="button" class="btn btn-secondary">Quay Lại</button> -->
                    </div>
                    

                    <div class="col-lg-6 d-flex flex-row-reverse">
                      
                        <button type="submit" name="thanhtoan" class="btn btn-primary mx-2">Tiếp Tục Thanh Toán</button>
                    </div>
                </div>


            </form>
<?php else:
    echo '<script>alert("Chưa đăng nhập")</script>';
    echo '<script>window.location.href="index.php?redirect=dangnhap"</script>';
endif?>