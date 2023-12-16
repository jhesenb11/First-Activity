
	<?php
	 
$servername = "localhost"; // Your MySQL server address
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "order"; // Name of the database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the ORD_NUM from the form
    $ORD_NUM = $_POST['ORD_NUM'];
	
    // SQL query to select a record by ORD_NUM
    $sql = "SELECT ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION FROM orders WHERE ORD_NUM = '$ORD_NUM'";

    // Execute the query
    $result = $conn->query($sql);
	
    // Check if a record was found
    if ($result->num_rows > 0) {
        // Output data from the selected record
        while ($row = $result->fetch_assoc()) {
             $ORD_AMOUNT = $row['ORD_AMOUNT'];
             $ADVANCE_AMOUNT = $row['ADVANCE_AMOUNT'];
             $ORD_DATE = $row['ORD_DATE'];
             $CUST_CODE = $row['CUST_CODE'];
             $AGENT_CODE= $row['AGENT_CODE'];
             $ORD_DESCRIPTION= $row['ORD_DESCRIPTION'];
			
        }
    } else {
        echo "<font style='color: red;'>No record found for ORDER NUMBER:  &nbsp;" .  $ORD_NUM . "</font>";
    }
}
		
		
	?>	
		
        <form action="editorder3.php" method="post">
            <div class="form-group">
                <label for="ORD_AMOUNT">ORDER AMOUNT</label>
                <input type="decimal" class="form-control" id="ORD_AMOUNT" name="ORD_AMOUNT" value="<?php echo $ORD_AMOUNTE; ?>">
            </div>
            <div class="form-group">
                <label for="ADVANCE_AMOUNT">ADVANCE AMOUNT</label>
                <input type="decimal" class="form-control" id="ADVANCE_AMOUNT" name="ADVANCE_AMOUNT" value="<?php echo $ADVANCE_AMOUNT; ?>">
            </div>
            <div class="form-group">
                <label for="ORD_DATE">ORDER DATE</label>
                <input type="date" class="form-control" id="ORD_DATE" name="ORD_DATE" value="<?php echo $ORD_DATE; ?>">
            </div>
            <div class="form-group">
                <label for="CUST_CODE">CUSTOMER CODE</label>
                <input type="text" class="form-control" id="CUST_CODE" name="CUST_CODE" value="<?php echo $CUST_CODE; ?>">
            </div>
            <div class="form-group">
                <label for="AGENT_CODE">AGENT_CODE</label>
                <input type="text" class="form-control" id="AGENT_CODE" name="AGENT_CODE" value="<?php echo $AGENT_CODE; ?>">
            </div>
             <div class="form-group">
                <label for="ORD_DESCRIPTION">ORDER DESCRIPTION</label>
                <input type="text" class="form-control" id="ORD_DESCRIPTION" name="ORD_DESCRIPTION" value="<?php echo $ORD_DESCRIPTIONE; ?>">
            </div>
           
			<input type="hidden" name="ORD_NUM" value="<?php echo $ORD_NUM; ?>">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>

    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
