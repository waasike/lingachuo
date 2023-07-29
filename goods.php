<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<?php include_once "headers/signedinheader.php"; ?>

<body id="top">

    <!-- HEADER SECTION -->

    <header class="header" data-header>
        <div class="container">

            <h1>
                <a href="#home" class="logo"><img src="images/logo.png" width="65%"></a>
            </h1>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="home.php" class="navbar-link" data-nav-toggler>Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="about.php" class="navbar-link" data-nav-toggler>About</a>
                    </li>

                    <li class="navbar-item">
                        <a href="communities.php" class="navbar-link" data-nav-toggler>Communities</a>
                    </li>


                    <li class="navbar-item">
                        <a href="goods.php" class="navbar-link" data-nav-toggler>Goods</a>
                    </li>

                    <li class="navbar-item">
                        <a href="events.php" class="navbar-link" data-nav-toggler>Events</a>
                    </li>

                    <li class="navbar-item">
                        <a href="users.php" class="navbar-link" data-nav-toggler><b>My Chats</b></a>
                    </li>

                </ul>

            </nav>

            <div class="header-actions">


            <a href="users.php" class="header-action-btn login-btn">
                    <ion-icon name="log-out-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Logout</span>
                </a>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>




    <main>
        <article>


<!-- GOODS SECTION -->

<section class="section goods" id="goods" aria-label="goods" style="background-image: url('images/goods-bg.jpg')">
    <div class="container">

        <h2 class="h2 section-title">Student's Goods on Sale</h2>

        <ul class="grid-list">

            <li>
                <div class="goods-card">

                    <figure class="card-banner">
                        <img src="images/mabuyu.jpg" width="100" height="100" loading="lazy" alt="Soccer" class="img-cover">
                    </figure>

                    <div class="card-actions">

                        <span class="badge">Food</span>

                        <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                            <ion-icon name="heart"></ion-icon>
                        </button>

                    </div>

                    <div class="card-content">

                        <ul class="card-meta-list">


                            <li class="card-meta-item">
                                <ion-icon name="person" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">Sean Karunu</span>
                            </li>

                        </ul>

                        <h3 class="h3">
                            <a href="goods-checkout.php" class="card-title">Mabuyu and Achari</a>
                        </h3>

                        <div class="rating-wrapper">

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </div>

                            <span class="rating-text">(6 Reviews)</span>

                        </div>

                        <div class="card-footer">

                            <div class="card-price">
                                <span class="span">ksh. 200</span>

                                <del class="del">ksh. 300</del>
                            </div>

                            <div class="card-meta-item">
                                <ion-icon name="checkmark-outline" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">approved</span>
                            </div>

                        </div>

                    </div>

                </div>
            </li>


            <li>
                <div class="goods-card">

                    <figure class="card-banner">
                        <img src="images/shorts.jpg" width="370" height="270" loading="lazy" alt="Basketball" class="img-cover">
                    </figure>

                    <div class="card-actions">

                        <span class="badge">Clothing</span>

                        <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                            <ion-icon name="heart"></ion-icon>
                        </button>

                    </div>

                    <div class="card-content">

                        <ul class="card-meta-list">
                        
                            <li class="card-meta-item">
                                <ion-icon name="person" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">Ruth Wambui</span>
                            </li>

                        </ul>

                        <h3 class="h3">
                            <a href="goods-checkout.php" class="card-title">Quality Sweatshorts</a>
                        </h3>

                        <div class="rating-wrapper">

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </div>

                            <span class="rating-text">(5 Reviews)</span>

                        </div>

                        <div class="card-footer">

                            <div class="card-price">
                                <span class="span">ksh. 300</span>

                                <del class="del">ksh. 350</del>
                            </div>

                            <div class="card-meta-item">
                                <ion-icon name="checkmark-outline" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">approved</span>
                            </div>

                        </div>

                    </div>

                </div>
            </li>


            <li>
                <div class="goods-card">

                    <figure class="card-banner">
                        <img src="images/pouches.jpg" width="370" height="270" loading="lazy" alt="Hiking | Nature walk" class="img-cover">
                    </figure>

                    <div class="card-actions">

                        <span class="badge">Essentials</span>

                        <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                            <ion-icon name="heart"></ion-icon>
                        </button>

                    </div>

                    <div class="card-content">

                        <ul class="card-meta-list">


                            <li class="card-meta-item">
                                <ion-icon name="person" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">Sandra Mima</span>
                            </li>

                        </ul>

                        <h3 class="h3">
                            <a href="goods-checkout.php" class="card-title">Stylish Pencil Pouches</a>
                        </h3>

                        <div class="rating-wrapper">

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                            <span class="rating-text">(4 Reviews)</span>

                        </div>

                        <div class="card-footer">

                            <div class="card-price">
                                <span class="span">ksh. 400</span>

                            </div>

                            <div class="card-meta-item">
                                <ion-icon name="checkmark-outline" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">approved</span>
                            </div>

                        </div>

                    </div>

                </div>
            </li>

            <li>
                <div class="goods-card">

                    <figure class="card-banner">
                        <img src="images/leather.jpg" width="370" height="270" loading="lazy" alt="Feminist" class="img-cover">
                    </figure>

                    <div class="card-actions">

                        <span class="badge">Clothing</span>

                        <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                            <ion-icon name="heart"></ion-icon>
                        </button>

                    </div>

                    <div class="card-content">

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="person" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">Paul Farin</span>
                            </li>

                        </ul>

                        <h3 class="h3">
                            <a href="goods-checkout.php" class="card-title">Quality Leather Strap Bag</a>
                        </h3>

                        <div class="rating-wrapper">

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>

                            <span class="rating-text">(4 Reviews)</span>

                        </div>

                        <div class="card-footer">

                            <div class="card-price">
                                <span class="span">ksh. 500</span>

                            </div>

                            <div class="card-meta-item">
                                <ion-icon name="checkmark-outline" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">approved</span>
                            </div>

                        </div>

                    </div>

                </div>
            </li>

            <li>
                <div class="goods-card">

                    <figure class="card-banner">
                        <img src="images/shoes.jpg" width="370" height="270" loading="lazy" alt="Gaming" class="img-cover">
                    </figure>

                    <div class="card-actions">

                        <span class="badge">Shoes</span>

                        <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                            <ion-icon name="heart"></ion-icon>
                        </button>

                    </div>

                    <div class="card-content">

                        <ul class="card-meta-list">

                            <li class="card-meta-item">
                                <ion-icon name="person" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">Sam Henry</span>
                            </li>

                        </ul>

                        <h3 class="h3">
                            <a href="goods-checkout.php" class="card-title">Low-top Jordan 1's</a>
                        </h3>

                        <div class="rating-wrapper">

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>

                            <span class="rating-text">(2 Reviews)</span>

                        </div>

                        <div class="card-footer">

                            <div class="card-price">
                                <span class="span">ksh. 10,000</span>

                            </div>

                            <div class="card-meta-item">
                                <ion-icon name="refresh" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">pending approval</span>
                            </div>

                        </div>

                    </div>

                </div>
            </li>

            <li>
                <div class="goods-card">

                    <figure class="card-banner">
                        <img src="images/laptop.jpg" width="370" height="270" loading="lazy" alt="Technology" class="img-cover">
                    </figure>

                    <div class="card-actions">

                        <span class="badge">Clothing</span>

                        <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                            <ion-icon name="heart"></ion-icon>
                        </button>

                    </div>

                    <div class="card-content">

                        <ul class="card-meta-list">


                            <li class="card-meta-item">
                                <ion-icon name="person" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">Tonio Jared</span>
                            </li>

                        </ul>

                        <h3 class="h3">
                            <a href="goods-checkout.php" class="card-title">Laptop Backpack</a>
                        </h3>

                        <div class="rating-wrapper">

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>

                            <span class="rating-text">(2 Reviews)</span>

                        </div>

                        <div class="card-footer">

                            <div class="card-price">
                                <span class="span">ksh. 600</span>

                            </div>

                            <div class="card-meta-item">
                                <ion-icon name="refresh" aria-hidden="true"></ion-icon>

                                <span class="card-meta-text">pending approval</span>
                            </div>

                        </div>

                    </div>

                </div>
            </li>


        </ul>


    </div>
</section>

</article>
</main>
<!---custom js link-->
<script src="/script.js" defer></script>

<!---ionicon link-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>