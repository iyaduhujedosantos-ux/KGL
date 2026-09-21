<?php

require_once "config/database.php";

$pageTitle = "Furniture Collection | Kigali Luxury Furniture";

$search = $_GET['search'] ?? '';
$category = $_GET['category'] ?? '';

$sql = "SELECT * FROM products WHERE 1=1";

$params = [];

if ($search !== '') {

    $sql .= " AND (
        name LIKE :search
        OR description LIKE :search
    )";

    $params['search'] = "%$search%";
}

if ($category !== '') {

    $sql .= " AND category = :category";

    $params['category'] = $category;
}

$sql .= " ORDER BY created_at DESC";

$stmt = $pdo->prepare($sql);

$stmt->execute($params);

$products = $stmt->fetchAll();


// Get categories
$categoryStmt = $pdo->query(
    "SELECT DISTINCT category
     FROM products
     WHERE category != ''
     ORDER BY category"
);

$categories = $categoryStmt->fetchAll();

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($pageTitle) ?></title>

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


    <button
        class="chat-button"
        onclick="openChat()"
    >
        Chat with us
        <span class="online-dot"></span>
    </button>

</header>



<!-- PAGE HEADER -->

<section class="page-hero">

    <p class="eyebrow">
        KIGALI LUXURY COLLECTION
    </p>

    <h1>
        Furniture for
        <em>extraordinary spaces.</em>
    </h1>

    <p>
        Explore our collection of modern,
        elegant and timeless furniture.
    </p>

</section>



<!-- FILTER -->

<section class="products-section">

    <div class="filter-area">


        <!-- SEARCH -->

        <form
            method="GET"
            class="search-form"
        >

            <input
                type="text"
                name="search"
                placeholder="Search furniture..."
                value="<?= htmlspecialchars($search) ?>"
            >

            <button type="submit">
                Search
            </button>

        </form>


        <!-- CATEGORIES -->

        <div class="categories">

            <a
                href="products.php"
                class="<?= $category === '' ? 'selected' : '' ?>"
            >
                All
            </a>


            <?php foreach ($categories as $cat): ?>

                <a
                    href="products.php?category=<?= urlencode($cat['category']) ?>"
                    class="<?= $category === $cat['category'] ? 'selected' : '' ?>"
                >

                    <?= htmlspecialchars($cat['category']) ?>

                </a>

            <?php endforeach; ?>

        </div>

    </div>



    <!-- PRODUCTS -->

    <?php if (count($products) > 0): ?>

        <div class="products-grid">


            <?php foreach ($products as $product): ?>

                <article class="product-card">


                    <a
                        href="product.php?id=<?= $product['id'] ?>"
                        class="product-image"
                    >

                        <img
                            src="<?= htmlspecialchars($product['image']) ?>"
                            alt="<?= htmlspecialchars($product['name']) ?>"
                        >

                        <span class="view-product">
                            View →
                        </span>

                    </a>


                    <div class="product-info">

                        <div>

                            <h3>
                                <?= htmlspecialchars($product['name']) ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars($product['category']) ?>
                            </p>

                        </div>


                        <strong>

                            <?= number_format(
                                $product['price'],
                                0
                            ) ?>

                            RWF

                        </strong>

                    </div>

                </article>

            <?php endforeach; ?>


        </div>

    <?php else: ?>

        <div class="no-products">

            <h2>
                No furniture found
            </h2>

            <p>
                Try another search or category.
            </p>

        </div>

    <?php endif; ?>

</section>



<!-- FOOTER -->

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


    <div>

        <h4>Explore</h4>

        <a href="products.php">
            Furniture
        </a>

        <a href="about.php">
            About Us
        </a>

        <a href="contact.php">
            Contact
        </a>

    </div>


    <div>

        <h4>Contact</h4>

        <p>Kigali, Rwanda</p>

        <p>+250 788 000 000</p>

        <p>
            hello@kigaliluxuryfurniture.rw
        </p>

    </div>

</footer>


<script src="assets/js/app.js"></script>

</body>

</html>