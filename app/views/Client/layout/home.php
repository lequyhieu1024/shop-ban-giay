<div class="menu_hanggiay">
                <div class="row">
                    <?php $dm = loadDmOld();
                    foreach($dm as $row):
                        extract($row);?>
                    <div class="col-md-2 ">
                        <div class="item_hanggiay">
                            <a href="index.php?redirect=sptheodanhmuc&id=<?=$id?>">
                                <img src="public/img/<?=$img?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </header>
<main>
        <div class="banner_main">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/img/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/bannerpuma.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/banner2nike.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="contac_1">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="index.php?redirect=sptheodanhmuc&id=19">
                            Adidass
                        </a>
                    </h2>
                </div>
                <div class="item_home">
                    <div class="row">
                        <?php 
                        $spAds = loadAllSpAds();
                        foreach($spAds as $rows):
                            extract($rows)?>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="public/img/<?=$img?>" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang"><?=$name_sp?></p>
                                <p class="gioi_thieu"><?=$mota?></p>
                                <span><?=$price?></span>
                            </div>
                            <div class="item_contac">
                                <a href="index.php?redirect=ctsp&id=<?=$id?>">Xem chi tiết</a>
                            </div>
                        </div>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="xem_them">
                    <a href="#">
                        xem thêm sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="contac_1">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="index.php?redirect=sptheodanhmuc&id=20">
                            nike
                        </a>
                    </h2>
                </div>
                <div class="item_home">
                    <div class="row">
                        <?php 
                        $spAds = loadAllSpNike();
                        foreach($spAds as $rows):
                            extract($rows)?>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="public/img/<?=$img?>" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang"><?=$name_sp?></p>
                                <p class="gioi_thieu"><?=$mota?></p>
                                <span><?=$price?></span>
                            </div>
                            <div class="item_contac">
                                <a href="index.php?redirect=ctsp&id=<?=$id?>">Xem chi tiết</a>
                            </div>
                        </div>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="xem_them">
                    <a href="#">
                        xem thêm sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="contac_1">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="index.php?redirect=sptheodanhmuc&id=23">
                            Gucci
                        </a>
                    </h2>
                </div>
                <div class="item_home">
                    <div class="row">
                        <?php 
                        $spAds = loadAllSpGucci();
                        foreach($spAds as $rows):
                            extract($rows)?>
                        <div class="col-md-3 box-item">
                            <div class="img_item zoom_img">
                                <div>
                                    <img src="public/img/<?=$img?>" alt="">
                                </div>
                            </div>
                            <div class="text_item">
                                <p class="loai_hang"><?=$name_sp?></p>
                                <p class="gioi_thieu"><?=$mota?></p>
                                <span><?=$price?></span>
                            </div>
                            <div class="item_contac">
                                <a href="index.php?redirect=ctsp&id=<?=$id?>">Xem chi tiết</a>
                            </div>
                        </div>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="xem_them">
                    <a href="#">
                        xem thêm sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="contac_3">
            <div class="boxcenter">
                <div class="title_home">
                    <h2>
                        <a href="#">
                            Danh mục mới
                        </a>
                    </h2>
                </div>
                
                <div class="row">
                <?php 
                $dm = loadDmNew();
                foreach($dm as $row):
                extract($row);?>
                    <div class="col-md-4">
                        <div class="box-item">
                            <div class="img_box">
                                <img src="public/img/<?=$img?>" alt="">
                            </div>
                            <div class="text_box">
                                <h3>
                                    <?=$name?>
                                </h3>
                                <a href="index.php?redirect=sptheodanhmuc&id=<?=$id?>">xem thêm</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
                </div>
            </div>
        </div>
        <div class="contac_2">
            <div class="title_home">
                <h2>
                    <a href="#">
                        tin tức
                    </a>
                </h2>
            </div>
            <div class="boxcenter">
                <div class="news_item">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="public/img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="public/img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="public/img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="item_news">
                                <div class="img_news">
                                    <img src="public/img/banner2.jpg" alt="">
                                </div>
                                <div class="text_news">
                                    <h3>SẢN XUẤT TẠI VIỆT NAM
                                    </h3>
                                    <p>
                                        Từ những nghệ nhân đóng giày dày dạn kinh nghiệm với mong muốn mang đến
                                        cho Quý Ông đôi giày mang Thương Hiệu Việt chất lượng tốt nhất.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>