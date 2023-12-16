
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

$AGENT_CODE = $_POST['AGENT_CODE'];
// Retrieve data from the HTML form
$AGENT_NAME = $_POST['AGENT_NAME'];
$WORKING_AREA = $_POST['WORKING_AREA'];
$COMMISSION = $_POST['COMMISSION'];
$PHONE_NO = $_POST['PHONE_NO'];
$COUNTRY = $_POST['COUNTRY'];


echo '<div class="container">';

echo ' <div class="alert alert-success" role="alert">';

echo "<h4>AGENT RECORD:</h4>";
echo "AGENT_CODE: " . $AGENT_CODE . "<br>";
echo "AGENT_NAME: " . $AGENT_NAME . "<br>";
echo "WORKING_AREA: " . $WORKING_AREA . "<br>";
echo "COMMISSION: " . $COMMISSION . "<br>";
echo "PHONE_NO: " . $PHONE_NO . "<br>";
echo "COUNTRY: " . $COUNTRY . "<br>";



// Prepare and execute the SQL UPDATE query
$sql = "UPDATE agents
        SET AGENT_NAME = '$AGENT_NAME',
            WORKING_AREA = '$WORKING_AREA',
            COMMISSION = '$COMMISSION',
            PHONE_NO = '$PHONE_NO',
            COUNTRY = '$COUNTRY'
            
        WHERE AGENT_CODE = '$AGENT_CODE'";

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
