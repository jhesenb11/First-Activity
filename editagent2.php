
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
    // Get the AGENT_CODE from the form
    $AGENT_CODE = $_POST['AGENT_CODE'];
	
    // SQL query to select a record by AGENT_CODE
    $sql = "SELECT AGENT_NAME, WORKING_AREA, COMMISSION, PHONE_NO, COUNTRY FROM agents WHERE AGENT_CODE = '$AGENT_CODE'";

    // Execute the query
    $result = $conn->query($sql);
	
    // Check if a record was found
    if ($result->num_rows > 0) {
        // Output data from the selected record
        while ($row = $result->fetch_assoc()) {
             $AGENT_NAME = $row['AGENT_NAME'];
             $WORKING_AREA = $row['WORKING_AREA'];
             $COMMISSION = $row['COMMISSION'];
             $PHONE_NO = $row['PHONE_NO'];
             $COUNTRY = $row['COUNTRY'];
			
        }
    } else {
        echo "<font style='color: red;'>No record found for CODE:  &nbsp;" .  $AGENT_CODE . "</font>";
    }
}
		
		
	?>	
		
        <form action="editagent3.php" method="post">
            <div class="form-group">
                <label for="AGENT_NAME">AGENT NAME</label>
                <input type="text" class="form-control" id="AGENT_NAME" name="AGENT_NAME" value="<?php echo $AGENT_NAME; ?>">
            </div>
            <div class="form-group">
                <label for="WORKING_AREA">WORKING AREA</label>
                <input type="text" class="form-control" id="WORKING_AREA" name="WORKING_AREA" value="<?php echo $WORKING_AREA; ?>">
            </div>
            <div class="form-group">
                <label for="COMMISSION">COMMISSION</label>
                <input type="text" class="form-control" id="COMMISSION" name="COMMISSION" value="<?php echo $COMMISSION; ?>">
            </div>
            <div class="form-group">
                <label for="PHONE_NO">PHONE</label>
                <input type="tel" class="form-control" id="PHONE_NO" name="PHONE_NO" value="<?php echo $PHONE_NO; ?>">
            </div>
            <div class="form-group">
                <label for="COUNTRY">COUNTRY</label>
                <input type="text" class="form-control" id="COUNTRY" name="COUNTRY" value="<?php echo $COUNTRY; ?>">
            </div>
           
			<input type="hidden" name="AGENT_CODE" value="<?php echo $AGENT_CODE; ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
