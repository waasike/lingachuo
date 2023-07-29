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

            <!-- ABOUT SECTION -->

            <section class="section about" id="about" aria-label="about">
                <div class="container">

                    <figure class="about-banner">

                        <img src="images/about1.jpg" width="450" height="590" loading="lazy" alt="about banner"
                            class="w-100 about-img">

                        <img src="images/about2.jpg" width="188" height="242" loading="lazy" aria-hidden="true"
                            class="abs-img abs-img-1">

                        <img src="images/about3.jpg" width="150" height="200" loading="lazy" aria-hidden="true"
                            class="abs-img abs-img-2">

                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">Who We Are</p>

                        <h2 class="h2 section-title">What is Linga-Chuo?</h2>

                        <ul class="about-list">

                            <li class="about-item">

                                <div class="item-icon item-icon-1">
                                    <img src="images/about4.png" width="30" height="30" loading="lazy"
                                        aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Linganisha-Chuo</h3>

                                    <p class="item-text">
                                        Linga-chuo is a project created intended to build great connections among
                                        university students within Kenya
                                        through similar interests.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="images/about5.png" width="30" height="30" loading="lazy"
                                        aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">OUR AIMS/ GOAL.</h3>

                                    <p class="item-text">
                                        Ling-cheo aims to improve relationsips among students from different
                                        universities and help people discover others with similar
                                        interests.
                                        We also aim to promote commercialisation in a way that students buy and sell
                                        goods among themselves promoting economic efficiency and sustainability within
                                        the student community.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-3">
                                    <img src="images/about6.png" width="30" height="30" loading="lazy"
                                        aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">OUR MOTTO.</h3>

                                    <p class="item-text">
                                        Discover.&nbsp; Interact.&nbsp; Unite
                                    </p>
                                </div>

                            </li>

                        </ul>

                        <a href="#" class="btn btn-primary" target="_blank">
                            <span class="span">Know More About Us</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

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