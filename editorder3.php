
   <?php
     
$servername = "localhost"; // Your MySQL server address
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "order"; // Name of the database
 
// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ORD_NUM = $_POST['ORD_NUM'];
// Retrieve data from the HTML form
$ORD_AMOUNT = $_POST['ORD_AMOUNT'];
$ADVANCE_AMOUNT = $_POST['ADVANCE_AMOUNT'];
$ORD_DATE = $_POST['ORD_DATE'];
$CUST_CODE= $_POST['CUST_CODE'];
$AGENT_CODE = $_POST['AGENT_CODE'];
$ORD_DESCRIPTION = $_POST['ORD_DESCRIPTION'];


echo '<div class="container">';

echo ' <div class="alert alert-success" role="alert">';

echo "<h4>ORDER RECORD:</h4>";
echo "ORD_NUM: " . $ORD_NUM . "<br>";
echo "ORD_AMOUNT: " . $ORD_AMOUNT . "<br>";
echo "ADVANCE_AMOUNT: " . $ADVANCE_AMOUNT . "<br>";
echo "ORD_DATE: " . $ORD_DATE . "<br>";
echo "CUST_CODE: " . $CUST_CODE . "<br>";
echo "AGENT_CODE: " . $AGENT_CODE . "<br>";
echo "ORD_DESCRIPTION: " . $ORD_DESCRIPTION . "<br>";



// Prepare and execute the SQL UPDATE query
$sql = "UPDATE orders
        SET ORD_AMOUNT = '$ORD_AMOUNT',
            ADVANCE_AMOUNT = '$ADVANCE_AMOUNT',
            ORD_DATE = '$ORD_DATE',
            CUST_CODE = '$CUST_CODE',
            AGENT_CODE= '$AGENT_CODE', 
            ORD_DESCRIPTION= '$ORD_DESCRIPTION' WHERE ORD_NUM = '$ORD_NUM'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

echo '</div>';
echo '</div>';

// Close the database connection
$conn->close();







   ?>

   


    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
