<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button Link Example</title>
  <style>
    /* Style the button */
    .button {
      display: inline-block;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
      border: 1px solid #3498db;
      color: #3498db;
      background-color: #fff;
      border-radius: 5px;
    }

    /* Hover effect */
    .button:hover {
      background-color: #3498db;
      color: #fff;
    }
  </style>
</head>
<body>


</body>
</html>
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
$CUST_CODE = $_POST['CUST_CODE'];
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


echo "<h2>CUSTOMER:</h2>";
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




// Insert the data into the database
$sql = "INSERT INTO customer (CUST_CODE,  CUST_NAME, CUST_CITY,  WORKING_AREA, CUST_COUNTRY, GRADE, OPENING_AMT, RECEIVE_AMT, PAYMENT_AMT, OUTSTANDING_AMT,  PHONE_NO,  AGENT_CODE) VALUES ('$CUST_CODE', '$CUST_NAME', '$CUST_CITY', '$WORKING_AREA', '$CUST_COUNTRY', '$GRADE', '$OPENING_AMT', '$RECEIVE_AMT', '$PAYMENT_AMT', '$OUTSTANDING_AMT', '$PHONE_NO', '$AGENT_CODE')";

if ($conn->query($sql) === TRUE) {
    echo "Customer submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
