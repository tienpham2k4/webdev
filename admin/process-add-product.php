<?php
// Include necessary files and configurations
include "../function.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input data
    $productName = $_POST['product_name'];
    $price = $_POST['price'];
    $shortDescription = $_POST['short_description'];
    $description = $_POST['description'];
    $categoryId = $_POST['category_id'];

    // Display input data for checking
    echo "Product Name: " . $productName . "<br>";
    echo "Price: " . $price . "<br>";
    echo "Short Description: " . $shortDescription . "<br>";
    echo "Description: " . $description . "<br>";
    echo "Category ID: " . $categoryId . "<br>";

    // Handle image upload
    $targetDir = "uploads";
    $targetFile = '../'.$targetDir.'/' . basename($_FILES["image"]["name"]);
    $filename =  $targetDir.'/'. basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file size exceeds limit
    if ($_FILES["image"]["size"] > 500000) { 
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if image file is a actual image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Escape single quotes in description
        $description = str_replace("'", "\'", $description);

        // Insert product into the database
        $insertProductSql = "INSERT INTO `products` (`name`, `price`, `short_description`, `description`, `image`, `category_id`) 
                             VALUES ('$productName', '$price', '$shortDescription', '$description', '$filename', '$categoryId')";
        $insertResult = $mysql->query($insertProductSql);

        // Check if there was an error with the query
        if (!$insertResult) {
            // Display the MySQL error
            echo "Error: " . $mysql->error;
        } else {
            // Redirect to a success page or display a success message
            header("location: " . getAdminUrl("?action=products&add_success=1"));
            exit();
        }
    }
}
?>
