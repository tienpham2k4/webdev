<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NoahFashion</title>
    <script src="https://kit.fontawesome.com/c6ccf656ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <?php
    include "function.php";
    ?>
    <?php
    include "header.php";
    ?>
    <?php
    $action = '';
    if (isset ($_GET['action'])) {
        $action = $_GET['action'];
    }

    switch ($action) {
        case "":
        case "homepage":
            include "homepage.php";
            break;
        case "details";
            include "details.php";
            break;
            
        case "cart";
        include "cart.php";
        break;
        case "contact";
            include "contact.php";
            break;
            case "profile";
            include "profile.php";
            break;
        default:
            include "404.php";
    }

    ?>
    <?php
    include "footer.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/js/common.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $('#confirm').on('change', function () {
        if ($('#confirm').is(":checked")) {
            $('#submit').prop('disabled', '')
        }
        else {
            $('#submit').prop('disabled', 'disabled')
        }
    })

    $('document').ready(function () {
        <?php
        if (isset ($_GET['error_login'])) {
            ?>
            $('#registerModal').modal('show')
            <?php
            if (isset ($_GET['error_code']) && $_GET['error_code'] == 1) { ?>
                toastr.error("Wrong password")
            <?php
            }
            if (isset ($_GET['error_code']) && $_GET['error_code'] == 2) { ?>
                toastr.error("Invalid user.")
            <?php
            }
            if (isset ($_GET['error_code']) && $_GET['error_code'] == 3) { ?>
                toastr.error("Invalid data")
            <?php
            }
        }
        if (isset ($_GET['login_success'])) { ?>
            toastr.success("Login success!")
        <?php }
        ?>
    })


</script>

</html>