<?php
// Path to the assets directory (relative to the PHP file)
$assetsDir = 'assets';
// Image filename
$imageFilename = 'images/bg_6.jpg';
// Generate the HTML code with inline CSS styles
$html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
</head>
<body>

  <div style="background-image: url('$assetsDir/$imageFilename'); height: 300px; background-size: cover; background-position: center;">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs">
          <span class="mr-2"><a href="index.php" style="text-decoration: none; color: black;">Home</a></span>
            <span>Profile</span>
          </p>
          <h1 class="mb-0 bread">Frofile</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <!-- Frame for user's information -->
            <div class="info" style="background-color: white; padding: 20px; border: 2px solid #ccc; height: auto">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Right frame for user's information -->
                        <h2>Noah</h2>
                        <p><strong>Personal Information:</strong></p>
                        <ul>                          </p>
                            <li>Year old: 21</li>
                            <li>Sex: Male</li>
                            <li>Address: Can Tho</li>
                        </ul>
                        <p><strong>Contact Information:</strong></p>
                        <ul>
                            <li>Email: phamtien3069@gmail.com</li>
                            <li>Phone Number: +84 3915 9518</li>                         
                        </ul>
                        <p><strong>About Me:</strong></p>
                        <p>"Persevere."</p>
                        <p><strong>Recent Activities:</strong></p>
                        <ul>
                            <li>Updated 1 hour ago.</li>
                            <li>New product added.</li>
                            <li>Adjusted shopping cart.</li>
                        </ul>
                         </div>
                        <div class="col-md-3 d-flex align-items-start justify-content-end">
                         <!-- Left frame for avatar -->
                         <div class="info" style="background-color: white; padding: 0px; border: 2px solid #ccc;">
                         <img src="assets/images/avatar5.jpg" alt="Avatar" style="width: 100%; height: auto;">
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>

</div>
      
</body>
</html>
HTML;

// Output the generated HTML code
echo $html;
