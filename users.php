<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "headers/header2.php"; ?>
<body>

<section class="wrapperq-section">

<a href="home.php" class="btn btn-primary">
<ion-icon name="arrow-back-outline" aria-hidden="true"></ion-icon>
<span class="span">Back to home page</span>
</a>
</section>

  <div class="wrapper">

    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select a student to chat with</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <h2 class="group-name">Linga-Chuo Members.</h2><br>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <!-- <section class="wrapperq-section">

  <a href="" class="btn btn-primary" target="_blank">
  <span class="span">Back to home page</span>
  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
  </a> -->
    
  <!-- <div class="wrapperq">
      <header>Quote of the Day</header>
      <div class="content">
        <div class="quote-area">
          <i class="fas fa-quote-left"></i>
          <p class="quote">Never give up because you never know if the next try is going to be the one that works.</p>
          <i class="fas fa-quote-right"></i>
        </div>
        <div class="author">
          <span>__</span>
          <span class="name">Mary Kay Ash</span>
        </div>
      </div>
      <div class="buttons">
        <div class="features">
          <ul>
            <li class="speech"><i class="fas fa-volume-up"></i></li>
            <li class="copy"><i class="fas fa-copy"></i></li>
            <li class="twitter"><i class="fab fa-twitter"></i></li>
          </ul>
          <button class="new-quotes">New Quote</button>
        </div>
      </div>
    </div> -->
<!-- 
  </section> -->

 
  
  <script src="javascript/users.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>