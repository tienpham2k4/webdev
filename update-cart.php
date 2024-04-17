<?php

include "function.php";

// Check if form is submitted and product ID is provided
if(isset($_POST['productId']) && isset($_POST['action'])) {
    // Retrieve product ID and action
    $productId = $_POST['productId'];
    $action = $_POST['action'];

    // Validate action (ensure it's either 'increase' or 'decrease')
    if($action === 'increase' || $action === 'decrease') {
        // Call addToCart function to update cart quantity
        addToCart($productId, $action);
        
        // Redirect back to the cart page
        header("Location: ".getUrl("?action=cart"));
        exit();
    } else {
        // Invalid action provided
        echo "Invalid action.";
    }
} else {
    // Form data not provided
    echo "Form data missing.";
}
?>
