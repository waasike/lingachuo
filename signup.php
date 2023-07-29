<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "headers/header2.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Linga-Pawa Signup</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input" style="width:200px;">
          <label for="school">School:</label>

          <select  id="custom-select" name="school">
          <option value="0">Select Your University: </option>
                        <option value="riara">Riara University</option>
                        <option value="strathmore">Strathmore University</option>
                        <option value="daystar">Daystar University</option>
                        <option value="uon">University of Nairobi</option>
                        <option value="tuk">Technical University of Kenya</option>
                        <option value="cuea">Catholic University</option>
                        <option value="coop">Cooperative University</option>
                        <option value="mku">Mount Kenya University</option>
                        <option value="jkuat">Jomo Kenyatta University</option>
                        <option value="usiu">United States International University</option>
                        <option value="kabarack">Kabarack University</option>
                        <option value="kca">KCA University</option>
                        <option value="zetech">Zetech University</option>
                        <option value="kemu">Kenya Methodist University</option>
                        <option value="stpaul">St. Pauls University</option>
                        <option value="boma">Boma Collage</option>
                        <option value="kmtc">Kenya Medical Training Collage</option>
          </select>
          </select>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Signup Now">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>