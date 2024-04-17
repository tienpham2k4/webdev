<div class="container-fluid ">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 col-12">
                <h3 class="text-black">
                    Fashion Is The Future
                    </p>
                    <h1 class="text-black display-2 bold">
                        <b>Life is an opportunity to express style</b>
                    </h1>
            </div>
            <div class="col-lg-5 col-12">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-color: #ffc107;">
                            <img src="assets/images/37.jpg" class="d-block  rounded"
                                style="height: 311px; width: 526px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/35.jpg" class="d-block rounded" style="height: 311px;width: 526px;"
                                alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev" style="width: 5%;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next" style="width: 5%;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5 my-5">
        <div class="col-lg-3 col-6  mb-3">
            <div class="bg-light text-center py-5 rounded">
                <div class="bg-warning rounded-circle mx-auto p-3 d-flex justify-content-center align-items-center"
                    style="width: 120px; height: 120px;">
                    <i class="fa-4x fa-solid fa-truck-fast text-white"></i>
                </div>

                <br>
                <div class="p-2">
                    <h4>
                        Free Shipping
                        </b>
                </div>
                <span>
                    Free on order over $300
                </span>
            </div>

        </div>
        <div class="col-lg-3 col-6  mb-3">
            <div class="bg-light text-center py-5 rounded">
                <div class="bg-warning rounded-circle mx-auto p-3 d-flex justify-content-center align-items-center"
                    style="width: 120px; height: 120px;">
                    <i class="fa-4x fa-solid fa-user-shield text-white"></i>
                </div>

                <br>
                <div class="p-2">
                    <h4>
                        Security Payment
                        </b>
                </div>
                <span>
                    100% security payment
                </span>
            </div>

        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="bg-light text-center py-5 rounded">
                <div class="bg-warning rounded-circle mx-auto p-3 d-flex justify-content-center align-items-center"
                    style="width: 120px; height: 120px;">
                    <i class="fa-4x fa-solid fa-right-left text-white"></i>
                </div>

                <br>
                <div class="p-2">
                    <h4>
                        30 Day Return
                        </b>
                </div>
                <span>
                    30 day money guarantee
                </span>
            </div>

        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="bg-light text-center py-5 rounded">
                <div class="bg-warning rounded-circle mx-auto p-3 d-flex justify-content-center align-items-center"
                    style="width: 120px; height: 120px;">
                    <i class="fa-4x fa-solid fa-phone text-white"></i>
                </div>

                <br>
                <div class="p-2">
                    <h4>
                        24/7 Support
                        </b>
                </div>
                <span>
                    Support every time fast
                </span>
            </div>

        </div>

    </div>
</div>
<div class="container mb-5">
    <div class="tab-class text-center">
        <div class="row g-4">
            <div class="col-lg-4 text-start">
                <h1> Our Fashion Products</h1>
            </div>
            <div class="col-lg-8 text-end">
                <ul class="nav nav-pills fruite-tab d-inline-flex text-center mb-5">
                    <li class="nav-item">
                        <a href="javascript:" class="active d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill"
                            data-bs-target="#tab-1">
                            <span style="width: 130px;">All Products</span>
                        </a>
                    </li>
                    <?php
                    $getCategoriesQuery = "SELECT * FROM `categories` ORDER BY `id` DESC ";
                    $result = $mysql->query($getCategoriesQuery);
                    if ($result && $result->num_rows > 0) {
                        $categories = $result;
                    } else {
                        $categories = null;
                    }
                    ?>
                    <!-- <li class="nav-item">
                            <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" data-bs-target="#tab-2">
                                <span  style="width: 130px;">Vegetables</span>
                            </a>
                        </li> -->
                    <?php
                    if ($categories) {
                        while ($category = $categories->fetch_assoc()) {
                            ?>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill " data-bs-toggle="pill"
                                    data-bs-target="#tab-<?php echo $category['id'] ?>">
                                    <span style="width: 130px;"><?php echo $category['name'] ?></span>
                                </a>
                            </li>
                            <?php
                        }
                    } ?>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show active p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <?php                            
                            // Fetch products from the database
                            $getProductsQuery = "SELECT * FROM products"; // Modify this query as per your database structure
                            $productResult = $mysql->query($getProductsQuery);
                            // Check if products were fetched successfully
                            if ($productResult && $productResult->num_rows > 0) {
                                // Loop through each product
                                while ($row = $productResult->fetch_assoc()) {
                                    ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded fruite-item border border-secondary">
                                            <div class=" fruite-img">
                                                <a href="<?php echo getUrl('?action=details&id=' . $row['id']) ?>"
                                                    class="text-decoration-none">
                                                    <img src="<?php echo getUrl($row['image']) ?>" class="img-fluid rounded-top"
                                                        alt="<?php echo $row['name']; ?>"
                                                        style="width: 300px; height: 300px; object-fit: cover;">
                                                </a>
                                            </div>
                                            <div class="p-4  border-top-0 rounded-bottom">
                                                <?php
                                                // Check if the length of the name is greater than a certain limit
                                                $maxLength = 20; // Set the maximum length here
                                                $productName = $row['name'];
                                                if (strlen($productName) > $maxLength) {
                                                    $productName = substr($productName, 0, $maxLength) . '...';
                                                }
                                                ?>
                                                <h4>
                                                    <a href="<?php echo getUrl('?action=details&id=' . $row['id']) ?>"
                                                        class="text-decoration-none" style="color: black; font-weight: bold;">
                                                        <?php echo $productName; ?>
                                                    </a>
                                                </h4>
                                                <p><?php echo $row['short_description']; ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">$<?php echo $row['price']; ?></p>
                                                    <a href="<?php echo getUrl("add-to-cart.php?id=" . $row['id']) ?>"
                                                        class="btn border border-secondary rounded-pill px-3 text-primary">
                                                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                // Handle case where no products were found
                                echo "No products found.";
                                // You may want to add further error handling or redirect to an error page
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $getCategoriesQuery = "SELECT * FROM `categories` ORDER BY `id` DESC ";
            $result = $mysql->query($getCategoriesQuery);
            if ($result && $result->num_rows > 0) {
                while ($category = $result->fetch_assoc()) {
                    $categoryId = $category["id"];
                    $getProductsQuery = "SELECT * FROM products WHERE `category_id` = '$categoryId'";
                    $productResult = $mysql->query($getProductsQuery);

                    if ($productResult && $productResult->num_rows > 0) {
                        ?>
                        <div id="tab-<?php echo $categoryId ?>" class="tab-pane fade p-0">
                            <div class="row g-4">
                                <?php
                                while ($row = $productResult->fetch_assoc()) {
                                    ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class=" fruite-item rounded fruite-item border border-secondary">
                                            <a href="<?php echo getUrl("?action=details&id=" . $row['id']) ?>">
                                                <div class="fruite-img">
                                                    <img src="<?php echo getUrl($row['image']) ?>" class="img-fluid w-100 rounded-top"
                                                        alt="" style="width: 300px; height: 300px; object-fit: cover;">

                                                </div>
                                            </a>
                                            <div class="p-4 border-top-0 rounded-bottom">
                                                <h4><?php echo $row['name'] ?></h4>
                                                <p><?php echo $row['short_description'] ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">
                                                        $<?php echo number_format($row['price'], 2) ?></p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                }
            } else {
                // No categories found
            }
            ?>

        </div>
    </div>

</div>