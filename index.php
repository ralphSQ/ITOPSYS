<html>

<head>
  <title>ITOPSYS</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="overlay">
  <div class="valign-wrapper" id="box">
    <div class="container">
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <h3 class="center-align white-text weight-300">CPU Scheduling Calculator</h3>
          <p class="center-align"><i class="material-icons large white-text">keyboard</i></p>
          <form action="input_processes.php" method="get">
          <div class="row">
            <div class="input-field col s12 m4 offset-m4">
              <label for="processes">Number of Processes</label>
              <input type="number" name="processes" id="processes" class="validate white-text" required>
            </div>
          </div>
          <div class="row">
            <div class="col s12 center-align">
              <button class="btn waves-effect waves-light green accent-4" type="submit">
                <i class="material-icons white-text">done_outline</i>
              </button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
