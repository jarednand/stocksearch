<?php

  //Get stock symbol
  $symbol = "";
  if (isset($_GET["symbol"])){
    $symbol = $_GET["symbol"];
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title> Stocks </title>

  <!-- Bootstrap Stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Custom Stylesheet -->
  <link rel = "stylesheet" type = "text/css" href = "css/search.min.css">

</head>
<body>

<!-- Main Container -->
<div class = "container-fluid">

  <!-- Navigation -->
  <div class = "row navigation">
    <div class = "col-sm-4">
      <a href = "index.php"> <h2> Stock <span class = "green"> Search </span> </h2> </a>
    </div>
    <div class = "col-sm-8 right">
      <form class = "form-inline" id = "searchForm">
        <div class = "form-group">
          <input type = "text" class = "form-control" placeholder = "Ex: AAPL, NVDA, etc." value = "<?php echo $symbol; ?>" id = "symbol">
        </div>
        <button type = "submit" class = "btn btn-success" id = "searchButton">Search</button>
      </form>
    </div>
  </div>

  <!-- Content -->
  <div class = "row content">
    <div class = "col-sm-12">
      <canvas id ="line-chart"></canvas>
    </div>
  </div>

</div>

<!-- JQuery CDN -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap Scripts CDN -->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Charts.js CDN -->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js"></script>

<!-- Custom Scripts -->
<script src = "js/search.js"></script>

</body>
</html>
