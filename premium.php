<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "headers/header6.php"; ?>

<body>
        <section class="card container grid">
            <div class="card__container grid">
                <!-- card1 -->
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">$</span>0
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="images/free-coin.png" alt="" class="card__header-img">
                        </div>
                        
                        <span class="card__header-subtitle">Free plan</span>
                        <h1 class="card__header-title">Basic Access</h1>
                    </header>
                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Access to join communities and view community chats.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Basic chat functionality to connect with students from other universities.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">View events available in different universities and RSVP.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Browse goods listed by other students for sale and purchase</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Edit profile feature</p>
                        </li>
                    </ul>
    
                    <!-- <button class="card__button">Choose this plan</button> -->
                </article>
    
<!-- card2 -->
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">$</span>5
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="images/pro-coin.png" alt="" class="card__header-img">
                        </div>
    
                        <span class="card__header-subtitle">Popular Plan</span>
                        <h1 class="card__header-title">Enhanced Experience</h1>
                    </header>
                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Full access to communities, including ability to create and admin groups. </p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Expanded chat features, including group chat options and file sharing</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Enhanced event RSVP options, i.e VIP seating or early bird tickets.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Access to premium goods and items for sale, with exclusive discounts for subscribers.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Ability to post personal goods | items for sale.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Ability to create a financial account and withdraw generated good funds at a fee.</p>
                        </li>
                    </ul>
    
                    <!-- <button class="card__button">Choose this plan</button> -->
                </article>
    
<!-- card3 -->
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">$</span>13
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="images/enterprise-coin.png" alt="" class="card__header-img">
                        </div>
    
                        <span class="card__header-subtitle">Proffesional Plan</span>
                        <h1 class="card__header-title">Premium Features</h1>
                    </header>
                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Exclusive access to private communities with well-known leaders in the field.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Advanced chat features, including voice and video calls for remote collaboration.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Ability to create and manage personal event listings for events.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Reduced withdrawal fee for generated good funds.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Chance to be featured in our user testimonials on our website | social media platforms.</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-asterisk card__list-icon"></i>
                            <p class="card__list-description">Access to ALL features in Free and Popular Plan.</p>
                        </li>
                    </ul>
    
                    <!-- <button class="card__button">Choose this plan</button> -->
                </article>
            </div>
        </section>
    </body>
</html>