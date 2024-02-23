<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Reselling Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <style>
    .glass-border {
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <span class="navbar-brand mb-0 h1">User Dashboard</span>
  <div class="navbar-nav ml-auto">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> Username
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Settings</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Logout</a>
      </div>
    </div>
  </div>
</nav>

<br><br><br>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4 glass-border">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-mobile-alt"></i> Buy Airtime</h5>
          <p class="card-text">Purchase airtime for your phone.</p>
          <a href="buy-airtime.php" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 glass-border">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-wifi"></i> Buy Data</h5>
          <p class="card-text">Get data bundles for internet access.</p>
          <a href="buy-data.php" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 glass-border">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-tv"></i> Cable Subscriptions</h5>
          <p class="card-text">Subscribe to cable TV services.</p>
          <a href="#" class="btn btn-primary" onclick="alert('Comming Soon...!');">Subscribe Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4 glass-border">
        <div class="card-body">
          <h5 class="card-title"><i class="fas fa-bolt"></i> Electricity Bill</h5>
          <p class="card-text">Pay your electricity bill.</p>
          <a href="#" class="btn btn-primary" onclick="alert('Comming Soon...!');">Pay Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
