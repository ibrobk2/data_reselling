<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Airtime</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5 w-50">
    <h1>Buy Airtime</h1>
    <form action="airtime.php" method="post">
    <!-- Select Network -->
    <div class="form-group">
      <label for="selectNetwork">Select Network:</label>
      <select id="selectNetwork" class="form-control">
        <option value="MTN">MTN</option>
        <option value="AIRTEL">AIRTEL</option>
        <option value="GLO">GLO</option>
        <option value="9MOBILE">9MOBILE</option>
      </select>
    </div>
    
    <!-- Phone Number -->
    <div class="form-group">
      <label for="phoneNumber">Phone Number:</label>
      <input type="text" id="phoneNumber" class="form-control">
    </div>
    
    <!-- Amount -->
    <div class="form-group">
      <label for="amount">Amount:</label>
      <input type="text" id="amount" class="form-control">
    </div>
    
    <!-- Buy Button -->
    <button id="buyButton" class="btn btn-primary">Buy Airtime</button>
  </div>
  </form>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap JS (optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JavaScript -->
  <script>
    $(document).ready(function() {
      // Buy airtime button click event
      $('#buyButton').click(function() {
        const network = $('#selectNetwork').val();
        const phoneNumber = $('#phoneNumber').val();
        const amount = $('#amount').val();

        // Perform buy airtime action (e.g., send request to server)
        console.log(`Buying ${network} airtime for ${phoneNumber}. Amount: $${amount}`);
      });
    });
  </script>
</body>
</html>
