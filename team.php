<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "headers/header5.php"; ?>

<body>
    <p class="section-subtitle" id="testimonial-subtitle">Meet Our Team</p>

    <h2 class="h2 section-title" id="testimonial-title">The Team</h2>
    
    <section class="mentors">

    <div class="card">
        <div class="card-image">
            <img src="team/mitchelle.jpg" alt="Profile image">
        </div>
        <p class="name">Mitchelle Wasike</p>
        <p>CEO, Software Developer</p>
        <p></p>
        <div class="socials">
        <a href="https://www.instagram.com/waasike/" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="https://twitter.com/waasikee" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="https://www.linkedin.com/in/mitchelle-wasike-62b99123b/" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>Fronted Software Developer</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>Backend Software Developer</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>UI/UX Designer</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>
    
    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>Data Analyst</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>Data Scientist</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>Marketing Manager</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>Partnership Lead</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="" alt="Profile image">
        </div>
        <p class="name"></p>
        <p>Finance Manager</p>
        <p></p>
        <div class="socials">
        <a href="" target="_blank"><button class="instagram"><i class="fab fa-instagram"></i></button></a>
        <a href="" target="_blank"><button class="twitter"><i class="fab fa-twitter"></i></button></a>
        <a href="" target="_blank"><button class="linkedin"><i class="fab fa-linkedin"></i></button></a>
        </div>
    </div>

    </section>
</body>
</html>