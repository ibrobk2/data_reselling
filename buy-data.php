<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Data</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5 w-50">
    <h1>Buy Data</h1>
    <form action="data.php" method="post">
    <!-- Select Network -->
    <div class="form-group">
      <label for="selectNetwork">Select Network:</label>
      <select id="selectNetwork" class="form-control" name="network">
        <option value="1">MTN</option>
        <option value="AIRTEL">AIRTEL</option>
        <option value="GLO">GLO</option>
        <option value="9MOBILE">9MOBILE</option>
      </select>
    </div>
    
    <!-- Select Data Type -->
    <div class="form-group">
      <label for="selectDataType">Select Data Type:</label>
      <select id="selectDataType" class="form-control" name="type">
        <option value="SME">SME</option>
        <option value="corporate">Corporate</option>
        <option value="gifting">Gifting</option>
      </select>
    </div>
    
    <!-- Data Plans -->
    <div class="form-group">
      <label for="selectDataPlan">Select Data Plan:</label>
      <select id="selectDataPlan" class="form-control" name="plan">
        <option value="plan1">Select Data Plan</option>
        <option value="plan1">500MB</option>
        <option value="166">1GB</option>
        <option value="plan3">2GB</option>
      </select>
    </div>

    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="number" name="phone" id="phone" class="form-control">
    </div>
    
    <!-- Amount -->
    <div class="form-group">
      <label for="amount">Amount:</label>
      <input type="text" id="amount" class="form-control" readonly>
    </div>
    
    <!-- Buy Button -->
    <button id="buyButton" class="btn btn-primary" name="btn-data">Buy Data</button>
  </form>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap JS (optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JavaScript -->
  <script>
    $(document).ready(function() {
      // Define data plans
      const dataPlans = {
        'network1': {
          'sme': {
            'plan1': 100,
            'plan2': 150,
            'plan3': 200
          },
          'corporate': {
            'plan1': 200,
            'plan2': 300,
            'plan3': 400
          },
          'gifting': {
            'plan1': 50,
            'plan2': 75,
            'plan3': 100
          }
        },
        'network2': {
          // Define data plans for network 2
        },
        'network3': {
          // Define data plans for network 3
        }
      };

      // Update amount based on selected options
      function updateAmount() {
        const selectedNetwork = $('#selectNetwork').val();
        const selectedDataType = $('#selectDataType').val();
        const selectedDataPlan = $('#selectDataPlan').val();

        const amount = dataPlans[selectedNetwork][selectedDataType][selectedDataPlan];
        $('#amount').val(amount);
      }

      // Call updateAmount when any select option changes
      $('#selectNetwork, #selectDataType, #selectDataPlan').
