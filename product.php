<?php

require_once "config/database.php";

$id = isset($_GET['id'])
    ? (int) $_GET['id']
    : 0;


$stmt = $pdo->prepare(
    "SELECT * FROM products WHERE id = :id LIMIT 1"
);

$stmt->execute([
    'id' => $id
]);

$product = $stmt->fetch();


if (!$product) {

    http_response_code(404);

    die("Product not found.");

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= htmlspecialchars($product['name']) ?>
        | Kigali Luxury Furniture
    </title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>

<body>


<!-- HEADER -->

<header class="header">

    <a href="index.php" class="logo">

        <span>KLF</span>

        <div>

            <strong>KIGALI</strong>

            <small>LUXURY FURNITURE</small>

        </div>

    </a>


    <nav class="navbar">

        <a href="index.php">
            Home
        </a>

        <a href="products.php" class="active">
            Furniture
        </a>

        <a href="about.php">
            About
        </a>

        <a href="contact.php">
            Contact
        </a>

    </nav>

</header>



<!-- PRODUCT DETAIL -->

<section class="product-detail">


    <div class="detail-image">

        <img
            src="<?= htmlspecialchars($product['image']) ?>"
            alt="<?= htmlspecialchars($product['name']) ?>"
        >

    </div>



    <div class="detail-content">

        <p class="eyebrow">

            <?= htmlspecialchars($product['category']) ?>

        </p>


        <h1>

            <?= htmlspecialchars($product['name']) ?>

        </h1>


        <div class="detail-price">

            <?= number_format(
                $product['price'],
                0
            ) ?>

            RWF

        </div>


        <p class="detail-description">

            <?= nl2br(
                htmlspecialchars(
                    $product['description']
                )
            ) ?>

        </p>


        <div class="detail-actions">

            <a
                href="https://wa.me/250788000000?text=Hello%20Kigali%20Luxury%20Furniture,%20I%20am%20interested%20in%20<?= urlencode($product['name']) ?>"
                target="_blank"
                class="btn primary-btn"
            >
                Ask on WhatsApp →
            </a>


            <button
                onclick="openChat()"
                class="btn secondary-btn"
            >
                Chat with Admin
            </button>

        </div>


        <div class="product-meta">

            <div>

                <strong>
                    Category
                </strong>

                <span>
                    <?= htmlspecialchars($product['category']) ?>
                </span>

            </div>


            <div>

                <strong>
                    Location
                </strong>

                <span>
                    Kigali, Rwanda
                </span>

            </div>

        </div>

    </div>

</section>



<footer class="footer">

    <div class="footer-brand">

        <div class="logo">

            <span>KLF</span>

            <div>

                <strong>KIGALI</strong>

                <small>
                    LUXURY FURNITURE
                </small>

            </div>

        </div>

        <p>
            Timeless pieces.
            Modern living.
            Made for Kigali.
        </p>

    </div>

</footer>


<script src="assets/js/app.js"></script>

</body>

</html>