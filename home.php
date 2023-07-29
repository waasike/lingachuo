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
                <a href="#home" class="logo"><img src="images\logo.png" width="65%"></a>
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

            <!-- HOME SECTION -->

            <section class="home" id="home" aria-label="home">
                <div class="container">

                    <div class="home-content">

                        <video src="linga.mp4" muted loop autoplay></video>
                        <!-- <p class="section-subtitle">Build new | better connections</p> -->

                        <h2 class="home-title">WELCOME TO LINGA-CHUO</h2>

                        <p class="home-text">
                            Interact and connect with like-minded students from different universities.
                        </p>

                    </div>

                </div>
            </section>





            <!-- BACK TO TOP -->

            <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
                <ion-icon name="arrow-up"></ion-icon>
            </a>



        </article>
    </main>

    <!---custom js link-->
    <script src="js/script.js" defer></script>

    <!---ionicon link-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>