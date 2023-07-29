<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "headers/header4.php"; ?>

<body>
    <div class="box">
        <p class="heading">FAQs</p>
        <div class="faqs">
           <details>
              <summary>What is Linga-Chuo?</summary>
              <p class="text">Linga-chuo is a project created intended to build great connections among university students within Kenya through similar interests.</p>
           </details>
           <details>
              <summary>How do I join a community?</summary>
              <p class="text">To be able to join a community, you need to; <br>
                • Sign up and create a student profile in the Linga-Chuo signup section.<br>
                • Browse through the available communities and send a join request to the creator of the community.<br>
                • Wait for approval from the creator of the community.
            </p>
           </details>
           <details>
              <summary>Can I use Linga-Chuo if I'm not a university student?</summary>
              <p class="text">Currently, Linga-Chuo is exculsively available for university students. You need a valid university email address to register and participate.
            </p>
           </details>
           <details>
            <summary>How can I find events or activities near my university?</summary>
            <p class="text">Once you're logged in, you can find events or activites based around your university. The application will display a list of upcoming events near your university.</p>
         </details>
         <details>
            <summary>Can I chat with students from other universities on Linga-Chuo?</summary>
            <p class="text">Yes,<br> Linga-Chuo provides communication features that allow you to chat and interact with students fro different universities.</p>
         </details>
         <details>
            <summary>How can I create my own community/ event on Linga-Chuo?</summary>
            <p class="text">If you're an event organizer or you want to create a community you will need to subscribe to the premium version of Linga-Chuo and reach out via email to the Linga-Chuo team for further verification. </p>
         </details>
        </div>
     </div>

    <!-- <div class="container">
        <h1><u>Contact Us</u></h1>
        <p class="questions">Have any more un-answered questions? Contact Us</p>
        <form action="mail.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div> -->
</body>
</html>


