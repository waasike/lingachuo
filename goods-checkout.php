<?php include_once "headers/header2.php"; ?>

<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}

// creating an abstract class for Goods Checkout with common method signatures
abstract class AbstractGoodsCheckout {
    protected $conn;

    // a constructor to set the database connection
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // an abstract method to insert checkout data
    abstract public function insertCheckoutData($customerfname, $customerlname, $product, $customeremail);
}

// creating a concrete class 'GoodsCheckout' that extends 'AbstractGoodsCheckout'
class GoodsCheckout extends AbstractGoodsCheckout {

    // implementing the 'insertCheckoutData' method for GoodsCheckout
    public function insertCheckoutData($customerfname, $customerlname, $product, $customeremail) {
        // Generate a unique ID for the checkout data
        $unique_id = uniqid();

        // Prepare and execute the SQL query to insert data into the 'customers' table
        $stmt = $this->conn->prepare("INSERT INTO customers (unique_id, customerfname, customerlname, product, customeremail) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $unique_id, $customerfname, $customerlname, $product, $customeremail);
        $stmt->execute();

        // Return the executed statement
        return $stmt;
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // creating an instance of GoodsCheckout and pass the database connection
    $checkout = new GoodsCheckout($conn);

    // Get the form data
    $customerfname = $_POST["customerfname"];
    $customerlname = $_POST["customerlname"];
    $product = $_POST["product"];
    $customeremail = $_POST["customeremail"];

    // Insert the checkout data using the insertCheckoutData method
    $checkout->insertCheckoutData($customerfname, $customerlname, $product, $customeremail);
}
?>

<?php include_once "headers/header2.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Item Checkout</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="customerfname" placeholder="First name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="customerlname" placeholder="Last name" required>
                    </div>
                </div>
                <div class="field input" style="width:200px;">
                    <label for="product">Product:</label>
                    <select id="custom-select" name="product">
                        <option value="0">Select Your Product: </option>
                        <option value="mabuyu">Mabuyu and Achari</option>
                        <option value="sweatshorts">Quality Sweatshorts</option>
                        <option value="pencilpouches">Stylish Pencil Pouches</option>
                        <option value="leatherstrapbags">Quality Leather Strap Bags</option>
                        <option value="lowtopjordans">Low-top Jordan 1's</option>
                        <option value="laptopbackpacks">Laptop Backpacks</option>
                    </select>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="customeremail" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Phone Number</label>
                    <input type="tel" name="customerphoneno" placeholder="Enter Phone Number" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Place Order">
                </div>
            </form>
            <div class="link">Already placed an order? <a href="home.php">Back home</a></div>
        </section>
    </div>

    <script src="signup.js"></script>
</body>

</html>


<!-- EXPLANATION OF OOP CONCEPTS I USED -->

<!-- 1. Abstraction: I created an abstract class 'AbstractGoodsCheckout' that defines a common method 'insertCheckoutData' without
specifying its implementation. Therefore simplifying the complexity by breaking it down to smaller parts -->
<!-- 2. Inheritance: I created the class 'GoodsCheckout' that extends the abstract class 'AbstractGoodsCheckout' inheriting the abstract
method -->
<!-- 3. Encapsulation: I encapsulated the database connection inside the classs, ensuring that it is only accesible within
the class methods -->
<!-- 4. Polymorphism: Polymorphism was achieved through the common method 'insertCheckoutData'. The 'GoodsCheckout' class -->