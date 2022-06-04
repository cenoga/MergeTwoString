<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Merge Two String in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Merge Two String in PHP</h1>
      </div>
          <div class="card-body">
          <form method="post">
            <label>String 1</label>
            <input type="text" name="str1" class="form-control"><br>
            <label>String 2</label>
            <input type="text" name="str2" class="form-control"><br>
            <input type="submit" name="submit" class="btn btn-primary" value="Merge String">
          </form><br>
          <?php
          if($_POST){
            $str1 = $_POST['str1'];
            $str2 = $_POST['str2'];
            $new_str = $str1.' '.$str2;
            echo "<h4>Merge String is: ".$new_str."</h4>";
          }
          ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>