<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./public/css/main.css"> -->
</head>
<body>
    <div class='container'>
        <?php
            require_once "./mvc/views/blocks/header-menu.php";
            require_once "./mvc/views/blocks/slider.php";
        ?>
    

        <div class='row'>
            <div id='leftCol' class='col-lg-3'>
                <?php
                    require_once "./mvc/views/blocks/login.php";
                    require_once "./mvc/views/blocks/menu.php";
                    require_once "./mvc/views/blocks/ads.php";
                ?>
            </div>

            <div id='rightCol' class='col-lg-9'>
                <?php
                    require_once "./mvc/views/{$data['folder']}/{$data['page']}.php";
                ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>