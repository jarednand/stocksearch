<!DOCTYPE html>
<html>
<head>
  <title> Stocks </title>

  <!-- Bootstrap Stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Custom Stylesheet -->
  <link rel = "stylesheet" type = "text/css" href = "css/home.min.css">

</head>
<body>

<!-- Main Container -->
<div class = "container home">

  <!-- Logo -->
  <div class = "row">
    <div class = "col-sm-12 center logo">
      <a href = "index.php"> <h1> Stock <span> Search </span> </h1> </a>
    </div>
  </div>

  <!-- Search Form -->
  <div class = "row">
    <div class = "col-sm-12 center">
      <form class = "form-inline" id = "searchForm" action = "search.php" method = "get" onsubmit = "return validateForm()">
        <div class = "form-group">
          <input type = "text" class = "form-control input-lg" placeholder = "Ex: AAPL, NVDA, etc." id = "symbol" name = "symbol">
        </div>
        <button type = "submit" class = "btn btn-success btn-lg" id = "searchButton">Search</button>
      </form>
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
<script src = "js/home.js"></script>

</body>
</html>
