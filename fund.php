<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "headers/header3.php"; ?>

<body>
    <div class="container">
      <header>
        <span class="logo">
          <img src="images/mpesa1.png" alt="" />
          <h5>M-PESA ACCOUNT</h5>
        </span>
        <img src="images/chip.png" alt="" class="chip" />
      </header>

      <div class="card-details">
        <div class="name-number">
          <h6>M-PESA Number</h6>
          <h5 class="number">(+254) 746 795 376</h5>
          <h5 class="name">MITCHELLE WASIKE</h5>
        </div>
        <div class="valid-date">
          <h6>Geered Towards:</h6>
          <h5>Technical Improvements</h5>
        </div>
      </div>
    </div>
  </body>
</html>
