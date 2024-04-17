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
            <span>Contact</span>
          </p>
          <h1 class="mb-0 bread">Contact Us</h1>
        </div>
      </div>
    </div>
  </div>

  <section style="min-height: 80vh; ">
  <div class="container mt-5 " " >
      <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>

        <div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="info" style="background-color: white; color: black; padding: 20px; border: 2px solid #ccc;">
                <p><span>Address:</span> Le Hong Phong, Binh Thuy, Can Tho</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info" style="background-color: white; color: black; padding: 20px; border: 2px solid #ccc;">
                <p><span>Phone:</span> +84 3915 9518</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info" style="background-color: white; color: black; padding: 20px; border: 2px solid #ccc;">
                <p><span>Email:</span> phamtien3069@gmail.com</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info" style="background-color: white; color: black; padding: 20px; border: 2px solid #ccc;">
                <p><span>Website:</span> NoahFashion.com</p>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

      </div>
      <div class="row mb-5 justify-content-center">
            <div class="col-md-4">
                <div class="form-group" style="border: 1px solid #ccc; background-color: #fff; padding: 20px;">
                    <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                    <input type="email" class="form-control mt-3" name="your-email" placeholder="Your Email">
                    <input type="text" class="form-control mt-3" name="subject" placeholder="Subject">
                    <textarea class="form-control mt-3" name="message" rows="5" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-warning mt-3">Send Message</button>
                </div>
            </div>
        </div>
    </div>
  </section>
</body>
</html>
HTML;

// Output the generated HTML code
echo $html;
