<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3>Registration</h3>
        </div>
        <div class="card-body">
          <!-- Registration Form -->
          <form action="process.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
              </div>
              <div class="form-group col-md-6">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="state">Select State:</label>
                <select id="state" class="form-control" name="state" required>
                  <!-- Add your state options here -->
                  <option value="Select State">Select State</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Zamfara">Zamfara</option>
                  <!-- <option value="state2">State2</option> -->
                  <!-- Add more options as needed -->
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="form-group col-md-6">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
              </div>
            </div>
            <button type="submit" class="btn btn-success w-50 d-block m-auto">Register</button>
          </form>
          <div class="mt-3 text-right">
            <p>Already have an account? <a href="login.php">Login here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional, if you want to use Bootstrap's JavaScript features) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
