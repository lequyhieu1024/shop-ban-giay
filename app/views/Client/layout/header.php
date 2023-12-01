<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDH Stores</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<header>
        <div class="boxcenter">
            <div class="logo">
                <div class="row">
                    <div class="col-md-2">
                        <a href="#">
                            <img src="public/img/logo.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-6 ali_center">
                        <form class="seach-home" action="index.php?redirect=search" method="post">
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded" placeholder="Search" name="search_input" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <button style="border:none" type="submit" name="search"><i class="bi bi-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 ali_center">
                        <ul class="login-header">
                            <li>
                                <a href="index.php?redirect=giohang">
                                    <span>
                                        <i class="bi bi-cart"></i>
                                    </span>
                                    giỏ hàng
                                </a>
                            </li>
                            <li>
                                <?php
                                // echo $_SESSION['user'];
                                // echo $_SESSION['role'];
                                if(empty($_SESSION['user'])){?>
                                <a href="index.php?redirect=dangnhap" id="taikhoan">
                                    <span><i class="bi bi-person-fill"></i></span>
                                    đăng nhập
                                </a>
                                <?php }else{?>
                                    <a href="index.php?redirect=dangxuat" id="taikhoan">
                                    <span><i class="bi bi-person-fill"></i></span>
                                    Đăng xuất
                                </a>
                                <a href="index.php?redirect=doimatkhau" id="taikhoan">
                                    <span><i class="bi bi-person-fill"></i></span>
                                    Đổi mật khẩu
                                </a>
                                <?php } ?>
                                <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){?>
                                    <a href="app/views/admin/index.php" id="taikhoan">
                                    <span><i class="bi bi-person-fill"></i></span>
                                    Truy cập Cpanel
                                    </a>
                                <?php } ?>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?redirect=donhang">Đơn hàng của tôi</a></li>
                    <li><a href="index.php?redirect=dmsp">Danh mục sản phẩm</a></li>
                    <li><a href="index.php?redirect=tintuc">Tin tức</a></li>
                    <li><a href="index.php?redirect=lienhe">Liên hệ</a></li>
                </ul>
            </div>
           