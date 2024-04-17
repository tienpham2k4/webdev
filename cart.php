<?php
// Check if products are added to the cart
if (isset($_SESSION['product_in_cart']) && count($_SESSION['product_in_cart']) > 0) {
    // Retrieve product IDs from the session
    $products = getCartItems();
    if (!empty($products)) {
        ?>
        <div class="container  pt-5">
    <div class="row">
        <div class="col">
        <h2 class="text-center mb-5 ">My Cart</h2>
            <ul class="list-group">
                <?php
                // Loop through each product and display it in the cart
                foreach ($products as $product) {
                    $quantity = $_SESSION['carts'][$product['id']]['quantity'];
                ?>
                <li class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="<?php echo $product['image'] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 d-flex justify-content-between">
                            <!-- Move card title and card text to the middle -->
                            <div class="text-center"> <!-- Add class "text-center" here -->
                                <h5 class="card-title mb-0"><?php echo $product['name']; ?></h5>
                                <p class="card-text mb-0"><?php echo $product['price']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- Form to update quantity -->
                            <form action="update-cart.php" method="POST" class="quantity-form">
                                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                                <div class="input-group">
                                    <!-- Decrease button -->
                                    <button type="button" class="btn btn-outline-secondary decrease-btn">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <!-- Input number -->
                                    <input type="number" name="quantity" class="form-control quantity-input"
                                        value="<?php echo $quantity; ?>">
                                    <!-- Increase button -->
                                    <button type="button" class="btn btn-outline-secondary increase-btn">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- Delete button -->
                        <div class="col-md-3 offset-md-11">
                            <button type="button" class="btn btn-danger delete-btn">Delete</button>
                        </div>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md d-flex justify-content-between">
            <p class="total">Total: <?php echo getCartTotal() ?></p>
        </div>
        <div class="col-md-auto d-flex justify-content-end">
            <button class="btn btn-warning">Buy Now</button>
        </div>
    </div>
</div>

        <script>
            // Add event listeners for increase and decrease buttons
            document.querySelectorAll('.quantity-form').forEach(form => {
                const input = form.querySelector('.quantity-input');
                const increaseBtn = form.querySelector('.increase-btn');
                const decreaseBtn = form.querySelector('.decrease-btn');

                increaseBtn.addEventListener('click', () => {
                    input.stepUp();
                });

                decreaseBtn.addEventListener('click', () => {
                    if (input.value > 1) {
                        input.stepDown();
                    }
                });
            });

            // Add event listener for delete button
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', () => {
                    // Perform delete action here
                    // For example: Send an AJAX request to delete the product from the cart
                });
            });
        </script>
        <?php
    } else {
        echo "No products found in the cart.";
    }
} else {
    echo "Cart is empty.";
}
?>