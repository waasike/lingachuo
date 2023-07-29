<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "headers/header1.php"; ?>

<body>

<div class="wrapper">
    <section class="form signup">
      <header>Linga-Pawa Online Test</header>
      <form>
           <img class="test-image" src="images/online.png" width="250px">
        <h3 class="test-header">Linga-Pawa Online Test is a Online Test run by "typescript" to unable you to know which activity suits you best. </h3>
      </form>
      <button class="test-button" data-tf-slider="TWtwYUzS" data-tf-width="550" data-tf-iframe-props="title=Linga-Pawa Online Test" data-tf-medium="snippet">Take the Test</button><script src="//embed.typeform.com/next/embed.js"></script>
    </section>
  </div>
</body>