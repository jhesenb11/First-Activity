
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

$CUST_CODE = $_POST['CUST_CODE'];
// Retrieve data from the HTML form
$CUST_NAME = $_POST['CUST_NAME'];
$CUST_CITY = $_POST['CUST_CITY'];
$WORKING_AREA = $_POST['WORKING_AREA'];
$CUST_COUNTRY = $_POST['CUST_COUNTRY'];
$GRADE = $_POST['GRADE'];
$OPENING_AMT = $_POST['OPENING_AMT'];
$RECEIVE_AMT = $_POST['RECEIVE_AMT'];
$PAYMENT_AMT = $_POST['PAYMENT_AMT'];
$OUTSTANDING_AMT = $_POST['OUTSTANDING_AMT'];
$PHONE_NO = $_POST['PHONE_NO'];
$AGENT_CODE = $_POST['AGENT_CODE'];


echo '<div class="container">';

echo ' <div class="alert alert-success" role="alert">';

echo "<h4>CUSTOMER RECORD:</h4>";
echo "CUST_CODE: " . $CUST_CODE . "<br>";
echo "CUST_NAME: " . $CUST_NAME . "<br>";
echo "CUST_CITY: " . $CUST_CITY . "<br>";
echo "WORKING_AREA: " . $WORKING_AREA . "<br>";
echo "CUST_COUNTRY: " . $CUST_COUNTRY . "<br>";
echo "GRADE: " . $GRADE . "<br>";
echo "OPENING_AMT: " . $OPENING_AMT . "<br>";
echo "RECEIVE_AMT: " . $RECEIVE_AMT . "<br>";
echo "PAYMENT_AMT: " . $PAYMENT_AMT . "<br>";
echo "OUTSTANDING_AMT: " . $OUTSTANDING_AMT . "<br>";
echo "PHONE_NO: " . $PHONE_NO . "<br>";
echo "AGENT_CODE: " . $AGENT_CODE . "<br>";



// Prepare and execute the SQL UPDATE query
$sql = "UPDATE customer
        SET CUST_NAME = '$CUST_NAME',
          CUST_CITY = '$CUST_CITY',
			WORKING_AREA = '$WORKING_AREA',
            CUST_COUNTRY = '$CUST_COUNTRY',
			GRADE = '$GRADE',
            OPENING_AMT = '$OPENING_AMT',
            RECEIVE_AMT  = '$RECEIVE_AMT',
            PAYMENT_AMT  = '$PAYMENT_AMT',
            OUTSTANDING_AMT  = '$OUTSTANDING_AMT',
            PHONE_NO = '$PHONE_NO',
            AGENT_CODE = '$AGENT_CODE'
            
        WHERE CUST_CODE = '$CUST_CODE'";

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
