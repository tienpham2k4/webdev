<?php
function getCartCount(){
    if(isset($_SESSION['product_in_cart']))
        return count($_SESSION['product_in_cart']);
    else
        return 0;
}
function getCartTotal()
{
    $total = 0;
    $cartItems = getCartItems();

    foreach($cartItems as $item) {
        $total += $item['price'] * $_SESSION['carts'][$item['id']]['quantity'];
    }
    return $total;
}

function getCartItems(){
    global $mysql;
    if(isset($_SESSION['carts']))
    {
        $listsProductInCart = implode(",",$_SESSION['product_in_cart']);
        $getProductFromCartSql = "SELECT p.*, c.name AS category_name FROM `products` p 
        INNER JOIN `categories` c ON p.category_id = c.id WHERE p.id IN ($listsProductInCart)";
        $result = $mysql->query($getProductFromCartSql);
        $products = [];
        if($result && $result->num_rows>0)
        {
            while($row = $result->fetch_assoc())
            {
                $products[] = $row;
            }
        }
        return $products;
    }
    else
        return [];
}
function clearCart(){
    unset($_SESSION['carts']);
    unset($_SESSION['product_in_cart']);

}
function addToCart($productId, $action = 'increase')
{
    
    if(isset($_SESSION['carts']))
    {
        $_SESSION['product_in_cart'][] = $productId;
        if(isset($_SESSION['carts'][$productId]))
        {
            if($action === 'increase') {
                // Increase quantity by 1
                $_SESSION['carts'][$productId]['quantity']++;
            } elseif($action === 'decrease') {
                // Decrease quantity by 1 if quantity is greater than 1
                if($_SESSION['carts'][$productId]['quantity'] > 1) {
                    $_SESSION['carts'][$productId]['quantity']--;
                } else {
                    // If quantity is 1 and action is decrease, remove the product from cart
                    unset($_SESSION['carts'][$productId]);
                    // Remove product ID from the list of products in cart
                    $_SESSION['product_in_cart'] = array_diff($_SESSION['product_in_cart'], [$productId]);
                }
            }
        }
        else
        {
            // If product not already in cart, add it with quantity 1
            $_SESSION['carts'][$productId] = [
                'quantity' => 1
            ];
            $_SESSION['product_in_cart'][] = $productId;
        }
    }
    else
    {
        // If cart doesn't exist, create it and add product
        $_SESSION['carts'][$productId] = [
            'quantity' => 1
        ];
        $_SESSION['product_in_cart'][] = $productId;
    }

    // Ensure product ID is added to the list of products in cart
    if(!in_array($productId, $_SESSION['product_in_cart'])) {
        $_SESSION['product_in_cart'][] = $productId;
    }
    $_SESSION['product_in_cart'] = array_unique($_SESSION['product_in_cart']);
}
