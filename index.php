<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>

</head>

<body>

    <div class="underlay position-fixed top-0 min-vh-100 w-100">
        <div class="sidebar col-md-5 col-6 position-relative min-vh-100 bg-white">
            <i class="bi bi-x-lg close-sidebar position-absolute" style="left:10px;top:20px"></i>
            <img src="https://techhunk.pk/cdn/shop/files/logo.svg?v=1756199596&width=180" class="mx-auto d-block py-4"
                alt="">
            <hr class="border-secondary">
            <ul class="list-unstyled fw-semibold">
                <li class="px-3">Smart Watches</li>
                <hr class="border-secondary">
                <li class="px-3">Ear Buds</li>
                <hr class="border-secondary">
                <li class="px-3">Projectors</li>
                <hr class="border-secondary">
                <li class="px-3">Tech Essentials</li>
                <hr class="border-secondary">
                <li class="px-3">Help</li>
                <hr class="border-secondary">
                <li class="px-3">Support</li>
                <hr class="border-secondary">
                <li class="px-3">Track Your Order</li>
                <hr class="border-secondary">
                <li class="d-flex px-3 gap-4">
                    <a href="https://www.youtube.com" class="text-decoration-none" target="_blank">

                        <i class="bi bi-instagram text-dark  rounded-circle border d-flex justify-content-center align-items-center"
                            style="width:40px;height:40px;"></i>
                    </a>
                    <i class="bi bi-youtube rounded-circle border d-flex justify-content-center align-items-center"
                        style="width:40px;height:40px;"></i>
                    <i class="bi bi-facebook rounded-circle border d-flex justify-content-center align-items-center"
                        style="width:40px;height:40px;"></i>
                </li>

            </ul>
        </div>
    </div>

    <div class="container-fluid position-relative p-0">

        <nav style=""
            class="d-flex z-3 custom-navbar  rounded-4 position-absolute   p-sm-3 p-2 text-white gap-5 justify-content-lg-center justify-content-between align-items-center">
            <i class="bi bi-list list-icon fs-2 d-block d-lg-none"></i>
            <img src="https://techhunk.pk/cdn/shop/files/logo_1.png?v=1756293749&width=280" width="100px" alt="">
            <ul class="list-unstyled d-none d-lg-flex gap-4 m-0">
                <li>Home</li>
                <li>Earbuds</li>
                <li>Smart Watches</li>
                <li>Projectors</li>
                <a href="./sameer.php">
                    <li>Accessories</li>
                </a>
                <li>Support</li>
            </ul>
            <div class="d-flex gap-3">
                <i class="bi fs-4 bi-search"></i>
                <a href="./register.php">
                    <i class="bi fs-4 bi-person"></i>
                </a>
                <i class="bi fs-4 bi-bag"></i>
            </div>

        </nav>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="100%" height="80%"
                        src="https://techhunk.pk/cdn/shop/files/gen_3ookppc_11zon.webp?v=1757525647&width=3840"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img width="100%" height="80%"
                        src="https://techhunk.pk/cdn/shop/files/gen_3_pcok_11zon.webp?v=1757521393&width=3840"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img width="100%" height="80%"
                        src="https://techhunk.pk/cdn/shop/files/gen3blackout_8_11zon.webp?v=1756931012&width=1600"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <?php include './arrivals.php' ?>



</body>


</html>