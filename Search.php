<?php
require_once 'config/db.php';
if(isset($_POST['search_button'])){
    $tu_khoa = $_POST['search_product'];
}

$sql_spnb = "SELECT * FROM sanpham limit 1";
$query_spnb = mysqli_query($connect,$sql_spnb);

$sql_dm = "SELECT * FROM dmsanpham";
$query_dm = mysqli_query($connect,$sql_dm);
$sql_search = "SELECT * FROM sanpham where ten_sp like '%$tu_khoa%'";
$query_search = mysqli_query($connect,$sql_search);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JSP Page</title>

    <link rel="stylesheet" href="../tourdulich/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->


</head>

<body>

    <!--begin of menu-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="Home.php"><img src="../tourdulich/img/test3.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="Home.php">Trang ch???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ManagerProduct.php">Qu???n l?? s???n ph???m</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QuanLyKH.php">Qu???n l?? kh??ch h??ng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="QuanLyTK.php">Qu???n l?? T??i kho???n</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="thongke.php">Th???ng k?? kh??ch h??ng</a>
                        </li>

                    </ul>

                </div>


            </div>
            <div class="icons">
                <div class="icon">
                    <i class="fas fa-search" id="search-btn"></i>
                    <a href="Cart.php">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                    <a href="danhnhap.php">
                    <i class="fas fa-user"></i>
                    </a>
                </div>



            </div>
            <form action="Search.php?quanly=timkiem" method="post" class="search-bar-container">
                <input name="search_product" id="search-bar" class="form-control me-2" type="search" placeholder="Nh???p ?????a ??i???m du l???ch c???n t??m ki???m..." aria-label="Search">
                <button type="submit" name="search_button" class="btn btn-secondary btn-number">
                    <i class="fa fa-search"></i>
                </button>
            </form>

        </nav>
    </section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../tourdulich/img/quang-cao-du-lich_113702379.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bannertournuocngoai.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="position: absolute; top:0px;">
                    <h5>Du l???ch 5 Ch??u</h5>
                    <p>Ch???t l?????ng to??n c???u</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/xu-huong-phat-trien-cua-nganh-kinh-doanh-khach-san.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>D???ch v???</h5>
                    <p>Lu??n ??em l???i nh???ng g?? b???n c???n</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--end of menu-->
    <div class="container">
        <div class="row">
            <!-- Left-->
            <div class="col-md-3">
                
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i>Danh m???c s???n ph???m</div>
                    <ul class="list-group category_block">
                        <?php
                        while ($row_dm = mysqli_fetch_assoc($query_dm)) { ?>
                            <li class="list-group-item text-black"><a href="Home_dm.php?id_dm=<?php echo $row_dm['id_dm'] ?>"><?php echo $row_dm['ten_dm'] ?></a></li>
                        <?php } ?>
                        <li class="list-group-item text-white"><a href="Home_km.php ?>">Khuy???n m???i</a></li>
                    </ul>
                
                <div class="card bg-light mb-3" id="sanphamnoibat">
                    <div class="card-header bg-success text-white text-uppercase">S???n ph???m n???i b???t</div>
                    <div class="card-body">
                        <?php while ($row_spnb = mysqli_fetch_assoc($query_spnb)) { ?>
                            <img class="img-fluid" src="img/<?php echo $row_spnb['anh_sp'] ?>" />
                            <h5 class="card-title"><?php echo $row_spnb['ten_sp'] ?></h5>
                            <p class="bloc_left_price"><?php echo number_format($row_spnb['gia_sp']) ?> VND</p>
                            <div class="col">
                                <a href="Cart.php?id_sp=<?php echo $row_sp['id_sp']; ?>" class="btn btn-success btn-block">?????t h??ng</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--End left-->
            <div class="col-md-9">
                <div class="row" id="roww">
                    <!--vong lap-->
                    <?php
                    while($row_search = mysqli_fetch_assoc($query_search)) {?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="img" src="img/<?php echo $row_search['anh_sp'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title show_txt"><a href="Detail.php?id_sp=<?php echo $row_search['id_sp']; ?>" title="View Product" class="nd"><?php echo $row_search['ten_sp'] ?></a></h4>
                                    
                                </p>
                                
                                    <div class="col">
                                    <p>Gi?? ch???: <span class="money"><?php echo number_format($row_search['gia_sp']) ?> VN??</span></p>
                                    </div>
                                    <div class="col">
                                        <a href="Cart.php?id_sp=<?php echo $row_search['id_sp']; ?>" class="btn btn-success">?????t h??ng</a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <!--ket thuc vong lap-->
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>Th??ng tin v??? trang web</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        M???t trang web gi??p kh??ch h??ng t??m hi???u th??ng tin v??? c??c tour du l???ch, d???ch v???
                        <p>Trang web ???????c ph??t tri???n b???i 3 th??nh vi??n</p>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5>Nh??m 17</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="">V?? Xu??n Long</a></li>
                        <li><a href="">Ph???m Y???n Linh</a></li>
                        <li><a href="">V????ng Th??? Linh</a></li>
                        
                    </ul>
                </div>

         

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h5>Li??n h???</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i> V??n Tr?? - H?? N???i</li>
                        <li><i class="fa fa-envelope mr-2"></i> Loqcoqtu@gmail.com</li>
                        <li><i class="fa fa-phone mr-2"></i> + 113</li>
                        <li><i class="fa fa-print mr-2"></i> + 112</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="float-left">
                        <a href="#">Tr??? v??? ?????u</a>
                    </p>
                    
                </div>
            </div>
        </div>
    </footer>
    <!--End footer-->
    <script src="../tourdulich/js/script.js"></script>
</body>

</html>