<link href="css/web20.css" rel="stylesheet" type="text/css" />
<style>

a {
  text-decoration: none; /* Remove underline */
  color: inherit; /* Inherit text color from parent */
}

/* Style for the button link */
.button-link {
  display: inline-block; /* Make it a block-level element */
  padding: 10px 20px; /* Adjust padding as needed */
  background-color: #3498db; /* Set background color */
  color: #fff; /* Set text color */
  border: 1px solid #2980b9; /* Add a border */
  border-radius: 5px; /* Add border-radius for rounded corners */
  transition: background-color 0.3s ease; /* Add a smooth transition for background color */
}

/* Hover effect */
.button-link:hover {
  background-color: #2980b9; /* Change background color on hover */
}

.styled-heading {
  background-color: #3498db; /* Set the background color */
  color: #fff; /* Set the text color */
  padding: 10px; /* Add padding for spacing */
  border-radius: 5px; /* Add border-radius for rounded corners */
}
</style>

<h2 class="styled-heading">ORDERS</h2>

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

// Retrieve data from the HTML form
$ORD_NUM = $_POST['ORD_NUM'];
$ORD_AMOUNT = $_POST['ORD_AMOUNT'];
$ADVANCE_AMOUNT= $_POST['ADVANCE_AMOUNT'];
$ORD_DATE = $_POST['ORD_DATE'];
$CUST_CODE = $_POST['CUST_CODE'];
$AGENT_CODE = $_POST['AGENT_CODE'];
$ORD_DESCRIPTION = $_POST['ORD_DESCRIPTION'];


echo "ORD_NUM: " . $ORD_NUM . "<br>";
echo "ORD_AMOUNT: " . $ORD_AMOUNT . "<br>";
echo "ADVANCE_AMOUNT: " . $ADVANCE_AMOUNT . "<br>";
echo "ORD_DATE: " . $ORD_DATE . "<br>";
echo "CUST_CODE: " . $CUST_CODE . "<br>";
echo "AGENT_CODE: " . $AGENT_CODE . "<br>";
echo "ORD_DESCRIPTION: " . $ORD_DESCRIPTION . "<br>";




// Insert the data into the database
$sql = "INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) VALUES ('$ORD_NUM', '$ORD_AMOUNT', '$ADVANCE_AMOUNT', '$ORD_DATE', '$CUST_CODE', '$AGENT_CODE', '$ORD_DESCRIPTION')";

if ($conn->query($sql) === TRUE) {
    echo "Agents submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
