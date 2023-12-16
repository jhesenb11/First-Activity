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

<h2 class="styled-heading">CUSTOMER</h2>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="assets/background/asisticon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("assets/background/officeback.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .navbar-brand img {
            height: 40px; /* Adjust the height as needed */
            width: auto; /* Preserve aspect ratio */
        }
    </style>
</head>

<body>
   

     <div class="container p-3 my-3 bg-light text-dark">
        <form action="addcust2.php" method="post">
            <div class="form-group">
                <label for="CUST_CODE">CUSTOMER CODE</label>
                <input type="text" class="form-control" id="CUST_CODE" name="CUST_CODE" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="CUST_NAME">CUSTOMER NAME</label>
                <input type="text" class="form-control" id="CUST_NAME" name="CUST_NAME" placeholder="" required>
            </div>
              <div class="form-group">
                <label for="CUST_CITY">CUSTOMER CITY</label>
                <input type="CUST_CITY" class="form-control" id="CUST_CITY" name="CUST_CITY" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="WORKING_AREA">WORKING AREA</label>
                <input type="WORKING_AREA" class="form-control" id="WORKING_AREA" name="WORKING_AREA" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="CUST_COUNTRY">CUSTOMER COUNTRY</label>
                <input type="text" class="form-control" id="CUST_COUNTRY" name="CUST_COUNTRY" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="GRADE">GRADE</label>
                <input type="tel" class="form-control" id="GRADE" name="GRADE" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="OPENING_AMT">OPENING AMOUNT</label>
                <input type="text" class="form-control" id="OPENING_AMT" name="OPENING_AMT" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="RECEIVE_AMT">RECEIVE_AMT AMOUNT</label>
                <input type="text" class="form-control" id="RECEIVE_AMT" name="RECEIVE_AMT" placeholder="" required>
            </div>
            
            <div class="form-group">
                <label for="PAYMENT_AMT">PAYMENT_AMT AMOUNT</label>
                <input type="text" class="form-control" id="PAYMENT_AMT" name="PAYMENT_AMT" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="OUTSTANDING_AMT">OUTSTANDING AMOUNT</label>
                <input type="text" class="form-control" id="OUTSTANDING_AMT" name="OUTSTANDING_AMT" placeholder="" required>
            </div>
    
            <div class="form-group">
                <label for="PHONE_NO">PHONE NO</label>
                <input type="text" class="form-control" id="PHONE_NO" name="PHONE_NO" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="AGENT_CODE">AGENT_CODE</label>
                <input type="text" class="form-control" id="AGENT_CODE" name="AGENT_CODE" placeholder="" required>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    <script src="assets/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
