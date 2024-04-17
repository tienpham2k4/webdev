<!-- <div class="container my-5 pt-5">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/images/fruite-item-1.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6">
                        <h3>
                            Brocoli
                        </h3>
                        <p>
                            Category: Vegetables
                        </p>
                        <h5>
                            $4.45
                        </h5>
                        <div>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            <i class="fa fa-star text-secondary" aria-hidden="true"></i>
                        </div>
                        <p>
                            The generated Lorem Ipsum is therefore always free from repetition injected humour, or
                            non-characteristic words etc.
                            Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel
                            hatchetfish, pencilfish snailfish
                        </p>
                        <div class="input-group mb-3" style="width: 150px;">
                            <span class="input-group-text">
                                <button id="btnMinus" class="btn btn-sm btn-minus rounded-circle bg-light border">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" class="form-control" value="1">
                            <span class="input-group-text">
                                <button id="btnPlus" class="btn btn-sm btn-plus rounded-circle bg-light border">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <a id="addToCart" href="#" 
                        class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary">
                            <i class="fa fa-shopping-bag me-2 text-primary" aria-hidden="true"></i> 
                            Add to cart
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <?php
// Include necessary files and configurations

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch product details from the database
    $getProductQuery = "SELECT p.*, c.name AS category_name FROM `products` p 
                        INNER JOIN `categories` c ON p.category_id = c.id
                        WHERE p.id = $productId";
    $productResult = $mysql->query($getProductQuery);

    // Check if product exists
    if ($productResult && $productResult->num_rows > 0) {
        $product = $productResult->fetch_assoc();
    } else {
        // Redirect to products page if product doesn't exist
        header("Location: products.php");
        exit();
    }
} else {
    // Redirect to products page if product ID is not provided
    header("Location: products.php");
    exit();
}
?>

    <div class="container my-5 pt-5">
    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo $product['image']; ?>" alt="" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>Category: <?php echo $product['category_name']; ?></p>
                   
                    <p>
                        <?php echo $product['description']; ?>
                    </p>
                    <h5>$<?php echo $product['price']; ?></h5>
                    <div>
                        <?php
                        $rating = 4; // Assuming a fixed rating for demonstration
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                        }
                        for ($i = $rating; $i < 5; $i++) {
                            echo '<i class="fa fa-star text-secondary" aria-hidden="true"></i>';
                        }
                        ?>
                    </div>
                   
                    <div class="input-group mb-3" style="width: 150px;">
                        <span class="input-group-text">
                            <button id="btnMinus" class="btn btn-sm btn-minus rounded-circle bg-light border">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </button>
                        </span>
                        <input type="text" id="quantity" class="form-control" value="1">
                        <span class="input-group-text">
                            <button id="btnPlus" class="btn btn-sm btn-plus rounded-circle bg-light border">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                    <a id="addToCart" href="" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary">
                        <i class="fa fa-shopping-bag me-2 text-primary" aria-hidden="true"></i>
                        Add to cart
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

