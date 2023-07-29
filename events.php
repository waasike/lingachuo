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





             <!-- EVENTS SECTION -->

             <section class="section event" id="events" aria-label="event">
                <div class="container">

                    <h2 class="h2 section-title">Upcoming School Events</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="images/women.jpg" width="370" height="250" loading="lazy" alt="Volunteering Group 1 started an initiative of keeping the compound around where they live clean." class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-12-04">1st Aug 2023</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Riara University, Nairobi</span>
                                    </address>

                                    <h3 class="h3" class="card-title">
                                        Women in Tech open panel conversation on Web3 and Blockchain.
                                    </h3>

                                    <a href="events.php" class="btn-link" target="_blank">
                                        <span class="span">Register to Attend</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="images/cybersecurity.jpg" width="370" height="250" loading="lazy" alt="Female Soccer Group2 Tournament" class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-10-30">3rd Aug 2023</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Strathmore University, Nairobi</span>
                                    </address>

                                    <h3 class="h3" class="card-title">
                                        Talk with Dr. Bright Gameli on opportunities in Cybersecurity. 
                                    </h3>

                                    <a href="events.php" class="btn-link" target="_blank">
                                        <span class="span">Register to Attend</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="images/journalism.jpg" width="370" height="250" loading="lazy" alt="Technology Group 2 Organised a meet-up where they were able to launch their new start-up." class="img-cover">
                                </figure>

                                <time class="badge" datetime="2022-09-18">7th Aug 2023</time>

                                <div class="card-content">

                                    <address class="card-address">
                                        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">Catholic University, Nairobi</span>
                                    </address>

                                    <h3 class="h3" class="card-title">
                                        Sarah & Kamilo, well known journalists share insights regarding the industry.
                                    </h3>

                                    <a href="events.php" class="btn-link" target="_blank">
                                        <span class="span">Register to Attend</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

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