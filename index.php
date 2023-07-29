<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "headers/header1.php"; ?>

<body id="top">

    <!-- HEADER SECTION -->

    <header class="header" data-header>
        <div class="container">

            <h1>
                <a href="#" class="logo"><img src="images/logo.png" width="65%"></a>
            </h1>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="#home" class="navbar-link" data-nav-toggler>Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#about" class="navbar-link" data-nav-toggler>About</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#communities" class="navbar-link" data-nav-toggler>Communities</a>
                    </li>


                    <li class="navbar-item">
                        <a href="#goods" class="navbar-link" data-nav-toggler>Goods</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#events" class="navbar-link" data-nav-toggler>Events</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#testimonials" class="navbar-link" data-nav-toggler>Testimonials</a>
                    </li>

                </ul>

            </nav>

            <div class="header-actions">

                <a href="signup.php" class="header-action-btn login-btn" target="_blank">
                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                    <span class="span">Login / Register</span>
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

                        <video src="linga-chuo.mp4" muted loop autoplay></video>
                        <p class="section-subtitle">Build new | better connections</p>

                        <h2 class="h1 home-title">LINGANISHA CHUO</h2>

                        <p class="home-text">
                        “We help you interact with other university students within Kenya with similar interests as you“
                        </p>

                        <a href="signup.php" class="btn btn-primary" target="_blank">
                            <span class="span">Get Started Today</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>




            <!-- ABOUT SECTION -->

            <section class="section about" id="about" aria-label="about">
                <div class="container">

                    <figure class="about-banner">

                        <img src="images/about1.jpg" width="450" height="590" loading="lazy" alt="about banner" class="w-100 about-img">

                        <img src="images/about2.jpg" width="188" height="242" loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                        <img src="images/about3.jpg" width="150" height="200" loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">Who We Are</p>

                        <h2 class="h2 section-title">What is Linga-Chuo?</h2>

                        <ul class="about-list">

                            <li class="about-item">

                                <div class="item-icon item-icon-1">
                                    <img src="images/about4.png" width="30" height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Linganisha-Chuo</h3>

                                    <p class="item-text">
                                        Linga-chuo is a project created intended to build great connections among university students within Kenya
                                        through similar interests.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="images/about5.png" width="30" height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">OUR AIMS/ GOAL.</h3>

                                    <p class="item-text">
                                        Ling-cheo aims to improve relationsips among students from different universities and help people discover others with similar
                                        interests.
                                        We also aim to promote commercialisation in a way that students buy and sell goods among themselves promoting economic efficiency and sustainability within the student community.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-3">
                                    <img src="images/about6.png" width="30" height="30" loading="lazy" aria-hidden="true">
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





          <!-- SAMPLE COMMUNITIES SECTION -->

          <section class="section communities" id="communities" aria-label="communities">
                <div class="container">

                    <p class="section-subtitle">Sample Communities</p>

                    <h2 class="h2 section-title">Popular Communities To Join</h2>

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
                                    <ion-icon name="pricetag"></ion-icon>
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
            </section>


             <!-- GOODS SECTION -->

            <section class="section goods" id="goods" aria-label="goods" style="background-image: url('images/goods-bg.jpg')">
                <div class="container">

                    <p class="section-subtitle">Goods currently on sale</p>

                    <h2 class="h2 section-title">Student's Goods on Sale</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="goods-card">

                                <figure class="card-banner">
                                    <img src="images\mabuyu.jpg" width="100" height="100" loading="lazy" alt="Soccer" class="img-cover">
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
                                        <a href="signup.php" target="_blank" class="card-title">Mabuyu and Achari</a>
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
                                    <img src="images\shorts.jpg" width="370" height="270" loading="lazy" alt="Basketball" class="img-cover">
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
                                        <a href="signup.php" target="_blank" class="card-title">Quality Sweatshorts</a>
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
                                    <img src="images\pouches.jpg" width="370" height="270" loading="lazy" alt="Hiking | Nature walk" class="img-cover">
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
                                        <a href="signup.php" target="_blank" class="card-title">Stylish Pencil Pouches</a>
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
                                    <img src="images\leather.jpg" width="370" height="270" loading="lazy" alt="Feminist" class="img-cover">
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
                                        <a href="signup.php" target="_blank" class="card-title">Quality Leather Strap Bag</a>
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
                                    <img src="images\shoes.jpg" width="370" height="270" loading="lazy" alt="Gaming" class="img-cover">
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
                                        <a href="signup.php" target="_blank" class="card-title">Low-top Jordan 1's</a>
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
                                    <img src="images\laptop.jpg" width="370" height="270" loading="lazy" alt="Technology" class="img-cover">
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
                                        <a href="signup.php" target="_blank" class="card-title">Laptop Backpack</a>
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


            <!-- EVENTS SECTION -->

            <section class="section event" id="events" aria-label="event">
                <div class="container">

                    <p class="section-subtitle">Events</p>

                    <h2 class="h2 section-title">Upcoming School Events</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="images\women.jpg" width="370" height="250" loading="lazy" alt="Volunteering Group 1 started an initiative of keeping the compound around where they live clean." class="img-cover">
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

                                    <a href="signup.php" class="btn-link" target="_blank">
                                        <span class="span">Read More</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="images\cybersecurity.jpg" width="370" height="250" loading="lazy" alt="Female Soccer Group2 Tournament" class="img-cover">
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

                                    <a href="signup.php" class="btn-link" target="_blank">
                                        <span class="span">Read More</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="event-card">

                                <figure class="card-banner">
                                    <img src="images\journalism.jpg" width="370" height="250" loading="lazy" alt="Technology Group 2 Organised a meet-up where they were able to launch their new start-up." class="img-cover">
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

                                    <a href="signup.php" class="btn-link" target="_blank">
                                        <span class="span">Read More</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>




            <!-- TESTIMONIALS SECTION -->

            <section class="section testimonials" id="testimonials" aria-label="testimonials">
                <div class="container">

                    <p class="section-subtitle" id="testimonial-subtitle">Listen to what people say about us</p>

                    <h2 class="h2 section-title" id="testimonial-title">Testimonials</h2><br>

                    <div class="testimonial">
                        <div class="testimonial-text">
                            <div class="user-text active-text">
                                <i class="fas fa-quote-left"></i>
                                <p>
                                    I am able to assosiate with other like-minded individuals with a passion in technlogy, we are able to
                                    plan meet-ups and collaborate in projects. I actually started my own start up "Pamba" by collaborating with a like-minded ally from a different university. 
                                </p>
                                <span>Tony Myers, University of Nairobi</span>
                            </div>
                            <div class="user-text">
                                <i class="fas fa-quote-left"></i>
                                <p>
                                    The app allows any beginner to gain access to insightful material regarding his/her niche
                                    through guidance from other experienced students in that field. This was very helpful to me.
                                </p>
                                <span>Levi Waima, Daystar University</span>
                            </div>
                            <div class="user-text">
                                <i class="fas fa-quote-left"></i>
                                <p>
                                    The fact that I can communicate and make friends easily with students from other universities and learn a thing or two
                                    from them without having to physical approach them (anxiety kicking in) is so cool and outstanding about this app.
                                </p>
                                <span>Jamie Kline, Riara University</span>
                            </div>
                            <div class="user-text">
                                <i class="fas fa-quote-left"></i>
                                <p>
                                    I am able to have a platform where I can sell my buisness idea of quality pouches with fellow students and other students from different universities! 
                                    This has definetly enabled me to push my brand and gain even more customers.
                                </p>
                                <span>Sandra Minda, Catholic University</span>
                            </div>
                            <div class="user-text">
                                <i class="fas fa-quote-left"></i>
                                <p>
                                    I like that I am able to get acess to events of other universities I have always wanted to be at with a verified ticket and meet influencial people in the same
                                    space which makes me even more passionate.
                                </p>
                                <span>Rosy Lynn, Cooperative University</span>
                            </div>
                        </div>
                        <div class="testimonial-pic">
                            <img src="testimonials/tony.jpg" class="user-pic active-pic" onclick="showReview()">
                            <img src="testimonials/levi.jpg" class="user-pic" onclick="showReview()">
                            <img src="testimonials/jamie.jpg" class="user-pic" onclick="showReview()">
                            <img src="testimonials/sandra.jpg" class="user-pic" onclick="showReview()">
                            <img src="testimonials/rosy.jpg" class="user-pic" onclick="showReview()">
                        </div>
                    </div>
                </div>
                </div>
            </section>




           <!-- FOOTER SECTION -->

           <footer class="footer" id="contact">
                <div class="container">

                    <div class="footer-top">

                        <div class="footer-brand">

                            <a href="#home" class="logo">Linga-Chuo</a>

                            <p class="section-text">
                                Ling-chuo aims to build meaningful connections amongg university students from different institutions and help discover others with similar interests.
                                Through this people are able to create long-lasting connections and influence each other positivly in different aspects.
                            </p>

                            <ul class="social-list">

                                <li>
                                    <a href="#" class="social-link" target="_blank">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                </li>


                                <li>
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                </li>

                            </ul>

                        </div>

                        <ul class="footer-list">

                            <li>
                                <p class="footer-list-title">Explore</p>
                            </li>

                            <li>
                                <a href="fund.php" class="footer-link" target="_blank">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Help Fund Us</span>
                                </a>
                            </li>

                            <li>
                                <a href="faqs.php" class="footer-link" target="_blank">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">FAQs</span>
                                </a>
                            </li>

                            <li>
                                <a href="premium.php" class="footer-link" target="_blank">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Why Premium?</span>
                                </a>
                            </li>

                            <li>
                                <a href="team.php" class="footer-link" target="_blank">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Meet the Team</span>
                                </a>
                            </li>

                        </ul>

                        <ul class="footer-list">

                            <li>
                                <p class="footer-list-title">Quick Links</p>
                            </li>

                            <li>
                                <a href="#home" class="footer-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="#about" class="footer-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">About Us</span>
                                </a>
                            </li>

                            <li>
                                <a href="#communities" class="footer-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Communities</span>
                                </a>
                            </li>

                            <li>
                                <a href="#goods" class="footer-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Goods</span>
                                </a>
                            </li>

                            <li>
                                <a href="#events" class="footer-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Events</span>
                                </a>
                            </li>

                            <li>
                                <a href="#testimonials" class="footer-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">Testimonials</span>
                                </a>
                            </li>

                        </ul>

                        <ul class="footer-list">

                            <li>
                                <p class="footer-list-title">Contact Info</p>
                            </li>

                            <li class="footer-item">
                                <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                                <address class="footer-link">
                                    Nairobi, Kenya
                                </address>
                            </li>

                            <li class="footer-item">
                                <ion-icon name="call" aria-hidden="true"></ion-icon>

                                <a href="tel:+254 746 795 376" class="footer-link">+(254) 746 795 376</a>
                            </li>

                            <li class="footer-item">
                                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                                <a href="mailto:lingachuo@gmail.com" class="footer-link">lingachuo@gmail.com</a>
                            </li>

                        </ul>

                    </div>

                    <div class="footer-bottom">
                        <p class="copyright">
                            Copyright 2023 Linga-Chuo. All Rights Reserved by <a href="https://www.linkedin.com/in/mitchelle-wasike-62b99123b/" class="copyright-link" target="_blank">Mitchelle Wasike</a>
                        </p>
                    </div>

                </div>
            </footer>





            <!-- BACK TO TOP -->

            <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
                <ion-icon name="arrow-up"></ion-icon>
            </a>





            <!---custom js link-->
            <script src="js/script.js" defer></script>

            <!---ionicon link-->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>