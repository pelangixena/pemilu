<?php
session_start();
if (empty($_SESSION['username_pemilupresiden'])) {
    header('location:login');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM INFORMASI PEMILIHAN CAPRES & CAWAPRES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="mystyle.css">
</head>

<body style="height: 3000px;">

    <!--Header-->
    <?php include "header.php"; ?>
    <!--End Header-->

    <div class="container-lg">
        <div class="row">

            <!--Sidebar-->
            <?php include "sidebar.php"; ?>
            <!--End Sidebar-->

            <!--Content-->
            <?php
            include $page;
            ?>
            <!--End Content-->

        </div>

        <div class="fixed-bottom text-center bg-dark text-white py-1">
            SISTEM INFORMASI PEMILIHAN CAPRES & CAWAPRES &copy; 2024. Semua Hak Dilindungi.
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>