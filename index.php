<?php 
require 'somefile.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css">
  <style>
    .text-mujibur {
      color: green;
    }
  </style>
</head>
<body class="bg-info">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 m-auto">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center text-mujibur">Add people</h2>
          </div>
          <div class="card-body">
            <?php if (!empty($message)) : ?>
            <div class="alert alert-success">
              <p><?php echo $message; ?></p>
            </div>
          <?php endif; ?>
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" required>
              </div>
              <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Submit</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    
  </div>
</body>
</html>