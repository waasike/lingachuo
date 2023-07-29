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
                        <a href="events.html" class="navbar-link" data-nav-toggler>Events</a>
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

            <!-- SAMPLE COMMUNITIES SECTION -->

            <section class="section communities" aria-label="communities">
                <div class="container">

                    <ul class="grid-list">

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="football"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Soccer
                                    </h3>

                                    <span class="card-meta">50+ students joined</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="basketball"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Basketball
                                    </h3>

                                    <span class="card-meta">40+ students joined</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="laptop-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Technology
                                    </h3>

                                    <span class="card-meta">35+ students joined</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="camera"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Photography
                                    </h3>

                                    <span class="card-meta">30+ students joined</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="mic"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Journalism
                                    </h3>

                                    <span class="card-meta">30+ students joined</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="book"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Law
                                    </h3>

                                    <span class="card-meta">25+ students joined</span>
                                </div>

                            </div>
                        </li>


                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="medkit-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Medicine
                                    </h3>

                                    <span class="card-meta">20+ students joined</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="briefcase"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Buisness
                                    </h3>

                                    <span class="card-meta">20+ students joined</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="communities-card">

                                <div class="card-icon">
                                    <ion-icon name="pricetags"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        Finance
                                    </h3>

                                    <span class="card-meta">20+ students joined</span>
                                </div>

                            </div>
                        </li>

                    </ul>
                </div>
                <p class="section-subtitle" id="community-missing">Communities are currently unavailable</p>
                <div class="link"><a href="users.php">You can chat with other students here as you wait !</a></div>
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