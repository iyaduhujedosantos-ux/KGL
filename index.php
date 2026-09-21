<?php
$pageTitle = "Kigali Luxury Furniture";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!-- ================= HEADER ================= -->
<header class="header">

    <a href="index.php" class="logo">
        <span>KLF</span>
        <div>
            <strong>KIGALI</strong>
            <small>LUXURY FURNITURE</small>
        </div>
    </a>

    <nav class="navbar" id="navbar">
        <a href="index.php" class="active">Home</a>
        <a href="products.php">Furniture</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>

    <button class="chat-button" onclick="openChat()">
        Chat with us
        <span class="online-dot"></span>
    </button>

    <button class="menu-button" onclick="toggleMenu()">
        ☰
    </button>

</header>


<!-- ================= HERO ================= -->
<section class="hero">

    <div class="hero-content">

        <p class="eyebrow">
            KIGALI • RWANDA
        </p>

        <h1>
            Furniture that makes
            <em>space extraordinary.</em>
        </h1>

        <p class="hero-description">
            Discover elegant furniture designed for modern homes,
            offices and luxury spaces in Kigali.
        </p>

        <div class="hero-buttons">

            <a href="products.php" class="btn primary-btn">
                Explore Collection →
            </a>

            <button onclick="openChat()" class="btn secondary-btn">
                Talk to a Designer
            </button>

        </div>

        <div class="stats">

            <div>
                <strong>100+</strong>
                <span>Furniture Pieces</span>
            </div>

            <div>
                <strong>24/7</strong>
                <span>Customer Chat</span>
            </div>

            <div>
                <strong>RW</strong>
                <span>Kigali Based</span>
            </div>

        </div>

    </div>


    <!-- HERO IMAGE -->

    <div class="hero-image">

        <img
        src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1400&q=90"
        alt="Luxury sofa">

        <div class="image-label">

            <span>01</span>

            <strong>
                Modern<br>
                Collection
            </strong>

            <span>↗</span>

        </div>

    </div>

</section>


<!-- ================= FEATURED ================= -->

<section class="section">

    <div class="section-header">

        <div>

            <p class="eyebrow">
                SELECTED FOR YOU
            </p>

            <h2>
                Featured Pieces
            </h2>

        </div>

        <a href="products.php" class="view-link">
            View All →
        </a>

    </div>


    <div class="products-grid">

        <!-- PRODUCT 1 -->

        <div class="product-card">

            <div class="product-image">

                <img
                src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?auto=format&fit=crop&w=1000&q=85"
                alt="Luxury chair">

                <span class="view-product">
                    View →
                </span>

            </div>

            <div class="product-info">

                <div>
                    <h3>Cloud Lounge Chair</h3>
                    <p>Living Room</p>
                </div>

                <strong>
                    420,000 RWF
                </strong>

            </div>

        </div>


        <!-- PRODUCT 2 -->

        <div class="product-card">

            <div class="product-image">

                <img
                src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1000&q=85"
                alt="Luxury sofa">

                <span class="view-product">
                    View →
                </span>

            </div>

            <div class="product-info">

                <div>
                    <h3>Nordic Sofa</h3>
                    <p>Living Room</p>
                </div>

                <strong>
                    1,850,000 RWF
                </strong>

            </div>

        </div>


        <!-- PRODUCT 3 -->

        <div class="product-card">

            <div class="product-image">

                <img
                src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=85"
                alt="Dining furniture">

                <span class="view-product">
                    View →
                </span>

            </div>

            <div class="product-info">

                <div>
                    <h3>Luxe Dining Set</h3>
                    <p>Dining</p>
                </div>

                <strong>
                    2,400,000 RWF
                </strong>

            </div>

        </div>

    </div>

</section>


<!-- ================= ABOUT SECTION ================= -->

<section class="luxury-section">

    <div class="luxury-image">

        <img
        src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1400&q=85"
        alt="Luxury interior">

    </div>

    <div class="luxury-content">

        <p class="eyebrow">
            THE KLF STANDARD
        </p>

        <h2>
            Less ordinary.
            <em>More living.</em>
        </h2>

        <p>
            We believe furniture should do more than fill a room.
            It should shape how you live, work, host and relax.
        </p>

        <a href="about.php" class="btn primary-btn">
            Discover Our Story →
        </a>

    </div>

</section>


<!-- ================= CTA ================= -->

<section class="cta">

    <div>

        <p class="eyebrow">
            NEED A CUSTOM LOOK?
        </p>

        <h2>
            Let's design your space.
        </h2>

    </div>

    <button onclick="openChat()" class="btn light-btn">
        Start Conversation →
    </button>

</section>


<!-- ================= CHAT ================= -->

<div class="chat-box" id="chatBox">

    <div class="chat-header">

        <div>
            <strong>KLF Concierge</strong>
            <small>Usually replies quickly</small>
        </div>

        <button onclick="closeChat()">
            ×
        </button>

    </div>


    <div class="chat-messages" id="chatMessages">

        <div class="message admin-message">
            Muraho 👋 Welcome to Kigali Luxury Furniture.
            How can we help?
        </div>

    </div>


    <div class="chat-input">

        <input
            type="text"
            id="messageInput"
            placeholder="Write your message..."
        >

        <button onclick="sendMessage()">
            Send
        </button>

    </div>

</div>


<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="footer-brand">

        <div class="logo">

            <span>KLF</span>

            <div>
                <strong>KIGALI</strong>
                <small>LUXURY FURNITURE</small>
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

        <a href="products.php">Furniture</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>

    </div>


    <div>

        <h4>Contact</h4>

        <p>Kigali, Rwanda</p>
        <p>+250 788 000 000</p>
        <p>hello@kigaliluxuryfurniture.rw</p>

    </div>

</footer>


<script src="assets/js/app.js"></script>

</body>
</html>